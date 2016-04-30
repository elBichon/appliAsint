-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 24 Décembre 2015 à 17:53
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dbAsint`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherentTable`
--

CREATE TABLE `adherentTable` (
`id` int(11) NOT NULL,
`nom` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`prenom` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`ecole` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`sexe` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`promo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `adherentTable`
--

INSERT INTO `adherentTable` (`id`, `nom`, `prenom`, `ecole`, `sexe`, `promo`) VALUES
(3, 'c', 'c', 'tem', 'h', 12345),
(4, 'd', 'd', 'tem', 'h', 1234567),
(5, 'a', 'a', 'tem', 'h', 123456),
(6, 'a', 'a', 'tem', 'h', 123456);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherentTable`
--
ALTER TABLE `adherentTable`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adherentTable`
--
ALTER TABLE `adherentTable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;