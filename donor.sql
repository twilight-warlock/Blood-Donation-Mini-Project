-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 03:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `b_type` varchar(2) NOT NULL,
  `bday` date NOT NULL,
  `h_address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `don_date` date NOT NULL,
  `temp` varchar(10) NOT NULL,
  `pulse` varchar(10) NOT NULL,
  `bp` varchar(10) NOT NULL,
  `weight` int(11) NOT NULL,
  `haemoglobin` varchar(25) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `mobile` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fname`, `mname`, `lname`, `sex`, `b_type`, `bday`, `h_address`, `city`, `don_date`, `temp`, `pulse`, `bp`, `weight`, `haemoglobin`, `phone`, `mobile`) VALUES
(1, 'Varun', '', 'Singh', 'Male', 'O+', '1994-07-16', '19, Shriram Mandir, Durgadevi Street, Kumbharwada', 'Mumbai', '2021-11-18', 'Normal', '72', '120/80', 74, '16 - 18 gm/dl', '26321812', '9827983762'),
(2, 'Priyanka', '', 'Yadav', 'Female', 'A+', '1992-02-02', '41, 285, Chatrabhuj J. House, Princess Street, Chira Bazar', 'Mumbai', '2021-11-18', 'Normal', '63', '128/80', 57, '16 - 18 gm/dl', '', '8602042302'),
(3, 'Palak', '', 'Gupta', 'Female', 'B-', '1989-09-24', 'SBI Colony, Baldev Bagh', 'Mumbai', '2021-11-19', 'Normal', '82', '130/90', 62, '16 - 18 gm/dl', '', '8269036096'),
(4, 'Anish', '', 'Kothari', 'Male', 'AB+', '1981-08-21', '329, Hiren Light Indl Est, Mogul Lane, Mahim', 'Mumbai', '2021-11-20', 'Normal', '73', '135/80', 65, '16 - 18 gm/dl', '24461198', '7027168011');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(35) NOT NULL,
  `m_name` varchar(15) DEFAULT NULL,
  `l_name` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `b_day` date NOT NULL,
  `designation` varchar(35) NOT NULL,
  `mobile_nr` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `f_name`, `m_name`, `l_name`, `username`, `password`, `b_day`, `designation`, `mobile_nr`) VALUES
(1, 'Arya', '', 'Karambelkar', 'arya', 'arya', '2001-09-19', 'Student', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_type` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `b_type`, `address`, `city`, `mobile`, `created_at`) VALUES
(1, 'Varun', 'Singh', 'varunsingh@gmail.com', '1994-07-16', 'Male', 'O+', '19, Shriram Mandir, Durgadevi Street, Kumbharwada', 'Mumbai', '9827983762', '2021-11-18 10:08:46'),
(2, 'Priyanka', 'Yadav', 'priyanka@gmail.com', '1992-02-02', 'Female', 'A+', '41, 285, Chatrabhuj J. House, Princess Street, Chira Bazar', 'Mumbai', '8602042302', '2021-11-18 11:52:27'),
(3, 'Palak', 'Gupta', 'palakgupta@gmail.com', '1989-09-24', 'Female', 'B-', 'SBI Colony, Baldev Bagh', 'Mumbai', '8269036096', '2021-11-19 06:27:06'),
(4, 'Anish', 'Kothari', 'anish@gmail.com', '1981-08-21', 'Male', 'AB+', '329, Hiren Light Indl Est, Mogul Lane, Mahim', 'Mumbai', '7027168011', '2021-11-20 09:01:38');

