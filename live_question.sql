-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 30 avr. 2021 à 16:38
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `live_question`
--
CREATE DATABASE IF NOT EXISTS `live_question` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `live_question`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(8, 'anime'),
(7, 'voiture');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `idQuestion` int NOT NULL AUTO_INCREMENT,
  `auteur_idQustion` int DEFAULT NULL,
  `titreQuestion` varchar(45) DEFAULT NULL,
  `sujetQuestion` varchar(255) NOT NULL,
  `cat_idQuestion` int DEFAULT NULL,
  `date_creaQuestion` date DEFAULT NULL,
  PRIMARY KEY (`idQuestion`),
  KEY `fk_cat_id` (`cat_idQuestion`),
  KEY `fk_aut_id` (`auteur_idQustion`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`idQuestion`, `auteur_idQustion`, `titreQuestion`, `sujetQuestion`, `cat_idQuestion`, `date_creaQuestion`) VALUES
(1, 1, 'j\'aime voirture', '', 1, '2021-04-20'),
(2, 1, 'j\'aime voirture', '', 1, '2021-04-20'),
(3, NULL, 'test', 'reussi', 8, NULL),
(4, NULL, 'test', 'reussi avec la date', 8, '2021-04-20'),
(5, 1, 'test avec auteur ', 'sa marche ?', 7, '2021-04-23'),
(6, 1, 'test avec auteur ', 'sa marche ?', 7, '2021-04-23');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_idReponse` int NOT NULL,
  `question_idReponse` int NOT NULL,
  `dateReponse` datetime DEFAULT NULL,
  `rep_questReponse` text,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `user_idReponse` (`user_idReponse`,`question_idReponse`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `user_idReponse`, `question_idReponse`, `dateReponse`, `rep_questReponse`) VALUES
(1, 1, 0, '2021-04-30 00:00:00', 'aty,ytgfd'),
(3, 1, 0, '2021-04-30 00:00:00', 'aty,ytgfd'),
(4, 1, 0, '2021-04-30 00:00:00', 'test'),
(5, 1, 0, '2021-04-30 00:00:00', 'test'),
(6, 1, 0, '2021-04-30 00:00:00', 'test'),
(7, 1, 0, '2021-04-30 00:00:00', 'test'),
(8, 1, 5, '2021-04-30 00:00:00', 'test'),
(9, 1, 5, '2021-04-30 00:00:00', 'test'),
(10, 1, 6, '2021-04-30 00:00:00', 'toto'),
(11, 1, 6, '2021-04-30 00:00:00', 'toto'),
(12, 1, 6, '2021-04-30 00:00:00', 'toto'),
(13, 1, 6, '2021-04-30 00:00:00', 'toto');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateurs` int NOT NULL AUTO_INCREMENT,
  `pseudoUtilisateur` varchar(255) DEFAULT NULL,
  `emailUtilisateur` varchar(255) DEFAULT NULL,
  `mot_de_passeUtilisateur` varchar(255) DEFAULT NULL,
  `avatarUtilisateur` varchar(255) DEFAULT NULL,
  `genreUtilisateur` varchar(255) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `roleUtilisateur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateurs`)
) ENGINE=MyISAM AUTO_INCREMENT=327 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `pseudoUtilisateur`, `emailUtilisateur`, `mot_de_passeUtilisateur`, `avatarUtilisateur`, `genreUtilisateur`, `date_inscription`, `roleUtilisateur`) VALUES
(1, 'test', 'test@test.fr', 'test', NULL, 'test', NULL, NULL),
(326, 'test2', 'azerty@test.fr', 'test', NULL, 'mdr', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
