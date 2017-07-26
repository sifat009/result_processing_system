-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 08:43 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result_processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `reg_no`, `dept_name`, `course_id`, `credit`, `grade`, `semester`) VALUES
(157, 1212, 'cse', 'cse101', '1.5', '4', '1st'),
(158, 1212, 'cse', 'cse102', '1.5', '4', '1st'),
(159, 1212, 'cse', 'cse103', '1.5', '4', '1st'),
(160, 1212, 'cse', 'cse104', '1.5', '4', '1st'),
(161, 1212, 'cse', 'cse105', '1.5', '4', '1st'),
(162, 1212, 'cse', 'cse101', '1.5', '4', '2nd'),
(163, 1212, 'cse', 'cse102', '1.5', '4', '2nd'),
(164, 1212, 'cse', 'cse103', '1.5', '4', '2nd'),
(165, 1212, 'cse', 'cse104', '1.5', '4', '2nd'),
(166, 1212, 'cse', 'cse105', '1.5', '4', '2nd'),
(167, 1212, 'cse', 'cse101', '1.5', '4', '3rd'),
(168, 1212, 'cse', 'cse102', '1.5', '4', '3rd'),
(169, 1212, 'cse', 'cse103', '1.5', '4', '3rd'),
(170, 1212, 'cse', 'cse104', '1.5', '4', '3rd'),
(171, 1212, 'cse', 'cse105', '1.5', '4', '3rd'),
(172, 1212, 'cse', 'cse101', '1.5', '4', '4th'),
(173, 1212, 'cse', 'cse102', '1.5', '4', '4th'),
(174, 1212, 'cse', 'cse103', '1.5', '4', '4th'),
(175, 1212, 'cse', 'cse104', '1.5', '4', '4th'),
(176, 1212, 'cse', 'cse105', '1.5', '4', '4th'),
(177, 1212, 'cse', 'cse101', '1.5', '4', '5th'),
(178, 1212, 'cse', 'cse102', '1.5', '4', '5th'),
(179, 1212, 'cse', 'cse103', '1.5', '4', '5th'),
(180, 1212, 'cse', 'cse104', '1.5', '4', '5th'),
(181, 1212, 'cse', 'cse105', '1.5', '4', '5th'),
(182, 1212, 'cse', 'cse101', '1.5', '4', '6th'),
(183, 1212, 'cse', 'cse102', '1.5', '4', '6th'),
(184, 1212, 'cse', 'cse103', '1.5', '2.75', '6th'),
(185, 1212, 'cse', 'cse104', '2', '4', '6th'),
(186, 1212, 'cse', 'cse105', '3', '3', '6th'),
(187, 1212, 'cse', 'cse101', '1.5', '4', '7th'),
(188, 1212, 'cse', 'cse102', '1.5', '4', '7th'),
(189, 1212, 'cse', 'cse103', '1.5', '4', '7th'),
(190, 1212, 'cse', 'cse104', '1.5', '4', '7th'),
(191, 1212, 'cse', 'cse105', '1.5', '4', '7th'),
(192, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(193, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(194, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(195, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(196, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(197, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(198, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(199, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(200, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(201, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(202, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(203, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(204, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(205, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(206, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(207, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(208, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(209, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(210, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(211, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(212, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(213, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(214, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(215, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(216, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(217, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(218, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(219, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(220, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(221, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(222, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(223, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(224, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(225, 1212, 'cse', 'cse101', '1.5', '4', '8th'),
(226, 1212, 'cse', 'cse101', '1.5', '4', '8th');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `gpa` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `reg_no`, `cgpa`, `gpa`, `semester`) VALUES
(32, 1212, '3.95', '4', '1st'),
(33, 1212, '3.95', '4', '2nd'),
(34, 1212, '3.95', '4', '3rd'),
(35, 1212, '3.95', '4', '4th'),
(36, 1212, '3.95', '4', '5th'),
(37, 1212, '3.95', '3.49', '6th'),
(38, 1212, '3.95', '4', '7th'),
(39, 1212, '3.95', '4', '8th'),
(40, 1212, '3.95', '4', '8th');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_no`, `semester`, `dept_name`) VALUES
(28, 1212, '1st', 'cse'),
(29, 1212, '2nd', 'cse'),
(30, 1212, '3rd', 'cse'),
(31, 1212, '4th', 'cse'),
(32, 1212, '5th', 'cse'),
(33, 1212, '6th', 'cse'),
(34, 1212, '7th', 'cse'),
(35, 1212, '8th', 'cse'),
(36, 1212, '8th', 'cse'),
(37, 1212, '8th', 'cse'),
(38, 1212, '8th', 'cse'),
(39, 1212, '8th', 'cse'),
(40, 1212, '8th', 'cse'),
(41, 1212, '8th', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
