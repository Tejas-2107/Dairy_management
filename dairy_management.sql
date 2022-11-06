-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `milk_col`
--

CREATE TABLE `milk_col` (
  `Sr_No` int(10) NOT NULL,
  `Farmer_code` int(10) NOT NULL,
  `milk_type` varchar(10) NOT NULL,
  `quantity` double NOT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_col`
--

INSERT INTO `milk_col` (`Sr_No`, `Farmer_code`, `milk_type`, `quantity`, `Date`) VALUES
(47, 1001, 'Cow', 14, '2022-10-30'),
(48, 1002, 'Buffolo', 58, '2022-11-05'),
(49, 1002, 'Cow', 10.2, '2022-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milk_col`
--
ALTER TABLE `milk_col`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milk_col`
--
ALTER TABLE `milk_col`
  MODIFY `Sr_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
