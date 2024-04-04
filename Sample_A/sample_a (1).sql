-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 09:22 AM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Fullname` char(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Fullname`, `email`, `mobile`, `message`) VALUES
(1, 'Janki Kansagra', 'janki.kansagra@rku.ac.in', 1231231234, 'I found some issue with Activation link.');

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
(14, 'Galore 2024', 'The college campus came alive with vibrant colors, rhythms, and flavors as students and faculty came together to celebrate \"Global Fusion: Celebrating Diversity,\" a cultural extravaganza aimed at showcasing the rich tapestry of cultures represented within the college community. The event kicked off with an energetic procession featuring students dressed in traditional attire from various countries, proudly waving flags and banners. As attendees gathered in the central courtyard, they were greeted by the tantalizing aroma of international cuisine wafting from food stalls set up around the perimeter. The main stage was adorned with cultural artifacts and decorations, setting the scene for an afternoon of performances that spanned the globe. The program began with an electrifying traditional dance from the host country, setting the tone for what promised to be a truly multicultural experience.', '2024-03-15', 'Event ', 'Hemugadhvi Hall, Rajkot', '66044a9978f77audience-1853662_640.jpg', '66044a9978f80events.thumb.800.480.jpeg,66044a9978f85Events-1200x630.jpg,66044a9978f88istockphoto-482015706-170667a.jpg,66044a9978f8bistockphoto-506244538-612x612.jpg,66044a9978f8distockphoto-1189205577-612x612.jpg', 'Active'),
(15, 'Galore Sports Event', 'Last week, our college hosted an exhilarating Sports Week, showcasing the talents and competitive spirit of our students across various athletic disciplines. From intense matches to friendly competitions, the campus was buzzing with energy as athletes and sports enthusiasts came together to celebrate the spirit of sportsmanship. Inter-College Football Match: The week started with a thrilling football match between our college team and a visiting team from a neighboring institution. Despite a valiant effort, our team narrowly lost, but the match showcased exceptional teamwork and skill. Basketball Tournament: The basketball tournament attracted a large crowd, with teams from different departments competing for the championship title. After intense matches and nail-biting finishes, the Department of Business emerged victorious, showcasing their prowess on the court. Athletics Competition: The athletics competition featured a range of track and field events, including sprints, long jump, and shot put. Students displayed remarkable athleticism and determination, with several records being broken and personal bests achieved. Friendly Matches and Fun Activities: In addition to competitive events, Sports Week also included friendly matches in sports like volleyball, badminton, and table tennis. Students of all skill levels participated enthusiastically, fostering a sense of camaraderie and sportsmanship.', '2024-03-05', 'Event ', 'RK University, Rajkot', '6604563e4d01cCJU6JH6VWZL7VMCLFVOVK64HHQ.jpg', '6604563e4d0239f7608b8-ded8-4870-8738-ad78b9010732.jpg,6604563e4d026c5fc5dc0779fd9ec50072ab465a39e9b.jpg,6604563e4d028Depositphotos_26869607_m-2015.webp,6604563e4d029July-Olympics-Blog-Post-Featured-846x476.png,6604563e4d02asummer-olympics-rings.jpg', 'Active'),
(16, 'Holi Celebration', 'Holi, the festival of colors, was celebrated with great fervor and enthusiasm at [College Name] this year. The campus was adorned with vibrant colors, echoing with laughter and joy as students, faculty, and staff came together to mark this auspicious occasion. Holi, the festival of colors, was celebrated with great fervor and enthusiasm at [College Name] this year. The campus was adorned with vibrant colors, echoing with laughter and joy as students, faculty, and staff came together to mark this auspicious occasion. Preparations and Decorations: In the days leading up to the festival, the college campus was transformed into a kaleidoscope of colors. Students and volunteers worked tirelessly to decorate the campus with colorful banners, rangolis, and floral arrangements. The air was filled with anticipation as everyone eagerly awaited the festivities. Traditional Rituals and Performances: The celebration began with traditional rituals and prayers, invoking blessings for prosperity and happiness. Students gathered around the Holika bonfire, symbolizing the triumph of good over evil. The atmosphere reverberated with the beats of dhols (drums) as everyone danced to the rhythm of folk songs and melodies. Colors Galore: As the sun rose higher in the sky, the real fun began with the splashing of colors. Students, dressed in white, gleefully smeared each other with vibrant hues of gulal (colored powder). Laughter echoed across the campus as friends and strangers alike embraced the spirit of Holi, forgetting all differences and inhibitions.', '2024-03-22', 'Event ', 'RK University, Rajkot', '6604579e34e33featured-holi-1.jpg', '6604579e34e42events.thumb.800.480.jpeg,6604579e34e4cHoli-Festival.jpg', 'Active'),
(17, 'Hackathon 2.0', 'The recent Hackathon hosted by [College Name] was a testament to the creativity, innovation, and collaborative spirit of our students. Over the course of [duration], aspiring programmers, designers, and problem-solvers gathered to tackle real-world challenges and develop groundbreaking solutions.\r\n\r\nPreparation and Anticipation:\r\nIn the weeks leading up to the Hackathon, excitement filled the air as teams formed, ideas flourished, and preparations were made. The campus buzzed with anticipation as participants eagerly awaited the opportunity to showcase their skills, learn from industry experts, and compete for recognition.\r\n\r\nKick-off and Ideation:\r\nThe Hackathon kicked off with an inspiring opening ceremony, featuring keynote speeches from esteemed guest speakers and presentations on emerging technologies and industry trends. Participants were encouraged to think outside the box, explore innovative concepts, and push the boundaries of technology.\r\n\r\nCoding Marathons and Collaboration:\r\nAs the clock started ticking, teams dived into intensive coding marathons, fueled by caffeine and adrenaline. From brainstorming sessions to late-night coding sprints, participants worked tirelessly to bring their ideas to life, leveraging their diverse skills and expertise to overcome challenges and find creative solutions.', '2024-02-29', 'Event ', 'RK University, Rajkot', '6604585d523f6crowd-participating-at-event.jpg', '6604585d523feevents_980da43a-db5e-4c04-b163-a44bd4bcefa4.jpg,6604585d52404events-hero-1.jpg.optimal.jpg,6604585d52406Image.jpeg,6604585d52409istockphoto-1314618304-170667a.webp,6604585d5240bpdt-social-catering-group-827959231321860-wide-hor.webp,6604585d5240dphoto-1573496774426-fe3db3dd1731.avif', 'Active');

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
('Janki Kansagra', 'janki.kansagra@rku.ac.in', 'Female', 1231231234, 'Janki@123', '', '660b7431314a1download (3).jpeg', 'Admin', 'Active', '025a33413de66025a33413e1'),
('janki', 'jankikansagra12@gmail.com', 'Female', 1234567890, 'Janki@123456', '', '65fa69f7e6e38download (1).png', 'user', 'Active', '65fa69f7e6df965fa69f7e6e33'),
('Jigar', 'jmungra635@rku.ac.in', 'Male', 1231231234, 'Jigar@12345', '', '660a42f91a860images (10).png', 'user', 'Active', '660a42f91a859660a42f91a85f'),
('Sahil Tank', 'stank729@rku.ac.in', 'Male', 1234567890, 'Sahil@12345', '', '660a41f20c65adownload (2).png', 'user', 'Inactive', '660a41f20c655660a41f20c659');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `status` char(8) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image_name`, `status`) VALUES
(6, '65f7ce2eefedfaria-slider.webp', 'Active'),
(7, '65f7ce361f5fdNAAC_1.webp', 'Active'),
(8, '65f7ce3c28f34nirf-ranking-slider.webp', 'Active'),
(9, '65f7ce43d6d99swacch award.webp', 'Active'),
(10, '65f7ce4acdd8dthe-art-of-living-rku-mou.webp', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sent_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(256) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
