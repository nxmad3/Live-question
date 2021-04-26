-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 12 Mars 2021 à 22:29
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `live_question`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idContact` int(11) NOT NULL,
  `nomContact` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `idQuestion` int(11) NOT NULL,
  `titreQuestion` varchar(45) DEFAULT NULL,
  `cat_idQuestion` int(11) DEFAULT NULL,
  `auteur_idQustion` int(11) DEFAULT NULL,
  `date_creaQuestion` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `user_idReponse` int(11) DEFAULT NULL,
  `question_idReponse` int(11) DEFAULT NULL,
  `dateReponse` datetime DEFAULT NULL,
  `rep_questReponse` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `pseudoUtilisateur` varchar(255) DEFAULT NULL,
  `emailUtilisateur` varchar(255) DEFAULT NULL,
  `mot_de_passeUtilisateur` varchar(255) DEFAULT NULL,
  `avatarUtilisateur` varchar(255) DEFAULT NULL,
  `genreUtilisateur` char(1) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `roleUtilisateur` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idContact`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idQuestion`),
  ADD KEY `fk_cat_id` (`cat_idQuestion`),
  ADD KEY `fk_aut_id` (`auteur_idQustion`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD KEY `fk_user_id` (`user_idReponse`),
  ADD KEY `fk_quest_id` (`question_idReponse`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `idQuestion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
