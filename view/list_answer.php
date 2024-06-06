<?php
require_once "../model/conexao.php";
require_once "../model/functions.php";

if (isset($_POST['idPhases']) && isset($_POST['idGame']) && isset($_POST['idUser'])){
    $idPhases = $_POST['idPhases'];
    $idGame = $_POST['idGame'];
    $idUser = $_POST['idUser'];
}

echo '<div id="list">';
echo 'Requisito Funcional<br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 1);
list_answer($answers);

echo '<br>Requisito Não Funcional<br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 2);
list_answer($answers);

echo '<br>Técnicas<br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 3);
list_answer($answers);
echo '</div>';