-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 04:10 AM
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
  `extra_images` varchar(500) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_title`, `event_description`, `event_date`, `event_type`, `event_place`, `main_image`, `extra_images`, `status`) VALUES
(8, 'Galore 2024', 'Cultural Function of Galore-2024 Day-1', '2024-03-14', 'Event ', 'Rajkot', '65f87c04246e1images (6).png', '65f87c04246eadownload (3).png,65f87c04246f0download (5).png,65f87c04246f4download (6).png,65f87c04246f7download.png,65f87c04246f9images (1).png', 'Active'),
(9, '123', '123', '2024-03-13', 'Industrial Visit ', 'Rajkot', '65f8fc022c3d2images (4).jpeg', '65f8fc022c3daimages (10).png,65f8fc022c3e0images (11).png,65f8fc022c3e5images (12).png', 'Active'),
(10, 'abc', 'abc', '2024-03-18', 'Industrial Visit ', 'Rajkot', '65f8fc7a5b4e3download.png', '65f8fc7a5b4eadownload (4).png,65f8fc7a5b4efdownload (5).png,65f8fc7a5b4f0download (6).png', 'Active'),
(11, 'aaaaa', 'aaaaaa', '2024-03-05', 'Industrial Visit ', 'RKU Rajkot', '65f907c80ad65images (7).png', '65f907c80ad95images (4).jpeg', 'Active'),
(12, 'hello', 'hello 123', '2024-03-08', 'Event ', 'Rajkot', '65f90950ccf76images (3).png', '65f90950ccf7ddownload (7).png,65f90950ccf81download.jpeg,65f90950ccf82download.png,65f90950ccf84images (1).jpeg,65f90950ccf85images (1).png,65f90950ccf86images (2).jpeg,65f90950ccf87images (2).png,65f90950ccf88images (3).jpeg,65f90950ccf89images (3).png,65f90950ccf8bimages (4).jpeg', 'Active'),
(13, '', '', '0000-00-00', 'Industrial Visit ', '', '65fcf408a7b98', '65fcf408a7ba0download (3).jpeg,65fcf408a7ba5download (3).png,65fcf408a7ba6download (4).png,65fcf408a7ba8download (5).png,65fcf408a7ba9download (6).png,65fcf408a7babdownload (7).png,65fcf408a7baddownload.jpeg,65fcf408a7baedownload.png,65fcf408a7bb0images (1).jpeg,65fcf408a7bb2images (1).png,65fcf408a7bb4images (2).jpeg,65fcf408a7bb5images (2).png,65fcf408a7bb6images (3).jpeg,65fcf408a7bb8images (3).png,65fcf408a7bb9images (4).jpeg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(5) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_description` varchar(500) NOT NULL,
  `prod_price` int(5) NOT NULL,
  `prod_quantity` int(5) NOT NULL,
  `prod_category` varchar(50) NOT NULL,
  `prod_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('janki', 'jankikansagra12@gmail.com', 'Female', 1234567890, 'Janki@12345', '', '65fa69f7e6e38download (1).png', 'user', 'Active', '65fa69f7e6df965fa69f7e6e33');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image_name`) VALUES
(6, '65f7ce2eefedfaria-slider.webp'),
(7, '65f7ce361f5fdNAAC_1.webp'),
(8, '65f7ce3c28f34nirf-ranking-slider.webp'),
(9, '65f7ce43d6d99swacch award.webp'),
(10, '65f7ce4acdd8dthe-art-of-living-rku-mou.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
