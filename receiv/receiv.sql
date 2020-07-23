-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2020 às 02:51
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `receiv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `devedores`
--

CREATE TABLE `devedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  `vencimento` date NOT NULL,
  `alteracao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `devedores`
--

INSERT INTO `devedores` (`id`, `nome`, `cpf`, `nascimento`, `endereco`, `titulo`, `valor`, `vencimento`, `alteracao`) VALUES
(18, 'RAFAEL RODRIGUES MARINHO', 26365698804, '1978-05-14', 'rua Ab', 'cartao', 200, '2020-07-15', '2020-07-22 21:04:04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `devedores`
--
ALTER TABLE `devedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `devedores`
--
ALTER TABLE `devedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
