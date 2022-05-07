-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotspotfruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruitdata`
--

CREATE TABLE `fruitdata` (
  `ID` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Price/Lb` int(10) NOT NULL,
  `Origin` text NOT NULL,
  `Organic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruitdata`
--

INSERT INTO `fruitdata` (`ID`, `Name`, `Price/Lb`, `Origin`, `Organic`) VALUES
(1, 'Star Fruit', 6, 'Sri Lanka', 'Yes'),
(2, 'Acai', 39, 'South America', 'Yes'),
(3, 'JackFruit', 5, 'India', 'Yes'),
(4, 'Dragon Fruit', 5, 'Central America', 'No'),
(5, 'BreadFruit', 4, 'South Pacific', 'No'),
(6, 'Guava', 1, 'South America', 'Yes'),
(7, 'Passion Fruit', 24, 'South America', 'Yes'),
(8, 'Durian', 13, 'SouthEast Asia', 'No'),
(9, 'Horned melon', 4, 'South Africa', 'Yes'),
(10, 'Mangosteen', 8, 'Asian Tropics', 'No'),
(11, 'HoneyCrisp Apple', 2, 'Central America', 'No'),
(12, 'Banana', 2, 'Mexico', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `ID` int(10) NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruitdata`
--
ALTER TABLE `fruitdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
