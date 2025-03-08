-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/02/2025 às 15:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; --Define o SQL. "NO_AUTO_VALUE_ON_ZERO" significa que ao inserir valores que sejam diferentes de 0 e que tenha o tipo AUTO_INCREMENT na coluna, o valor não é tratado como um valor do tipo.
START TRANSACTION; -- Inicia uma transação. A transação faz com que operações realizadas em forma de COMMIT serão como um único bloco que pode ser alterado para algo correto ou par algo reverso.

SET time_zone = "+00:00";-- Define as horas da sessão do banco de dados.



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_chamadinha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` ( -- Cria a tabela chamada de `tb_alunos`
  `id` int(11) NOT NULL, -- adiciona o campo de tipo int, de 11 digitos e não nulo.
  `nome` varchar(255) NOT NULL-- adicona um campo de texto varchar, 255 caracteres e não nulo.
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nome`) VALUES
(1, 'Antônio Gabriel Santos Godoy Carneiro'),
(2, 'Caua Canale Ferreira'),
(3, 'Daniel Camargo de Lima'),
(4, 'David Gabriel Tarley'),
(5, 'Gabriel de Oliveira Domingues Moraes'),
(6, 'Gustavo Sobrera Nunes dos Santos'),
(7, 'Josue Orellana Montenegro'),
(8, 'Kenya Banach Chrominski Jaques'),
(9, 'Leandro Piai Barreto'),
(10, 'Marcia Gisseli Mamani Condarco'),
(11, 'Matheus Dantas de Sousa'),
(12, 'Matheus David'),
(13, 'Matheus Guida'),
(14, 'Matheus Leonardo Ismarsi'),
(15, 'Ryan Lima Germano'),
(16, 'Thiago Bispo Souza'),
(17, 'Victor Huggo Lima da Silva'),
(18, 'Vítor Frazatto Barduco'),
(19, 'Walmir Antonio de Sousa Ribeiro');
-- Insere registros na tabela tb_alunos. Cada linha contém o valor do campo id e o valor do campo nome para cada um aluno específico.

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos` -- Altera um item da tabela
  ADD PRIMARY KEY (`id`);-- Adiciona a chave primária na coluna id na tabela tb_alunos.


--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;-- Modifica a coluna id para ser do tipo AUTO_INCREMENT.
COMMIT;-- Finaliza a transação iniciada com o comando `START TRANSACTION`. Ao fazer isso, todas as mudanças são confirmadas e adicinadas/atualizadas no banco de dados.

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
