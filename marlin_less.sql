-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 13 2020 г., 00:59
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marlin_less`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prof` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `contact_bootstrap` varchar(255) NOT NULL,
  `is_ban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `prof`, `photo_url`, `status`, `twitter`, `contact_bootstrap`, `is_ban`) VALUES
(1, 'Sunny A.', 'UI/UX Expert', 'img/demo/authors/sunny.png', 'Lead Author', '@myplaneticket', 'myorange', 'false'),
(2, 'Jos K.', 'ASP.NET Developer', 'img/demo/authors/josh.png', 'Partner &amp; Contributor', '@atlantez', 'Walapa', 'false'),
(3, 'Jovanni L.', 'PHP Developer', 'img/demo/authors/jovanni.png', 'Partner &amp; Contributor', '@lodev09', 'lodev09', 'true'),
(4, 'Roberto R.', 'Rails Developer', 'img/demo/authors/roberto.png', 'Partner &amp; Contributor', '@sildur', 'sildur', 'true');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
