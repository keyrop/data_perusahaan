-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 01:39 PM
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
-- Database: `webecommerce`
--

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
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tunjangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `gaji`, `tunjangan`, `upah`, `created_at`, `updated_at`) VALUES
(2, '25 Juta', '30 Juta', '10 Juta', '2022-11-28 04:48:18', '2022-12-22 22:18:39'),
(3, '20 Juta', '10 Juta', '8 Juta', '2022-12-02 04:07:40', '2022-12-22 22:20:13'),
(4, '20 Juta', '15 Juta', '8 Juta', '2022-12-22 21:08:57', '2022-12-29 19:46:07'),
(5, '25 Juta', '8 Juta', '5 Juta', '2022-12-22 21:55:32', '2022-12-29 04:53:01'),
(6, '18 juta', '8 juta', '4 juta', '2022-12-22 21:56:18', '2022-12-22 21:56:18'),
(7, '15 Juta', '17 Juta', '5 Juta', '2022-12-22 22:24:58', '2022-12-22 22:24:58'),
(9, '16 Juta', '18 juta', '8 Juta', '2022-12-22 22:26:42', '2022-12-22 22:26:42'),
(10, '10 Juta', '11 Juta', '5 Juta', '2022-12-22 22:28:07', '2022-12-22 22:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Hani', 'CEO', '2022-11-28 04:41:16', '2022-12-22 19:57:31'),
(2, 'Farhan', 'Wakil', '2022-12-22 19:57:55', '2022-12-22 19:57:55'),
(3, 'Gita', 'Sekretaris 2', '2022-12-22 19:58:16', '2022-12-29 19:44:20'),
(4, 'Chika', 'Manajer', '2022-12-22 19:58:33', '2022-12-29 04:54:39'),
(5, 'Jefri', 'Bendahara', '2022-12-22 19:59:09', '2022-12-22 19:59:09'),
(6, 'Junior', 'Bendahara 1', '2022-12-22 19:59:27', '2022-12-22 19:59:27'),
(8, 'Fara', 'Manajer Pemasaran', '2022-12-22 20:00:04', '2022-12-22 20:01:59'),
(10, 'Dewi', 'Karyawan', '2022-12-22 20:01:06', '2022-12-22 20:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `perusahaan_id` int(11) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `gaji_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`, `perusahaan_id`, `jabatan_id`, `gaji_id`) VALUES
(1, 'Hani', 'Tanggal Lahir : 24 Februari\r\nAlamat : Bogor', '2022-11-28 04:40:16', '2022-12-22 19:46:44', NULL, NULL, NULL),
(2, 'Farhan', 'Tanggal Lahir : 25 Desember\r\nAlamat : Bogor', '2022-12-22 19:34:40', '2022-12-22 19:47:32', NULL, NULL, NULL),
(3, 'Gita', 'Tanggal Lahir : 16 Februari\r\nAlamat : Bandung', '2022-12-22 19:35:04', '2022-12-29 19:43:13', NULL, NULL, NULL),
(5, 'Berlyan', 'Tanggal Lahir : 14 April\r\nAlamat : Banyumas', '2022-12-22 19:35:59', '2022-12-29 04:51:31', NULL, NULL, NULL),
(7, 'Feri', 'Tanggal Lahir : 06 Mei\r\nAlamat : Yogyakarta', '2022-12-22 19:37:15', '2022-12-22 19:51:01', NULL, NULL, NULL),
(8, 'Fara', 'Tanggal Lahir : 05 September\r\nAlamat : Bali', '2022-12-22 19:37:47', '2022-12-22 19:52:16', NULL, NULL, NULL),
(10, 'Bela', 'Tanggal Lahir : 03 Novermber\r\nAlamat : Surakarta', '2022-12-22 19:39:04', '2022-12-22 19:55:39', NULL, NULL, NULL),
(11, 'Dewi', 'Tanggal Lahir : 30 Juni\r\nAlamat : Surabaya', '2022-12-22 19:39:56', '2022-12-22 19:56:22', NULL, NULL, NULL);

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2022_11_24_121830_buat_tabel_perusahaan--creat=perusahaan', 1),
(15, '2022_11_24_134050_buat_table_gaji--creat=gaji', 1),
(16, '2022_11_24_134347_buat_table_karyawan--creat=karyawan', 2),
(17, '2022_11_24_134709_buat_table_jabatan--creat=jabatan', 3),
(18, '2022_11_25_125000_tambah_kolom_kosong--creat=kolom', 3);

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
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'PT. Sinarmas', 'Technologi', '2022-12-22 21:11:53', '2022-12-22 22:36:35'),
(2, 'PT.Sinemart', 'Furnitur', '2022-12-22 21:20:25', '2022-12-22 21:20:25'),
(5, 'PT.Citra', 'Mabel', '2022-12-22 22:38:15', '2022-12-29 19:41:15');

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
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hani12', 'hani@gmail.com', NULL, 'hani12', 'Admin', NULL, NULL, '2022-12-29 19:39:50'),
(4, 'chika', 'chikadp@gmail.com', NULL, 'chikadp', 'member', NULL, '2022-12-22 19:32:55', '2022-12-29 19:11:07'),
(5, 'salma', 'salmaft@gmail.com', NULL, 'salma23', 'admin', NULL, '2022-12-22 19:33:30', '2022-12-22 19:33:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
