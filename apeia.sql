-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/08/2023 às 15:30
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
-- Banco de dados: `apeia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_cuidador`
--

CREATE TABLE `tab_cuidador` (
  `cuid_id` int(11) NOT NULL,
  `cuid_email` varchar(255) NOT NULL,
  `cuid_senha` varchar(20) NOT NULL,
  `cuid_nome` varchar(250) NOT NULL,
  `cuid_telefone` varchar(15) NOT NULL,
  `cuid_idade` char(2) DEFAULT NULL,
  `cuid_genero` enum('M','F') DEFAULT NULL,
  `cuid_edereco` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_cuidador`
--

INSERT INTO `tab_cuidador` (`cuid_id`, `cuid_email`, `cuid_senha`, `cuid_nome`, `cuid_telefone`, `cuid_idade`, `cuid_genero`, `cuid_edereco`) VALUES
(1, 'exemplo@gmail.com', 'teste123', 'Mike', '11 95465-9563', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_familia`
--

CREATE TABLE `tab_familia` (
  `fam_id` int(11) NOT NULL,
  `fam_numero` varchar(15) DEFAULT NULL,
  `fam_descricao` varchar(250) NOT NULL,
  `pac_idade` char(3) NOT NULL,
  `pac_genero` enum('M','F') NOT NULL,
  `pac_edereco` varchar(60) DEFAULT NULL,
  `pac_cep` int(11) DEFAULT NULL,
  `pac_estagio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_paciente`
--

CREATE TABLE `tab_paciente` (
  `pac_id` int(11) NOT NULL,
  `pac_nome` varchar(250) NOT NULL,
  `pac_idade` char(3) NOT NULL,
  `pac_genero` enum('M','F') NOT NULL,
  `pac_edereco` varchar(60) DEFAULT NULL,
  `pac_cep` int(11) DEFAULT NULL,
  `pac_estagio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tab_cuidador`
--
ALTER TABLE `tab_cuidador`
  ADD PRIMARY KEY (`cuid_id`);

--
-- Índices de tabela `tab_familia`
--
ALTER TABLE `tab_familia`
  ADD PRIMARY KEY (`fam_id`);

--
-- Índices de tabela `tab_paciente`
--
ALTER TABLE `tab_paciente`
  ADD PRIMARY KEY (`pac_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_cuidador`
--
ALTER TABLE `tab_cuidador`
  MODIFY `cuid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
