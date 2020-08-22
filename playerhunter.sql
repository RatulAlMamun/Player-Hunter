-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playerhunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `cricketplayercarrers`
--

CREATE TABLE `cricketplayercarrers` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_tournament` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play_off` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearances` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `runs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wickets` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catch_misses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cricketplayercarrers`
--

INSERT INTO `cricketplayercarrers` (`id`, `player_id`, `date_of_tournament`, `club`, `play_off`, `appearances`, `runs`, `wickets`, `catch_misses`, `rating`, `created_at`, `updated_at`) VALUES
(1, '4', '2019/2020', 'Dhaka Platoon', 'T20', '20', '455', '0', '12', '95', '2020-01-13 23:23:13', '2020-01-13 23:23:13'),
(2, '4', '2019/2020', 'Dhaka Platoon', 'T20', '20', '455', '0', '12', '95', '2020-01-13 23:24:11', '2020-01-13 23:24:11'),
(3, '4', '2020/2021', 'Dhaka Platoon', 'T20', '20', '12', '12', '12', '80', '2020-01-13 23:24:35', '2020-01-13 23:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `footballplayercarrers`
--

CREATE TABLE `footballplayercarrers` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_tournament` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearances` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wins` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `losses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yellow` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `red` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footballplayercarrers`
--

INSERT INTO `footballplayercarrers` (`id`, `player_id`, `date_of_tournament`, `club`, `appearances`, `goals`, `wins`, `losses`, `yellow`, `red`, `rating`, `created_at`, `updated_at`) VALUES
(1, '2', '2019/2020', 'Barcelona', '12', '12', '12', '12', '12', '12', '80', '2020-01-13 22:56:09', '2020-01-13 22:56:09'),
(2, '2', '2020/2021', 'Barcelona', '12', '12', '12', '12', '12', '12', '90', '2020-01-13 22:56:35', '2020-01-13 22:56:35'),
(3, '5', '2019/2020', 'Real Madrid', '12', '12', '12', '12', '12', '12', '90', '2020-01-13 23:53:23', '2020-01-13 23:53:23'),
(4, '5', '2020/2021', 'Real Madrid', '12', '12', '12', '12', '12', '12', '80', '2020-01-13 23:53:57', '2020-01-13 23:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2020_01_12_181930_create_players_table', 1),
(9, '2020_01_13_094836_create_footballplayercarrers_table', 1),
(10, '2020_01_13_095124_create_cricketplayercarrers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avg_rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `email`, `date_of_birth`, `height`, `weight`, `nationality`, `club`, `position`, `game_type`, `password`, `phone_no`, `address`, `avg_rating`, `player_image`, `created_at`, `updated_at`) VALUES
(1, 'Cristiano Ronaldo', 'cr7@gmail.com', '2020-01-08', '12', '12', 'Portugal', 'Juventus', 'Forward', 'Football', '$2y$10$0GYo4jpuIgDSLw8XOEIBvO/p/r6uI121RLA8Hw5Myay8V5YklLJxK', '01965088417', 'Uttara, Dhaka', '0', '1674580623.jpg', '2020-01-13 22:54:21', '2020-01-13 22:54:21'),
(2, 'Lionel Messi', 'lm10@gmail.com', '2020-01-02', '12', '12', 'Argentina', 'Barcelona', 'Forward', 'Football', '$2y$10$shDaHCvLWa67Iv1dpyjLYexQ7AC6uHtHP4fvDFglhXt/J91AGqg/.', '01965088417', 'Uttara, Dhaka', '85', '628538500.jpg', '2020-01-13 22:55:25', '2020-01-13 22:56:35'),
(3, 'Shakib Al Hasan', 'sh75@gmail.com', '2020-01-08', '12', '12', 'Bangladesh', 'Dhaka Platoon', 'All-rounder', 'Cricket', '$2y$10$w./icedZ1DppRze41aJ9uetK.ioJcOK9hpthUtXqEhez6dkJXKWv.', '01965088417', 'Uttara, Dhaka', '0', '108654334.jpg', '2020-01-13 23:18:35', '2020-01-13 23:18:35'),
(4, 'Tamim Iqbal', 'tm28@gmail.com', '2020-01-02', '12', '12', 'Bangladesh', 'Dhaka Platoon', 'Batsman', 'Cricket', '$2y$10$VWZbKfccY/c6aOuMR0j8EOcNJfqfgAHBGTz2K2dD6812ItG0nOrqa', '01965008417', 'Uttara, Dhaka', '90', '336231312.jpg', '2020-01-13 23:20:52', '2020-01-13 23:24:35'),
(5, 'Ramos', 'rm4@gmail.com', '2020-01-02', '12', '12', 'Spain', 'Real Madrid', 'Defender', 'Football', '$2y$10$8sJtlmbNcUs3wwj89azeGOfeO0pu1GgRmfW9aR9gwYoDj.ErZ2RK6', '01965088417', 'Uttara, Dhaka', '85', '2036987212.jpg', '2020-01-13 23:52:24', '2020-01-13 23:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cricketplayercarrers`
--
ALTER TABLE `cricketplayercarrers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footballplayercarrers`
--
ALTER TABLE `footballplayercarrers`
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
-- Indexes for table `players`
--
ALTER TABLE `players`
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
-- AUTO_INCREMENT for table `cricketplayercarrers`
--
ALTER TABLE `cricketplayercarrers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footballplayercarrers`
--
ALTER TABLE `footballplayercarrers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
