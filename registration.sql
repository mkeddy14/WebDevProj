-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 03:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `console` varchar(50) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Id`, `name`, `console`, `year`) VALUES
(1224, 'Red Dead Redemption II', 'Xbox One', 2018),
(1234, 'Fifa 19', 'Xbox One', 2018),
(1334, 'Battlefield V', 'Xbox One', 2018),
(1434, 'Battlefield V', 'Playstation 4', 2018),
(1534, 'Forza Horizon 3', 'Xbox One', 2018),
(1634, 'God Of War', 'Playstation 4', 2018),
(1734, 'Madden 19', 'Xbox One', 2018),
(1834, 'Spider-Man', 'Playstation 4', 2018),
(2234, 'Fifa 19', 'Playstation 4', 2018),
(3234, 'Red Dead Redemption II', 'Playstation 4', 2018),
(4234, 'Grand Theft Auto V', 'Xbox One', 2018),
(5234, 'Grand Theft Auto V', 'Playstation 4', 2018),
(6234, 'Fallout 76', 'Xbox One', 2018),
(7234, 'Fallout 76', 'Playstation 4', 2018),
(8234, 'FarCry 5', 'Xbox One', 2018),
(9234, 'FarCry 5', 'Playstation 4', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `pid` int(4) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `favgame` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`pid`, `fullname`, `address`, `favgame`) VALUES
(2, 'Mick Keddy', '6 Ellensborough Grove, Kiltipper, Tallaght', 'Fifa 19');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(4) NOT NULL,
  `game` varchar(100) NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `game`, `rating`) VALUES
(1, 'Fifa 19', 10),
(2, 'Red Dead Redemption II', 8),
(9, 'Spider-Man', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `email`, `password`) VALUES
(13, 'micker14', 'micker14@gmail.com', 'c377b9ecc382ac1a99116d25baa9f0c8'),
(17, 'mikey14keddy', 'mikey14keddy@outlook.ie', '67c6a1e7ce56d3d6fa748ab6d9af3fd7'),
(18, 'josh12', 'josh@howye.com', '934b535800b1cba8f96a5d72f72f1611');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
