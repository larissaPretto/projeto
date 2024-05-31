<?php
session_start();
require_once "../model/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, "password");

	if ($email && $password) {
		$passwordCr = password_hash($password, PASSWORD_DEFAULT);
		$query = "SELECT * FROM user WHERE email = ?";
		$stmt = mysqli_prepare($conectado, $query);
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt); 

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				$_SESSION["email"] = $email;
				$_SESSION["page"] = 1;
				$_SESSION["idPhases"] = 1;
				header("Location: ../view/game.php");
				exit();
			} else {
				header("Location: ../index.php?erro=credenciais");
				exit();
			}
		} else {
			header("Location: ../index.php?erro=credenciais");
			exit();
		}
	} else {
		header("Location: ../index.php?erro=campos");
		exit();
	}
} else {
	header("Location: ../index.php");
	exit();
}
