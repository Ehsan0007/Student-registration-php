-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 02:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `School_Name` varchar(100) NOT NULL,
  `Roll_No` int(50) NOT NULL,
  `Class` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Father_Name`, `School_Name`, `Roll_No`, `Class`) VALUES
(4, 'Salman Butt', 'Shah', 'Dawood Public School', 475427, '10th'),
(5, 'Adnan', 'Butt Shahab', 'Shagufta Memorial School', 544324324, '9th'),
(6, 'Adnan', 'Butt Shahab', 'Shagufta Memorial School', 544324324, '9th'),
(7, 'Ali Khan', 'Aurangzaib', 'Elexer Public School', 243244, '10th'),
(10, 'Ehsan Khan jamali', 'Dost Muhammad', 'Shagufta Memorial School', 45242432, '10th'),
(11, 'Amin Shah', 'Kamal', 'RAfi public School', 4634343, '9th'),
(12, 'Abrar', 'Kamal', 'Dawood Public School', 4634343, '10th');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
