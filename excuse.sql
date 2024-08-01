-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 août 2024 à 16:58
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `excusesdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `excuse`
--

CREATE TABLE `excuse` (
  `id` int(11) NOT NULL,
  `nom` varchar(120) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `excuse`
--

INSERT INTO `excuse` (`id`, `nom`, `message`) VALUES
(1, 'Substance', 'Sober'),
(2, 'Substance', 'Drunk'),
(3, 'Fucking', 'Fucking IE'),
(4, 'Fucking', 'Fucking Windows'),
(5, 'Inexcusable', 'Emacs'),
(6, 'Inexcusable', 'Explosion'),
(7, 'Inexcusable', 'Goto Fail'),
(8, 'Fucking', 'Fucking Exactly'),
(9, 'Edge Cases', 'Unpossible'),
(10, '\"Edge Cases', 'Tricky'),
(11, 'Edge Cases', 'It\'s a feature, not a bug'),
(12, 'Fucking', 'Fucking npm'),
(13, 'Syntax Errors', 'Didn\'t bother to compile it'),
(14, 'Syntax Errors', 'Not enough semi-colons'),
(15, 'Substance', 'Hungover'),
(16, 'Substance', 'Railscamp'),
(17, '\"Predictable Problems', 'Cached for too long'),
(18, '\"Predictable Problems', 'Why was this cached?'),
(19, '\"Internet crashed', 'Climate change driven catastrophic weather event'),
(20, 'Internet crashed', 'Some DNS fuckery idno');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `excuse`
--
ALTER TABLE `excuse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `excuse`
--
ALTER TABLE `excuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
