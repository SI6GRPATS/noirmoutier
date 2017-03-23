-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: noirmoutier 
-- ------------------------------------------------------
-- Server version	5.5.35-1ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Citoyen`
--

DROP TABLE IF EXISTS `Citoyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Citoyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `numRue` varchar(6) COLLATE utf8_unicode_ci NULL,
  `adresse` varchar(60) COLLATE utf8_unicode_ci NULL,
  `complement` varchar(60) COLLATE utf8_unicode_ci NULL,
  `departement` char(5) COLLATE utf8_unicode_ci NULL,
  `commune` varchar(30) COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Citoyen`
--

LOCK TABLES `Citoyen` WRITE;
/*!40000 ALTER TABLE `Citoyen` DISABLE KEYS */;
INSERT INTO `Citoyen` VALUES 
(1,'Leclerc','Caty','c.leclerc@hotmail.com','caty','','','','75017',''),
(2,'Dupont','Roland','roland.dupont@gmail.com','roland','','','','93010',''),
(3,'Dupont','Laurent','l.dupont@hotmail.fr','laurent','','','','94230',''),
(4,'Romain','Lionel','lionel.romain.sio@gmail.com','lionel','','','','94130',''),
(5,'Prigent','Ewen','ewen.prigent.sio@gmail.com','ewen','','','','94000','');
/*!40000 ALTER TABLE `Citoyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sport`
--

DROP TABLE IF EXISTS `Sport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sport`
--

LOCK TABLES `Sport` WRITE;
/*!40000 ALTER TABLE `Sport` DISABLE KEYS */;
INSERT INTO `Sport` VALUES 
(1,'Tennis'),
(2,'Volley-ball'),
(3,'Hand-ball'),
(4,'Basket-ball'),
(5,'Saut en hauteur'),
(6,'Aviron'),
(7,'Canne de combat');
/*!40000 ALTER TABLE `Sport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table Structure for table `Niveau`
--
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Niveau` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`niveau` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 /*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `Niveau` VALUES
(1,'Débutant'),
(2,'Intermédiaire'),
(3,'Professionnel');


--
-- Table structure for table `Stage`
--

DROP TABLE IF EXISTS `Stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `idSport` int(11) NOT NULL,
  `idNiveauStage` int(11) NOT NULL,
  `nomSalle` varchar(40) DEFAULT NULL,
  `lieuSalle` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sport_stage` (`idSport`),
  KEY `fk_niveau_stage` (`idNiveauStage`),
  CONSTRAINT `Stage_ibfk_1` FOREIGN KEY (`idSport`) REFERENCES `Sport` (`id`),
  CONSTRAINT `Stage_ibfk_2` FOREIGN KEY (`idNiveauStage`) REFERENCES `Niveau` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stage`
--

LOCK TABLES `Stage` WRITE;
/*!40000 ALTER TABLE `Stage` DISABLE KEYS */;
INSERT INTO `Stage` VALUES 
(1,'2014-10-23','2014-10-25',1,1,'',''),
(2,'2014-10-02','2014-10-04',2,2,'',''),
(3,'2014-12-12','2014-12-13',1,3,'',''),
(4,'2014-12-20','2014-12-22',6,3,'',''),
(5,'2015-01-20','2015-01-25',6,3,'',''),
(6,'2014-12-22','2014-12-25',3,3,'',''),
(7,'2015-01-30','2015-01-30',1,1,'Salle de sports','La Guérinière'),
(8,'2015-01-31','2015-01-31',4,2,'Salle de sports','La Guérinière'),
(9,'2015-01-31','2015-01-31',7,2,'Salle de gymnastique','Barbâtre'),
(10,'2015-02-10','2015-02-11',6,1,'Club No Quarter','Epine');
/*!40000 ALTER TABLE `Stage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratiquer`
--

DROP TABLE IF EXISTS `pratiquer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratiquer` (
  `idCitoyen` int(11) NOT NULL,
  `idSport` int(11) NOT NULL,
  `idNiveauPratique` int(11) NOT NULL,
  PRIMARY KEY (`idCitoyen`,`idSport`),
  KEY `fk_sport_pratiquer` (`idSport`),
  KEY `fk_citoyen_pratiquer` (`idCitoyen`),
  KEY `fk_niveau_pratiquer` (`idNiveauPratique`),
  CONSTRAINT `pratiquer_ibfk_1` FOREIGN KEY (`idCitoyen`) REFERENCES `Citoyen` (`id`),
  CONSTRAINT `pratiquer_ibfk_2` FOREIGN KEY (`idSport`) REFERENCES `Sport` (`id`),
  CONSTRAINT `pratiquer_ibfk_3` FOREIGN KEY (`idNiveauPratique`) REFERENCES `Niveau` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratiquer`
--

LOCK TABLES `pratiquer` WRITE;
/*!40000 ALTER TABLE `pratiquer` DISABLE KEYS */;
INSERT INTO `pratiquer` VALUES 
(1,1,1),
(2,6,3),
(3,5,1),
(4,6,1),
(4,7,3),
(5,6,3);
/*!40000 ALTER TABLE `pratiquer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

DROP TABLE IF EXISTS `adherer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adherer` (
  `idCitoyen` int(11) NOT NULL,
  `idStage` int(11) NOT NULL,
  PRIMARY KEY (`idCitoyen`,`idStage`),
  KEY `fk_citoyen_adherer` (`idCitoyen`),
  KEY `fk_stage_pratiquer` (`idStage`),
  CONSTRAINT `adherer_ibfk_1` FOREIGN KEY (`idCitoyen`) REFERENCES `Citoyen` (`id`),
  CONSTRAINT `adherer_ibfk_2` FOREIGN KEY (`idStage`) REFERENCES `Stage` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-25 14:41:24
