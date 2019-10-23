-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 23 2019 г., 11:19
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Comment`
--

CREATE TABLE `Comment` (
  `id` int(11) NOT NULL,
  `Teacher` varchar(50) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Comment`
--

INSERT INTO `Comment` (`id`, `Teacher`, `Comment`) VALUES
(2, 'Киселёва Цветана Артемовна', 'Сделала вам замечание на уроке по математике за плохое поведение.');

-- --------------------------------------------------------

--
-- Структура таблицы `Personal data`
--

CREATE TABLE `Personal data` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Personal data`
--

INSERT INTO `Personal data` (`id`, `Name`, `Surname`, `Description`, `Link`) VALUES
(1, 'Эльдар', 'Лапин', 'Отец Роберта Лапина. Почта: parents@gmail.com', 'http://aforisma.ru/wp-content/uploads/2019/06/305e7d45f04e1b79-1024x682.jpg'),
(2, 'Май', 'Чернов', 'pupil@gmail.com', 'http://olgschool19.krasnodar.su/img/sergeev.jpg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `Rating`
--

CREATE TABLE `Rating` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Math` float NOT NULL,
  `Programming` float NOT NULL,
  `Social` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Rating`
--

INSERT INTO `Rating` (`id`, `Name`, `Surname`, `Math`, `Programming`, `Social`) VALUES
(1, 'Роберт', 'Лапин', 4.56, 4.87, 3.05);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Personal data`
--
ALTER TABLE `Personal data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Personal data`
--
ALTER TABLE `Personal data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Rating`
--
ALTER TABLE `Rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
