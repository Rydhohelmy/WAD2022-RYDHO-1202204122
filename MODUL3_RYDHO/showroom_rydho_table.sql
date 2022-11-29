-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
<<<<<<< HEAD
-- Generation Time: Nov 26, 2022 at 10:40 AM
=======
-- Generation Time: Nov 22, 2022 at 02:28 AM
>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_rydho_table`
--

CREATE TABLE `showroom_rydho_table` (
<<<<<<< HEAD
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
=======
  `Id_mobi` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` int(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_mobir` varchar(255) NOT NULL,
>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_rydho_table`
--
ALTER TABLE `showroom_rydho_table`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id_mobil`);
=======
  ADD PRIMARY KEY (`Id_mobi`);
>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_rydho_table`
--
ALTER TABLE `showroom_rydho_table`
<<<<<<< HEAD
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `Id_mobi` int(255) NOT NULL AUTO_INCREMENT;
>>>>>>> 2bc689561517ef982cda63a111b638a8a84fa50b
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
