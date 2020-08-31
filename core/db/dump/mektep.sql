-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2020 г., 13:02
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mektep`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` tinyint(2) NOT NULL,
  `subject` char(155) NOT NULL,
  `lang` char(3) NOT NULL,
  `pack` char(3) NOT NULL,
  `titleImg` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `level`, `subject`, `lang`, `pack`, `titleImg`, `status`) VALUES
(1, 10, 'Физика', 'rus', 't2', 'fizika10ru.webp', 1),
(2, 10, 'Қазақстан тарихы', 'kaz', 't2', 'Histori_Qaz_10_каз_12_летка_обложка.webp', 1),
(3, 10, 'История Казахстана', 'rus', 't2', 'Histori_Qaz_10_каз_12_летка_обложка.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `book_1`
--

CREATE TABLE `book_1` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_1`
--

INSERT INTO `book_1` (`id`, `part`, `content`) VALUES
(1, '1', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;1&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;1.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(2, '2', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;2&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;2.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(3, '3', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;3&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;3.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(4, '4', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;4&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;4.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(5, '5', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;5&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;5.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(6, '6', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;6&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;6.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(7, '7', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;7&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;7.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(8, '8', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;8&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;8.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(9, '9', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;9&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;9.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(10, '10', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;10&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;10.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Структура таблицы `book_2`
--

CREATE TABLE `book_2` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_2`
--

INSERT INTO `book_2` (`id`, `part`, `content`) VALUES
(1, '1', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;1&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;1.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(2, '2', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;2&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;2.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(3, '3', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;3&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;3.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(4, '4', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;4&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;4.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(5, '5', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;5&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;5.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;&lt;/p&gt;&lt;/div&gt;'),
(6, '6', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;6&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;6.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(7, '7', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;7&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;7.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(8, '8', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;8&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;8.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(9, '9', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;9&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;9.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(10, '10', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;10.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(11, '11', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;11&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;11.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(12, '12', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;12&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;12.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(13, '13', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;13&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;13.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Структура таблицы `book_3`
--

CREATE TABLE `book_3` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_3`
--

INSERT INTO `book_3` (`id`, `part`, `content`) VALUES
(1, '1', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;1&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;1.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(2, '2', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;2&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;2.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(3, '3', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;3&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;3.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(4, '4', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;4&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;4.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(5, '5', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;5&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;5.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(6, '6', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;6&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;6.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(7, '7', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;7&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;7.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(8, '8', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;8&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;8.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(9, '9', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;9&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;9.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(10, '10', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;10&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;10.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(11, '11', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;11&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;11.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;'),
(12, '12', '&lt;div style=&quot;margin-top: 4em;&quot; id=&quot;12&quot;&gt;&lt;p&gt;&lt;object&gt;&lt;embed src=&quot;12.pdf&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/object&gt;\r\n&lt;/p&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Структура таблицы `parts_1`
--

CREATE TABLE `parts_1` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `parts_1`
--

INSERT INTO `parts_1` (`id`, `part`) VALUES
(1, 'Содержание'),
(2, 'Глава 1. Основы кинематики'),
(3, 'Глава 2. Динамика'),
(4, 'Глава 3. Статика'),
(5, 'Глава 4. Законы сохранения в механике'),
(6, 'Глава 5. Механика жидкостей и газов'),
(7, 'Глава 6. Основы молекулярно-кинетической теории газов'),
(8, 'Глава 7. Газовые Законы'),
(9, 'Глава 8. Основы Термодинамики'),
(10, 'Глава 9. Жидкости и твердые тела');

-- --------------------------------------------------------

--
-- Структура таблицы `parts_2`
--

CREATE TABLE `parts_2` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `parts_2`
--

INSERT INTO `parts_2` (`id`, `part`) VALUES
(1, 'Мазмұны'),
(2, 'Орталық Азия өркениеттері: саналуандылығы және мәдени ортақтығы'),
(3, 'Ұлы Дала өркениеті'),
(4, 'Орталық Азия және әлемдік өркениет'),
(5, 'Қазақ халқының шығу тегі'),
(6, 'Дәстүрлі қазақ қоғамы: этникалық құрылымы және әлеуметтік ұйымдасуы'),
(7, 'Қазақстан аумағындағы ерте мемлекеттер'),
(8, 'Ұлы Дала көшпелілерінің империялары'),
(9, 'Қазақ хандығы – Орталық Азиядағы алғашқы ұлттық мемлекет'),
(10, 'Тәуелсіздікке жол және ұлттық мемлекеттіліктің\r\nқайта жаңғыруы '),
(11, 'Қазақ халқының дәстүрлі мәдениеті – дала өркениетінің мұрасы'),
(12, 'Кеңестік кезеңдегі Қазақстан мәдениеті'),
(13, 'Ұлттық жаңғыру кезеңіндегі м');

-- --------------------------------------------------------

--
-- Структура таблицы `parts_3`
--

CREATE TABLE `parts_3` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `parts_3`
--

INSERT INTO `parts_3` (`id`, `part`) VALUES
(1, 'Содержание'),
(2, 'Центральноазиатские цивилизации: многообразие и культурная общность'),
(3, 'Цивилизация Великой Степи'),
(4, 'Центральная Азия и мировая цивилизация'),
(5, 'Истоки происхождения казахского народа'),
(6, 'Традиционное казахское общество: этническая структура и социальная организация'),
(7, 'Ранние государства на территории Казахстана'),
(8, 'Империи кочевников Великой Степи'),
(9, 'Казахское ханство — первое национальное государство в Центральной Азии'),
(10, 'Путь к независимости и возрождение национальной государственности'),
(11, 'Традиционная культура казахского народа — наследие степной цивилизации'),
(12, 'Культура Казахстана в советский период');

-- --------------------------------------------------------

--
-- Структура таблицы `redactors`
--

CREATE TABLE `redactors` (
  `id` int(10) NOT NULL,
  `login` char(50) NOT NULL,
  `pass` char(50) NOT NULL,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `redactors`
--

INSERT INTO `redactors` (`id`, `login`, `pass`, `token`) VALUES
(1, 'first', '123', 'GKD3842KER3425HGOE7D'),
(2, 'nonFirst', '123', 'GKD3842KER3425HGOE5D');

-- --------------------------------------------------------

--
-- Структура таблицы `tests_1`
--

CREATE TABLE `tests_1` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tests_2`
--

CREATE TABLE `tests_2` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tests_3`
--

CREATE TABLE `tests_3` (
  `id` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_1`
--
ALTER TABLE `book_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_2`
--
ALTER TABLE `book_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_3`
--
ALTER TABLE `book_3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parts_1`
--
ALTER TABLE `parts_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parts_2`
--
ALTER TABLE `parts_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parts_3`
--
ALTER TABLE `parts_3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `redactors`
--
ALTER TABLE `redactors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests_1`
--
ALTER TABLE `tests_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests_2`
--
ALTER TABLE `tests_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests_3`
--
ALTER TABLE `tests_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `book_1`
--
ALTER TABLE `book_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `book_2`
--
ALTER TABLE `book_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `book_3`
--
ALTER TABLE `book_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `parts_1`
--
ALTER TABLE `parts_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `parts_2`
--
ALTER TABLE `parts_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `parts_3`
--
ALTER TABLE `parts_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `redactors`
--
ALTER TABLE `redactors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tests_1`
--
ALTER TABLE `tests_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tests_2`
--
ALTER TABLE `tests_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tests_3`
--
ALTER TABLE `tests_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
