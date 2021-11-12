-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 nov. 2021 à 22:15
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maligue`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `idgroupe` int(11) NOT NULL,
  `nom_de_groupe` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `idpool` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idgroupe`),
  KEY `groupepool_idpool` (`idpool`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

DROP TABLE IF EXISTS `ligue`;
CREATE TABLE IF NOT EXISTS `ligue` (
  `idligue` int(11) NOT NULL,
  `nom_de_ligue` varchar(45) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `type_ligue` varchar(45) DEFAULT NULL,
  `date_modification` datetime DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idligue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligue_user`
--

DROP TABLE IF EXISTS `ligue_user`;
CREATE TABLE IF NOT EXISTS `ligue_user` (
  `idligue_user` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idligue` int(11) DEFAULT NULL,
  `idgroupe` int(11) DEFAULT NULL,
  `idmatch` int(11) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idligue_user`),
  KEY `ligueuser_iduser` (`iduser`),
  KEY `ligueuser_idligue` (`idligue`),
  KEY `ligueuser_idgroupe` (`idgroupe`),
  KEY `ligueuser_idmatch` (`idmatch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

DROP TABLE IF EXISTS `match`;
CREATE TABLE IF NOT EXISTS `match` (
  `idmatch` int(11) NOT NULL,
  `date_match` varchar(45) DEFAULT NULL,
  `score` int(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `iduserAdversaire` int(11) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmatch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pool`
--

DROP TABLE IF EXISTS `pool`;
CREATE TABLE IF NOT EXISTS `pool` (
  `idpool` int(11) NOT NULL,
  `niveau_pool` int(11) NOT NULL,
  `nom_de_pool` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpool`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `dateDeNaissance` varchar(45) DEFAULT NULL,
  `adressePostale` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `pays` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `statut` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `prenom`, `dateDeNaissance`, `adressePostale`, `mail`, `telephone`, `pseudo`, `image`, `sexe`, `pays`, `login`, `pass`, `statut`, `role`, `date_creation`) VALUES
(1, 'BLUET', 'Frédérick', '1984-02-10', '3rue de la liberté', 'fdrbluet@gmail.com', '0614361103', NULL, NULL, NULL, NULL, '123', '123', 1, 'user', '2021-11-06 18:50:43');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupepool_idpool` FOREIGN KEY (`idpool`) REFERENCES `pool` (`idpool`);

--
-- Contraintes pour la table `ligue_user`
--
ALTER TABLE `ligue_user`
  ADD CONSTRAINT `ligueuser_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupe` (`idgroupe`),
  ADD CONSTRAINT `ligueuser_idligue` FOREIGN KEY (`idligue`) REFERENCES `ligue` (`idligue`),
  ADD CONSTRAINT `ligueuser_idmatch` FOREIGN KEY (`idmatch`) REFERENCES `match` (`idmatch`),
  ADD CONSTRAINT `ligueuser_iduser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
