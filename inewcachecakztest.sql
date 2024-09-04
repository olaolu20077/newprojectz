-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2024 at 06:38 PM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inewcachecakztest`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandmanuaoprs`
--

DROP TABLE IF EXISTS `brandmanuaoprs`;
CREATE TABLE IF NOT EXISTS `brandmanuaoprs` (
  `brandmanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brandmanuaopr_name` varchar(40) NOT NULL,
  PRIMARY KEY (`brandmanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorimanuaoprs`
--

DROP TABLE IF EXISTS `categorimanuaoprs`;
CREATE TABLE IF NOT EXISTS `categorimanuaoprs` (
  `categorimanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categorimanuaopr_name` varchar(40) NOT NULL,
  PRIMARY KEY (`categorimanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `citimanuaoprs`
--

DROP TABLE IF EXISTS `citimanuaoprs`;
CREATE TABLE IF NOT EXISTS `citimanuaoprs` (
  `citimanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `citimanuaopr_name` varchar(40) NOT NULL,
  PRIMARY KEY (`citimanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modelmanuaoprs`
--

DROP TABLE IF EXISTS `modelmanuaoprs`;
CREATE TABLE IF NOT EXISTS `modelmanuaoprs` (
  `modelmanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `modelmanuaopr_name` varchar(40) NOT NULL,
  PRIMARY KEY (`modelmanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pricemanuaoprs`
--

DROP TABLE IF EXISTS `pricemanuaoprs`;
CREATE TABLE IF NOT EXISTS `pricemanuaoprs` (
  `pricemanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pricemanuaopr_name` varchar(100) NOT NULL,
  PRIMARY KEY (`pricemanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `statimanuaoprs`
--

DROP TABLE IF EXISTS `statimanuaoprs`;
CREATE TABLE IF NOT EXISTS `statimanuaoprs` (
  `statimanuaopr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `statimanuaopr_name` varchar(40) NOT NULL,
  PRIMARY KEY (`statimanuaopr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userloginme75zs`
--

DROP TABLE IF EXISTS `userloginme75zs`;
CREATE TABLE IF NOT EXISTS `userloginme75zs` (
  `userloginme75z_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `passwid` varchar(255) NOT NULL,
  `usernamilog` varchar(255) NOT NULL,
  `agreeterms` tinyint(12) UNSIGNED NOT NULL,
  `usersellerme75z_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`userloginme75z_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usersellerme75zs`
--

DROP TABLE IF EXISTS `usersellerme75zs`;
CREATE TABLE IF NOT EXISTS `usersellerme75zs` (
  `usersellerme75z_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemfoto` varchar(100) NOT NULL,
  `agreeterms` tinyint(12) UNSIGNED NOT NULL,
  `nami` varchar(255) NOT NULL,
  `fon` varchar(20) NOT NULL,
  `emali` varchar(255) NOT NULL,
  `itemdescripticondi` varchar(500) NOT NULL,
  `brandmanuaopr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `categorimanuaopr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `citimanuaopr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `pricemanuaopr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `statimanuaopr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `userloginme75z_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`usersellerme75z_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersellerme75zs`
--

INSERT INTO `usersellerme75zs` (`usersellerme75z_id`, `itemfoto`, `agreeterms`, `nami`, `fon`, `emali`, `itemdescripticondi`, `brandmanuaopr_id`, `categorimanuaopr_id`, `citimanuaopr_id`, `pricemanuaopr_id`, `statimanuaopr_id`, `userloginme75z_id`) VALUES
(1, 'finegirl.jpg', 1, 'olu', '08127653567', 'olanowsubomi@gmail.com', 'luvvffdds', 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
