-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 09:13 AM
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
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'nina', 'nina@gmail.com', 'nina'),
(15, 'murokozi', 'munana@gmail.com', '9b8400c0154bcca7f8bc29e9f99f104d'),
(16, 'kanani', 'kanani@gmail.com', '3a3f76eb804547b021cb07f36f1f0d3f04f59311'),
(17, 'niga', 'niga@gmail.com', '69b9f9cb1ff047dd00f03c5a8f1460cae7b2a84f'),
(18, 'manzi', 'manzi@gmail.com', '89006d9ccb010709c6092ecc27e83aeeeebba4b7'),
(19, 'nunu', 'nunu@gmail.com', '5a06ede8eb22598e747f75a28d27c8bf93917f3e'),
(20, 'kamari', 'kamari@gmail.com', 'd136ca72b0a3c5bfd9a1f5f4be7f3cedda58ef26'),
(21, 'm', 'm@m', '819729f12474eb20b8f9b28b812b3f0e9113b42e'),
(22, 'a', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(23, 'b', 'b@bbb', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98'),
(24, 'mama', 'mama@mm', '99df988b77e60a1718e9e6fecdaf22552047be28'),
(25, 'kali', 'kali@l', 'e7e971e55af10f713238780785ec5e63720509f0'),
(26, 'bb', 'bb@gmailcom', '5cb138284d431abd6a053a56625ec088bfb88912'),
(27, 'bertin', 'bertin@nn', '886ad6969fba653ddf1542b30234b8c9ff78f4bf'),
(28, 'nizo', 'nizo@gg', 'dbf701ad3a0fed1b06ea95ebce8a77650e215eeb'),
(29, 'ruma', 'ru@bbb', '5462af5829a103442ffecfe154cfa7dbede32f2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
