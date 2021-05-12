-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 10 mai 2021 à 11:41
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutiquepoo`
--
CREATE DATABASE IF NOT EXISTS `boutiquepoo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `boutiquepoo`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_parentId` (`parentId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `img`, `parentId`) VALUES
(1, 'Trucs débiles', 'Trucs débiles', 'truc.gif', NULL),
(2, 'Bidule', 'jhgdkbhkdfvc\r\ndncb,dvcv\r\nvdbxv\r\ncbxfvnv\r\nbncfnb\r\ncfvnb\r\n', 'bidule.jpg', NULL),
(3, 'Animaux', 'kvjbdlbcn; ', 'chien.jpg', NULL),
(4, 'cat 4', 'cat 4', 'annaelle.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userLogin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date`, `userId`, `userName`, `userLogin`) VALUES
(1, '2019-08-07 12:23:44', 2, 'Toi', 'toi@toi.toi'),
(2, '2021-02-04 14:04:51', 1, 'Moi', 'moi@moi.moi');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `stock` int(11) NOT NULL,
  `categorieId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produit_categorieId` (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `img`, `prix`, `stock`, `categorieId`) VALUES
(1, 'truc', 'desc', 'truc.gif', 12, 10, 1),
(2, 'Machin', 'desc', 'machin.jpg', 22, 10, 1),
(3, 'chose', 'desc', 'chose.jpg', 32, 10, 1),
(4, 'bidulle', 'desc', 'bidule.jpg', 67, 10, 2),
(5, 'chouette', 'desc', 'chouette.jpg', 56, 10, 2),
(6, 'objet', 'desc', 'objet.jpg', 356, 10, 2),
(7, 'Chien', 'desc', 'chien.jpg', 99999, 10, 3),
(8, 'Chat', 'desc', 'chat.jpg', 99998, 10, 3),
(9, 'Canari', 'desc', 'canari.jpg', 5467530, 10, 3),
(10, 'Annaelle', 'desc', 'annaelle.png', 554, 10, 4),
(11, 'Maxence', 'desc', 'maxence.png', 546, 10, 4),
(12, 'John', 'desc', 'john.jpg', 5646, 10, 4),
(13, 'Du pouvoir', 'desc', 'pouvoir.gif', 42541900, 10, 1),
(14, 'Drole', 'desc', 'boule.gif', 707, 10, 1),
(15, 'Courage', 'desc', 'mecreant.gif', 2, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produitcommande`
--

CREATE TABLE IF NOT EXISTS `produitcommande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `categorieId` int(11) NOT NULL,
  `commandeID` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`,`commandeID`) USING BTREE,
  KEY `produit_categorieId` (`categorieId`),
  KEY `commandeID` (`commandeID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produitcommande`
--

INSERT INTO `produitcommande` (`id`, `nom`, `description`, `img`, `prix`, `categorieId`, `commandeID`, `qte`) VALUES
(5, 'chouette', 'desc', 'chouette.jpg', 56, 2, 2, 1),
(13, 'Du pouvoir', 'desc', 'pouvoir.gif', 425, 1, 1, 1),
(15, 'Courage', 'desc', 'mecreant.gif', 2, 1, 1, 1),
(15, 'Courage', 'desc', 'mecreant.gif', 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `mdp`) VALUES
(1, 'Moi', 'moi@moi.moi', 'moi'),
(2, 'Toi', 'toi@toi.toi', 'toi'),
(3, 'Elle', 'elle@elle.elle', 'elle');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`parentId`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
