-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 12:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `aduser` varchar(50) NOT NULL,
  `adpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`aduser`, `adpass`) VALUES
('admin', 'pass'),
('jeotin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookdata`
--

CREATE TABLE IF NOT EXISTS `bookdata` (
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `guest` int(50) NOT NULL,
  `room` int(50) NOT NULL,
  `typeroom` varchar(50) NOT NULL,
  `roomprice` int(50) NOT NULL,
  `totprice` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdata`
--

INSERT INTO `bookdata` (`checkin`, `checkout`, `guest`, `room`, `typeroom`, `roomprice`, `totprice`, `email`) VALUES
('2017-06-06', '2017-06-13', 3, 3, 'Aquatic Suite', 40000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `last` varchar(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenum` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`last`, `first`, `email`, `password`, `phonenum`) VALUES
('Marabulas', 'Joara', 'jmarabulas@gmail.com', 'c48ba993d35c3abe0380f91738fe2a34', 12345);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
