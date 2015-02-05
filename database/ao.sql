-- MySQL dump 10.13  Distrib 5.1.56, for slackware-linux-gnu (i486)
--
-- Host: localhost    Database: ao
-- ------------------------------------------------------
-- Server version	5.1.56-log

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
-- Table structure for table `auto`
--

DROP TABLE IF EXISTS `auto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auto` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `mm` varchar(150) DEFAULT NULL,
  `oznakaModela` varchar(150) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  `kategorija` varchar(15) DEFAULT NULL,
  `gorivo` varchar(10) DEFAULT NULL,
  `kubikaza` varchar(10) DEFAULT NULL,
  `snaga` varchar(10) DEFAULT NULL,
  `kilometraza` varchar(10) DEFAULT NULL,
  `tipMotora` varchar(10) DEFAULT NULL,
  `godiste` varchar(5) DEFAULT NULL,
  `menjac` varchar(11) DEFAULT NULL,
  `abs` int(1) DEFAULT NULL,
  `esp` int(1) DEFAULT NULL,
  `klima` int(1) DEFAULT NULL,
  `servo` int(1) DEFAULT NULL,
  `xenon` int(1) DEFAULT NULL,
  `servKnjizica` int(1) DEFAULT NULL,
  `opis` varchar(10000) DEFAULT NULL,
  `metalik` int(1) DEFAULT NULL,
  `vreme` int(11) DEFAULT NULL,
  `kor_id` int(11) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`auto_id`),
  KEY `auto_id` (`auto_id`),
  KEY `mm` (`mm`),
  KEY `cena` (`cena`),
  KEY `kategorija` (`kategorija`),
  KEY `gorivo` (`gorivo`),
  KEY `kilometraza` (`kilometraza`),
  KEY `godiste` (`godiste`),
  KEY `kor_id` (`kor_id`),
  KEY `kor_id_2` (`kor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auto`
--

LOCK TABLES `auto` WRITE;
/*!40000 ALTER TABLE `auto` DISABLE KEYS */;
INSERT INTO `auto` VALUES (58,'Alfa Romeo*156','1.9 JTD full',2990,'Limuzina','Dizel','1910','116/85','162984','Euro3','2001','Manuelni',1,0,1,1,0,1,'4 nove zmiske gume.',1,1347045346,2,''),(59,'Alfa Romeo*156','1.9 JTD',2899,'Limuzina','Dizel','1910','110/81','131987','Euro3','2001','Manuelni',1,1,1,1,0,0,'Auto je u odlicnom stanju. Prvi vlasnik.',1,1347045728,2,''),(60,'Alfa Romeo*156','1.8 ts',2290,'Karavan','Benzin','1747','140/103','113000','Euro3','2002','Manuelni',1,0,1,1,0,1,'Automobil je kao nov, u izuzetnom stanju.',1,1347046222,2,''),(61,'Alfa Romeo*156','1.9 mjet',5150,'Karavan','Dizel','1910','150/110','136048','Euro4','2006','',1,1,1,1,0,1,'Automobil je u odlicnom stanju. Drugi vlasnik, prvi u Srbiji. Automobil je uvezen iz Italije.',1,1347046567,2,''),(62,'Alfa Romeo*156','1.9 jtd restyling',4290,'Karavan','Benzin','1910','110/81','119000','Euro3','2003','',1,1,1,1,0,1,'Automobil je u odlicnom stanju.',1,1347046912,2,''),(63,'Alfa Romeo*156','1.9',4300,'Limuzina','Dizel','1910','140/103','185000','Euro3','2004','Manuelni',1,1,1,1,0,1,'Automobil je iz uvoza, placeni su carina i porez. U odlicnom stanju.',1,1347047766,2,''),(64,'Alfa Romeo*156','gta',3450,'Limuzina','Benzin +TN','2492','192/141','112000','Euro3','2002','Manuelni',1,1,1,1,0,1,'Automobil je u izuzetnom stanju.',1,1347048838,2,''),(65,'Alfa Romeo*147','1.9 m jet',3850,'Limuzina','Dizel','1900','140/103','148000','Euro3','2003','',1,1,1,1,0,1,'Automobil je u odlicnom stanju.',1,1347050208,2,''),(66,'Alfa Romeo*147','1.9 jtd',2900,'Limuzina','Dizel','1910','140/103','138000','Euro4','2002','Manuelni',1,1,1,1,1,1,'Uradjeni su veliki i mali servis,bez ulaganja.',1,1347050706,2,'');
/*!40000 ALTER TABLE `auto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kor`
--

DROP TABLE IF EXISTS `kor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kor` (
  `kor_id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `user` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `pass` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `grad` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `adresa` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `tel1` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `tel2` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `tel3` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `nivo` int(11) DEFAULT NULL,
  `vreme` int(11) DEFAULT NULL,
  `pokusaji` int(11) NOT NULL DEFAULT '0',
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kor_id`),
  UNIQUE KEY `kor_id` (`kor_id`),
  KEY `user` (`user`),
  KEY `pass` (`pass`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kor`
--

LOCK TABLES `kor` WRITE;
/*!40000 ALTER TABLE `kor` DISABLE KEYS */;
INSERT INTO `kor` VALUES (1,'Mika','zmaj','CrKHeoJrmU6tE','mika@pera.com','Branka Radicevica 16','010341004','0','0','0',2,1345326875,0,'$1$/gq3ur2a$KiJFdvZ6v/jyMmmjV03uo0'),(2,'Aleksandar Krasic','akikrasic','Cr/ibvBv2OhC6','akikrasic@gmail.com','Pirot','Branka Radicevica 16/7','062341094','010341004','010320589',3,1347048256,0,'$1$QUdR7VmW$Cqs1BCyShyQDSjXvSHiZ81');
/*!40000 ALTER TABLE `kor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p_kor`
--

DROP TABLE IF EXISTS `p_kor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p_kor` (
  `p_kor_id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) DEFAULT NULL,
  `user` varchar(25) DEFAULT NULL,
  `pass` varchar(35) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `grad` varchar(20) DEFAULT NULL,
  `adresa` varchar(45) DEFAULT NULL,
  `tel1` varchar(20) DEFAULT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `tel3` varchar(20) DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `nivo` int(11) DEFAULT NULL,
  `vreme` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_kor_id`),
  UNIQUE KEY `p_kor_id` (`p_kor_id`),
  KEY `user` (`user`),
  KEY `pass` (`pass`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p_kor`
--

LOCK TABLES `p_kor` WRITE;
/*!40000 ALTER TABLE `p_kor` DISABLE KEYS */;
INSERT INTO `p_kor` VALUES (1,'aaaaaaaa','aaaaaaaaa','aaaaaaaaaa','a@b.com','Pirot','aaa','aaaa','aaa','aaa',NULL,NULL,1347020976),(2,'WSofronije','Beki','Pekipekic','beki@pera.com','Pirot be','Branka Radicevica 16/7','062341094','','',NULL,NULL,1347020976),(9,'Rusimov Milan','rus','Crgz6xSFPMiRM','rusmil89@gmail.com','Pirot','Obiliceva 61','0642718765','','','ov98W2YuHUkxUovxdurNN2Kn.YovYsQZt2xQY5sovx7YTcLGDV5E',NULL,1347020976);
/*!40000 ALTER TABLE `p_kor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proba`
--

DROP TABLE IF EXISTS `proba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proba` (
  `kol` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proba`
--

LOCK TABLES `proba` WRITE;
/*!40000 ALTER TABLE `proba` DISABLE KEYS */;
INSERT INTO `proba` VALUES ('Radi');
/*!40000 ALTER TABLE `proba` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-08  5:16:28
