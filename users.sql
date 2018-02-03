-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 03 2018 г., 22:05
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `userlexa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `reg_date` varchar(32) NOT NULL,
  `change_date` varchar(20) CHARACTER SET utf32 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `reg_date`, `change_date`) VALUES
(137, 'Джим', 'Хэндрикс', '03.02.2018 в 17:45', ''),
(128, 'Дима', 'Шраго', '03.02.2018 в 03:11', '03.02.2018 в 18:49'),
(129, 'Вика ', 'Лейтес1', '03.02.2018 в 03:11', '03.02.2018 в 18:16'),
(130, 'Наташа ', 'Шраго', '03.02.2018 в 03:11', ''),
(131, 'Джаггер', 'Наут', '03.02.2018 в 03:11', '03.02.2018 в 18:58'),
(132, 'Брюс ', 'Уейн', '03.02.2018 в 03:12', ''),
(133, 'Питер ', 'Паркер', '03.02.2018 в 03:12', ''),
(134, 'Тони', 'Старк', '03.02.2018 в 03:17', '03.02.2018 в 19:15');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
