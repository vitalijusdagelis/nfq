-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2017 at 10:07 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfq_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `last_name`, `first_name`) VALUES
(3, 'Itan', 'Braun'),
(4, 'Joshua', 'Glazer'),
(10, 'Miltiadis', 'Dr.'),
(11, 'Boboulos', 'A.'),
(14, 'Дагене', 'В. А.'),
(15, 'Григас', 'Г. К.'),
(16, 'Аугутис', 'К. Ф.'),
(17, 'Павловская', 'Т. А.'),
(18, 'Орлов', 'С. А.'),
(19, 'Цветков', 'А. С.'),
(20, 'Палий', 'И.А.'),
(21, 'Ponce', 'Pedro'),
(22, 'Molina', 'Arturo'),
(23, 'Ibarra', 'Gutierrez'),
(24, 'Princely', 'Ifinedo'),
(25, 'Matrai', 'Rita'),
(26, 'Crisan', 'Marius'),
(27, 'Usmani', 'Zeeshan-Ul-Hassan'),
(28, 'Wu', 'Gang'),
(29, 'Gradinarova', 'Boyka'),
(30, 'Sakurai', 'Shigeaki'),
(31, 'Karakehayov', 'Zdravko'),
(32, 'Kalloniatis', 'Christos'),
(33, 'Das Gupta', 'Mithun'),
(34, 'Riškus', 'Aleksas'),
(35, 'Maciulevičius', 'Stasys'),
(36, 'Kazanavičius', 'Egidijus'),
(37, 'Venčkauskas', 'Algimantas'),
(38, 'Paulauskaitė-Tarasevičienė', 'Agnė'),
(39, 'Kristina', 'Šutienė'),
(40, 'Baltrušaitis', 'Dominykas'),
(41, 'Misevičienė', 'Regina'),
(42, 'Prunskienė', 'Jurgita'),
(43, 'Šeinauskas', 'Rimantas'),
(44, 'Belevičius', 'Rimantas'),
(45, 'Gailutis Adomėnas', 'Petras'),
(46, 'Čeikienė', 'Nijolė'),
(47, 'Sokas', 'Algirdas'),
(48, 'Laucius', 'Juozas'),
(49, 'Vasilecas', 'Olegas'),
(50, 'Saulis', 'Algis');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `year`) VALUES
(3, 'Web Development with Node and Express: Leveraging the JavaScript Stack', 2017),
(4, 'Multiplayer Game Programming: Architecting Networked Games (Game Design)', 2017),
(13, 'Automation and Robotics', 2008),
(14, '100 задач по программированию', 1993),
(15, 'С#, Программирование на языке высокого уровня', 2016),
(16, 'Теория и практика языков программирования', 2014),
(17, 'Язык программирования PASCAL, Система программирования ABC Pascal, 7-9 класс', 2013),
(18, 'Web - Сайт без секретов - издание 2', 2006),
(19, 'Линейное программирование, учебное пособие.', 2008),
(20, 'Automation and Control Trends', 2016),
(21, 'E-Business - Applications and Global Acceptance', 2012),
(22, 'User Interfaces', 2010),
(23, 'Convergence and Hybrid Information Technologies', 2010),
(24, 'Web Intelligence and Intelligent Agents', 2010),
(25, 'Semantic Web', 2010),
(26, 'E-Learning - Instructional Design, Organizational Strategy and Management', 2015),
(27, 'Theory and Applications for Advanced Text Mining', 2012),
(28, 'Data Acquisition Applications', 2012),
(29, 'Modern Information Systems', 2012),
(30, 'Innovative Information Systems Modelling Techniques', 2012),
(31, 'Security Enhanced Applications for Information Systems', 2012),
(32, 'Watermarking - Volume 2', 2012),
(33, 'Programavimas JAVA. Pirmoji pažintis', 2012),
(34, 'Kompiuterių architektūra', 2015),
(35, 'Sistemų imitacinis modeliavimas ir analizė ARENA aplinkoje', 2014),
(36, 'Informacijos išteklių valdymas', 2012),
(37, 'Įmonės verslo apskaitos kompiuterizavimas', 2008),
(38, 'Elektroninė skaičiuoklė Microsoft Excel 2010', 2013),
(39, 'Programinės įrangos ir aparatūros testavimo principai', 2012),
(40, 'Programavimas C++', 2012),
(41, 'Dvejetainio programavimo pagrindai', 2006),
(42, 'Grafikos programavimas VBA kalba', 2006),
(43, 'Grafinių objektų ir informacijos valdymas VBA kalba', 2007),
(44, 'Informacinių sistemų projektų ir kokybės valdymas', 2008),
(45, 'Informacinių sistemų projektavimo metodai', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`book_id`, `author_id`) VALUES
(3, 3),
(4, 4),
(14, 14),
(14, 15),
(14, 16),
(15, 17),
(16, 18),
(17, 19),
(18, 18),
(19, 20),
(20, 21),
(20, 22),
(20, 23),
(21, 24),
(22, 25),
(23, 26),
(24, 27),
(25, 28),
(26, 29),
(27, 30),
(28, 31),
(29, 32),
(30, 32),
(31, 32),
(32, 33),
(33, 34),
(34, 35),
(34, 36),
(34, 37),
(35, 38),
(35, 39),
(36, 40),
(37, 41),
(38, 42),
(39, 43),
(40, 44),
(41, 45),
(41, 46),
(42, 47),
(43, 47),
(44, 48),
(44, 49),
(45, 49),
(45, 50);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`) VALUES
(3, 3),
(4, 4),
(14, 5),
(15, 6),
(16, 5),
(17, 7),
(18, 5),
(19, 5),
(20, 8),
(20, 9),
(21, 10),
(22, 10),
(23, 10),
(24, 10),
(25, 10),
(26, 11),
(27, 11),
(28, 11),
(29, 11),
(30, 11),
(31, 11),
(32, 11),
(33, 12),
(34, 13),
(35, 13),
(36, 13),
(37, 13),
(38, 13),
(39, 13),
(40, 14),
(41, 15),
(42, 16),
(43, 16),
(44, 13),
(45, 13);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(3, 'JavaScript'),
(4, 'Game Programming'),
(5, 'Программирование'),
(6, 'С#'),
(7, 'PASCAL'),
(8, 'Robotics'),
(9, 'Automation'),
(10, 'Web Engineering'),
(11, 'Information and Knowledge Engineering'),
(12, 'JAVA'),
(13, 'Informatika'),
(14, 'C++'),
(15, 'Programavimas'),
(16, 'VBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);

--
-- Constraints for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
