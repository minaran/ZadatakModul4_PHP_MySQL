-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:19 PM
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
-- Database: `appmedik`
--

-- --------------------------------------------------------

--
-- Table structure for table `osoba`
--

CREATE TABLE `osoba` (
  `id` int(20) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `tipkorisnika_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `osoba`
--

INSERT INTO `osoba` (`id`, `ime`, `prezime`, `tipkorisnika_id`) VALUES
(1, 'Lela', 'Djuric', 2),
(2, 'Mara', 'Nikolic', 3),
(3, 'Sava', 'Pejic', 2),
(4, 'Pavle', 'Maric', 3),
(5, 'Ana', 'Matic', 2),
(6, 'Igor', 'Peric', 3),
(7, 'Vesna', 'Lukic', 3),
(8, 'Aca', 'Panic', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tipkorisnika`
--

CREATE TABLE `tipkorisnika` (
  `id` bigint(20) NOT NULL,
  `naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipkorisnika`
--

INSERT INTO `tipkorisnika` (`id`, `naziv`) VALUES
(1, 'Administrator'),
(2, 'Lekar'),
(3, 'Pacijent');

-- --------------------------------------------------------

--
-- Table structure for table `zakazivanje`
--

CREATE TABLE `zakazivanje` (
  `id` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zakazivanje`
--

INSERT INTO `zakazivanje` (`id`, `firstName`, `lastName`, `email`, `phone`, `date`, `time`) VALUES
(1, 'Igor', 'Peric', 'igor@gmail.rs', '064 212121', '2023-03-06', '12:00:00'),
(2, 'Vesna', 'Lukic', 'vesna@gmail.rs', '065 312312', '2023-03-07', '11:00:00'),
(3, 'Aca', 'Panic', 'aca@gmail.rs', '066 323232', '2023-03-08', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `osoba`
--
ALTER TABLE `osoba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zakazivanje`
--
ALTER TABLE `zakazivanje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `osoba`
--
ALTER TABLE `osoba`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zakazivanje`
--
ALTER TABLE `zakazivanje`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
