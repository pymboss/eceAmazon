-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 12:27
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
-- Base de données :  `ece_amazon`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `FindUtil`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `FindUtil` (IN `in_email` VARCHAR(255), IN `in_mdp` VARCHAR(255))  NO SQL
SELECT * from utilisateur as u
Where in_email=u.email AND in_mdp=u.mot_de_passe$$

DROP PROCEDURE IF EXISTS `InsertUtil`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertUtil` (IN `in_email` VARCHAR(255), IN `in_mdp` VARCHAR(255), IN `in_nom` VARCHAR(255), IN `in_prenom` VARCHAR(255), IN `in_type` VARCHAR(255), OUT `out_id` INT)  NO SQL
BEGIN
	SELECT COUNT (`email`) into @nbEmail FROM
    `ece_amazon`.`utilisateur` WHERE `email` = in_email;
    IF @nbEmail >= 1 THEN
    	SET out_id = 0;
    ELSE
    	INSERT INTO `ece_amazon`.`utilisateur`					(`email`,`mot_de_passe`,`nom`,`prenom`,`type`) 			VALUES
        (in_email,in_mdp,in_nom,in_prenom,in_type);
        SET out_id = LAST_INSERT_ID();
    END IF;
    
    SELECT out_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `email_acheteur` varchar(255) NOT NULL,
  `adresse_1` varchar(255) NOT NULL,
  `adresse_2` varchar(255) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `num_tel` int(255) NOT NULL,
  `type_carte_payement` varchar(255) NOT NULL,
  `num_carte` varchar(255) NOT NULL,
  `nom_carte` varchar(255) NOT NULL,
  `date_expiration` date NOT NULL,
  `code_securite` int(255) NOT NULL,
  PRIMARY KEY (`email_acheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`email_acheteur`, `adresse_1`, `adresse_2`, `ville`, `code_postal`, `pays`, `num_tel`, `type_carte_payement`, `num_carte`, `nom_carte`, `date_expiration`, `code_securite`) VALUES
('emma.guetienne@gmail.com', '22 rue Rambuteau', NULL, 'Paris', 75003, 'France', 607080910, 'MasterCard', '1234 5678 9012 3456', 'Emma Guetienne', '2019-07-24', 123);

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `email_admin` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`email_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`email_admin`, `pseudo`) VALUES
('j.dupont@gmail.com', 'Jojo');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_ref` int(11) NOT NULL AUTO_INCREMENT,
  `email_vendeur` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `nb_vendu` int(255) NOT NULL DEFAULT '0',
  `catégorie` varchar(255) NOT NULL,
  `quantité` int(255) NOT NULL,
  PRIMARY KEY (`id_ref`),
  KEY `email_vendeur` (`email_vendeur`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_ref`, `email_vendeur`, `nom`, `description`, `photo`, `video`, `prix`, `nb_vendu`, `catégorie`, `quantité`) VALUES
(1, 'pymboss@gmail.com', 'pull Ralph Lauren', 'Super pull très comfortable', 'pull ralph lauren1.jpg', '', 40, 0, 'Vetement', 34),
(2, 'pymboss@gmail.com', 'Pull Ralph Lauren', '100% laine, très doux', 'pull ralph lauren2.jpg', '', 60, 0, 'Vetement', 24),
(3, 'pymboss@gmail.com', 'Vinyle Angèle - Brol', 'Premier album d\'Angèle', 'Brol.jpg', '', 14.99, 0, 'Musique', 54),
(4, 'jon.snow@got.com', 'CD Bande Originale \'A star is born\'', 'Compilation des musiques du film \'A star is born', 'aastarisborn.jpg', '', 19.99, 0, 'Musique', 23),
(5, 'pymboss@gmail.com', 'Illumations d\'Arthur Rimbaud', 'Recueil de poésie du célèbre auteur français Arthur Rimbaud', 'illumination.jpg', '', 6.5, 0, 'Livre', 56),
(6, 'jon.snow@got.com', 'Charlotte de David Foenkinos', 'Roman à l\'eau de rose', 'charlotte.jpg', '', 9.1, 0, 'Livre', 87),
(7, 'jon.snow@got.com', 'Raquette de tennis Babolat ', 'Raquette avec cordage neuf', 'raquette de tennis.jpg', '', 120, 0, 'Sports et Loisirs', 10),
(8, 'pymboss@gmail.com', 'Ballon de foot ', 'Ballon en cuir véritable', 'ballon de foot.jpg', '', 25, 0, 'Sports et Loisirs', 35);

-- --------------------------------------------------------

--
-- Structure de la table `item_panier`
--

DROP TABLE IF EXISTS `item_panier`;
CREATE TABLE IF NOT EXISTS `item_panier` (
  `id_ref` int(11) NOT NULL,
  `email_acheteur` varchar(255) NOT NULL,
  `quantité` int(11) NOT NULL,
  `vendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_ref`,`email_acheteur`),
  KEY `email_acheteur` (`email_acheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id_ref` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_ref`, `titre`, `auteur`, `genre`) VALUES
(5, 'Illuminations', 'Arthur Rimbaud', 'Poésie'),
(6, 'Charlotte', 'David Foenkinos', 'Romantique');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `id_ref` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `musique`
--

INSERT INTO `musique` (`id_ref`, `titre`, `artiste`, `genre`) VALUES
(3, 'Brol', 'Angèle', 'Pop'),
(4, 'A star is born', 'Bradley Cooper et Lady Gaga', 'Bande originale');

-- --------------------------------------------------------

--
-- Structure de la table `sports_loisirs`
--

DROP TABLE IF EXISTS `sports_loisirs`;
CREATE TABLE IF NOT EXISTS `sports_loisirs` (
  `id_ref` int(11) NOT NULL,
  `type_sport` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sports_loisirs`
--

INSERT INTO `sports_loisirs` (`id_ref`, `type_sport`) VALUES
(7, 'Tennis'),
(8, 'Football');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `photo_de_profil` varbinary(8000) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `mot_de_passe`, `nom`, `prenom`, `type`, `photo_de_profil`) VALUES
('pymboss@gmail.com', 'grimpette', 'Massart', 'Pierre', 'Vendeur', ''),
('emma.guetienne@gmail.com', 'biquette', 'Guetienne', 'Emma', 'Acheteur', ''),
('j.dupont@gmail.com', 'jojo', 'Dupont', 'Joseph', 'Administrateur', ''),
('jon.snow@got.com', 'got', 'Snow', 'Jon', 'Vendeur', '');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `email_vendeur` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`email_vendeur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`email_vendeur`, `pseudo`) VALUES
('pymboss@gmail.com', 'Pymboss'),
('jon.snow@got.com', 'Jon_Snow');

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id_ref` int(11) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`id_ref`, `sexe`, `type`, `taille`, `couleur`, `marque`) VALUES
(1, 'M', 'Pull', 'S', 'Bleu', 'Ralph Lauren'),
(2, 'F', 'Pull', 'M', 'orange', 'Ralph Lauren');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
