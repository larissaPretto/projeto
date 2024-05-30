<?php
session_start();
require_once "../model/conexao.php";
require_once "../model/game_select_user.php";

if (isset($_SESSION['page']) && isset($_SESSION['idPhases']) && isset($_SESSION['email'])) {
    $page = $_SESSION['page'];
    $idPhases = $_SESSION['idPhases'];
    $email = $_SESSION['email'];
}

$user = search_user($conectado, $email);

if ($page != 1 && $page != 2 && $page != 3) {
    $game = search_game($conectado, $user['idUser']);
    $idGame = $game['idGame'];
    $totalTime = array_reduce(explode(':', $game['time']), function ($total, $time) {
        return $total * 60 + $time;
    }, 0);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Execução do jogo RadioEscape">
    <meta name="keywords" content="scaperoom, radiologia, saúde, jogo, radioescape, radio escape,">
    <link rel="icon" href="../assets/icon.png">
    <title>RadioEscape | Jogando</title>
    <!-- css -->
    <link rel="stylesheet" href="css/game.css">
    <link rel="stylesheet" href="css/ranking.css">
    <link rel="stylesheet" href="css/default-positions.css">
    <link rel="stylesheet" href="css/tutorial-scenario.css">
    <link rel="stylesheet" href="css/first-scenario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Reem+Kufi&display=swap" rel="stylesheet">
    <!-- audios -->
    <?php
    $audios = [
        'chuvaJogo', 'chuvaInicio', 'portaAbre', 'portaFecha', 'pcLigando',
        'armarioAberto', 'win', 'gameOver', 'mouseClick', 'book', 'postit',
        'teclado', 'tecladoCorreto', 'tecladoErrado'
    ];
    foreach ($audios as $audio) {
        echo '<audio id="' . $audio . '" src="../assets/audios/' . $audio . '.mp3"></audio>' . PHP_EOL;
    }
    ?>
</head>

<body>
    <div class="current-game-data">
        <div class="now-playing">
            <h1>Jogando</h1>
            <p><?php echo $user['name']; ?></p>
        </div>

        <?php
        if (playing($page)) {
        ?>
            <script>
                window.onbeforeunload = function() {
                    salvarTempo();
                };
                window.onload = function() {
                    reproduzirAudio('chuvaJogo', true);
                };
                var tempoRestante = <?php echo $totalTime; ?>;
                var idGame = <?php echo $idGame; ?>;
            </script>
            <div class="current-goal">
                <h1>Objetivo atual</h1>
                <?php
                if ($page >= 0 && $page <= 9)
                    echo '<p>Saia do quarto</p>';
                else if ($page >= 10 && $page <= 23)
                    echo '<p>Descubra o código do elevador</p>';
                else if ($page >= 24 && $page <= 50)
                    echo '<p>Consiga acesso às escadas</p>';
                ?>
            </div>

            <div class="remaining-time">
                <h1>Tempo total restante</h1>
            <?php
            echo '<p id="cronometro"></p>';
        }
            ?>
            </div>
    </div>

    <div class="game-area" id="content">
        <?php
        require_once "../controller/render_object.php";
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(5,$idPhases);");
        if ($page == 5) {
            echo '<div class="initial-terminal-input">';
            echo '<form action="../controller/save_user_answer.php" method="POST">';
            echo '<input type="text" name="respUser" class="form-control" placeholder="Resposta" required>';
            echo '<input type="hidden" name="idPhases" id="idPhases" value="' . $idPhases . '">';
            echo '<button type="submit" class="enviar">Enviar</button>';
            echo '</form>';
            echo '</div>';
        }

        require_once "../view/menu.php";
        require_once "../view/phase1.php";
        require_once "../view/end_game.php";
        ?>
        <div class="locked-message" id="mensagem"></div>

        <script>
            var page = <?php echo $page; ?>;
            var idPhases = <?php echo $idPhases; ?>;
        </script>
    </div>
    <script src="../js/redirecionarPags.js"></script>
    <script src="../js/atualizarConteudo.js"></script>
    <script src="../js/cronometro.js"></script>
</body>

</html>