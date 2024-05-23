<?php
require_once "conexao.php";

$idGame = $_POST['idGame'];

$query = "UPDATE game SET finish = 1 WHERE idGame = $idGame";
mysqli_query($conectado, $query);
