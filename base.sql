# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.20)
# Database: agenda
# Generation Time: 2014-09-16 01:38:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table concorrencia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `concorrencia`;

CREATE TABLE `concorrencia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idarquivo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `modalidade` varchar(1024) CHARACTER SET latin1 DEFAULT NULL,
  `numero` varchar(1024) CHARACTER SET latin1 DEFAULT NULL,
  `comissao` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `processo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `nsistema` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataentrada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataenviada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `diaspendentes` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `datapossivel` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `periodoretirada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `recurso` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataabertura` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `horaabertura` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `qntdias` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `numerooficio` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `orgaorequisitante` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `objeto` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `estimadaprojetado` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `estimadoreal` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `adjudicado` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `valoresexpurgados` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `bens` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `observacao` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pessoa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoa`;

CREATE TABLE `pessoa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pregao
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pregao`;

CREATE TABLE `pregao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idarquivo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `modalidade` varchar(1024) CHARACTER SET latin1 DEFAULT NULL,
  `numero` varchar(1024) CHARACTER SET latin1 DEFAULT NULL,
  `comissao` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `processo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `nsistema` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataentrada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataenviada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `diaspendentes` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `datapossivel` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `periodoretirada` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `recurso` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `dataabertura` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `horaabertura` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `qntdias` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `numerooficio` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `orgaorequisitante` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `objeto` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `estimadaprojetado` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `estimadoreal` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `adjudicado` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `valoresexpurgados` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `bens` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `observacao` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table usuario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pessoa` int(11) unsigned NOT NULL,
  `senha` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
