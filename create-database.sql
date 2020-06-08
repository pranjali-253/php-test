-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 12:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_weather`
--

CREATE TABLE `city_weather` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL,
  `pressure` varchar(10) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `created_on` varchar(255) NOT NULL,
  `updated_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_weather`
--

INSERT INTO `city_weather` (`id`, `city`, `temperature`, `humidity`, `pressure`, `speed`, `created_on`, `updated_on`) VALUES
(4, 'Lucknow', '35', '50', '1003', '2.6', '2020-06-07 23:18:50', '2020-06-08 12:16:09'),
(5, 'Delhi', '30.32', '61', '1002', '0.77', '2020-06-07 23:19:26', '2020-06-08 00:00:54'),
(6, 'Bangalore', '29.69', '48', '1010', '4.1', '2020-06-07 23:29:17', '2020-06-08 13:25:18'),
(7, 'Kolkata', '27', '94', '1001', '3.65', '2020-06-07 23:30:40', '2020-06-07 23:30:40'),
(8, 'mumbai', '28', '65', '1006', '2.6', '2020-06-07 23:32:13', '2020-06-07 23:32:13'),
(9, 'Bombay', '28', '65', '1006', '2.6', '2020-06-07 23:32:21', '2020-06-07 23:32:21'),
(10, 'PUNE', '29.79', '56', '1008', '5.89', '2020-06-07 23:34:04', '2020-06-08 11:49:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_weather`
--
ALTER TABLE `city_weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_weather`
--
ALTER TABLE `city_weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
