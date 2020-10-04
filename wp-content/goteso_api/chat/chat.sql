-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 07:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `senderId` varchar(50) NOT NULL,
  `receiverId` varchar(50) NOT NULL,
  `channelId` varchar(100) NOT NULL,
  `text` longtext NOT NULL,
  `createdAt` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderId`, `receiverId`, `channelId`, `text`, `createdAt`) VALUES
(1, '1', '2', '1', 'hi from user 1', '2017-08-10 10:53:57.447151'),
(2, '2', '1', '1', 'hi from user 2', '2017-08-10 10:54:18.018528'),
(3, '1', '2', '1', 'hello from user 1', '2017-08-10 10:54:28.583245'),
(4, '2', '1', '1', 'hello from user 2', '2017-08-10 10:54:28.788669'),
(5, '1', '2', '1', 'how r u from 1', '2017-08-10 10:54:28.949446'),
(6, '2', '1', '1', 'how r u from 2', '2017-08-10 10:54:29.092695'),
(7, '1', '2', '1', 'message text 4 from 1', '2017-08-10 10:54:29.246921'),
(8, '2', '1', '1', 'message text 4 from 2', '2017-08-10 10:54:29.365483');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userName`, `userType`) VALUES
(1, 'Harry1', 'harry1username', 'user'),
(2, 'harr2', 'harry2username', 'user'),
(3, 'Harry3', 'harry3username', 'user'),
(4, 'harry4', 'harry42username', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
