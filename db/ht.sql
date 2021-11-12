-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: ht
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bundle`
--

DROP TABLE IF EXISTS `bundle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bundle` (
  `b_id` int NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vr_rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vd_date` datetime DEFAULT NULL,
  `lb_id` int DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `lb_id` (`lb_id`),
  CONSTRAINT `bundle_ibfk_1` FOREIGN KEY (`lb_id`) REFERENCES `like_button` (`lb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bundle`
--

LOCK TABLES `bundle` WRITE;
/*!40000 ALTER TABLE `bundle` DISABLE KEYS */;
/*!40000 ALTER TABLE `bundle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `e_id` int NOT NULL AUTO_INCREMENT,
  `p_id` int DEFAULT NULL,
  `e_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `pay` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `h_id` int NOT NULL AUTO_INCREMENT,
  `u_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_id` int DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `like_button`
--

DROP TABLE IF EXISTS `like_button`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `like_button` (
  `lb_id` int NOT NULL AUTO_INCREMENT,
  `lb` int DEFAULT NULL,
  `dib` int DEFAULT NULL,
  PRIMARY KEY (`lb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `like_button`
--

LOCK TABLES `like_button` WRITE;
/*!40000 ALTER TABLE `like_button` DISABLE KEYS */;
/*!40000 ALTER TABLE `like_button` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay`
--

DROP TABLE IF EXISTS `pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pay` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay`
--

LOCK TABLES `pay` WRITE;
/*!40000 ALTER TABLE `pay` DISABLE KEYS */;
INSERT INTO `pay` VALUES (15,'12345678','제주','admin@naver.com'),(16,'12345678','제주','asdf@gmail.com');
/*!40000 ALTER TABLE `pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `u_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_rank` int DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`u_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin@naver.com','$2y$10$EN.J.oH1oyrSOH/.mF2ca.uHbLUtmsJ3tURmHnB/LqJZkl/bn.7Q6','주인','0105554545454',0,'2021-11-11 17:08:11'),('asdf@gmail.com','$2y$10$DqSTVvjxaRgN.wC7bWb8fOQyulfvhpNZhBdFaRN/61oXk0IJtAkfm','asdf','01012341234',0,'2021-11-11 17:33:41');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watching`
--

DROP TABLE IF EXISTS `watching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `watching` (
  `w_id` int NOT NULL AUTO_INCREMENT,
  `w_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_id` int DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watching`
--

LOCK TABLES `watching` WRITE;
/*!40000 ALTER TABLE `watching` DISABLE KEYS */;
/*!40000 ALTER TABLE `watching` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-12 15:36:56
