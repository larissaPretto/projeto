<?php
require_once "../model/conexao.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['respUser']) && isset($_POST['idGame'])) {
        session_start();
        $email = $_SESSION['email'];
        $idPhases = $_SESSION['idPhases'];

        $query = "SELECT * FROM user WHERE email = '$email'";
        $stmt = mysqli_prepare($conectado, $query);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $idUser = $row["idUser"];
        }

        $respUser = $_POST['respUser'];
        $idGame = $_POST['idGame'];
        $categories = $_POST['options'];
        $correction = 0;
        $obs = "-";

        $stmt = $conectado->prepare("INSERT INTO answeruser (answer, idPhases, idUser, idGame, correct, categories, obs) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siiiiis", $respUser, $idPhases, $idUser, $idGame, $correction, $categories, $obs);
        $stmt->execute();

    } else {
        echo 'Erro: Campos obrigatórios não foram enviados.';
    }
} 
?>