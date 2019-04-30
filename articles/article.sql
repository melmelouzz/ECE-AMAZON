-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 13:40
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eceamazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix` int(11) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` tinyint(255) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Type`, `Nom`, `Description`, `Prix`, `Taille`, `Couleur`, `Genre`, `Titre`, `Auteur`, `Etat`, `ID`) VALUES
('Livre', 'NULL', 'Algérie, années 1930. Les champs de blés frissonnent. Dans trois jours, les moissons, le salut. Mais une triste nuit vient consumer l\'espoir. Le feu. Les cendres.', 8, 0, 'NULL', 'NULL', 'Ce que le jour doit à la nuit', 'Yasmina Khadra', 1, 1),
('vetement', 'veste', 'Veste boutonnée sur le devant avec liens à la taille - Écru', 30, 34, 'Ecru', 'Femme', 'NULL', 'NULL', 1, 2),
('musique', 'NULL', 'Stromae est un ovni venu de belgique. Créateur des désormais célèbres \'\'Leçons de Stromae\'\', ses vidéos virales rencontrent un vif succès sur la toile. Stromae y explique comment \'faire un tube\' avec un esprit décalé et un style minimal.', 2, 0, 'NULL', 'hip-hop', 'Alors on danse', 'NULL', 1, 5),
('Sport et Loisir', 'KollyKolla', 'KollyKolla Gourde Isotherme Enfant Acier Inoxydable Sport Bouteille d\'eau Reutilisable Gourdes sans BPA Bouteilles Isothermes Bidon avec Paille et Filtre Thé Fruit Infuseur, 350ml/500ml/600ml/750ml', 15, 0, 'rouge', 'NULL', 'NULL', 'NULL', 1, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
