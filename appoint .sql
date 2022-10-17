-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 08:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `service` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`firstname`, `lastname`, `service`, `phone`, `date`, `time`, `message`) VALUES
('jayaraj', 'kanda', 'Neurology', 9063258605, '2021-12-04', '10:10', 'heyy'),
('jayaraj', 'kanda', 'Neurology', 9063258605, '2021-12-05', '11:11', 'dfdf'),
('jayaraj', 'kanda', 'Neurology', 9063258605, '2021-12-04', '10:10', 'heyy'),
('jayaraj', 'kanda', 'Neurology', 9063258605, '2021-12-05', '11:11', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Username`, `password`, `service`, `number`) VALUES
('nuerology', 'nuerology', 'nuerology', 9016546445),
('cardiology', 'cardiology', 'cardiology', 9457444564),
('opthamology', 'opthamology', 'opthamology', 6346945445),
('dental', 'dental', 'dental', 9456131732),
('other services', 'other services', 'other services', 9874561230),
('Admin', 'Admin', 'Adimin', 9745162308),
('nuerology', 'nuerology', 'nuerology', 9016546445),
('cardiology', 'cardiology', 'cardiology', 9457444564),
('opthamology', 'opthamology', 'opthamology', 6346945445),
('dental', 'dental', 'dental', 9456131732),
('other services', 'other services', 'other services', 9874561230),
('Admin', 'Admin', 'Adimin', 9745162308);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `yourname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`yourname`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('jayaraj', 'shakeenkumar5@gmail.com', 'nope', 'thanks'),
('', '', '', ''),
('jayaraj', 'shakeenkumar5@gmail.com', 'nope', 'thanks');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Username` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `verify_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `number`, `email`, `password`, `password2`, `verify_token`) VALUES
('Admin', 0, 'Admin@gmail.com', 'Admin', 'Admin', ''),
('jayaraj', 9063258605, 'shakeenkumar5@gmail.com', '143', '143', 'c65d0133ff5bac44f2479ee3d05599ec'),
('its', 9145698654, 'hellogoogle@gmail.com', 'hai', 'hai', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
