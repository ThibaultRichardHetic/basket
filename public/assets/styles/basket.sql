-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 12 avr. 2019 à 03:02
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `basket-login`
--

-- --------------------------------------------------------

--
-- Structure de la table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `leagues`
--

INSERT INTO `leagues` (`id`, `name`) VALUES
(1, 'coolTeam'),
(2, 'kikouLouLou'),
(3, 'jacklanders'),
(4, 'lede'),
(5, 'dedede'),
(6, 'jfrjvhvjf'),
(7, 'ultitest'),
(8, 'ultitestfrfrfrf'),
(9, 'avecdeux'),
(10, 'avecles4'),
(11, 'lolopopop'),
(12, 'mljffrf');

-- --------------------------------------------------------

--
-- Structure de la table `league_users`
--

CREATE TABLE `league_users` (
  `id` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_player` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `league_users`
--

INSERT INTO `league_users` (`id`, `id_league`, `id_user`, `id_player`) VALUES
(1, 2, 1, 4),
(2, 2, 3, 0),
(3, 2, 5, 0),
(4, 1, 9, 0),
(5, 2, 9, 0),
(6, 3, 9, 0),
(7, 8, 8, 3),
(8, 9, 8, 14),
(9, 9, 1, 2),
(10, 10, 8, 1),
(11, 10, 1, 10),
(12, 10, 7, 7),
(13, 10, 9, 11),
(14, 11, 8, 0),
(15, 11, 1, 0),
(16, 11, 7, 5),
(17, 11, 9, 6),
(18, 12, 8, 0),
(19, 12, 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `player_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `player_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `player_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `player_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `player_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `score_1` int(11) NOT NULL,
  `score_2` int(11) NOT NULL,
  `score_3` int(11) NOT NULL,
  `score_4` int(11) NOT NULL,
  `score_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id`, `player_1`, `player_2`, `player_3`, `player_4`, `player_5`, `score_1`, `score_2`, `score_3`, `score_4`, `score_5`) VALUES
(1, 'Antetokounmpo', 'Batum', 'Allen', 'Brewer', 'Ajinca', 0, 0, 0, 0, 0),
(2, 'Bradley', 'Bacon', 'Bender', 'Brooks', 'Bledsoe', 0, 0, 0, 0, 0),
(3, 'Bibbs', 'Beasley', 'Artis', 'Barton', 'Adams', 0, 0, 0, 0, 0),
(4, 'Birch', 'Briscoe', 'Bamba', 'Acy', 'Bluiett', 0, 0, 0, 0, 0),
(5, 'Brooks', 'Barnes', 'Beal', 'Arthur', 'Bomba', 0, 0, 0, 0, 0),
(6, 'Bridges', 'Adams', 'Anderson', 'Ayton', 'Bacon', 0, 0, 0, 0, 0),
(7, 'Booker', 'Brooks', 'Bomba', 'Baynes', 'Anderson', 0, 0, 0, 0, 0),
(8, 'Bomba', 'Asik', 'Acy', 'Anderson', 'Adebayo', 0, 0, 0, 0, 0),
(9, 'Adams', 'Bacon', 'Bogdanovic', 'Brown', 'Beasley', 0, 0, 0, 0, 0),
(10, 'Bogdanovic', 'Barford', 'Brooks', 'Brooks', 'Boucher', 0, 0, 0, 0, 0),
(11, 'Anunoby', 'Allen', 'Briscoe', 'Bazemore', 'Bogut', 0, 0, 0, 0, 0),
(12, 'Bluiett', 'Bjelica', 'Aldridge', 'Asik', 'Bender', 0, 0, 0, 0, 0),
(13, 'Bazemore', 'Allen', 'Anthony', 'Brooks', 'Brooks', 0, 0, 0, 0, 0),
(14, 'Bibbs', 'Adams', 'Bamba', 'Bender', 'Blue', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `team_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `team_name`, `mail`, `password`) VALUES
(1, 'thibault', 'richard', 'les copains', 'thibault.richard2000@gmail.com', 'deb1cbc23ac02175e884e57b45c6d1b2b45c69b4'),
(2, 'jack', 'dutron', 'koolteam', 'jack@gmail.com', '16218158d89eeef848468f96c894a07a8e68bf3e'),
(3, 'thibault', 'richard', 'lespotes', 'thibault.rez@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2'),
(4, 'Thibault', 'Richard', 'Thibault Richard', 'richard.thibault.contact@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68'),
(5, 'Manoun', 'Bouet', 'Proutsipou', 'manon.buee@hetic.net', 'cb09f9608c5358f739ff494e8470ea753ea8e2f9'),
(6, 'é&é\"', 'ded', 'jiij', 'dede@gmail.com', '94d53fbe11fa48a71877301d104e2b0409ba9822'),
(7, 'axel', 'lekiki', 'salam', 'axelair@gmail.com', '36a04308cc3a99ceac9af29560063fd460d9e7fa'),
(8, 'thibaut', 'nom', 'laTeam', 'hetic@gmail.com', '70f34365df9225720dbc6a9f31db50c48870ded3'),
(9, 'moutarde', 'colonel', 'jajaja', 'jaja@gmail.com', 'd608ee3392c8101837a243df7f38180b198c334c');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `league_users`
--
ALTER TABLE `league_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
