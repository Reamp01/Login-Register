-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 25 jan 2019 om 15:37
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login&register`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `info`
--

CREATE TABLE `info` (
  `User_Id` int(3) NOT NULL,
  `User_FirstName` varchar(25) NOT NULL,
  `User_LastName` varchar(50) NOT NULL,
  `User_UserName` varchar(25) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_EmailAdress` varchar(100) NOT NULL,
  `User_DateBirth` date DEFAULT NULL,
  `User_DateRegister` date DEFAULT NULL,
  `User_Adress` varchar(25) DEFAULT NULL,
  `User_City` varchar(25) DEFAULT NULL,
  `User_ZipCode` varchar(25) DEFAULT NULL,
  `User_Country` varchar(25) DEFAULT NULL,
  `User_PhoneNumber` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `info`
--

INSERT INTO `info` (`User_Id`, `User_FirstName`, `User_LastName`, `User_UserName`, `User_Password`, `User_EmailAdress`, `User_DateBirth`, `User_DateRegister`, `User_Adress`, `User_City`, `User_ZipCode`, `User_Country`, `User_PhoneNumber`) VALUES
(1, 'Ruben', 'van de Ven', 'Rubenvandven01', '$2y$10$ygvKNQDUL/7MYk8KH0XOSO2q4IJOd/CoBTKO9Vn8aTS4YzBpCHTsa', '81281@rocteraa-student.nl', '2001-10-28', '2019-01-24', 'Marialaan 2', 'Helmond', '1234XZ', 'Nederland', '06 12345678');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `User_Id` (`User_Id`,`User_EmailAdress`,`User_UserName`),
  ADD UNIQUE KEY `User_UserName` (`User_UserName`),
  ADD UNIQUE KEY `User_EmailAdress` (`User_EmailAdress`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `info`
--
ALTER TABLE `info`
  MODIFY `User_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
