CREATE DATABASE  IF NOT EXISTS `tasi1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tasi1`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tasi1
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreusuario` varchar(45) NOT NULL,
  `correousuario` varchar(45) DEFAULT NULL,
  `passwordusuario` varchar(45) NOT NULL,
  `tipousuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS 'curso';
CREATE TABLE 'curso'(
  'idcurso' int(11) NOT NULL AUTO_INCREMENT,
  'nombrecurso' varchar(45) NOT NULL,
  'codigocurso' varchar(7) NOT NULL,
  PRIMARY KEY('idcurso')
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'software';
CREATE TABLE 'software'(
  'idsoftware' int(11) NOT NULL AUTO_INCREMENT,
  'nombresoftware' varchar(45) NOT NULL,
  'codigocurso' varchar(7) NOT NULL,
  PRIMARY KEY('idsoftware')
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'sistemaOperativo';
CREATE TABLE 'sistemaOperativo'(
  'idsistemaOperativo' int(11) NOT NULL AUTO_INCREMENT,
  'nombresistemaOperativo' varchar(45) NOT NULL,  
  PRIMARY KEY('idsistemaOperativo')
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'solicitud';
CREATE TABLE 'solicitud'(
  'idsolicitud' int(11) NOT NULL AUTO_INCREMENT,
  'estado' varchar(15) NOT NULL,
  'version' varchar(15) NOT NULL,
  'observacionesProfesor' varchar(45) NOT NULL,
  'observacionesSoporte' varchar(45) NOT NULL,
  PRIMARY KEY('idsolicitud'),
  FOREIGN KEY (idsoftware)
    REFERENCES software(idsoftware)
    ON DELETE CASCADE,
  FOREIGN KEY (idsistemaOperativo)
    REFERENCES sistemaOperativo(idsistemaOperativo)
    ON DELETE CASCADE,
  FOREIGN KEY (idcurso)
    REFERENCES curso(idcurso)
    ON DELETE CASCADE,
  FOREIGN KEY (idusuario)
    REFERENCES usuario(idusuario)
    ON DELETE CASCADE,
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'master','scama@pucp.pe','master','admin'),(2,'user','user@pucp.pe','user','profesor');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'tasi1'
--

--
-- Dumping routines for database 'tasi1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-15 22:53:35
