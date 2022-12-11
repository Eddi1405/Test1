-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 11. Dez 2022 um 20:18
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Getränke`
--

CREATE TABLE `Getränke` (
  `Name` varchar(50) NOT NULL,
  `Anzahl` int(11) NOT NULL,
  `NR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `Getränke`
--

INSERT INTO `Getränke` (`Name`, `Anzahl`, `NR`) VALUES
('Max Musterman', 0, 1),
('Max Musterhaus', 0, 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Getränke`
--
ALTER TABLE `Getränke`
  ADD PRIMARY KEY (`NR`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Getränke`
--
ALTER TABLE `Getränke`
  MODIFY `NR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
