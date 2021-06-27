-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 27 juin 2021 à 09:16
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
-- Base de données : `finelia`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` int(255) NOT NULL AUTO_INCREMENT,
  `nomEtudiant` varchar(50) NOT NULL,
  `prenomEtudiant` varchar(50) NOT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(255) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(50) NOT NULL,
  `coefficient` int(255) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idNote` int(255) NOT NULL AUTO_INCREMENT,
  `resultat` int(255) NOT NULL,
  `idEtudiant` int(255) NOT NULL,
  `idMatiere` int(255) NOT NULL,
  PRIMARY KEY (`idNote`),
  KEY `etudiant_fk1` (`idEtudiant`),
  KEY `matiere` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `etudiant_fk1` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiant` (`idEtudiant`),
  ADD CONSTRAINT `matiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
