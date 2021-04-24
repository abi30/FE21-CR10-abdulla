-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 09:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_biglibrary_abdulla`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `pub_date` date NOT NULL,
  `media_type` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `isbn` int(50) NOT NULL,
  `aut_fname` varchar(255) NOT NULL,
  `aut_lname` varchar(255) NOT NULL,
  `pub_name` varchar(255) NOT NULL,
  `pub_address` varchar(255) NOT NULL,
  `pub_size` varchar(50) NOT NULL,
  `availability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `picture`, `title`, `pub_date`, `media_type`, `description`, `isbn`, `aut_fname`, `aut_lname`, `pub_name`, `pub_address`, `pub_size`, `availability`) VALUES
(21, 'IMG-60837da70c8224.93850402.jpg', 'love is blind', '2020-11-16', 'CD', 'romantic adfdfdf', 12321231, 'mr ', 'karl', 'wien prass', 'austira', 'MEDIUM', 12),
(22, 'IMG-6083a8d1b12fa4.05065541.jpg', 'Batman The Dark Knigh', '2019-05-24', 'CD', 'After showing his directorial talents with Memento, Warner Bros studios took a big gamble giving the reigns of Batman over to Christopher Nolan - it was only his third studio picture, fourth overall.', 321234321, 'Christopher ', 'Nolan', 'Hollywood', 'USA', 'BIG', 10),
(23, 'IMG-60838953cc6502.16813946.jpg', 'The Lodgers', '2016-06-17', 'CD', '1920, rural Ireland. Anglo Irish twins Rachel and Edward share a strange existence in their crumbling family estate. Each night, the property becomes the domain of a sinister presence ', 56009870, 'David ', 'Turpin', 'Hollywood', 'USA', 'BIG', 4),
(24, 'IMG-60838a3d7555b9.74866236.jpg', 'Beast of Burden', '2018-05-24', 'CD', 'Sean Haggerty only has an hour to deliver his illegal cargo. An hour to reassure a drug cartel, a hitman, and the DEA that nothing is wrong.', 767903, ' Adam ', 'Hoelzel', 'Hollywood', 'USA', 'BIG', 12),
(25, 'IMG-60838b903a0de8.93652768.jpg', 'The Chamber', '2017-03-10', 'CD', 'A claustrophobic survival thriller set beneath the Yellow Sea off the coast of North Korea where the pilot of a small submersible craft ', 6543176, 'Ben ', 'Parker', 'Cinema of the United Kingdom', 'UK', 'MEDIUM', 4),
(26, 'IMG-60838d8456a4f4.23732607.jpg', 'Death Wish', '2018-06-24', 'CD', 'Dr. Paul Kersey is an experienced trauma surgeon, a man who has spent his life saving lives. After an attack on his family, Paul embarks.', 43543254, 'Joe ', 'Carnahan', 'Hoolywood', 'USA', 'BIG', 3),
(27, 'IMG-6083adaf38a583.43498467.jpg', 'Gringo', '2018-06-24', 'DVD', 'An exhilarating mix of dark comedy, white-knuckle action and dramatic intrigue, Gringo joyrides into Mexico, where mild-mannered businessman Harold', 564365775, 'Anthony ', 'Tambakis', 'Cinema of Austria', 'Austria', 'SMALL', 7),
(28, 'IMG-6083af0464e263.00421745.jpg', 'Ett veck i tiden', '2018-04-10', 'DVD', 'After the disappearance of her scientist father, three peculiar beings send Meg, her brother, and her friend to space in order to find him.', 54365400, ' Jennifer ', 'Lee ', 'Hollywood', 'USA', 'MEDIUM', 2),
(29, 'IMG-6083b055916ec0.50194295.jpg', 'KGF Chapter-1', '2018-12-20', 'DVD', 'In the 1970s, a fierce rebel rises against brutal oppression and becomes the symbol of hope to legions of downtrodden people.', 454534512, 'Prashanth ', 'Neel', 'Bollywood', 'India', 'MEDIUM', 5),
(30, 'IMG-6083b20f916dc5.64921204.jpg', 'Murder on the Orient Express', '2017-02-16', 'DVD', 'When a murder occurs on the train on which he is travelling, celebrated detective Hercules Poirot is recruited to solve the case.', 56765009, 'Michael', 'Green', 'Enga Chinna Rasa', 'RASSA', 'SMALL', 5),
(31, 'IMG-6083b38f30dee8.30715422.jpg', 'Avatar', '2009-10-24', 'DVD', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 89700980, 'James ', 'Cameron', 'Hollywood', 'USA', 'BIG', 0),
(32, 'IMG-6083b499433942.35677489.jpg', 'Moving Beyond', '2021-04-13', 'BOOK', 'Fleur Leussink has been named one of the best mediums by LA Magazine and her innate ability to communicate with loved ones.', 2147483647, 'Fleur', ' Leussink', 'HODDER & STOUGHTON', 'United Kingdom', 'MEDIUM', 12),
(33, 'IMG-6083b59f0fdae5.83738458.jpg', 'It Didnt Start with You', '2017-09-06', 'BOOK', 'Inherited family trauma is currently an area of growing interest, as science increasingly explores what we know intuitively: that the effects of trauma can.', 1101980389, 'Mark ', ' Wolynn', 'Penguin Putnam Inc', 'United States', 'MEDIUM', 12),
(34, 'IMG-6083b666ae61d8.21506398.jpg', 'Complex PTSD', '2013-06-24', 'BOOK', 'I have Complex PTSD [Cptsd] and wrote this book from the perspective of someone who has experienced a great reduction of symptoms over the years', 1492871842, 'Pete ', 'Walker', 'Createspace Independent Publishing Platform', 'United Kingdom', 'BIG', 10),
(35, 'IMG-6083b73f9ccde5.34701393.jpg', 'Mans Search For Meaning', '2015-06-24', 'BOOK', 'A prominent Viennese psychiatrist before the war, Viktor Frankl was uniquely able to observe the way that he and other inmates coped', 1846041244, 'Viktor E ', 'Frankl', 'Ebury Publishing', 'United kingdom', 'SMALL', 2),
(36, 'IMG-6083b7e33588c7.65227670.jpg', 'Surrounded by Idiots', '2019-07-24', 'BOOK', 'Do you ever think youre the only one making any sense? Or tried to reason with your partner with disastrous results?', 1785042181, 'Thomas', ' Erikson', 'Ebury Publishing', 'USA', 'BIG', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picture` (`picture`),
  ADD KEY `title` (`title`),
  ADD KEY `pub_date` (`pub_date`),
  ADD KEY `media_type` (`media_type`),
  ADD KEY `description` (`description`),
  ADD KEY `isbn` (`isbn`),
  ADD KEY `aut_fname` (`aut_fname`),
  ADD KEY `aut_lname` (`aut_lname`),
  ADD KEY `pub_name` (`pub_name`),
  ADD KEY `pub_address` (`pub_address`),
  ADD KEY `pub_size` (`pub_size`),
  ADD KEY `availability` (`availability`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
