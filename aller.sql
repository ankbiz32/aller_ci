-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 01:33 PM
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img_src`, `name`) VALUES
(2, 'big_bazaar_logo.png', 'Big bazaar'),
(3, 'bjp-symbol-hd-wallpaper-52650-13686.jpg', 'bjp'),
(4, 'hdfc-mf.png', 'hdfc mf'),
(5, 'II.png', 'nps'),
(6, 'kea.png', 'kea'),
(7, 'lic.png', 'lic'),
(8, 'religare.png', 'religare'),
(9, 'TT1.png', 'rotary club'),
(10, 'UTIMF.png', 'uti'),
(11, 'vedaa.png', 'vedaa'),
(12, 'v-merge.png', 'v-merge');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(2048) DEFAULT NULL,
  `message` varchar(2048) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `img_src`, `content`, `name`, `desig`, `rating`) VALUES
(10, 'mm_Kadadi.jpeg', 'We needed to outsource some of my company work of digital marketing. Website development and templates for email marketing for my clients. Aller understands your thought process & has a very quick response. Understood my requirements very well. Very particular.', 'Er. M.M. Kadadi', 'Ex Chairman, IEI Kalaburagi Local Centre', 5),
(11, 'Namoshi.jpeg', 'Aller Technologies did a great job of not only creating an election portal how we wanted it to be but also gave us great insight on what they believed will help boost likes. We have used digital Marketing service for the election campaigns, must say, professional and co-operating staff.', 'Shashil G Namoshi', 'MLC Karnataka', 5),
(12, 'Rajnish_wali.jpeg', 'Each layout of posters/video were unique and creative. Helped in strategy management for the election campaign. The staff is sound professional. The working process is simple and easy. We recommend Aller Technologies for Digital Services.', 'Dr. Rajnish Wali', 'Chairmain, Wali Shree Hospitals', 5),
(14, 'swati_mutha.jpeg', 'They build our website exactly suitable for our business. Simple design but attractive too. User friendly. Pocket-friendly and after-sales service are awesome. You can definitely contact her.', 'Swati Mutha', 'Director, Wonder Kidz, Pune', 5);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `img_src1` varchar(200) NOT NULL,
  `img_src2` varchar(200) NOT NULL,
  `img_src3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `duration` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `img_src`, `name`, `descr`, `duration`, `price`, `content`) VALUES
(3, 'python1.jpg', 'Python Training', 'Whether you are completely new to programming or want to level up, Aller’s Python Training Course is tailored for all levels. This Python training course will provide you hands-on experience for starting or boosting your career as a programmer. ', '3 months', '15000', '- Introduction to python IDE\r\n- Python syntax\r\n- Strings in python\r\n- List, Tuples, Dictionaries in Python\r\n- Functions & Modules in python\r\nand much more.'),
(4, 'web-development1.png', 'Website Design & Development', 'Aller’s Web Design & Development Course will enable you to master a wide range of technologies allowing you to create high-quality websites with a seamless experience. We try our best to put everything in front of you which you will need to create a website that stands out.', '3 months', '15000', '- Introduction to Web Design & Applications\r\n- HTML, JAVA, CSS\r\n- Web Technology\r\n- Mobile website development\r\nand much more.'),
(5, 'digital-marketing-course1.jpg', 'Design Marketing', 'We at Aller provide you with comprehensive resources and tools required to become an unmatched design marketer. Kickstart your design marketing career with our course now. ', '3 months', '15000', '- Plan marketing\r\n- Agency Manager\r\n- Introduction & framework of E-mail marketing\r\n- Mobile marketing\r\n- SEM marketing\r\nand much more.'),
(6, 'selenium1.jpg', 'Selenium', 'Aller’s Selenium Course is developed for manual testers and developers to learn how to automate web testing and integrate it with the organizational processes. Get hands-on experience on various automation frameworks with our course and get noticed by hiring professionals.', '3 months', '15000', '- Introduction to Selenium\r\n- Installation and Setting up the environment\r\n- Python Basics, Locators, WebDriver\r\n- PyUnit Framework, Data-Driven Testing\r\n- Page Object Model (POM)\r\n- Automation Framework');

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
(1, 'admin_aller', '$2y$10$OGvSKg8m2Ms7shtVwMfiUOMSOSnQ4nWucumY9nMrx5oZQhvDGxoca', 'Aller', 'Admin', 'info@aller.in', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `src` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `src`) VALUES
(1, 'https://www.youtube.com/embed/pLog1njQALg');

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
(1, 'info@aller.in', '020-27486770', '9765918881', ' 9765918881', 'Sudarshan Nagar, Chinchwad\r\nPune, MH (411033)', '', 'https://www.facebook.com/allertechnologies/', 'https://www.linkedin.com/in/aller-technologies-a6792418b/', 'https://twitter.com/Aller_Techies', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
