-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/07/2023 às 13:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concessionaria`
--
DROP DATABASE IF EXISTS `concessionaria`;
CREATE DATABASE IF NOT EXISTS `concessionaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `concessionaria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `renavam` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `anofab` year(4) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `preco` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `veiculos`
--

INSERT INTO `veiculos` (`renavam`, `modelo`, `marca`, `anofab`, `cor`, `preco`) VALUES
(58796413, 'Omega', 'Chevrolet', '2000', 'Prata', 13775.00),
(123456789, 'Palio', 'Fiat', '2000', 'vermelho', 120000.00),
(254697852, 'Fiesta Premium', 'Ford', '2005', 'Azul', 25850.00),
(321654987, 'Corsa Classic', 'Chevrolet', '1995', 'Preto', 25200.00),
(789564211, 'Escort XR4', 'Ford', '1995', 'Preto', 12586.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`renavam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
