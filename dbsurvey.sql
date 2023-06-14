-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 01:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurvey`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `surname` text NOT NULL,
  `fname` text NOT NULL,
  `pnumbers` int(10) NOT NULL,
  `date` date NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `surname`, `fname`, `pnumbers`, `date`, `age`) VALUES
(1, 'Kgoadi', 'Kabelo', 764388494, '2023-06-14', 27),
(2, 'Shadung', 'Temosho', 721910331, '2023-06-14', 25),
(3, 'Mmako', 'Bohlale', 795877445, '0000-00-00', 24),
(4, 'Kgoadi', 'Lebogang', 602564895, '2023-06-14', 23);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `typeOfFood` enum('pizza','pasta','pap&wors','chicken','beef','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`typeOfFood`) VALUES
('pap&wors'),
('other'),
('pap&wors'),
('beef');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `EatOut` varchar(50) NOT NULL,
  `Movies` varchar(50) NOT NULL,
  `Tv` varchar(50) NOT NULL,
  `Radio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`EatOut`, `Movies`, `Tv`, `Radio`) VALUES
('StronglyAgree', 'Agree', 'Neutral', 'Neutral'),
('StronglyDisagree', 'Disagree', 'Agree', 'Stronglyagree'),
('Neutral', 'StronglyAgree', 'StronglyDisagree', 'Agree'),
('1', '1', '1', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
