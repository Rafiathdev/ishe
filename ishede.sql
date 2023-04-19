-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 18 avr. 2023 à 18:07
-- Version du serveur : 8.0.32-0ubuntu0.22.04.2
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ishede`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nom_a` varchar(255) NOT NULL,
  `prenom_a` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` char(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom_a`, `prenom_a`, `adresse`, `email`, `password`, `create_at`, `update_at`, `is_delete`) VALUES
(1, '', '', 'cotonou', 'rafi@gmail.com', 'ola', '2023-04-18 03:27:13', '2023-04-18 03:27:13', NULL),
(2, '', '', 'xcvb', 'hhh@gmail.com', 'n,', '2023-04-18 03:28:48', '2023-04-18 03:28:48', NULL),
(3, '', '', 'xcvb', 'hhh@gmail.com', 'n,', '2023-04-18 03:29:39', '2023-04-18 03:29:39', NULL),
(4, 'ola', 'kemi', 'xcvb', 'hhh@gmail.com', 'n,', '2023-04-18 03:30:52', '2023-04-18 03:30:52', NULL),
(5, 'ola', 'kemi', 'xcvb', 'hhh@gmail.com', 'n,', '2023-04-18 03:33:30', '2023-04-18 03:33:30', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Appartenir`
--

CREATE TABLE `Appartenir` (
  `id_candidat` int NOT NULL,
  `id_diplome` int NOT NULL,
  `date_obt` date DEFAULT NULL,
  `pdf_diplome` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id` int NOT NULL,
  `nom_c` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `prenom_c` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `sexe` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `date_n` date NOT NULL,
  `niveau` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `nationalite` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `annee_experience` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `departement` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `pdf_cv` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `is_delete` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `nom_c`, `prenom_c`, `sexe`, `date_n`, `niveau`, `nationalite`, `adresse`, `qualification`, `annee_experience`, `telephone`, `departement`, `ville`, `pdf_cv`, `photo`, `email`, `password`, `create_at`, `update_at`, `is_delete`) VALUES
(1, 'ola', 'kemi', 'F ', '2000-10-12', 'C', 'b', 'xcvb', 'c', '5', '234', 'A', 'C', 'Plan de rafiath et de joel.pdf', 'doun_img2.png', 'hhh@gmail.com', '123', NULL, NULL, NULL),
(2, 'sdfg', 'kemi', 'F ', '2008-02-02', 'C', 'n', 'k', 'l', '1', '556', 'A', 'C', 'Plan de rafiath et de joel.pdf', 'doun_img2.png', 'fifamesamuel@gmail.com', '123', NULL, NULL, NULL),
(3, 'sdfg', 'kemi', 'F ', '2023-04-18', 'C', 'b', 'xcvb', 'c', '5', '234', 'A', 'C', 'Plan de rafiath et de joel.pdf', 'Sans .jpeg', 'gggg@gmail.com', 'ola', NULL, NULL, NULL),
(4, 'i', 'i', 'F ', '2023-04-11', 'C', 'i', 'i', 'i', '5', '5', 'A', 'i', '', 'téléchargement.jpeg', 'b@gmail.com', '12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id_candidature` int NOT NULL,
  `id_candidat` int DEFAULT NULL,
  `id_offre` int DEFAULT NULL,
  `id_diplom` int DEFAULT NULL,
  `rejet` tinyint(1) DEFAULT NULL,
  `accept` tinyint(1) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE `diplome` (
  `id_diplom` int NOT NULL,
  `nom_diplom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Employeur`
--

CREATE TABLE `Employeur` (
  `id` int NOT NULL,
  `nom_U` varchar(255) NOT NULL,
  `nom_E` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nºifu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rccm` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` char(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Employeur`
--

INSERT INTO `Employeur` (`id`, `nom_U`, `nom_E`, `nºifu`, `rccm`, `telephone`, `adresse`, `site_web`, `email`, `password`, `created_at`, `updated_at`, `is_delete`) VALUES
(1, 'consu', 'food', '400', '562677', '234', 'xcvb', 'OZK', 'consi@gmail.com', '123', '2023-04-17 15:26:02', '2023-04-17 15:26:02', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Entretien`
--

CREATE TABLE `Entretien` (
  `id_entretien` int NOT NULL,
  `id_candidat` int DEFAULT NULL,
  `id_offre` int DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Offre`
--

CREATE TABLE `Offre` (
  `id_offre` int NOT NULL,
  `id_E` int NOT NULL,
  `id_c` int NOT NULL,
  `typ_offre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `annee_experience` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `connaissance_req` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `langue` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `specialite` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `critere` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `diplome` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `nbr_poste` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `comp_req` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `act_principal` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `apt_req` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `date_exp` datetime NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) DEFAULT '0',
  `published` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD PRIMARY KEY (`id_candidat`,`id_diplome`),
  ADD KEY `id_diplome` (`id_diplome`);

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id_candidature`),
  ADD KEY `id_candidat` (`id_candidat`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `id_diplom` (`id_diplom`);

--
-- Index pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`id_diplom`);

--
-- Index pour la table `Employeur`
--
ALTER TABLE `Employeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Entretien`
--
ALTER TABLE `Entretien`
  ADD PRIMARY KEY (`id_entretien`),
  ADD KEY `id_candidat` (`id_candidat`),
  ADD KEY `id_offre` (`id_offre`);

--
-- Index pour la table `Offre`
--
ALTER TABLE `Offre`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `id_E` (`id_E`),
  ADD KEY `id_c` (`id_c`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id_candidature` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `diplome`
--
ALTER TABLE `diplome`
  MODIFY `id_diplom` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Employeur`
--
ALTER TABLE `Employeur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Entretien`
--
ALTER TABLE `Entretien`
  MODIFY `id_entretien` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Offre`
--
ALTER TABLE `Offre`
  MODIFY `id_offre` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD CONSTRAINT `Appartenir_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`),
  ADD CONSTRAINT `Appartenir_ibfk_2` FOREIGN KEY (`id_diplome`) REFERENCES `diplome` (`id_diplom`);

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `candidature_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`),
  ADD CONSTRAINT `candidature_ibfk_2` FOREIGN KEY (`id_offre`) REFERENCES `Offre` (`id_offre`),
  ADD CONSTRAINT `candidature_ibfk_3` FOREIGN KEY (`id_diplom`) REFERENCES `diplome` (`id_diplom`);

--
-- Contraintes pour la table `Entretien`
--
ALTER TABLE `Entretien`
  ADD CONSTRAINT `Entretien_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`),
  ADD CONSTRAINT `Entretien_ibfk_2` FOREIGN KEY (`id_offre`) REFERENCES `Offre` (`id_offre`);

--
-- Contraintes pour la table `Offre`
--
ALTER TABLE `Offre`
  ADD CONSTRAINT `Offre_ibfk_1` FOREIGN KEY (`id_E`) REFERENCES `Employeur` (`id`),
  ADD CONSTRAINT `Offre_ibfk_2` FOREIGN KEY (`id_c`) REFERENCES `candidat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
