-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_10_104959_create_post_table', 1),
(5, '2025_01_10_105026_create_friend_table', 1),
(6, '2025_01_10_105100_create_notification_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dignissimos excepturi qui sit nam rerum.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(2, 1, 'Amet fugiat nisi quos ut.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(3, 1, 'Fugiat illum quas pariatur ullam illum enim.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(4, 1, 'Impedit accusamus voluptas voluptas.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(5, 1, 'Ut sed dicta in aliquid beatae ab.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(6, 2, 'Omnis et totam nulla voluptatem rerum.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(7, 2, 'Dolorum quo quidem magnam.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(8, 2, 'Voluptatem dolores nihil eaque.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(9, 2, 'Eveniet sit nihil odio vitae beatae.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(10, 2, 'Id reiciendis illum alias est magnam et.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(11, 3, 'Molestiae dolorem excepturi aut.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(12, 3, 'Mollitia at debitis rerum.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(13, 3, 'Eius facere est qui quasi est.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(14, 3, 'Architecto vel et qui sint neque occaecati.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(15, 3, 'Dolore nemo aut illo ipsum quia.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(16, 4, 'Suscipit ipsam consequatur nemo maxime.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(17, 4, 'Voluptatibus fugiat laboriosam id rerum et.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(18, 4, 'Et qui ut officiis tempore ea aliquid.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(19, 4, 'Unde corrupti debitis aut.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(20, 4, 'Tempora laborum dolorem ea unde harum autem.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(21, 5, 'Accusantium magni consequatur ipsam a suscipit.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(22, 5, 'At est aut et iste culpa rem vel quidem.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(23, 5, 'Molestiae culpa maxime corrupti dolores.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(24, 5, 'Voluptas eligendi et dolorem.', '2025-01-10 09:38:07', '2025-01-10 09:38:07'),
(25, 5, 'Odit amet sit quod.', '2025-01-10 09:38:07', '2025-01-10 09:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `topic` varchar(255) NOT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `content`, `topic`, `like`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aut incidunt autem maxime. Ea qui excepturi assumenda tempore id ut nihil molestias.', 'Fullstack Developer', 0, '2025-01-10 09:38:00', '2025-01-10 09:38:00'),
(2, 2, 'Et ad corporis ullam optio. Ea illum nostrum nihil sapiente ipsum quia consequatur.', 'Video Editor', 0, '2025-01-10 09:38:00', '2025-01-10 09:38:00'),
(3, 3, 'Non natus dolores magnam sed impedit et atque. Id ut doloremque aliquam tempore ullam nihil.', 'Business Consultant', 0, '2025-01-10 09:38:00', '2025-01-10 09:38:00'),
(4, 4, 'Nemo a nemo numquam aut sunt. Sunt porro et nesciunt in est. Doloremque vel ab in ea.', 'Makeup Artist', 0, '2025-01-10 09:38:00', '2025-01-10 09:38:00'),
(5, 5, 'Tenetur quod quia et sint enim. Voluptate praesentium nam maiores ut.', 'Mathematician', 0, '2025-01-10 09:38:00', '2025-01-10 09:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dDnrK2BL5dJCIp9FOR3Dd3Utd9eZdk3Nr9PqFD63', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSE5kM2Y4VkRaQzJ3Y3NRU0drejFGTU1xUUJtN3RHbnVOSFV5SzlFaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Njt9', 1736527405);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'Male',
  `phone` varchar(255) DEFAULT NULL,
  `job` varchar(255) NOT NULL DEFAULT 'Office Worker',
  `linkedin_username` varchar(255) DEFAULT NULL,
  `coin` int(11) NOT NULL DEFAULT 100,
  `img_path` varchar(255) NOT NULL DEFAULT 'user.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `job`, `linkedin_username`, `coin`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Eko Perkasa Salahudin', 'karen.damanik@melani.info', 'PFkG\"L$U`', 'Male', '0412 0352 816', 'Fullstack Developer', 'https://www.linkedin.com/in/kayun.hasanah', 100, 'person_1.jpg', '2025-01-10 09:37:53', '2025-01-10 09:37:53'),
(2, 'Kenari Mansur S.Gz', 'natsir.lukman@mansur.biz.id', '6>uuH.b|XO\"v*8@E', 'Female', '(+62) 444 1067 0401', 'Video Editor', 'https://www.linkedin.com/in/caket89', 100, 'person_2.jpg', '2025-01-10 09:37:53', '2025-01-10 09:37:53'),
(3, 'Tira Andriani', 'wwastuti@usamah.info', 'ShM/6]=:', 'Male', '(+62) 331 7944 149', 'Business Consultant', 'https://www.linkedin.com/in/situmorang.raihan', 100, 'person_3.jpg', '2025-01-10 09:37:53', '2025-01-10 09:37:53'),
(4, 'Halima Cornelia Suartini', 'usamah.mustofa@mandasari.name', 'JnPm-pT$~.\"\'ZOmtX*E', 'Female', '0593 1467 4966', 'Makeup Artist', 'https://www.linkedin.com/in/vivi.nainggolan', 100, 'person_4.jpg', '2025-01-10 09:37:53', '2025-01-10 09:37:53'),
(5, 'Cindy Rina Wulandari', 'puspa25@pertiwi.org', 'R?L\'nbemS', 'Male', '0614 4860 410', 'Mathematician', 'https://www.linkedin.com/in/winarsih.gatra', 100, 'person_5.jpg', '2025-01-10 09:37:53', '2025-01-10 09:37:53'),
(6, 'Vinsensius Odillo', 'user1@gmail.com', '$2y$12$IHrOCyC5LmFKfGJ9Kcxd5.f8L2UApHUG9ikq1kSlBzbOD845o8L1i', 'Male', NULL, 'Office Worker', NULL, 100, 'user.png', '2025-01-10 09:38:38', '2025-01-10 09:38:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friend_user_id_foreign` (`user_id`),
  ADD KEY `friend_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friend_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
