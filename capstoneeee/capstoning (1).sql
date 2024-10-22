-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2024 at 06:23 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoning`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(55) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `component_type`
--

DROP TABLE IF EXISTS `component_type`;
CREATE TABLE IF NOT EXISTS `component_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `part_id` int NOT NULL AUTO_INCREMENT,
  `brand_id` int NOT NULL,
  `cmpnt_typeid` int NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `diameter` varchar(50) DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `uname`, `password`, `email`) VALUES
(17, '123', '123', 'hauntzu', '$2y$10$nqbbi8QTluLmcfa71Oe7/uwLIIASrMVZzTjAxS', 'ahbaysyempre@gmail.com'),
(24, 'Dexter', 'Lallo', 'asdf', '$2y$10$Hh0x.PkqpEDWKXGhfLiFKO398oIVpttMNBLaA5Ne4viK5eJUaJ4z.', 'user1@gmail.com'),
(25, 'qwueiorqwueiopr', 'asdf', 'asdf', '$2y$10$ZvgReFSWqw/jUhihwphY.uBNbS3QFpgTeNkKQBZ82LXukjDkOeRNe', 'user1@gmail.com'),
(26, 'asdf', '123', 'asdf', '$2y$10$F2FprHDTUP4dZPEB5hzqvOfDb.hEEpSqP9d6VaE1mqwwvL2apzUQ2', 'user3@gmail.com'),
(27, 'asdf', '123', 'hauntzu', '$2y$10$8VQ.WnoN22P6PbCkKTJTCexBaYD0pBP6LON6oFdZKsv5sMfD8OBG2', 'user5@gmail.com'),
(28, '123', 'asdf', 'asdf', '$2y$10$hAvoWEjVSy31ShWu0uu0Q.iqBGZ/vmeqytixf.4ATee85efocagBa', 'user6@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
