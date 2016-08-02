-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 02 2016 г., 03:37
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bee_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `text`) VALUES
(58, '', '', ''),
(59, '', '', ''),
(60, 'ÐºÐµÐ½ÐºÐµÐ½', '', 'ÐºÐµÐ½ÐºÐµÐ½'),
(61, 'ÑƒÐºÐµÑƒÐºÐµÑƒÐº', '', 'ÐµÑƒÐºÐµÑƒÐº'),
(62, '', '', ''),
(63, '', '', ''),
(64, '', '', ''),
(65, '', '', ''),
(66, '', '', ''),
(67, 'Vadim', '', 'Ð¿Ñ€Ð¾Ð¿Ñ€Ð¾Ð¿Ñ€'),
(68, 'ÐµÑƒÐ³ÐµÐ½Ð³ÐµÐ½Ð³', 'ÐµÐ½Ð³ÐµÐ½Ð³ÐµÐ½Ð³', 'ÐµÐ½Ð³ÐµÐ½Ð³ÐµÐ½Ð³'),
(69, '', '', ''),
(70, '', '', ''),
(71, 'Vadim', 'koozyy@bigmir.net', 'asdsdasda'),
(72, 'Vadim', 'koozyy@bigmir.net', 'asdsdasda'),
(73, 'Vadim', 'koozyy@bigmir.net', 'dasdasd'),
(74, 'Vadim', 'koozyy@bigmir.net', 'fsdfsdfs');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `role` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'vadim', 'koozyy@bigmir.net', 123, 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
