-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 06:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpr`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_receiveds`
--

CREATE TABLE `advance_receiveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `Advance` int(11) DEFAULT NULL,
  `Received` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allmenus`
--

CREATE TABLE `allmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `explanation` varchar(255) NOT NULL,
  `foodprice` varchar(255) NOT NULL,
  `eatedtime` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allmenus`
--

INSERT INTO `allmenus` (`id`, `foodname`, `explanation`, `foodprice`, `eatedtime`, `created_at`, `updated_at`) VALUES
(1, 'egg', 'addation', '2', 'Breakfast', '2023-08-19 11:23:52', '2023-08-19 11:23:52'),
(2, 'aloo parata', 'addation', '400', 'Lunch', '2023-08-19 11:26:02', '2023-08-19 11:26:02'),
(4, 'spescial tea', 'some this speciasil', '20', 'Breakfast', '2023-08-20 00:48:59', '2023-08-20 00:48:59'),
(5, 'aloo parata', 'this is tha addestion two plus five', '400', 'Breakfast', '2023-08-20 00:49:17', '2023-08-20 00:49:17'),
(6, 'tea,tea,2 roti', 'this is tha addestion two plus five', '30', 'Breakfast', '2023-08-20 00:49:52', '2023-08-20 00:49:52'),
(7, 'checkan', 'this is the good over all word now what do you thing about it', '50', 'Dinner', '2023-08-20 00:50:29', '2023-08-20 00:50:29'),
(8, 'chana and lobya', 'this is the good over all word now what do you thing about it', '10', 'Dinner', '2023-08-20 00:51:05', '2023-08-20 00:51:05'),
(9, 'kabalia palao', 'this is the good over all word now what do you thing about it', '10', 'Dinner', '2023-08-20 00:51:36', '2023-08-20 00:51:36'),
(10, 'chekan matter', 'this is the good over all word now what do you thing about it', '10', 'Lunch', '2023-08-20 00:52:04', '2023-08-20 00:52:04'),
(11, 'lanch food1', 'this is the good over all word now what do you thing about it', '10', 'Lunch', '2023-08-20 00:52:53', '2023-08-20 00:52:53'),
(12, 'lanch food2', 'this is tha addestion two plus five', '10', 'Lunch', '2023-08-20 00:53:15', '2023-08-20 00:53:15'),
(13, 'lanch food3', 'this is the good over all word now what do you thing about it', '10', 'Lunch', '2023-08-20 00:53:37', '2023-08-20 00:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `a_monthly_cost_food`
--

CREATE TABLE `a_monthly_cost_food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `foodprice` int(11) NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_monthly_cost_food`
--

INSERT INTO `a_monthly_cost_food` (`id`, `customerid`, `food`, `foodprice`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, '431', 'Breakfast', 10, NULL, '2023-08-22 06:06:37', '2023-08-22 06:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `contects`
--

CREATE TABLE `contects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contects`
--

INSERT INTO `contects` (`id`, `name`, `email`, `Subject`, `phoneno`, `message`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'any job', '033356987411', 'bkjgjgjgjgjgkgkgkgkkyyyyiylll', 1, '2023-08-20 04:53:37', '2023-08-20 04:53:37'),
(2, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'any job', '033356987411', 'ejkjdkkjdjsn', 0, '2023-08-20 06:23:13', '2023-08-20 06:23:13'),
(3, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'any job', '54646465', 'djkfhjdh', 0, '2023-08-20 06:29:49', '2023-08-20 06:29:49'),
(4, 'amjid khan', 'amirkhan@gmail.com', 'kkk', '2568844', 'dajskjaksakdhasdkjsdkj', 0, '2023-08-20 06:30:29', '2023-08-20 06:30:29'),
(5, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dnnkjdskj', '1556465', 'sdkjnkjdsk', 0, '2023-08-20 06:35:48', '2023-08-20 06:35:48'),
(8, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'fdjfknnn', '5154', 'mlkfdmndckn', 0, '2023-08-20 07:20:02', '2023-08-20 07:20:02'),
(9, 'jfdkjfkdjkjdj', 'dfkfkdknfk@gmail.com', 'dfkkfdkn', '3565465465', 'vfdmlvlknvfdlkn', 0, '2023-08-20 07:20:28', '2023-08-20 07:20:28'),
(10, 'jfdkjfkdjkjdj', 'dfkfkdknfk@gmail.com', 'dfkkfdkn', '3565465465', 'vfdmlvlknvfdlkn', 0, '2023-08-20 07:20:29', '2023-08-20 07:20:29'),
(11, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dfnkdfsj', '1654654', 'ndnkskedkjs', 0, '2023-08-20 07:25:04', '2023-08-20 07:25:04'),
(12, 'nnenenen', 'nnenen@gmail.com', 'dnkjnsdnk', '131354', 'mjbkjbk', 0, '2023-08-20 07:25:35', '2023-08-20 07:25:35'),
(13, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'ndlkfjldlk', '5654654', 'lkdnslknd', 0, '2023-08-20 07:34:00', '2023-08-20 07:34:00'),
(14, 'nkdndnkn', 'kndkld@gmail.com', 'dnkjndfksnk', '1535534', 'fvdkndslklsdl', 0, '2023-08-20 07:34:29', '2023-08-20 07:34:29'),
(15, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'any job', '54646465', 'djsjdjs', 0, '2023-08-20 07:39:44', '2023-08-20 07:39:44'),
(16, 'dfnjdskjkj', 'djnjkfdkjs@gmail.com', 'dnnkjdskj', '54446', 'DNNKDNKJDKJKDS', 0, '2023-08-20 07:40:25', '2023-08-20 07:40:25'),
(17, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'sndjdshhj', '554654', 'sdlkfnkdskjdn', 0, '2023-08-20 07:41:48', '2023-08-20 07:41:48'),
(18, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dnkfldkk', 'dkjsnkfdsn', 'dsknkdnkdnl', 0, '2023-08-20 07:42:18', '2023-08-20 07:42:18'),
(19, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dfjkhkjdfh', '5465464', 'fdknkfjdkfdj', 0, '2023-08-20 07:47:38', '2023-08-20 07:47:38'),
(20, 'dsfdjkshkj', 'dsjkkfjds@gmail.com', 'dsjfjsdhjh', '2654646', 'kjsdhfkjhdjbcds', 0, '2023-08-20 07:48:09', '2023-08-20 07:48:09'),
(21, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'new shop', '033356987411', 'kkkkk', 0, '2023-08-21 01:48:02', '2023-08-21 01:48:02'),
(22, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dfkkfdkn', '2568844', 'ekkdkjdskjf', 0, '2023-08-21 01:48:26', '2023-08-21 01:48:26'),
(23, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dnnkjdskj', '2365489', 'hhhhhhh', 0, '2023-08-21 01:52:57', '2023-08-21 01:52:57'),
(24, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dfkkfdkn', '3565465465', 'this is the', 0, '2023-08-21 01:53:37', '2023-08-21 01:53:37'),
(25, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dnnkjdskj', '2568844', 'sakfjkdskj', 0, '2023-08-21 05:53:45', '2023-08-21 05:53:45'),
(26, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'erhheuh', '55454', 'dsssssssssssss', 0, '2023-08-21 05:54:16', '2023-08-21 05:54:16'),
(27, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dnnkjdskj', '54646465', 'hgjhgjhg', 0, '2023-08-21 06:12:59', '2023-08-21 06:12:59'),
(28, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'new shop', '2365489', 'dddd', 0, '2023-08-21 06:13:43', '2023-08-21 06:13:43'),
(29, 'dnsfnkdjkj', 'hashmatullah13841@gmail.com', 'dkasfakj', '456456', 'dsnkjdasn', 0, '2023-08-21 06:15:12', '2023-08-21 06:15:12'),
(30, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'erhheuh', '2568844', 'dsjkjak', 0, '2023-08-21 06:17:05', '2023-08-21 06:17:05'),
(31, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dksjkjk', '51554', 'dsknkjn', 0, '2023-08-21 06:26:27', '2023-08-21 06:26:27'),
(32, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'dfkkfdkn', '2365489', 'kggggggg', 0, '2023-08-21 06:29:38', '2023-08-21 06:29:38'),
(33, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'erhheuh', '3565465465', 'dfhshjahsdh', 0, '2023-08-22 00:41:30', '2023-08-22 00:41:30'),
(34, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', 'new shop', '55454', 'sdkkjsdajk', 0, '2023-08-22 00:42:23', '2023-08-22 00:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(255) NOT NULL,
  `costmoney` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodtime` varchar(255) NOT NULL,
  `foodimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `foodtime`, `foodimage`, `created_at`, `updated_at`) VALUES
(6, 'Lunch', 'gallery/sUVERLxNjfTExmOHMub7k1Lsq3qmcEpVnj7fm7aE.png', '2023-08-17 23:37:29', '2023-08-17 23:37:29'),
(7, 'Lunch', 'gallery/GQl5MqgjMgDYL1xCcCn0KZWK9nyUY5BPDeBeDssm.png', '2023-08-17 23:37:48', '2023-08-17 23:37:48'),
(8, 'Lunch', 'gallery/Lcj7TscCRpnw8rJhz336zTGGAGWJwtwLcwlX3iQt.png', '2023-08-17 23:38:06', '2023-08-17 23:38:06'),
(9, 'Breakfast', 'gallery/UVt2musOpoVtoIQHpdgiIJUWpPdHdxQruMRA4rVB.png', '2023-08-17 23:43:28', '2023-08-17 23:43:28'),
(10, 'Breakfast', 'gallery/WvDYyJ402SwMu97brOG8uNvPO9MCGo6qXYAESNL1.png', '2023-08-17 23:43:46', '2023-08-17 23:43:46'),
(11, 'Breakfast', 'gallery/oyMi8gMh1KkXdwPtRVfI6QaATaxTP1ZyBWH8k6uA.png', '2023-08-17 23:44:06', '2023-08-17 23:44:06'),
(12, 'Breakfast', 'gallery/I7I48sfYtMGmENqENrFCgBhtMRWt3BRJMuBYcAQI.png', '2023-08-17 23:44:31', '2023-08-17 23:44:31'),
(13, 'Dinner', 'gallery/gFLQJURBa5QqeUtp98NccrsfMEUULffjJGbpEqiA.png', '2023-08-17 23:47:20', '2023-08-17 23:47:20'),
(14, 'Dinner', 'gallery/luM2ew6eOG9a3ivCbg1puZknsqiwdo56MSGroaok.png', '2023-08-17 23:47:41', '2023-08-17 23:47:41'),
(15, 'Dinner', 'gallery/7Jk6U51tRXf0fGsAXmAjdOedg4BimpPnDo3IImDr.png', '2023-08-17 23:47:59', '2023-08-17 23:47:59');

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2023_07_05_073004_create_monthlycustomers_table', 1),
(27, '2023_07_07_180808_create_a_monthly_cost_food_table', 1),
(28, '2023_07_11_051309_create_advance_receiveds_table', 1),
(29, '2023_07_30_091425_create_oncashcustomers_table', 1),
(30, '2023_08_01_100330_create_costs_table', 1),
(31, '2023_08_16_081207_create_userhomeourmenus_table', 2),
(32, '2023_08_16_161345_create_ourteams_table', 3),
(33, '2023_08_17_165050_create_galleries_table', 4),
(34, '2023_08_19_055003_create_quickordes_table', 5),
(35, '2023_08_19_082114_create_allmenus_table', 6),
(38, '2023_08_20_074745_create_contects_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `monthlycustomers`
--

CREATE TABLE `monthlycustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customerid` varchar(255) NOT NULL,
  `Customername` varchar(255) NOT NULL,
  `Customermobile` varchar(255) NOT NULL,
  `CustomerComName` varchar(255) NOT NULL,
  `CustomerBidg` varchar(255) NOT NULL,
  `CustomerRoomno` varchar(255) NOT NULL,
  `CustomerAdvance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthlycustomers`
--

INSERT INTO `monthlycustomers` (`id`, `Customerid`, `Customername`, `Customermobile`, `CustomerComName`, `CustomerBidg`, `CustomerRoomno`, `CustomerAdvance`, `date`, `created_at`, `updated_at`) VALUES
(1, '431', 'ahmad', '03378888', 'xyz', '25', '2544566', '0', '2023-08-23', '2023-08-22 06:06:03', '2023-08-22 06:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `oncashcustomers`
--

CREATE TABLE `oncashcustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourteams`
--

CREATE TABLE `ourteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `memberimage` varchar(255) NOT NULL,
  `membername` varchar(255) NOT NULL,
  `membersdes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourteams`
--

INSERT INTO `ourteams` (`id`, `memberimage`, `membername`, `membersdes`, `created_at`, `updated_at`) VALUES
(7, 'ourteamimage/MFK8848LVYS4ADUBVqLro8fJwjUXEY8shbib5Xp0.png', 'khan', 'tea', '2023-08-17 05:35:19', '2023-08-17 05:35:19'),
(8, 'ourteamimage/d81Zbk2bx1GFVLPmvQ57ulUvA7AzXYdcO7EH6l6j.png', 'zahid', 'chicken dishes', '2023-08-17 06:36:02', '2023-08-17 06:36:02'),
(9, 'ourteamimage/F3U69k3UmYFVgeqEEatPk7q7vMim7KE7mWD0C5Kh.jpg', 'amir khan', 'alraonder', '2023-08-17 06:36:51', '2023-08-17 06:36:51'),
(10, 'ourteamimage/4c5PRrCBKoZGPJyj4uCllUcLhrxnSizy4VtKSb0H.jpg', 'Zeshan khan', 'beryani cooking', '2023-08-17 06:37:54', '2023-08-17 06:37:54'),
(11, 'ourteamimage/aqEeXRFTeSJvx6dXnqKMGi25wyry4u7qvTwH9Xhx.png', 'khan khan', 'good vagitable', '2023-08-17 07:07:17', '2023-08-17 07:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('hashmatullah13841@gmail.com', '$2y$10$PLawvIPouelQnAsgopmKgeG.VCqaleCe.Q8zdExcYN3HjBQoIEbLG', '2023-08-22 14:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quickordes`
--

CREATE TABLE `quickordes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `fooditeams` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quickordes`
--

INSERT INTO `quickordes` (`id`, `name`, `email`, `mobilenumber`, `Address`, `fooditeams`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:15:34', '2023-08-19 02:15:34'),
(2, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:16:43', '2023-08-19 02:16:43'),
(3, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:18:32', '2023-08-19 02:18:32'),
(4, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:21:38', '2023-08-19 02:21:38'),
(5, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:22:23', '2023-08-19 02:22:23'),
(6, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:24:07', '2023-08-19 02:24:07'),
(7, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:27:39', '2023-08-19 02:27:39'),
(8, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-19 02:29:53', '2023-08-19 02:29:53'),
(10, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-21 11:38:26', '2023-08-21 11:38:26'),
(11, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-21 11:39:17', '2023-08-21 11:39:17'),
(12, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-21 11:39:44', '2023-08-21 11:39:44'),
(13, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-21 11:55:49', '2023-08-21 11:55:49'),
(14, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-21 11:56:13', '2023-08-21 11:56:13'),
(16, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 00:43:05', '2023-08-22 00:43:05'),
(17, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 00:51:45', '2023-08-22 00:51:45'),
(18, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 00:52:07', '2023-08-22 00:52:07'),
(19, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 00:55:49', '2023-08-22 00:55:49'),
(21, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:14:28', '2023-08-22 01:14:28'),
(22, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:15:01', '2023-08-22 01:15:01'),
(23, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:19:37', '2023-08-22 01:19:37'),
(24, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'amjid', '2023-08-22 01:28:17', '2023-08-22 01:28:17'),
(25, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:30:26', '2023-08-22 01:30:26'),
(26, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:38:48', '2023-08-22 01:38:48'),
(27, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'i am waiting the order', '2023-08-22 01:54:43', '2023-08-22 01:54:43'),
(28, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', '03340910607', 'hangu', 'only food', 'amjid', '2023-08-22 06:08:15', '2023-08-22 06:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `userhomeourmenus`
--

CREATE TABLE `userhomeourmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `foodprice` varchar(255) NOT NULL,
  `explanation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userhomeourmenus`
--

INSERT INTO `userhomeourmenus` (`id`, `foodname`, `foodprice`, `explanation`, `created_at`, `updated_at`) VALUES
(2, 'egg', 'this is the best for health', '10', '2023-08-16 07:44:40', '2023-08-16 07:44:40'),
(3, 'parrata', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua.', '20', '2023-08-16 07:45:19', '2023-08-16 07:45:19'),
(6, 'parrata', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua.', '10', '2023-08-16 08:02:17', '2023-08-16 08:02:17'),
(7, 'parrata', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua.', 'addation', '2023-08-16 08:02:29', '2023-08-16 08:02:29'),
(8, 'aloo parata', 'this is the best for health', '10', '2023-08-16 08:20:14', '2023-08-16 08:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 1,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amirkhan', 'amirkhan@gmail.com', NULL, 0, '$2y$10$ogYLrIOtmsJe0H7Qq86DQ.E6FJ9Nam4p3iKfNfL2aNCqvy6na4mMS', NULL, '2023-08-15 05:34:35', '2023-08-15 05:34:35'),
(2, 'Hashmat Ullah', 'hashmatullah13841@gmail.com', NULL, 1, '$2y$10$hkJ7lh.1C28UMYrjcuE0x.bxfRGDqm7jKIggmHLRt8OVHeq79OT3G', NULL, '2023-08-15 05:36:38', '2023-08-15 05:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_receiveds`
--
ALTER TABLE `advance_receiveds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allmenus`
--
ALTER TABLE `allmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_monthly_cost_food`
--
ALTER TABLE `a_monthly_cost_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contects`
--
ALTER TABLE `contects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthlycustomers`
--
ALTER TABLE `monthlycustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncashcustomers`
--
ALTER TABLE `oncashcustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteams`
--
ALTER TABLE `ourteams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quickordes`
--
ALTER TABLE `quickordes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userhomeourmenus`
--
ALTER TABLE `userhomeourmenus`
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
-- AUTO_INCREMENT for table `advance_receiveds`
--
ALTER TABLE `advance_receiveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allmenus`
--
ALTER TABLE `allmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `a_monthly_cost_food`
--
ALTER TABLE `a_monthly_cost_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contects`
--
ALTER TABLE `contects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `monthlycustomers`
--
ALTER TABLE `monthlycustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oncashcustomers`
--
ALTER TABLE `oncashcustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quickordes`
--
ALTER TABLE `quickordes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `userhomeourmenus`
--
ALTER TABLE `userhomeourmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
