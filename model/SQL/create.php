<?php
require_once "../conexao.php";

// Verificar conexão
if ($conectado->connect_error) {
    die("Conexão falhou: " . $conectado->connect_error);
}

// Executar SQL para criar tabela `answerphase`
$sql = "CREATE TABLE IF NOT EXISTS `answerphase` (
    `idAnsPhase` int(11) NOT NULL,
    `idPhase` int(11) NOT NULL,
    `description` text NOT NULL,
    `categories` int(11) NOT NULL
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answerphase criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `answeruser`
$sql = "CREATE TABLE IF NOT EXISTS `answeruser` (
    `idAnsUser` int(11) NOT NULL,
    `answer` text NOT NULL,
    `idPhases` int(11) NOT NULL,
    `idUser` int(11) NOT NULL,
    `idGame` int(11) NOT NULL,
    `correct` tinyint(1) NOT NULL,
    `categories` int(11) NOT NULL,
    `obs` text NOT NULL
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela answeruser criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `game`
$sql = "CREATE TABLE IF NOT EXISTS `game` (
    `idGame` int(11) NOT NULL,
    `idUser` int(11) NOT NULL,
    `time` time NOT NULL,
    `date` date NOT NULL DEFAULT current_timestamp(),
    `finish` tinyint(1) NOT NULL,
    `correction` tinyint(1) NOT NULL,
    `grade` double NOT NULL
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela game criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `phases`
$sql = "CREATE TABLE IF NOT EXISTS `phases` (
    `idPhases` int(11) NOT NULL,
    `name` varchar(30) NOT NULL,
    `description` text NOT NULL
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela phases criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para criar tabela `user`
$sql = "CREATE TABLE IF NOT EXISTS `user` (
    `idUser` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(256) NOT NULL,
    `access` tinyint(1) NOT NULL
)";

if ($conectado->query($sql) === TRUE) {
    echo "Tabela user criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conectado->error;
}

// Executar SQL para adicionar índices e AUTO_INCREMENT

$sql = "
ALTER TABLE `answerphase`
  ADD PRIMARY KEY (`idAnsPhase`),
  ADD KEY `fk_idphase` (`idPhase`);

ALTER TABLE `answeruser`
  ADD PRIMARY KEY (`idAnsUser`),
  ADD KEY `fk_phases` (`idPhases`),
  ADD KEY `fk_user_answer` (`idUser`),
  ADD KEY `fk_game` (`idGame`);

ALTER TABLE `game`
  ADD PRIMARY KEY (`idGame`),
  ADD KEY `fk_user` (`idUser`);

ALTER TABLE `phases`
  ADD PRIMARY KEY (`idPhases`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `uniqemail` (`email`);

ALTER TABLE `answerphase`
  MODIFY `idAnsPhase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `answeruser`
  MODIFY `idAnsUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `game`
  MODIFY `idGame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `phases`
  MODIFY `idPhases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

-- Restrições para tabelas `answerphase`
ALTER TABLE `answerphase`
  ADD CONSTRAINT `fk_idphase` FOREIGN KEY (`idPhase`) REFERENCES `phases` (`idPhases`);

-- Restrições para tabelas `answeruser`
ALTER TABLE `answeruser`
  ADD CONSTRAINT `fk_game` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGame`),
  ADD CONSTRAINT `fk_phases` FOREIGN KEY (`idPhases`) REFERENCES `phases` (`idPhases`),
  ADD CONSTRAINT `fk_user_answer` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

-- Restrições para tabelas `game`
ALTER TABLE `game`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
";

if ($conectado->multi_query($sql) === TRUE) {
    echo "Índices e restrições adicionados com sucesso!";
} else {
    echo "Erro ao adicionar índices e restrições: " . $conectado->error;
}

$conectado->close();
?>
