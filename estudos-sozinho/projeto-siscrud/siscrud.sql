-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2024 às 04:52
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
-- Banco de dados: `siscrud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `nome_pai` varchar(100) NOT NULL,
  `nome_mae` varchar(100) NOT NULL,
  `dt_nasc` date NOT NULL,
  `sexo_aluno` varchar(1) NOT NULL,
  `rg_aluno` varchar(100) NOT NULL,
  `cpf_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome_aluno`, `nome_pai`, `nome_mae`, `dt_nasc`, `sexo_aluno`, `rg_aluno`, `cpf_aluno`) VALUES
(2, 'Osiris', 'Nao lembro', 'Miriam', '2006-07-19', 'M', '121131', 12942),
(4, 'Lucas', 'Raphael', 'Amanda', '2006-10-25', 'M', '12121212', 121212121);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disc` int(11) NOT NULL,
  `nome_disc` varchar(100) NOT NULL,
  `sigla_disc` varchar(3) NOT NULL,
  `ch_disc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disc`, `nome_disc`, `sigla_disc`, `ch_disc`) VALUES
(3, 'História', 'HIS', 30),
(4, 'Análises Clínicas', 'ANC', 30);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(11) NOT NULL,
  `matricula_func` int(11) NOT NULL,
  `nome_func` varchar(100) NOT NULL,
  `estado_civil` varchar(100) NOT NULL,
  `dt_nasc` date NOT NULL,
  `sexo_func` varchar(1) NOT NULL,
  `nac_func` varchar(100) NOT NULL,
  `nat_func` varchar(100) NOT NULL,
  `nome_pai` varchar(100) NOT NULL,
  `nome_mae` varchar(100) NOT NULL,
  `esc_func` varchar(100) NOT NULL,
  `rg_func` varchar(100) NOT NULL,
  `cpf_func` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_func`, `matricula_func`, `nome_func`, `estado_civil`, `dt_nasc`, `sexo_func`, `nac_func`, `nat_func`, `nome_pai`, `nome_mae`, `esc_func`, `rg_func`, `cpf_func`) VALUES
(6, 1, 'Derik', 'Solteiro', '2006-04-12', 'M', 'Brasileiro', 'Branco', 'Nao lembro', 'Nao lembro', 'Ensino Médio Técnico', '123123', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(100) NOT NULL,
  `valor_prod` decimal(10,2) NOT NULL,
  `dt_valid_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `valor_prod`, `dt_valid_prod`) VALUES
(8, 'maca', 4.00, '2024-05-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome_usu` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `nivel` enum('0','1') NOT NULL,
  `ativo` varchar(100) NOT NULL,
  `dt_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome_usu`, `senha`, `nivel`, `ativo`, `dt_cadastro`) VALUES
(4, 'Lucas', '$2y$10$WmHxdtwKGuybCVD4e4fiMOW2LkvKAz1onlNCjWKp80ibJ7ppC4q6u', '1', '1', '2024-06-22'),
(5, 'Isabella', '$2y$10$t0FDyyGUpYGUojXTB33vUOFfAVkG.RIf4nHT/ueRxz0KuzqLJ6xNO', '1', '3', '2024-06-22');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disc`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
