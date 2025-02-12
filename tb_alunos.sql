-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/02/2025 às 15:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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

CREATE TABLE `tb_alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
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

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
