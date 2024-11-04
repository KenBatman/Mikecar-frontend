-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_databasse`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ken', 'dthanh14902@gmail.com', '$2y$10$QQy9BL5UQZ7qz051Ijv1uOQHK9vUiucWOVK0JUXknv0hbwpXhIlXW'),
(3, 'Ken', '0936963225@gmail.com', '$2y$10$L89tOnzNW5LsuUZPBXnKLuVRo5D7Z8oc.UNoccnGQjaQdzg81BLHW'),
(4, 'fbfgb', '213123213@gmail.com', '$2y$10$YlkYW4KwJ0XT7GO18pI5deiDoNYEE5eFVd9ovz2UMthhvr5VfXOii'),
(5, 'Ken22', '123@gmail.com', '$2y$10$1NiKy98qxKrNVpDQoXooy.J/Z38ZwFhVfNEIs.p9AolVlthy4KMza'),
(6, 'hi', '1234@gmail.com', '$2y$10$gSQFvm8twz7wF6s8ackiBeWJoldVeX/gBSqpsJKnP2X2QtrmJGyEi'),
(7, 'dd', '12345@gmail.com', '$2y$10$ZuUlNe9O523S.2HXm45HROJuC7MIpnaYBDzqnNuCTNOyLZUYshVny'),
(10, 'Baoem', 'Baotreem@gmail.com', '$2y$10$MCjJ8JBzkUDUHuARyh4jUuFW9rUnJlFv.2Dm/IAzNiOuzLb8Kc3MS'),
(11, 'Bao', 'Baobulul@gmail.com', '$2y$10$DB5vH3wtIjOY.T4nDrhfCOK86E0mK7mGTtoqLhe5ucXr5z61yOa5K'),
(12, 'Bao', 'baoemm@gmail.com', '$2y$10$tNJzHiGdASCM91jKfvDpJeX7G/qACybUZMhXFew47clfXTMWj20W.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
