-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2013 at 05:55 PM
-- Server version: 5.5.20
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maiv_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_breadbuns`
--

CREATE TABLE `maiv_food_breadbuns` (
  `breadbun_id` int(11) NOT NULL AUTO_INCREMENT,
  `breadbun_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`breadbun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_burgers`
--

CREATE TABLE `maiv_food_burgers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `breadbun_id` int(11) NOT NULL,
  `meat_id` int(11) NOT NULL,
  `vegetable_id` int(11) NOT NULL,
  `lettuce` int(1) NOT NULL DEFAULT '0',
  `tomatoe` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`breadbun_id`,`meat_id`),
  KEY `user_id_2` (`user_id`),
  KEY `breadbun_id` (`breadbun_id`),
  KEY `meat_id` (`meat_id`),
  KEY `vegetable_id` (`vegetable_id`),
  KEY `lettuce` (`lettuce`),
  KEY `tomatoe` (`tomatoe`),
  KEY `lettuce_2` (`lettuce`),
  KEY `tomatoe_2` (`tomatoe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_burger_sauce`
--

CREATE TABLE `maiv_food_burger_sauce` (
  `burger_id` int(11) NOT NULL,
  `sauce_id` int(11) NOT NULL,
  KEY `burger_id` (`burger_id`,`sauce_id`),
  KEY `sauce_id` (`sauce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_decades`
--

CREATE TABLE `maiv_food_decades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_meats`
--

CREATE TABLE `maiv_food_meats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_meat_decade`
--

CREATE TABLE `maiv_food_meat_decade` (
  `meat_id` int(11) NOT NULL,
  `decade_id` int(11) NOT NULL,
  KEY `meat_id` (`meat_id`,`decade_id`),
  KEY `decade_id` (`decade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_sauces`
--

CREATE TABLE `maiv_food_sauces` (
  `sauce_id` int(11) NOT NULL AUTO_INCREMENT,
  `sauce_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sauce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_users`
--

CREATE TABLE `maiv_food_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_vegetables`
--

CREATE TABLE `maiv_food_vegetables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maiv_food_vegetable_decade`
--

CREATE TABLE `maiv_food_vegetable_decade` (
  `vegetable_id` int(11) NOT NULL,
  `decade_id` int(11) NOT NULL,
  KEY `vegetable_id` (`vegetable_id`,`decade_id`),
  KEY `decade_id` (`decade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maiv_food_burgers`
--
ALTER TABLE `maiv_food_burgers`
  ADD CONSTRAINT `maiv_food_burgers_ibfk_4` FOREIGN KEY (`vegetable_id`) REFERENCES `maiv_food_vegetables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_burgers_ibfk_1` FOREIGN KEY (`breadbun_id`) REFERENCES `maiv_food_breadbuns` (`breadbun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_burgers_ibfk_2` FOREIGN KEY (`meat_id`) REFERENCES `maiv_food_meats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_burgers_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `maiv_food_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maiv_food_burger_sauce`
--
ALTER TABLE `maiv_food_burger_sauce`
  ADD CONSTRAINT `maiv_food_burger_sauce_ibfk_2` FOREIGN KEY (`sauce_id`) REFERENCES `maiv_food_sauces` (`sauce_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_burger_sauce_ibfk_1` FOREIGN KEY (`burger_id`) REFERENCES `maiv_food_burgers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maiv_food_meat_decade`
--
ALTER TABLE `maiv_food_meat_decade`
  ADD CONSTRAINT `maiv_food_meat_decade_ibfk_2` FOREIGN KEY (`decade_id`) REFERENCES `maiv_food_decades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_meat_decade_ibfk_1` FOREIGN KEY (`meat_id`) REFERENCES `maiv_food_meats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maiv_food_vegetable_decade`
--
ALTER TABLE `maiv_food_vegetable_decade`
  ADD CONSTRAINT `maiv_food_vegetable_decade_ibfk_2` FOREIGN KEY (`decade_id`) REFERENCES `maiv_food_decades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maiv_food_vegetable_decade_ibfk_1` FOREIGN KEY (`vegetable_id`) REFERENCES `maiv_food_vegetables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
