-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 07:42 AM
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
-- Table structure for table `antrean_domisili`
--

CREATE TABLE `antrean_domisili` (
  `id_dom` int(5) NOT NULL,
  `sp_kel_dom` varchar(100) NOT NULL,
  `ktp_dom` varchar(100) NOT NULL,
  `lain_dom` varchar(100) DEFAULT NULL,
  `tgl_antre_dom` date NOT NULL,
  `id_kel` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user_dom` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrean_domisili`
--

INSERT INTO `antrean_domisili` (`id_dom`, `sp_kel_dom`, `ktp_dom`, `lain_dom`, `tgl_antre_dom`, `id_kel`, `status`, `id_user_dom`) VALUES
(1, 'sdfghjkl.pdf', 'dfghjk.pdf', 'sdfghj.pdf', '2023-02-01', 201, 0, 0);

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
  `id_kel` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrean_kredit`
--

INSERT INTO `antrean_kredit` (`id_kredit`, `sp_kel_kredit`, `kk_kredit`, `ktp_kredit`, `lain_kredit`, `tgl_antre_kredit`, `id_kel`, `status`) VALUES
(1, 'spkel.pdf', 'kkkret.pdf', 'klp.pdf', 'lain.pdf', '2023-01-02', 201, 0);

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
  `id_kel` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `noreg_dom` int(5) NOT NULL,
  `tgl_dom` date NOT NULL,
  `id_dom` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(5) NOT NULL,
  `nama_kec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Sidorejo'),
(2, 'Tingkir'),
(3, 'Argomulyo'),
(4, 'Sidomukti');

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

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `nama_kel`, `alamat_kel`, `notelp_kel`, `id_kec`) VALUES
(201, 'Kutowinangun Lor', 'Jl. Mawarsari Jl. Butuh, RT.11/RW.01', '(0298)321015', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `noreg_kredit` int(5) NOT NULL,
  `tgl_kredit` date NOT NULL,
  `id_kredit` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `tgl_lahir`, `nama_ibu`, `alamat`, `no_telp`) VALUES
('3373135806010004', 'Muhammad Sukili', '1992-09-28', 'Siti Sukinah', 'Jalan Jauh Nomor 69 RT 001 RW 009', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `noreg_sktm` int(5) NOT NULL,
  `tgl_sktm` date NOT NULL,
  `id_sktm` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `proses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `proses`) VALUES
(0, 'Proses'),
(1, 'Diterima'),
(2, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ibu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean_domisili`
--
ALTER TABLE `antrean_domisili`
  ADD PRIMARY KEY (`id_dom`),
  ADD KEY `fk_kel_antre_dom` (`id_kel`),
  ADD KEY `fk_status_dom` (`status`);

--
-- Indexes for table `antrean_kredit`
--
ALTER TABLE `antrean_kredit`
  ADD PRIMARY KEY (`id_kredit`),
  ADD KEY `fk_kel_antre_kredit` (`id_kel`),
  ADD KEY `fk_status_kredit` (`status`);

--
-- Indexes for table `antrean_sktm`
--
ALTER TABLE `antrean_sktm`
  ADD PRIMARY KEY (`id_sktm`),
  ADD KEY `fk_kel_antre_sktm` (`id_kel`),
  ADD KEY `fk_status_sktm` (`status`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`noreg_dom`),
  ADD KEY `fk_id_status_dom` (`id_dom`),
  ADD KEY `fk_id_kel_dom` (`id_kel`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD KEY `fk_id_status_kredit` (`id_kredit`),
  ADD KEY `fk_id_kel_kredit` (`id_kel`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`noreg_sktm`),
  ADD KEY `fk_id_status_sktm` (`id_sktm`),
  ADD KEY `fk_id_kel_sktm` (`id_kel`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrean_domisili`
--
ALTER TABLE `antrean_domisili`
  ADD CONSTRAINT `fk_kel_antre_dom` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_status_dom` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `antrean_kredit`
--
ALTER TABLE `antrean_kredit`
  ADD CONSTRAINT `fk_kel_antre_kredit` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_status_kredit` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `antrean_sktm`
--
ALTER TABLE `antrean_sktm`
  ADD CONSTRAINT `fk_kel_antre_sktm` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_status_sktm` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `domisili`
--
ALTER TABLE `domisili`
  ADD CONSTRAINT `fk_id_kel_dom` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_id_status_dom` FOREIGN KEY (`id_dom`) REFERENCES `antrean_domisili` (`id_dom`);

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
  ADD CONSTRAINT `fk_id_status_kredit` FOREIGN KEY (`id_kredit`) REFERENCES `antrean_kredit` (`id_kredit`);

--
-- Constraints for table `sktm`
--
ALTER TABLE `sktm`
  ADD CONSTRAINT `fk_id_kel_sktm` FOREIGN KEY (`id_kel`) REFERENCES `kelurahan` (`id_kel`),
  ADD CONSTRAINT `fk_id_status_sktm` FOREIGN KEY (`id_sktm`) REFERENCES `antrean_sktm` (`id_sktm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
