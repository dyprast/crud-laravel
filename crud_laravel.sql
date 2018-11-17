-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2018 at 09:59 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `kajur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama`, `jumlah_siswa`, `kajur`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Perangkat Lunak', 6, 'Muhammad Nurrohman', '2018-11-16 07:52:33', '2018-11-16 07:52:33'),
(2, 'Akuntansi Dan Lembaga Keuangan', 2, 'Tidak Tahu', '2018-11-16 07:52:39', '2018-11-16 07:52:39'),
(3, 'Otomatisasi Tata Kelola Perkantoran', 2, 'Tidak Tahu', '2018-11-16 07:52:46', '2018-11-16 07:52:46'),
(4, 'Bisnis Daring Pemasaran', 1, 'Tidak Tahu', '2018-11-16 07:52:51', '2018-11-16 07:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `jurusan_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'X', '2018-11-16 07:53:15', '2018-11-16 07:53:15'),
(2, 1, 'XI', '2018-11-16 07:53:24', '2018-11-16 07:53:24'),
(3, 1, 'XII', '2018-11-16 07:53:28', '2018-11-16 07:53:28'),
(4, 2, 'X', '2018-11-16 07:53:32', '2018-11-16 07:53:32'),
(5, 2, 'XI', '2018-11-16 07:53:38', '2018-11-16 07:53:38'),
(6, 2, 'XII', '2018-11-16 07:53:48', '2018-11-16 07:53:48'),
(7, 3, 'X', '2018-11-16 07:55:16', '2018-11-16 07:55:16'),
(8, 3, 'XI', '2018-11-16 07:55:20', '2018-11-16 07:55:20'),
(9, 3, 'XII', '2018-11-16 07:55:26', '2018-11-16 07:55:26'),
(10, 4, 'X', '2018-11-16 07:55:29', '2018-11-16 07:55:29'),
(11, 4, 'XI', '2018-11-16 07:55:34', '2018-11-16 07:55:34'),
(12, 4, 'XII', '2018-11-16 07:55:38', '2018-11-16 07:55:38');

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
(3, '2018_11_16_063725_siswa', 1),
(4, '2018_11_16_063742_jurusan', 1),
(5, '2018_11_16_063800_kelas', 1);

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
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `kelas_id`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(3, 'Romadhan Edy Prasetyo', 2, 1, '2018-11-16 19:55:41', '2018-11-16 19:55:41'),
(4, 'Prasetyo', 2, 1, '2018-11-16 19:55:53', '2018-11-16 19:55:53'),
(5, 'Peter', 1, 1, '2018-11-16 19:56:32', '2018-11-16 19:56:32'),
(6, 'Parker', 1, 1, '2018-11-16 19:56:37', '2018-11-16 19:56:37'),
(7, 'Cekakakaka', 3, 1, '2018-11-16 19:57:05', '2018-11-16 19:57:05'),
(8, 'Rendy', 4, 3, '2018-11-16 19:57:17', '2018-11-16 19:57:17'),
(9, 'Naufal', 5, 4, '2018-11-16 19:57:24', '2018-11-16 19:57:24'),
(10, 'Chikka', 3, 2, '2018-11-16 19:57:35', '2018-11-16 19:57:35'),
(11, 'Bafaqih', 2, 1, '2018-11-16 19:57:43', '2018-11-16 19:57:43'),
(12, 'Agun', 5, 2, '2018-11-16 19:57:50', '2018-11-16 19:57:50'),
(13, 'Fahrule', 5, 3, '2018-11-16 19:58:02', '2018-11-16 19:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Romadhan', 'romadhanedy@outlook.com', NULL, '$2y$10$xEoBs0y8iWmp.srIBpF.5uHCjRr9t7HOi7qhRcRD5Qt..oWwpwNc6', 'iwaqE3ip93efis7gSarLA81my4CgziKyOzs1oinUcCI1nBKlBXmNpHeGuGih', '2018-11-16 07:52:21', '2018-11-16 07:52:21'),
(2, 'Parker', 'parkereddie37@gmail.com', NULL, '$2y$10$0IAo8apuzX2DWMFBwl.ejeJ3BGoC3qdRRb6KmyR3N/UQfW/ZOZtte', 'lGKZH7hLVoynFXg9UWiQksvLMAIMhxemYYtG9gWgmKPZjfXrj6P30KLAFZV3', '2018-11-16 19:46:37', '2018-11-16 19:46:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
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
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
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
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
