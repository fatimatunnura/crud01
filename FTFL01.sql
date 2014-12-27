-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 03:14 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `FTFL01`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `training_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `institute` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `training_title`, `description`, `start_date`, `end_date`, `institute`, `course_title`, `address`) VALUES
(32, 'oooooooo', 'oooooooooooooo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Oxford_University', '', 'Khulna'),
(33, 'kkkkkkk', 'llllllllll', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yale_University', '', 'Khulna'),
(34, 'qqqqqqqqqqqq', 'qqqqqqqqqqqqq', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yale_University', '', 'Khulna'),
(46, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Oxford_University', 'kkkkkkkkkkkkkkkkkkk', ''),
(47, 'uuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Princeton_University', 'uuuuuuuuuuuuuuuuuuu', 'Dhaka'),
(48, 'lllllllllllllllll', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Oxford_University', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
