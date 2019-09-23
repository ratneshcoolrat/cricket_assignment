-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 08:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricketdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_team_id` int(10) UNSIGNED NOT NULL,
  `second_team_id` int(10) UNSIGNED NOT NULL,
  `winner_team_id` int(10) UNSIGNED NOT NULL,
  `held_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `first_team_id`, `second_team_id`, `winner_team_id`, `held_on`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2019-09-23 11:40:13', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(2, 3, 4, 3, '2019-09-23 11:40:13', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(3, 5, 6, 5, '2019-09-23 11:40:13', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(4, 7, 8, 8, '2019-09-23 11:40:13', '2019-09-23 06:10:13', '2019-09-23 06:10:13');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_09_21_020428_create_teams_table', 1),
(18, '2019_09_21_020501_create_players_table', 1),
(19, '2019_09_21_020531_create_matches_table', 1),
(20, '2019_09_21_020646_create_points_table', 1),
(21, '2019_09_22_140407_create_team_details_table', 1);

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
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jersey_number` int(10) UNSIGNED NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches` int(10) UNSIGNED NOT NULL,
  `runs` int(10) UNSIGNED NOT NULL,
  `highest_scores` int(10) UNSIGNED NOT NULL,
  `fifties` int(10) UNSIGNED NOT NULL,
  `hundreds` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `first_name`, `last_name`, `image_uri`, `jersey_number`, `country`, `matches`, `runs`, `highest_scores`, `fifties`, `hundreds`, `created_at`, `updated_at`) VALUES
(1, 'MS', 'Dhoni', 'default-avatar.png', 1, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(2, 'Suresh', 'Raina', 'default-avatar.png', 2, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(3, 'Faf Du', 'Plessis', 'default-avatar.png', 3, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(4, 'M', 'Vijay', 'default-avatar.png', 4, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(5, 'Ravindra', 'Jadeja', 'default-avatar.png', 5, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(6, 'Sam', 'Billings', 'default-avatar.png', 6, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(7, 'Mitchell', 'Santner', 'default-avatar.png', 7, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(8, 'David', 'Willey', 'default-avatar.png', 8, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(9, 'Dwayne', 'Bravo', 'default-avatar.png', 9, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(10, 'Shane', 'Watson', 'default-avatar.png', 10, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(11, 'Lungi', 'Ngidi', 'default-avatar.png', 11, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(12, 'Shreyas', 'Iyer', 'default-avatar.png', 12, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(13, 'Rishabh', 'Pant', 'default-avatar.png', 13, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(14, 'Prithvi', 'Shaw', 'default-avatar.png', 14, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(15, 'Amit', 'Mishra', 'default-avatar.png', 15, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(16, 'Rahul', 'Tewatiya', 'default-avatar.png', 16, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(17, 'Colin', 'Munro', 'default-avatar.png', 17, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(18, 'Shikhar', 'Dhawan', 'default-avatar.png', 18, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(19, 'Chris', 'Gayle', 'default-avatar.png', 19, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(20, 'Andrew', 'Tye', 'default-avatar.png', 20, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(21, 'David', 'Miller', 'default-avatar.png', 21, '', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(22, 'Ravichandran', 'Ashwin', 'default-avatar.png', 22, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(23, 'Mandeep', 'Singh', 'default-avatar.png', 23, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(24, 'Karun', 'Nayer', 'default-avatar.png', 24, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(25, 'Harbhajan', 'Singh', 'default-avatar.png', 25, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(26, 'Deepak', 'Chahar', 'default-avatar.png', 26, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(27, 'Shardual', 'Thakur', 'default-avatar.png', 27, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(28, 'Monu', 'Kumar', 'default-avatar.png', 28, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(29, 'Hanuman', 'Bihari', 'default-avatar.png', 29, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(30, 'Colin', 'Ingram', 'default-avatar.png', 30, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(31, 'Aveshy', 'Khan', 'default-avatar.png', 31, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(32, 'Harshal', 'Patel', 'default-avatar.png', 32, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(33, 'Keemo', 'Paul', 'default-avatar.png', 33, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(34, 'Manjot', 'Kalra', 'default-avatar.png', 34, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(35, 'Ankush', '', 'default-avatar.png', 35, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(36, 'Nathu', 'Singh', 'default-avatar.png', 36, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(37, 'Bandaru', 'Agarwal', 'default-avatar.png', 37, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(38, 'Chris', 'Moris', 'default-avatar.png', 38, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(39, 'Trent', 'Bolt', 'default-avatar.png', 39, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(40, 'Sam', 'Curran', 'default-avatar.png', 40, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(41, 'Mohammed', 'Sami', 'default-avatar.png', 41, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(42, 'Nicolas', 'Pooran', 'default-avatar.png', 42, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(43, 'Dinesh', 'Karthik', 'default-avatar.png', 43, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(44, 'Robin', 'Uthappa', 'default-avatar.png', 44, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(45, 'Mayank', 'Agarwal', 'default-avatar.png', 45, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(46, 'Mayank', 'Agarwal', 'default-avatar.png', 46, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(47, 'Mayank', 'Agarwal', 'default-avatar.png', 47, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(48, 'Mayank', 'Agarwal', 'default-avatar.png', 48, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(49, 'Mayank', 'Agarwal', 'default-avatar.png', 49, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(50, 'Mayank', 'Agarwal', 'default-avatar.png', 50, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(51, 'Mayank', 'Agarwal', 'default-avatar.png', 51, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(52, 'Mayank', 'Agarwal', 'default-avatar.png', 52, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(53, 'Mayank', 'Agarwal', 'default-avatar.png', 53, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(54, 'Mayank', 'Agarwal', 'default-avatar.png', 54, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(55, 'Mayank', 'Agarwal', 'default-avatar.png', 55, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(56, 'Mayank', 'Agarwal', 'default-avatar.png', 56, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(57, 'Mayank', 'Agarwal', 'default-avatar.png', 57, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(58, 'Mayank', 'Agarwal', 'default-avatar.png', 58, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(59, 'Mayank', 'Agarwal', 'default-avatar.png', 59, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(60, 'Mayank', 'Agarwal', 'default-avatar.png', 60, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(61, 'Mayank', 'Agarwal', 'default-avatar.png', 61, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(62, 'Mayank', 'Agarwal', 'default-avatar.png', 62, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(63, 'Mayank', 'Agarwal', 'default-avatar.png', 63, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(64, 'Mayank', 'Agarwal', 'default-avatar.png', 64, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(65, 'Mayank', 'Agarwal', 'default-avatar.png', 65, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(66, 'Mayank', 'Agarwal', 'default-avatar.png', 66, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(67, 'Mayank', 'Agarwal', 'default-avatar.png', 67, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(68, 'Mayank', 'Agarwal', 'default-avatar.png', 68, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(69, 'Mayank', 'Agarwal', 'default-avatar.png', 69, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(70, 'Mayank', 'Agarwal', 'default-avatar.png', 70, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(71, 'Mayank', 'Agarwal', 'default-avatar.png', 71, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(72, 'Mayank', 'Agarwal', 'default-avatar.png', 72, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(73, 'Mayank', 'Agarwal', 'default-avatar.png', 73, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(74, 'Mayank', 'Agarwal', 'default-avatar.png', 74, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(75, 'Mayank', 'Agarwal', 'default-avatar.png', 75, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(76, 'Mayank', 'Agarwal', 'default-avatar.png', 76, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(77, 'Mayank', 'Agarwal', 'default-avatar.png', 77, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(78, 'Mayank', 'Agarwal', 'default-avatar.png', 78, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(79, 'Mayank', 'Agarwal', 'default-avatar.png', 79, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(80, 'Mayank', 'Agarwal', 'default-avatar.png', 80, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(81, 'Mayank', 'Agarwal', 'default-avatar.png', 81, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(82, 'Mayank', 'Agarwal', 'default-avatar.png', 82, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(83, 'Mayank', 'Agarwal', 'default-avatar.png', 83, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(84, 'Mayank', 'Agarwal', 'default-avatar.png', 84, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(85, 'Mayank', 'Agarwal', 'default-avatar.png', 85, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(86, 'Mayank', 'Agarwal', 'default-avatar.png', 86, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(87, 'Mayank', 'Agarwal', 'default-avatar.png', 87, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(88, 'Mayank', 'Agarwal', 'default-avatar.png', 88, 'India', 100, 12000, 120, 30, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `played` int(10) UNSIGNED NOT NULL,
  `won` int(10) UNSIGNED NOT NULL,
  `lost` int(10) UNSIGNED NOT NULL,
  `tie` int(10) UNSIGNED NOT NULL,
  `net_run_rate` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `team_id`, `played`, `won`, `lost`, `tie`, `net_run_rate`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 1, 0, 0, 0, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(2, 2, 1, 1, 0, 0, 0, 2, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(3, 3, 1, 1, 0, 0, 0, 2, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(4, 4, 1, 0, 1, 0, 0, 0, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(5, 5, 1, 1, 0, 0, 0, 2, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(6, 6, 1, 0, 1, 0, 0, 0, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(7, 7, 1, 0, 1, 0, 0, 0, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(8, 8, 1, 1, 0, 0, 0, 2, '2019-09-23 06:10:13', '2019-09-23 06:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo_uri`, `club_state`, `created_at`, `updated_at`) VALUES
(1, 'CSK', 'csk.png', 'Chennai', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(2, 'KKR', 'kkr.png', 'Kolkata', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(3, 'MI', 'mi.png', 'Mumbai', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(4, 'DC', 'dc.png', 'Delhi', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(5, 'KXIP', 'kxip.png', 'Panjab', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(6, 'SRH', 'srh.png', 'Hyderabad', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(7, 'RR', 'rr.png', 'Rajasthan', '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(8, 'RCB', 'rcb.png', 'Bangalore', '2019-09-23 06:10:13', '2019-09-23 06:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `player_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`id`, `team_id`, `player_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(2, 1, 2, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(3, 1, 3, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(4, 1, 4, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(5, 1, 5, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(6, 1, 6, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(7, 1, 7, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(8, 1, 8, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(9, 1, 9, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(10, 1, 10, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(11, 1, 11, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(12, 2, 12, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(13, 2, 13, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(14, 2, 14, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(15, 2, 15, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(16, 2, 16, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(17, 2, 17, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(18, 2, 18, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(19, 2, 19, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(20, 2, 20, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(21, 2, 21, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(22, 2, 22, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(23, 3, 23, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(24, 3, 24, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(25, 3, 25, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(26, 3, 26, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(27, 3, 27, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(28, 3, 28, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(29, 3, 29, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(30, 3, 30, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(31, 3, 31, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(32, 3, 32, '2019-09-23 06:10:13', '2019-09-23 06:10:13'),
(33, 3, 33, '2019-09-23 06:10:13', '2019-09-23 06:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
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
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_team_id_index` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_details_team_id_index` (`team_id`),
  ADD KEY `team_details_player_id_index` (`player_id`);

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
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_details`
--
ALTER TABLE `team_details`
  ADD CONSTRAINT `team_details_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `team_details_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
