-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/07/2024 às 22:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `answerphase`
--

CREATE TABLE `answerphase` (
  `idAnsPhase` int(11) NOT NULL,
  `idPhase` int(11) NOT NULL,
  `description` text NOT NULL,
  `categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `answerphase`
--

INSERT INTO `answerphase` (`idAnsPhase`, `idPhase`, `description`, `categories`) VALUES
(4, 1, 'Obras Literárias: Manter informações sobre títulos, anos de publicação, número de páginas, editora, autores e preço de venda.\n', 1),
(5, 1, 'Cadastro de Editoras: Registrar nome, endereço, cidade, telefone e nome para contato das editoras.\r\n', 1),
(6, 1, 'Cadastro de Autores: Armazenar nome, pseudônimo, breve biografia, naturalidade (país) e data de nascimento.\r\n', 1),
(7, 1, 'Cadastro de Prêmios: Registrar nome, descrição, categoria e país dos prêmios.\r\nAssociar prêmios a autores e obras.\r\n', 1),
(8, 1, 'Cadastro de Gêneros Literários: Manter informações sobre gêneros (nome e descrição).\r\n', 1),
(9, 1, 'Registro de Vendas: Armazenar dados de clientes, data da venda, vendedor responsável e obras vendidas (quantidade).\r\n', 1),
(10, 1, 'Cadastro de Clientes: Registrar nome, telefone, endereço, gênero de preferência, e-mail e data de nascimento.\r\n', 1),
(11, 1, 'Gerenciar programa de fidelidade (nível e pontos acumulados).', 1),
(12, 1, 'Avaliações de Livros: Manter informações sobre data da avaliação, obra avaliada, nota (de 1 a 5 estrelas) e comentário/resenha.\r\n', 1),
(13, 1, 'Cadastro de Críticos Literários: Armazenar nome, biografia, contato e descrição do canal/jornal para o qual publicam resenhas.\r\n', 1),
(14, 1, 'Cadastro de Vendedores: Registrar nome, endereço, data de nascimento e salário.\r\n', 1),
(15, 1, 'Clube de Leitura “Leituras Compartilhadas”: Manter informações sobre nome, descrição, membros (clientes, vendedores, autores e críticos) e moderador. Registrar encontros realizados (data e livro discutido).\r\n', 1),
(16, 1, 'Desempenho', 2),
(17, 1, 'Segurança', 2),
(18, 1, 'Usabilidade', 2),
(19, 1, 'Escalabilidade', 2),
(20, 1, 'Disponibilidade', 2),
(21, 1, 'Entrevistas ', 3),
(22, 1, 'Realizar questionário', 3),
(23, 1, 'Análise de Documentos', 3),
(24, 1, 'Observação Direta', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `answeruser`
--

CREATE TABLE `answeruser` (
  `idAnsUser` int(11) NOT NULL,
  `answer` text NOT NULL,
  `idPhases` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idGame` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `categories` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `answeruser`
--

INSERT INTO `answeruser` (`idAnsUser`, `answer`, `idPhases`, `idUser`, `idGame`, `correct`, `categories`, `obs`) VALUES
(1, 'Cadastrar livro: nome, genero, ano', 1, 3, 1, 0, 1, 'Faltaram alguns dados '),
(2, 'Cadastrar autor:nome, pais', 1, 3, 1, 1, 1, '-'),
(3, 'Cadastrar genero: nome, descrição', 1, 3, 1, 1, 1, '-'),
(4, 'Desempenho', 1, 3, 1, 1, 2, '-'),
(5, 'Disponibilidade', 1, 3, 1, 1, 2, '-'),
(6, 'Usabilidade', 1, 3, 1, 1, 2, '-'),
(7, 'Entrevista', 1, 3, 1, 1, 3, '-'),
(8, 'Análise de Documentos', 1, 3, 1, 1, 3, '-'),
(9, 'lllalala', 1, 16, 2, 0, 1, '-');

-- --------------------------------------------------------

--
-- Estrutura para tabela `game`
--

CREATE TABLE `game` (
  `idGame` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `finish` tinyint(1) NOT NULL,
  `correction` tinyint(1) NOT NULL,
  `grade` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `game`
--

INSERT INTO `game` (`idGame`, `idUser`, `time`, `date`, `finish`, `correction`, `grade`) VALUES
(1, 3, '00:16:47', '2024-07-14', 1, 1, 8.75),
(2, 16, '00:00:00', '2024-07-14', 0, 0, 0),
(3, 16, '00:19:53', '2024-07-14', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `phases`
--

CREATE TABLE `phases` (
  `idPhases` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `phases`
--

INSERT INTO `phases` (`idPhases`, `name`, `description`) VALUES
(1, 'empresa', 'emmmmmmm');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `access` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`idUser`, `name`, `email`, `password`, `access`) VALUES
(3, 'teste', 'teste@gmail.com', '$2y$10$Bcakk8S38szZM0VTb8gbU.nu6j2po3zgxbrHG2Wc3Vw9bWPhWM2PC', 0),
(7, 'prof', 'prof@gmail.com', '$2y$10$.BBADI1jhTh87mQ1CtkxL.hbOhPZ3LtlDWh/yaNXgaQyjDCCzesGe', 1),
(16, 'test2', 'teste2@gmail.com', '$2y$10$3msa1.M2zV4X2DQZngXlpukFNOuorbwRXZlse1yCqKODznv2wbEzG', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `answerphase`
--
ALTER TABLE `answerphase`
  ADD PRIMARY KEY (`idAnsPhase`),
  ADD KEY `fk_idphase` (`idPhase`);

--
-- Índices de tabela `answeruser`
--
ALTER TABLE `answeruser`
  ADD PRIMARY KEY (`idAnsUser`),
  ADD KEY `fk_phases` (`idPhases`),
  ADD KEY `fk_user_answer` (`idUser`),
  ADD KEY `fk_game` (`idGame`);

--
-- Índices de tabela `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`idGame`),
  ADD KEY `fk_user` (`idUser`);

--
-- Índices de tabela `phases`
--
ALTER TABLE `phases`
  ADD PRIMARY KEY (`idPhases`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `uniqemail` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `answerphase`
--
ALTER TABLE `answerphase`
  MODIFY `idAnsPhase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `answeruser`
--
ALTER TABLE `answeruser`
  MODIFY `idAnsUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `game`
--
ALTER TABLE `game`
  MODIFY `idGame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `phases`
--
ALTER TABLE `phases`
  MODIFY `idPhases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `answerphase`
--
ALTER TABLE `answerphase`
  ADD CONSTRAINT `fk_idphase` FOREIGN KEY (`idPhase`) REFERENCES `phases` (`idPhases`);

--
-- Restrições para tabelas `answeruser`
--
ALTER TABLE `answeruser`
  ADD CONSTRAINT `fk_game` FOREIGN KEY (`idGame`) REFERENCES `game` (`idGame`),
  ADD CONSTRAINT `fk_phases` FOREIGN KEY (`idPhases`) REFERENCES `phases` (`idPhases`),
  ADD CONSTRAINT `fk_user_answer` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Restrições para tabelas `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
