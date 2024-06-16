-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 22:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_medfarma`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `farmacia`
--

CREATE TABLE `farmacia` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpfcnpj` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereço` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `farmacia`
--

INSERT INTO `farmacia` (`id`, `email`, `senha`, `nome`, `cpfcnpj`, `cep`, `endereço`) VALUES
(3, 'teste.projeto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'teste', '16922779000132', '69073121', 'Rua da Paz, Numero 04, Bairro Crespo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `remedios`
--

CREATE TABLE `remedios` (
  `id_remedio` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_remedio` varchar(50) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `valor` varchar(15) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `remedios`
--
ALTER TABLE `remedios`
  ADD PRIMARY KEY (`id_remedio`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `remedios`
--
ALTER TABLE `remedios`
  MODIFY `id_remedio` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
