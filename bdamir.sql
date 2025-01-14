-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 jan. 2024 à 02:15
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdamir`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `image`) VALUES
(3, 'Ecran ', 'ec.jpg\r\n'),
(4, 'carte graphique', 'cart.jpg'),
(5, 'souris', 'ss.jpg'),
(6, 'processeur', 'proc.jpg'),
(7, 'telephones', 'tel.jpg\r\n'),
(20, 'airpods', 'qa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `scat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `scat_id`, `cat_id`, `description`, `prix`, `image`) VALUES
(1, 'SAMSUNG A21', 14, 7, 'joli beau sympa', 4522, 'samsung.png'),
(3, 'Iphone 13', 11, 7, 'awesome', 3500, '13.jpg'),
(8, 'sumsung a51', 14, 7, 'Double SIM - Ecran Infinity-O 6.5', 1603, 'a51.jpg'),
(9, 'iphone 14 pro max', 11, 7, 'Ecran 6,1 OLED Super Retina XDR HDR - Résolution: 2532 x 1170 pixels à 460 ppp - Processeur: Puce A15 Bionic (5 nm) Hexa-core ( 2 x 3.22 GHz Avalanche ', 4500, '14.jpg'),
(10, 'ryzen 9', 13, 6, 'Processeur - AMD Ryzen 7 5800X (3.8 GHz / 4.7 GHz) : Performances puissantes pour le gaming et les tâches intensives.', 900, 'rayzen-proc3.jpg'),
(11, 'ryzen 5', 13, 6, 'Processeur - Performances puissantes pour le gaming et les tâches intensives.', 700, 'rayzen-proc2.jpg'),
(12, ' core i9', 12, 6, 'Avec la génération de processeurs Cascade Lake X, dont le processeur Core i9 10980XE Extreme Edition fait partie, Intel met à votre disposition une ', 30001, 'i-proc3.jpg'),
(13, 'core i3', 12, 6, 'la génération de processeurs Cascade', 2000, 'proc-i3.jpg'),
(14, 'ECRAN GAMING ', 18, 3, 'ECRAN GAMING INCURVÉ MSI OPTIX 27\" WQHD MPG27CQ2 / 144 HZ', 700, 'msi-ec.jpg'),
(15, 'ecran 24 pouce', 17, 3, 'ecran dell 24 pouce', 430, 'dl.jpg'),
(16, 'Radeon™ RX 6800 16G', 15, 4, 'Powered by AMD Radeon™ RX 6800 RDNA™ 2 Architecture with Hardware Raytracing High Performance 4K Gaming AMD FidelityFX Radeon™ Anti-Lag Modern Display Technologies PCI Express 4.0 Support 16GB GDDR6 256-bit memory interface Features HDMIx1/ DisplayPortx2/ USB-Cx1 System power supply requirement: 650W', 2051, 'png.png'),
(17, 'Radeon 7', 15, 4, 'Radeon™ RX 7800 32G', 5000, 'rr.jpg'),
(18, 'TUF Gaming GeForce RTX™ 3070', 16, 4, ' Design optimisé et performances thermiques de haut-niveau', 890, '3070.jpg'),
(19, 'GeForce® GTX 1650', 16, 4, 'Nouveaux multiprocesseurs de streaming : Indispensables pour la création du GPU le plus rapide et le plus performant au monde, ils multiplient par deux le débit en FP32 et améliorent l’efficience énergétique du GPU', 654, 'nvid.png'),
(20, 'Casque sans fil Bluetooth 5.0', 19, 20, 'Casque sans fil Bluetooth 5.0 - Son JBL Pure Bass - Moteur dynamique 32 mm - Impédance 32 ohms - Sensibilité des Haut-Parleurs à 1kHz / 1mW 103.5 ', 400, 'jbh.jpg'),
(21, 'casque bluetooth', 20, 20, 'Casque sans fil Bluetooth 5.0 - Son JBL Pure Bass - Moteur dynamique 32 mm - Impédance 32 ohms - Sensibilité des Haut-Parleurs à 1kHz / 1mW 103.5 ', 200, 'product-15.png'),
(22, 'ecouteur bluthetoo', 20, 20, 'Écouteurs Xiami Redmi Sans Fil Avec Microphone TWSEJ061LS - Connectivité Sans Fil: Bluetooth 5.0 - Microphone intégré - Taille du haut-parleur: 7.2mm .', 99, 'eq.jpg'),
(23, 'JBL Wave Beam', 19, 20, 'Son JBL Deep Bass Ajustement confortable Jusqu’à 32 heures (8 h + 24 h) d’autonomie cumulée de la batterie avec la recharge rapide', 700, 'eqo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `scategories`
--

CREATE TABLE `scategories` (
  `id` int(11) NOT NULL,
  `scat_name` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `scategories`
--

INSERT INTO `scategories` (`id`, `scat_name`, `image`, `cat_id`) VALUES
(11, 'apple', 'app.png', 7),
(12, 'intel', 'intel.png', 6),
(13, 'ryzen', 'ryzen.jpg', 6),
(14, 'android', 'android.png', 7),
(15, 'radeon', 'radeon.png', 4),
(16, 'nvidia', 'nvidia.jpg', 4),
(17, 'dell', 'dell.png', 3),
(18, 'msi', 'msi.png', 3),
(19, 'jbl', 'jbl.png', 20),
(20, 'xiaomi', 'mi.png', 20);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(7, 'amir', 'amir@amir', 'e10adc3949ba59abbe56e057f20f883e', 2),
(9, 'azert', 'aaa@email.com', '25f9e794323b453885f5181f1b624d0b', 2),
(11, '', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(12, 'mohamed', 'mohamed@email.com', '309cd3800aacbd003ac36199fa537295', 2),
(15, 'amir', 'amirabdeddaiem03@email.com', '3101f202888485592fa697a1c7f64405', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `scategories`
--
ALTER TABLE `scategories`
  ADD CONSTRAINT `scategories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
