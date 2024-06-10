<?php
require_once "../model/conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correctCount = 0;
    $totalCount = count($_POST['idAnsUser']);

    foreach ($_POST['idAnsUser'] as $index => $idAnsUser) {
        $correct = isset($_POST['correct'][$index]) ? 1 : 0;
        $obs = $_POST['obs'][$index];

        if ($correct) {
            $correctCount++;
        }

        $query = "UPDATE answeruser SET correct = ?, obs = ? WHERE idAnsUser = ?";
        $stmt = mysqli_prepare($conectado, $query);
        mysqli_stmt_bind_param($stmt, "isi", $correct, $obs, $idAnsUser);
        mysqli_stmt_execute($stmt);
    }

    $grade = ($correctCount / $totalCount) * 10;

    $idGame = $_POST['idGame'];
    $correction = 1;
    
    $query = "UPDATE game SET correction = ?, grade = ? WHERE idGame = ?";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "idi", $correction, $grade, $idGame);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('Location: ../view/teacher_page.php');
    exit;
}