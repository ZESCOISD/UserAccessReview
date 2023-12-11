-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2023 at 10:57 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_access_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_09_104611_create_user_access_reviews_table', 2),
(6, '2023_11_10_101453_create_reports_table', 3),
(7, '2023_11_10_101753_create_systems_table', 3),
(8, '2023_11_10_101453_create_roles_table', 4),
(9, '2023_11_10_101753_create_review_action_table', 4),
(10, '2023_11_14_134024_create_roles_table', 5),
(11, '2023_11_14_134627_create_systems_table', 6),
(12, '2023_11_14_135042_create_systems_table', 7),
(13, '2023_11_14_135508_create_roles_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

DROP TABLE IF EXISTS `systems`;
CREATE TABLE IF NOT EXISTS `systems` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_access_reviews`
--

DROP TABLE IF EXISTS `user_access_reviews`;
CREATE TABLE IF NOT EXISTS `user_access_reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_no` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `employee_designation` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `review_access` varchar(255) NOT NULL,
  `review_action` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `system_id` int NOT NULL,
  `role_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_access_reviews`
--

INSERT INTO `user_access_reviews` (`id`, `staff_no`, `username`, `full_name`, `employee_designation`, `area`, `review_access`, `review_action`, `comments`, `system_id`, `role_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(54, '76435', 'DavidShula7', 'David Shula', 'Sub-station assistant', 'Malambo', 'FUEL', '1', 'Not Done', 1, 1, NULL, '2023-12-05 06:55:28', '2023-12-05 06:55:28'),
(55, '76765', 'GabrielPhiri8', 'Gabriel Phiri', 'ICT', 'Malaiti House', 'FUEL', '2', 'Done', 1, 1, NULL, '2023-12-05 06:57:56', '2023-12-05 06:57:56'),
(56, '77001', 'Georgewams', 'George Wamulume', 'ICT', 'Malaiti House', 'FUEL', '4', 'WAITING APPROVAL', 1, 2, NULL, '2023-12-05 07:00:32', '2023-12-05 07:00:32'),
(57, '75432', 'Kevindak', 'Kevin Daka', 'Driver', 'HQ', 'FUEL', '1', 'DONE', 1, 1, NULL, '2023-12-05 07:02:11', '2023-12-05 07:02:11'),
(62, '74320', 'Joebwalya', 'Joe Bwalya', 'Driver', 'Kitwe', 'done', '5', 'done', 4, 4, NULL, '2023-12-05 12:20:22', '2023-12-05 12:20:22'),
(63, 'Rerum veniam sunt p', 'lyvol', 'Walter Estrada', 'Nostrum dolor cumque', 'Veniam sed quisquam', 'Non voluptas ab in o', '3', 'Consequuntur qui qui', 1, 1, NULL, '2023-12-05 12:33:49', '2023-12-05 12:33:49'),
(64, 'Sed sed illum offic', 'ditylakura', 'Anastasia Mcfadden', 'Nemo non quasi est', 'Aliquid rem enim con', 'Sed ea facilis venia', '5', 'done', 2, 1, NULL, '2023-12-05 12:35:03', '2023-12-05 12:35:03'),
(65, '94', 'fepinog', 'Lamar Solis', 'Et tempor labore ali', 'Dolores qui molestia', 'Suscipit commodo rep', '5', 'Aperiam elit sed co', 3, 3, NULL, '2023-12-06 06:48:13', '2023-12-06 06:48:13'),
(66, '72350', 'mwizukanjinankamba', 'Mwizukanji Nankamba', 'Accountant', 'Chongwe', 'fuel', '1', 'Not done', 1, 2, NULL, '2023-12-06 06:49:59', '2023-12-06 06:49:59'),
(67, '924', 'zuzubapy', 'Althea Morris', 'Ut omnis ipsum labo', 'Accusantium eum ut c', 'Id in Nam voluptatu', '2', 'Et ullamco iure labo', 2, 4, NULL, '2023-12-06 06:54:22', '2023-12-06 06:54:22'),
(68, '174', 'ferowyh', 'Pearl Marks', 'Explicabo Nihil vol', 'Occaecat voluptatem', 'Dolores aut sed mole', '1', 'Duis quas nostrum ni', 3, 4, NULL, '2023-12-06 06:55:03', '2023-12-06 06:55:03'),
(69, '72350', 'Henry9', 'Henry Mutale', 'guard', 'Sowezi', 'fuel', '1', 'needs to be done', 1, 1, NULL, '2023-12-06 06:58:08', '2023-12-06 06:58:08'),
(70, '901', 'pibuhugy', 'Meghan Drake', 'Aliquam dolorem sed', 'Irure autem hic quia', 'Qui dolore vero nost', '5', 'Enim veritatis dolor', 2, 3, NULL, '2023-12-06 07:02:09', '2023-12-06 07:02:09'),
(71, '15', 'ceqyhuh', 'Lacota Witt', 'Ullamco dolor explic', 'Repellendus Cumque', 'Autem eiusmod et arc', '3', 'Inventore dolore est', 1, 4, NULL, '2023-12-06 07:08:33', '2023-12-06 07:08:33'),
(72, '525', 'zometi', 'Zorita Mckee', 'Ut dolor quis qui ea', 'Architecto eu optio', 'Nisi est tempor deb', 'review_action', 'Sit repellendus Seq', 3, 1, NULL, '2023-12-06 07:10:19', '2023-12-06 07:10:19'),
(73, '823', 'tywifinu', 'Clinton Aguirre', 'Aut nisi et vitae hi', 'Eius dolor illum eu', 'Consectetur veniam', '4', 'Dignissimos consequa', 1, 4, NULL, '2023-12-06 07:23:18', '2023-12-06 07:23:18'),
(74, '956', 'cuwafukit', 'Ruby Ford', 'Est do itaque accusa', 'Consequat Libero la', 'Neque culpa ea iust', '3', 'Soluta rem reprehend', 3, 1, NULL, '2023-12-06 08:36:39', '2023-12-06 08:36:39'),
(75, '696', 'belelaro', 'Sebastian Solis', 'Eum cillum facilis i', 'Et obcaecati est ten', 'Id ut cupiditate min', 'review_action', 'Laboriosam et est c', 4, 1, NULL, '2023-12-06 08:37:29', '2023-12-06 08:37:29'),
(76, '387', 'gokowovyz', 'Anika Warner', 'Id nihil rerum exerc', 'Magna itaque anim de', 'Cupidatat facere dol', '1', 'Non anim cum unde do', 3, 1, NULL, '2023-12-06 10:38:48', '2023-12-06 10:38:48'),
(77, '348', 'fodoweni', 'Hakeem Huber', 'Sint odit dolorem i', 'Enim velit omnis mi', 'Tempor quis non mini', '5', 'Omnis ut commodi mol', 4, 4, NULL, '2023-12-06 11:39:12', '2023-12-06 11:39:12'),
(78, '837', 'sobys', 'Hashim Michael', 'Dolorem assumenda ev', 'Qui dolore et quo id', 'Quod occaecat eum no', 'review_action', 'Veniam voluptas eos', 4, 1, NULL, '2023-12-06 12:33:36', '2023-12-06 12:33:36'),
(79, '76088', 'Georgewams', 'Gareth King', 'Security', 'Kitwe', 'Fuel', '2', 'Done', 1, 2, NULL, '2023-12-07 04:39:56', '2023-12-07 04:39:56'),
(80, '161', 'wunosyzij', 'Adrian Hartman', 'Deleniti modi rerum', 'Culpa a et cum enim', 'Eligendi ut qui veni', '5', 'Iusto ad reprehender', 1, 2, NULL, '2023-12-07 04:41:29', '2023-12-07 04:41:29'),
(81, '290', 'barote', 'Leo Joseph', 'Voluptatum blanditii', 'Aut saepe incidunt', 'Perferendis qui accu', 'review_action', 'Consequatur optio', 2, 4, NULL, '2023-12-07 11:26:50', '2023-12-07 11:26:50'),
(82, '897', 'sowedizo', 'Dante Hardin', 'Et duis corrupti au', 'Proident non volupt', 'Non est esse et ut d', '1', 'Nisi sit ipsum modi', 2, 3, NULL, '2023-12-08 10:38:32', '2023-12-08 10:38:32'),
(83, '904', 'comehaf', 'Kyla Kelly', 'Qui esse dolor ea e', 'Illo vitae vel volup', 'Quod dolorum cum ab', '4', 'Et ut itaque quibusd', 3, 4, NULL, '2023-12-11 06:52:59', '2023-12-11 06:52:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
