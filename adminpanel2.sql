-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 oct. 2022 à 02:33
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `adminpanel2`
--

-- --------------------------------------------------------

--
-- Structure de la table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) NOT NULL,
  `HouseRef` varchar(200) NOT NULL,
  `Tenants` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Not paid',
  `price` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bills`
--

INSERT INTO `bills` (`id`, `Reference`, `HouseRef`, `Tenants`, `Email`, `status`, `price`, `created_at`, `updated_at`) VALUES
(15, '229027145', 'RA-11537560601', 'Ramadan Yacin Ibrahim', 'omar2@gmail.com', 'Paid', '1501', '2022-10-02 18:16:44', '2022-10-02 18:17:05');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Reference` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Categorie` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Street_Address` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedroom` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sqft` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Furnishing` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `build_year` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postor` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Verified` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not verified',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `Reference`, `E_title`, `Type`, `Categorie`, `image`, `price`, `City`, `State`, `Street_Address`, `bedroom`, `bathroom`, `sqft`, `Furnishing`, `build_year`, `about`, `postor`, `Verified`, `created_at`, `updated_at`) VALUES
(36, 'RA-11537560601', 'KL center Hotels', 'Apartement', 'Residential', 'RA-11537560601.jpg', '1501', 'KL', 'Penang', 'Kuala Lumpur', '2', '3', '2500', 'Not Furnished', '3000', 'aga gafg', 'RA-1167904987', 'Verified', '2022-09-13 03:52:41', '2022-09-14 11:49:13'),
(35, 'RA-12016409627', 'fadsf fadsf ad', 'Apartement', 'Commercial', 'RA-12016409627.jpg', '1500', 'Selangor', 'Sabah', 'Jalan Sunsuria, Bandar Sunsuri', '3', '2', '1500', 'Fully Furnished', '2000', '1200jhb', 'RA-095182042', 'Verified', '2022-09-13 03:21:06', '2022-09-15 02:22:33'),
(39, 'RA-0133879270', 'fasdbufb', 'Apartement', 'Commercial', 'RA-0133879270.webp', '1500', 'Selangor', 'Selangor', 'Jalan Sunsuria, Bandar Sunsuri', '2', '2', '1000', 'Not Furnished', '2012', 'fasdfasdfasdvads', 'RA-01672465620', 'Not verified', '2022-09-24 20:24:12', '2022-09-24 20:24:12'),
(38, 'RA-091895180', 'De centrum B-12-15', 'Apartement', 'Residential', 'RA-091895180.jpg', '1500', 'KL', 'Selangor', 'Kuala Lumpur', '3', '2', '1600', 'Fully Furnished', '2000', NULL, 'RA-1167904987', 'Verified', '2022-09-15 02:06:38', '2022-09-15 02:22:36');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyRef` varchar(200) NOT NULL,
  `User_Ref` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PropertyRef` (`PropertyRef`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(10000) NOT NULL,
  `User_Ref` varchar(100) NOT NULL,
  `HouseRef` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'Not Approved',
  `Owner` varchar(1000) NOT NULL DEFAULT 'Not Signed',
  `Tenants` varchar(1000) NOT NULL DEFAULT 'Not Signed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `User_Ref` (`User_Ref`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `Reference`, `Type`, `Sender`, `Email`, `Message`, `User_Ref`, `HouseRef`, `status`, `Owner`, `Tenants`, `created_at`, `updated_at`) VALUES
(49, '1363830105', 'fdsaf', 'Ramadan Yacin Ibrahim', 'omar2@gmail.com', 'fadsfa', 'RA-1167904987', 'RA-11537560601', 'Approved', 'Not Signed', 'Signed', '2022-10-02 18:09:03', '2022-10-02 18:16:44');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(239, '2014_10_12_000000_create_users_table', 2),
(240, '2014_10_12_100000_create_password_resets_table', 2),
(241, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2021_10_22_153517_create_roles_table', 1),
(242, '2021_10_22_153425_create_user_dts_table', 2),
(243, '2021_11_14_111509_category', 2),
(244, '2021_11_14_113139_product', 2),
(245, '2022_03_31_012956_events', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `Role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Reference`, `name`, `email`, `email_verified_at`, `password`, `status`, `Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(110, 'RA-01672465620', 'Ramadan Yacin Ibrahim', 'ramadanyacin6@gmail.com', NULL, '$2y$10$fmvdYAeXygPBezxLv1y19elCUrZwcfRXs4blNqYsD40vyvXwuvrH6', 1, 'Admin', NULL, '2022-09-15 04:32:36', '2022-09-15 04:32:36'),
(108, 'RA-1167904987', 'OMAR ABDI HADI', 'omar@gmail.com', NULL, '$2y$10$gU/2yibXaFTfI3a6y4GAROGeAmcNlDLFH2gepDpBE84h7CL8vFDQW', 1, 'Committee', NULL, '2022-09-13 03:43:25', '2022-09-13 03:43:25'),
(102, 'RA-095182042', 'Administrator Admin', 'Admin@gmail.com', NULL, '$2y$10$wvuOb7EARBD9LavtJovzsuWEaVgo.yjozgS4C5mjaE4kfnSZMVbJG', 1, 'Admin', NULL, '2022-09-13 02:30:37', '2022-09-13 02:30:37'),
(111, 'RA-0996930730', 'Omar hadi Ahmed', 'omar2@gmail.com', NULL, '$2y$10$wcQBE9Jup32QS2j49UPF0.fw0n6odftS95Hbza84MD9JcWPYw.w3O', 1, 'Member', NULL, '2022-09-15 06:07:01', '2022-09-15 06:07:01');

-- --------------------------------------------------------

--
-- Structure de la table `user_dts`
--

DROP TABLE IF EXISTS `user_dts`;
CREATE TABLE IF NOT EXISTS `user_dts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tel` int(255) NOT NULL DEFAULT '0',
  `Address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `VKey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `user_Ref` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_dts_user_ref_foreign` (`user_Ref`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_dts`
--

INSERT INTO `user_dts` (`id`, `photo`, `Tel`, `Address`, `VKey`, `user_Ref`, `created_at`, `updated_at`) VALUES
(112, NULL, 162446713, 'Jalan Sunsuria, Bandar Sunsuri', '-', 'RA-01672465620', '2022-09-15 04:32:36', '2022-09-15 04:32:36'),
(110, NULL, 162433, 'Kuala Lumpur', '-', 'RA-1167904987', '2022-09-13 03:43:25', '2022-09-13 03:43:25'),
(113, '', 16245254, 'Kuala Lumpur', '-', 'RA-0996930730', '2022-09-15 06:07:01', '2022-09-15 06:07:01'),
(104, NULL, 162446713, 'Jalan Sunsuria, Bandar Sunsuri', '-', 'RA-095182042', '2022-09-13 02:30:37', '2022-09-13 02:30:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
