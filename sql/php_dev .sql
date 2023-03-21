-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 10:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE `candidat` (
  `candidat_id` int(60) NOT NULL,
  `cv` blob NOT NULL,
  `user_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competence`
--

CREATE TABLE `competence` (
  `competence_id` int(11) NOT NULL,
  `nom_competence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domaine`
--

CREATE TABLE `domaine` (
  `domaine_id` int(11) NOT NULL,
  `nom_do` varchar(255) NOT NULL,
  `user_id` int(60) NOT NULL,
  `offre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `duree_ex` varchar(255) NOT NULL,
  `lieu_ex` varchar(255) NOT NULL,
  `desc_ex` varchar(255) NOT NULL,
  `candidat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `formation_id` int(11) NOT NULL,
  `nom_form` varchar(255) NOT NULL,
  `duree_form` varchar(255) NOT NULL,
  `lieu_form` varchar(255) NOT NULL,
  `desc_form` varchar(255) NOT NULL,
  `candidat_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `offre_id` int(60) NOT NULL,
  `titre_off` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`offre_id`, `titre_off`, `lieu`, `desc`, `date_pub`, `user_id`) VALUES
(6, '', 'deutshland', '12345 ', '2023-03-20 19:26:34', 10),
(7, '', 'marokko', 'wkjenfbeqofbewoufbewf', '2023-03-20 19:27:19', 10),
(8, '', 'hamburg', 'hallo ich bin ein monster', '2023-03-20 21:09:45', 10);

-- --------------------------------------------------------

--
-- Table structure for table `postuler`
--

CREATE TABLE `postuler` (
  `user_id` int(11) NOT NULL,
  `offre_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date_postulation` datetime NOT NULL DEFAULT current_timestamp(),
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `dated` date NOT NULL,
  `phone` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `Cv` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postuler`
--

INSERT INTO `postuler` (`user_id`, `offre_id`, `score`, `date_postulation`, `nom`, `prenom`, `mail`, `statut`, `dated`, `phone`, `message`, `Cv`, `id`) VALUES
(9, 6, 0, '0000-00-00 00:00:00', 'marouane', 'laamiri', 'maro@gmail.com', 'sans emploi', '2023-02-28', 2147483647, 'piuhyuiu', '74401-partie_2.pdf', 3),
(9, 6, 0, '2023-03-20 22:04:35', 'marouane', 'omar', 'mohammed@gmail.com', 'employe', '2023-03-07', 0, 'kjgyufgfihihoiuh', '31367-pv-tp-1.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `recruteur`
--

CREATE TABLE `recruteur` (
  `recruteur_id` int(11) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(60) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `tele` int(60) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nom`, `prenom`, `email`, `mdp`, `tele`, `user_type`) VALUES
(8, 'marouane', 'laamiri', 'maro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'recruteur'),
(9, 'rochdani', 'omar', 'omar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'candidat'),
(10, 'khayoussef', 'yahya', 'yahya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'recruteur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`candidat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`competence_id`);

--
-- Indexes for table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`domaine_id`),
  ADD KEY `offre_id` (`offre_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `candidat_id` (`candidat_id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`formation_id`),
  ADD KEY `candidat_id` (`candidat_id`);

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`offre_id`),
  ADD KEY `offre_ibfk_1` (`user_id`);

--
-- Indexes for table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offre_id` (`offre_id`),
  ADD KEY `postuler_ibfk_1` (`user_id`);

--
-- Indexes for table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`recruteur_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `candidat_id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competence`
--
ALTER TABLE `competence`
  MODIFY `competence_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `domaine_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `formation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `offre_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `recruteur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `candidat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `domaine`
--
ALTER TABLE `domaine`
  ADD CONSTRAINT `domaine_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `candidat_id` FOREIGN KEY (`candidat_id`) REFERENCES `candidat` (`candidat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`candidat_id`) REFERENCES `candidat` (`candidat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postuler`
--
ALTER TABLE `postuler`
  ADD CONSTRAINT `offre_id` FOREIGN KEY (`offre_id`) REFERENCES `offre` (`offre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postuler_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recruteur`
--
ALTER TABLE `recruteur`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
