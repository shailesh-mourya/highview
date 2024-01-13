-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 08:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `higview`
--

-- --------------------------------------------------------

--
-- Table structure for table `admino`
--

CREATE TABLE `admino` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admino`
--

INSERT INTO `admino` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'shailesh', 'ssm.2000mourya@gmail.com', '9987075096', 'shailesh23');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `enroll_no` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `academic_year` varchar(30) NOT NULL,
  `standard` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mobile_no1` varchar(30) NOT NULL,
  `mobile_no2` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mail` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`enroll_no`, `first_name`, `last_name`, `gender`, `dob`, `academic_year`, `standard`, `email`, `address`, `father_name`, `mother_name`, `mobile_no1`, `mobile_no2`, `image`, `mail`) VALUES
(1, 'shailesh', 'mourya', '', '', '2023-2024', 'Select Standard', '', 'kkpkp', 'santosh', 'prema', '9370170329', '9987075096', '', 0),
(2, 'Ajay', 'Mourya', '', '', '2022-2023', '5th', '', 'har har mahadev chawl santosh bhuvan nallasopara east', 'santosh', 'prema', '9987075098', '9987075095', '', 0),
(3, 'sadhana ', 'mourya', '', '', '2022-2023', '10th', '', 'har har mahadev chawl vasai', 'santosh', 'prema', '9987075098', '9987075095', '', 0),
(4, 'rajesh', 'sharma', 'Male', '2000-07-29', '2022-2023', '7th', 'rajeshhs@gmail.com', 'om shai raj mahel wapi east', 'abhishek', 'ashwariya', '9987075092', '9987075098', '', 0),
(5, 'rajesh', 'sharma', 'Male', '2000-07-29', '2022-2023', '7th', 'rajeshhs@gmail.com', 'om shai raj mahel wapi east', 'abhishek', 'ashwariya', '9987075092', '9987075098', '', 0),
(6, 'rajesh', 'sharma', 'Male', '2000-07-29', '2022-2023', '7th', 'rajeshhs@gmail.com', 'om shai raj mahel wapi east', 'abhishek', 'ashwariya', '9987075092', '9987075098', '', 0),
(7, 'rajesh', 'sharma', 'Male', '2000-06-05', '2022-2023', '9th', 'ssm.2000mourya@gmail.com', 'dfgdfgdfgdfgfgf', 'abhishek', 'ashwariya', '9987075092', '9987075098', 'sanjeev.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `phone` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`phone`, `id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `password`, `city`) VALUES
('9370170320', 1, 'shailesh', 'mourya', '2024-01-18', 'Male', 'shaileshmourya@gmail.com', 'yrtrt', 'virar'),
('9370170329', 2, 'ajay', 'mourya', '2024-01-10', 'Female', 'shaileshmourya@gmail.com', 'ajay123', 'virar'),
('9370170322', 3, 'mari', 'kon', '2024-02-02', 'Female', 'shaileshmourya@gmail.com', 'dfsdfsdf', 'other'),
('9370170328', 4, 'mari', 'kon', '2024-01-31', 'Other', 'shaileshmourya@gmail.com', 'jlkjkljk', 'vasai'),
('9370170327', 5, 'mari', 'kon', '2024-01-31', 'Other', 'shaileshmourya@gmail.com', 'jlkjkljk', 'vasai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admino`
--
ALTER TABLE `admino`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`enroll_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admino`
--
ALTER TABLE `admino`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `enroll_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
