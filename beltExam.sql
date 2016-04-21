CREATE DATABASE  IF NOT EXISTS `beltExam` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `beltExam`;
-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 52.39.89.40    Database: beltExam
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `travels`
--

DROP TABLE IF EXISTS `travels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) DEFAULT NULL,
  `description` text,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travels`
--

LOCK TABLES `travels` WRITE;
/*!40000 ALTER TABLE `travels` DISABLE KEYS */;
INSERT INTO `travels` VALUES (1,'Scotland','winter vacation','04/22/2016','04/30/2016',1,'2016-04-21 15:42:48','2016-04-21 15:42:48'),(2,'Mexico','Spring Break','04/22/2016','04/30/2016',2,'2016-04-21 15:48:07','2016-04-21 15:48:07'),(3,'Iceland','i love cold weather','04/21/2016','04/23/2016',2,'2016-04-21 16:01:57','2016-04-21 16:01:57'),(4,'England','because I want to','04/21/2016','08/26/2016',0,'2016-04-21 18:32:06','2016-04-21 18:32:06');
/*!40000 ALTER TABLE `travels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travels_users`
--

DROP TABLE IF EXISTS `travels_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travels_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_travels_users_idx` (`user_id`),
  KEY `fk_users_travels_travels1_idx` (`travel_id`),
  CONSTRAINT `fk_users_travels_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_travels_travels1` FOREIGN KEY (`travel_id`) REFERENCES `travels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travels_users`
--

LOCK TABLES `travels_users` WRITE;
/*!40000 ALTER TABLE `travels_users` DISABLE KEYS */;
INSERT INTO `travels_users` VALUES (1,1,1),(2,2,2),(3,2,3),(4,1,2),(6,7,1),(7,3,4);
/*!40000 ALTER TABLE `travels_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cody','williams','codyw9524@gmail.com','$2y$10$wSVYlrJuyueNsRy3RdtN8uHNxplti/ksBVELUe4mgUBUkxlD3BcKa','2016-04-20 23:08:36','2016-04-20 23:08:36'),(2,'Burt','Bachrach','codyw9524@burt.com','$2y$10$IYxv/h55QSAGV5JtRmGIWe9hD0zIK6ygkvlT86ldNk1smsXt/QEam','2016-04-20 23:35:49','2016-04-20 23:35:49'),(3,'Ziggy','Stardust','codyw9524@ziggy.com','$2y$10$kHCf0hifLTCOiGyi2OVo5OpkIuVKL0yQENuYQZa27k40x2x.tTauS','2016-04-20 23:58:23','2016-04-20 23:58:23'),(4,'Juan','Gonzalez','codyw9524@juan.com','$2y$10$Hx3BT.uoubGH.resjigShuVdr5g9sKl/LJtoYavtIanTiRS3aZZD6','2016-04-21 00:00:39','2016-04-21 00:00:39'),(5,'Micky','Tettleton','codyw9524@micky.com','$2y$10$h3ZaNbbZipzPZug2AdrqfuCMNQYHf8bwOJx895Nq7zPjEaW5wUXw2','2016-04-21 00:02:17','2016-04-21 00:02:17'),(6,'Bernie','Sanders','codyw9524@bernie.com','$2y$10$sdUoxfLPK90haghmKKY3Cu6Gp1/mrGl2vfljOWEecgod5ugaCmibq','2016-04-21 00:03:40','2016-04-21 00:03:40'),(7,'Bob','Barker','codyw9524@bob.com','$2y$10$MQyculJV1ebsfjcevaR5ZeiTFba2DZEh/pBiGZ3NfGTpwZPzlv7g6','2016-04-21 00:07:05','2016-04-21 00:07:05'),(8,'Eric','Williams','codyw9524@eric.com','$2y$10$8zIzDyNQFfCEruHH7dAC2eUIOFnvqkJowVYuqS90l5VZqOOtmmIKm','2016-04-21 13:57:04','2016-04-21 13:57:04'),(9,'Nate','Daugherty','Coridal Corn','$2y$10$32bDf13JNhNB0q8TEbG3oevFjY0O1ymQbIyZPalqRC349qUGuUoYy','2016-04-21 14:26:20','2016-04-21 14:26:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-21 13:43:19
