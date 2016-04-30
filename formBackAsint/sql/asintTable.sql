CREATE TABLE `asintTable` (
`id` int(11) NOT NULL,
`nom` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`prenom` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`poste` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
`promo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `asintTable`
--
ALTER TABLE `asintTable`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `asintTable`
--
ALTER TABLE `asintTable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;