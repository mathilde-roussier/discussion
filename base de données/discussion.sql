-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 29 nov. 2019 à 13:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(61, 'Comment allez-vous ? ', 18, '2019-11-29 14:50:02'),
(63, 'TrÃ¨s bien et toi ? ', 20, '2019-11-29 14:51:45'),
(64, 'Ã§a va bien merci :) \r\nlol', 17, '2019-11-29 14:52:34'),
(60, 'Bonjour bonjour :p', 17, '2019-11-29 14:49:40'),
(59, 'Salut tout seul :p ! ', 20, '2019-11-29 14:49:17'),
(58, 'Salut tout le monde ;) !', 19, '2019-11-29 14:48:49');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(20, 'Titi', '$2y$12$R7iL73V3qaDiHSAmRGlFmOGrlQ7AMOfeJJ2nSaVw7UJ088ld77B3q'),
(19, 'Tata', '$2y$12$cAs4BqeXfT4RU7aG/CpKmOk0ciCAG0Rh2V5yGsDvmqUm.MH7KGeja'),
(18, 'Toto', '$2y$12$F.Roho6P7OgH.yllBgGZn.8Qvyu/XF5DAR8wgQeZ5FhYR5HFmwPG.'),
(17, 'Mathilde', '$2y$12$1aFYsWbsq3jL15ZxxNFkWec0kQ6AUVMU1F.8p0tJJTrVqqz2D6VyW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
