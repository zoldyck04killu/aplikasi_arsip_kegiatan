-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2018 at 05:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_arsip_kegiatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Guru`
--

CREATE TABLE `Guru` (
  `guru_nip` int(50) NOT NULL,
  `guru_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_jkel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_golongan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Jenis`
--

CREATE TABLE `Jenis` (
  `jenis_id` int(100) NOT NULL,
  `jenis_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Kegiatan`
--

CREATE TABLE `Kegiatan` (
  `kegiatan_nomor` int(100) NOT NULL,
  `kegiatan_tanggal` date NOT NULL,
  `kegiatan_id_jenis` int(100) NOT NULL,
  `kegiatan_nip` int(100) NOT NULL,
  `kegiatan_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan_nis` int(100) NOT NULL,
  `kegiatan_status` int(100) NOT NULL,
  `kegiatan_keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Siswa`
--

CREATE TABLE `Siswa` (
  `siswa_nis` int(100) NOT NULL,
  `siswa_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_jkel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_telp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Guru`
--
ALTER TABLE `Guru`
  ADD PRIMARY KEY (`guru_nip`);

--
-- Indexes for table `Jenis`
--
ALTER TABLE `Jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `Kegiatan`
--
ALTER TABLE `Kegiatan`
  ADD PRIMARY KEY (`kegiatan_nomor`);

--
-- Indexes for table `Siswa`
--
ALTER TABLE `Siswa`
  ADD PRIMARY KEY (`siswa_nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Jenis`
--
ALTER TABLE `Jenis`
  MODIFY `jenis_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Kegiatan`
--
ALTER TABLE `Kegiatan`
  MODIFY `kegiatan_nomor` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
