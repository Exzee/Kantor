-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 07:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meek_hp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_07_04_153422_create_pegawai_table', 1),
(13, '2021_07_04_172926_add_nik_table', 2),
(15, '2021_07_07_144334_add_jenis_kelamin_table', 3),
(16, '2021_07_10_135554_create_sample_masuk_table', 3),
(17, '2021_07_10_155201_add_foto_sample_table', 4),
(18, '2021_07_11_114529_create_sample_keluar_table', 5),
(19, '2021_07_11_123727_add_foto_sample_keluar_table', 6),
(20, '2021_07_24_070128_create_coba_table', 7),
(21, '2021_07_24_070445_add_tahun_lahir_table', 8),
(22, '2021_07_25_154620_add_alamat_table', 9);

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_pernikahan` enum('Menikah','Belum Menikah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_anak` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `alamat`, `jenis_kelamin`, `email`, `tanggal_lahir`, `status_pernikahan`, `jumlah_anak`, `agama`, `tahun_masuk`, `jabatan`, `foto_pegawai`, `created_at`, `updated_at`) VALUES
(1, 6933, 'Fifit Ruwanto', 'Kangkung Kendal', 'Laki-Laki', 'fifitruwanto@gmail.com', '1988-04-14', 'Menikah', '3', 'Islam', '2010', 'Operator', '1627200754box.jpg', '2021-07-04 17:14:48', '2021-07-25 09:02:22'),
(2, 7256, 'Nur Hidayat', 'Kendal 1', 'Laki-Laki', 'nur_hidayat88@gmail.com', '1989-08-20', 'Menikah', '1', 'Islam', '2012', 'Operator', NULL, '2021-07-04 17:14:48', '2021-07-04 17:14:48'),
(3, 9990, 'Ahmad Marzuki', 'Kaliwungu', 'Laki-Laki', 'ahmad@gmail.com', '2020-08-04', 'Belum Menikah', '0', 'Islam', '2021', 'Operator', '1625943198profile.png', '2021-07-08 09:59:12', '2021-07-10 11:53:18'),
(4, 6585876, 'Milo', 'Semarang', 'Perempuan', 'milogg@hl.vo', '2021-07-06', 'Belum Menikah', '0', 'I', '2020', 'Operator', '1625904752karina.jpeg', '2021-07-09 09:11:44', '2021-07-10 01:12:32'),
(10, 9999, 'Akua Galon', 'Bandung', 'Laki-Laki', 'akuagalon@galon.id', '1990-07-06', 'Belum Menikah', '0', 'Islam', '2019', 'Staf', '1626763648download.jpg', '2021-07-19 23:47:28', '2021-07-19 23:47:28'),
(11, 1000, 'Muhammad Rizqi', 'Kaliwungu', 'Laki-Laki', 'official.rizqi@outlook.com', '2002-12-12', 'Belum Menikah', '0', 'Islam', '2021', 'Staff Administrasi', '1626870622download.jpg', '2021-07-21 05:30:22', '2021-07-21 05:30:22'),
(12, 8888, 'Khaerudin', 'Kendal', 'Laki-Laki', 'khaeru@din.com', '1990-12-29', 'Belum Menikah', '0', 'Islam', '2009', 'GM', '1627199457kucing.jpg', '2021-07-25 07:50:05', '2021-07-25 07:50:57'),
(13, 8090, 'Agus K', 'Semarang', 'Laki-Laki', 'agus@op.lo', '1990-07-07', 'Menikah', '1', 'Islam', '2012', 'Operator', '16272023001928732.jpg', '2021-07-25 08:37:40', '2021-07-25 08:38:20'),
(14, 1200, 'Coba Coba', 'Kendal', 'Perempuan', 'coba@kendal.co', '2021-06-08', 'Belum Menikah', '0', 'Islam', '2021', 'Operator', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sample_keluar`
--

CREATE TABLE `sample_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sample_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segment` enum('Domestic','Export') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kirim_sample` date DEFAULT NULL,
  `pengirim_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_sample` enum('Market','Complaint') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_benang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lot_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rincian_sample_keluar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_sample_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sample_keluar`
--

INSERT INTO `sample_keluar` (`id`, `id_sample_keluar`, `segment`, `tanggal_kirim_sample`, `pengirim_sample`, `tujuan_sample`, `jenis_sample`, `tipe_benang`, `lot_number`, `rincian_sample_keluar`, `foto_sample_keluar`, `created_at`, `updated_at`) VALUES
(1, 'DK-001', 'Domestic', '2021-07-07', 'Agus', 'Office Bandung', 'Market', 'DTY 75/36 SDC DH', '4R1457', '1 pcs kain setelah syeing di apf', NULL, NULL, NULL),
(2, 'DK-002', 'Domestic', '2021-07-08', 'Agus', 'Office Jakarta', 'Complaint', 'DTY 300/96 DDC DH', '4R1290', 'claim settlement approval untuk tanda tangan marketing jakarta', NULL, NULL, NULL),
(3, 'DK-003', 'Domestic', '2021-07-08', 'Dayat', 'Office Bandung', 'Complaint', 'DTY 75/72 SDC DH', '4S1728', 'Sample kain complaint setelah di dyeing di APF Kaliwungu', NULL, '2021-07-13 02:57:42', '2021-07-13 03:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `sample_masuk`
--

CREATE TABLE `sample_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `segment` enum('Domestic','Export') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_terima_sample` date DEFAULT NULL,
  `pengirim_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_sample` enum('Market','Complaint') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_benang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lot_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rincian_sample_masuk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sample_masuk`
--

INSERT INTO `sample_masuk` (`id`, `segment`, `id_sample`, `tanggal_terima_sample`, `pengirim_sample`, `jenis_sample`, `tipe_benang`, `lot_number`, `problem_sample`, `rincian_sample_masuk`, `foto_sample`, `created_at`, `updated_at`) VALUES
(1, 'Domestic', 'Dom-001', '2021-07-01', 'Office Bandung', 'Market', 'As per sample', '-', 'Analysa', '1 pcs hank sample', '1627177813box.jpg', NULL, '2021-07-25 01:50:13'),
(2, 'Domestic', 'DOM-002', '2021-07-02', 'Office Bandung', 'Complaint', 'DTY 75/36 SDC DH', '4R1452', 'Kain belang', '1 pcs kain weaving warna coklat muda', NULL, '2021-07-10 10:33:08', '2021-07-10 10:46:57'),
(4, 'Export', 'EXP-001', '2021-07-05', 'Office JKT', 'Market', 'As Per Sample', '-', 'Analysa', 'Sample benang 3 bobbin', '1625943836ascii-table-overcoded-scaled.jpg', '2021-07-10 12:03:56', '2021-07-13 02:31:14'),
(5, 'Export', 'EXP-003', '2021-07-14', 'Rizqi', 'Market', 'Sample Customer', '-', '-', 'Sample kirim Office Bandung', NULL, '2021-07-24 21:50:09', '2021-07-24 21:50:09');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizqi', 'admin@kantor.test', NULL, '$2y$10$Xek9sWLv9CV3upLCC0E1Ue2yT/eLywZ1dTQlUMQ4BuFwj6orQ.uGy', NULL, '2021-07-19 22:04:01', '2021-07-19 22:04:01'),
(4, 'CS1 Rizqi', 'cs1@kantor.test', NULL, '$2y$10$sbsLbn53d7Rla1VqE8YxUOSgtx2AopY2R5LEP5fOQlsJq0MHziHZe', NULL, '2021-07-25 07:22:52', '2021-07-25 07:22:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nik_unique` (`nik`),
  ADD UNIQUE KEY `pegawai_email_unique` (`email`);

--
-- Indexes for table `sample_keluar`
--
ALTER TABLE `sample_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sample_keluar_id_sample_keluar_unique` (`id_sample_keluar`);

--
-- Indexes for table `sample_masuk`
--
ALTER TABLE `sample_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sample_masuk_id_sample_unique` (`id_sample`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sample_keluar`
--
ALTER TABLE `sample_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sample_masuk`
--
ALTER TABLE `sample_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
