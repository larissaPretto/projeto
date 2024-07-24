<?php
require_once "../conexao.php";

$sql_insert = "INSERT INTO `answerphase` (`idAnsPhase`, `idPhase`, `description`, `categories`) VALUES
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
(24, 1, 'Observação Direta', 3);";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `answeruser` (`idAnsUser`, `answer`, `idPhases`, `idUser`, `idGame`, `correct`, `categories`, `obs`) VALUES
(1, 'Cadastrar livro: nome, genero, ano', 1, 3, 1, 0, 1, 'Faltaram alguns dados '),
(2, 'Cadastrar autor:nome, pais', 1, 3, 1, 1, 1, '-'),
(3, 'Cadastrar genero: nome, descrição', 1, 3, 1, 1, 1, '-'),
(4, 'Desempenho', 1, 3, 1, 1, 2, '-'),
(5, 'Disponibilidade', 1, 3, 1, 1, 2, '-'),
(6, 'Usabilidade', 1, 3, 1, 1, 2, '-'),
(7, 'Entrevista', 1, 3, 1, 1, 3, '-'),
(8, 'Análise de Documentos', 1, 3, 1, 1, 3, '-'),
(9, 'lllalala', 1, 16, 2, 0, 1, '-');";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `game` (`idGame`, `idUser`, `time`, `date`, `finish`, `correction`, `grade`) VALUES
(1, 3, '00:16:47', '2024-07-14', 1, 1, 8.75),
(2, 16, '00:00:00', '2024-07-14', 0, 0, 0),
(3, 16, '00:19:53', '2024-07-14', 1, 0, 0);";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `phases` (`idPhases`, `name`, `description`) VALUES
(1, 'empresa', 'emmmmmmm');";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}

$sql_insert = "INSERT INTO `user` (`idUser`, `name`, `email`, `password`, `access`) VALUES
(3, 'teste', 'teste@gmail.com', '$2y$10$Bcakk8S38szZM0VTb8gbU.nu6j2po3zgxbrHG2Wc3Vw9bWPhWM2PC', 0),
(7, 'prof', 'prof@gmail.com', '$2y$10$.BBADI1jhTh87mQ1CtkxL.hbOhPZ3LtlDWh/yaNXgaQyjDCCzesGe', 1),
(16, 'test2', 'teste2@gmail.com', '$2y$10$3msa1.M2zV4X2DQZngXlpukFNOuorbwRXZlse1yCqKODznv2wbEzG', 0);";

if ($conectado->multi_query($sql_insert) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conectado->error;
}
