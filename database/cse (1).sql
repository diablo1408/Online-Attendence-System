-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 05:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `dt` date NOT NULL,
  `section` varchar(4) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `marked_by` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1-Theory,2-Practical'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `dt`, `section`, `subject`, `marked_by`, `type`) VALUES
(3, '2020-01-12', 'T2', 'CSE', 1, 0),
(4, '2020-01-12', 'T2', 'CSE', 1, 0),
(5, '2020-01-12', 'S2', 'CSE', 1, 0),
(6, '2020-01-12', 'S2', 'CSE', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(5) NOT NULL,
  `section` varchar(5) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `semester`) VALUES
(1, 'S1', 3),
(2, 'S2', 3),
(3, 'T1', 5),
(4, 'T2', 5),
(5, 'F1', 7),
(6, 'F2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `enrollment` int(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `year` int(2) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `enrollment`, `name`, `year`, `stream`, `section`) VALUES
(1, 234234234, 'Diwakar', 2, 'CSE', 'T2'),
(2, 21343546, 'Kumar', 2, 'CSE', 'T2'),
(3, 21323, 'SectionS2', 3, 'CSE', 'S2'),
(4, 0, '', 2, 'MAE', 'S2'),
(7, 2222, 'Test1', 2, 'MAE', 'S2'),
(8, 321312, 'testMaae', 2, 'MAE', 'S2'),
(9, 12312, 'Tetsing', 2, 'MAE', 'S2'),
(10, 23123, 'MAe1', 2, 'MAE', 'S2'),
(11, 123213, 'mae2', 2, 'MAE', 'S2'),
(12, 12321, 'mae4', 2, 'MAE', 'S2'),
(14, 444, 'ECE1', 4, 'CSE', 'T2'),
(15, 33, 'ECE@', 4, 'CSE', 'T2'),
(16, 3333, 'ece3', 4, 'CSE', 'T2'),
(17, 5555, 'ece4', 4, 'CSE', 'T2'),
(18, 213, 'ddd', 3, 'MAE', 'ede'),
(19, 123, 'fff', 3, 'MAE', 'ede');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(150) NOT NULL,
  `short_name` varchar(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `short_name`, `name`, `code`) VALUES
(1, 'ADA', 'Algorithm and Data Analysis', 'ETCS'),
(2, 'DCOMM', 'Digital Communication', 'ETEC'),
(3, 'SE', 'Software Engineering', 'ETCS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(2) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `sections` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role`, `subjects`, `sections`) VALUES
(1, 'Diwakar', 'Kumar', 'admin', 'admin', 0, 'ADA,DCOMM', 'S1,T1,F1,T2,S2'),
(2, 'Shubham', 'Budhathoki', 'testing@testing.com', 'testing', 0, '', ''),
(3, 'Diwakar', 'Kumar', 'admin@email.com', 'admin', 0, 'DCOMM,SE', 'S2,F1,F2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
