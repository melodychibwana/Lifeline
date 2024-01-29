-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 12:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_book`
--

CREATE TABLE `appointment_book` (
  `id` int(11) NOT NULL,
  `firstname` varchar(190) NOT NULL,
  `department` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_book`
--

INSERT INTO `appointment_book` (`id`, `firstname`, `department`, `time`, `date`, `description`, `status`) VALUES
(22, 'Gerald', 'SKIN', '15:01', '2023-12-04', 'itching skin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointmets`
--

CREATE TABLE `appointmets` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointmets`
--

INSERT INTO `appointmets` (`id`, `firstname`, `date`, `start_time`, `end_time`, `department`, `image`) VALUES
(32, 'Dr Jane', '2024-01-10', '11:09', '11:10', 'Maso', 'R.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `archive_doctors`
--

CREATE TABLE `archive_doctors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `firstname`, `image`) VALUES
(3, '', ''),
(4, 'SKIN', ''),
(5, 'SKIN', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `lastname`, `department`, `password`, `image`) VALUES
(25, 'yamie', 'Banda', 'Skin', '1234', 'AdobeStock_212196263-768x432.jpeg'),
(27, 'jane', 'Ban', 'Maso', '1234', 'AdobeStock_212196263-768x432.jpeg'),
(34, 'joni', 'banda', 'Cancer', '1234', 'taddie_kylie-20210813-0002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecords`
--

CREATE TABLE `medicalrecords` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(250) NOT NULL,
  `age` int(100) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `problems` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalrecords`
--

INSERT INTO `medicalrecords` (`id`, `firstname`, `date`, `gender`, `department`, `age`, `doctor`, `problems`) VALUES
(16, 'Gerald', '2023-12-04', 'male', 'Skin', 24, 'jame', 'WTTF'),
(17, 'chisomo', '2024-01-04', 'male', 'Cancer', 12, '', 'he sick he need to visit the doctor'),
(18, 'tadala', '2024-01-04', 'male', 'Maso', 12, 'jane', 'having an eye problem need to see the doctor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `role`) VALUES
(8, 'Tony', 'kwanjan', 'Tony@gmail.com', 88019235, '$2y$10$FBRyy/D5qpsliRH81XIENeGc6Ren32twa2jWP1apAm7Olz02uAcH6', 'admin'),
(29, 'james', 'banda', 'james@gmail.com', 888455322, '$2y$10$BZSl5i60E3ptionUJQxHVeLU.b9JL4WnOjK0YkHIIhmk6XMr3LGmi', ''),
(30, 'fada', 'dada', 'fada@gmail.com', 880192352, '$2y$10$uC1tacdqI8Up7ay1O.wQ1O4cQydIWGPYkf.EpowsitROliNSOrB2W', ''),
(34, 'Gerald', 'Chienda', 'chiendagerald@gmail.com', 2147483647, '$2y$10$CvlT5e.Y.lD3tRNONv7egu72oxMi28aN5YjRkXLz68kAhiu3.owF6', ''),
(35, 'yohane', 'bwalitso', 'yohane@gmail.com', 2147483647, '$2y$10$Yjuc8Oswlw5z6pUPGX0p.ulZx4IypZkx52LxjFoktBI3RySF6/zo2', ''),
(36, 'tadala', 'nkhondoyachepa', 'tada@gmail.com', 2147483647, '$2y$10$rnG.NGDHhP8A/2KTBrKImeVWIquDaYD1y0Uz9HjUJawAhs/S67a/u', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_book`
--
ALTER TABLE `appointment_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmets`
--
ALTER TABLE `appointmets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive_doctors`
--
ALTER TABLE `archive_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_book`
--
ALTER TABLE `appointment_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `appointmets`
--
ALTER TABLE `appointmets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `archive_doctors`
--
ALTER TABLE `archive_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
