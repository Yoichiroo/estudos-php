-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.23 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sistema
DROP DATABASE IF EXISTS `sistema`;
CREATE DATABASE IF NOT EXISTS `sistema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistema`;

-- Copiando estrutura para tabela sistema.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nivel` int(1) unsigned DEFAULT '1',
  `ativo` tinyint(1) DEFAULT '1',
  `cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sistema.usuarios: 3 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
	(3, 'Admin1', 'admin1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin@demo.com.br', 2, 1, '2016-09-13 11:12:00'),
	(5, 'Admin2', 'admin2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin2@mail.com', 3, 1, '2019-04-11 00:00:00'),
	(6, 'Admin3', 'admin3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin3@mail.com', 4, 1, '2019-04-11 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
