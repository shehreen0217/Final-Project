-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 05:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(255) NOT NULL,
  `a_fullname` varchar(300) NOT NULL,
  `a_username` varchar(300) NOT NULL,
  `a_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_fullname`, `a_username`, `a_password`) VALUES
(1, 'Muhammad Ali Sulehri', 'ucp_ali', 'tib007'),
(2, 'Ali Hamza', 'ucp_hamza', 'tib007'),
(3, 'Hassan Tariq', 'ucp_hassan', 'tib007'),
(4, 'Shehreen Fatima', 'ucp_shehreen', 'tib007'),
(5, 'Talha Nayyar', 'ucp_talha', 'tib007'),
(6, 'Yusra Shahid', 'ucp_yusra', 'tib007');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(200) NOT NULL,
  `cat_image` varchar(2000) NOT NULL,
  `cat_hover` varchar(2000) NOT NULL,
  `cat_link` varchar(50000) NOT NULL,
  `cat_logo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`, `cat_hover`, `cat_link`, `cat_logo`) VALUES
(1, 'Sports', 'pak2.jpg', 'Sports', 'sports.php', 'fa fa-trophy'),
(2, 'Technology', 'tec.jpg', 'Technology', 'tech.php', 'fa fa-mobile'),
(3, 'Entertainment', 'enter.jpg', 'Entertainment', 'entertainment.php', 'fa fa-camera-retro'),
(4, 'Humor', 'humor.jpg', 'Humor', 'humor.php', 'far fa-laugh-beam'),
(5, 'Cooking', 'cook.jpg', 'Cooking', 'cooking.php', 'fas fa-utensils');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `g_id` int(200) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `g_email` varchar(200) NOT NULL,
  `g_cn` int(200) NOT NULL,
  `g_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(200) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_fname` varchar(250) NOT NULL,
  `u_lname` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_gender` varchar(250) NOT NULL,
  `u_date` int(255) NOT NULL,
  `u_month` int(255) NOT NULL,
  `u_year` int(255) NOT NULL,
  `u_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `g_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
