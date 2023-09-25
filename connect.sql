-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 11:42 AM
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
-- Database: `connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE `facultyinfo` (
  `auto_generated_id` int(11) NOT NULL,
  `Tellyourself` text DEFAULT NULL,
  `photo_link` varchar(255) DEFAULT NULL,
  `research` text DEFAULT NULL,
  `Office_Hour` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Faculty_Id` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `faculty_photo_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`auto_generated_id`, `Tellyourself`, `photo_link`, `research`, `Office_Hour`, `fullname`, `Department`, `Faculty_Id`, `Email`, `Phone`, `faculty_photo_link`) VALUES
(1, 'I have extensive experience in teaching and research.', 'uploads/y1.jpg', 'My research interests include data analysis, machine learning, and artificial intelligence.', 'Monday 2:00 PM - 4:00 PM', 'Md. Rahman Khan', 'Computer Science', 1, 'rahmankhan@example.com', '+880123456789', 'uploads/y1.jpg'),
(2, 'I am dedicated to advancing knowledge in my field.', 'uploads/y2.jpg', 'I focus on research related to environmental conservation and biodiversity.', 'Tuesday 10:00 AM - 12:00 PM', 'Tahmina Ahmed', 'Biology', 2, 'tahmina@example.com', '+880987654321', NULL),
(3, 'I have a passion for educating the next generation.', NULL, 'My research areas include quantum physics and theoretical astrophysics.', 'Wednesday 3:00 PM - 5:00 PM', 'Nusrat Jahan', 'Physics', 3, 'nusrat@example.com', '+880111222333', NULL),
(4, 'I am an extrovert', 'uploads/Capture.PNG', 'MAchine learning , Network', 'ST 10:40 - 4:20 PM', 'Nishita Tabassum', 'ECE', 12233248, 'nishita@nortsouth.edu', '0172165998', 'uploads/y2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `post_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `announcement` text DEFAULT NULL,
  `contact_method` varchar(255) DEFAULT NULL,
  `photo_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_and_found`
--

INSERT INTO `lost_and_found` (`post_id`, `username`, `product_name`, `announcement`, `contact_method`, `photo_link`) VALUES
(1, 'user1', 'Lost Wallet', 'I lost my wallet near the park yesterday. It contains my ID and credit cards.', 'Email: user1@example.com', NULL),
(2, 'user2', 'Found Keys', 'I found a set of keys on the sidewalk. If you lost them, please contact me.', 'Phone: +1234567890', NULL),
(3, 'user3', 'Lost Phone', 'My smartphone is missing. It has a blue case and was last seen at the mall.', 'Email: user3@example.com', NULL),
(4, 'user4', 'Found Sunglasses', 'I found a pair of sunglasses at the beach. Contact me to claim them.', 'Phone: +9876543210', NULL),
(5, 'user5', 'Lost Backpack', 'I left my backpack on the bus. It has important documents. Please help me find it.', 'Email: user5@example.com', NULL),
(6, 'user1', 'Calculator EX-991X', 'I found this calculator at NSU cafetaria nearly at @ AM today', 'you can call me at 0193487455850', NULL),
(7, 'user1', 'iphone 11 pro', 'found this phone at SAC 210', 'you can call me at 01934874558344', 'uploads/i.jpg'),
(8, 'admin', 'Pendrive', 'I found a 32 GB pendrive at library', 'you can call me at 01934874558344', 'uploads/65112dd961073_Captures33.PNG'),
(9, 'admin', 'iphone 13 pro', 'found this phone at NAC 310', '018789187528', 'uploads/651155a256fc0_photo-1511707171634-5f897ff02aa9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_content` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `username`) VALUES
(1, 'Hello! Write Now I am In NSU study hall', 'user1'),
(2, 'Are you there ?\r\n', 'user1'),
(3, ' tgiug ityigiu', 'user1'),
(4, 'jfu gjhv', 'user1'),
(5, 'NSU Print zone is quite good as long as you are not using their slow PC! You can bring your own laptop ! Plug in and boom\r\n', 'usr1'),
(6, 'Today is our javascript php quiz!\r\n', 'admin'),
(7, 'ajker class cancel\r\n', 'admin'),
(8, 'exam motamoti hoise ! 10 marks katse ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `reported_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `post_id`, `content`, `reported_at`) VALUES
(1, 1, 'This post contains inappropriate content.', '2023-09-24 16:32:40'),
(2, 2, 'The information in this post is misleading.', '2023-09-24 16:32:40'),
(3, 3, 'I believe this post violates community guidelines.', '2023-09-24 16:32:40'),
(4, 1, 'The user is harassing others in this post.', '2023-09-24 16:32:40'),
(5, 4, 'This post appears to be spam.', '2023-09-24 16:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `club_interest` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `club_interest`, `type`) VALUES
(1, 'iqbal33', 'kaiser@northsouth.edu', 'password1', 'Aniket', 'Prantor', 1, 0),
(2, 'user2', 'user2@example.com', 'password2', 'Jane', 'Smith', 2, 1),
(3, 'user3', 'user3@example.com', 'password3', 'Alice', 'Johnson', 1, 1),
(4, 'user4', 'user4@example.com', 'password4', 'Bob', 'Williams', 3, 0),
(5, 'user5', 'user5@example.com', 'password5', 'Eva', 'Brown', 2, 1),
(6, 'admin', 'dj@gmail.com', 'admin', 'Kornia', 'Khurshid', 3, 1),
(7, 'AniketPrantor', 'wfdkj@gnk.com', 'admin', 'Kazi', 'Faruk', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD PRIMARY KEY (`auto_generated_id`);

--
-- Indexes for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  MODIFY `auto_generated_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
