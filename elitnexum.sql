-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 22 2022 г., 10:04
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `elitnexum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `long_link` varchar(255) NOT NULL,
  `login` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id`, `name`, `year`, `image`, `long_link`, `login`) VALUES
(2, 'В погоне за Бонни и Клайдом', 2019, 'В погоне за Бонни и Клайдом.jpg', 'http://kinodrive.org/4263-v-pogone-za-bonni-i-klaydom.html', 'Admin'),
(3, 'Зов предков', 2020, 'Зов предков.jpg', 'http://kinodrive.org/4883-zov-predkov.html', 'Vlad'),
(6, 'Пользователь', 2222, 'Фильм пользователя.jpg', 'https://vk.com/im?peers=169213153&sel=248926094', 'Vlad'),
(7, 'Пользователь', 2000, 'Фильм пользователя.jpg', 'http://kinodrive.org/4591-aeronavty.html', 'TheBe1Jing'),
(9, 'Лев Яшин. Вратарь моей мечты', 2019, 'Лев Яшин. Вратарь моей мечты.jpg', 'http://kinodrive.org/4638-lev-yashin-vratar-moey-mechty.html', 'TheBe1Jing');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `long_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `year`, `image`, `long_link`) VALUES
(1, 'Достать ножи', 2019, 'Достать ножи.jpg', 'https://kinohype.me/432-dostat-nozhi-2019-smotret-zx.html'),
(2, 'Все путем', 2009, 'Все путем.jpg', 'http://kinodrive.org/2358-vse-putem.html'),
(3, 'Невидимый гость', 2016, 'Невидимый гость.jpg', 'http://kinodrive.org/4051-nevidimyy-gost.html'),
(4, 'Зов предков', 2020, 'Зов предков.jpg', 'http://kinodrive.org/4883-zov-predkov.html'),
(165, 'Лучшие враги', 2019, 'Лучшие враги.jpg', 'http://kinodrive.org/4646-luchshie-vragi.html'),
(164, 'В погоне за Бонни и Клайдом', 2019, 'В погоне за Бонни и Клайдом.jpg', 'http://kinodrive.org/4263-v-pogone-za-bonni-i-klaydom.html'),
(163, 'Лев Яшин. Вратарь моей мечты', 2019, 'Лев Яшин. Вратарь моей мечты.jpg', 'http://kinodrive.org/4638-lev-yashin-vratar-moey-mechty.html'),
(162, 'Король', 2019, 'Король.jpg', 'http://kinodrive.org/4519-korol.html'),
(141, 'Невероятный мир глазами Энцо', 2019, 'Невероятный мир глазами Энцо.jpg', 'http://kinodrive.org/4545-neveroyatnyy-mir-glazami-enco.html'),
(142, 'Гран Торино', 2008, 'Гран Торино.jpg', 'http://kinodrive.org/466-gran-torino.html'),
(143, 'Платформа', 2019, 'Платформа.jpg', 'http://kinodrive.org/4860-platforma.html'),
(144, 'Лучшее во мне', 2014, 'Лучшее во мне.jpg', 'http://kinodrive.org/3275-luchshee-vo-mne.html'),
(145, 'Счастливое число Слевина', 2006, 'Счастливое число Слевина.jpg', 'http://kinodrive.org/193-schastlivoe-chislo-slevina.html'),
(146, 'Дело Ричарда Джуэлла', 2019, 'Дело Ричарда Джуэлла.jpg', 'https://film14.zagonka.tv/video/62783-delo-richarda-dzhuella-2019-online.html'),
(147, 'Прислуга', 2011, 'Прислуга.jpg', 'https://www.hdfilmlenta.com/load/dramy/3015-prisluga-the-help-2011-onlayn.html'),
(148, 'Наркокурьер', 2018, 'Наркокурьер.jpg', 'http://kinodrive.org/4250-narkokurer.html'),
(149, 'Книга Генри', 2017, 'Книга Генри.jpg', 'http://u3.lordfilm7.tv/26717-kniga-genri-2017.html'),
(150, 'Малена', 2000, 'Малена.jpg', 'http://kinodrive.org/1404-malena.html'),
(151, 'Охота', 2012, 'Охота.jpg', 'http://kinodrive.org/1828-ohota.html'),
(152, 'Последний танец', 2020, 'Последний танец.jpg', 'http://kinodrive.org/5012-posledniy-tanec.html'),
(153, '7 психопатов', 2012, '7 психопатов.jpg', 'https://kino.mail.ru/cinema/movies/639676_sem_psihopatov/#watch'),
(154, 'Старикам тут не место', 2007, 'Старикам тут не место.jpg', 'https://film14.zagonka.tv/video/9837-starikam-tut-ne-mesto-2007-online.html'),
(155, 'Дело храбрых', 2017, 'Дело храбрых.jpg', 'https://www.youtube.com/watch?v=LC9FDBOmi90&list=PLyDavh7Grouh5SJx-suotwlyWoWkxM2qQ&index=1'),
(156, 'Три билборда на границе Эббинга, Миссури', 2017, 'Три билборда на границе Эббинга, Миссури.jpg', 'https://www.hdfilmlenta.com/load/komedii/4209-tri-bilborda-na-granice-ebbing-missuri-three-billboards-outside-ebbing-missouri-2017.html'),
(157, 'Каждому свое', 2016, 'Каждому свое.jpg', 'http://kinodrive.org/3837-kazhdomu-svoe.html'),
(158, 'Арахисовый сокол', 2019, 'Арахисовый сокол.jpg', 'http://kinodrive.org/4741-arahisovyy-sokol.html'),
(159, 'Вторая жизнь Уве', 2015, 'Вторая жизнь Уве.jpg', 'https://www.hdfilmlenta.com/load/komedii/2455-vtoraya-zhizn-uve-en-man-som-heter-ove-2015-onlayn.html'),
(160, 'Мотылек', 2017, 'Мотылек.jpg', 'https://film14.zagonka.tv/video/35842-motylek-2017-online.html'),
(161, 'Я, Дэниел Блэйк', 2016, 'Я, Дэниел Блэйк.jpg', 'http://kinodrive.org/4027-ya-deniel-bleyk.html');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(70) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `pass`) VALUES
(1, 'jean41@yandex.ru', 'Admin', '$2y$10$RGZ/zMlQ3A6AhEKtwsGxSORUfH6f2g1iFNukScnrpKnJKmKVz/MUG'),
(2, 'vlad.komnik.97@mail.ru', 'Vlad', '$2y$10$2H8YfveSzGaBmXUFLjuyfOGPNzzXBue0knsV0zJHqrVvcL9YGsZv2'),
(3, 'robot@mail.ru', 'TheBe1Jing', '$2y$10$DApD8evvuJuSio.FOiZkAucCqpvWklvmlJX8zGyjQDO28if7lQYYq'),
(4, 'jean411@yandex.ru', 'Admin12', '$2y$10$144u0NPOUVhZZf7GWBMQbOaefwd1Szx9f.Hhr7tLGHam3McHvMTwu'),
(5, 'vladislav@ya.ru', 'vlados', '$2y$10$KMhHMV18H6t4nzFbxK6O3e3k0qPsFe49c.u8Nel5KjA0u4LRN5czS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
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
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
