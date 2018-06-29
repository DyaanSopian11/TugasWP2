-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 11:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jns_kel` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`nip`, `nama`, `gambar`, `alamat`, `jabatan`, `jns_kel`, `status`, `no_telp`) VALUES
('PEG-0001', 'dian sopian', '', 'padasuka', '', '', 'Tetap', '0892731837236'),
('PEG-0002', 'diannn', '', 'cadas', '', '', 'Tetap', 'dsadasda'),
('PEG-0003', 'febridsad', '', 'sadsadas', '', '', 'Tetap', ''),
('PEG-0004', 'diannn', '', 'cicadas', '', '', 'Kontrak', '089231232312'),
('PEG-0005', 'iwan', '', 'dsadasd', '', '', 'Tetap', '290we8w9'),
('PEG-0006', 'dadang ', '', 'dasdasda', 'Gudang', 'Laki-Laki', 'Tetap', '09897878'),
('PEG-0007', 'riban', '', 'cicaheunm', 'Gudang', 'Laki-Laki', 'Tetap', '089829222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
