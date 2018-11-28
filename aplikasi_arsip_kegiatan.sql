-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2018 at 01:45 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$wuaHrQc0u7PBNE2DuLL5MeuPJeLFM49OsIwZjNyE5T7tz40OjAgfK');

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE `Document` (
  `dokument_id` int(100) NOT NULL,
  `dokument_tgl` date NOT NULL,
  `dokument_no_perkara` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokument_no_gugatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokument_odner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokument_id_jenis` int(100) NOT NULL,
  `dokument_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokument_ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Document`
--

INSERT INTO `Document` (`dokument_id`, `dokument_tgl`, `dokument_no_perkara`, `dokument_no_gugatan`, `dokument_odner`, `dokument_id_jenis`, `dokument_status`, `dokument_ket`) VALUES
(5, '2018-11-13', '654', '65465', '6546', 1, '1', 'hvgh');

-- --------------------------------------------------------

--
-- Table structure for table `Dokument_jenis`
--

CREATE TABLE `Dokument_jenis` (
  `dokument_jenis_id` int(100) NOT NULL,
  `dokument_jenis_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Dokument_jenis`
--

INSERT INTO `Dokument_jenis` (`dokument_jenis_id`, `dokument_jenis_nama`) VALUES
(1, 'Dokument A'),
(2, 'Dokument B'),
(3, 'Dokument C'),
(4, 'Dokument D');

-- --------------------------------------------------------

--
-- Table structure for table `Guru`
--

CREATE TABLE `Guru` (
  `guru_nip` int(50) NOT NULL,
  `guru_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_jekel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_golongan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Guru`
--

INSERT INTO `Guru` (`guru_nip`, `guru_nama`, `guru_pekerjaan`, `guru_jekel`, `guru_alamat`, `guru_telp`, `guru_jabatan`, `guru_golongan`, `guru_password`) VALUES
(14041037, 'aldi', 'IT', 'Laki-Laki', 'jalan mahligai', '0856', 'Staff', 'B', '$2y$10$bDCRWPa9yaGPtVaAZq0WmesvkSE5IJzCsUX6JqerhWCX.VHedEPjO');

-- --------------------------------------------------------

--
-- Table structure for table `Jenis`
--

CREATE TABLE `Jenis` (
  `jenis_id` int(100) NOT NULL,
  `jenis_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Jenis`
--

INSERT INTO `Jenis` (`jenis_id`, `jenis_nama`, `jenis_keterangan`) VALUES
(1, 'Kegiatan A', ''),
(2, 'Kegiatan B', ''),
(3, 'Kegiatan C', ''),
(4, 'Kegiatan D', 'ok');

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

--
-- Dumping data for table `Kegiatan`
--

INSERT INTO `Kegiatan` (`kegiatan_nomor`, `kegiatan_tanggal`, `kegiatan_id_jenis`, `kegiatan_nip`, `kegiatan_nama`, `kegiatan_alamat`, `kegiatan_nis`, `kegiatan_status`, `kegiatan_keterangan`) VALUES
(1, '2018-07-23', 1, 0, 'menyampu', 'jalan alamat oke', 14041037, 1, 'siswa menyapu'),
(2, '2018-08-23', 2, 14041037, 'validasi guru', 'jalan guru', 0, 0, 'memvalidasi guru');

-- --------------------------------------------------------

--
-- Table structure for table `Siswa`
--

CREATE TABLE `Siswa` (
  `siswa_nis` int(100) NOT NULL,
  `siswa_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_jekel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_telp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Siswa`
--

INSERT INTO `Siswa` (`siswa_nis`, `siswa_nama`, `siswa_jekel`, `siswa_alamat`, `siswa_telp`, `siswa_kelas`, `siswa_password`) VALUES
(14041037, 'aldi siswa', 'Laki-Laki', 'jalan mahligai', '08', '7', '$2y$10$PxYl.qDu.VXDcrgYR3gYiewlNBRSGE/45F4YMHg61dtY40DhPD/H2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Document`
--
ALTER TABLE `Document`
  ADD PRIMARY KEY (`dokument_id`);

--
-- Indexes for table `Dokument_jenis`
--
ALTER TABLE `Dokument_jenis`
  ADD PRIMARY KEY (`dokument_jenis_id`);

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
  ADD PRIMARY KEY (`kegiatan_nomor`),
  ADD KEY `kegiatan_id_jenis` (`kegiatan_id_jenis`);

--
-- Indexes for table `Siswa`
--
ALTER TABLE `Siswa`
  ADD PRIMARY KEY (`siswa_nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Document`
--
ALTER TABLE `Document`
  MODIFY `dokument_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Dokument_jenis`
--
ALTER TABLE `Dokument_jenis`
  MODIFY `dokument_jenis_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Jenis`
--
ALTER TABLE `Jenis`
  MODIFY `jenis_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Kegiatan`
--
ALTER TABLE `Kegiatan`
  MODIFY `kegiatan_nomor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Kegiatan`
--
ALTER TABLE `Kegiatan`
  ADD CONSTRAINT `Kegiatan_ibfk_1` FOREIGN KEY (`kegiatan_id_jenis`) REFERENCES `Jenis` (`jenis_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
