-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 21 juin 2023 à 11:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_admin`
--

DROP TABLE IF EXISTS `table_admin`;
CREATE TABLE IF NOT EXISTS `table_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `Pseaudo` text NOT NULL,
  `password` text NOT NULL,
  `Confirme_password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_admin`
--

INSERT INTO `table_admin` (`id`, `nom`, `email`, `Pseaudo`, `password`, `Confirme_password`) VALUES
(1, 'Donatien BONOUKPO ANANI', 'donatienboni10@gmail.com', 'dodo', '1234', ''),
(2, 'toto', 'admin@gmail.com', 'admin', '1234', '1234'),
(3, 'Donatien BONOUKPO ANANI', 'Donatienboni10@gmail.com', 'dodo', '1234', '1234'),
(7, 'Donatien BONOUKPO ANANI', 'Donatienboni10@gmail.com', 'dodo', '@dmin1234', '@dmin1234');

-- --------------------------------------------------------

--
-- Structure de la table `table_classe`
--

DROP TABLE IF EXISTS `table_classe`;
CREATE TABLE IF NOT EXISTS `table_classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_classe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_classe`
--

INSERT INTO `table_classe` (`id`, `nom_classe`) VALUES
(1, 'cp1'),
(2, '6eme'),
(3, 'Tle'),
(4, '1ere');

-- --------------------------------------------------------

--
-- Structure de la table `table_enregistrement`
--

DROP TABLE IF EXISTS `table_enregistrement`;
CREATE TABLE IF NOT EXISTS `table_enregistrement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `sexe` text NOT NULL,
  `classe_id` text NOT NULL,
  `date_Naissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_enregistrement`
--

INSERT INTO `table_enregistrement` (`id`, `nom`, `prenom`, `sexe`, `classe_id`, `date_Naissance`) VALUES
(1, 'Enice', 'Hyssie', 'Feminin', '1', '2023-01-01'),
(2, 'bekale', 'josaphate', 'Masculin', '5', '2023-06-01'),
(3, 'Anani', 'toto', 'Feminin', '3', '2023-06-04'),
(4, 'donatien', 'folly', 'Masculin', '3', '2023-06-02'),
(5, 'donatien', 'toto', 'Masculin', '4', '2023-06-17'),
(7, 'Abessolo', 'Diam\'s', 'Feminin', '7', '2023-06-08'),
(6, 'ayele', 'viviane', 'Feminin', '7', '2023-06-11');

-- --------------------------------------------------------

--
-- Structure de la table `table_frais`
--

DROP TABLE IF EXISTS `table_frais`;
CREATE TABLE IF NOT EXISTS `table_frais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe_id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_limite_payement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_frais`
--

INSERT INTO `table_frais` (`id`, `classe_id`, `montant`, `date_limite_payement`) VALUES
(1, 1, 1000, '2023-06-02'),
(2, 2, 2000, '2023-06-20'),
(3, 3, 3000, '2023-06-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
