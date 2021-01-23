-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 01:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aller`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL,
  `heading` varchar(1024) NOT NULL,
  `descr` varchar(2048) NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img_src`, `heading`, `descr`, `date`, `slug`) VALUES
(1, 'e1.png', 'Some events heading will be shown here 1', 'Something about the event. A small description for the image like a seminar held at some place.', '2020-05-03', 'Some-events-heading-will-be-shown-here-1'),
(2, 'e2.png', 'Another Event', ' Something about the event. A small description for the image like a seminar held at some place.Something about the event. A small description for the image like a seminar held at some place.', '2020-05-04', 'Another-Event'),
(3, 'e3.png', 'Yet Another Event', 'Something about the event. A small description for the image like a seminar held at some place.', '2020-04-07', 'Yet-Another-Event'),
(5, 'agriculture-clouds-corn-corn-field-539282.jpg', 'Analysis in today\'s world', 'Test', '2020-05-03', 'Analysis-in-todays-world');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_reg`
--

CREATE TABLE `farmer_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `soil` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `products` varchar(500) NOT NULL,
  `level` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `img_src`, `content`, `name`) VALUES
(1, '', 'I recommend Ramraj’s services as they provide a great platform for the farmers and industrial buyers. ', 'Bhaskar Joshi'),
(2, '', 'An excellent initiative in the direction of the welfare of rural section of the society. They form the foundation of the society and strengthening them will strengthen the nation as a whole. ', ' Garuna Singh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `role` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pwd`, `fname`, `lname`, `email`, `status`, `role`) VALUES
(1, 'adminrrs', '$2y$10$NG9k47y4y8qJWOCKYyd30O45/c2GWe3p2SnMYYVr7W5QWqUwwbUaW', 'Aller', 'Admin', 'info@aller.in', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webprofile`
--

CREATE TABLE `webprofile` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `fblink` varchar(50) DEFAULT NULL,
  `linkedinlink` varchar(100) DEFAULT NULL,
  `twitterlink` varchar(50) DEFAULT NULL,
  `youtubelink` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address_line1`, `address_line2`, `fblink`, `linkedinlink`, `twitterlink`, `youtubelink`) VALUES
(1, 'info@aller.in', '020-27486770 ', '9765918881', '9765918881', 'Esha House, Shree Datta Marg,\r\nSudarshan Nagar,\r\nNear Golande Ram Temple,\r\nChinchwad, Pune,\r\nMaharashtra 411033', '', 'https://www.facebook.com/', 'https://instagram.com', 'https://twitter.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_reg`
--
ALTER TABLE `farmer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmer_reg`
--
ALTER TABLE `farmer_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
