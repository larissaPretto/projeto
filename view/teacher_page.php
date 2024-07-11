<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção de Alunos</title>
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
        }

        .btn {
            width: 100px;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h2 class="mb-0">Respostas dos Alunos</h2>
    </header>
    <div class="container">
        <?php
        require_once "../model/conexao.php";
        require_once "../model/functions.php";

        $players = list_players($conectado);

        echo '<div class="table-responsive d-flex justify-content-center">';
        echo '<table class="table table-dark table-bordered">';
        echo '<thead>';
        echo '<tr class="text-center">';
        echo '<th>Nome</th>';
        echo '<th>Tempo</th>';
        echo '<th>Nota</th>';
        echo '<th>Status</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($players as $player) {
            echo '<tr class="text-center">';
            echo '<td>' . $player['name'] . '</td>';
            echo '<td>' . $player['time'] . '</td>';
            if($player['correction'] == 0) 
                echo '<td> - </td>';
            else
                echo '<td>' . $player['grade'] . '</td>';
            if ($player['correction'] == 0) {
                echo '<td>
                    <form action="../view/game_correction.php" method="post">
                        <input type="hidden" name="idUser" value="' . $player['idUser'] . '">
                        <input type="hidden" name="idGame" value="' . $player['idGame'] . '">
                        <input type="submit" class="btn btn-primary" value="Corrigir">
                    </form>
                </td>';
            } else {
                echo '<td>
                    <form action="../view/game_correction.php" method="post">
                        <input type="hidden" name="idUser" value="' . $player['idUser'] . '">
                        <input type="hidden" name="idGame" value="' . $player['idGame'] . '">
                        <input type="submit" class="btn btn-success" value="Corrigido">
                    </form>
                </td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
