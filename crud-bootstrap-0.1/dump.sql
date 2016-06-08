--
-- DbNinja v3.2.6 for MySQL
--
-- Dump date: 2016-03-13 18:04:21 (UTC)
-- Server version: 5.5.46-MariaDB-1ubuntu0.14.04.2
-- Database: crud
--

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

CREATE DATABASE `crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud`;

--
-- Structure for table: dummies
--
CREATE TABLE `dummies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


--
-- Structure for table: users
--
CREATE TABLE `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `naissance_date` date NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;



--
-- Data for table: dummies
--
LOCK TABLES `dummies` WRITE;
ALTER TABLE `dummies` DISABLE KEYS;

INSERT INTO `dummies` (`id`,`name`) VALUES (1,'Lorem'),(2,'Ipsum'),(3,'Dolor'),(4,'Sit'),(5,'Amet');

ALTER TABLE `dummies` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: users
--
LOCK TABLES `users` WRITE;

INSERT INTO `users` (`nom`,`prenom`,`naissance_date`,`telephone`,`adresse`) VALUES ('Bee','Bop','1943-10-10','099090090','St louis\r\nMissouri\r\nUSA'),('Jane','Dark','1023-12-12','','Orléans'),('Rails','Ruby','1984-05-05','','Tokyo, Japan');

UNLOCK TABLES;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

