-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:22 AM
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
-- Database: `webdesigndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `resetpaswword`
--

CREATE TABLE `resetpaswword` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `selector` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpaswword`
--

INSERT INTO `resetpaswword` (`id`, `email`, `selector`) VALUES
(16, 'rubiibipaul2018@gmail.com', '97c7da6b8ba2e23a'),
(19, 'npcictlevel22018@gmail.com', 'b6ef0e8c62891c6f'),
(20, 'rubibipaul2018@gmail.com', '82b52a14ac9f5103');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` int(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `code`, `status`) VALUES
(45, 'mami', 'mama', 'mama', 'rubibipaul2018@gmail.com', '99fec8eb68c9d2d22d13f52355ee56bf89c9eaab', 668283, 'Verified'),
(46, 'mu', 'toni', 'mutoni', 'rubiibipaul2018@gmail.com', '35b8291f12dde44bd8443012f11331e48f0f4a34', 806747, 'Verified'),
(47, 'kal', 'm', 'k', 'npcictlevel22018@gmail.com', '346dff0cee5ed5c7bf4498cba447678af2f9801c', 241498, 'Verified'),
(48, 'admins', 'strator', 'admin1 ', 'rubiibipaul2018@gmail.com', '346dff0cee5ed5c7bf4498cba447678af2f9801c', 848484, 'Not verified'),
(49, 'm', 'n', 'l', 'rubiibipaul2018@gmail.com', '346dff0cee5ed5c7bf4498cba447678af2f9801c', 861725, 'Not verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resetpaswword`
--
ALTER TABLE `resetpaswword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resetpaswword`
--
ALTER TABLE `resetpaswword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
