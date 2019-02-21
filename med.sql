-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 fév. 2019 à 15:40
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `med`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A45BDDC1AFC2B591` (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id`, `titre1`, `description`, `module_id`) VALUES
(24, 'Erp', 'logiciel erp', 30),
(25, 'MS-Cars', 'MS-Cars', NULL),
(26, 'MS-Haras', 'MS-Haras', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bug`
--

DROP TABLE IF EXISTS `bug`;
CREATE TABLE IF NOT EXISTS `bug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_358CBF14AFC2B591` (`module_id`),
  KEY `IDX_358CBF143E030ACD` (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bug`
--

INSERT INTO `bug` (`id`, `titre`, `description`, `date`, `client`, `path`, `module_id`, `application_id`) VALUES
(23, 'dsdsds', 'sdddsdsd', '2000-01-01', 'dddd', '125883.gif', 9, 24),
(24, 'sdcscdc', 'sds', '2000-01-01', 'dddd', 'logo-tof+70.png', 26, 24);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C7440455AFC2B591` (`module_id`),
  KEY `IDX_C74404553E030ACD` (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `titre`, `description`, `module_id`, `application_id`) VALUES
(6, 'CRTEN', 'ERP', 'Borj cedria', 30, 24),
(7, 'MEDAF', 'gestion des dossiers', 'gestion des dossiers', NULL, NULL),
(8, 'ANCSP', 'Monplaisir', 'Monplaisir', 30, 24),
(9, 'FNARC', 'Sidi thabet', 'Sidi thabet', 28, 26),
(10, 'MTK', 'Kairouan', 'Kairouan', NULL, 25);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `objet`, `sujet`) VALUES
(1, 'mee', 'dsdsdsds', 'dsdsds', 'dsdsds'),
(2, 'mee', 'med@gmail.com', 'dsdsds', 'dsdsds');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `intervenant_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2694D7A5AB9A1716` (`intervenant_id`),
  KEY `IDX_2694D7A519EB6921` (`client_id`),
  KEY `IDX_2694D7A5AFC2B591` (`module_id`),
  KEY `IDX_2694D7A53E030ACD` (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `titre`, `description`, `etat`, `intervenant_id`, `client_id`, `module_id`, `application_id`) VALUES
(3, 'hyytty', 'ytytytyt', 1, 2, 9, 9, 24);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
CREATE TABLE IF NOT EXISTS `intervenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`id`, `nom4`) VALUES
(2, 'mohamed'),
(3, 'zied');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `nom`) VALUES
(9, 'MS-Budget'),
(10, 'MS Paie et RH'),
(14, 'gestion des dossiers'),
(19, 'Comptoir -Gestion Commerciale'),
(21, 'MS-Compta'),
(25, 'MS-Achat'),
(26, 'MS-Vente'),
(27, 'MS-Cars'),
(28, 'MS-Haras'),
(30, 'Erp'),
(33, 'MS-Paie');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriprtion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_50159CA919EB6921` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `titre`, `descriprtion`, `etat`, `client_id`) VALUES
(9, 'yuyuuy', 'yuuu', 0, 9),
(10, 'hhh', 'hhhg', 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valider` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `reference` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suividesprojets`
--

DROP TABLE IF EXISTS `suividesprojets`;
CREATE TABLE IF NOT EXISTS `suividesprojets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suividu_projet`
--

DROP TABLE IF EXISTS `suividu_projet`;
CREATE TABLE IF NOT EXISTS `suividu_projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_497B315EC05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(36, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$v7Vnoyeu67HB0ctjfpnV.eE0HkR2zSGjL8AFc2g6FCIwhVl2dhauq', '2019-02-21 15:21:49', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(37, 'mohamed', 'mohamed', 'mohamedhaoili@gmail.com', 'mohamedhaoili@gmail.com', 1, NULL, '$2y$13$BvJMzwxlvceagi0KyHHVkuEfx0goZ5h7/RX5SaunYUOhka44FEC4K', '2019-02-21 14:04:34', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_AGENT\";}'),
(38, 'med', 'med', 'giga466@hotmail.com', 'giga466@hotmail.com', 1, NULL, '$2y$13$GSU54bfXD/2XXJvyt2t/eeFTGDYFTL1shGkWT9etIS9dYQxt9xsHK', '2019-02-21 15:21:31', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_CLIENT\";}');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_adress`
--

DROP TABLE IF EXISTS `utilisateurs_adress`;
CREATE TABLE IF NOT EXISTS `utilisateurs_adress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_710DA0B6FB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC1AFC2B591` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `bug`
--
ALTER TABLE `bug`
  ADD CONSTRAINT `FK_358CBF143E030ACD` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_358CBF14AFC2B591` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C74404553E030ACD` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_C7440455AFC2B591` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_2694D7A519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2694D7A53E030ACD` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2694D7A5AB9A1716` FOREIGN KEY (`intervenant_id`) REFERENCES `intervenant` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2694D7A5AFC2B591` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `utilisateurs_adress`
--
ALTER TABLE `utilisateurs_adress`
  ADD CONSTRAINT `FK_710DA0B6FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
