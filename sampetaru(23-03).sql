-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 02:04 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sampetaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(64) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `replyMessage` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `firstName`, `subject`, `email`, `message`, `replyMessage`, `createdDate`, `ipAddress`) VALUES
(1, 'Katto', 'katto.kp@gmail.com', 'Hey im just testing the contactus', 'Testing Purpouse', '', '2017-03-22 10:15:56', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `p_id` double NOT NULL AUTO_INCREMENT,
  `u_id` double NOT NULL,
  `l_start` varchar(50) NOT NULL,
  `l_end` varchar(50) NOT NULL,
  `d_start` date NOT NULL,
  `d_end` date NOT NULL,
  `transportation` varchar(10) NOT NULL,
  `stop1` varchar(50) NOT NULL,
  `stop2` varchar(50) NOT NULL,
  `stop3` varchar(50) NOT NULL,
  `e_start_time` time NOT NULL,
  `e_end_time` time NOT NULL,
  `e_weight` varchar(10) NOT NULL,
  `p_time` datetime NOT NULL,
  `p_ip` varchar(25) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `FK_userid` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`p_id`, `u_id`, `l_start`, `l_end`, `d_start`, `d_end`, `transportation`, `stop1`, `stop2`, `stop3`, `e_start_time`, `e_end_time`, `e_weight`, `p_time`, `p_ip`) VALUES
(1, 1, 'Ahmedabad', 'Mumbai', '0000-00-00', '0000-00-00', 'Train', 'Surat', 'Baroda', 'Daman', '21:00:00', '10:00:00', '5 kg', '2017-03-23 12:28:43', '127.0.0.1'),
(2, 1, 'ahmedabad', 'as', '0000-00-00', '0000-00-00', 'Train', '', 'Baroda', '', '21:00:00', '10:00:00', '5 kg', '2017-03-23 12:30:25', '127.0.0.1'),
(3, 1, 'karachi', 'Ahmedabad', '2017-03-23', '2017-03-23', 'Bus', '', '', '', '21:00:00', '10:00:00', '5 kg', '2017-03-23 12:35:27', '127.0.0.1'),
(4, 1, 'karachi', 'Ahmedabad', '2017-03-23', '2017-03-24', 'Air', 'ahmedabad', 'karachi', 'laldarvaja', '05:00:00', '10:00:00', '2', '2017-03-23 16:55:52', '127.0.0.1'),
(5, 1, 'karachi', 'Ahmedabad', '2017-03-27', '2017-03-28', 'Bus', 'ahmedabad', '', 'Daman', '06:00:00', '08:00:00', '1', '2017-03-23 16:56:46', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register_user`
--

CREATE TABLE IF NOT EXISTS `tbl_register_user` (
  `r_id` double NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `b_date` date NOT NULL,
  `created_date` datetime NOT NULL,
  `last_logintime` datetime NOT NULL,
  `last_updatetime` datetime NOT NULL,
  `ipaddress` varchar(25) NOT NULL,
  `oauth_provider` varchar(25) NOT NULL,
  `oauth_uid` varchar(100) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `area` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `isActive` enum('a','d') NOT NULL DEFAULT 'a' COMMENT 'a=active,d=disactive',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`r_id`, `fname`, `lname`, `email`, `password`, `occupation`, `b_date`, `created_date`, `last_logintime`, `last_updatetime`, `ipaddress`, `oauth_provider`, `oauth_uid`, `address1`, `area`, `city`, `pincode`, `state`, `country`, `mobile`, `isActive`) VALUES
(1, 'Kushal', 'Patadia', 'k@gmail.com', '0ca8ac0f610b15d19f6bffdc43cab3ef', 'Student', '0000-00-00', '2017-03-21 13:34:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '127.0.0.1', '', '', '1/6 Ami Appartment', 'Naranpura', 'Ahmedabad', '380063', 'Gujrat', 'India', '7600779534', 'a');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`u_id`) REFERENCES `tbl_register_user` (`r_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
