-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.37-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para iluminar_db
DROP DATABASE IF EXISTS `iluminar_db`;
CREATE DATABASE IF NOT EXISTS `iluminar_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `iluminar_db`;

-- Copiando estrutura para tabela iluminar_db.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `RevId` int(11) NOT NULL AUTO_INCREMENT,
  `coment` varchar(200) DEFAULT NULL,
  `estrelas` tinyint(4) NOT NULL,
  `idSite` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`RevId`),
  KEY `FK__sites` (`idSite`),
  KEY `FK__users` (`idUser`),
  CONSTRAINT `FK__sites` FOREIGN KEY (`idSite`) REFERENCES `sites` (`SiteId`),
  CONSTRAINT `FK__users` FOREIGN KEY (`idUser`) REFERENCES `users` (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela iluminar_db.reviews: ~2 rows (aproximadamente)
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`RevId`, `coment`, `estrelas`, `idSite`, `idUser`) VALUES
	(1, 'O site é bom, mas acho que dava pra melhorar, sei lá.', 5, 1, 1),
	(2, 'Site topzera, recomendo muito', 2, 3, 1);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Copiando estrutura para tabela iluminar_db.sites
DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `SiteId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`SiteId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela iluminar_db.sites: ~2 rows (aproximadamente)
DELETE FROM `sites`;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` (`SiteId`, `nome`, `url`) VALUES
	(1, 'DIATINF/IFRN', 'http://diatinf.ifrn.edu.br'),
	(3, 'PREFEITURA DO NATAL', 'https://natal.rn.gov.br/');
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;

-- Copiando estrutura para tabela iluminar_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `idade` tinyint(4) NOT NULL,
  `ehDef` tinyint(4) NOT NULL,
  `defLevel` tinyint(4) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `info` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela iluminar_db.users: ~2 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`UserId`, `nome`, `sobrenome`, `idade`, `ehDef`, `defLevel`, `senha`, `info`) VALUES
	(1, 'Jherod', 'Brendon', 18, 1, 1, 'secreto', 'Eu sou um cara excêntrico, não me importo com os pequenos detalhes e pá e pum nas idéia.'),
	(3, 'FlÃ¡vio Silva', 'Maria', 18, 1, NULL, '1234', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
