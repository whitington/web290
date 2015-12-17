-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2013 at 11:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.'),
(2, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec odio nisl. Nulla facilisi. Aenean tortor odio, suscipit nec pharetra ut, iaculis et eros. Suspendisse ultrices imperdiet nisi, ac rhoncus ligula ornare et. Fusce blandit, odio sit amet hendrerit scelerisque, metus ante molestie tortor, id posuere ligula tellus vel lorem. Maecenas nec arcu sem, ac dictum diam. Vivamus ullamcorper, nulla ut dapibus vestibulum, leo est mattis enim, eu blandit magna enim et purus. Pellentesque aliquam, turpis sed molestie aliquet, tellus est venenatis est, id blandit est nunc vel elit. In mattis, dolor sit amet gravida malesuada, enim erat fringilla nisi, ac sagittis neque tortor non nibh. Aenean eleifend eros eu dui pellentesque non porta nisl accumsan.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
