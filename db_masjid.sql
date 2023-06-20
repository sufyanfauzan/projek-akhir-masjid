-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 12:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_donatur`
--

CREATE TABLE `db_donatur` (
  `id` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `kategori` enum('uang','emas') NOT NULL,
  `nominal` int(50) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_donatur`
--

INSERT INTO `db_donatur` (`id`, `nama_donatur`, `paket`, `kategori`, `nominal`, `metode`, `gambar`) VALUES
(95, 'Sufyan Fauzan', 'Paket 1', 'uang', 800000, 'POSPAY', '649028557e57b.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_donatur`
--
ALTER TABLE `db_donatur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_donatur`
--
ALTER TABLE `db_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
