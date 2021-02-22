-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2021 г., 11:26
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
-- База данных: `eshop`
--
CREATE DATABASE IF NOT EXISTS `eshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `eshop`;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `gooods_id` int NOT NULL,
  `name` char(30) NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `good_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`gooods_id`, `name`, `price`, `description`, `good_id`) VALUES
(6, 'Staff finks chameleon', 1320, 'Зимняя куртка хамелеон от Staff однозначно выделит тебя из толпы днём, и не оставит незамеченным ночью за счёт своего яркого рефлектива', 1),
(7, 'Staff paskal black', 1290, 'Тёплая зимняя парка от Staff с накладными карманами согреет в холода, а съемный мех и удобная двухходовая молния поможет комбинировать с образами.\r\n\r\nМатериал:\r\n- 100% полиэстер;\r\n- внутри высококачественный утеплитель Hollowsoft.', 2),
(8, 'Staff aves khaki', 1090, 'Уникальная куртка от Staff не только согреет тебя в холода, но и порадует эксклюзивным дизайном. Стильная молния смещена немного вправо, что несомненно обратит на себя внимание, большой уютный капюшон добавит комфорта, а спрятанные лямки внутри изделия позволят закинуть куртку за спину словно рюкзак и удобно переносить её, если на улице неожиданно потеплеет.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `phone` text NOT NULL,
  `adress` text NOT NULL,
  `good_id` int NOT NULL,
  `optionsRadios` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `surname`, `phone`, `adress`, `good_id`, `optionsRadios`) VALUES
(43, 'Олексій', 'Бабкін', 'darmaskirov@gmail.com', '+380980992766', 6, 'перевірка у відділені'),
(44, 'Олексій', 'Бабкін', 'darmaskirov@gmail.com', '+380980992766', 7, 'перевірка у відділені'),
(45, 'Олексій', 'Бабкін', 'darmaskirov@gmail.com', '+380980992766', 7, 'перевірка у відділені'),
(46, 'name', 'sur', 'darmaskirov@gmail.com', '+380980992766', 8, 'Доставка кур\'єром '),
(47, 'name', 'sur', 'darmaskirov@gmail.com', '+380980992766', 8, 'Доставка кур\'єром ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`gooods_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `good_id` (`good_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `gooods_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`gooods_id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
