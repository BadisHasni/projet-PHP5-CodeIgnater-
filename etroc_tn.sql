-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 26 Décembre 2014 à 15:18
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `etroc_tn`
--
CREATE DATABASE IF NOT EXISTS `etroc_tn` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `etroc_tn`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `id_type_admin` int(11) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `mail_UNIQUE` (`mail`),
  KEY `fk_admin_type_admin1_idx` (`id_type_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `pwd`, `tel`, `mail`, `id_type_admin`, `statut`) VALUES
(1, 'admin', 'j4zHfAfRdqIniToxR66CjGgegdx8mHY/MIhtuflNLvrjeYF1Xo2hSQMF9HvjfeE6OjIaCYkS+cledFdh2wZHXg==', '123456', 'mail@mail.com', 1, 1),
(3, 'moderateur', 'XCrKm6yJ6Tfui9ee2A1iEs/NIJ8iZ60/4Sp32d1UpfyxGo9WRR5AUmrBFZO79HDRpOkfRtVx5TiZVkc6vPm5JQ==', '45646', 'mail@user.com', 3, 1),
(4, 'azer', 'M1CxL8vvT1tRn1fdvHvZOa9/qbi7i6SYLSt4/Rnejbc8aLWzIvPZc3PhRKbgt4ipX66E7ClbKXGrJ+dyAp4tSw==', '21212121', 'mail@mail.tn', 1, 1),
(5, 'badis', 'badis', '22248493', 'badis@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) NOT NULL,
  `code_postale` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(255) DEFAULT 'default.jpg',
  `date_insertion` datetime NOT NULL,
  `date_expiration` datetime NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_type_annonce` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `fk_annonce_utilisateur1_idx` (`id_utilisateur`),
  KEY `fk_annonce_type_annonce1_idx` (`id_type_annonce`),
  KEY `fk_annonce_categorie1_idx` (`id_categorie`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `ville`, `code_postale`, `titre`, `desc`, `img`, `date_insertion`, `date_expiration`, `id_utilisateur`, `id_type_annonce`, `id_categorie`, `statut`) VALUES
(1, '', 0, 'annonce1', 'Description de l''annonce 1', 'default.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, 1),
(2, '', 0, 'annonce2', 'Description de l annonce 2', '2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `position` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `statut` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `titre`, `desc`, `position`, `parent`, `statut`) VALUES
(1, 'Livre', 'tout type de livre ', 1, 0, 1),
(2, 'Électroménager', ' Relatif aux appareils à usage domestique fonctionnant à l''électricité.', 2, 0, 1),
(3, 'Meubles', 'tout type de meubles.', 3, 0, 1),
(4, 'Livre enfant', 'Tous les livres d''enfants agés de 10-15 ans. ', 0, 1, 1),
(5, 'Roman', 'les romans (en farnçais)', 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE IF NOT EXISTS `messagerie` (
  `id_messagerie` int(11) NOT NULL AUTO_INCREMENT,
  `to_id_user1` int(11) NOT NULL,
  `from_id_user2` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_messagerie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `reponse` text NOT NULL,
  `date` datetime NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `id_annonce` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reclamation`),
  KEY `fk_reclamation_utilisateur1_idx` (`id_utilisateur`),
  KEY `fk_reclamation_annonce1_idx` (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `desc` text,
  PRIMARY KEY (`id_region`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id_region`, `nom`, `desc`) VALUES
(1, 'Tunis', 'Tunis'),
(2, 'Nord', 'Nord'),
(3, 'Sud', 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `type_admin`
--

CREATE TABLE IF NOT EXISTS `type_admin` (
  `id_type_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_admin`
--

INSERT INTO `type_admin` (`id_type_admin`, `nom`, `desc`) VALUES
(1, 'Super Admin', 'Super Administrateur'),
(2, 'Webmaster', 'Webmaster'),
(3, 'Modérateur', 'Modérateur');

-- --------------------------------------------------------

--
-- Structure de la table `type_annonce`
--

CREATE TABLE IF NOT EXISTS `type_annonce` (
  `id_type_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `desc` text,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_type_annonce`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_annonce`
--

INSERT INTO `type_annonce` (`id_type_annonce`, `titre`, `desc`, `statut`) VALUES
(1, 'Troc', 'le troc habituel', 1),
(2, 'Don', 'le don habituel', 1),
(3, 'Entraide', 'le entraide habituel', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `tel_fixe` varchar(50) DEFAULT NULL,
  `adresse` text NOT NULL,
  `id_ville` int(11) NOT NULL,
  `code_postale` int(11) DEFAULT NULL,
  `date_inscription` datetime NOT NULL,
  `sexe` varchar(5) DEFAULT NULL,
  `photo_profile` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `mat_asso` varchar(255) DEFAULT NULL,
  `nom_asso` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `mail_UNIQUE` (`mail`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `fk_utilisateur_gouvernerat1_idx` (`id_ville`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `login`, `pwd`, `mail`, `nom`, `prenom`, `tel`, `tel_fixe`, `adresse`, `id_ville`, `code_postale`, `date_inscription`, `sexe`, `photo_profile`, `type`, `mat_asso`, `nom_asso`, `statut`) VALUES
(1, 'user', '', 'mail@user.com', 'nom', 'prenom', '5161321', NULL, 'adresse', 1, 1002, '0000-00-00 00:00:00', 'm', NULL, 1, NULL, '', 1),
(4, 'asso1', '', 'asso1@mail.com', '', '', NULL, NULL, '', 2, NULL, '0000-00-00 00:00:00', NULL, NULL, 2, '01', 'association1', 1),
(6, 'vnerjvnerv', 'UUk442c5yreaKnlS4TZON+FcI68qedT4CRoNN5O/NjrAPUKI1KRe9gp/PQ6g/6RK31He8KkKEn6PR1jN1TVVEQ==', 'hasnibadiiiis@gmail.com', 'rervnerjv', 'rervnerjv', '22248475', NULL, '', 0, NULL, '0000-00-00 00:00:00', 'optio', NULL, 1, NULL, '', 1),
(7, 'badissou', 'fSjjjDNI+FWkK7RXIcuC9LIGmFdFmzSeifZiy/B364/6zlqkVCzg14wD6Afesz6RWgUSXdmE/W2WaJB8nb1SWA==', 'hasni.bayrem@gmail.com', 'badis', 'badis', '22248493', NULL, 'bbbbb', 0, 1225, '0000-00-00 00:00:00', 'optio', NULL, 1, NULL, '', 1),
(8, 'zizizi', 'En2TIu3RLP9BqCvWZPz9B1is2L8OdPcYNsNqGUP39nL51qEtH35IoMSAMpL+3AKgylXkGWAaFr7i37yjrKtXzA==', 'houssem@gmail.com', 'Zitoune', 'Zitoune', '24415039', NULL, 'kkkkkkkk', 0, 1456, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(9, 'cnzrocno', 'rQHxzQSB9rqCXS0dudRClu4BrJJT5OZs1ClBaiRxwHqnyWTBK6ManntURw06v22+ocgHQj2R9GgKyXwJxTE1Dg==', 'ircnoienre@hotmail.fr', 'cnjzrc', '', '55447788', '22635489', 'ecbnizebc', 0, 50223, '0000-00-00 00:00:00', NULL, NULL, 1, NULL, 'jcrejvner j', 1),
(10, 'rercercer', 'kgKqduJ4j30OGeuYSkMMh3oyB9dvA/kDt4fRcaR5NC75p0lI+vA9JtpF68jEVRdptCBzOxOEgyb34ruBT1a97Q==', 'rvre@gmail.com', 'rieroiernoie', '', '25589669', '22556633', 'rcnerrec', 0, 5000, '0000-00-00 00:00:00', NULL, NULL, 1, '44455', 'rnervnoer', 1),
(11, 'ccccccccc', 'aVXXsoUnANOFFxsqAGLUVzskocdjWwDVaLQ+xvzPYos8QhIzP9OlB46vwA0PAZLKFk2hZGRj9nRAIbNlwCerAw==', 'ddddddd@gmail.com', 'bbbbbbb', '', '14568932', '45789632', 'fffffffff', 0, 9000, '0000-00-00 00:00:00', NULL, NULL, 2, '2000', 'aaaaaaa', 1),
(12, 'badiss', 'BAed9+Qt6kxpM+mXKFFFeGand1tTMfqe258bg7SO5PsXK+O+0oup0NwzZ40YHtNnrN+Qri11rzFsLbMMlVUzkQ==', 'hasnii@hotmail.fr', 'badis', 'badis', '22248493', NULL, 'beja', 0, 9001, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(13, 'safouri', '4BpxBQii5OsIwWtyVRORmBEXrytPKh/m2lsQcEmmaxXKEtL15aQZQtnUI1FU4ukuhNDIEe4lm9LncJ9gFNShGw==', 'safouri@gmail.com', 'Safar', 'houssemG', '55555588', NULL, 'efzreg', 0, 2222222, '0000-00-00 00:00:00', 'F', NULL, 1, NULL, '', 1),
(14, 'aaa', '6FHUSRhMIkmoic1QjCHf4GgTMETMPJy6BynRZC1ZNhMBGTtNMQEcK9hB5nxxo3NZLTvfWMJiMOwyKzkiC7BovA==', 'aaa@a.om', 'aaaa', 'aa', '21', NULL, 'aa', 4, 90000, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(15, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '/NtkwzUfIq6EcYI9fAwvE2MPopxod1Y0evGZHkwdcktXxcM2PBUipjxmE7NJEqPXR6RUl3iEvuDbls533VAbLg==', 'a@kk.olml', 'aa', 'azerty123', '215487', NULL, 'bid dknbjk knd', 1, 30000, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(16, 'aa', 'xBH/nYX8Be/bdy1nW7ojpUrkXhXX9FoU8Zdk50xrhX3tMx46jKe9+oALagmqm0kLPt1srLYgK/0SnKe/CE1gqA==', 'aaaaaaaaaaaaaaaaaaaaaaaaaa@a.om', 'aa', 'azerty123', '21212121', NULL, 'aa', 5, 12, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(17, 'hhhhhhhhhhhm', '0Sa0/hKy4dMfGPbrK7dABx3L1LTDctBtrHogmCqgbUSso1OrQe3MbUj4H0e81pFIvdhxyPLXaOo9PTNSDUprXA==', 'njvrev@hotmail.fr', 'pppppppppp', '', '12', '845', 'ercezqc', 4, 200, '0000-00-00 00:00:00', NULL, NULL, 2, '3000', 'kkkkkkkk', 1),
(18, 'tvstsvt', 'mNDsou0/DrvOS9fWb0yVt7SFXeduD03lKrtREz5FEYNPIQmCZc9WjD/W9PX6BbK4uR+DeQXzGTwW7J5zn9Z2rQ==', 'vestv@gmail.com', 'vsfvvtr', '', '63', '5434', 'xezefe', 6, 4000, '0000-00-00 00:00:00', NULL, NULL, 2, '777', 'fvdfvf', 1),
(19, 'tvrtb', 'AT3HgHgcnQmovxjL5R+mKDYafEuJb9hSjYvGP7XLD8NiusFsDtm0+W/YkSAdSrwoGxLrmOAGzOncLvOFkuXtsA==', 'amine@gmail.com', 'looooooo', 'amine', '451', NULL, 'vtet(', 0, 2007, '0000-00-00 00:00:00', 'F', NULL, 1, NULL, '', 1),
(20, 'ezesdze', 'l5F3FjGl0LRFPJBKJ08hPNzAvLNTSJzMOljOjgZLGqbEQJmgGC1P0FzWHjBWL9D1Ru15OS7vxvuVAulVlVNK+w==', 'ezfze@gmail.com', 'qezdqez', '', '65', '5453', 'cqscz', 2, 3366, '0000-00-00 00:00:00', NULL, NULL, 2, '5300', 'sdddddddd', 1),
(21, 'brtbrtbrt', 'DEYGDcuO5L7DGOcpSeF+rmLE23r8gUCnyIS2PTksBuhmvNrlw+7RgC96zNvl2FuWfyfPMGrvOqJh5qxKG0Japg==', 'trtbrtbt@gmail.com', 'rtgrztgg', 'hcrhhhhhrr', '21212', NULL, 'nkcnece', 1, 110, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(22, 'rverv', 'Ylt2ZUbX2CkgVh9oS9G5gccp26CGGcPiNhF+TEpt0osmvTQ1wE52ULO/SnxVjvP+v+BuQqQwrFw5snSDo0XbCQ==', 'rvr@g.fr', 'cirehivrrv', 'hbdjcbd', '61', NULL, 'guyhh', 3, 5000, '0000-00-00 00:00:00', 'F', NULL, 1, NULL, '', 1),
(23, 'aminou', '0rr2gRD28XwTsb4McSUJ02xyST03kvmlvTVpUbT6ny8IE9FnsbYoJfL82jM7BzB9OffEqtAAD+On5CVaEd1RyQ==', 'aminee@gmail.com', 'omrani', 'amine', '123569', NULL, 'bejak', 4, 9002, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1),
(24, 'ahmouda', 'HOyw4roIC74dozcu2vjj1Tcjgh9hJJNoR6hj855M+bEF4SfYNx+phxj7rbZUDz7+Sjgs1RZTEANgTfNx7WzNmQ==', 'ahahah@gmail.com', 'amoul', 'ahmed', '9485112', NULL, 'tvttvt', 5, 6000, '0000-00-00 00:00:00', 'H', NULL, 1, NULL, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ville`),
  KEY `fk_ville_region1_idx` (`id_region`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom`, `id_region`) VALUES
(1, 'Bardo', 1),
(2, 'Tunis1', 1),
(3, 'Tunis2', 1),
(4, 'Beja', 2),
(5, 'Gafsa', 3),
(6, 'Bizert', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
