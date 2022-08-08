-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 08 août 2022 à 16:40
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `formationPlus`
--

-- --------------------------------------------------------

--
-- Structure de la table `attestations`
--

CREATE TABLE `attestations` (
  `idAttestation` int(11) NOT NULL,
  `etudiant` int(11) NOT NULL,
  `convention` int(11) NOT NULL,
  `message_contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conventions`
--

CREATE TABLE `conventions` (
  `idConvention` int(11) NOT NULL,
  `nom` text NOT NULL,
  `nbHeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conventions`
--

INSERT INTO `conventions` (`idConvention`, `nom`, `nbHeur`) VALUES
(1, 'Formation en ligne', 3),
(2, 'Formation en présentiel', 5),
(3, 'Évaluation des connaissances', 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `idEtudiant` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` text NOT NULL,
  `convention` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`idEtudiant`, `nom`, `prenom`, `mail`, `convention`) VALUES
(1, 'Louis', 'Bernard', 'louisbernard@gmail.com', 1),
(2, 'Delaforet', 'Christophe', 'chrislaforet@gmail.com', 1),
(3, 'Chirac', 'Jacques', 'jacqueschirac@gmail.com', 2),
(4, 'Lambert', 'Cécile', 'lambertcecile@gmail.com', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attestations`
--
ALTER TABLE `attestations`
  ADD PRIMARY KEY (`idAttestation`);

--
-- Index pour la table `conventions`
--
ALTER TABLE `conventions`
  ADD PRIMARY KEY (`idConvention`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`idEtudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attestations`
--
ALTER TABLE `attestations`
  MODIFY `idAttestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `conventions`
--
ALTER TABLE `conventions`
  MODIFY `idConvention` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `idEtudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
