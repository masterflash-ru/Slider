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
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `category` (`category`),
  KEY `link` (`link`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='разные слайдеры';

/*!40101 SET character_set_client = @saved_cs_client */;

INSERT INTO `design_tables` (`interface_name`, `table_name`, `table_type`, `col_name`, `caption_style`, `row_type`, `col_por`, `pole_spisok_sql`, `pole_global_const`, `pole_prop`, `pole_type`, `pole_style`, `pole_name`, `default_sql`, `functions_befo`, `functions_after`, `functions_befo_out`, `functions_befo_del`, `properties`, `value`, `validator`, `sort_item_flag`, `col_function_array`) VALUES 
  ('slider', 'slider', 0, 'img', 'a:3:{s:10:\"owner_user\";s:1:\"0\";s:11:\"owner_group\";s:1:\"0\";s:10:\"permission\";i:484;}', 0, 0, 'select * from slider where category=''$pole_dop0'' and locale=''$pole_dop1''  order by poz desc', '', '1,1,0,0', 'name', '', 'id', 'delete from slider where id=$id', '', '', '', '', '', 0x613A323A7B733A32343A22666F726D5F656C656D656E74735F6E65775F7265636F7264223B733A313A2230223B733A32343A22666F726D5F656C656D656E74735F6A6D705F7265636F7264223B733A313A2230223B7D, 'slider', 1, ''),
  ('slider', 'slider', 0, '', '', 1, 0, '', '', 'onChange=this.form.submit()', '4', '', '', '', '', '', '\\Mf\\Slider\\Lib\\Func\\GetCatregoryList', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', '', '', 0, ''),
  ('slider', 'slider', 0, 'category', '', 2, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'category', '', 3, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '', '', 1, 0, '', '', 'onChange=this.form.submit()', '4', '', '', '', '', '', '\\Mf\\Slider\\Lib\\Func\\GetLocales', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', '', '', 0, ''),
  ('slider', 'slider', 0, 'locale', '', 2, 0, '', '', '', '0', '', 'pole_dop1', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'locale', '', 3, 0, '', '', '', '0', '', 'pole_dop1', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'poz', '', 2, 2, '', '', 'size=5', '2', '', 'poz', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'poz', '', 3, 0, '', '', 'size=5', '2', '', 'poz', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'alt', '', 2, 4, '', '', 'cols=50 rows=6', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'alt', '', 3, 0, '', '', 'cols=50 rows=6', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'url', '', 2, 5, '', '', '', '2', '', 'url', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'url', '', 3, 0, '', '', '', '2', '', 'url', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'img', '', 2, 8, '', '', '', '32', '', 'img', '', '\\Mf\\Slider\\Lib\\Func\\InImgLib', '', '', '', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'img', '', 3, 0, '', '', '', '32', '', 'img', '', '\\Mf\\Slider\\Lib\\Func\\InImgLib', '', '\\Mf\\Slider\\Lib\\Func\\OutImgLib', '', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '1', '', 2, 19, '', '', '', '19', '', 'save', '', '', '', '', '', 'a:2:{i:0;s:1:\"1\";i:1;s:16:\"Добавить\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, '1', '', 3, 0, '', '', ',', '17', '', 'save,del', '', '', '', '', '', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"0\";i:2;s:33:\"Сохранить,Удалить\";i:3;s:1:\"0\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'name', '', 2, 2, '', '', '', '2', '', 'name', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'name', '', 3, 0, '', '', '', '2', '', 'name', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'id', '', 2, 1, '', '', '', '1', '', 'id', '', '', '', '', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', 0xD09AD0BED0BDD182D0B5D0BDD18220D0BBD0BED0BAD0B0D0BBD18CD0BDD0BED0B920D181D182D180D0B0D0BDD0B8D186D18B, 'N;', 0, 'N;'),
  ('slider', 'slider', 0, 'id', '', 3, 0, '', '', '', '49', '', 'id', '', '', '', '', '', 'a:5:{i:0;s:1:\"0\";i:1;s:12:\"slider_detal\";i:2;s:0:\"\";i:3;s:1:\"0\";i:4;s:6:\"button\";}', 0xD0A0D0B5D0B4D0B0D0BAD182D0B8D180D0BED0B2D0B0D182D18C, 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, '', 'a:3:{s:10:\"owner_user\";s:1:\"0\";s:11:\"owner_group\";s:1:\"0\";s:10:\"permission\";i:484;}', 0, 1, 'select * from slider where id=$get_interface_input', '', '0,0,0,0', 'name', '', 'id', '', '', '', '', '', '', 0x613A323A7B733A32343A22666F726D5F656C656D656E74735F6E65775F7265636F7264223B733A313A2230223B733A32343A22666F726D5F656C656D656E74735F6A6D705F7265636F7264223B733A313A2230223B7D, 'slider', 1, ''),
  ('slider_detal', 'slider', 0, 'name', '', 2, 1, '', '', 'size=120', '2', '', '', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'name', '', 3, 0, '', '', 'size=120', '2', '', 'name', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'alt', '', 2, 2, '', '', 'cols=120 rows=4', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'alt', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'link', '', 2, 4, '', '', 'size=120', '2', '', 'link', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'link', '', 3, 0, '', '', 'size=120', '2', '', 'link', '', '', '', '', '', 'a:1:{i:0;s:4:\"Text\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption1', '', 2, 6, '', '', 'cols=120 rows=4', '3', '', 'alt', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption1', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'caption1', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption2', '', 2, 7, '', '', 'cols=120 rows=4', '3', '', 'caption2', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption2', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'caption2', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption3', '', 2, 8, '', '', 'cols=120 rows=4', '3', '', 'caption3', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'caption3', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'caption3', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'info', '', 2, 9, '', '[''public_media_folder'']', ',', '39', '', 'info', '', '', '', '', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:7:\"default\";i:3;s:7:\"default\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'info', '', 3, 0, '', '[''public_media_folder'']', ',', '39', '', 'info', '', '', '', '', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:7:\"default\";i:3;s:7:\"default\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'title', '', 2, 10, '', '', 'cols=120 rows=4', '3', '', 'title', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'title', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'title', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'keywords', '', 2, 11, '', '', 'cols=120 rows=4', '3', '', 'keywords', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'keywords', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'keywords', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'description', '', 2, 12, '', '', 'cols=120 rows=4', '3', '', 'description', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, 'description', '', 3, 0, '', '', 'cols=120 rows=4', '3', '', 'description', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, '1', '', 2, 35, '', '', '', '19', '', 'save', '', '', '', '', '', 'a:2:{i:0;s:1:\"1\";i:1;s:16:\"Добавить\";}', '', 'N;', 0, 'N;'),
  ('slider_detal', 'slider', 0, '1', '', 3, 0, '', '', ',', '17', '', 'save,del', '', '', '', '', '', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"0\";i:2;s:33:\"Сохранить,Удалить\";i:3;s:1:\"0\";}', '', 'N;', 0, 'N;');


INSERT INTO `design_tables_text_interfase` (`language`, `table_type`, `interface_name`, `item_name`, `text`) VALUES 
  ('ru_RU', 0, 'slider', 'caption0', 'Разные слайдеры'),
  ('ru_RU', 0, 'slider', 'caption_dop_0', 'Раздел:'),
  ('ru_RU', 0, 'slider', 'caption_dop_1', 'Локаль:'),
  ('ru_RU', 0, 'slider', 'caption_col_poz', 'порядок'),
  ('ru_RU', 0, 'slider', 'caption_col_alt', 'alt подпись'),
  ('ru_RU', 0, 'slider', 'caption_col_url', 'URL внешнего перехода'),
  ('ru_RU', 0, 'slider', 'caption_col_img', 'Слайд'),
  ('ru_RU', 0, 'slider', 'caption_col_1', 'Операция'),
  ('ru_RU', 0, 'slider', 'caption_col_name', 'Имя слайда'),
  ('ru_RU', 0, 'slider', 'caption_col_id', 'Подробно'),
  ('ru_RU', 0, 'slider', 'values_message_id2', 'Контент локальной страницы'),
  ('ru_RU', 0, 'slider', 'values_message_id2', 'Контент локальной страницы'),
  ('ru_RU', 0, 'slider', 'values_message_id2', 'Контент локальной страницы'),
  ('ru_RU', 0, 'slider', 'values_message_id3', 'Контент локальной страницы'),
  ('ru_RU', 0, 'slider', 'values_message_id3', 'Локальная страница'),
  ('ru_RU', 0, 'slider', 'values_message_id3', 'Редактировать'),
  ('ru_RU', 0, 'slider_detal', 'caption0', 'Локальная страница слайдера'),
  ('ru_RU', 0, 'slider_detal', 'coment0', 'Отдельная страница куда переходим если указан LINK, если он не указан, то открыть эту страницу нельзя'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_name', 'Имя слайда'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_alt', 'ALT'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_link', 'URL этой страницы '),
  ('ru_RU', 0, 'slider_detal', 'caption_col_caption1', 'Надпись 1'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_caption2', 'Надпись 2'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_caption3', 'Надпись 3'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_info', 'Контент локальной страницы'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_title', 'TITLE'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_keywords', 'KEYWORDS'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_description', 'DESCRIPTION'),
  ('ru_RU', 0, 'slider_detal', 'caption_col_1', 'Операция');

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

