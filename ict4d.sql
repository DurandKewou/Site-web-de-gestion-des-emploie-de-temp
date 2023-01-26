-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 15, 2022 at 11:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict4d`
--

-- --------------------------------------------------------

--
-- Table structure for table `l1`
--

CREATE TABLE `l1` (
  `idL1` int(10) NOT NULL,
  `ict105` varchar(35) NOT NULL,
  `ict107` varchar(35) NOT NULL,
  `ict109` varchar(35) NOT NULL,
  `ict101` varchar(35) NOT NULL,
  `ict103` varchar(35) NOT NULL,
  `ict111` varchar(35) NOT NULL,
  `ict104` varchar(35) NOT NULL,
  `ict106` varchar(35) NOT NULL,
  `ict102` varchar(35) NOT NULL,
  `ict108` varchar(35) NOT NULL,
  `ict110` varchar(35) NOT NULL,
  `engl104` varchar(35) NOT NULL,
  `fran104` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `l2`
--

CREATE TABLE `l2` (
  `idL2` int(11) NOT NULL,
  `ict203` varchar(35) NOT NULL,
  `ict201` varchar(35) NOT NULL,
  `ict205` varchar(35) NOT NULL,
  `ict207` varchar(35) NOT NULL,
  `engl203` varchar(35) NOT NULL,
  `fran203` varchar(35) NOT NULL,
  `ict213` varchar(35) NOT NULL,
  `ict215` varchar(35) NOT NULL,
  `ict217` varchar(35) NOT NULL,
  `ict204` varchar(35) NOT NULL,
  `ict208` varchar(35) NOT NULL,
  `ict202` varchar(35) NOT NULL,
  `ict206` varchar(35) NOT NULL,
  `ict210` varchar(35) NOT NULL,
  `ict214` varchar(35) NOT NULL,
  `ict216` varchar(35) NOT NULL,
  `ict218` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `l3`
--

CREATE TABLE `l3` (
  `idL3` int(10) NOT NULL,
  `ict301` varchar(35) NOT NULL,
  `ict303` varchar(35) NOT NULL,
  `ict305` varchar(35) NOT NULL,
  `ict307` varchar(35) NOT NULL,
  `engl303` varchar(35) NOT NULL,
  `fran303` varchar(35) NOT NULL,
  `ict313` varchar(35) NOT NULL,
  `ict315` varchar(35) NOT NULL,
  `ict317` varchar(35) NOT NULL,
  `ict300` varchar(35) NOT NULL,
  `ict302` varchar(35) NOT NULL,
  `ict304` varchar(35) NOT NULL,
  `ict306` varchar(35) NOT NULL,
  `ict308` varchar(35) NOT NULL,
  `ict310` varchar(35) NOT NULL,
  `ict314` varchar(35) NOT NULL,
  `ict316` varchar(35) NOT NULL,
  `ict318` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `l1`
--
ALTER TABLE `l1`
  ADD PRIMARY KEY (`idL1`);

--
-- Indexes for table `l2`
--
ALTER TABLE `l2`
  ADD PRIMARY KEY (`idL2`);

--
-- Indexes for table `l3`
--
ALTER TABLE `l3`
  ADD PRIMARY KEY (`idL3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `l1`
--
ALTER TABLE `l1`
  MODIFY `idL1` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `l2`
--
ALTER TABLE `l2`
  MODIFY `idL2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `l3`
--
ALTER TABLE `l3`
  MODIFY `idL3` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
