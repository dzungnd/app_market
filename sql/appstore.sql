-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2015 at 05:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE IF NOT EXISTS `apps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracking_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count_like` int(11) NOT NULL,
  `download` int(11) NOT NULL,
  `network` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` datetime NOT NULL,
  `apps_credit` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `device` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `id_on_net` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `name`, `tracking_url`, `image_url`, `count_like`, `download`, `network`, `add_date`, `apps_credit`, `rank`, `device`, `description`, `id_on_net`) VALUES
(1, 'Coca vs Pepsi', 'http://google.com.vn', 'http://localhost/apps/image/apps/coca-light.jpg', 99, 999, 'Leadads', '0000-00-00 00:00:00', 30, 1, 'iphone', 'Description Here', 0),
(2, 'name', 'url', 'img', 99, 999, 'net', '0000-00-00 00:00:00', 1, 1, 'android', 'des', 52),
(3, 'test', 'http://tsadest.com', 'http://thesweetsetup.com/wp-content/uploads/2014/04/katie-floyd-iphone-homescreen.jpg', 99, 999, 'Option 4', '0000-00-00 00:00:00', 0, 1, 'Android', 'asdasdasd', 13);

-- --------------------------------------------------------

--
-- Table structure for table `apps_rank`
--

CREATE TABLE IF NOT EXISTS `apps_rank` (
  `id` int(11) NOT NULL,
  `rank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apps_rank`
--

INSERT INTO `apps_rank` (`id`, `rank_name`) VALUES
(1, 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `credit_history`
--

CREATE TABLE IF NOT EXISTS `credit_history` (
  `id` int(11) NOT NULL,
  `credit_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit_date` datetime NOT NULL,
  `credit_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `credit_history`
--

INSERT INTO `credit_history` (`id`, `credit_name`, `credit_user`, `credit_date`, `credit_id`, `credit`) VALUES
(1, 'Coca vs Pepsi', 'dungnd', '2015-11-05 17:27:31', 1, 30),
(2, 'Campaign1', 'dungnd', '2015-11-06 09:36:35', 2, 10),
(3, 'Campaign1', 'dungnd', '2015-11-06 09:36:35', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `id` int(11) NOT NULL,
  `prize_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize_credit` int(11) NOT NULL,
  `prize_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prize_purchase`
--

CREATE TABLE IF NOT EXISTS `prize_purchase` (
  `id` int(11) NOT NULL,
  `purchase_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_prize_id` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `credits` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_date`, `credits`, `role`) VALUES
(1, 'dungnd', 'ff9e21c2ae24977bcbe317999558c3f2', 'dungnd@1pay.vn', '0000-00-00 00:00:00', 100, 1),
(3, 'nganham', 'ff9e21c2ae24977bcbe317999558c3f2', 'nganham@gmail.com', '2015-11-08 01:07:23', 0, 3),
(4, 'qweqweq', '6c80d2bd9720eb45ac7a83f1de0fb00a', 'eqweqweqe', '2015-11-16 17:17:10', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Moderator'),
(3, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_rank`
--
ALTER TABLE `apps_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_history`
--
ALTER TABLE `credit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize_purchase`
--
ALTER TABLE `prize_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `apps_rank`
--
ALTER TABLE `apps_rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `credit_history`
--
ALTER TABLE `credit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prize_purchase`
--
ALTER TABLE `prize_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
