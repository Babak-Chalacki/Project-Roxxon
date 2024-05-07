-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2024 at 09:02 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roxxon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

DROP TABLE IF EXISTS `follows`;
CREATE TABLE IF NOT EXISTS `follows` (
  `id` int NOT NULL AUTO_INCREMENT,
  `follower_user_id` int NOT NULL,
  `following_user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `media` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_persian_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `user_name` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `birthday` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_persian_ci,
  `mobile_number` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `image`, `birthday`, `bio`, `mobile_number`, `gender`) VALUES
(1, '$firstname', '$lastname', '$username', '$password', '$email', NULL, '$birthday', '$bio', '$mobile', b'1'),
(2, 'babak', 'chalaki', 'BABAK_CHALAKI', '12', 'papakparsi@gmail.com', NULL, '2024-04-04', 'awsf', '09059649619', b'0'),
(3, 'babak', 'chalaki', 'BABAK_CHALAKI', '12', 'papakparsi@gmail.com', NULL, '2024-04-04', 'earg', '09059649619', b'1'),
(4, 'babak', 'chalaki', 'BABAK_CHALAKI', '23', 'papakparsi@gmail.com', NULL, '2024-04-03', '2323', '09059649619', b'1'),
(5, 'babak', 'chalaki', 'BABAK_CHALAKI', '12', 'papakparsi@gmail.com', NULL, '2024-05-02', 'wghbah', '09059649619', b'1'),
(6, 'babak', 'chalaki', 'BABAK_CHALAKI', 'as', 'papakparsi@gmail.com', NULL, '2024-04-16', 'asasas', '09059649619', b'1'),
(7, 'babak', 'chalaki', 'BABAK_CHALAKI', '', 'papakparsi@gmail.com', 'img/photo.jpg', '2024-04-05', 'aeqwr', '09059649619', b'1'),
(8, '', '', '', '', '', NULL, NULL, NULL, '', b'0'),
(9, '', '', '', '', '', NULL, NULL, NULL, '', b'0'),
(10, '', '', '', '', '', NULL, NULL, NULL, '', b'0'),
(11, 'babak', 'chalaki', 'BABAK_CHALAKI', '12', 'papakparsi@gmail.com', 'img/photo.jpg', '2024-04-25', '121212', '09059649619', b'1'),
(12, 'babak', 'chalaki', 'BABAK_CHALAKI', '12', 'papakparsi@gmail.com', 'img/photo.jpg', '2024-04-16', 'waefr', '09059649619', b'1'),
(13, 'babak', 'chalaki', 'BABAK_CHALAKI', 'as', 'papakparsi@gmail.com', 'img/photo.jpg', '2024-04-17', 'asasas', '09059649619', b'1'),
(14, 'babak', 'chalaki', 'BABAK_CHALAKI', 'we', 'papakparsi@gmail.com', 'img/photo.jpg', '2024-04-01', 'wewewe', '09059649619', b'1'),
(15, 'babak', 'chalaki', 'BABAK_CHALAK', 'سی', 'papakparsi@gmail.com', 'img/', '2024-05-04', 'شسشسسش', '09059649619', b'1'),
(16, 'babak', 'chalaki', 'BABAK_CHALA', '', 'papakparsi@gmail.com', 'img/', '2024-04-29', 'sdsdsddddddd', '09059649619', b'1'),
(19, 'mamad', 'mamad', 'mamad', 'adbbc2fab9fc98641cdc502e091c15c7', 'papakparsi@gmail.com', 'img/', '2024-05-10', 'asas', '09059649619', b'1'),
(18, 'babak', 'chalaki', 'BABAK_CHALAsd', '6226f7cbe59e99a90b5cef6f94f966fd', 'papakparsi@gmail.com', 'img/', '2024-05-07', 'sdsd', '09059649619', b'1'),
(20, 'mamad', 'mamad', 'mamad_reza', 'adbbc2fab9fc98641cdc502e091c15c7', 'papakparsi@gmail.com', 'img/', '2024-05-02', 'as', '09059649619', b'1'),
(21, 'babak', 'chalaki', 'mohamadali', '81dc9bdb52d04dc20036dbd8313ed055', 'papakparsi@gmail.com', 'img/', '2024-05-15', '23', '09059649619', b'1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
