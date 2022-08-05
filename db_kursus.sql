-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 07:33 PM
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
-- Database: `db_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_nama` varchar(55) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `admin_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_password`) VALUES
(1, 'jewepe', 'jewepe@gmail.com', '132f167d2f19af84507fbadf4b9b1022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(3) NOT NULL,
  `kursus_id` int(3) NOT NULL,
  `waktu_kursus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `kursus_id`, `waktu_kursus`) VALUES
(1, 1, '01 Agustus 2022'),
(2, 1, '12 Agustus 2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `id_kursus` int(3) NOT NULL,
  `nama_kursus` varchar(50) NOT NULL,
  `keterangan_kursus` text NOT NULL,
  `durasi_kursus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kursus`
--

INSERT INTO `tb_kursus` (`id_kursus`, `nama_kursus`, `keterangan_kursus`, `durasi_kursus`) VALUES
(1, 'Funda DBMS', 'Belajar Database Management System', '10 Hari'),
(2, 'Funda Desktop', 'Belajar Pemrograman Desktop', '14 Hari'),
(3, 'Funda Web', 'Belajar Pemrograman Web', '7 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(3) NOT NULL,
  `id_mahasiswa` int(3) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(3) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `npm`, `nama_mahasiswa`, `kelas`, `username`, `password`) VALUES
(1, '13118836', 'LUKMAN NUR HAKIM', '4KA16', '13118836', '13118836');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran_kursus`
--

CREATE TABLE `tb_pendaftaran_kursus` (
  `id_pendaftaran_kursus` int(3) NOT NULL,
  `id_mahasiswa` int(3) NOT NULL,
  `id_kursus` int(3) NOT NULL,
  `krs` text NOT NULL,
  `verifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_pendaftaran_kursus`
--
ALTER TABLE `tb_pendaftaran_kursus`
  ADD PRIMARY KEY (`id_pendaftaran_kursus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  MODIFY `id_kursus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pendaftaran_kursus`
--
ALTER TABLE `tb_pendaftaran_kursus`
  MODIFY `id_pendaftaran_kursus` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
