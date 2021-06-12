-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 07:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ramanuja`
--
CREATE DATABASE IF NOT EXISTS `ramanuja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ramanuja`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msgid` int(5) NOT NULL AUTO_INCREMENT,
  `from_mail` varchar(30) NOT NULL,
  `to_mail` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `senttime` timestamp NOT NULL,
  PRIMARY KEY (`msgid`),
  KEY `to_mail` (`to_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msgid`, `from_mail`, `to_mail`, `subject`, `message`, `senttime`) VALUES
(32, 'uma@gmail.com', 'ramanuja29@gmail.com', 'Testing Again', 'Hi this is Uma How are you doing!', '2016-03-24 16:35:00'),
(88, 'uma@gmail.com', 'sailasri1972@gmail.com', 'Testing Again', 'Hi amma How are you!', '2016-03-24 17:17:23'),
(118, 'sailasri1972@gmail.com', 'rams@gmail.com', 'Greetings', 'Hi bro how are you doing?', '2016-03-24 18:19:03'),
(119, 'sailasri1972@gmail.com', 'rams@gmail.com', 'Greetings', 'Hi bro how are you doing?', '2016-03-24 18:19:38'),
(123, 'rams@gmail.com', 'sailasri1972@gmail.com', 'Greetings', 'im good how are you doing', '2016-03-24 18:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE IF NOT EXISTS `userbase` (
  `name` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`name`, `mobile`, `email`, `passwd`) VALUES
('Raj', 45534354, 'raj@gmail.com', 'raj'),
('Ramanuja SVL', 9951241323, 'ramanuja29@gmail.com', 'ramanuja'),
('Ramesh Naidu SVJ', 9845116889, 'rams@gmail.com', 'ramesh'),
('Saila Sri', 8019818116, 'sailasri1972@gmail.com', 'sailu'),
('Suresh', 45467, 'sam@ymail.com', 'sampath'),
('Uma', 7801042872, 'uma@gmail.com', 'uma');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`to_mail`) REFERENCES `userbase` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
