-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2018 at 03:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `backs` varchar(100) NOT NULL,
  `sem1` varchar(100) NOT NULL,
  `sem2` varchar(100) NOT NULL,
  `sem3` varchar(100) NOT NULL,
  `sem4` varchar(100) NOT NULL,
  `sem5` varchar(100) NOT NULL,
  `sem6` varchar(100) NOT NULL,
  `sem7` varchar(100) NOT NULL,
  `sem8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `roll_no`, `mobile_no`, `branch`, `password`, `backs`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('ashish', 'ashish@gmail.com', '15EGJCS156', '8441993510', 'CSE', 'rajesh@123', '5', '45', '54', '67', '78', '87', '98', '78', '78'),
('Prakhar ', 'prakhargupta367@gmail.com', '15EGJCS167', '8233510993', 'CSE', 'pk7005', '0', '56', '72', '73', '74', '75', '78', '45', '50'),
('Ashwini Saini', 'ashwini.saini@gmail.com', '15EGJCS183', '6204892153', 'ECE', 'ashu1234', '5', '67', '78', '65', '78', '98', '89', '67', '76'),
('RAJESH', 'rajeshranjan457@gmail.com', '15EGJCS187', '8441993510', 'CSE', 'rajesh@123', '4', '45', '76', '78', '87', '67', '', '54', '67'),
('Mohit Sharma', 'mohit.sharma@gmail.com', '15EGJCS188', '6204892153', 'CSE', '123', '5', '72', '67', '67', '76', '89', '78', '63', '73');

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE `tpo` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`email`, `password`) VALUES
('tpo@gmail.com', '123'),
('tpo@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
