-- MySQL dump 10.13  Distrib 5.6.37, for FreeBSD11.0 (i386)
--
-- Host: localhost    Database: simba4
-- ------------------------------------------------------
-- Server version	5.6.37

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

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` char(50) DEFAULT NULL COMMENT 'раздел',
  `name` char(255) DEFAULT NULL,
  `locale` char(20) DEFAULT NULL,
  `alt` char(255) DEFAULT NULL,
  `poz` int(11) DEFAULT NULL,
  `url` char(255) DEFAULT NULL COMMENT 'URL внешнего перехода',
  `link` char(255) DEFAULT NULL COMMENT 'внутренний переход',
  `caption1` char(255) DEFAULT NULL,
  `caption2` char(255) DEFAULT NULL,
  `caption3` char(255) DEFAULT NULL,
  `title` char(255) DEFAULT NULL,
  `keywords` char(255) DEFAULT NULL,
  `description` text,
    `info` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `category` (`category`),
  KEY `link` (`link`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='разные слайдеры';


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

