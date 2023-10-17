-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 11:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataone`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'qwe', 'qwe', 'admin', 'admin'),
(2, 'asda', 'asdsad', 'wwww', '3bad6af0fa4b8b330d162e19938ee981'),
(3, 'asda', 'asdsad', 'wwww', '3bad6af0fa4b8b330d162e19938ee981'),
(4, 'aa', 'aa', 'aa', 'b2ca678b4c936f905fb82f2733f5297f'),
(5, 'aaa', 'aaa', 'ssss', '4eae35f1b35977a00ebd8086c259d4c9'),
(6, 'qwewqewqeqwe', 'qwewqewqeqwe', 'admins', '2deb000b57bfac9d72c14d4ed967b572'),
(7, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'a', 'a', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(9, 'ads', 'ads', 'ads', '2deb000b57bfac9d72c14d4ed967b572');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
