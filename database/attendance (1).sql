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
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ada_p`
--

CREATE TABLE `ada_p` (
  `id` int(11) NOT NULL,
  `enrollment` int(20) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `dt` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ada_p`
--

INSERT INTO `ada_p` (`id`, `enrollment`, `stream`, `section`, `dt`, `status`) VALUES
(1, 21343546, 'CSE', 'T2', '2019-12-31', 1),
(2, 21343546, 'CSE', 'T2', '2020-01-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ada_t`
--

CREATE TABLE `ada_t` (
  `id` int(11) NOT NULL,
  `enrollment` int(20) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `dt` date NOT NULL,
  `status` int(2) NOT NULL COMMENT '1- Present'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ada_t`
--

INSERT INTO `ada_t` (`id`, `enrollment`, `stream`, `section`, `dt`, `status`) VALUES
(1, 234234234, 'CSE', 'T2', '0000-00-00', 1),
(2, 21343546, 'CSE', 'T2', '0000-00-00', 1),
(3, 21343546, 'CSE', 'T2', '0000-00-00', 1),
(4, 234234234, 'CSE', 'T2', '2031-12-19', 1),
(5, 21343546, 'CSE', 'T2', '0000-00-00', 1),
(6, 234234234, 'CSE', 'T2', '2019-12-31', 1),
(7, 21343546, 'CSE', 'T2', '2019-12-31', 1),
(8, 234234234, 'CSE', 'T4', '2019-12-31', 1),
(9, 21343546, 'CSE', 'T4', '2019-12-31', 1),
(10, 234234234, 'CSE', 'T5', '2019-12-31', 0),
(11, 21343546, 'CSE', 'T5', '2019-12-31', 0),
(12, 234234234, 'CSE', 'T6', '2019-12-31', 0),
(13, 21343546, 'CSE', 'T6', '2019-12-31', 0),
(14, 234234234, 'CSE', 'T7', '2019-12-31', 0),
(15, 21343546, 'CSE', 'T7', '2019-12-31', 0),
(16, 21343546, 'CSE', 'T8', '2019-12-31', 1),
(17, 234234234, 'CSE', 'T9', '2019-12-31', 1),
(18, 234234234, 'CSE', 'S2', '2019-12-31', 0),
(19, 21343546, 'CSE', 'S2', '2019-12-31', 1),
(20, 234234234, 'CSE', 'T2', '2019-12-31', 1),
(21, 234234234, 'CSE', 'T2', '2019-12-31', 1),
(22, 234234234, 'CSE', 'T2', '2019-12-31', 1),
(23, 21343546, 'CSE', 'T2', '2019-12-31', 1),
(24, 234234234, 'CSE', 'T2', '2020-01-07', 1),
(25, 21343546, 'CSE', 'T2', '2020-01-07', 1),
(26, 234234234, 'CSE', 'T2', '2020-01-12', 1),
(27, 21343546, 'CSE', 'T2', '2020-01-12', 1),
(28, 21343546, 'CSE', 'T2', '2020-01-12', 1),
(29, 234234234, 'CSE', 'T2', '2020-01-12', 1),
(30, 234234234, 'CSE', 'T2', '2020-01-12', 1),
(31, 2222, 'MAE', 'S2', '2020-01-12', 1),
(32, 321312, 'MAE', 'S2', '2020-01-12', 1),
(33, 23123, 'MAE', 'S2', '2020-01-12', 1),
(34, 123213, 'MAE', 'S2', '2020-01-12', 1),
(35, 2222, 'MAE', 'S2', '2020-01-12', 1),
(36, 321312, 'MAE', 'S2', '2020-01-12', 1),
(37, 0, 'MAE', 'S2', '2020-01-12', 1),
(38, 12312, 'MAE', 'S2', '2020-01-12', 1),
(39, 21343546, 'CSE', 'T2', '2020-01-12', 1),
(40, 21343546, 'CSE', 'T2', '2020-01-12', 1),
(41, 21343546, 'CSE', 'T2', '2020-01-12', 1),
(42, 21323, 'CSE', 'S2', '2020-01-12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ada_p`
--
ALTER TABLE `ada_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ada_t`
--
ALTER TABLE `ada_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ada_p`
--
ALTER TABLE `ada_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ada_t`
--
ALTER TABLE `ada_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
