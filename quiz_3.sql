-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 10:49 PM
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
-- Database: `quiz_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_emailpass`
--

CREATE TABLE `admin_emailpass` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_emailpass`
--

INSERT INTO `admin_emailpass` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `email_pass`
--

CREATE TABLE `email_pass` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_pass`
--

INSERT INTO `email_pass` (`email`, `password`) VALUES
('abc@gmail.com', 'abc'),
('anupam1@gmail.com', '123'),
('anupam@gmail.com', '123'),
('CristianoRonaldo@gmail.com', '123'),
('eefwef@gmail.com', '123efref'),
('moeen@gmail.com', 'moeen'),
('rakib@gmail.com', 'rakib123'),
('test@gmail.com', '123'),
('we@gmail.com', '123'),
('wwe@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `first_name`, `last_name`, `mid_name`, `address`, `contact`, `comment`) VALUES
(4, 'rakib', 'ul', 'banna', 'phpcrudegrtjnhr etjhn4r5ym n e', '5u75u56 mw5k', 'wgsrh'),
(8, 'Mahadi', 'hasan ', ' tanmoy', 'tallabag', '0765788789', '534tgeh dfhrtjnh gtnjrfn '),
(12, 'mir', 'hasan ', 'anupam', 'mirpur', '0765788789', 'rjkrytu n 4 '),
(13, 'Neymar Jr', '', '', 'spain', '', 'Neymar da Silva Santos Júnior, known as Neymar, is a Brazilian professional footballer who plays as a forward for Ligue 1 club Paris Saint-Germain and the Brazil national team. He is widely regarded as one of the best players in the world.'),
(15, 'Lionel', '', ' Messi', '', '', 'Lionel Andrés Messi is an Argentine professional footballer who plays as a forward or an attacking midfielder and captains the Argentina national team. He is currently a free agent, having played all his professional career for La Liga club FC Barcelona.'),
(16, 'Cristiano', '', 'Ronaldo', '', '', 'Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays as a forward for Serie A club Juventus and captains the Portugal national team.'),
(17, 'Paulo', '', 'Dybala', '', '', 'Paulo Exequiel Dybala is an Argentine professional footballer who plays as a forward for Serie A club Juventus and the Argentina national team.'),
(18, 'Mesut', '', 'Ozil', '', '', 'Mesut Özil is a German professional footballer who plays as an attacking midfielder for Süper Lig club Fenerbahçe. Nicknamed \"The Assist King\", Özil is known for his technical skills, creativity, agility, and finesse.'),
(19, 'Mauro', '', 'Icardi', '', '', 'Mauro Emanuel Icardi is an Argentine professional footballer who plays as a striker for Ligue 1 club Paris Saint-Germain and the Argentina national team.'),
(20, 'Di', '', ' Maria', '', '', 'Ángel Fabián Di María is an Argentine professional footballer who plays for Ligue 1 club Paris Saint-Germain and the Argentina national team. He can play as either a winger or attacking midfielder.'),
(21, 'Kylian', '', ' Mbappé', '', '', 'Kylian Mbappé Lottin is a French professional footballer who plays as a forward for Ligue 1 club Paris Saint-Germain and the France national team. Mbappé began his senior career with Ligue 1 club Monaco, making his professional debut in 2015, aged 16'),
(22, 'Mohamed', '', 'Salah', '', '', 'Mohamed Salah Hamed Mahrous Ghaly is an Egyptian professional footballer who plays as a forward for Premier League club Liverpool and captains the Egypt national team. Considered one of the best players in the world, he is known for his finishing, dribbling, and speed.'),
(23, 'Harry', '', ' Kane', '', '', 'Harry Edward Kane MBE is an English professional footballer who plays as a striker for Premier League club Tottenham Hotspur and captains the England national team. Regarded as one of the best strikers in the world, Kane is known for his prolific goalscoring record and ability to link play.'),
(24, 'Kevin De ', '', 'Bruyne', '', '', 'Kevin De Bruyne is a Belgian professional footballer who plays as a midfielder for Premier League club Manchester City, where he is vice-captain, and the Belgium national team.'),
(25, 'Philippe ', '', 'Coutinho', '', '', 'Philippe Coutinho Correia is a Brazilian professional footballer who plays as an attacking midfielder or winger for Spanish club Barcelona and the Brazil national team. He is known for his combination of vision, passing, dribbling and ability to conjure curving long-range strikes.');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `about`, `salary`) VALUES
('1', 'Neymar Jr', 'Neymar da Silva Santos Júnior, known as Neymar, is a Brazilian professional footballer who plays as a forward for Ligue 1 club Paris Saint-Germain and the Brazil national team. He is widely regarded as one of the best players in the world.', 40000),
('10', '', '', 0),
('11', 'banna', 'Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays as a forward for Serie A club Juventus and captains the Portugal national team.', 234),
('2', 'Lionel Messi', 'Lionel Andrés Messi is an Argentine professional footballer who plays as a forward or an attacking midfielder and captains the Argentina national team. He is currently a free agent, having played all his professional career for La Liga club FC Barcelona.', 50000),
('3', 'Cristiano Ronaldo', 'Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays as a forward for Serie A club Juventus and captains the Portugal national team.', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `usuer_id` varchar(30) NOT NULL,
  `usuer_name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`usuer_id`, `usuer_name`, `age`) VALUES
('1145', 'trety', 43),
('123', 'ddddd', 20),
('16', 'aaaaa', 33),
('191-35-2638', 'Rakib ul banna', 22),
('191-35-2657', 'tanmoy', 22),
('22', 'tommy', 55),
('23', 'korim', 34),
('23423', 'ertty', 55),
('4156', 'sss', 343);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_emailpass`
--
ALTER TABLE `admin_emailpass`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `email_pass`
--
ALTER TABLE `email_pass`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`usuer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
