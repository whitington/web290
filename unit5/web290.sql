-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 03:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web290`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.'),
(2, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'ron', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
