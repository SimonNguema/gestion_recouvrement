-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 mai 2024 à 03:40
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_recouvrements`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresseAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleAdmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nomAdmin`, `prenomAdmin`, `adresseAdmin`, `telephoneAdmin`, `emailAdmin`, `roleAdmin`, `idUser`, `created_at`, `updated_at`) VALUES
(1, 'Glain', 'Simon', 'CASTOR-DERKLE', '+221771086691', 'glainnguema@gmail.com', 'Super-Admin', 1, '2024-02-26 10:24:26', '2024-02-26 10:24:26'),
(3, 'Bocoum', 'Abdoulaye', 'Dieuppeul', '+221771086692', 'bocoum@gmail.com', 'Admin', 5, '2024-02-26 10:29:07', '2024-02-26 10:29:07'),
(4, 'DiALLO', 'Abdoulaye', 'thies, senegal', '773993362', 'abdoulayediallo@gmail.com', 'Admin', 12, '2024-02-26 11:46:49', '2024-02-26 11:46:49');

-- --------------------------------------------------------

--
-- Structure de la table `annee_academiques`
--

CREATE TABLE `annee_academiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleAnnee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annee_academiques`
--

INSERT INTO `annee_academiques` (`id`, `intituleAnnee`, `created_at`, `updated_at`) VALUES
(1, '2021-2022', '2024-02-26 10:56:07', '2024-02-26 10:56:07'),
(2, '2022-2023', '2024-02-26 10:56:15', '2024-02-26 10:56:15'),
(3, '2023-2024', '2024-02-26 10:56:25', '2024-02-26 10:56:25');

-- --------------------------------------------------------

--
-- Structure de la table `campuses`
--

CREATE TABLE `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleCampus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `campuses`
--

INSERT INTO `campuses` (`id`, `intituleCampus`, `created_at`, `updated_at`) VALUES
(1, 'POINT-E', '2024-02-26 10:45:08', '2024-02-26 10:45:08'),
(2, 'THIES', '2024-02-26 10:45:20', '2024-02-26 10:45:20'),
(3, 'FAIDHERBE', '2024-02-26 10:45:28', '2024-02-26 10:45:28');

-- --------------------------------------------------------

--
-- Structure de la table `cycles`
--

CREATE TABLE `cycles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleCycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cycles`
--

INSERT INTO `cycles` (`id`, `intituleCycle`, `created_at`, `updated_at`) VALUES
(1, 'LICENCE', '2024-02-26 10:46:23', '2024-02-26 10:46:23'),
(2, 'MASTER', '2024-02-26 10:46:30', '2024-02-26 10:46:30'),
(3, 'DOCTORAT', '2024-02-26 10:46:41', '2024-02-26 10:46:41');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleDepartement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `intituleDepartement`, `created_at`, `updated_at`) VALUES
(1, 'ESITEC', '2024-02-26 10:45:45', '2024-02-26 10:45:45'),
(2, 'IMTN', '2024-02-26 10:45:54', '2024-02-26 10:45:54'),
(3, 'EPITA', '2024-02-26 10:46:00', '2024-02-26 10:46:00'),
(4, 'MERCURE', '2024-02-26 10:49:55', '2024-02-26 10:49:55'),
(5, 'IST', '2024-02-26 10:50:08', '2024-02-26 10:50:08');

-- --------------------------------------------------------

--
-- Structure de la table `encaissements`
--

CREATE TABLE `encaissements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montantTotalEngagement` decimal(15,2) NOT NULL,
  `montantTrancheEngagement` decimal(15,2) NOT NULL,
  `montantEncaisser` decimal(15,2) NOT NULL,
  `montantRestant` decimal(15,2) DEFAULT NULL,
  `dateEncaissement` datetime NOT NULL DEFAULT '2024-02-26 07:40:49',
  `modeEncaissement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Espece',
  `statusEncaissement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `encaissements`
--

INSERT INTO `encaissements` (`id`, `montantTotalEngagement`, `montantTrancheEngagement`, `montantEncaisser`, `montantRestant`, `dateEncaissement`, `modeEncaissement`, `statusEncaissement`, `created_at`, `updated_at`) VALUES
(1, '1500000.00', '300000.00', '300000.00', '1200000.00', '2024-02-26 11:04:59', 'ESPECE', 'PAYER', '2024-02-26 11:05:00', '2024-02-26 11:05:00'),
(2, '1500000.00', '300000.00', '300000.00', '900000.00', '2024-02-26 11:06:38', 'ESPECE', 'PAYER', '2024-02-26 11:06:38', '2024-02-26 11:06:38'),
(3, '1400000.00', '350000.00', '350000.00', '1050000.00', '2024-02-26 11:13:27', 'ESPECE', 'PAYER', '2024-02-26 11:13:28', '2024-02-26 11:13:28'),
(4, '1400000.00', '350000.00', '350000.00', '700000.00', '2024-02-26 11:14:27', 'ESPECE', 'PAYER', '2024-02-26 11:14:28', '2024-02-26 11:14:28'),
(5, '1400000.00', '350000.00', '350000.00', '350000.00', '2024-02-26 11:15:05', 'ESPECE', 'PAYER', '2024-02-26 11:15:06', '2024-02-26 11:15:06'),
(6, '1200000.00', '400000.00', '400000.00', '800000.00', '2024-02-26 11:37:40', 'ESPECE', 'PAYER', '2024-02-26 11:37:41', '2024-02-26 11:37:41'),
(7, '1000000.00', '250000.00', '250000.00', '750000.00', '2024-02-26 14:09:44', 'ESPECE', 'PAYER', '2024-02-26 14:09:45', '2024-02-26 14:09:45'),
(8, '1500000.00', '300000.00', '300000.00', '1200000.00', '2024-02-26 15:42:01', 'ESPECE', 'PAYER', '2024-02-26 15:42:02', '2024-02-26 15:42:02'),
(9, '1200000.00', '400000.00', '400000.00', '400000.00', '2024-05-25 01:35:44', 'ESPECE', 'PAYER', '2024-05-25 01:35:45', '2024-05-25 01:35:45');

-- --------------------------------------------------------

--
-- Structure de la table `engagements`
--

CREATE TABLE `engagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idProgramme` bigint(20) UNSIGNED NOT NULL,
  `idCampus` bigint(20) UNSIGNED NOT NULL,
  `idNiveau` bigint(20) UNSIGNED NOT NULL,
  `idRythme` bigint(20) UNSIGNED NOT NULL,
  `idAnneeAcademique` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `engagement_type_frais`
--

CREATE TABLE `engagement_type_frais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreTranche` int(11) NOT NULL,
  `montantTranche` decimal(15,2) NOT NULL,
  `totalFrais` decimal(15,2) NOT NULL,
  `idTypeFrais` bigint(20) UNSIGNED NOT NULL,
  `idProgramme` bigint(20) UNSIGNED NOT NULL,
  `idCampus` bigint(20) UNSIGNED NOT NULL,
  `idNiveau` bigint(20) UNSIGNED NOT NULL,
  `idRythme` bigint(20) UNSIGNED NOT NULL,
  `idAnneeAcademique` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `engagement_type_frais`
--

INSERT INTO `engagement_type_frais` (`id`, `nombreTranche`, `montantTranche`, `totalFrais`, `idTypeFrais`, `idProgramme`, `idCampus`, `idNiveau`, `idRythme`, `idAnneeAcademique`, `created_at`, `updated_at`) VALUES
(1, 5, '300000.00', '1500000.00', 1, 1, 1, 3, 1, 3, '2024-02-26 11:03:22', '2024-02-26 11:03:22'),
(2, 4, '350000.00', '1400000.00', 1, 3, 2, 3, 1, 3, '2024-02-26 11:09:35', '2024-02-26 11:09:35'),
(3, 3, '400000.00', '1200000.00', 1, 5, 3, 1, 1, 3, '2024-02-26 11:37:05', '2024-02-26 11:37:05'),
(4, 4, '250000.00', '1000000.00', 1, 1, 1, 3, 1, 3, '2024-02-26 14:09:19', '2024-02-26 14:09:19'),
(5, 5, '300000.00', '1500000.00', 1, 1, 1, 3, 1, 3, '2024-02-26 15:39:37', '2024-02-26 15:39:37');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresseEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailEtudiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nomEtudiant`, `prenomEtudiant`, `dateNaissance`, `adresseEtudiant`, `telephoneEtudiant`, `photoEtudiant`, `emailEtudiant`, `idUser`, `created_at`, `updated_at`) VALUES
(1, 'GADIO', 'Ramatoulaye', '1999-11-01', 'Grand-Yoff, dakar', '+221771086696', NULL, 'rama@gmail.com', 3, '2024-02-26 10:31:23', '2024-02-26 14:13:28'),
(2, 'GBENAFA', 'Alex', '2001-02-19', 'Niary Tally, Grand Dakar', '+221771086697', NULL, 'alex@gmail.com', 6, '2024-02-26 10:33:51', '2024-02-26 10:33:51'),
(3, 'ATANA', 'Nathanael', '2003-08-04', 'Liberte 6,dakar', '+221771086695', NULL, 'nathan@gmail.com', 7, '2024-02-26 10:35:21', '2024-02-26 10:35:21'),
(4, 'MOHAMED', 'Diallo', '1994-11-14', 'Point-E,dakar', '+221771086692', NULL, 'diallo@gmail.com', 8, '2024-02-26 10:37:34', '2024-02-26 10:37:34'),
(5, 'MANGASUBA', 'Bocal', '2001-03-18', 'CASTOR-DERKLE', '+221771086692', NULL, 'bocar@gmail.com', 9, '2024-02-26 10:44:35', '2024-02-26 10:44:35'),
(6, 'Bekale', 'Daniel', '2000-12-11', 'castor', '771975522', NULL, 'bekale@gmail.com', 10, '2024-02-26 14:08:13', '2024-02-26 14:08:13'),
(7, 'WANE', 'Malyck', '2000-12-12', 'Guedewaye', '771986733', NULL, 'malick@gmail.com', 11, '2024-02-26 14:55:00', '2024-02-26 14:55:00'),
(8, 'PAPI', 'DIOP', '2000-12-10', 'CASTOR, DAKAR', '772874421', NULL, 'papidiop@gmail.com', 13, '2024-02-26 15:36:38', '2024-02-26 15:36:38');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_encaissements`
--

CREATE TABLE `etudiant_encaissements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idEtudiant` bigint(20) UNSIGNED NOT NULL,
  `idEncaissement` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant_encaissements`
--

INSERT INTO `etudiant_encaissements` (`id`, `idEtudiant`, `idEncaissement`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-02-26 11:05:00', '2024-02-26 11:05:00'),
(2, 1, 2, '2024-02-26 11:06:38', '2024-02-26 11:06:38'),
(3, 2, 3, '2024-02-26 11:13:28', '2024-02-26 11:13:28'),
(4, 2, 4, '2024-02-26 11:14:28', '2024-02-26 11:14:28'),
(5, 2, 5, '2024-02-26 11:15:06', '2024-02-26 11:15:06'),
(6, 3, 6, '2024-02-26 11:37:41', '2024-02-26 11:37:41'),
(7, 6, 7, '2024-02-26 14:09:45', '2024-02-26 14:09:45'),
(8, 8, 8, '2024-02-26 15:42:02', '2024-02-26 15:42:02'),
(9, 3, 9, '2024-05-25 01:35:45', '2024-05-25 01:35:45');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_engagements`
--

CREATE TABLE `etudiant_engagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idEtudiant` bigint(20) UNSIGNED NOT NULL,
  `idEngagementTypeFrais` bigint(20) UNSIGNED NOT NULL,
  `nombreTrancheChoisie` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant_engagements`
--

INSERT INTO `etudiant_engagements` (`id`, `idEtudiant`, `idEngagementTypeFrais`, `nombreTrancheChoisie`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2024-02-26 11:03:22', '2024-02-26 11:03:22'),
(2, 2, 2, NULL, '2024-02-26 11:09:35', '2024-02-26 11:09:35'),
(3, 3, 3, NULL, '2024-02-26 11:37:05', '2024-02-26 11:37:05'),
(4, 6, 4, NULL, '2024-02-26 14:09:19', '2024-02-26 14:09:19'),
(5, 8, 5, NULL, '2024-02-26 15:39:37', '2024-02-26 15:39:37');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_engagement_montants`
--

CREATE TABLE `etudiant_engagement_montants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montantFixe` decimal(8,2) NOT NULL,
  `montantSolder` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(62, '2019_08_19_000000_create_failed_jobs_table', 1),
(63, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(64, '2024_01_10_181518_create_users_table', 1),
(65, '2024_01_11_172752_create_departements_table', 1),
(66, '2024_01_11_180950_create_admins_table', 1),
(67, '2024_01_11_181510_create_etudiants_table', 1),
(68, '2024_01_11_181612_create_type_frais_table', 1),
(69, '2024_01_29_020154_create_cycles_table', 1),
(70, '2024_01_29_020335_create_campuses_table', 1),
(71, '2024_01_29_020346_create_niveaux_table', 1),
(72, '2024_01_29_020414_create_rythmes_table', 1),
(73, '2024_01_29_020509_create_annee_academiques_table', 1),
(74, '2024_01_29_020611_create_programmes_table', 1),
(75, '2024_01_29_024558_create_engagements_table', 1),
(76, '2024_01_29_224420_create_engagement_type_frais_table', 1),
(77, '2024_01_29_224649_create_etudiant_engagements_table', 1),
(78, '2024_01_30_020355_create_etudiant_engagement_montants_table', 1),
(79, '2024_01_30_021928_create_encaissements_table', 1),
(80, '2024_02_20_031516_create_etudiant_encaissements_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `niveaux`
--

CREATE TABLE `niveaux` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleNiveau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`id`, `intituleNiveau`, `created_at`, `updated_at`) VALUES
(1, 'LICENCE 1', '2024-02-26 10:54:30', '2024-02-26 10:54:30'),
(2, 'LICENCE 2', '2024-02-26 10:54:39', '2024-02-26 10:54:39'),
(3, 'LICENCE 3', '2024-02-26 10:54:47', '2024-02-26 10:54:47'),
(4, 'MASTER 1', '2024-02-26 10:54:54', '2024-02-26 10:54:54'),
(5, 'MASTER 2', '2024-02-26 10:55:01', '2024-02-26 10:55:01');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleProgramme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionProgramme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idDepartement` bigint(20) UNSIGNED NOT NULL,
  `idCycle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmes`
--

INSERT INTO `programmes` (`id`, `intituleProgramme`, `descriptionProgramme`, `idDepartement`, `idCycle`, `created_at`, `updated_at`) VALUES
(1, 'BACHELOR GENIE LOGICIEL', 'GL', 1, 1, '2024-02-26 10:48:52', '2024-02-26 10:48:52'),
(2, 'Bachelor en Agro business et Entreprenariat', 'BAE', 4, 1, '2024-02-26 10:50:51', '2024-02-26 10:50:51'),
(3, 'BACHELOR RESEAU SYSTEME ET SECURITE', 'RSS', 1, 1, '2024-02-26 10:51:29', '2024-02-26 10:51:29'),
(4, 'Licence Transport Logistique', 'Transport Logistique', 5, 1, '2024-02-26 10:52:30', '2024-02-26 10:52:30'),
(5, 'BACHELOR GENIE INFORMATIQUE', 'INFORMATIQUE', 1, 1, '2024-02-26 10:54:05', '2024-02-26 10:54:05');

-- --------------------------------------------------------

--
-- Structure de la table `rythmes`
--

CREATE TABLE `rythmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleRythmes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rythmes`
--

INSERT INTO `rythmes` (`id`, `intituleRythmes`, `created_at`, `updated_at`) VALUES
(1, 'JOUR', '2024-02-26 10:55:25', '2024-02-26 10:55:25'),
(2, 'SOIR', '2024-02-26 10:55:30', '2024-02-26 10:55:30'),
(3, 'EN LIGNE', '2024-02-26 10:55:38', '2024-02-26 10:55:38'),
(4, 'WEEK-END', '2024-02-26 10:55:48', '2024-02-26 10:55:48');

-- --------------------------------------------------------

--
-- Structure de la table `type_frais`
--

CREATE TABLE `type_frais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intituleTypeFrais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_frais`
--

INSERT INTO `type_frais` (`id`, `intituleTypeFrais`, `created_at`, `updated_at`) VALUES
(1, 'SCOLARITE', '2024-02-26 10:58:35', '2024-02-26 10:58:35');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'glainnguema@gmail.com', NULL, '$2y$12$ewFgJ0jp9fMITrbmIi6Xm.anZRMVHqAYtHMR2O241CKX3KsZ4.Waq', 'Super-Admin', NULL, '2024-02-26 10:14:01', '2024-02-26 10:24:26'),
(3, 'rama@gmail.com', NULL, '$2y$12$YtmGKcm7.kQXoUk9dKz4peK.1eRXEk3AM4DXaimq163xhf23jDzYW', 'Etudiant', NULL, '2024-02-26 10:16:13', '2024-02-26 14:14:04'),
(5, 'bocoum@gmail.com', NULL, '$2y$12$JRtLTg9oRP6Kh7dJpwdWc.G/XFrpsWA8uJmv7BXX6TziwV5c7ArEy', 'Admin', NULL, '2024-02-26 10:18:13', '2024-02-26 10:29:07'),
(6, 'alex@gmail.com', NULL, '$2y$12$fu5PmD4vGsc8ovAQfePsoe0tYOAK3a2IlyuSZ9Qol02Btx6VfcdT2', 'Etudiant', NULL, '2024-02-26 10:19:47', '2024-02-26 10:33:51'),
(7, 'nathan@gmail.com', NULL, '$2y$12$9kgv7hnT/M0SI5iCNzqS0utL9S5q5eC11W/bfG3RPARp7fPQYQYnq', 'Etudiant', NULL, '2024-02-26 10:20:23', '2024-02-26 10:35:21'),
(8, 'diallo@gmail.com', NULL, '$2y$12$avZsnNaP9GckAgACHSqWC.jQAkLIziucaV7hfjhBFE.suZpfDq6Xa', 'Etudiant', NULL, '2024-02-26 10:20:53', '2024-02-26 10:37:34'),
(9, 'bocar@gmail.com', NULL, '$2y$12$aM8zRIUsQROY45VdZJzrBOir3m5kK2rPKkSSnbpF037h7tcMSIjUq', 'Etudiant', NULL, '2024-02-26 10:40:43', '2024-02-26 10:44:35'),
(10, 'bekale@gmail.com', NULL, '$2y$12$REtxTNz41kspQOJ4VsnddejefidEFuyy5ZWBmf33obHr8c3.S/GOS', 'Etudiant', NULL, '2024-02-26 10:41:20', '2024-02-26 14:08:13'),
(11, 'malick@gmail.com', NULL, '$2y$12$Rb2CxjQDooXFTvlf.7s83OOqbr3sikEfQ/hDRyNDv84.ou.9Y58q.', 'Etudiant', NULL, '2024-02-26 10:43:41', '2024-02-26 14:55:00'),
(12, 'abdoulayediallo@gmail.com', NULL, '$2y$12$WgfXAEP2Vn.EqsWrz9RNEOSOPi.I0TRo7.O7nW/hPlT9Qvnp9I0ji', 'Admin', NULL, '2024-02-26 11:45:36', '2024-02-26 11:46:49'),
(13, 'papidiop@gmail.com', NULL, '$2y$12$QrPmBUJLhv7qhAvFthRD.OEYJR4ffLyF/VFwRE/jM1DwYTZhrMlMu', 'Etudiant', NULL, '2024-02-26 15:35:56', '2024-02-26 15:36:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_emailadmin_unique` (`emailAdmin`),
  ADD KEY `admins_iduser_foreign` (`idUser`);

--
-- Index pour la table `annee_academiques`
--
ALTER TABLE `annee_academiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `encaissements`
--
ALTER TABLE `encaissements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `engagements`
--
ALTER TABLE `engagements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engagements_idprogramme_foreign` (`idProgramme`),
  ADD KEY `engagements_idcampus_foreign` (`idCampus`),
  ADD KEY `engagements_idniveau_foreign` (`idNiveau`),
  ADD KEY `engagements_idrythme_foreign` (`idRythme`),
  ADD KEY `engagements_idanneeacademique_foreign` (`idAnneeAcademique`);

--
-- Index pour la table `engagement_type_frais`
--
ALTER TABLE `engagement_type_frais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engagement_type_frais_idtypefrais_foreign` (`idTypeFrais`),
  ADD KEY `engagement_type_frais_idprogramme_foreign` (`idProgramme`),
  ADD KEY `engagement_type_frais_idcampus_foreign` (`idCampus`),
  ADD KEY `engagement_type_frais_idniveau_foreign` (`idNiveau`),
  ADD KEY `engagement_type_frais_idrythme_foreign` (`idRythme`),
  ADD KEY `engagement_type_frais_idanneeacademique_foreign` (`idAnneeAcademique`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etudiants_emailetudiant_unique` (`emailEtudiant`),
  ADD KEY `etudiants_iduser_foreign` (`idUser`);

--
-- Index pour la table `etudiant_encaissements`
--
ALTER TABLE `etudiant_encaissements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiant_encaissements_idetudiant_foreign` (`idEtudiant`),
  ADD KEY `etudiant_encaissements_idencaissement_foreign` (`idEncaissement`);

--
-- Index pour la table `etudiant_engagements`
--
ALTER TABLE `etudiant_engagements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiant_engagements_idetudiant_foreign` (`idEtudiant`),
  ADD KEY `etudiant_engagements_idengagementtypefrais_foreign` (`idEngagementTypeFrais`);

--
-- Index pour la table `etudiant_engagement_montants`
--
ALTER TABLE `etudiant_engagement_montants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveaux`
--
ALTER TABLE `niveaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programmes_iddepartement_foreign` (`idDepartement`),
  ADD KEY `programmes_idcycle_foreign` (`idCycle`);

--
-- Index pour la table `rythmes`
--
ALTER TABLE `rythmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_frais`
--
ALTER TABLE `type_frais`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `annee_academiques`
--
ALTER TABLE `annee_academiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cycles`
--
ALTER TABLE `cycles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `encaissements`
--
ALTER TABLE `encaissements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `engagements`
--
ALTER TABLE `engagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `engagement_type_frais`
--
ALTER TABLE `engagement_type_frais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `etudiant_encaissements`
--
ALTER TABLE `etudiant_encaissements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `etudiant_engagements`
--
ALTER TABLE `etudiant_engagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etudiant_engagement_montants`
--
ALTER TABLE `etudiant_engagement_montants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `niveaux`
--
ALTER TABLE `niveaux`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rythmes`
--
ALTER TABLE `rythmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_frais`
--
ALTER TABLE `type_frais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `engagements`
--
ALTER TABLE `engagements`
  ADD CONSTRAINT `engagements_idanneeacademique_foreign` FOREIGN KEY (`idAnneeAcademique`) REFERENCES `annee_academiques` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagements_idcampus_foreign` FOREIGN KEY (`idCampus`) REFERENCES `campuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagements_idniveau_foreign` FOREIGN KEY (`idNiveau`) REFERENCES `niveaux` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagements_idprogramme_foreign` FOREIGN KEY (`idProgramme`) REFERENCES `programmes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagements_idrythme_foreign` FOREIGN KEY (`idRythme`) REFERENCES `rythmes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `engagement_type_frais`
--
ALTER TABLE `engagement_type_frais`
  ADD CONSTRAINT `engagement_type_frais_idanneeacademique_foreign` FOREIGN KEY (`idAnneeAcademique`) REFERENCES `annee_academiques` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagement_type_frais_idcampus_foreign` FOREIGN KEY (`idCampus`) REFERENCES `campuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagement_type_frais_idniveau_foreign` FOREIGN KEY (`idNiveau`) REFERENCES `niveaux` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagement_type_frais_idprogramme_foreign` FOREIGN KEY (`idProgramme`) REFERENCES `programmes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagement_type_frais_idrythme_foreign` FOREIGN KEY (`idRythme`) REFERENCES `rythmes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `engagement_type_frais_idtypefrais_foreign` FOREIGN KEY (`idTypeFrais`) REFERENCES `type_frais` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiant_encaissements`
--
ALTER TABLE `etudiant_encaissements`
  ADD CONSTRAINT `etudiant_encaissements_idencaissement_foreign` FOREIGN KEY (`idEncaissement`) REFERENCES `encaissements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudiant_encaissements_idetudiant_foreign` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiant_engagements`
--
ALTER TABLE `etudiant_engagements`
  ADD CONSTRAINT `etudiant_engagements_idengagementtypefrais_foreign` FOREIGN KEY (`idEngagementTypeFrais`) REFERENCES `engagement_type_frais` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudiant_engagements_idetudiant_foreign` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `programmes`
--
ALTER TABLE `programmes`
  ADD CONSTRAINT `programmes_idcycle_foreign` FOREIGN KEY (`idCycle`) REFERENCES `cycles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `programmes_iddepartement_foreign` FOREIGN KEY (`idDepartement`) REFERENCES `departements` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
