-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2020 г., 18:17
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parktofly_kaf904`
--

-- --------------------------------------------------------

--
-- Структура таблицы `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CreateDateTime` datetime NOT NULL,
  `RemoveDateTime` datetime NOT NULL,
  `SelectedForRemove` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `servers`
--

INSERT INTO `servers` (`id`, `CreateDateTime`, `RemoveDateTime`, `SelectedForRemove`) VALUES
(62, '2020-02-20 18:15:03', '0000-00-00 00:00:00', ''),
(61, '2020-02-20 18:14:34', '0000-00-00 00:00:00', ''),
(49, '2015-04-11 20:23:00', '2020-02-20 16:43:28', '+'),
(51, '2015-04-11 20:40:00', '2020-02-20 17:04:04', '+'),
(63, '2020-02-20 18:15:20', '0000-00-00 00:00:00', ''),
(60, '2020-02-20 14:04:16', '2020-02-20 18:11:43', '+'),
(59, '2020-02-20 17:04:14', '2020-02-20 18:06:35', '+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
