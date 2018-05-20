-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ads
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jerod.zieme@example.com','Jerod','Zieme','jerod.zieme','1-626-214-2975','Mariloushire','1987-06-25 19:10:50','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','3QdjkATTxX8lR0oz25Lvpd0rObkrWzRu4kO8EftH9ilothBQDBk1Oapd4BeC','2018-01-10 15:31:22','2018-01-10 15:31:22'),(2,'justus.champlin@example.com','Justus','Champlin','justus.champlin','+1-590-203-9724','Mariloushire','1999-01-11 17:59:34','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','qhxh6hnpBfrJ3c2bgzPvfyYVsOe5CGRmeGnPHGKiU33AxCkrfwEwfeloHmme','2018-01-10 15:31:22','2018-01-10 15:31:22'),(3,'kyler.walker@example.com','Kyler','Walker','kyler.walker','610.764.0376','Mariloushire','1987-11-08 17:55:33','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','nCff2E3wpNWF1nMJESGOggAjmuLHftACEpElj1PGJ04oUmdeu45DuVYrglK2','2018-01-10 15:31:22','2018-01-10 15:31:22'),(4,'jessie.ledner@example.com','Jessie','Ledner','jessie.ledner','1-798-820-4338 x25477','Britneyborough','1986-07-09 02:01:33','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','O3XAJAUO4gRCvahV0J20YNYOR9pgs9NSIijiJZzwg6v4848ZLD4hw2V335SW','2018-01-10 15:31:22','2018-01-10 15:31:22'),(5,'blanche.hauck@example.com','Blanche','Hauck','blanche.hauck','+1.853.555.1463','Mariloushire','1954-12-20 04:30:20','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','Qwbmrh7XOA','2018-01-10 15:31:22','2018-01-10 15:31:22'),(6,'dane.bauch@example.com','Dane','Bauch','dane.bauch','1-515-683-3532 x3232','Britneyborough','1981-04-30 15:32:37','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','J2JepMKJXQ','2018-01-10 15:31:22','2018-01-10 15:31:22'),(7,'madelyn.zemlak@example.com','Madelyn','Zemlak','madelyn.zemlak','937.415.2835 x441','Britneyborough','1965-05-30 08:38:39','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','hUFQnVOSMp','2018-01-10 15:31:22','2018-01-10 15:31:22'),(8,'mikayla.baumbach@example.com','Mikayla','Baumbach','mikayla.baumbach','923.468.6111','Savannamouth','1991-10-28 16:07:16','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','pGFcvmx8Po2C3RXweIHXZ1X3C3c4BXVQro42OG51VSUqlrJB6q2X1LxEjtc7','2018-01-10 15:31:22','2018-01-10 15:31:22'),(9,'raina.armstrong@example.com','Raina','Armstrong','raina.armstrong','+1-443-908-0415','Britneyborough','1996-08-21 15:56:58','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','R8CgfsgDoa','2018-01-10 15:31:22','2018-01-10 15:31:22'),(10,'benjamin.rowe@example.com','Benjamin','Rowe','benjamin.rowe','(257) 563-6359','Savannamouth','1999-07-21 02:43:17','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','MhgQ02AWSH','2018-01-10 15:31:22','2018-01-10 15:31:22'),(11,'buford.christiansen@example.com','Buford','Christiansen','buford.christiansen','320-305-7049','Britneyborough','1987-10-05 17:00:58','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','uQrnwpQjar','2018-01-10 15:31:22','2018-01-10 15:31:22'),(12,'elenora.wisozk@example.com','Elenora','Wisozk','elenora.wisozk','459-254-4904','Savannamouth','1962-05-21 11:58:23','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','kQ6HD4Z73L','2018-01-10 15:31:22','2018-01-10 15:31:22'),(13,'carolyn.lindgren@example.com','Carolyn','Lindgren','carolyn.lindgren','1-893-873-0375 x909','Savannamouth','1983-11-14 09:31:22','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','UIkUoZZfJe','2018-01-10 15:31:22','2018-01-10 15:31:22'),(14,'elton.bergstrom@example.com','Elton','Bergstrom','elton.bergstrom','(357) 756-8674','Rupertside','1992-08-04 08:03:49','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','nbo6mMxmqY','2018-01-10 15:31:22','2018-01-10 15:31:22'),(15,'casimir.reilly@example.com','Casimir','Reilly','casimir.reilly','1-891-527-9209','Rupertside','1982-03-14 16:14:25','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','KSSOJA9xhe','2018-01-10 15:31:22','2018-01-10 15:31:22'),(16,'evelyn.towne@example.com','Evelyn','Towne','evelyn.towne','+1-949-752-8880','Rupertside','1978-12-26 09:21:16','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','VAtkqO87NN','2018-01-10 15:31:22','2018-01-10 15:31:22'),(17,'oma.o\'keefe@example.com','Oma','O\'Keefe','oma.o\'keefe','480.596.3908 x66420','Rupertside','1975-09-15 15:44:00','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','nKF2vkiwqr','2018-01-10 15:31:22','2018-01-10 15:31:22'),(18,'oswaldo.schmeler@example.com','Oswaldo','Schmeler','oswaldo.schmeler','1-342-550-7603 x48696','Marvinchester','1977-04-22 11:12:18','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','oEHtHpjzUR','2018-01-10 15:31:22','2018-01-10 15:31:22'),(19,'andreane.reichel@example.com','Andreane','Reichel','andreane.reichel','(393) 664-9105 x6937','Marvinchester','1986-04-18 00:51:39','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','ySsdj2DCSR','2018-01-10 15:31:22','2018-01-10 15:31:22'),(20,'tressa.metz@example.com','Tressa','Metz','tressa.metz','936-521-5104 x2223','Marvinchester','1975-05-26 02:08:52','$2y$10$YnWSbOKGLw2J0aJBC7dC8uUfISgm3.NiW7SNPK58Vx8vtWr1FXNSW','wkdXiW9j6t','2018-01-10 15:31:22','2018-01-10 15:31:22');
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

-- Dump completed on 2018-05-21  0:39:53
