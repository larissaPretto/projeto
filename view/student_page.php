<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção das Respostas</title>
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
            resize: none; /* Impede a redimensão do textarea */
        }
        .form-container textarea.form-control-plaintext {
            background-color: #1A1D21; /* Cor de fundo consistente com o estilo */
            color: white;
            border: 1px solid #2C2F33;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn {
            color: white;
        }
        .category-section {
            background-color: #2C2F33;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .category-title {
            background-color: #23272A;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            color: #fff;
            margin-bottom: 15px;
        }
        .response-textarea-wrapper {
            margin-top: 10px;
        }
        .response-textarea-wrapper textarea {
            background-color: #1A1D21;
            color: white;
            border: 1px solid #2C2F33;
            border-radius: 5px;
            resize: none;
        }
        .response-checkbox-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .response-checkbox-wrapper input[type="checkbox"] {
            margin-left: 10px;
        }
        .container-left {
            padding-left: 50px;
        }
        .container-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .response-section, .obs-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h2 class="mb-0">Correção das Respostas</h2>
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Container de respostas do aluno -->
            <div class="col-md-12 container-left">
                <div class="form-container">
                    <?php
                    session_start();
                    require_once "../model/conexao.php";
                    require_once "../model/functions.php";

                    $user = search_user($conectado, $_SESSION["email"]);

                    $idGame = search_user_game_revised($conectado, $user["idUser"]);
   
                    if(isset($idGame)) {
                        echo '<div class="container-title">Respostas do Aluno</div>';
                        // Categorias de requisitos
                        $categories = array(
                            'Requisitos Funcionais' => 1,
                            'Requisitos Não Funcionais' => 2,
                            'Técnicas de levantamento de requisitos' => 3
                        );

                        foreach ($categories as $categoryName => $category) {
                            $answers = search_answer($conectado, 1, $idGame["idGame"], $user["idUser"], $category);

                            echo '<div class="category-section">';
                            echo '<div class="category-title">' . $categoryName . '</div>';

                            echo '<div class="row">'; // Início da linha de respostas

                            foreach ($answers as $answer) {
                                echo '<div class="col-md-6 mb-3">';
                                
                                // Wrapper para resposta e checkbox
                                echo '<div class="response-textarea-wrapper">';
                                
                                // Resposta
                                echo '<div class="response-section">';
                                echo '<label class="text-white">Resposta:</label>';
                                echo '<textarea class="form-control-plaintext" readonly>' . $answer['answer'] . '</textarea>';
                                echo '</div>';
                                
                                // Observação
                                echo '<div class="obs-section">';
                                echo '<label class="text-white">Obs:</label>';
                                echo '<textarea class="form-control-plaintext" readonly>' . $answer['obs'] . '</textarea>';
                                echo '</div>';

                                // Correção
                                echo '<div class="response-checkbox-wrapper">';
                                echo '<label class="text-white">Correção:</label>';
                                echo '<input type="checkbox" disabled ' . ($answer['correct'] ? 'checked' : '') . '>';
                                echo '</div>'; // Fechamento do response-checkbox-wrapper

                                echo '</div>'; // Fechamento do response-textarea-wrapper
                                echo '</div>'; // Fechamento da coluna

                            }

                            echo '</div>'; // Fechamento da row
                            echo '</div>'; // Fechamento da category-section
                        }
                    } else {
                        echo '<div class="form-container">';
                            echo '<div class="container-title">Sem jogo corrigido</div>';
                            echo '</div>'; 
                        echo '</div>';

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
