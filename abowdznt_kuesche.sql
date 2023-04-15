-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 13. Apr 2023 um 05:40
-- Server-Version: 10.3.38-MariaDB-log-cll-lve
-- PHP-Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `abowdznt_kuesche`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gerichte`
--

CREATE TABLE `gerichte` (
  `id` int(11) NOT NULL,
  `abteilung` varchar(50) NOT NULL,
  `gerichte` varchar(50) NOT NULL,
  `anzahl` int(50) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `gerichte`
--

INSERT INTO `gerichte` (`id`, `abteilung`, `gerichte`, `anzahl`, `datum`) VALUES
(1, 'FIS', 'vegetarisches Gericht', 20, '2022-07-05 16:35:01'),
(2, 'GL', 'Volles Gericht', 8, '0000-00-00 00:00:00'),
(3, 'GL', 'vegetarisches Gericht', 50, '2022-07-05 10:36:14'),
(4, 'drfg', 'sfdgfdgdfg', 42, '2022-07-05 16:37:29'),
(5, 'drfg', 'w3234', 32, '2022-07-06 14:18:10'),
(6, 'FIA', 'Volles Gericht', 7, '2022-08-19 19:00:12'),
(7, 'Fia', 'dasd', 6, '2022-09-06 12:33:24'),
(8, 'Fia', 'dasd', 32, '2022-11-17 08:54:00'),
(9, 'FIA', 'Volles Gericht', 12, '2023-01-13 21:17:32'),
(10, 'FIA', 'Volles Gericht', 5, '2023-01-13 21:45:50'),
(11, 'FIA', 'dgdfgdf', 21, '2023-01-13 21:46:34');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Khalid', 'Arab', 'rojda.f@gmail.com', '8d80046a095b523aed805f7c9a8a7bf3'),
(2, 'KHALID', 'ARAB', 'khaledarab1983@hotmail.com', '8d80046a095b523aed805f7c9a8a7bf3');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gerichte`
--
ALTER TABLE `gerichte`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gerichte`
--
ALTER TABLE `gerichte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
