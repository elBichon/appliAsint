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
-- Structure de la table `eventTable`
--

CREATE TABLE `eventTable` (
`id` int(11) NOT NULL,
`nomEvent` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`prenomEvent` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`type` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`event` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `eventTable`
--

INSERT INTO `eventTable` (`id`, `nomEvent`, `prenomEvent`, `type`, `event`) VALUES
(1, 'corentin', 'bresteau', 'gratuit', 'wes');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `eventTable`
--
ALTER TABLE `eventTable`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `eventTable`
--
ALTER TABLE `eventTable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;