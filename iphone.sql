-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 31 2015 г., 11:35
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `iphone`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `text`) VALUES
(1, 'Замена стекла (экрана) Asus Nexus 7', '<p>Сенсорное стекло у Nexus 7 изготовлен из прочного и износостойкого материала Gorilla Glass, которое имеет повышенное сопротивление к царапинам и ударам. Но, не смотря на это, тачскрин может разбиться. Стоит обратить внимание на то, что сенсорное стекло идет в сборе с экраном.</p><div class="collapsible collapse-xs collapsed">\n<div class="collapse-container">\n<p>Замена стекла у Asus Nexus 7 сопровождается полным разбором самого аппарата, для этого потребуется навык ремонта в данной сфере и специальное оборудование, дабы избежать более дорогостоящего ремонта мы не рекомендуем производить данный вид работ без должного опыта. Благодаря нашим специалистам данная услуга будет осуществлена на профессиональном уровне, при ремонтных работах мы используем только качественное оборудование и запчасти. Стоит отметить, что мы работаем только с оригинальными комплектующими и устанавливаем высококачественные дисплеи. </p>\n</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Замена шлейфов и разъемов'),
(2, 'Ремонт или замена внутренних компонентов'),
(1, 'Ремонт кнопок'),
(4, 'Ремонт материнской платы');

-- --------------------------------------------------------

--
-- Структура таблицы `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` text,
  `article_id` int(11) NOT NULL,
  `imagename` varchar(100) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_device_article1_idx` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `device`
--

INSERT INTO `device` (`id`, `name`, `description`, `article_id`, `imagename`, `alias`) VALUES
(1, 'Sony Xperia Z2', 'Ремонт <b>Sony Xperia Z2</b> в нашем сервисном центре производится опытными специалистами, благодаря чему отремонтированное устройство прослужит Вам еще очень долго. Стоит отметить, что мы используем только качественные и проверенные комплектующие, установка которых гарантирует надежную и стабильную работу смартфона.', 0, NULL, NULL),
(2, 'Nexus 7', 'Оценить качество планшетов Nexus 7 успели уже многие владельцы данных гаджетов. Но порой и столь надежная техника дает сбой. Как правило у нас ремонт Nexus 7 занимает минимальное количество времени, при наличии требуемых комплектующих, и в 90% случаев услугу можно осуществить в день обращения.', 0, 'nexus-7.jpg', 'nexus-7');

-- --------------------------------------------------------

--
-- Структура таблицы `deviceassign`
--

CREATE TABLE IF NOT EXISTS `deviceassign` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `deviceassign`
--

INSERT INTO `deviceassign` (`id`, `price`, `duration`, `guaranty`, `device_id`, `service_id`, `warning`) VALUES
(1, 0, 5, NULL, 2, 1, NULL),
(2, 5990, 30, 6, 2, 2, 'Модель 2013 года'),
(3, 4990, 30, 6, 2, 2, 'Модель 2012 года'),
(4, NULL, 20, NULL, 2, 3, NULL),
(5, 990, 20, 1, 2, 4, NULL),
(6, 1290, 30, 3, 2, 5, 'При попадании влаги выключите устройство и не подключайте к зарядному устройству!'),
(7, 990, 40, 3, 2, 6, NULL),
(8, 990, 20, 6, 2, 7, NULL),
(9, 2990, 10, 1, 2, 8, NULL),
(10, 1490, 30, 6, 2, 9, NULL),
(11, NULL, 30, 6, 2, 10, NULL),
(12, NULL, 30, 6, 2, 11, NULL),
(13, NULL, 30, 6, 2, 12, NULL),
(14, 1490, 40, 3, 2, 13, NULL),
(15, 1490, 30, 3, 2, 14, NULL),
(16, 1290, 120, 6, 2, 15, NULL),
(17, 1990, 40, 6, 2, 16, NULL),
(18, NULL, 180, 6, 2, 17, NULL),
(19, NULL, 120, 6, 2, 18, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `smalldesc` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_service_category_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `name`, `smalldesc`, `category_id`, `pos`) VALUES
(1, 'Диагностика', 'Производим диагностику, находим неисправность, после чего озвучиваем окончательную стоимость и сроки ремонта.', NULL, 1),
(2, 'Замена стекла (стекло + дисплей)', 'Стекло треснуло, на экране полосы, сенсор не реагирует на прикосновение.', NULL, 2),
(3, 'Замена крышки корпуса', 'Крышка треснула, на ней появились царапины, потертости.', NULL, 3),
(4, 'Программный ремонт', 'Телефон не загружается, работает с перебоями, "завис" на логотипе.', NULL, 4),
(5, 'Ремонт после попадания влаги', 'Влага, попавшая на электронные компоненты телефона может оказать крайне негативное влияние на само устройство, рекомендуем в спешном порядке обратится в специализированный сервисный центр.', NULL, 5),
(6, 'Ремонт кнопки включения', 'Отсутствует реакция на нажатие кнопки блокировки.', 1, 6),
(7, 'Ремонт кнопок регулировки громкости', 'Реакция на нажатия кнопок отсутствует либо срабатывает через раз.', 1, 7),
(8, 'Замена аккумулятора', 'Быстрый разряд, выключается при полном или частичном уровне заряда, перезагружается.', 2, 8),
(9, 'Замена микрофона', 'Собеседник вас плохо либо вовсе не слышит, звук с помехами, глухой звук.', 2, 9),
(10, 'Замена полифонического динамика', 'Звук тихий либо отсутствует при входящем звонке, присутствует характерный хрип.', 2, 10),
(11, 'Замена основной камеры', 'Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.', 2, 11),
(12, 'Замена передней камеры', 'Нет реакции на включения камеры, присутствуют дефекты, смазанные снимки, отсутствует автофокус.', 2, 12),
(13, 'Замена разъема питания', 'Телефон не заряжается, нет реакции на подключения кабеля зарядного устройства.', 3, 13),
(14, 'Замена резъема наушников', 'Отсутствует звук в наушниках, либо звук искажен, работает один из каналов наушников.', 3, 14),
(15, 'Замена разъемов на плате', 'Разъемы на плате: под аккумулятор, дисплей и т.п.', 4, 15),
(16, 'Замена SIM-приёмника', 'Телефон не видит сим карту.', 4, 16),
(17, 'Замена контроллера питания', 'Телефон не включается или не заряжается.', 4, 17),
(18, 'Замена микросхемы WiFi', 'Плохой или не устойчивый сигнал WiFi, не работает WiFi либо Bluetooth.', 4, 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
