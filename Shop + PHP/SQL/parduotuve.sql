-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 05:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parduotuve`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_userid`
--

CREATE TABLE `cart_userid` (
  `PRISIJUNGIMO_VARDAS` text NOT NULL,
  `PAVADINIMAS` text NOT NULL,
  `KAINA` int(11) NOT NULL,
  `KIEKIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `ID` int(11) NOT NULL,
  `PAVADINIMAS` text NOT NULL,
  `TIPAS` text NOT NULL,
  `PREKES_KIEKIS` int(11) NOT NULL,
  `KAINA` int(11) NOT NULL,
  `SVIEZUMAS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`ID`, `PAVADINIMAS`, `TIPAS`, `PREKES_KIEKIS`, `KAINA`, `SVIEZUMAS`) VALUES
(1, 'Dviratis', 'Laisvalaikiui', 5, 1020, NULL),
(2, 'Riedlente', 'Laisvalaikiui', 14, 120, NULL),
(3, 'Palapine', 'Laisvalaikiui', 5, 480, NULL),
(4, 'Pienas', 'Maistui', 80, 2, 'Sviezia'),
(5, 'Miltai', 'Maistui', 68, 3, 'Sviezia'),
(6, 'Koldunai', 'Maistui', 45, 4, 'Saldyta'),
(7, 'Mesa', 'Maistui', 72, 6, 'Sviezia'),
(8, 'Spanguoles', 'Maistui', 21, 2, 'Saldyta'),
(9, 'Tinkas', 'Statyboms', 22, 4, NULL),
(10, 'Dazai', 'Statyboms', 30, 9, NULL),
(11, 'Grindjuostes', 'Statyboms', 48, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `ID` int(11) NOT NULL,
  `VARDAS` text NOT NULL,
  `PAVARDE` text NOT NULL,
  `SLAPTAZODIS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`ID`, `VARDAS`, `PAVARDE`, `SLAPTAZODIS`) VALUES
(1, 'Petras', 'Petraitis', 'petras'),
(2, 'Saulius', 'Saulenas', 'saulius');

-- --------------------------------------------------------

--
-- Table structure for table `vertinimas`
--

CREATE TABLE `vertinimas` (
  `Vartotojo_ID` int(11) NOT NULL,
  `Vidurkis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vertinimas`
--

INSERT INTO `vertinimas` (`Vartotojo_ID`, `Vidurkis`) VALUES
(1, '4.4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
