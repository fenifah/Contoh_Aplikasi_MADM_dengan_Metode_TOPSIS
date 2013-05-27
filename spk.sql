-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2012 at 12:47 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id_data` int(5) NOT NULL AUTO_INCREMENT,
  `a1c1` float NOT NULL,
  `a1c2` float NOT NULL,
  `a1c3` float NOT NULL,
  `a1c4` float NOT NULL,
  `a1c5` float NOT NULL,
  `a2c1` float NOT NULL,
  `a2c2` float NOT NULL,
  `a2c3` float NOT NULL,
  `a2c4` float NOT NULL,
  `a2c5` float NOT NULL,
  `a3c1` float NOT NULL,
  `a3c2` float NOT NULL,
  `a3c3` float NOT NULL,
  `a3c4` float NOT NULL,
  `a3c5` float NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  `w5` float NOT NULL,
  `typec1` varchar(10) NOT NULL,
  `typec2` varchar(10) NOT NULL,
  `typec3` varchar(10) NOT NULL,
  `typec4` varchar(10) NOT NULL,
  `typec5` varchar(10) NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `a1c1`, `a1c2`, `a1c3`, `a1c4`, `a1c5`, `a2c1`, `a2c2`, `a2c3`, `a2c4`, `a2c5`, `a3c1`, `a3c2`, `a3c3`, `a3c4`, `a3c5`, `w1`, `w2`, `w3`, `w4`, `w5`, `typec1`, `typec2`, `typec3`, `typec4`, `typec5`) VALUES
(10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 7, 6, 5, 4, 3, 'benefit', 'benefit', 'benefit', 'benefit', 'benefit'),
(11, 0.75, 2000, 18, 50, 500, 0.5, 1500, 20, 40, 450, 0.9, 2050, 35, 35, 800, 5, 3, 4, 4, 2, 'cost', 'benefit', 'cost', 'benefit', 'cost'),
(12, 1, 2, 31, 34, 3, 113, 123, 1, 23, 12, 23, 34, 54, 6, 23, 43, 34, 2, 3, 23, 'benefit', 'benefit', 'cost', 'benefit', 'cost');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
