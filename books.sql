-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: books
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Curt Reichel 8',NULL,NULL,NULL),(2,'Kathryn Keebler',NULL,NULL,NULL),(3,'Dr. Kariane Becker',NULL,NULL,NULL),(4,'Shayna DuBuque',NULL,NULL,NULL),(5,'Ms. Anya Koepp',NULL,NULL,NULL),(6,'Arnulfo Johnson',NULL,NULL,NULL),(7,'Pablo Pacocha PhD',NULL,NULL,NULL),(8,'Delaney Ullrich',NULL,NULL,NULL),(9,'Cyril Gutkowski',NULL,NULL,NULL),(10,'Mrs. Heidi Durgan',NULL,NULL,NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (2,1,'Cartwright Bypass',NULL,NULL),(3,1,'Romaguera Fall',NULL,NULL),(4,1,'Brekke Islands',NULL,NULL),(5,1,'O\'Connell Parkway',NULL,NULL),(6,2,'Kylee Trace',NULL,NULL),(7,2,'Dach Stream',NULL,NULL),(8,2,'McKenzie Manors',NULL,NULL),(9,2,'Eichmann Overpass',NULL,NULL),(10,2,'Jairo Ford',NULL,NULL),(11,3,'Beer Haven',NULL,NULL),(12,3,'Gislason Track',NULL,NULL),(13,3,'Ledner Villages',NULL,NULL),(14,3,'Einar Stream',NULL,NULL),(15,3,'Dach Highway',NULL,NULL),(16,4,'Lydia Ville',NULL,NULL),(17,4,'Jewel Course',NULL,NULL),(18,4,'Tomasa Knolls',NULL,NULL),(19,4,'Koepp Shores',NULL,NULL),(20,4,'Carroll Neck',NULL,NULL),(21,5,'Anderson Pine',NULL,NULL),(22,5,'Ryan Rapids',NULL,NULL),(23,5,'Hagenes Pines',NULL,NULL),(24,5,'Leffler Unions',NULL,NULL),(25,5,'Stokes Isle',NULL,NULL),(26,6,'Bahringer Streets',NULL,NULL),(27,6,'Grant Hollow',NULL,NULL),(28,6,'Lilly Ranch',NULL,NULL),(29,6,'Funk Prairie',NULL,NULL),(30,6,'Spinka Throughway',NULL,NULL),(31,7,'Jacobi Course',NULL,NULL),(32,7,'Jeanette Bridge',NULL,NULL),(33,7,'Kirsten Circles',NULL,NULL),(34,7,'Botsford Plains',NULL,NULL),(35,7,'Janet Street',NULL,NULL),(36,8,'Rosenbaum Junction',NULL,NULL),(37,8,'Connelly Station',NULL,NULL),(38,8,'Tromp Stream',NULL,NULL),(39,8,'Raleigh Cliffs',NULL,NULL),(40,8,'Pfannerstill Gateway',NULL,NULL),(41,9,'Wiza Cape',NULL,NULL),(42,9,'Samir Rapids',NULL,NULL),(43,9,'Electa Inlet',NULL,NULL),(44,9,'O\'Kon Bridge',NULL,NULL),(45,9,'Fahey Haven',NULL,NULL),(46,10,'Streich Avenue',NULL,NULL),(47,10,'Leonora Course',NULL,NULL),(48,10,'Caitlyn Locks',NULL,NULL),(49,10,'Cielo Flat',NULL,NULL),(50,10,'Greenholt Locks',NULL,NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_09_03_235528_create_authors_table',1),(4,'2018_09_03_235535_create_books_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'tstttt','admin@admin.com','$2y$10$RqI/irVJ6SZsKp0Sxmxpte8eZxClPTjZ4MwLMl.6nxKitE/dl6X.G',NULL,'2018-09-05 22:37:49','2018-09-05 22:37:49');
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

-- Dump completed on 2018-09-08  1:41:43
