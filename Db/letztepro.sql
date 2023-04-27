-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Apr 2023 um 10:42
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `letztepro`
--
CREATE DATABASE IF NOT EXISTS `letztepro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `letztepro`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `date_adop` date NOT NULL,
  `fk_pet_id` int(11) DEFAULT NULL,
  `fk_users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `adoption`
--

INSERT INTO `adoption` (`id`, `date_adop`, `fk_pet_id`, `fk_users_id`) VALUES
(1, '2023-04-05', 13, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adoption_applications`
--

CREATE TABLE `adoption_applications` (
  `application_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_email` varchar(255) NOT NULL,
  `applicant_phone` varchar(255) NOT NULL,
  `applicant_address` text NOT NULL,
  `applicant_occupation` varchar(255) DEFAULT NULL,
  `applicant_experience` text DEFAULT NULL,
  `application_status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dis` text NOT NULL,
  `siz` enum('S','M','L') DEFAULT NULL,
  `age` varchar(30) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `vaccinated` enum('yes','No') NOT NULL DEFAULT 'yes',
  `status` enum('avalible','not avalible') DEFAULT NULL,
  `species` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `pets`
--

INSERT INTO `pets` (`pet_id`, `name`, `picture`, `location`, `dis`, `siz`, `age`, `breed`, `vaccinated`, `status`, `species`) VALUES
(13, 'Rio', 'https://cdn.pixabay.com/photo/2014/06/21/08/43/rabbit-373691__480.jpg', 'Wien 1160', 'Die Hasen sind eine Säugetierfamilie aus der Ordnung der Hasenartigen', 'S', '2', 'Guide & Top Facts', 'yes', 'not avalible', 'rabbit'),
(25, 'Demos', '644a2a3b895b7.jpg', 'Wien 1220', 'dogs ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '3', 'Akito', 'yes', 'avalible', 'dog'),
(26, 'Rio', '644a2c3417971.jpg', 'Niederösterreich', 'Horse ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'M', '7', 'white horse', 'yes', 'avalible', 'horse'),
(27, 'Bella', '644a2d37677e3.jpg', 'Spanien', 'fische ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '8', 'fish', 'No', 'avalible', 'fish'),
(28, 'Rolla', '644a2dea68f06.jpg', 'österreich', 'Rabbit ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'M', '4', 'rabbit', 'yes', 'avalible', 'rabbit'),
(29, 'Boo Boo', '644a2e203abc8.jpg', 'Linz 5263', 'Dogs ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'L', '6', 'dogs', 'yes', 'avalible', 'dog'),
(30, 'Goldie', '644a2eb347b18.jpg', 'Syria', 'Horse ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'M', '7', 'horse', 'yes', 'avalible', 'horse'),
(31, 'Adele', '644a2f46d91ce.jpg', 'Lebanon', 'fish ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '3', 'fish', 'yes', 'avalible', 'fish'),
(32, 'Dora', '644a2f888accd.jpg', 'Spanien', 'Ducks ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'L', '2', 'duck', 'No', 'avalible', 'duck'),
(33, 'Pilot', '644a2fc775daf.jpg', 'südan', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '5', 'papagei', 'yes', 'avalible', 'papagei'),
(34, 'Dalaa', '644a300b51466.jpg', 'Salzburg', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '3', 'dog', 'No', 'avalible', 'dog'),
(35, 'Berla', '644a30dd23c6d.jpg', 'Wien 1160', 'Squirrel ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '7', 'squirrel', 'yes', 'avalible', 'squirrel'),
(36, 'Rasel', '644a31149b2e7.jpg', 'Italien', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '1', 'rabbit', 'yes', 'avalible', 'rabbit'),
(37, 'Fraulla', '644a31597a884.jpg', 'Türkei', 'Fish ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '1', 'fish', 'No', 'avalible', 'fish'),
(38, 'Dema', '644a31bc05836.jpg', 'Ungarn', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'M', '9', 'papagei', 'yes', 'avalible', 'papagei'),
(39, 'Droganal', '644a346cba3b5.jpg', 'Syria', 'dogs ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '4', 'dog', 'yes', 'avalible', 'dog'),
(40, 'Maysa', '644a32e86232f.jpg', 'Frankreich', 'duck ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '6', 'duck', 'yes', 'avalible', 'duck'),
(41, 'Parot', '644a33290d98e.jpg', 'Balli', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'S', '8', 'papagei', 'No', 'avalible', 'papagei'),
(42, '', '644a33830d364.jpg', 'London', 'Papageien ernähren sich vor allem von pflanzlicher Kost wie Früchten, Samen, Blüten, Blättern, Rinde, Wurzeln mit', 'L', '3', 'squirrel', 'No', 'avalible', 'squirrel');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` enum('adm','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `date_of_birth`, `email`, `address`, `picture`, `status`) VALUES
(1, 'Aya', 'Ayaa', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2023-04-05', 'Aya@hotmail.com', '', 'avatar.png', 'user'),
(2, 'Miral', 'MiMi', '701fd6f18a46f7c72397c91b9cb1a6353744b9cca3aa329af5e5e1124b6b8c5a', '2023-04-07', 'nour@hotmail.com', '', 'avatar.png', 'adm'),
(4, 'firstname', 'tester', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2023-04-06', 'tester@hotmail.com', '', 'avatar.png', 'user'),
(5, 'mohamad', 'asdasd', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2023-04-17', 'mohamad@hotmail.com', '', 'avatar.png', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pet_id` (`fk_pet_id`),
  ADD KEY `fk_users_id` (`fk_users_id`);

--
-- Indizes für die Tabelle `adoption_applications`
--
ALTER TABLE `adoption_applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Indizes für die Tabelle `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `adoption_applications`
--
ALTER TABLE `adoption_applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`fk_pet_id`) REFERENCES `pets` (`pet_id`),
  ADD CONSTRAINT `adoption_ibfk_2` FOREIGN KEY (`fk_users_id`) REFERENCES `users` (`id`);

--
-- Constraints der Tabelle `adoption_applications`
--
ALTER TABLE `adoption_applications`
  ADD CONSTRAINT `adoption_applications_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
