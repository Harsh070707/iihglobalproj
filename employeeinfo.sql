-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 05:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `comapny` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `comapny`) VALUES
(1, 'IIH Global'),
(2, 'TCS'),
(3, 'Infosys'),
(4, 'Accenture'),
(5, 'Kleeto');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_comp_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `emp_comp_id`) VALUES
(1, 'Harsh', '1'),
(2, 'Ganesh', '3'),
(3, 'Kush', '2'),
(4, 'Hemananda', '4'),
(5, 'Chandra', '4'),
(6, 'Rashika', '5'),
(7, 'Duggal', '3');

-- --------------------------------------------------------

--
-- Table structure for table `iihemp`
--

CREATE TABLE `iihemp` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numbers` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iihemp`
--

INSERT INTO `iihemp` (`id`, `company`, `name`, `email`, `numbers`, `gender`, `address`, `image`) VALUES
(9, 'Infosys', 'Ganesh', 'bansal110@gmail.com', '1223567290', 'Male', 'Udyogvihar', 'Screenshot (12).png'),
(10, 'Kleeto', 'Rashika', 'rashi@gmail.com', '4567890123', 'Female', 'P no.123, Udyogvihar ', 'Screenshot (9).png'),
(12, 'Accenture', 'Hemananda', 'hema@gmail.com', '4567890114', 'Male', 'P no.123, Udyogvihar,Balweer ', 'Screenshot (7).png'),
(13, 'Accenture', 'Chandra', 'chandren@gmail.com', '1234567878', 'Male', 'P1345,Udyogvihar,Gurgaononhh', 'Screenshot (12).png'),
(17, 'IIH Global', 'Harsh', 'harsh.bansal110@gmail.com', '8429343941', 'Male', 'Udyogvihar', 'Screenshot (7).png'),
(18, 'Kleeto', 'Rashika', 'rashin@gmail.com', '1234321124', 'Female', 'hfydyrss0hgvhjv', 'Screenshot (10).png'),
(19, 'TCS', 'Kush', 'kushqnkjbs@gmail.com', '1234321234', 'Male', 'Folk Residency Gurugram , T23 Balveer market, T block', 'Screenshot (7).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iihemp`
--
ALTER TABLE `iihemp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `iihemp`
--
ALTER TABLE `iihemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
