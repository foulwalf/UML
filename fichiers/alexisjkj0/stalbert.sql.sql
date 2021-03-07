-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 18 fév. 2021 à 00:36
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stalbert`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID_ARTICLE` int(11) NOT NULL,
  `TITRE_ARTICLE` text DEFAULT NULL,
  `LIBELLE_ARTICLE` text DEFAULT NULL,
  `DATE_PUBLICATION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IMAGE_ARTICLE` varchar(200) DEFAULT NULL,
  `auteur_article` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commissions`
--

CREATE TABLE `commissions` (
  `ID_COMMISSION` int(11) NOT NULL,
  `NOM_COMMISSION` char(50) DEFAULT NULL,
  `PRESIDENT_COMMISSION` text DEFAULT NULL,
  `CONTACT` int(11) DEFAULT NULL,
  `photo_com` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `ID_CONTACT` int(11) NOT NULL,
  `NOM` text DEFAULT NULL,
  `E_MAIL` char(50) DEFAULT NULL,
  `CONTENU_MESSAGE` longtext DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `ID_EVENEMENT` int(11) NOT NULL,
  `TITRE_EVENEMENT` text DEFAULT NULL,
  `LIBELLE_EVENEMENT` text DEFAULT NULL,
  `DATE_EVENEMENT` datetime DEFAULT NULL,
  `LIEU_EVENEMENT` char(50) DEFAULT NULL,
  `NOM_REPRESENTANT` char(255) DEFAULT NULL,
  `etat` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pretres`
--

CREATE TABLE `pretres` (
  `ID_PRETRE` int(11) NOT NULL,
  `NOM_PRETRE` text DEFAULT NULL,
  `PRENOM_PRETRE` text DEFAULT NULL,
  `FONCTION` char(15) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `photo_pretre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `verset`
--

CREATE TABLE `verset` (
  `ID_VERSET` int(11) NOT NULL,
  `LIBELLE_VERSET` longtext DEFAULT NULL,
  `REFERENCE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Index pour la table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`ID_COMMISSION`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID_CONTACT`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`ID_EVENEMENT`);

--
-- Index pour la table `pretres`
--
ALTER TABLE `pretres`
  ADD PRIMARY KEY (`ID_PRETRE`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `verset`
--
ALTER TABLE `verset`
  ADD PRIMARY KEY (`ID_VERSET`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `ID_COMMISSION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID_CONTACT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `ID_EVENEMENT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pretres`
--
ALTER TABLE `pretres`
  MODIFY `ID_PRETRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `verset`
--
ALTER TABLE `verset`
  MODIFY `ID_VERSET` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
