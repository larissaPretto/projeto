<?php
session_start();
require_once "../model/conexao.php";
require_once "../model/functions.php";

if (isset($_SESSION['page']) && isset($_SESSION['idPhases']) && isset($_SESSION['email'])) {
    $page = $_SESSION['page'];
    $idPhases = $_SESSION['idPhases'];
    $email = $_SESSION['email'];
    $lastPage = $_SESSION['lastPage'];
}

$user = search_user($conectado, $email);
$idUser = $user['idUser'];

if($user['access'] == 1)
    header("Location: ../view/teacher_page.php");

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
    <title>SpecHunter | Jogando</title>
    <!-- css -->
    <link rel="stylesheet" href="css/game.css">
    <link rel="stylesheet" href="css/ranking.css">
    <link rel="stylesheet" href="css/default-positions.css">
    <link rel="stylesheet" href="css/tutorial-scenario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Reem+Kufi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
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
                var tempoRestante = <?php echo $totalTime; ?>;
                var idGame = <?php echo $idGame; ?>;
            </script>
            <div class="current-goal">
                <h1>Objetivo atual</h1>
                <?php
                if ($page == 5 or $page >= 10 && $page <= 50)
                    echo '<p>Descubra os requisitos funcionais, não funcionais e técnicas</p>';
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
        require_once "../view/menu.php";

        if($page >= 10) { //buttons that always appear
            renderButton("notebook-position", "salvarTempo(); redirecionarPagina(5,$idPhases);");
        } else if ($page == 5) { // user response page
            renderImage("../scenarios/game/notebook.png"); 
            echo '<div class="initial-terminal-input">';
            echo '<form id="form_answer" onsubmit="return submitForm(event);">';
            echo '<textarea rows="4" cols="50" name="respUser" class="form-control" placeholder="Requisito..." required></textarea>';
            echo '<div>';
            echo '<input type="radio" id="option1" name="options" value="1" required>';
            echo '<label for="option1">Requisito Funcional</label>';
            echo '</div>';
            echo '<div>';
            echo '<input type="radio" id="option2" name="options" value="2" required>';
            echo '<label for="option2">Requisito Não Funcional</label>';
            echo '</div>';
            echo '<div>';
            echo '<input type="radio" id="option3" name="options" value="3" required>';
            echo '<label for="option3">Técnica</label>';
            echo '</div>';
            echo '<input type="hidden" name="idGame" id="idGame" value="' . $idGame . '">';
            echo '<input type="hidden" name="idPhases" id="idPhases" value="' . $idPhases . '">';
            echo '<input type="hidden" name="idUser" id="idUser" value="' . $idUser . '">';
            echo '<button type="submit" class="pencil-button" onclick="submitForm(event)"></button>';
            echo '</form>';
            echo '</div>';
            echo '<div id="list">';
            require_once "../view/list_answer.php";
            echo '</div>';
            renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina($lastPage, $idPhases);");
            
        }
        require_once "../view/phase1.php";
        require_once "../view/end_game.php";
        ?>

        <script>
            var page = <?php echo $page; ?>;
            var idPhases = <?php echo $idPhases; ?>;
        </script>
    <div id="exitPopup" class="popup">
        <div class="popup-content">
            <p>Você realmente deseja sair do jogo? Suas resposta serão enviadas para correção</p>
            <button class="popup-button-yes" onclick="salvarTempo(); fimGame(<?php echo $idGame; ?>); redirecionarPagina(51, <?php echo $idPhases; ?>); attPage(); attPage();">Sim</button>
            <button class="popup-button-no" onclick="hideExitPopup()">Não</button>
        </div>
    </div>
    </div>
    <script src="../js/redirecionarPags.js"></script>
    <script src="../js/atualizarConteudo.js"></script>
    <script src="../js/cronometro.js"></script>
</body>

</html>