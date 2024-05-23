<?php
require_once "conexao.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	die('E-mail inválido');
}

if (strlen($password) < 8) {
	die('A senha deve ter pelo menos 8 caracteres');
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$access = 0;

$stmt = $conectado->prepare("INSERT INTO user (name, email, password, access) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $email, $passwordHash, $access);
$stmt->execute();

$idUser = $stmt->insert_id;

$time = '00:15:00';
$finish = 0;

$stmt2 = $conectado->prepare("INSERT INTO game (idUser, time, finish) VALUES (?, ?, ?)");
$stmt2->bind_param("isi", $idUser, $time, $finish);
$stmt2->execute();

header('location: ../index.php');
 