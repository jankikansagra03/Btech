-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 06:43 AM
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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` char(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `role` char(10) NOT NULL DEFAULT 'user',
  `status` char(10) NOT NULL DEFAULT 'Inactive',
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `email`, `gender`, `mobile`, `password`, `address`, `profile_pic`, `role`, `status`, `token`) VALUES
('Janki', '', 'Female', 1231231234, '', '', '66025a032a151download (1).jpeg', 'user', 'Inactive', '66025a032a14e66025a032a150'),
('Janki', 'janki.kansagra@rku.ac.in', 'Female', 1231231234, 'Janki@12345', '', '66025a33413e2download (1).jpeg', 'user', 'Inactive', '025a33413de66025a33413e1'),
('janki', 'jankikansagra12@gmail.com', 'Female', 1234567890, 'Janki@12345', '', '65fa69f7e6e38download (1).png', 'user', 'Active', '65fa69f7e6df965fa69f7e6e33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
