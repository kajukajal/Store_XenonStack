-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2019 at 02:26 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `Eid` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Cname` text NOT NULL,
  `Fname` text NOT NULL,
  `Cadd` varchar(250) NOT NULL,
  `Cmob` varchar(80) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Eid`, `Brand`, `Model`, `Cname`, `Fname`, `Cadd`, `Cmob`, `Price`, `Payment`) VALUES
('ravi', 'bmw', 'eagle', 'baba', 'pardada', 'yamlok', '0123456789', '1', 'Cash'),
('ravi', 'BMW', 'Eagle', 'Ranjan', 'xyz', 'Patna', '9876543210', '10000000', 'Cheque');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `Sno` varchar(10) NOT NULL,
  `Brand` text NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Type` text NOT NULL,
  `Gear` varchar(15) NOT NULL,
  `Price` int(30) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Sno`, `Brand`, `Model`, `Type`, `Gear`, `Price`, `image`) VALUES
('C005', 'Mahindra', 'Thar', 'Diesel', 'Manual', 220000, 'upload/mahi.jpg'),
('C003', 'Maruti', 'Ciaz', 'Petrol', 'Automatic', 820000, 'upload/ms.jpg'),
('C001', 'Hyundai', 'Sparrow', 'Petrol', 'Automatic', 1000000, 'upload/car2.png'),
('C002', 'BMW', 'Eagle', 'Diesel', 'Automatic', 10000000, 'upload/car3.jpg'),
('C004', 'Ferrari', 'Portofino', 'Diesel', 'Automatic', 40900000, 'upload/c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `Mobile` (`Mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`username`, `password`, `Name`, `Address`, `Email`, `Mobile`) VALUES
('ravi', 'ravi', 'Ravi Ranjan', 'Muzaffarpur', 'abc@gmail.com', '1234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
