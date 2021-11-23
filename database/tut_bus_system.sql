-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 12:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut_bus_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_reservation`
--

CREATE TABLE `book_reservation` (
  `br_id` int(10) NOT NULL,
  `br_student_surname` text NOT NULL,
  `br_student_id` int(10) NOT NULL,
  `br_student_number` int(10) NOT NULL,
  `br_start_and_destination` text NOT NULL,
  `br_time` time NOT NULL,
  `br_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_reservation`
--

INSERT INTO `book_reservation` (`br_id`, `br_student_surname`, `br_student_id`, `br_student_number`, `br_start_and_destination`, `br_time`, `br_date`) VALUES
(11, 'Phakane', 3, 218491740, 'Sosha South Campus To Sosha North Campus', '08:00:00', ' 21/11/2021 '),
(12, 'Phakane', 3, 218491740, 'Sosha North Campus To Arcadia Campus', '09:00:00', ' 21/11/2021 '),
(13, 'Phakane', 3, 218491740, 'Arcadia Campus To Pretoria Campus', '12:00:00', ' 21/11/2021 '),
(14, 'Phakane', 3, 218491740, 'Pretoria Campus To Sosha North Campus', '14:00:00', ' 21/11/2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `bus_admin`
--

CREATE TABLE `bus_admin` (
  `ad_id` int(10) NOT NULL,
  `ad_name` text NOT NULL,
  `ad_surname` text NOT NULL,
  `ad_staffno` int(10) NOT NULL,
  `ad_email` text NOT NULL,
  `ad_campus` text NOT NULL,
  `ad_gender` text NOT NULL,
  `ad_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_admin`
--

INSERT INTO `bus_admin` (`ad_id`, `ad_name`, `ad_surname`, `ad_staffno`, `ad_email`, `ad_campus`, `ad_gender`, `ad_password`) VALUES
(2, 'Luke', 'John', 217146381, '217146381@tut4life.ac.za', 'Sosha North', 'Male', '$2y$10$TCGvoANGDqk7NbksZmmJ8OxSpzv6LAtwA9pt.Fue24NEZDsQhmmsW');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(10) NOT NULL,
  `stu_name` text NOT NULL,
  `stu_surname` text NOT NULL,
  `stu_number` int(10) NOT NULL,
  `stu_email` text NOT NULL,
  `stu_campus` text NOT NULL,
  `stu_gender` text NOT NULL,
  `stu_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_surname`, `stu_number`, `stu_email`, `stu_campus`, `stu_gender`, `stu_password`) VALUES
(3, 'Elizabeth', 'Phakane', 218491740, '218491740@tut4life.ac.za', 'Sosha South', 'Female', '$2y$10$WWCJ7q6yRZv0nyf8ayDm1Oqu2IRe/R4FuoNZGjGDy55sVlueOEd0m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_reservation`
--
ALTER TABLE `book_reservation`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `bus_admin`
--
ALTER TABLE `bus_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_reservation`
--
ALTER TABLE `book_reservation`
  MODIFY `br_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bus_admin`
--
ALTER TABLE `bus_admin`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
