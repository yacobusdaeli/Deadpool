-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 11:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deadpool`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `film` varchar(50) NOT NULL,
  `genre` varchar(70) NOT NULL,
  `director` varchar(70) NOT NULL,
  `writers` varchar(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `film`, `genre`, `director`, `writers`, `sinopsis`, `trailer`) VALUES
(6, 'DEADPOOL I (2016)', 'Action, Comedy', 'Tim Millerr.', 'Rhett Reese, Paul Wernick', '\"Deadpool,\" the 2016 film, tells the origin story of Wade Wilson, a former Special Forces operative turned wisecracking mercenary. Wade\'s life takes a turn when he is diagnosed with terminal cancer. In a desperate attempt to cure himself and be with his girlfriend Vanessa Carlysle, he undergoes a rogue experimental treatment that triggers a mutation, giving him accelerated healing powers but also leaving him horribly disfigured.', '20bpjtCbCz0'),
(7, 'Deadpool II (2018)', 'Action, Comedy', 'David Leitch', 'Rhett Reese, Paul Wernick, Ryan Reynolds', '\"Deadpool 2\" continues the story of Wade Wilson, known as Deadpool. Following the events of the first film, Wade grapples with finding purpose while utilizing his healing abilities gained from an experiment that drastically altered his appearance. When he encounters a teenage mutant named Russell in peril, Deadpool feels compelled to protect him from a time-traveling soldier named Cable. To take on Cable and save Russell, Deadpool forms an eccentric team called the \"X-Force,\" filled with humorous and action-packed antics characteristic of Deadpool. Along this adrenaline-fueled journey, Deadpool also confronts personal struggles, discovering the true meaning of being a hero.', '20bpjtCbCz0');

-- --------------------------------------------------------

--
-- Table structure for table `pemeran`
--

CREATE TABLE `pemeran` (
  `id_tokoh` int(11) NOT NULL,
  `nama_asli` varchar(255) NOT NULL,
  `nama_tokoh` varchar(255) NOT NULL,
  `nama_panjang` varchar(70) NOT NULL,
  `lahir` varchar(80) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tahun_aktif` varchar(50) NOT NULL,
  `biografi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fotocard` varchar(255) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemeran`
--

INSERT INTO `pemeran` (`id_tokoh`, `nama_asli`, `nama_tokoh`, `nama_panjang`, `lahir`, `negara`, `pekerjaan`, `tahun_aktif`, `biografi`, `foto`, `fotocard`, `id_film`) VALUES
(8, 'RYAN REYNOLDS', 'DEADPOOL', 'Ryan Rodney Reynolds', '23 Oktober 1976, Vancouver, British Columbia, Canada', 'Canada - United States', 'Actor, Producer, Businessmen, and Writer', '1991', 'Deadpool is the alter ego of Wade Wilson, a disfigured Canadian mercenary with superhuman regenerative healing abilities. He is known for his tendency to joke incessantly and break the fourth wall for humorous effect', 'card.png', 'card1.jpg', 6),
(9, 'ED SKREIN', 'AJAX', 'Ed Skrein', 'UK', 'British', 'Actor, Rapper', '1990', 'Edward George \"Ed\" Skrein is an English rapper and actor. Outside his rap career, he is best known for his roles as Daario Naharis in the series Game of Thrones and Francis Freeman / Ajax in the film Deadpool.', 'ajax.jpeg', 'card4.jpeg', 6),
(10, 'MORENA BACCARIN', 'VANESSA', 'Morena Baccarin', 'Brazil', 'Brazil and United State of America', 'Artist', '2000', 'Morena Baccarin is a Brazilian-American actress known for her roles in TV series like \"Firefly,\" \"Homeland,\" and for portraying Vanessa Carlysle in the films \"Deadpool\" and \"Deadpool 2.\"\r\nBorn: Morena Baccarin was born on June 2, 1979, in Rio de Janeiro, Brazil.\r\nCitizenship: She holds dual citizenship, Brazilian and American.', 'morena baccarin.jpeg', 'card2.jpeg', 6),
(11, 'GINA CARANO', 'ANGEL DUST', 'GINA CARANO', 'April 16, 1982, in Dallas County, Texas, United States.', 'United State of America', 'Actress, former mixed martial artist', '2006', 'Gina Carano is an American actress and former mixed martial artist. She gained prominence for her roles in entertainment and her accomplishments in the field of martial arts. Carano transitioned from a successful career in mixed martial arts to acting. She is known for her roles in films such as \"Haywire\" and \"Fast & Furious 6,\" showcasing her skills both as an actress and a physical performer.', 'idaqmgf07jv8o92bnip6a6ltd6-5765ae2732b18437ecb7fc3cae17edcb.png', 'card3.jpg', 6),
(12, 'T. J. MILLER', 'WEASEL', 'T. J. Miller', 'June 4, 1981, in Denver, Colorado, United States.', 'United State of America', '0', '2007 - present', 'T.J. Miller is an American actor and comedian known for his distinct comedic style and acting roles in various films and television shows. He\'s recognized for his contributions to the entertainment industry as both an actor and a stand-up comedian.', 'Miller.jpg', 'card5.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_user`, `username`, `email`, `role`, `password`) VALUES
(2, '', 'admin_firman@gmail.com', 'admin', 'admin'),
(3, 'panji', 'panji@gmail.com', 'user', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `pemeran`
--
ALTER TABLE `pemeran`
  ADD PRIMARY KEY (`id_tokoh`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemeran`
--
ALTER TABLE `pemeran`
  MODIFY `id_tokoh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
