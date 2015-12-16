-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 02 2015 г., 00:25
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- База данных: `tffin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `longname` varchar(16) NOT NULL,
  `department_id` int(11) NOT NULL,
  `type_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

CREATE TABLE IF NOT EXISTS `bank_prop` (
  `id` int(11) NOT NULL,
  `_key` varchar(8) NOT NULL,
  `_value` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`,`_key`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `exp` ADD  `dep_bank_id` INT( 11 ) NULL , ADD INDEX (  `dep_bank_id` ) ;
ALTER TABLE  `exp` ADD FOREIGN KEY (  `dep_bank_id` ) REFERENCES  `tffin`.`bank` (`id`) ON DELETE SET NULL ON UPDATE SET NULL ;
ALTER TABLE  `exp` ADD FOREIGN KEY (  `client_bank_id` ) REFERENCES  `tffin`.`bank` (`id`) ON DELETE NO ACTION ON UPDATE SET NULL ;
ALTER TABLE  `bank` ADD INDEX (  `longname` ) ;
ALTER TABLE  `tmp_doc` ADD  `dbank` VARCHAR( 15 ) NULL , ADD  `cbank` VARCHAR( 15 ) NULL ;
--
-- Дамп данных таблицы `bank`
--

INSERT INTO `bank` (`id`, `name`, `longname`, `department_id`, `type_id`) VALUES
(1, 'Альф', '00012753', 11, 0),
(2, 'Сбер', '00012758', 11, 0),
(3, 'Texc', '00011842', 8, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
