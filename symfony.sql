-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 14 Janvier 2019 à 13:42
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `biens`
--

INSERT INTO `biens` (`id`, `title`, `surface`, `picture`, `price`) VALUES
(1, 'Villa sous le soleil', 500, 'img/biens1.jpg', 100000),
(2, 'Villa au bresil', 800, 'img/biens2.jpg', 20000000),
(3, 'Villa à la campagne', 300, 'img/biens3.jpg', 800000),
(4, 'Villa à Ténerife', 700, 'img/biens4.jpg', 700000),
(5, 'Villa sur Paris', 500, 'img/biens5.jpg', 850000),
(6, 'Maison dans les arbres', 100, 'img/biens6.jpg', 200000),
(7, 'Villa en Californie', 450, 'img/biens7.jpg', 900000),
(8, 'Maison en bord de plage', 400, 'img/biens8.jpg', 1500000),
(9, 'Maison de John Café!', 70, 'img/biens9.jpg', 8000),
(10, 'Villa sur la Lune', 150, 'img/biens10.jpg', 900000),
(11, 'Maison de Grégory!', 100, 'img/biens11.jpg', 200000);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20190108101351'),
('20190109150739'),
('20190111101106');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(7, 'Asmae', 'asmadouce@hotmail.fr', '$2y$13$hb4DyBqFFT00SPrlUMMQn.wkjkU.345h6/GqlJoZ3ex76GKqK28U.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
