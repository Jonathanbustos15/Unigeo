-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: unigeo
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `modalidad`
--

LOCK TABLES `modalidad` WRITE;
/*!40000 ALTER TABLE `modalidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `modalidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,1,1,1,1,1,1,1,1),(2,1,2,1,1,1,1,1,1),(3,1,3,1,1,1,1,1,1),(4,1,4,1,0,0,1,0,1),(5,1,5,1,0,0,1,0,1),(6,1,6,1,1,1,1,1,1),(7,1,7,1,0,0,1,0,1),(8,2,1,1,0,1,1,0,1),(9,2,2,1,1,1,1,0,1),(10,2,3,1,1,1,1,0,1),(11,2,4,1,0,0,1,0,1),(12,2,5,1,0,0,1,0,1),(13,2,6,1,0,1,1,0,1),(14,2,7,1,0,0,1,0,1),(15,3,1,0,0,0,0,0,1),(16,3,2,0,0,0,0,0,1),(17,3,3,0,0,0,0,0,1),(18,3,4,1,0,0,1,0,1),(19,3,5,1,0,0,1,0,1),(20,3,6,0,0,0,0,0,1),(21,3,7,1,0,0,1,0,1);
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sede`
--

LOCK TABLES `sede` WRITE;
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `snies`
--

LOCK TABLES `snies` WRITE;
/*!40000 ALTER TABLE `snies` DISABLE KEYS */;
/*!40000 ALTER TABLE `snies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tipo_nivel_formacion`
--

LOCK TABLES `tipo_nivel_formacion` WRITE;
/*!40000 ALTER TABLE `tipo_nivel_formacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_nivel_formacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tipo_universidad`
--

LOCK TABLES `tipo_universidad` WRITE;
/*!40000 ALTER TABLE `tipo_universidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_universidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `universidad`
--

LOCK TABLES `universidad` WRITE;
/*!40000 ALTER TABLE `universidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `universidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Jeison Mauricio','Zapata Alonso',1,'80161528','1982-05-27',1,'calle 34 # 45','5438900','jeisonmzapata@outlook.com',1,'$2y$10$r1s7Ur1U2mAuZomiU0UwVeVcoj.d4hM2tD3dThz..MYJG2gkOnZRe',1,'','0000-00-00 00:00:00',1),(2,'Andres Fernando','Gomez',1,'103247211','1992-05-05',1,'calle 34 # 45','5438900','andresfgomeza24@gmail.com',1,'$2y$10$LErnId4uxX483TTE.VjMw.ifio0YAaKPhk4s9rgezqEQiJHn.PoSK',2,'','0000-00-00 00:00:00',1),(3,'jhon','Ardila Lopez',1,'11456451','1993-11-10',1,'Carrera 46 # 25 - 72','4654578','jhonard123@gmail.com',1,'$2y$10$QgR5zMrykN/R4R4cu4.UOuk1elJtzTCMCPQ/cH7QyRmTCqBESUlPS',3,'','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'unigeo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-17 23:41:01
