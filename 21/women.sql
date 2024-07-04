-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 02 2024 г., 19:23
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `women`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'Блузка белая \"Леди\"', 'Базовая цена: 1500 руб.', '1500.00', 'https://gagaru.club/uploads/posts/2023-02/1676412018_gagaru-club-p-krasivie-rubashki-vkontakte-44.jpg'),
(2, 'Юбка трикотаж', 'Базовая цена: 2700 руб.', '2700.00', 'https://cdn.100sp.ru/pictures/147620604'),
(3, 'Футболка базовая', 'Базовая цена: 500 руб.', '500.00', 'https://media.gen.ru/insecure/rs:fit:1000:1000:no:0/el:0/plain/local:/p/4116/6549_50_1_tif_1000x1000.jpg'),
(4, 'Джинсы синие \"Skinny\"', 'Базовая цена: 2500 руб.', '2500.00', 'https://x-moda.ru/photo/13076/big_dzhinsy_mosko_e423612b.jpg'),
(5, 'Платье коралловое', 'Базовая цена: 1600 руб.', '1600.00', 'https://cdn1.ozone.ru/multimedia/1017402966.jpg'),
(6, 'Туфли классические', 'Базовая цена: 2400 руб.', '2400.00', 'http://klublady.ru/uploads/posts/2022-03/1646709895_32-klublady-ru-p-obraz-tufli-na-srednem-kabluke-foto-34.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
