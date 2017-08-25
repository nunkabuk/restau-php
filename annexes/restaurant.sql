-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2017 at 10:49 AM
-- Server version: 5.5.57-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`ID` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `nom`, `prix`) VALUES
(3, 'enfant', 3),
(5, 'enfant', 3),
(6, 'enfant', 3),
(9, 'frites', 45678),
(10, 'frites', 45678),
(11, 'frites', 45678),
(12, 'frites', 45678),
(15, 'czef', 88),
(16, 'czef', 88),
(17, 'czef', 88),
(18, 'czef', 88),
(19, 'czef', 88),
(20, 'czef', 88),
(21, 'czef', 88),
(22, 'czef', 88),
(23, 'czef', 88),
(24, 'czef', 88),
(25, 'czef', 88),
(26, 'kol', 0),
(27, 'enf', 0),
(28, 'gourmand', 123),
(29, 'gourmand', 123),
(30, 'gourmand', 123),
(31, 'gourmand', 123),
(32, 'gourmand', 123),
(33, 'gourmand', 123),
(34, 'gourmand', 123),
(35, 'gourmand', 123),
(36, 'gourmand', 123),
(37, 'gourmand', 123),
(38, 'gourmand', 123),
(39, 'gourmand', 123),
(40, 'gourmand', 123),
(41, 'gourmand', 123),
(42, 'gourmand', 123),
(43, 'gourmand', 123),
(44, 'gourmand', 123),
(45, 'gourmand', 123);

-- --------------------------------------------------------

--
-- Table structure for table `plats`
--

CREATE TABLE IF NOT EXISTS `plats` (
`ID` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plats`
--

INSERT INTO `plats` (`ID`, `nom`, `prix`, `image`) VALUES
(9, 'risotto', 9, 'uploads/risotto.jpeg'),
(11, 'ratatouille ', 213, 'uploads/poisson.jpg'),
(14, 'tarte fruits', 5, 'uploads/tarte.jpeg'),
(15, 'glace', 6, 'uploads/glace.jpg'),
(16, 'charlotte poire choco ', 5, 'uploads/charlotte.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `relation_plats_menu`
--

CREATE TABLE IF NOT EXISTS `relation_plats_menu` (
`ID` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_plats` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation_plats_menu`
--

INSERT INTO `relation_plats_menu` (`ID`, `id_menu`, `id_plats`) VALUES
(1, 1, 11),
(2, 1, 16),
(3, 7, 12),
(4, 7, 16),
(5, 8, 7),
(6, 8, 9),
(7, 8, 11),
(8, 13, 19),
(9, 13, 14),
(10, 13, 16),
(11, 13, 17),
(12, 14, 11),
(13, 14, 17),
(14, 27, 11),
(15, 27, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `plats`
--
ALTER TABLE `plats`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `relation_plats_menu`
--
ALTER TABLE `relation_plats_menu`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `plats`
--
ALTER TABLE `plats`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `relation_plats_menu`
--
ALTER TABLE `relation_plats_menu`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
