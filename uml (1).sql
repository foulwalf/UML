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

INSERT INTO `beneficiaire` (`idbenef`, `nombenef`, `prenombenef`, `datenaissbenef`, `lieudenaissbenef`, `diplome`, `filiere`, `email`, `contact`, `nomparent`, `contactparent`, `niveau`, `mdp`, `matricule`, `valide`, `etat`, `motif`) VALUES
(1, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'Informatique', 'ale@gmail.com', '89638489', NULL, '5778', 'Licence 1', 'dd', '05403-LP1', NULL, 0, 'vous documents ne sont pas conformes'),
(2, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'Informatique', 'ale@gmail.com', '89638489', NULL, '5778', 'Licence 1', 'dd', '3BBF0-LP1', 1, 1, NULL),
(3, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'g', '0D6D4-LP1', NULL, NULL, NULL),
(4, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'dd', '461FA-LP1', NULL, NULL, NULL),
(5, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ddd', 'C59FC-LP1', NULL, NULL, NULL),
(6, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', 'D4B44-LP1', NULL, NULL, NULL),
(7, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', 'B0C07-LP1', NULL, NULL, NULL),
(8, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', 'D6076-LP1', NULL, NULL, NULL),
(9, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', '0B546-LP1', NULL, NULL, NULL),
(10, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'dd', 'A90F4-LP1', NULL, NULL, NULL),
(11, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'dd', 'B3A00-LP1', NULL, NULL, NULL),
(12, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', '9EE84-LP1', NULL, NULL, NULL),
(13, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ss', '896D0-LP1', NULL, NULL, NULL),
(14, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'dd', '80B4D-LP1', NULL, NULL, NULL),
(15, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'ddd', '04205-LP1', NULL, NULL, NULL),
(16, 'dfzf', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'dd', 'EC4A0-LP1', NULL, NULL, NULL),
(17, 'alexis', 'jkj', '5111-02-10', 'jklkjkjlkjkljkj', 'bac', 'info', 'ale@gmail.com', '89638489', NULL, '5778', 'lp1', 'jj', '06DE8-LP1', NULL, NULL, NULL);

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

INSERT INTO `versement` (`idversement`, `codeversement`, `dateversement`, `montantversement`, `beneficiaire_idbenef`) VALUES
(1, '3BBF0-LP1-001', '2021-03-07', 10000, 2);

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
