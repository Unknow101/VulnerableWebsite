-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 fév. 2019 à 08:35
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
-- Base de données :  `noob`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `de` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `message`, `de`) VALUES
(1, 'Salut, on test le chat ?', 'Homer'),
(2, 'Ca marche, allé viens manger !', 'Marge'),
(3, 'Tu passes au bar ?', 'Moe'),
(4, 'Je ne pense vraiment pas que ca soit une bonne idée Moe... Homer doit aussi se soucier de sa famille, il n\'a toujours pas diné avec nous alors que c\'est le premier assis a table habituellement .... Je ne le comprend plus depuis qu\'il est devenu Administrateur de ce site \"Noob\" ... il ne fait que bosser .. Je ne reconnait plus mon homer :(', 'Marge'),
(5, 'Un brave type cet Homer ...', 'Montgomery');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `password`, `image`, `bio`) VALUES
(1, 'Homer', 'Simpson', 'd048e0f7f525f28595f4297219de507e', 'img/pic.jpg', 'C\'est pas parce que je m\'en fous que je comprends pas.'),
(2, 'Marge', 'Simpson', '70b959c40fe68e799d54296ba32834ef', 'img/pic2.jpg', 'Quand une femme dit que tout va bien, ça veut dire que tout va mal.'),
(5, 'Montgomery', 'Burns', '9726255eec083aa56dc0449a21b33190', 'img/pic3.jpg', 'Famille, religion, amitié. Voici les 3 démons que vous devez abattre pour réussir dans les affaires.'),
(6, 'Moe', 'Szyslak', '3e1867f5aee83045775fbe355e6a3ce1', 'img/pic4.jpg', 'On pourrait vendre de l\'alcool. Je fais ça très bien.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
