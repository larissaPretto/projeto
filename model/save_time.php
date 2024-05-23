<?php
session_start();
require_once "../model/conexao.php";
$email = $_SESSION['email'];

$query = "SELECT * FROM user WHERE email = '$email'";
$stmt = mysqli_prepare($conectado, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $idUser = $row["idUser"];
    $name = $row["name"];
}
$time = $_POST['time'];
$idGame = $_POST['idGame'];

$query = "UPDATE game SET time = '$time' WHERE idGame = $idGame";
mysqli_query($conectado, $query);
