-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2025 at 11:59 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `request_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `nama`, `email`, `telepon`, `deskripsi`, `created_at`) VALUES
(1, 'Akun Ketiga', 'mdena2516@gmail.com', '123456789', 'bla bla bla', '2025-02-11 11:25:51'),
(2, 'Akun Ketiga', 'mdena2516@gmail.com', '123456789', 'bla bla bla', '2025-02-11 11:30:17'),
(3, 'Akun Test', 'mdena2516@gmail.com', '0987654321', 'zzzzzzzzzzzzz', '2025-02-11 11:41:34'),
(4, 'Akun Test', 'mdena2516@gmail.com', '0987654321', 'aaaaaaaaaaaaaaaaaaaaaa', '2025-02-11 11:42:08'),
(5, 'aaaa', 'mdena2516@gmail.com', '0987654321', 'bla bla bla 123', '2025-02-11 11:43:54'),
(6, 'aaaa', 'mdena2516@gmail.com', '0987654321', 'bla bla bla 123', '2025-02-11 11:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
