<?php
require_once "../conexao.php";

// Verificar conexão
if ($conectado->connect_error) {
    die("Conexão falhou: " . $conectado->connect_error);
}

// Executar SQL para criar tabela `phases`
$sql = "CREATE TABLE IF NOT EXISTS `phases` (
  `idPhases` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idPhases`)
)";

if ($conectado->query($sql) === TRUE) {
  echo "Tabela phases criada com sucesso!";
} else {
  echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `user`
$sql = "CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `access` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `uniqemail` (`email`)
)";

if ($conectado->query($sql) === TRUE) {
  echo "Tabela user criada com sucesso!";
} else {
  echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `answerphase`
$sql = "CREATE TABLE IF NOT EXISTS `answerphase` (
    `idAnsPhase` int(11) NOT NULL AUTO_INCREMENT,
    `idPhase` int(11) NOT NULL,
    `description` text NOT NULL,
    `categories` int(11) NOT NULL,
    PRIMARY KEY (`idAnsPhase`),
    KEY `fk_idphase` (`idPhase`),
    CONSTRAINT `fk_idphase` FOREIGN KEY (`idPhase`) REFERENCES `phases` (`idPhases`)
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answerphase criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `game`
$sql = "CREATE TABLE IF NOT EXISTS `game` (
  `idGame` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `finish` tinyint(1) NOT NULL,
  `correction` tinyint(1) NOT NULL,
  `grade` double NOT NULL,
  PRIMARY KEY (`idGame`),
  KEY `fk_user` (`idUser`),
  CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`)
)";

if ($conectado->query($sql) === TRUE) {
  echo "Tabela game criada com sucesso!";
} else {
  echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `answeruser`
$sql = "CREATE TABLE IF NOT EXISTS `answeruser` (
    `idAnsUser` int(11) NOT NULL AUTO_INCREMENT,
    `answer` text NOT NULL,
    `idPhases` int(11) NOT NULL,
    `idUser` int(11) NOT NULL,
    `idGame` int(11) NOT NULL,
    `correct` tinyint(1) NOT NULL,
    `categories` int(11) NOT NULL,
    `obs` text NOT NULL,
    PRIMARY KEY (`idAnsUser`),
    KEY `fk_phases` (`idPhases`),
    KEY `fk_user_answer` (`idUser`),
    KEY `fk_game` (`idGame`),
    CONSTRAINT `fk_phases` FOREIGN KEY (`idPhases`) REFERENCES `phases` (`idPhases`),
    CONSTRAINT `fk_user_answer` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
    CONSTRAINT `fk_game` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGame`)
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answeruser criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

$conectado->close();
?>
