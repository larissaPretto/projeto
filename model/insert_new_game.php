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

if (mysqli_num_rows($result) === 1) {
    $time = '00:15:00';
    $finish = $correction = $grade = 0;

    $stmt = $conectado->prepare("INSERT INTO game (idUser, time, finish, correction, grade) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiid", $idUser, $time, $finish, $correction, $grade);

    try {
        $stmt->execute();
    } catch (Exception $e) {
        die('Erro ao iniciar partida ' . $e->getMessage());
    }
}
