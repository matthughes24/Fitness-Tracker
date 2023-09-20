-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 06:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesstracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'sdfsdfsd@ttest.com', 'sadasdaf', '$2y$10$yROAoA4Ut5ISbQ53oVP9deQKozSohFDmU3PbCrikCUtLLzGPvYLUe'),
(2, 'email1@test.com', 'user123', '$2y$10$E0osRuIWhZdZ7tLCJAByuOAlI7TmKCfw3ir73pS73S42bzAAdJwHm'),
(3, 'hughesm10@newpaltz.edu', 'hughesm10', '$2y$10$JZ12XYoGM/Q4oDLymE1kiepAuHDSYiFQyrR8m0xvKGiLugDAc39ii'),
(4, 'test123@gmail.com', 'user69', '$2y$10$G7QKpx50v/8.eAPunODIz.KFgq7FVAwPLoAbOVKYVzdz0CacxNoly'),
(5, 'testemail@gmail.com', 'user69420', '$2y$10$ii.Lqn2ShlzR0IAn9Bv6ROcUuxcqT2jHT1f.wpdBhtXXwzWDnM02u'),
(6, 'test2@gmail.com', 'test2', '$2y$10$LDZWtZ8Wigt5VBBPL2FdVOHdFRjnJFjyHK3K8Nn1AjUGHCpUDoZgW'),
(7, 'test3@gmail.com', 'test3', '$2y$10$jeBuAKDHBecKNlI.61D4CuZEG.UnKhi/wEb7w7GCC1UuNNAUeVIyC'),
(8, 'test4@gmail.com', 'test4', '$2y$10$l5kWLdzuW471jrZuhIqcn.EgGWu3bXOA6Lg3NF8RWRPlbS5Erbrle'),
(9, 'test5@gmail.com', 'test5', '$2y$10$dRLLo3EXho49itfVBDs2DOYFG3UWFKTGKbn4I6mXFb9F6wiEAE1XK'),
(10, 'test6@gmail.com', 'test6', '$2y$10$nCccKdBYerBm11uBBoyzj.yvLW1pw.qUMaNrOnEPz5wWoKTjv9cLq'),
(11, 'test69@gmail.com', 'test69', '$2y$10$IxKzoXvh64XfrNUTGGSzHeH6cZpinMTuOWarM2/DAACTr4sDgyV5K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
