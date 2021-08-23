-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 07:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `assignmentid` int(11) NOT NULL AUTO_INCREMENT,
  `bikeid` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`assignmentid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentid`, `bikeid`, `employeeid`, `status`, `date`) VALUES
(4, 2, 11, 'ASSIGNED', '2021-04-24 00:00:00'),
(3, 1, 8, 'NOT_DONE', '2021-04-24 00:00:00'),
(5, 5, 11, 'DONE', '2021-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bikeuser`
--

DROP TABLE IF EXISTS `bikeuser`;
CREATE TABLE IF NOT EXISTS `bikeuser` (
  `bikeuserid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `bikemodel` varchar(50) NOT NULL,
  `numberplate` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`bikeuserid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikeuser`
--

INSERT INTO `bikeuser` (`bikeuserid`, `fullname`, `bikemodel`, `numberplate`, `address`, `mobile`) VALUES
(1, 'Mohammad Hasan', 'FZS V3', 'Dhaka Metro-LA 503790', '297 West Nakhal Para, Tejgaon', '01709644110'),
(2, 'Obaidur', 'FZS V3', 'Dhaka Metro-LA 503795', '87 Wsrtst ', '2323232'),
(3, 'Aiza', 'R15', 'Dhaka Metro-LA 503796', 'tewsadfs', '232323323'),
(5, 'Numair', 'R1', 'Dhaka metro-LA 216262', 'Mohammadour', '01883909139');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employeeid` int(11) NOT NULL AUTO_INCREMENT,
  `employeename` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `notes` varchar(100) NOT NULL,
  PRIMARY KEY (`employeeid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeename`, `username`, `contact`, `notes`) VALUES
(9, 'Ratib Al karim', 'ratib', '1111', '1111'),
(8, 'Sujun Miya', 'sujon', '111', '1111'),
(10, 'Shuvro Ahmmed', 'shubro', '111', '1111'),
(11, 'Rudro Hasan', 'hasan', '111', 'Notes');

-- --------------------------------------------------------

--
-- Table structure for table `usermanager`
--

DROP TABLE IF EXISTS `usermanager`;
CREATE TABLE IF NOT EXISTS `usermanager` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermanager`
--

INSERT INTO `usermanager` (`UserID`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'obaidur', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(8, 'shubro', '50acc56687335715c0fc73e6532077a4', 2, 1),
(7, 'ratib', 'c4f64e0ead80559abf8ca42033d9eeca', 2, 1),
(6, 'sujon', '730056bfa3536c8c6f7e70e896963d61', 2, 1),
(9, 'hasan', 'fc3f318fba8b3c1502bece62a27712df', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
