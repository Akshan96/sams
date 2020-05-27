-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 07:33 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sas`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(20) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_code` varchar(255) NOT NULL,
  `school_type` varchar(255) NOT NULL,
  `school_branchno` varchar(255) NOT NULL,
  `school_address` text NOT NULL,
  `school_city` varchar(255) NOT NULL,
  `school_pincode` int(10) NOT NULL,
  `school_district` varchar(255) NOT NULL,
  `school_state` varchar(255) NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `school_mobile` int(12) NOT NULL,
  `school_phone` int(12) NOT NULL,
  `school_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(20) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_mobile` int(12) NOT NULL,
  `usr_pass` varchar(255) NOT NULL,
  `usr_signup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_code` (`school_code`),
  ADD UNIQUE KEY `school_branchno` (`school_branchno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
