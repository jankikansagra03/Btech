-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 11:23 AM
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
-- Database: `sample_d`
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
  `extra_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_title`, `event_description`, `event_date`, `event_type`, `event_place`, `main_image`, `extra_images`) VALUES
(1, 'Galore 2024', 'Cultural event', '2024-03-15', 'Event ', 'Rajkot', '65fab56ddafdfdownload.png', '65fab56ddafe7download (3).jpeg,65fab56ddafeedownload (3).png,65fab56ddaff1download (4).png,65fab56ddaff2download (5).png,65fab56ddaff4download (6).png,65fab56ddaff5download (7).png,65fab56ddaff6download.jpeg,65fab56ddaff8download.png,65fab56ddaff9images ('),
(2, 'Industrial Visit to Bacancy', 'Industrial Visit', '2024-03-12', 'Industrial Visit ', 'Ahmedabad', '65fab78524af4download (4).png', '65fab78524b05images (4).png,65fab78524b14images (5).png,65fab78524b19images (6).png,65fab78524b1dimages (7).png,65fab78524b22images (8).png,65fab78524b26images (9).png,65fab78524b2bimages (10).png,65fab78524b2fimages (11).png,65fab78524b33images (12).png,');

-- --------------------------------------------------------

--
-- Table structure for table `image_slider`
--

CREATE TABLE `image_slider` (
  `ID` int(11) NOT NULL,
  `IMAGE_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_slider`
--

INSERT INTO `image_slider` (`ID`, `IMAGE_NAME`) VALUES
(1, '65faab99e4ce1aria-slider.webp'),
(2, '65faabdb31189NAAC_1.webp'),
(3, '65faabdf1b34bnirf-ranking-slider.webp'),
(4, '65faae706b19cswacch award.webp'),
(5, '65faae7556d8cthe-art-of-living-rku-mou.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `image_slider`
--
ALTER TABLE `image_slider`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_slider`
--
ALTER TABLE `image_slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
