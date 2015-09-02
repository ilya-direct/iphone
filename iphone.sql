-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: iphone
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Замена стекла (экрана) Asus Nexus 7','<p>Сенсорное стекло у Nexus 7 изготовлен из прочного и износостойкого материала Gorilla Glass, которое имеет повышенное сопротивление к царапинам и ударам. Но, не смотря на это, тачскрин может разбиться. Стоит обратить внимание на то, что сенсорное стекло идет в сборе с экраном.</p><div class=\"collapsible collapse-xs collapsed\">\n<div class=\"collapse-container\">\n<p>Замена стекла у Asus Nexus 7 сопровождается полным разбором самого аппарата, для этого потребуется навык ремонта в данной сфере и специальное оборудование, дабы избежать более дорогостоящего ремонта мы не рекомендуем производить данный вид работ без должного опыта. Благодаря нашим специалистам данная услуга будет осуществлена на профессиональном уровне, при ремонтных работах мы используем только качественное оборудование и запчасти. Стоит отметить, что мы работаем только с оригинальными комплектующими и устанавливаем высококачественные дисплеи. </p>\n</div>');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (3,'Замена шлейфов и разъемов'),(2,'Ремонт или замена внутренних компонентов'),(1,'Ремонт кнопок'),(4,'Ремонт материнской платы');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` text,
  `article_id` int(11) NOT NULL,
  `imagename` varchar(100) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_device_article1_idx` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` VALUES (1,'Sony Xperia Z2','Ремонт <b>Sony Xperia Z2</b> в нашем сервисном центре производится опытными специалистами, благодаря чему отремонтированное устройство прослужит Вам еще очень долго. Стоит отметить, что мы используем только качественные и проверенные комплектующие, установка которых гарантирует надежную и стабильную работу смартфона.',0,NULL,NULL),(2,'Nexus 7','Оценить качество планшетов Nexus 7 успели уже многие владельцы данных гаджетов. Но порой и столь надежная техника дает сбой. Как правило у нас ремонт Nexus 7 занимает минимальное количество времени, при наличии требуемых комплектующих, и в 90% случаев услугу можно осуществить в день обращения.',1,'nexus-7.jpg','nexus-7'),(3,'Samsung Galaxy S6','<p>Если требуется качественный <strong>ремонт Samsung Galaxy S6,</strong> то мы Вам готовы помочь! Мы выполняем ремонтные работы любой сложности и как правило в сжатые сроки! В этом разделе нашего сайта Вы можете ознакомится с перечнем предоставляемых нами услуг. Стоит отметить что ремонт Samsung Galaxy S6 в нашем сервисном центре осуществляется только опытными мастерами, применяя при этом профессиональное оборудование и оригинальные запчасти. Все это гарантирует долговечную работу Вашего устройства после ремонта в «iQСервис».</p><div class=\"collapsible collapse-xs collapsed\"><p>Так же мы оказываем и компонентный ремонт — это более сложный вид работ, и требует у мастера квалификации. Например, при выходе из строя, какого-либо элемента материнской платы, влечет за собой более сложный ремонт, который требует навыков и специального оборудования. </p><div class=\"collapse-buttons text-xs-center\"><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-close\"><i class=\"icon-caret-up\"></i><span>Скрыть</span></a></div></div></div>',0,'samsung-galaxy-s-s6','samsung-galaxy-s-s6');
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deviceassign`
--

DROP TABLE IF EXISTS `deviceassign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deviceassign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `guaranty` int(11) DEFAULT NULL,
  `device_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `warning` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deviceassign_device1_idx` (`device_id`),
  KEY `fk_deviceassign_service1_idx` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deviceassign`
--

LOCK TABLES `deviceassign` WRITE;
/*!40000 ALTER TABLE `deviceassign` DISABLE KEYS */;
INSERT INTO `deviceassign` VALUES (1,0,5,NULL,2,1,NULL),(2,5990,30,6,2,2,'Модель 2013 года'),(3,4990,30,6,2,2,'Модель 2012 года'),(4,NULL,20,NULL,2,3,NULL),(5,990,20,1,2,4,NULL),(6,1290,30,3,2,5,'При попадании влаги выключите устройство и не подключайте к зарядному устройству!'),(7,990,40,3,2,6,NULL),(8,990,20,6,2,7,NULL),(9,2990,10,1,2,8,NULL),(10,1490,30,6,2,9,NULL),(11,NULL,30,6,2,10,NULL),(12,NULL,30,6,2,11,NULL),(13,NULL,30,6,2,12,NULL),(14,1490,40,3,2,13,NULL),(15,1490,30,3,2,14,NULL),(16,1290,120,6,2,15,NULL),(17,1990,40,6,2,16,NULL),(18,NULL,180,6,2,17,NULL),(19,NULL,120,6,2,18,NULL),(20,0,5,NULL,3,1,NULL),(21,10900,60,6,3,2,'Оригинальный дисплей в сборе стекло + экран!'),(22,2500,30,6,3,3,NULL);
/*!40000 ALTER TABLE `deviceassign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `smalldesc` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_service_category_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Диагностика','Производим диагностику, находим неисправность, после чего озвучиваем окончательную стоимость и сроки ремонта.',NULL,1),(2,'Замена стекла (стекло + дисплей)','Стекло треснуло, на экране полосы, сенсор не реагирует на прикосновение.',NULL,2),(3,'Замена крышки корпуса','Крышка треснула, на ней появились царапины, потертости.',NULL,3),(4,'Программный ремонт','Телефон не загружается, работает с перебоями, \"завис\" на логотипе.',NULL,4),(5,'Ремонт после попадания влаги','Влага, попавшая на электронные компоненты телефона может оказать крайне негативное влияние на само устройство, рекомендуем в спешном порядке обратится в специализированный сервисный центр.',NULL,5),(6,'Ремонт кнопки включения','Отсутствует реакция на нажатие кнопки блокировки.',1,6),(7,'Ремонт кнопок регулировки громкости','Реакция на нажатия кнопок отсутствует либо срабатывает через раз.',1,7),(8,'Замена аккумулятора','Быстрый разряд, выключается при полном или частичном уровне заряда, перезагружается.',2,8),(9,'Замена микрофона','Собеседник вас плохо либо вовсе не слышит, звук с помехами, глухой звук.',2,9),(10,'Замена полифонического динамика','Звук тихий либо отсутствует при входящем звонке, присутствует характерный хрип.',2,10),(11,'Замена основной камеры','Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.',2,11),(12,'Замена передней камеры','Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.',2,12),(13,'Замена разъема питания','Телефон не заряжается, нет реакции на подключения кабеля зарядного устройства.',3,13),(14,'Замена резъема наушников','Отсутствует звук в наушниках, либо звук искажен, работает один из каналов наушников.',3,14),(15,'Замена разъемов на плате','Разъемы на плате: под аккумулятор, дисплей и т.п.',4,15),(16,'Замена SIM-приёмника','Телефон не видит сим карту.',4,16),(17,'Замена контроллера питания','Телефон не включается или не заряжается.',4,17),(18,'Замена микросхемы WiFi','Плохой или не устойчивый сигнал WiFi, не работает WiFi либо Bluetooth.',4,18);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-02 13:13:27
