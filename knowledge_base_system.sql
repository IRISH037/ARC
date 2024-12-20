-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 04:45 AM
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
-- Database: `knowledge base system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ampere`
--

CREATE TABLE `ampere` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ampere`
--

INSERT INTO `ampere` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 10', 5, 'My Favorite place!', 1728976939);

-- --------------------------------------------------------

--
-- Table structure for table `baguio`
--

CREATE TABLE `baguio` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baguio`
--

INSERT INTO `baguio` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test14', 4, 'Calm vibes with coffee', 1729130517);

-- --------------------------------------------------------

--
-- Table structure for table `basco`
--

CREATE TABLE `basco` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basco`
--

INSERT INTO `basco` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 13', 5, 'Super calm and fresh air', 1728980988),
(12, 'cutie', 4, 'panget', 1730277669),
(13, 'tes', 4, 'goods', 1733468149),
(14, 'hgfd', 4, 'goods', 1734664033);

-- --------------------------------------------------------

--
-- Table structure for table `binondo`
--

CREATE TABLE `binondo` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binondo`
--

INSERT INTO `binondo` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 19', 5, 'Beautiful place and full of memories.', 1729139275);

-- --------------------------------------------------------

--
-- Table structure for table `blossom`
--

CREATE TABLE `blossom` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blossom`
--

INSERT INTO `blossom` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Hi', 4, 'VCutie', 1728971161);

-- --------------------------------------------------------

--
-- Table structure for table `bonuan`
--

CREATE TABLE `bonuan` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bonuan`
--

INSERT INTO `bonuan` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 8', 4, 'Cute <3', 1728976403);

-- --------------------------------------------------------

--
-- Table structure for table `calle`
--

CREATE TABLE `calle` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calle`
--

INSERT INTO `calle` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(7, 'Bogard', 5, 'beri nice beaw', 1728971774);

-- --------------------------------------------------------

--
-- Table structure for table `caving`
--

CREATE TABLE `caving` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caving`
--

INSERT INTO `caving` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 21', 5, 'Good!', 1729144954);

-- --------------------------------------------------------

--
-- Table structure for table `dino`
--

CREATE TABLE `dino` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dino`
--

INSERT INTO `dino` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 16', 4, 'Super fun for kids', 1729137904);

-- --------------------------------------------------------

--
-- Table structure for table `hills`
--

CREATE TABLE `hills` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hills`
--

INSERT INTO `hills` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(10, 'Test 4', 5, 'Super calm!', 1728975286);

-- --------------------------------------------------------

--
-- Table structure for table `hitorical`
--

CREATE TABLE `hitorical` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hitorical`
--

INSERT INTO `hitorical` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(10, 'Test 2', 5, 'Very nice!', 1728972466);

-- --------------------------------------------------------

--
-- Table structure for table `hopping`
--

CREATE TABLE `hopping` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hopping`
--

INSERT INTO `hopping` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 20', 5, 'Good!', 1729144931);

-- --------------------------------------------------------

--
-- Table structure for table `intramuros`
--

CREATE TABLE `intramuros` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intramuros`
--

INSERT INTO `intramuros` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 18', 5, 'history is my favorite subject rn because of this place', 1729138541);

-- --------------------------------------------------------

--
-- Table structure for table `kayak`
--

CREATE TABLE `kayak` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kayak`
--

INSERT INTO `kayak` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 23', 5, 'Good!', 1729144989);

-- --------------------------------------------------------

--
-- Table structure for table `little`
--

CREATE TABLE `little` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `little`
--

INSERT INTO `little` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 11', 5, 'So clean and good services', 1728977968);

-- --------------------------------------------------------

--
-- Table structure for table `mahaba`
--

CREATE TABLE `mahaba` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahaba`
--

INSERT INTO `mahaba` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 9 ', 5, 'Beautiful Place', 1728976769);

-- --------------------------------------------------------

--
-- Table structure for table `mayon`
--

CREATE TABLE `mayon` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mayon`
--

INSERT INTO `mayon` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(9, 'Test 1', 3, 'Good ', 1728972237);

-- --------------------------------------------------------

--
-- Table structure for table `mop`
--

CREATE TABLE `mop` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mop`
--

INSERT INTO `mop` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(10, 'Test 28', 5, 'MOP\n', 1729498330);

-- --------------------------------------------------------

--
-- Table structure for table `museum`
--

CREATE TABLE `museum` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `museum`
--

INSERT INTO `museum` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 17', 5, 'I love the story of this place', 1729138132);

-- --------------------------------------------------------

--
-- Table structure for table `nacpan`
--

CREATE TABLE `nacpan` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nacpan`
--

INSERT INTO `nacpan` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(8, 'Berto', 2, 'Beri mindful', 1728972024);

-- --------------------------------------------------------

--
-- Table structure for table `ocean`
--

CREATE TABLE `ocean` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ocean`
--

INSERT INTO `ocean` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 5', 4, 'I love animals', 1728975560);

-- --------------------------------------------------------

--
-- Table structure for table `patar`
--

CREATE TABLE `patar` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patar`
--

INSERT INTO `patar` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'sdqasdasdafa', 3, 'asdas', 1728967460),
(2, 'sasaSFFD', 2, 'ASAw', 1728967501);

-- --------------------------------------------------------

--
-- Table structure for table `playa`
--

CREATE TABLE `playa` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playa`
--

INSERT INTO `playa` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 12', 5, 'Nature trip is amazing in this place.', 1728978132);

-- --------------------------------------------------------

--
-- Table structure for table `pulag`
--

CREATE TABLE `pulag` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pulag`
--

INSERT INTO `pulag` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 24', 5, 'Good!', 1729145009);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'hehehhehe', 4, 'wqdqweq', 1728277144),
(2, 'Anonymous', 5, 'Nice view!', 1728277919),
(3, 'dwqwq', 1, 'wqeqw', 1728279889),
(4, 'dwqwq3rerg', 2, 'webqwhkebqwbwl', 1728279949),
(5, 'doglas', 2, 'iniwan ako eh', 1728544514),
(6, 'good', 3, 'good', 1728888905);

-- --------------------------------------------------------

--
-- Table structure for table `saud`
--

CREATE TABLE `saud` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saud`
--

INSERT INTO `saud` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 6', 5, 'Cute', 1728975837);

-- --------------------------------------------------------

--
-- Table structure for table `scuba`
--

CREATE TABLE `scuba` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scuba`
--

INSERT INTO `scuba` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 25', 5, 'Good!', 1729145025);

-- --------------------------------------------------------

--
-- Table structure for table `skyranch`
--

CREATE TABLE `skyranch` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skyranch`
--

INSERT INTO `skyranch` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 15', 5, 'Perfect place for couples', 1729137100);

-- --------------------------------------------------------

--
-- Table structure for table `subic`
--

CREATE TABLE `subic` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subic`
--

INSERT INTO `subic` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 7', 5, 'Very nice view and clean', 1728976116);

-- --------------------------------------------------------

--
-- Table structure for table `surfing`
--

CREATE TABLE `surfing` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surfing`
--

INSERT INTO `surfing` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 26', 5, 'Good!', 1729145052);

-- --------------------------------------------------------

--
-- Table structure for table `taal`
--

CREATE TABLE `taal` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taal`
--

INSERT INTO `taal` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'Test 3', 4, 'Very demure', 1728973258);

-- --------------------------------------------------------

--
-- Table structure for table `trekking`
--

CREATE TABLE `trekking` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trekking`
--

INSERT INTO `trekking` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 22', 5, 'Good!', 1729144971);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`) VALUES
(13, 'Hanzo', 'Martin', 'Admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Czai', 'Limbo', 'czai@sample.com', '202cb962ac59075b964b07152d234b70'),
(15, 'Kyle', 'Kuzma', 'javier.kylenathaniel.c210143@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'Test', 'Test', 'Testing@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `zip`
--

CREATE TABLE `zip` (
  `review_id` int(10) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `datetime` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zip`
--

INSERT INTO `zip` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(3, 'Test 27', 5, 'Good!', 1729145081);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ampere`
--
ALTER TABLE `ampere`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `baguio`
--
ALTER TABLE `baguio`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `basco`
--
ALTER TABLE `basco`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `binondo`
--
ALTER TABLE `binondo`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `blossom`
--
ALTER TABLE `blossom`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `bonuan`
--
ALTER TABLE `bonuan`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `calle`
--
ALTER TABLE `calle`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `caving`
--
ALTER TABLE `caving`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `dino`
--
ALTER TABLE `dino`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `hills`
--
ALTER TABLE `hills`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `hitorical`
--
ALTER TABLE `hitorical`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `hopping`
--
ALTER TABLE `hopping`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `intramuros`
--
ALTER TABLE `intramuros`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `kayak`
--
ALTER TABLE `kayak`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `little`
--
ALTER TABLE `little`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `mahaba`
--
ALTER TABLE `mahaba`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `mayon`
--
ALTER TABLE `mayon`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `mop`
--
ALTER TABLE `mop`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `museum`
--
ALTER TABLE `museum`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `nacpan`
--
ALTER TABLE `nacpan`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `ocean`
--
ALTER TABLE `ocean`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `patar`
--
ALTER TABLE `patar`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `playa`
--
ALTER TABLE `playa`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `pulag`
--
ALTER TABLE `pulag`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `saud`
--
ALTER TABLE `saud`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `scuba`
--
ALTER TABLE `scuba`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `skyranch`
--
ALTER TABLE `skyranch`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `subic`
--
ALTER TABLE `subic`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `surfing`
--
ALTER TABLE `surfing`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `taal`
--
ALTER TABLE `taal`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `trekking`
--
ALTER TABLE `trekking`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `zip`
--
ALTER TABLE `zip`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ampere`
--
ALTER TABLE `ampere`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `baguio`
--
ALTER TABLE `baguio`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basco`
--
ALTER TABLE `basco`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `binondo`
--
ALTER TABLE `binondo`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blossom`
--
ALTER TABLE `blossom`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bonuan`
--
ALTER TABLE `bonuan`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `calle`
--
ALTER TABLE `calle`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `caving`
--
ALTER TABLE `caving`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dino`
--
ALTER TABLE `dino`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hills`
--
ALTER TABLE `hills`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hitorical`
--
ALTER TABLE `hitorical`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hopping`
--
ALTER TABLE `hopping`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `intramuros`
--
ALTER TABLE `intramuros`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kayak`
--
ALTER TABLE `kayak`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `little`
--
ALTER TABLE `little`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mahaba`
--
ALTER TABLE `mahaba`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mayon`
--
ALTER TABLE `mayon`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mop`
--
ALTER TABLE `mop`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `museum`
--
ALTER TABLE `museum`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nacpan`
--
ALTER TABLE `nacpan`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ocean`
--
ALTER TABLE `ocean`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patar`
--
ALTER TABLE `patar`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playa`
--
ALTER TABLE `playa`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pulag`
--
ALTER TABLE `pulag`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saud`
--
ALTER TABLE `saud`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `scuba`
--
ALTER TABLE `scuba`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skyranch`
--
ALTER TABLE `skyranch`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subic`
--
ALTER TABLE `subic`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surfing`
--
ALTER TABLE `surfing`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taal`
--
ALTER TABLE `taal`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trekking`
--
ALTER TABLE `trekking`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `zip`
--
ALTER TABLE `zip`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
