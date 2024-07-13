<?php
require_once "../model/conexao.php";
require_once "../model/functions.php";

if (isset($_POST['idPhases']) && isset($_POST['idGame']) && isset($_POST['idUser'])){
    $idPhases = $_POST['idPhases'];
    $idGame = $_POST['idGame'];
    $idUser = $_POST['idUser'];
}

echo '<b>Requisito Funcional</b><br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 1);
list_answer($answers);

echo '<br><b>Requisito Não Funcional</b><br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 2);
list_answer($answers);

echo '<br><b>Técnicas</b><br><br>';
$answers = search_answer($conectado, $idPhases, $idGame, $idUser, 3);
list_answer($answers);


?>
<style>
    #list {
        position: absolute;
        top: 90px;
        left: 195px;
        width: 270px;
        font-family: "Caveat", cursive;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 15px;
        border: none !important;
        overflow-x: auto; /* Adiciona rolagem vertical se necessário */
        max-height: 342px; /* Define a altura máxima para a div */
        padding: 2px 0
    }

    .answer {
        margin: -5px -6px 18px 6px;
    }
</style>