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

delete from design_tables where table_name='slider';
delete from design_tables where table_name='slider';



DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` char(50) DEFAULT NULL COMMENT 'раздел',
  `locale` char(20) DEFAULT NULL,
  `alt` char(255) DEFAULT NULL,
  `poz` int(11) DEFAULT NULL,
  `url` char(255) DEFAULT NULL,
  `caption1` char(255) DEFAULT NULL,
  `caption2` char(255) DEFAULT NULL,
  `caption3` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='разные слайдеры';
/*!40101 SET character_set_client = @saved_cs_client */;

INSERT INTO `design_tables` (`interface_name`, `table_name`, `table_type`, `col_name`, `caption_style`, `row_type`, `col_por`, `pole_spisok_sql`, `pole_global_const`, `pole_prop`, `pole_type`, `pole_style`, `pole_name`, `default_sql`, `functions_befo`, `functions_after`, `functions_befo_out`, `functions_befo_del`, `properties`, `value`, `validator`, `sort_item_flag`, `col_function_array`) VALUES 
  ('slider', 'slider', 0, 'img', '', 0, 0, 'select * from slider where category=''$pole_dop0'' and locale=''$pole_dop1''  order by poz desc', '', '1,1,0,0', 'img', '0', 'id', 'delete from slider where id=$id', '', '', '', '', '', 0x613A323A7B733A32343A22666F726D5F656C656D656E74735F6E65775F7265636F7264223B733A313A2230223B733A32343A22666F726D5F656C656D656E74735F6A6D705F7265636F7264223B733A313A2230223B7D, 'slider', 1, ''),
  ('slider', 'slider', 0, '', '', 1, 0, '', '', 'onChange=this.form.submit()', '4', '', '', '', '', '', '\\Mf\\Slider\\Lib\\Func\\GetCatregoryList', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', '', '', 0, ''),
  ('slider', 'slider', 0, 'category', '', 2, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'category', '', 3, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '', '', 1, 0, '', '', 'onChange=this.form.submit()', '4', '', '', '', '', '', '\\Mf\\Slider\\Lib\\Func\\GetLocales', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', '', '', 0, ''),
  ('slider', 'slider', 0, 'locale', '', 2, 0, '', '', '', '0', '', 'pole_dop1', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'locale', '', 3, 0, '', '', '', '0', '', 'pole_dop1', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'poz', '', 2, 1, '', '', 'size=5', '2', '', 'poz', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'poz', '', 3, 0, '', '', 'size=5', '2', '', 'poz', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'alt', '', 2, 4, '', '', 'cols=60 row=5', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'alt', '', 3, 0, '', '', 'cols=60 row=5', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'url', '', 2, 5, '', '', '', '2', '', 'url', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'url', '', 3, 0, '', '', '', '2', '', 'url', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'img', '', 2, 8, '', '', '', '32', '', 'img', '', '\\Mf\\Slider\\Lib\\Func\\InImgLib', '', '', '', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'img', '', 3, 0, '', '', '', '32', '', 'img', '', '\\Mf\\Slider\\Lib\\Func\\InImgLib', '', '\\Mf\\Slider\\Lib\\Func\\OutImgLib', '', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '1', '', 2, 19, '', '', '', '19', '', 'save', '', '', '', '', '', 'a:2:{i:0;s:1:\"1\";i:1;s:16:\"Добавить\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '1', '', 3, 0, '', '', ',', '17', '', 'save,del', '', '', '', '', '', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"0\";i:2;s:33:\"Сохранить,Удалить\";i:3;s:1:\"0\";}', '', 'N;', 0, 'N;');

INSERT INTO `design_tables_text_interfase` (`language`, `table_type`, `interface_name`, `item_name`, `text`) VALUES 
  ('ru_RU', 0, 'slider', 'caption0', 'Разные слайдеры'),
  ('ru_RU', 0, 'slider', 'caption_dop_0', 'Раздел:'),
  ('ru_RU', 0, 'slider', 'caption_dop_1', 'Локаль:'),
  ('ru_RU', 0, 'slider', 'caption_col_poz', 'порядок'),
  ('ru_RU', 0, 'slider', 'caption_col_alt', 'alt подпись'),
  ('ru_RU', 0, 'slider', 'caption_col_url', 'URL перехода'),
  ('ru_RU', 0, 'slider', 'caption_col_img', 'Слайд'),
  ('ru_RU', 0, 'slider', 'caption_col_1', 'Операция');


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

