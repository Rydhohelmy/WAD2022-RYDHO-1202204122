-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2022 at 04:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom_RYDHO_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_RYDHO_table`
--

CREATE TABLE `showroom_RYDHO_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(100) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL
  `status_pembayaran` varchar(255) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showroom_RYDHO_table`
--

INSERT INTO `showroom_RYDHO_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `gambar_mobil`, `status_pembayaran`) VALUES
(1, 'terios 91', 'Rydho_1202204122', 'Terios', '10/11/2022', 'Mobil dengan desain yang mwah serta mengutamakan keselamatan', 'MOBIL1.png','Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_RYDHO_table`
--
ALTER TABLE `showroom_RYDHO_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_RYDHO_table`
--
ALTER TABLE `showroom_RYDHO_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
