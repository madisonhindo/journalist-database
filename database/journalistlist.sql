-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 04:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journalists`
--

-- --------------------------------------------------------

--
-- Table structure for table `journalistlist`
--

CREATE TABLE `journalistlist` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `twitter` varchar(40) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `specialties` varchar(140) NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `journalistlist`
--

INSERT INTO `journalistlist` (`id`, `name`, `twitter`, `publication`, `specialties`, `location`) VALUES
(3, 'Emily Tamkin', '@emilyctamkin', 'Buzzfeed News', 'Foreign affairs', 'Washington D.C.'),
(42, 'Tyler Kingkade', '@tylerkingkade', 'Buzzfeed News', 'Sexual assault, crime, youth issues', 'Brooklyn, NY'),
(43, 'Kovie Biakolo', '@koviebiakolo', 'Buzzfeed News', 'Arts and entertainment', 'New York City, NY'),
(44, 'Hannah Allam', '@hannahallam', 'Buzzfeed News', 'Foreign policy, national security, race, religion', 'Washington, D.C.'),
(45, 'Eleanor Goldberg', '@ESGoldberg', 'HuffPost', 'Poverty, inequality', 'New York City, NY'),
(46, 'Carolina Moreno', '@CaritoJuliette', 'HuffPost', 'Latino issues, culture, entertainment', 'New York City, NY'),
(47, 'Laura Bassett', '@LEBassett', 'HuffPost', 'Culture, politics', 'Brooklyn, NY'),
(48, 'Erin Schumaker', '@erinlschumaker', 'HuffPost', 'Public health, opioid crisis, gun violence', 'Brooklyn, NY'),
(49, 'Yvette Cabrera', '@YCabreraOC', 'HuffPost', 'Criminal justice, immigration, environmental health', 'San Francisco, CA'),
(50, 'Caroline Kee', '@CarolineDKee', 'Buzzfeed News', 'Health', 'New York City, NY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journalistlist`
--
ALTER TABLE `journalistlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journalistlist`
--
ALTER TABLE `journalistlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
