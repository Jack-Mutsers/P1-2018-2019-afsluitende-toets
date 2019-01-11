-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 11 jan 2019 om 10:59
-- Serverversie: 5.7.21
-- PHP-versie: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patweb`
--
CREATE DATABASE IF NOT EXISTS `patweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `patweb`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `classmates`
--

DROP TABLE IF EXISTS `classmates`;
CREATE TABLE IF NOT EXISTS `classmates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `average` decimal(10,0) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `classmates`
--

INSERT INTO `classmates` (`id`, `name`, `average`, `sex`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '6', 'Man', '2018-10-30 07:34:26', '2018-10-30 07:34:26', NULL),
(2, 'ghtrghrtw', '5', 'Vrouw', '2018-10-30 07:34:40', '2018-10-30 07:34:40', NULL),
(3, 'adfasdf', '10', 'Man', '2018-10-30 07:34:59', '2018-10-30 07:35:05', '2018-10-30 07:35:05'),
(4, 'test1', '5', 'Man', '2018-10-30 07:50:01', '2018-10-30 07:50:01', NULL),
(5, 'top', '5', 'Man', '2018-10-30 07:52:16', '2018-10-30 08:13:04', '2018-10-30 08:13:04'),
(6, 'f', '5', 'Man', '2018-10-30 07:52:49', '2018-10-30 07:52:49', NULL),
(7, 'jack mutsers', '4', 'Man', '2018-10-30 08:12:10', '2018-10-30 08:13:05', '2018-10-30 08:13:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
