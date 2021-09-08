-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydatabase
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `province` (
  `code` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `risk` decimal(10,1) DEFAULT NULL,
  `name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `meds` int DEFAULT NULL,
  `confirmed` int DEFAULT NULL,
  `recovered` int DEFAULT NULL,
  `dead` int DEFAULT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `province`
--

LOCK TABLES `province` WRITE;
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` VALUES ('id-1024',1.1,'Riau Islands',3368,22680,18844,468),('id-ac',0.9,'Aceh',3594,18439,141,745),('id-ba',2.4,'Bali',2676,49206,45394,1136),('id-bb',1.0,'Bangka Belitung Islands',697,20336,19318,321),('id-be',0.5,'Bengkulu',770,9178,8221,187),('id-bt',2.6,'Banten',3549,53472,486,1323),('id-go',0.3,'Gorontalo',169,5690,5341,180),('id-ib',0.5,'West Papua',262,9725,9285,178),('id-ja',0.6,'Jambi',1917,12171,10021,233),('id-ji',8.2,'East Java',5673,165013,147245,12095),('id-jk',23.9,'Jakarta',32521,482264,441821,7922),('id-jr',17.4,'West Java',32485,350719,313526,4708),('id-jt',11.5,'Central Java',27684,232839,19513,10025),('id-kb',0.7,'West Kalimantan',103,13367,12167,170),('id-ki',3.7,'East Kalimantan',1604,74069,70701,1764),('id-kr',1.0,'Lampung',1236,20392,1807,1086),('id-ks',1.8,'South Kalimantan',641,35607,33913,1053),('id-kt',1.2,'Central Kalimantan',3686,24570,20355,529),('id-ku',0.6,'North Kalimantan',645,12707,11867,195),('id-la',0.2,'North Maluku',148,4749,4478,123),('id-ma',0.4,'Maluku',412,8097,7552,133),('id-nb',0.6,'West Nusa Tenggara',1701,12803,10619,483),('id-nt',0.9,'East Nusa Tenggara',864,17468,16153,451),('id-pa',1.0,'Papua',8936,20720,11571,213),('id-ri',3.4,'Riau',282,68154,63483,1851),('id-sb',2.4,'West Sumatera',903,48562,46123,1536),('id-se',3.1,'South Sulawesi',737,63160,61459,964),('id-sg',0.5,'Southeast Sulawesi',414,10791,10154,223),('id-sl',1.4,'South Sumatra',1335,27370,24649,1386),('id-sr',0.3,'West Sulawesi',101,5667,5445,121),('id-st',0.7,'Central Sulawesi',252,13260,12621,387),('id-su',1.7,'North Sumatra',291,34869,30801,1158),('id-sw',0.8,'North Sulawesi',246,16008,15211,551),('id-yo',2.7,'Yogyakarta',6467,53978,46116,1395);
/*!40000 ALTER TABLE `province` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-27 19:45:32
