-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2014 at 08:35 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `privilege`, `contact`) VALUES
(14, 'nitin', 'kumar', 'nkt', 'nkt', 'admin', '456464'),
(13, 'ajay', 'kumar', 'akt', 'akt', 'admin', '9650736768');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `b_id` int(2) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`) VALUES
(1, 'cse'),
(2, 'it'),
(3, 'ece'),
(4, 'eee'),
(5, ''),
(6, ''),
(7, 'mba');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `s_id` int(2) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`s_id`, `s_name`) VALUES
(1, '1st'),
(2, '2nd'),
(5, '3rd'),
(6, '4th'),
(7, '5th'),
(8, '6th'),
(9, '7th'),
(10, '8th'),
(11, 'gffdd'),
(12, '10');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(255) NOT NULL,
  `s_name` varchar(10) NOT NULL,
  `b_name` varchar(10) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `s_name`, `b_name`) VALUES
(5, 's1', '1st', 'cse'),
(7, 's2', '1st', 'cse'),
(8, 's3', '1st', 'cse'),
(9, 's4', '1st', 'cse'),
(10, 's5', '1st', 'cse'),
(11, 's6', '1st', 'cse'),
(12, 's7', '1st', 'it'),
(13, 's8', '1st', 'it'),
(14, 's9', '1st', 'it'),
(15, 's10', '1st', 'it'),
(16, 's11', '1st', 'it'),
(17, 's12', '1st', 'it'),
(18, 's13', '1st', 'cse'),
(19, 'bbbb', '2nd', 'it'),
(20, 'computer network', '6th', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `subject_asigned`
--

CREATE TABLE IF NOT EXISTS `subject_asigned` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subject_asigned`
--

INSERT INTO `subject_asigned` (`id`, `subject_name`, `teacher_name`) VALUES
(1, 's5', 'piyush'),
(2, 's7', 'piyush'),
(3, 's10', 'piyush'),
(4, 's1', 'monika'),
(5, 's2', 'monika'),
(6, 's8', 'monika'),
(7, 's13', 'monika'),
(8, 's2', 'sweta'),
(9, 's4', 'sweta'),
(10, 's10', 'sweta');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(10) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `type`) VALUES
(1, 'monika', ''),
(2, 'dinesh', ''),
(3, 'piyush', ''),
(4, 'sweta', ''),
(5, 'cm shrama', ''),
(6, 'achal ', ''),
(7, 'rathi', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
