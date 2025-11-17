-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 03:40 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `isidata`
--

CREATE TABLE `isidata` (
  `id` int NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `menu1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `menu2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `menu3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mealtime` date NOT NULL,
  `review` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isidata`
--

INSERT INTO `isidata` (`id`, `name`, `country`, `menu1`, `menu2`, `menu3`, `mealtime`, `review`) VALUES
(11, 't43yrg', 'rdfgdfvfd', 'vfdvdg', 'fgfdgfd', 'gfgfd', '3333-03-31', '45rgere');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `name` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birthyear` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `notes` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`name`, `email`, `password`, `birthyear`, `gender`, `notes`) VALUES
('aac', 'chellzy@gmail.com', '$2y$10$EbdMpqhLxrfYlY181OeFC.HFrmwb78isjvla3VWgxjVD00Oi2PUpu', '1994', 'female', 'tes'),
('aac', 'joan@gmail.com', '$2y$10$zVATbM4M0QLV.Q/cXE/EGet26X/nZ5aT3IwdlaP7tKnRqV4/8S3NK', '1994', 'female', 'tes'),
('AA', 'aa@a', '$2y$10$cMV07Z4O58j2imWjyBOaxOWuz6mqp0FVIrwWnyKmUtvsYKXesgZLu', '12', 'aa', '12'),
('tes', 'tes', '$2y$10$xPCnW3yF9DG0my5jyMutbO4MbR46Tk4eAKZLIt5dAPO/yrhHn7euO', '1222', 'fe', 'rfrfrf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isidata`
--
ALTER TABLE `isidata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isidata`
--
ALTER TABLE `isidata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
