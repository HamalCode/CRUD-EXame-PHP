-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2021 at 10:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web3mitireng`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kategoria`
--

CREATE TABLE `t_kategoria` (
  `id_kategoria` char(5) NOT NULL,
  `nrn_kategoria` char(250) NOT NULL,
  `img_kategoria` char(20) DEFAULT NULL,
  `obs_kategoria` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `t_kategoria`
--

INSERT INTO `t_kategoria` (`id_kategoria`, `nrn_kategoria`, `img_kategoria`, `obs_kategoria`) VALUES
('kt001', 'informatika', '1.jpg', 'dadus kategoria informatika'),
('kt002', 'Ekonomia', '2.jpg', 'dadus kategoria ekonomia'),
('kt003', 'Turismo', '3.jpg', 'dadus kategoria Turismo'),
('KT004', 'Koko database', 'KT004.png', 'ghjkl'),
('KT005', 'ertert', 'KT005.png', 'hjk'),
('KT006', 'Desportu', 'KT006.png', 'Koko insert Dadus Desportu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategoria`
--
ALTER TABLE `t_kategoria`
  ADD PRIMARY KEY (`id_kategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
