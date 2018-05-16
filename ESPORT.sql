-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2018 at 07:39 PM
-- Server version: 10.1.23-MariaDB-9+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ESPORT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Forum_posts`
--

CREATE TABLE `Forum_posts` (
  `id_post` int(8) NOT NULL,
  `contenu` text NOT NULL,
  `sujet` int(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `supprimable` int(11) DEFAULT '1',
  `mail` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Forum_posts`
--

INSERT INTO `Forum_posts` (`id_post`, `contenu`, `sujet`, `date`, `supprimable`, `mail`) VALUES
(27, 'Test1.', 17, '2018-05-16 18:16:24', 0, 'tanounou92@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `Forum_sujet`
--

CREATE TABLE `Forum_sujet` (
  `id_sujet` int(8) NOT NULL,
  `sujet` varchar(300) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mail` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Forum_sujet`
--

INSERT INTO `Forum_sujet` (`id_sujet`, `sujet`, `date`, `mail`) VALUES
(17, 'Test', '2018-05-16 18:16:24', 'tanounou92@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `zng_user`
--

CREATE TABLE `zng_user` (
  `pseudo` varchar(35) NOT NULL,
  `mail` varchar(35) NOT NULL,
  `mdp` varchar(35) NOT NULL,
  `niveau_importance` int(8) NOT NULL,
  `date_inscription` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zng_user`
--

INSERT INTO `zng_user` (`pseudo`, `mail`, `mdp`, `niveau_importance`, `date_inscription`) VALUES
('Dragyk', 'clashk304@gmail.com', 'f9ce3f98b6f3c90279476cbfb5b3751b', 0, '2018-05-13 16:46:22'),
('Tisamak', 'tanounou92@hotmail.fr', '42daff519ea82d7d08ae063ca0b6d186', 1, '2018-05-16 18:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Forum_posts`
--
ALTER TABLE `Forum_posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `sujet` (`sujet`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `Forum_sujet`
--
ALTER TABLE `Forum_sujet`
  ADD PRIMARY KEY (`id_sujet`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `zng_user`
--
ALTER TABLE `zng_user`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Forum_posts`
--
ALTER TABLE `Forum_posts`
  MODIFY `id_post` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `Forum_sujet`
--
ALTER TABLE `Forum_sujet`
  MODIFY `id_sujet` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Forum_posts`
--
ALTER TABLE `Forum_posts`
  ADD CONSTRAINT `Forum_posts_ibfk_1` FOREIGN KEY (`sujet`) REFERENCES `Forum_sujet` (`id_sujet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Forum_posts_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `zng_user` (`mail`) ON DELETE CASCADE;

--
-- Constraints for table `Forum_sujet`
--
ALTER TABLE `Forum_sujet`
  ADD CONSTRAINT `Forum_sujet_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `zng_user` (`mail`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
