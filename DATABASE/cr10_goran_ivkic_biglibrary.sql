-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 16:49
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_goran_ivkic_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_goran_ivkic_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_goran_ivkic_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `type` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `description`, `author`, `publish_date`, `publisher`, `type`, `image`) VALUES
(2, 9781593275846, 'Eloquent JavaScript, Second Edition', 'JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games. Though simple for beginners to pick up and play with, JavaScript is a flexible, complex language that you can use to build full-scale ', 'Marijn Haverbeke', '2020-07-10', 'No Starch Press', 'Book', 'https://assets.thalia.media/img/artikel/af6c2ba3a5dc7ccafff9d9a95038dbd20c63f8e7-00-00.jpeg'),
(3, 9781449331818, 'Learning JavaScript Design Patterns', 'With Learning JavaScript Design Patterns, you\'ll learn how to write beautiful, structured, and maintainable JavaScript by applying classical and modern design patterns to the language. If you want to keep your code efficient, more manageable, and up-to-da', 'Addy Osmani', '2019-04-01', 'O\'Reilly Media', 'Book', 'https://assets.thalia.media/img/artikel/f2bf920b4d368dca4c8f8cf64fa51b16f9752d13-00-00.jpeg'),
(5, 9781449365035, 'Speaking JavaScript', 'Like it or not, JavaScript is everywhere these days-from browser to server to mobile-and now you, too, need to learn the language or dive deeper than you have. This concise book guides you into and through JavaScript, written by a veteran programmer who o', 'Axel Rauschmayer', '2014-02-01', 'O\'Reilly Media', 'eBook', 'https://assets.thalia.media/img/artikel/486c9d0a4a5ecd503a39462bc5677bb0b7aae760-00-00.jpeg'),
(6, 9781491950296, 'Programming JavaScript Applications', 'Take advantage of JavaScript\'s power to build robust web-scale or enterprise applications that are easy to extend and maintain. By applying the design patterns outlined in this practical book, experienced JavaScript developers will learn how to write flex', 'Eric Elliott', '2014-07-01', 'O\'Reilly Media', 'Book', 'https://assets.thalia.media/img/artikel/316aea4a61d61d6daef17e6277aab6b4d9431232-00-00.jpeg'),
(7, 9781593277574, 'Understanding ECMAScript 6', 'ECMAScript 6 represents the biggest update to the core of JavaScript in the history of the language. In Understanding ECMAScript 6, expert developer Nicholas C. Zakas provides a complete guide to the object types, syntax, and other exciting changes that E', 'Nicholas C. Zakas', '2016-09-03', 'No Starch Pres', 'eBook', 'https://assets.thalia.media/img/artikel/b0bbca9104565e1d7e995b7379a7e2a1a07171cd-00-00.jpeg'),
(8, 9781491904244, 'ES6 & Beyond', 'No matter how much experience you have with JavaScript, odds are you don’t fully understand the language. As part of the ', 'Kyle Simpson', '2015-12-27', 'OReillyMedia', 'DVD', 'https://assets.thalia.media/img/artikel/8f34fb9a230a1b7d19b6cb74dd87e56424239608-00-00.jpeg'),
(9, 9781449325862, 'Git Pocket Guide', 'This pocket guide is the perfect on-the-job companion to Git, the distributed version control system. It provides a compact, readable introduction to Git for new users, as well as a reference to common commands and procedures for those of you with Git exp', 'Richard E. Silverman', '2013-08-02', 'O\'Reilly Media', 'Book', 'https://assets.thalia.media/img/artikel/b5ae6444d6f736798618666a4ff263986e7dcb60-00-00.jpeg'),
(10, 9781449337711, 'Designing Evolvable Web APIs with ASP.NET', 'Design and build Web APIs for a broad range of clients—including browsers and mobile devices—that can adapt to change over time. This practical, hands-on guide takes you through the theory and tools you need to build evolvable HTTP services with Microsoft', 'Glenn Block', '2014-04-07', 'O\'Reilly Media', 'DVD', 'https://assets.thalia.media/img/artikel/fe67f4aa391c8ef5971e749e076cb4ec5701fb9d-00-00.jpeg'),
(11, 9781449332211, 'Kako poludjeti od baza podataka', 'Yebo matter how much experience you have with Bazama Podataka, odds are you don’t fully understand the language. As part of the ', 'Mehmedalija Rizvic', '2019-12-15', 'Sevdah Media', 'Book', 'https://assets.thalia.media/img/artikel/d1cb0abd8a9e0ba5adc7eeee05b2695de0b97a5d-00-00.jpeg'),
(12, 9781449323362, 'Databases for stupid people', 'This pocket guide is the perfect on-the-job companion to Git, the distributed version control system. It provides a compact, readable introduction to Git for new users, as well as a reference to common commands and procedures for those of you with Git exp', 'Zgembo Adislic - Kufe', '2020-12-15', 'Nadrealisti', 'DVD', 'https://assets.thalia.media/img/artikel/840db5be7742e5c9cad536f6b7bc57e63b372951-00-00.jpeg'),
(15, 9876543217861, 'Oarbeitslos', 'ldkgflhkdlghkndlgfknhsgl', 'Goran Ivkic', '2020-07-18', 'Media', 'Book', 'https://assets.thalia.media/img/artikel/840db5be7742e5c9cad536f6b7bc57e63b372951-00-00.jpeg'),
(18, 123456789089, 'Delete this book', 'dghadgahjdhd', 'dfghgfdhafdad', '2020-06-29', 'fdshdfggh', 'adsfahfsdh', 'https://assets.thalia.media/img/artikel/af6c2ba3a5dc7ccafff9d9a95038dbd20c63f8e7-00-00.jpeg'),
(27, 1234567898765, 'Delete this book', '', '', '0000-00-00', '', '', ''),
(32, 0, 'Update this book', '', '', '0000-00-00', '', '', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
