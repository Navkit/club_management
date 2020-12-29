-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 08:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--
CREATE DATABASE IF NOT EXISTS `sports` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sports`;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MainMemberName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NationalID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MilCardImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `MedCardImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `FamCardImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `IDcardImg1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `IDcardImg2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `MedRevImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `State` int(11) NOT NULL DEFAULT 1,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `MainMemberName`, `Type`, `NationalID`, `Mobile`, `Address`, `Certificate`, `Job`, `MilCardImg`, `MedCardImg`, `FamCardImg`, `IDcardImg1`, `IDcardImg2`, `MedRevImg`, `RegistrationDate`, `State`, `Notes`) VALUES
(1, 'محمود الملا', 'عسكري', '29706211500092', '01211618566', 'دسوق', 'بكلريوس حاسبات و معلومات', 'فاتح ستاوت اب', '1596905957MilCardImg2584663_0.jpg', '1596906132MedCardImg24900181_1683211135071117_4351367374415273755_n.jpg', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', '2020-07-21 11:07:53', 1, 'لم يسدد الاشتراك'),
(3, 'ايمن ابراهيم محمد', 'عسكري', '29721221254', '01141215111', 'الابريهمية', 'بكاليروس تربية نوعية', 'مغني', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', 'default-image.PNG', '2020-09-23 09:16:12', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `Name`) VALUES
(1, 'سباحة'),
(2, 'كرة القدم'),
(3, 'سكواش'),
(4, 'جيم'),
(5, 'جومباز');

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
(12, '2020_06_28_073725_create_games_table', 1),
(13, '2020_06_28_073750_create_cards_table', 1),
(14, '2020_06_28_073805_create_players_table', 1),
(15, '2020_06_28_073820_create_playergames_table', 1),
(16, '2020_06_28_073836_create_partners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIDImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `Img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `Card_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `Name`, `NIDImg`, `Img`, `Card_ID`) VALUES
(1, 'ميرنا', 'default-image.PNG', 'default-image.PNG', 1),
(2, 'شاهيناز', 'default-image.PNG', 'default-image.PNG', 3);

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
-- Table structure for table `playergames`
--

CREATE TABLE `playergames` (
  `Player_ID` bigint(20) UNSIGNED NOT NULL,
  `Game_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playergames`
--

INSERT INTO `playergames` (`Player_ID`, `Game_ID`) VALUES
(2, 1),
(2, 2),
(1, 1),
(1, 2),
(3, 1),
(3, 3),
(4, 2),
(5, 1),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `NIDImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image.PNG',
  `Card_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `Name`, `Img`, `NIDImg`, `Card_ID`) VALUES
(1, 'ادم', 'default-image.PNG', 'default-image.PNG', 1),
(2, 'جنا', 'default-image.PNG', 'default-image.PNG', 1),
(3, 'ايمن', 'default-image.PNG', 'default-image.PNG', 3),
(4, 'محمد', 'default-image.PNG', 'default-image.PNG', 3),
(5, 'نور', 'default-image.PNG', 'default-image.PNG', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'admin', '$2y$10$eiwvBz1VcvoUAMVw7QymBein1Hhn2gNPS4Ty8hF9qB1yyJuFR3Sua', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_card_id_foreign` (`Card_ID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `playergames`
--
ALTER TABLE `playergames`
  ADD KEY `playergames_player_id_foreign` (`Player_ID`),
  ADD KEY `playergames_game_id_foreign` (`Game_ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_card_id_foreign` (`Card_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_card_id_foreign` FOREIGN KEY (`Card_ID`) REFERENCES `cards` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `playergames`
--
ALTER TABLE `playergames`
  ADD CONSTRAINT `playergames_game_id_foreign` FOREIGN KEY (`Game_ID`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `playergames_player_id_foreign` FOREIGN KEY (`Player_ID`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_card_id_foreign` FOREIGN KEY (`Card_ID`) REFERENCES `cards` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
