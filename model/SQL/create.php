<?php
require_once "../../model/conexao.php";
$sql = "CREATE TABLE IF NOT EXISTS `partida` (
    `idPartida` int(11) NOT NULL AUTO_INCREMENT,
    `idUsuario` int(11) NOT NULL,
    `tempo` time NOT NULL,
    `inventario` int(11) NOT NULL,
    `terminou` int(11) NOT NULL,
    PRIMARY KEY (`idPartida`)
  )";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "partida!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `usuario` (
    `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(60) NOT NULL,
    `email` varchar(100) NOT NULL UNIQUE,
    `senha` varchar(256) NOT NULL,
    PRIMARY KEY (`idUsuario`)
  )";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "usuario!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `puzzle` (
    `idPuzzle` int(11) NOT NULL AUTO_INCREMENT,
    `resposta` varchar(50) NOT NULL,
    `caderno` varchar(50) NOT NULL,
    `resposta2` varchar(50) NOT NULL,
    `postit` varchar(50) NOT NULL,
    PRIMARY KEY (`idPuzzle`)
  )";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "puzzle!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `initialroom` (
    `idPuzzle` int(11) NOT NULL,
    `pagina` int(11) NOT NULL,
    `pergunta` varchar(500) NOT NULL,
    `alternativa1` varchar(50) NOT NULL,
    `alternativa2` varchar(50) NOT NULL,
    `alternativa3` varchar(50) NOT NULL,
    `alternativa4` varchar(50) NOT NULL,
    `cid1` varchar(10) NOT NULL,
    `cid2` varchar(10) NOT NULL,
    `cid3` varchar(10) NOT NULL,
    `cid4` varchar(10) NOT NULL,
    FOREIGN KEY (`idPuzzle`) REFERENCES `puzzle` (`idPuzzle`)
  )";

  // Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS cenario1 (
    idPuzzle INT(11) NOT NULL,
    pagina INT(11) NOT NULL,
    nome VARCHAR(40) NOT NULL,
    idade INT(11) NOT NULL,
    sintomas TEXT NOT NULL,
    tomografia TEXT NOT NULL,
    doenca VARCHAR(25) NOT NULL,
    FOREIGN KEY (`idPuzzle`) REFERENCES `puzzle` (`idPuzzle`)
)";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `cenario2-pacientes` (
    `exame` varchar(50) NOT NULL,
    `idade` int(11) NOT NULL,
    `genero` varchar(20) NOT NULL,
    `caso` text NOT NULL,
    PRIMARY KEY (`exame`)
  )";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `cenario2` (
    `idPuzzle` int(11) NOT NULL,
    `paginaExame` int(11) NOT NULL,
    `paginaPac` int(11) NOT NULL,
    `pacienteNome` varchar(100) NOT NULL,
    `pacienteCodigo` int(11) NOT NULL UNIQUE,
    `exame` varchar(50) NOT NULL,
    FOREIGN KEY (`idPuzzle`) REFERENCES `puzzle` (`idPuzzle`),
    FOREIGN KEY (`exame`) REFERENCES `cenario2-pacientes` (`exame`)
  )";

// Executar SQL para criar tabela
if ($conectado->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}