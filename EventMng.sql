-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: EventMng
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `Book_an_event`
--

DROP TABLE IF EXISTS `Book_an_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Book_an_event` (
  `type` varchar(30) DEFAULT NULL,
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_guests` bigint(11) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `total` bigint(11) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `decor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `event_type` (`event_type`),
  KEY `venue_name` (`venue_name`),
  KEY `decor` (`decor`),
  CONSTRAINT `Book_an_event_ibfk_1` FOREIGN KEY (`event_type`) REFERENCES `Eventype` (`event_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Book_an_event_ibfk_2` FOREIGN KEY (`venue_name`) REFERENCES `ViewVenue` (`venue_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Book_an_event_ibfk_3` FOREIGN KEY (`decor`) REFERENCES `Decorations` (`decor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Book_an_event_ibfk_4` FOREIGN KEY (`booking_id`) REFERENCES `UserDetails` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Book_an_event`
--

LOCK TABLES `Book_an_event` WRITE;
/*!40000 ALTER TABLE `Book_an_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `Book_an_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Decorations`
--

DROP TABLE IF EXISTS `Decorations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Decorations` (
  `decor` varchar(50) NOT NULL,
  `cost` bigint(11) NOT NULL,
  PRIMARY KEY (`decor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Decorations`
--

LOCK TABLES `Decorations` WRITE;
/*!40000 ALTER TABLE `Decorations` DISABLE KEYS */;
INSERT INTO `Decorations` VALUES ('Arches',50000),('Centerpieces',30000),('Fabric Drapings',50000),('Flowers',70000),('Names and Numbers',40000),('Rental Props',40000),('Sculptures',80000);
/*!40000 ALTER TABLE `Decorations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Equip_inventory`
--

DROP TABLE IF EXISTS `Equip_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Equip_inventory` (
  `e_id` varchar(3) NOT NULL,
  `booking_date` date NOT NULL,
  `qty` int(11) NOT NULL,
   UNIQUE KEY `valid_index` (`booking_date`,`e_id`),
   CONSTRAINT `Equip_inventory_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `Equipments` (`e_id`) ON DELETE CASCADE ON UPDATE CASCADE,
   CONSTRAINT `Equip_inventory_ibfk_2` FOREIGN KEY (`booking_date`) REFERENCES `Book_an_event` (`booking_date`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Equip_inventory`
--

LOCK TABLES `Equip_inventory` WRITE;
/*!40000 ALTER TABLE `Equip_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `Equip_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Equip_select`
--

DROP TABLE IF EXISTS `Equip_select`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Equip_select` (
  `booking_id` int(11) DEFAULT NULL,
  `e_id` varchar(3) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  UNIQUE KEY `Equip_select_unique_index` (`booking_id`,`e_id`,`booking_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Equip_select`
--

LOCK TABLES `Equip_select` WRITE;
/*!40000 ALTER TABLE `Equip_select` DISABLE KEYS */;
/*!40000 ALTER TABLE `Equip_select` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`sakshi`@`localhost`*/ /*!50003 TRIGGER EquipValid_Insert AFTER INSERT ON Equip_select FOR EACH ROW 
BEGIN
DECLARE l_rows INT DEFAULT 0;
update Equip_inventory modify set qty=qty+1 where e_id=new.e_id and booking_date =new.booking_date;
SELECT ROW_COUNT() INTO l_rows;
IF (l_rows = 0) THEN
insert into Equip_inventory values(new.e_id,new.booking_date,1);
end if;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Equipments`
--

DROP TABLE IF EXISTS `Equipments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Equipments` (
  `e_id` varchar(3) NOT NULL,
  `equip` varchar(50) NOT NULL,
  `cost` bigint(11) NOT NULL,
  `total` int(3) NOT NULL,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `equip` (`equip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Equipments`
--

LOCK TABLES `Equipments` WRITE;
/*!40000 ALTER TABLE `Equipments` DISABLE KEYS */;
INSERT INTO `Equipments` VALUES ('e1','Air Conditioner',500000,10),('e2','DJ',100000,5),('e3','Lighting',700000,20),('e4','Music System',80000,10),('e5','Projector',100000,10),('e6','Stage',600000,5);
/*!40000 ALTER TABLE `Equipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Eventype`
--

DROP TABLE IF EXISTS `Eventype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Eventype` (
  `event_type` varchar(50) NOT NULL,
  PRIMARY KEY (`event_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Eventype`
--

LOCK TABLES `Eventype` WRITE;
/*!40000 ALTER TABLE `Eventype` DISABLE KEYS */;
INSERT INTO `Eventype` VALUES ('Anniversary'),('Baby Shower'),('Birthday'),('Concert'),('Corporate Meetings'),('Graduation'),('Others'),('Retirement'),('Theme Party'),('Wedding');
/*!40000 ALTER TABLE `Eventype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Feedback`
--

DROP TABLE IF EXISTS `Feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` bigint(11) DEFAULT NULL,
  `booking_id` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  UNIQUE KEY `mob_no` (`mob_no`),
  KEY `booking_id` (`booking_id`),
  CONSTRAINT `Feedback_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `UserDetails` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Feedback`
--

LOCK TABLES `Feedback` WRITE;
/*!40000 ALTER TABLE `Feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `Feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Foodtype`
--

DROP TABLE IF EXISTS `Foodtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Foodtype` (
  `type` varchar(30) NOT NULL,
  `cost` bigint(11) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Foodtype`
--

LOCK TABLES `Foodtype` WRITE;
/*!40000 ALTER TABLE `Foodtype` DISABLE KEYS */;
INSERT INTO `Foodtype` VALUES ('Continental',2000),('Indian',1000),('Mexican',3000),('Oriental',2500);
/*!40000 ALTER TABLE `Foodtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserDetails`
--

DROP TABLE IF EXISTS `UserDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserDetails` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` bigint(11) DEFAULT NULL,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserDetails`
--

LOCK TABLES `UserDetails` WRITE;
/*!40000 ALTER TABLE `UserDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ViewVenue`
--

DROP TABLE IF EXISTS `ViewVenue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ViewVenue` (
  `max_guests` int(11) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `cost` bigint(11) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  PRIMARY KEY (`venue_name`),
  KEY `event_type` (`event_type`),
  CONSTRAINT `ViewVenue_ibfk_1` FOREIGN KEY (`event_type`) REFERENCES `Eventype` (`event_type`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ViewVenue`
--

LOCK TABLES `ViewVenue` WRITE;
/*!40000 ALTER TABLE `ViewVenue` DISABLE KEYS */;
INSERT INTO `ViewVenue` VALUES (500,'Bangalore Hotel',50000,'Anniversary'),(700,'Bangalore Palace',200000,'Birthday'),(2000,'Big Hall',200000,'Wedding'),(10000,'Concert Grounds',400000,'Concert'),(500,'Flower Hotel',50000,'Theme Party'),(800,'Huston Hall',70000,'Graduation'),(1000,'Huston Hotel Ashoka',100000,'Retirement'),(500,'Leela Hall',70000,'Anniversary'),(500,'Leela Hotel',70000,'Graduation'),(500,'Lotus Hotel',10000,'Corporate Meetings'),(500,'Lotus Palace',50000,'Anniversary'),(500,'Meet Hall',100000,'Corporate Meetings'),(900,'Mirror Hall',30000,'Baby Shower'),(500,'Ocean View Hotel',90000,'Birthday'),(2000,'Palace Grounds',200000,'Concert'),(500,'Party Hall',50000,'Baby Shower'),(1000,'Queens Hotel',40000,'Retirement'),(7000,'Rose Palace',100000,'Wedding'),(1000,'Sindhoor Hall',100000,'Wedding'),(500,'Taj Hotel',50000,'Anniversary'),(2000,'Wings Hall',100000,'Theme Party');
/*!40000 ALTER TABLE `ViewVenue` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-12 17:17:05
