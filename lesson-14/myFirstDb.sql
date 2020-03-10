-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2020 г., 19:05
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myFirstDb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `microblog`
--

CREATE TABLE IF NOT EXISTS `microblog` (
  `id` int(11) NOT NULL,
  `author` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `microblog`
--

INSERT INTO `microblog` (`id`, `author`, `content`, `createdAt`) VALUES
(5, 'dfgdfg', 'dfgdfgggkjdfhkldfjghkldfj hglkdfjgh ldjfghldfjg jsdhf sjdhfkj sdhkjf hskjdhf kjsd fkjsdf hjksdf', '2020-02-28 21:54:56');

-- --------------------------------------------------------
--
-- AUTO_INCREMENT для таблицы `microblog`
--
ALTER TABLE `microblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;