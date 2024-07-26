<?php
require_once "../conexao.php";

// Executar SQL para criar tabela `answerphase`
$sql = "DROP TABLE IF EXISTS `answerphase`";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answerphase criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "DROP TABLE IF EXISTS `answeruser`";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answerphase criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}