-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2021 г., 15:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rustywheels`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `brand` varchar(225) NOT NULL,
  `model` varchar(225) NOT NULL,
  `hp` int NOT NULL,
  `transmission` varchar(225) NOT NULL,
  `body` varchar(225) NOT NULL,
  `price` int NOT NULL,
  `color` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `hp`, `transmission`, `body`, `price`, `color`, `img`) VALUES
(1, 'LADA', '2106', 75, 'механическая', 'седан', 20000, 'рыжий', 'shaxa.jpg'),
(2, 'BMW', 'E34', 192, 'механическая', 'седан', 400000, 'черный', 'bmv34.jpg'),
(3, 'LADA', 'priora', 98, 'механическая', 'седан', 150000, 'белый', 'priora.jpg'),
(4, 'mistubishi', 'galant', 136, 'Автоматическая', 'седан', 300000, 'серый', 'galant.jpg'),
(5, 'LADA', '2112', 90, 'Механическая', 'хэтчбек ', 120000, 'синий', '2112.jpg'),
(6, 'hyundai', 'sonata', 137, 'механическая', 'седан', 240000, 'черный', 'sonata.jpg'),
(9, 'mitsubishi', 'lancer9', 135, 'механическая', 'седан', 210000, 'серебристый', 'lancer9.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`) VALUES
(9, 'салоедский', 'покупал у вас великолепную шестерку, доволен как слон'),
(10, 'Джигит', 'Купил у вас богоподобную приору, дай бог вам здоровья'),
(11, 'Браток', 'Взял у вас старую добрую бмв е34, помолодел на 30 лет, спасибо'),
(12, 'старый хрыч', 'купил сонату дая'),
(13, 'заххххар', 'покупал у вас 9 лансер, резвая машина');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin@gmail.com', '123'),
(2, 'admin2@gmail.com', '321');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
