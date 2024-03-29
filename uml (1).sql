-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 08 mars 2021 à 13:15
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
-- Base de données : `uml`
--
CREATE DATABASE IF NOT EXISTS `uml` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uml`;

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `idbenef` int(11) NOT NULL,
  `nombenef` varchar(45) NOT NULL,
  `prenombenef` varchar(100) NOT NULL,
  `datenaissbenef` date NOT NULL,
  `lieudenaissbenef` varchar(45) DEFAULT NULL,
  `diplome` varchar(45) DEFAULT NULL,
  `filiere` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `nomparent` varchar(100) DEFAULT NULL,
  `contactparent` varchar(45) DEFAULT NULL,
  `niveau` text NOT NULL,
  `mdp` text NOT NULL,
  `matricule` text NOT NULL,
  `valide` int(1) DEFAULT NULL,
  `etat` int(1) DEFAULT NULL,
  `motif` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `beneficiaire`
--


-- --------------------------------------------------------

--
-- Structure de la table `versement`
--

CREATE TABLE `versement` (
  `idversement` int(11) NOT NULL,
  `codeversement` varchar(45) DEFAULT NULL,
  `dateversement` date DEFAULT NULL,
  `montantversement` int(11) NOT NULL,
  `beneficiaire_idbenef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `versement`
--



--
-- Index pour les tables déchargées
--

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`idbenef`);

--
-- Index pour la table `versement`
--
ALTER TABLE `versement`
  ADD PRIMARY KEY (`idversement`,`beneficiaire_idbenef`),
  ADD KEY `fk_versement_beneficiaire_idx` (`beneficiaire_idbenef`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `idbenef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `versement`
--
ALTER TABLE `versement`
  MODIFY `idversement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `versement`
--
ALTER TABLE `versement`
  ADD CONSTRAINT `fk_versement_beneficiaire` FOREIGN KEY (`beneficiaire_idbenef`) REFERENCES `beneficiaire` (`idbenef`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
