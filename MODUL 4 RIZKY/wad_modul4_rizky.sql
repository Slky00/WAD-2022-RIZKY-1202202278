-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 29, 2022 at 05:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rizky`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_rizky_tables`
--

CREATE TABLE `showroom_rizky_tables` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rizky`
--

CREATE TABLE `user_rizky` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rizky`
--

INSERT INTO `user_rizky` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(3, 'dsa', 'skyeozgg@gmail.com', '123', '0812345678'),
(4, 'Tata Suryo', 'abc@gmail.com', '123', '08123'),
(6, 'uwu', 'uwu@gmail.com', '123', '12333'),
(7, 'Modul 4 - 1202202278', 'modul4@gmail.com', '12345678', '091321312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_rizky_tables`
--
ALTER TABLE `showroom_rizky_tables`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_rizky`
--
ALTER TABLE `user_rizky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_rizky_tables`
--
ALTER TABLE `showroom_rizky_tables`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_rizky`
--
ALTER TABLE `user_rizky`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
