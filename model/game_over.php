<?php
require_once "conexao.php";
require_once "functions.php";
session_start();

$user = search_user($conectado, $_SESSION["email"]);
$game = search_user_game_finish($conectado, $user);

if (isset($game)) {
    delete_game($conectado, $game["idGame"]);
}

$idGame = $_POST['idGame'];
$query = "UPDATE game SET finish = 1 WHERE idGame = ?";
$stmt = $conectado->prepare($query);

if ($stmt) {
    $stmt->bind_param('i', $idGame);
    $result = $stmt->execute();
    
    if ($result) {
        echo "Jogo atualizado com sucesso.";
    } else {
        http_response_code(500);
        echo "Erro ao atualizar o jogo: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    http_response_code(500);
    echo "Erro ao preparar a consulta: " . $conectado->error;
}
?>
