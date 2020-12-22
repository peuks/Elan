-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la table employesmvc. entreprise
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(50) NOT NULL,
  `siret` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table employesmvc.entreprise : ~1 rows (environ)
/*!40000 ALTER TABLE `entreprise` DISABLE KEYS */;
INSERT INTO `entreprise` (`id`, `raisonSociale`, `siret`, `adresse`, `cp`, `ville`) VALUES
	(1, 'ELAN FORMATION', '6646554564654', '202 avenue de Colmar', '67100', 'STRASBOURG'),
	(2, 'CNAM', '6464654555254', '5 route de la Gare', '67000', 'STRASBOURG');
/*!40000 ALTER TABLE `entreprise` ENABLE KEYS */;

-- Export de la structure de la table employesmvc. salarie
CREATE TABLE IF NOT EXISTS `salarie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `dateEntree` date NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SALARIE_ENTREPRISE_FK` (`entreprise_id`),
  CONSTRAINT `SALARIE_ENTREPRISE_FK` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table employesmvc.salarie : ~2 rows (environ)
/*!40000 ALTER TABLE `salarie` DISABLE KEYS */;
INSERT INTO `salarie` (`id`, `nom`, `prenom`, `ville`, `dateNaissance`, `dateEntree`, `entreprise_id`) VALUES
	(1, 'GIBELLO', 'Virgile', 'SCHILTIGHEIM', '1984-01-16', '2013-05-20', 1),
	(2, 'MURMANN', 'Mickaël', 'STRASBOURG', '1985-01-17', '2010-02-01', 1);
/*!40000 ALTER TABLE `salarie` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
