<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção de Respostas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #110D24;
            color: white;
        }
        header {
            background-color: #2C2F33;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
        }
        .form-container {
            background-color: #2C2F33;
            padding: 20px;
            border-radius: 10px;
        }
        .form-container textarea {
            background-color: #1A1D21;
            color: white;
            border: 1px solid #2C2F33;
            border-radius: 5px;
            width: 100%;
            margin-top: 5px;
        }
        .form-container textarea.form-control-plaintext {
            resize: none; /* Impede a redimensão do textarea */
            background-color: #1A1D21; /* Cor de fundo consistente com o estilo */
            padding-left: 10px;
        }
        .form-container textarea:focus {
            background-color: #1A1D21; /* Garante a cor de fundo correta ao interagir */
            color: white; /* Mantém a cor do texto */
            border-color: #2C2F33; /* Mantém a borda correta ao interagir */
        }
        .category-section {
            background-color: #2C2F33; /* Cor de fundo para a categoria */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .category-title {
            background-color: #23272A; /* Cor de fundo do título da categoria */
            padding: 10px;
            border-radius: 5px;
            text-align: center; /* Centraliza o texto do título da categoria */
            color: #fff;
            margin-bottom: 15px;
        }
        .response-checkbox-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .response-checkbox-wrapper label {
            margin-bottom: 0; /* Remove a margem inferior do rótulo */
        }
        .response-checkbox-wrapper input[type="checkbox"] {
            margin-left: 10px; /* Margem à esquerda do checkbox */
        }
        .response-textarea-wrapper {
            margin-top: 10px;
        }
        .response-textarea-wrapper textarea {
            resize: none; /* Impede a redimensão do textarea */
            background-color: #1A1D21; /* Cor de fundo consistente com o estilo */
            color: white;
            border: 1px solid #2C2F33;
            border-radius: 5px;
        }
        .expected-response-wrapper {
            margin-top: 10px;
        }
        .expected-response-wrapper .response-textarea-wrapper {
            margin-bottom: 10px;
        }
        .expected-response-wrapper ul {
            list-style: none;
            padding-left: 0;
        }
        .expected-response-wrapper li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .expected-response-wrapper li::before {
            content: '•'; /* Adiciona uma bolinha */
            color: #007bff; /* Cor da bolinha */
            font-size: 20px; /* Tamanho da bolinha */
            margin-right: 10px;
        }
        .container-left {
            padding-left: 100px; /* Padding de 50px à esquerda */
        }
        .container-right {
            padding-right: 100px; /* Padding de 50px à direita */
        }
        .container-title {
            font-size: 24px; /* Tamanho da fonte do título */
            margin-bottom: 20px; /* Espaço abaixo do título */
            text-align: center; /* Centraliza o título */
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h2 class="mb-0">Correção de Respostas</h2>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 container-left">
                <!-- Container principal (3/4 da página) -->
                <div class="form-container">
                    <div class="container-title">Respostas do Aluno</div>
                    <?php
                    require_once "../model/conexao.php";
                    require_once "../model/functions.php";

                    $idUser = $_POST['idUser'];
                    $idGame = $_POST['idGame'];

                    echo '<form action="../model/save_corrections.php" method="post">';

                    $categories = array(
                        'Requisitos Funcionais' => 1,
                        'Requisitos Não Funcionais' => 2,
                        'Técnicas de levantamento de requisitos' => 3
                    );

                    $index = 0;

                    foreach ($categories as $categoryName => $category) {
                        $answers = search_answer($conectado, 1, $idGame, $idUser, $category);

                        echo '<div class="category-section">';
                        echo '<div class="category-title">' . $categoryName . '</div>';

                        echo '<div class="row">'; // Início da linha de respostas

                        foreach ($answers as $answer) {
                            echo '<div class="col-md-6 mb-3">';
                            
                            // Wrapper para resposta e checkbox
                            echo '<div class="response-checkbox-wrapper">';
                            
                            // Resposta
                            echo '<div class="w-75">';
                            echo '<label class="text-white align-middle">Resposta:</label>';
                            echo '<textarea class="form-control-plaintext" readonly>' . $answer['answer'] . '</textarea>';
                            echo '</div>';
                            
                            // Checkbox
                            echo '<div class="w-25 text-center">';
                            echo '<label class="text-white">Correção</label><br>';
                            echo '<input type="checkbox" name="correct[' . $index . ']" value="1"' . ($answer['correct'] ? ' checked' : '') . '>';
                            echo '</div>';
                            
                            echo '</div>'; // Fechamento do response-checkbox-wrapper

                            // Observação
                            echo '<div class="response-textarea-wrapper">';
                            echo '<label class="text-white">Obs:</label>';
                            echo '<textarea name="obs[' . $index . ']" class="form-control">' . $answer['obs'] . '</textarea>';
                            echo '</div>'; // Fechamento do response-textarea-wrapper

                            echo '<input type="hidden" name="idAnsUser[' . $index . ']" value="' . $answer['idAnsUser'] . '">';
                            echo '</div>'; // Fechamento da coluna

                            $index++;
                        }

                        echo '</div>'; // Fechamento da row
                        echo '</div>'; // Fechamento da category-section
                    }

                    echo '<div class="text-center mt-4">'; // Centraliza o botão e adiciona margem superior
                    echo '<input type="hidden" name="idGame" value="' . $idGame . '">';
                    echo '<input type="submit" class="btn btn-primary" value="Salvar">';
                    echo '</div>'; // Fechamento do container de centralização
                    echo '</form>';
                    ?>
                </div>
            </div>
            <div class="col-md-3 container-right">
                <!-- Novo container (1/4 da página) -->
                <div class="form-container">
                    <div class="container-title">Gabarito</div>
                    <?php
                    foreach ($categories as $categoryName => $category) {
                        $answersCorrect = search_answer_correct($conectado, 1, $category);

                        echo '<div class="category-section">';
                        echo '<div class="category-title">' . $categoryName . '</div>';

                        echo '<div class="expected-response-wrapper">';
                        echo '<ul>';

                        foreach ($answersCorrect as $answerCorrect) {
                            echo '<li>' . $answerCorrect['description'] . '</li>';
                        }

                        echo '</ul>';
                        echo '</div>'; // Fechamento do expected-response-wrapper
                        echo '</div>'; // Fechamento da category-section
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
