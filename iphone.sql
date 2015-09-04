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
-- Table structure for table `application_form`
--

DROP TABLE IF EXISTS `application_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` text,
  `deviceassign_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `service` varchar(60) DEFAULT NULL,
  `device` varchar(60) DEFAULT NULL,
  `subject` varchar(60) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_form`
--

LOCK TABLES `application_form` WRITE;
/*!40000 ALTER TABLE `application_form` DISABLE KEYS */;
INSERT INTO `application_form` VALUES (1,'Илья',NULL,'897321233',21,NULL,'Замена стекла (стекло + дисплей)','Замена стекла (стекло + дисплей)',NULL,'йцуйцоуйцуцйджуйцйцууацфуац'),(2,'Макс',NULL,'89636568377',24,1291,'Ремонт после попадания влаги','Samsung Galaxy S6',NULL,'нет');
/*!40000 ALTER TABLE `application_form` ENABLE KEYS */;
UNLOCK TABLES;

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
  `type` tinyint(4) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_device_article1_idx` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` VALUES (1,'Sony Xperia Z2','Ремонт <b>Sony Xperia Z2</b> в нашем сервисном центре производится опытными специалистами, благодаря чему отремонтированное устройство прослужит Вам еще очень долго. Стоит отметить, что мы используем только качественные и проверенные комплектующие, установка которых гарантирует надежную и стабильную работу смартфона.',0,NULL,NULL,2,2),(2,'Nexus 7','Оценить качество планшетов Nexus 7 успели уже многие владельцы данных гаджетов. Но порой и столь надежная техника дает сбой. Как правило у нас ремонт Nexus 7 занимает минимальное количество времени, при наличии требуемых комплектующих, и в 90% случаев услугу можно осуществить в день обращения.',1,'nexus-7.jpg','nexus-7',3,2),(3,'Samsung Galaxy S6','<p>Если требуется качественный <strong>ремонт Samsung Galaxy S6,</strong> то мы Вам готовы помочь! Мы выполняем ремонтные работы любой сложности и как правило в сжатые сроки! В этом разделе нашего сайта Вы можете ознакомится с перечнем предоставляемых нами услуг. Стоит отметить что ремонт Samsung Galaxy S6 в нашем сервисном центре осуществляется только опытными мастерами, применяя при этом профессиональное оборудование и оригинальные запчасти. Все это гарантирует долговечную работу Вашего устройства после ремонта в «iQСервис».</p><div class=\"collapsible collapse-xs collapsed\"><div class=\"collapse-container\"><p>Так же мы оказываем и компонентный ремонт — это более сложный вид работ, и требует у мастера квалификации. Например, при выходе из строя, какого-либо элемента материнской платы, влечет за собой более сложный ремонт, который требует навыков и специального оборудования. </p></div><div class=\"collapse-buttons text-xs-center\"><a href=\"#\" class=\"collapse-open\"><i class=\"icon-caret-down\"></i><span>Подробнее</span></a><a href=\"#\" class=\"collapse-close\"><i class=\"icon-caret-up\"></i><span>Скрыть</span></a></div></div>',0,'samsung-galaxy-s6.jpg','samsung-galaxy-s-s6',2,3),(4,'Samsung Galaxy Alpha',NULL,0,'samsung-galaxy-alpha.jpg','samsung-galaxy-alpha',2,2),(5,'Samsung Galaxy A',NULL,0,'samsung-galaxy-a.jpg',NULL,2,2),(6,'Samsung Galaxy S',NULL,0,'samsumg-galaxy-s.jpg',NULL,2,2),(7,'Samsung Galaxy Note',NULL,0,'samsumg-galaxy-note.jpg',NULL,2,2),(8,'Nexus 6',NULL,0,'nexus-6.jpg',NULL,2,2),(9,'Nexus 5',NULL,0,'nexus-5.jpg',NULL,2,2),(10,'Nexus 4',NULL,0,'nexus-4.jpg',NULL,2,2),(11,'Meizu MX5',NULL,0,'meizu-mx5.jpg',NULL,2,2),(12,'Meizu M2 Note',NULL,0,'meizu-m2-note.png',NULL,2,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deviceassign`
--

LOCK TABLES `deviceassign` WRITE;
/*!40000 ALTER TABLE `deviceassign` DISABLE KEYS */;
INSERT INTO `deviceassign` VALUES (1,0,5,NULL,2,1,NULL),(2,5990,30,6,2,2,'Модель 2013 года'),(3,4990,30,6,2,2,'Модель 2012 года'),(4,NULL,20,NULL,2,3,NULL),(5,990,20,1,2,4,NULL),(6,1290,30,3,2,5,'При попадании влаги выключите устройство и не подключайте к зарядному устройству!'),(7,990,40,3,2,6,NULL),(8,990,20,6,2,7,NULL),(9,2990,10,1,2,8,NULL),(10,1490,30,6,2,9,NULL),(11,NULL,30,6,2,10,NULL),(12,NULL,30,6,2,11,NULL),(13,NULL,30,6,2,12,NULL),(14,1490,40,3,2,13,NULL),(15,1490,30,3,2,14,NULL),(16,1290,120,6,2,15,NULL),(17,1990,40,6,2,16,NULL),(18,NULL,180,6,2,17,NULL),(19,NULL,120,6,2,18,NULL),(20,0,5,NULL,3,1,NULL),(21,10900,60,6,3,2,'Оригинальный дисплей в сборе стекло + экран!'),(22,2500,30,6,3,3,NULL),(23,NULL,30,6,3,19,NULL),(24,1291,30,3,3,5,'При попадании влаги выключите устройство и не подключайте к зарядному устройству!'),(25,990,20,1,3,4,NULL),(26,1990,20,3,3,6,NULL),(27,1990,20,6,3,7,NULL),(28,2300,20,6,3,20,NULL),(29,2500,30,3,3,8,NULL),(30,2500,30,6,3,9,NULL),(31,1900,20,6,3,21,NULL),(32,1900,30,6,3,10,NULL),(33,2190,30,6,3,22,NULL),(34,NULL,30,6,3,11,NULL),(35,NULL,30,6,3,12,NULL),(36,1990,40,3,3,13,NULL),(37,1990,30,3,3,14,NULL),(38,2390,20,6,3,23,NULL),(39,6990,180,6,3,17,NULL),(40,1291,120,6,3,15,NULL),(41,6990,120,6,3,18,NULL),(42,3490,60,6,3,16,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Диагностика','Производим диагностику, находим неисправность, после чего озвучиваем окончательную стоимость и сроки ремонта.',NULL,1),(2,'Замена стекла (стекло + дисплей)','Стекло треснуло, на экране полосы, сенсор не реагирует на прикосновение.',NULL,2),(3,'Замена крышки корпуса','Крышка треснула, на ней появились царапины, потертости.',NULL,3),(4,'Программный ремонт','Телефон не загружается, работает с перебоями, \"завис\" на логотипе.',NULL,5),(5,'Ремонт после попадания влаги','Влага, попавшая на электронные компоненты телефона может оказать крайне негативное влияние на само устройство, рекомендуем в спешном порядке обратится в специализированный сервисный центр.',NULL,6),(6,'Ремонт кнопки включения','Отсутствует реакция на нажатие кнопки блокировки.',1,1),(7,'Ремонт кнопок регулировки громкости','Реакция на нажатия кнопок отсутствует либо срабатывает через раз.',1,2),(8,'Замена аккумулятора','Быстрый разряд, выключается при полном или частичном уровне заряда, перезагружается.',2,1),(9,'Замена микрофона','Собеседник вас плохо либо вовсе не слышит, звук с помехами, глухой звук.',2,2),(10,'Замена полифонического динамика','Звук тихий либо отсутствует при входящем звонке, присутствует характерный хрип.',2,4),(11,'Замена основной камеры','Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.',2,6),(12,'Замена передней камеры','Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.',2,7),(13,'Замена разъема питания','Телефон не заряжается, нет реакции на подключения кабеля зарядного устройства.',3,1),(14,'Замена рaзъема наушников','Отсутствует звук в наушниках, либо звук искажен, работает один из каналов наушников.',3,2),(15,'Замена разъемов на плате','Разъемы на плате: под аккумулятор, дисплей и т.п.',4,2),(16,'Замена SIM-приёмника','Телефон не видит сим карту.',4,4),(17,'Замена контроллера питания','Телефон не включается или не заряжается.',4,1),(18,'Замена микросхемы WiFi','Плохой или не устойчивый сигнал WiFi, не работает WiFi либо Bluetooth.',4,3),(19,'Рамка корпуса','Рамка корпуса погнулась, на нем появились царапины или вмятины.',NULL,4),(20,'Ремонт кнопки Home','Периодически не срабатывает или вовсе не реагирует на нажатие.',1,3),(21,'Замена слухового динамика','Плохо либо вовсе не слышно собеседника, динамик хрипит.',2,3),(22,'Замена вибромотора','Отсутствует вибро отдача при переводе в бесшумный режим.',2,5),(23,'Замена шлейфа с датчиками светочувствительности','Не гаснет экран при разговоре, не работает передняя камера или слуховой динамик.',3,3);
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

-- Dump completed on 2015-09-04  9:08:08
