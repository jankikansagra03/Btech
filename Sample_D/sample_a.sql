-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 04:51 AM
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
-- Database: `sample_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` int(5) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `extra_images` varchar(255) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_title`, `event_description`, `event_date`, `event_type`, `event_place`, `main_image`, `extra_images`, `status`) VALUES
(1, 'Galore 2024', 'Cultural Program', '2024-03-15', 'Seminar ', 'Rajkot', ' 65f7b3cd3831cmyw3schoolsimage.jpg', '5673721.jpg,5673719.jpg', 'Active'),
(2, 'Galore 2024', 'Cultural Program day-2', '2024-03-15', 'Seminar ', 'Rajkot', ' 65f7b4077b3095673721.jpg', 'myw3schoolsimage.jpg,5673719.jpg', 'Active'),
(3, '', '', '0000-00-00', 'Industrial Visit ', '', ' 65f7b7d07eb83', '', 'Active'),
(4, '123', '123', '2024-03-19', 'Workshop ', 'RKU', ' 65f7b802c0795SDS-SCS-Galore 2024 final performance .pdf', '', 'Active'),
(5, '123', '123', '2024-03-19', 'Workshop ', 'RKU', ' 65f7b82a16a4bSDS-SCS-Galore 2024 final performance .pdf', '65f7b82a16a67SDS-Account Details (Even - 2023-24)-7-3-24.xlsx,', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` char(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `role` char(10) NOT NULL DEFAULT 'user',
  `status` char(10) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
