-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 04:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `user` varchar(30) NOT NULL,
  `ser` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `cos` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`user`, `ser`, `time`, `cos`) VALUES
('', '3', '11:30-12:15', ''),
('', '3', '04:30-05:15', ''),
('', '3', '10:45-11:30', ''),
('', '1', '03:00-03:45', '2'),
('', '1', 'non', '1'),
('2', 'meet', '05:15-06:00', '3'),
('2', 'meet', '10:00-10:45', '2'),
('4', 'cv', '07:30-08:15', '1'),
('qwerrt', '3', '06:45-07:30', '1'),
('qq', '2', '10:45-11:30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `user` varchar(30) NOT NULL,
  `ser` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `cos` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user`, `pass`) VALUES
('meet', '123'),
('as', 'sa'),
('as', 'sa'),
('as', 'sa'),
('as', 'sa'),
('as', 'sa'),
('rt', 'tr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
