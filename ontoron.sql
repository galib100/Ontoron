-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 10:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ontoron`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminpro', '040b7cf4a55014e185813e0644502ea9');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `district` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_of_donate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `phone`, `blood_group`, `district`, `password`, `date_of_donate`) VALUES
(17, 'Banna', '01712253373', 'AB-', 'assasuni', 'galib', '2020-06-22'),
(26, 'Musann Galib', '01712456654', 'A+', 'satkhira', 'fffff', '2020-06-24'),
(40, 'shuhaib faojan Afif', '0716840888', 'A+', 'satkhira', 'asdfg', '2020-06-22'),
(43, 'Tazbinur Rahman', '01717623649', 'O-', 'JASHORE', 'asdf', '2020-07-05'),
(44, 'sharif hasanul Banna', '0171684088', 'AB-', 'barsal', '1234', '2020-06-26'),
(45, 'Tajkeya Sultana Moriam', '01712456654', 'O+', 'Motejheel ,Dakha', 'galib', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `bloodGroup` varchar(3) NOT NULL,
  `location` varchar(30) NOT NULL,
  `num` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`bloodGroup`, `location`, `num`) VALUES
('AB+', 'satkhira', '0171152956'),
('AB+', 'Rajshahi medicale', '01717629064'),
('A+', 'Godara', '0171152956'),
('AB-', 'barisal', '0171152956'),
('A+', 'Rajshahi medicale', '01717629064'),
('A+', 'satkhira', '0171152956'),
('AB+', 'Satkhira Medical', '017711454545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
