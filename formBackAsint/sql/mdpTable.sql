-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 24 Décembre 2015 à 17:54
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dbAsint`
--

-- --------------------------------------------------------

--
-- Structure de la table `mdpTable`
--

CREATE TABLE `mdpTable` (
`id` int(11) NOT NULL,
`login` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`passwd` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `mdpTable`
--

INSERT INTO `mdpTable` (`id`, `login`, `passwd`) VALUES
(1, 'test', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mdpTable`
--
ALTER TABLE `mdpTable`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mdpTable`
--
ALTER TABLE `mdpTable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;