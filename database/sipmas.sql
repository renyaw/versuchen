-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 11:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nik` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `antrean_domisili`
--

CREATE TABLE `antrean_domisili` (
  `id_dom` int(5) NOT NULL,
  `sp_kel_dom` varchar(100) NOT NULL,
  `ktp_dom` varchar(100) NOT NULL,
  `lain_dom` varchar(100) DEFAULT NULL,
  `tgl_antre_dom` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `antrean_kredit`
--

CREATE TABLE `antrean_kredit` (
  `id_kredit` int(5) NOT NULL,
  `sp_kel_kredit` varchar(100) NOT NULL,
  `kk_kredit` varchar(100) NOT NULL,
  `ktp_kredit` varchar(100) NOT NULL,
  `lain_kredit` varchar(100) DEFAULT NULL,
  `tgl_antre_kredit` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `antrean_sktm`
--

CREATE TABLE `antrean_sktm` (
  `id_sktm` int(5) NOT NULL,
  `sp_kel_sktm` varchar(100) NOT NULL,
  `ktp_sktm` varchar(100) NOT NULL,
  `sp_tdkmampu` varchar(100) NOT NULL,
  `kk_sktm` varchar(100) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `lain_sktm` varchar(100) DEFAULT NULL,
  `tgl_antre_sktm` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `noreg_dom` int(5) NOT NULL,
  `tgl_dom` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(5) NOT NULL,
  `nama_kec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kel` int(5) NOT NULL,
  `nama_kel` varchar(20) NOT NULL,
  `alamat_kel` varchar(200) NOT NULL,
  `notelp_kel` varchar(13) NOT NULL,
  `id_kec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `noreg_kredit` int(5) NOT NULL,
  `tgl_kredit` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `noreg_sktm` int(5) NOT NULL,
  `tgl_sktm` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `proses` varchar(10) NOT NULL,
  `id_sktm` int(11) NOT NULL,
  `id_domisili` int(11) NOT NULL,
  `id_kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `antrean_domisili`
--
ALTER TABLE `antrean_domisili`
  ADD PRIMARY KEY (`id_dom`),
  ADD KEY `fk_username_dom` (`username`),
  ADD KEY `fk_kel_antre_dom` (`id_kel`);

--
-- Indexes for table `antrean_kredit`
--
ALTER TABLE `antrean_kredit`
  ADD PRIMARY KEY (`id_kredit`),
  ADD KEY `fk_username_kredit` (`username`),
  ADD KEY `fk_kel_antre_kredit` (`id_kel`);

--
-- Indexes for table `antrean_sktm`
--
ALTER TABLE `antrean_sktm`
  ADD PRIMARY KEY (`id_sktm`),
  ADD KEY `fk_username_sktm` (`username`),
  ADD KEY `fk_kel_antre_sktm` (`id_kel`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`noreg_dom`),
  ADD KEY `fk_id_status_dom` (`id_status`),
  ADD KEY `fk_id_kel_dom` (`id_kel`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`),
  ADD KEY `fk_id_kec` (`id_kec`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`noreg_kredit`),
  ADD KEY `fk_id_status_kredit` (`id_status`),
  ADD KEY `fk_id_kel_kredit` (`id_kel`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`noreg_sktm`),
  ADD KEY `fk_id_status_sktm` (`id_status`),
  ADD KEY `fk_id_kel_sktm` (`id_kel`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `fk_id_domisili` (`id_domisili`),
  ADD KEY `fk_id_sktm` (`id_sktm`),
  ADD KEY `fk_id_kredit` (`id_kredit`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `antrean_domisili`
--
ALTER TABLE `antrean_domisili`
  ADD CONSTRAINT `fk_kel_antre_dom` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_username_dom` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `antrean_kredit`
--
ALTER TABLE `antrean_kredit`
  ADD CONSTRAINT `fk_kel_antre_kredit` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_username_kredit` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `antrean_sktm`
--
ALTER TABLE `antrean_sktm`
  ADD CONSTRAINT `fk_kel_antre_sktm` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_username_sktm` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `domisili`
--
ALTER TABLE `domisili`
  ADD CONSTRAINT `fk_id_kel_dom` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_id_status_dom` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_id_kec` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`);

--
-- Constraints for table `kredit`
--
ALTER TABLE `kredit`
  ADD CONSTRAINT `fk_id_kel_kredit` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_id_status_kredit` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `sktm`
--
ALTER TABLE `sktm`
  ADD CONSTRAINT `fk_id_kel_sktm` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_id_status_sktm` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_id_domisili` FOREIGN KEY (`id_domisili`) REFERENCES `antrean_domisili` (`id_dom`),
  ADD CONSTRAINT `fk_id_kredit` FOREIGN KEY (`id_kredit`) REFERENCES `antrean_kredit` (`id_kredit`),
  ADD CONSTRAINT `fk_id_sktm` FOREIGN KEY (`id_sktm`) REFERENCES `antrean_sktm` (`id_sktm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
