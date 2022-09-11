-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 30 2022 г., 10:25
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `final_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `project_num` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `project_num`, `project_name`, `description`, `image`) VALUES
(1, '123', 'ЖК Триколор', '', 'images/car1.avif'),
(2, '156', 'ЖК Сказочный лес', '', 'images/car2.jpg'),
(3, '231', 'ЖК Кутузовская ривьера', '', 'images/car3.jpg'),
(4, '211', 'ЖК Режиссер', '', 'images/car4.avif'),
(5, '211', 'ЖК EGOdom', '', 'images/car5.jpg'),
(6, '211', 'ЖК Остров', '', 'images/car6.jpg'),
(7, '211', 'ЖК Зиларт', '', 'images/car7.jpg'),
(11, '122', 'ЖК Серебрянный бор', '', 'images/car8.jpg'),
(13, '127', 'ЖК Маяк', '', 'images/car9.avif'),
(14, '234', 'ЖК Красная пресня', '', 'images/car10.avif'),
(15, '215', 'ЖК Тверская плаза', '', 'images/car11.jpg'),
(16, '412', 'ЖК Театралья', '', 'images/car12.avif'),
(18, '264', 'Входная группа ЖК Прошкино', '', 'images/cafe1.avif'),
(19, '144', 'Кафе Лавка Ладо', '', 'images/cafe2.avif'),
(20, '204', 'Кафе Кафетерис', '', 'images/cafe4.avif'),
(21, '24', 'Офис Рот-фронт', '', 'images/cafe3.avif'),
(22, '125', 'Кафе Ефак', '', 'images/cafe5.avif'),
(23, '201', 'Офис Зиларт', '', 'images/cafe6.avif'),
(24, '145', 'Кафе Серебро', '', 'images/cafe7.avif'),
(25, '145', 'Офис Б/Ц Маяк', '', 'images/cafe8.avif'),
(26, '145', 'Кафе Красная пресня', '', 'images/cafe9.avif'),
(27, '145', 'Офис Б/Ц Тверская плаза', '', 'images/cafe10.avif'),
(28, '145', 'Кафе Театральное', '', 'images/cafe11.avif'),
(29, '145', 'Кафе Заводной апельсин', '', 'images/cafe12.avif');

-- --------------------------------------------------------

--
-- Структура таблицы `long_form`
--

CREATE TABLE `long_form` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `commentary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `long_form`
--

INSERT INTO `long_form` (`id`, `cust_name`, `phone_number`, `commentary`) VALUES
(1, 'александро', '89169363793', 'Не звоните мне'),
(2, 'александро', '89169363793', 'ффы'),
(3, 'александро', '89169363793', 'ффы'),
(4, 'александро', '89169363793', 'ффы'),
(5, 'Альджазир', '88005553535', 'Звоните мне срочно'),
(6, 'Петр', '99988899989', 'Роскошь');

-- --------------------------------------------------------

--
-- Структура таблицы `short_form`
--

CREATE TABLE `short_form` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `short_form`
--

INSERT INTO `short_form` (`id`, `phone_number`) VALUES
(17, '89169363795'),
(18, '89169363796'),
(19, '89169363793'),
(20, '99999999999'),
(21, '88005553535');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `long_form`
--
ALTER TABLE `long_form`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `short_form`
--
ALTER TABLE `short_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `long_form`
--
ALTER TABLE `long_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `short_form`
--
ALTER TABLE `short_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
