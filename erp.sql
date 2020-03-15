-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2020 at 03:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `id` int(11) NOT NULL,
  `srno` text DEFAULT NULL,
  `capid` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `sname` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `mname` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `age1` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `cast` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `paddress` text DEFAULT NULL,
  `pdistrict` text DEFAULT NULL,
  `pstate` text DEFAULT NULL,
  `ppincode` text DEFAULT NULL,
  `resphone` text DEFAULT NULL,
  `stuphone` text DEFAULT NULL,
  `fatherphone` text DEFAULT NULL,
  `smail` text DEFAULT NULL,
  `aadhar` text DEFAULT NULL,
  `courses` text DEFAULT NULL,
  `level` text DEFAULT NULL,
  `admissionyear` text DEFAULT NULL,
  `admittedto` text DEFAULT NULL,
  `sscper` text DEFAULT NULL,
  `hscper` text DEFAULT NULL,
  `diplomaper` text DEFAULT NULL,
  `beper` text DEFAULT NULL,
  `admitted` text DEFAULT NULL,
  `result` text DEFAULT NULL,
  `currentstatus` text DEFAULT NULL,
  `SEM-I` text DEFAULT NULL,
  `SEM-II` text DEFAULT NULL,
  `SEM-III` text DEFAULT NULL,
  `SEM-IV` text DEFAULT NULL,
  `SEM-V` text DEFAULT NULL,
  `SEM-VI` text DEFAULT NULL,
  `SEM-VII` text DEFAULT NULL,
  `SEM-VIII` text DEFAULT NULL,
  `ME-SEM-I` text DEFAULT NULL,
  `ME-SEM-II` text DEFAULT NULL,
  `ME-SEM-III` text DEFAULT NULL,
  `ME-SEM-IV` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `last_update` text DEFAULT NULL,
  `userid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_mail` varchar(1000) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `user_name` text DEFAULT NULL,
  `form` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_mail`, `password`, `type`, `user_name`, `form`) VALUES
(2, 'admin@gmail.com', 'Admin@123', 'Admin', 'Admin', NULL),
(6, 'SKYASKY@GMAIL.COM', 'Sohil@123', 'Student', 'SOHIL AYUB LUHAR', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
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
-- AUTO_INCREMENT for table `student_form`
--
ALTER TABLE `student_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
