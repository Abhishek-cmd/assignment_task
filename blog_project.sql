-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 09:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_thumbnail_image` blob NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `blog_title`, `blog_description`, `blog_thumbnail_image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Test 1', '<p>new one entry</p>', 0x313636373530373532315f66617669636f6e2d33327833322e706e67, '1', '2022-11-03 21:32:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `visible_password` text NOT NULL,
  `password` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `mobile`, `visible_password`, `password`, `status`, `last_login`, `created_at`) VALUES
(1, 'Abhishek', 'Dalvi', 'abhi@gmail.com', '8149167341', 'Test@123', 'f925916e2754e5e03f75dd58a5733251', '1', '2022-11-03 20:50:48', '2022-11-03 18:47:38'),
(2, 'Raj', 'More', 'raj@gmail.com', '9898989898', 'Test@123', 'f925916e2754e5e03f75dd58a5733251', '1', '2022-11-03 19:30:38', '2022-11-03 18:53:10'),
(3, 'Mangesh', 'Shinde', 'mangesh@gmail.com', '8787878878', 'Test@123', 'f925916e2754e5e03f75dd58a5733251', '1', '0000-00-00 00:00:00', '2022-11-03 18:54:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
