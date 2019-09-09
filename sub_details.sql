-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 04:50 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsmsecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_details`
--

CREATE TABLE `sub_details` (
  `msisdn` varchar(255) NOT NULL,
  `imsi` bigint(20) NOT NULL,
  `ki` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_details`
--

INSERT INTO `sub_details` (`msisdn`, `imsi`, `ki`) VALUES
('8779156986', 91778779156986, '11011110100101101010110111000110101010101000111100101110010100001000111101110001101111010101101111110101000000110010101100100101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_details`
--
ALTER TABLE `sub_details`
  ADD PRIMARY KEY (`msisdn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
