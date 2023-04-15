-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2021 at 01:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kueche`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerichte`
--

CREATE TABLE `gerichte` (
  `id` int(11) NOT NULL,
  `abteilung` char(100) NOT NULL,
  `gerichte` char(100) NOT NULL,
  `anzahl` int(50) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gerichte`
--

INSERT INTO `gerichte` (`id`, `abteilung`, `gerichte`, `anzahl`, `date`) VALUES
(1, 'FIA', 'Voll Gericht', 20, '2021-08-17 10:22:26'),
(2, 'FIS', 'Vegetarisches Gericht', 15, '2021-08-17 10:23:45'),
(5, 'FIA', 'Voll Gericht', 30, '2021-08-17 12:05:04'),
(6, 'SE', 'Voll Gericht', 10, '2021-08-17 12:37:32'),
(14, 'FIA', 'Voll Gericht', 65, '2021-08-17 13:39:29'),
(21, 'PCN\'ler', 'Vegetarisches Gericht', 5, '2021-08-17 21:20:18'),
(22, 'SE', 'Volles Gericht', 6, '2021-08-18 00:18:25'),
(23, 'PCN\'ler', 'Vegetarisches Gericht', 10, '2021-08-18 09:00:11'),
(24, 'FIS', 'Vegetarisches Gericht', 35, '2021-08-18 12:50:52'),
(25, 'SE', 'Voll Gericht', 15, '2021-08-18 21:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerichte`
--
ALTER TABLE `gerichte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gerichte`
--
ALTER TABLE `gerichte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
