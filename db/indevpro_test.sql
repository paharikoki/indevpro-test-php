-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 01:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indevpro_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mahasiswa`, `nim`, `email`, `semester`, `kelas`) VALUES
(1, 'salsabilla', '220831111', '220831111@unmer.ac.id', 3, '3H'),
(2, 'hastiro', '220831112', '220831112@unmer.ac.id', 3, '3E'),
(3, 'ilham ardiansa', '220831113', '220831113@unmer.ac.id', 1, '1H'),
(4, 'm tiro', '220831114', '220831114@unmer.ac.id', 3, '3A'),
(5, 'dian fitri', '220831115', '220831115@unmer.ac.id', 1, '1A'),
(6, 'indra kusuma', '220831116', '220831116@unmer.ac.id', 1, '1H'),
(7, 'George', '220831117', '220831117@unmer.ac.id', 3, '3H'),
(8, 'Daffa annisa', '220831118', '220831118@unmer.ac.id', 3, '3E'),
(9, 'massayu', '220831119', '220831119@unmer.ac.id', 1, '1E'),
(10, 'Ara ara', '220831120', '220831120@unmer.ac.id', 1, '1G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
