-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jan 2022 um 10:41
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customerdata`
--

CREATE TABLE `customerdata` (
  `customerNo` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` int(10) UNSIGNED NOT NULL,
  `notes` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `customerdata`
--

INSERT INTO `customerdata` (`customerNo`, `name`, `email`, `telephone`, `notes`) VALUES
(76, 'James Willy', 'jameswilly@gmail.com ', 456789123, ''),
(77, 'James Willy', 'jameswilly@gmail.com', 123456789, 'Meat'),
(75, 'James Smith', 'jamessmith@gmail.com', 123456789, ''),
(74, 'Mary Mary', 'marymary@gmail.com', 456789123, 'Birthday Cake mitnehmen'),
(70, 'Billy Lee ', 'billylee@gmail.com ', 78975646, 'Fish'),
(72, 'Mary Mary ', 'marymary@gmail.com', 456789012, ''),
(69, 'Kelly Johnson ', 'kellyjohnsaon@gmail.com ', 456789123, 'Fish'),
(71, 'James Smith ', 'jamessmith@gmail.com', 45678975, ''),
(67, 'Joyce Davies ', 'joyvedavies@gmail.com', 123456789, ''),
(65, 'Jolie Frühauf', 'joliefrühauf@gmail.com', 456789123, ''),
(66, 'Farbian Battke ', 'farbianbattke@gmail.com', 456789123, 'Birthday Cake mitnehmen'),
(59, 'Basti Meister ', 'bastimeister@gmail.com', 456789123, 'Birthday Cake mitnehmen'),
(58, 'Alex Meister', 'alexmeister@gmail.com', 123456789, 'Meat'),
(60, 'Lily Collins', 'lilycollins@gmai.com', 77777777, 'Fish'),
(61, 'Lucy Cat', 'lucycat@gmail.com', 456789123, 'Soup'),
(62, 'Marie Leifheit', 'marieleifheit@gmail.com', 123456, ''),
(63, 'Johh Vincent ', 'johnvincent@gmail.com', 456789123, 'Birthday Cake mitnehmen'),
(64, 'James Willy ', 'Jameswilly@gmail.com', 123456789, 'Meat');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dinnertable`
--

CREATE TABLE `dinnertable` (
  `tableNo` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `dinnertable`
--

INSERT INTO `dinnertable` (`tableNo`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reservation`
--

CREATE TABLE `reservation` (
  `bookingNo` int(11) NOT NULL,
  `customerNo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tableNo` tinyint(1) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `howmanyppl` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `reservation`
--

INSERT INTO `reservation` (`bookingNo`, `customerNo`, `tableNo`, `date`, `howmanyppl`) VALUES
(98, '59', 1, '2022-01-30', 23),
(97, '58', 1, '2022-01-29', 3),
(99, '60', 2, '2022-01-30', 3),
(100, '61', 3, '2022-01-30', 2),
(101, '62', 4, '2022-01-30', 6),
(102, '63', 1, '2022-01-26', 6),
(103, '64', 1, '2022-01-12', 2),
(104, '65', 2, '2022-01-17', 6),
(105, '66', 1, '2022-01-23', 6),
(106, '67', 1, '2022-01-28', 12),
(110, '71', 3, '2022-01-31', 0),
(108, '69', 1, '2022-01-19', 0),
(109, '70', 2, '2022-01-28', 3),
(111, '72', 1, '2022-01-27', 27),
(113, '74', 2, '2022-01-27', 27),
(114, '75', 1, '2022-01-22', 12),
(115, '76', 3, '2022-01-28', 6),
(116, '77', 2, '2022-01-12', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`customerNo`);

--
-- Indizes für die Tabelle `dinnertable`
--
ALTER TABLE `dinnertable`
  ADD PRIMARY KEY (`tableNo`);

--
-- Indizes für die Tabelle `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`bookingNo`),
  ADD KEY `res_name` (`customerNo`),
  ADD KEY `table_no` (`tableNo`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `customerNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT für Tabelle `dinnertable`
--
ALTER TABLE `dinnertable`
  MODIFY `tableNo` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT für Tabelle `reservation`
--
ALTER TABLE `reservation`
  MODIFY `bookingNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
