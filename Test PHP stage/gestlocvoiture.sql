-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 déc. 2021 à 08:28
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestlocvoiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(255) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `MDP` varchar(255) NOT NULL,
  `date_reservation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `email`, `MDP`, `date_reservation`) VALUES
(1, 'COUTHON', 'Salomon', 'couthonaugipro@gmail.com', '03ac674216f3e15c761ee1a5e', '0000-00-00'),
(2, 'COUTHON', 'Salomon', 'augipro@gmail.com', '8d969eef6ecad3c29a3a62928', '0000-00-00'),
(3, 'COUTHON', 'Salomon', 'aaugipro@gmail.com', 'e54fc6b51915e222ba6196747a19ebb8dfa651fd2b46a385a0ded647fbfefda0', '0000-00-00'),
(4, 'COUTHON', 'Salomon', 'aaugo@gmail.com', '36fdc53642d31d9b24cf3439ad9b3982893f2c0c5777f5f9a5d4ee58a5463ebf', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `idReserv` int(255) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idVoiture` int(11) NOT NULL,
  `idProprio` int(11) NOT NULL,
  `Date_reservation` date NOT NULL DEFAULT current_timestamp(),
  `Prix_Location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `idVoituere` int(255) NOT NULL,
  `Nomv` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `Capacite` varchar(25) NOT NULL,
  `Modele` varchar(25) NOT NULL,
  `Couleur` varchar(25) NOT NULL,
  `prix_location` int(25) NOT NULL,
  `idProprio` int(11) NOT NULL,
  `date_pub` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`idVoituere`, `Nomv`, `img`, `description`, `Capacite`, `Modele`, `Couleur`, `prix_location`, `idProprio`, `date_pub`) VALUES
(1, 'El dorado', '100 Amazing Mixed Wallpapers {Pack -179} (56).jpg', 'Bar restaurant', '20 places', '2021', 'Noir', 120000, 4, '2021-12-06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idReserv`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`idVoituere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idReserv` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `idVoituere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
