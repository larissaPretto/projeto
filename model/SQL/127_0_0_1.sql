-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2024 às 02:01
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
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, 'oçi', 1, 3, 14, 0, 1, ''),
(12, 'klklkl', 1, 3, 25, 0, 1, ''),
(13, 'klklkl', 1, 3, 25, 0, 1, ''),
(14, 'klklkl', 1, 3, 25, 0, 1, ''),
(15, 'kk', 1, 3, 26, 0, 1, ''),
(16, 'yy', 1, 3, 27, 0, 1, ''),
(17, 'hj', 1, 3, 28, 0, 1, ''),
(18, 'muiy', 1, 3, 29, 0, 1, ''),
(20, 'Q180TR4', 1, 3, 30, 0, 1, ''),
(21, 'Q180TR4', 1, 3, 30, 0, 1, ''),
(22, 'ty', 1, 3, 30, 0, 1, ''),
(23, '1234', 1, 3, 31, 0, 2, ''),
(24, '1234hf', 1, 3, 31, 0, 3, ''),
(25, 'fgr', 1, 3, 32, 0, 2, ''),
(30, 'dd', 1, 3, 32, 0, 2, ''),
(31, 'aaa', 1, 3, 32, 0, 1, ''),
(32, '1111', 1, 3, 33, 0, 1, ''),
(33, '222', 1, 3, 33, 0, 2, ''),
(34, '333', 1, 3, 33, 0, 3, ''),
(35, 'ssfesf', 1, 3, 33, 0, 3, ''),
(36, 'fgd', 1, 3, 33, 0, 1, ''),
(37, 'drgdg', 1, 3, 34, 0, 2, ''),
(38, '4444', 1, 3, 34, 0, 2, ''),
(39, 'fgd', 1, 3, 34, 0, 1, ''),
(40, 'as', 1, 3, 34, 0, 3, ''),
(41, 'asx', 1, 3, 34, 0, 2, ''),
(44, 'asd', 1, 3, 34, 0, 2, ''),
(45, 'asds', 1, 3, 34, 0, 3, ''),
(46, 'asdsf', 1, 3, 34, 0, 3, ''),
(47, 'sets', 1, 3, 34, 0, 1, ''),
(48, 'sets', 1, 3, 34, 0, 1, ''),
(49, 'drgd', 1, 3, 35, 0, 1, ''),
(50, 'sef', 1, 3, 35, 0, 3, ''),
(51, '', 1, 3, 35, 0, 3, ''),
(52, '', 1, 3, 35, 0, 3, ''),
(53, 'sfsef', 1, 3, 35, 0, 2, ''),
(54, 'aa', 1, 3, 35, 0, 3, ''),
(55, 'QEW', 1, 3, 35, 0, 1, ''),
(56, 'dd', 1, 3, 35, 0, 3, ''),
(57, 'adas', 1, 3, 35, 0, 2, ''),
(58, '', 1, 3, 35, 0, 2, ''),
(59, '', 1, 3, 35, 0, 2, ''),
(60, '', 1, 3, 35, 0, 2, ''),
(61, '', 1, 3, 35, 0, 2, ''),
(62, '', 1, 3, 35, 0, 2, ''),
(63, '', 1, 3, 35, 0, 2, ''),
(64, '', 1, 3, 35, 0, 2, ''),
(65, '', 1, 3, 35, 0, 2, ''),
(66, '', 1, 3, 35, 0, 1, ''),
(67, 'rgd', 1, 3, 35, 0, 2, ''),
(68, '1234', 1, 3, 36, 0, 1, ''),
(69, '7348', 1, 3, 37, 0, 2, ''),
(70, 'drgd', 1, 3, 39, 1, 2, '-ddsdsds'),
(71, 'xf', 1, 3, 39, 1, 1, '-ssss'),
(72, 'dfbr', 1, 3, 39, 1, 3, '-adfsfsfdf'),
(73, 'xdfg', 1, 3, 39, 0, 3, 'wwwwwwwwww'),
(74, 'assas', 1, 3, 39, 1, 1, '-w'),
(75, 'dgd', 1, 3, 40, 0, 1, '-'),
(76, 'ut6u', 1, 3, 40, 0, 2, '-'),
(77, 'wdadas', 1, 3, 41, 0, 3, '-'),
(78, 'fth', 1, 3, 43, 0, 1, '-'),
(79, 'awd', 1, 3, 43, 0, 2, '-'),
(80, 'haha', 1, 3, 43, 0, 3, '-'),
(81, 'tttttttt', 1, 3, 43, 0, 1, '-');

-- --------------------------------------------------------

--
-- Estrutura para tabela `game`
--

CREATE TABLE `game` (
  `idGame` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `time` time NOT NULL,
  `finish` tinyint(1) NOT NULL,
  `correction` tinyint(1) NOT NULL,
  `grade` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `game`
--

INSERT INTO `game` (`idGame`, `idUser`, `time`, `finish`, `correction`, `grade`) VALUES
(1, 3, '00:10:14', 0, 0, 0),
(3, 3, '00:14:44', 0, 0, 0),
(4, 3, '00:12:54', 0, 0, 0),
(5, 3, '00:13:54', 0, 0, 0),
(6, 3, '00:14:05', 0, 0, 0),
(7, 3, '00:10:19', 0, 0, 0),
(8, 3, '00:15:00', 0, 0, 0),
(9, 3, '00:15:00', 0, 0, 0),
(10, 3, '00:14:52', 0, 0, 0),
(11, 3, '00:00:00', 0, 0, 0),
(12, 3, '00:11:10', 0, 0, 0),
(13, 3, '00:02:40', 0, 0, 0),
(14, 3, '00:10:56', 0, 0, 0),
(15, 3, '00:14:04', 0, 0, 0),
(16, 3, '00:12:56', 0, 0, 0),
(17, 3, '00:14:36', 0, 0, 0),
(18, 3, '00:15:00', 0, 0, 0),
(19, 3, '00:13:21', 0, 0, 0),
(20, 3, '00:12:18', 0, 0, 0),
(21, 3, '00:11:50', 0, 0, 0),
(22, 3, '00:15:00', 0, 0, 0),
(23, 3, '00:13:15', 0, 0, 0),
(24, 3, '00:14:34', 0, 0, 0),
(25, 3, '00:13:28', 0, 0, 0),
(26, 3, '00:06:12', 0, 0, 0),
(27, 3, '00:12:55', 0, 0, 0),
(28, 3, '00:13:05', 0, 0, 0),
(29, 3, '00:13:12', 0, 0, 0),
(30, 3, '00:00:00', 0, 0, 0),
(31, 3, '00:00:00', 0, 0, 0),
(32, 3, '00:00:00', 0, 0, 0),
(33, 3, '00:00:00', 0, 0, 0),
(34, 3, '00:00:00', 0, 0, 0),
(35, 3, '00:00:34', 0, 0, 0),
(36, 3, '00:12:35', 0, 0, 0),
(37, 3, '00:14:15', 0, 0, 0),
(38, 3, '00:10:35', 0, 0, 0),
(39, 3, '00:06:17', 1, 1, 8),
(40, 3, '00:00:00', 0, 0, 0),
(41, 3, '00:11:36', 0, 0, 0),
(42, 7, '00:15:00', 0, 0, 0),
(43, 3, '00:12:51', 0, 0, 0),
(44, 3, '00:12:02', 0, 0, 0),
(45, 3, '00:12:37', 0, 0, 0),
(46, 3, '00:14:25', 0, 0, 0),
(47, 3, '00:14:12', 0, 0, 0),
(48, 3, '00:12:50', 0, 0, 0),
(49, 3, '00:13:25', 1, 0, 0),
(50, 3, '00:12:06', 1, 0, 0),
(51, 3, '00:14:35', 0, 0, 0),
(52, 3, '00:14:39', 0, 0, 0),
(53, 3, '00:13:25', 1, 0, 0),
(54, 3, '00:14:19', 1, 0, 0),
(55, 3, '00:14:48', 1, 0, 0),
(56, 3, '00:12:38', 1, 0, 0),
(57, 3, '00:14:57', 1, 0, 0);

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
(3, 'teste', 'teste2@gmail.com', '$2y$10$Bcakk8S38szZM0VTb8gbU.nu6j2po3zgxbrHG2Wc3Vw9bWPhWM2PC', 0),
(7, 'prof', 'teste3@gmail.com', '$2y$10$.BBADI1jhTh87mQ1CtkxL.hbOhPZ3LtlDWh/yaNXgaQyjDCCzesGe', 1);

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
  MODIFY `idAnsPhase` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `answeruser`
--
ALTER TABLE `answeruser`
  MODIFY `idAnsUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `game`
--
ALTER TABLE `game`
  MODIFY `idGame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `phases`
--
ALTER TABLE `phases`
  MODIFY `idPhases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
