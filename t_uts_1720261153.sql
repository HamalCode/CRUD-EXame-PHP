-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 07:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_uts_1720261153`
--

CREATE TABLE `t_uts_1720261153` (
  `Id_fakuldade` char(5) NOT NULL,
  `Nrn_fakuldade` char(250) NOT NULL,
  `Logotipu` char(100) NOT NULL,
  `Obs_fakuldade` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_uts_1720261153`
--

INSERT INTO `t_uts_1720261153` (`Id_fakuldade`, `Nrn_fakuldade`, `Logotipu`, `Obs_fakuldade`) VALUES
('FK001', 'ICT', 'FK001.jpg', 'Akreditado'),
('FK002', 'Economia', 'FK002.jpg', 'Akreditadu'),
('FK003', 'Hotelaria', 'FK003.jpg', 'Diploma III'),
('FK004', 'Saude Publica', 'FK004.png', 'Akreditasaun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_uts_1720261153`
--
ALTER TABLE `t_uts_1720261153`
  ADD PRIMARY KEY (`Id_fakuldade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
