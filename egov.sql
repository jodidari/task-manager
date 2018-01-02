-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 04:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jodi_task_man_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_rec_table`
--

CREATE TABLE IF NOT EXISTS `login_rec_table` (
  `Login_num` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(40) NOT NULL,
  `Login_Time` datetime NOT NULL,
  `Logout_Time` datetime NOT NULL,
  PRIMARY KEY (`Login_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `login_rec_table`
--

INSERT INTO `login_rec_table` (`Login_num`, `Username`, `Login_Time`, `Logout_Time`) VALUES
(82, 'jdarien', '2017-12-27 15:52:09', '0000-00-00 00:00:00'),
(83, 'jdarien', '2017-12-28 10:08:45', '0000-00-00 00:00:00'),
(84, 'jdarien', '2017-12-28 11:23:30', '0000-00-00 00:00:00'),
(85, 'jdarien', '2017-12-28 11:46:02', '0000-00-00 00:00:00'),
(86, 'jdarien', '2017-12-28 11:48:18', '0000-00-00 00:00:00'),
(87, 'rthompson', '2017-12-28 13:41:30', '0000-00-00 00:00:00'),
(88, 'rthompson', '2017-12-28 13:45:40', '0000-00-00 00:00:00'),
(89, 'jdarien', '2017-12-28 13:48:39', '0000-00-00 00:00:00'),
(90, 'jdarien', '2017-12-28 15:34:02', '0000-00-00 00:00:00'),
(91, 'jdarien', '2018-01-02 09:13:59', '0000-00-00 00:00:00'),
(92, 'nmoodie', '2018-01-02 09:39:54', '0000-00-00 00:00:00'),
(93, 'rthompson', '2018-01-02 09:54:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE IF NOT EXISTS `login_tbl` (
  `Login_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Status` char(2) NOT NULL,
  `Login_Time` datetime NOT NULL,
  `Logout_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Login_ID`),
  KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`Login_ID`, `Username`, `Password`, `P_ID`, `Status`, `Login_Time`, `Logout_Time`) VALUES
(42, 'nmoodie', '6feaf566b2d4ce42f55dfc2267b76bd0', 73, 'A', '2017-12-18 13:00:49', '0000-00-00 00:00:00'),
(43, 'jdarien', 'a1e28f8bc1c55c28fb877d4517138f58', 74, 'A', '2017-12-18 13:01:54', '0000-00-00 00:00:00'),
(44, 'sbrown', '576f9a2d75832635b57c00fb60582178', 75, 'A', '2017-12-27 15:07:02', '0000-00-00 00:00:00'),
(45, 'rthompson', 'f584de9c4de22592d3e4bab61765768c', 76, 'A', '2017-12-28 13:41:21', '0000-00-00 00:00:00'),
(46, 'tgas', '931aa19c6157e45e732511cce89c58ba', 77, 'A', '2017-12-28 13:44:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notif_table`
--

CREATE TABLE IF NOT EXISTS `notif_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipient_ids` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `subject` text,
  `body` text,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `notif_table`
--

INSERT INTO `notif_table` (`id`, `recipient_ids`, `sender_id`, `subject`, `body`, `date_sent`) VALUES
(19, '73,74,', '74', 'test', 'testing', '2017-12-20 10:56:00'),
(20, '73,74,', '74', 'hey', 'hello', '2017-12-20 10:56:08'),
(21, '73,74,75,76,77,', '74', 'test', 'test', '2017-12-28 13:54:27'),
(22, '74,75', '73', 'Hi', 'hello', '2018-01-02 09:40:47'),
(23, '76', '73', 'Check notif', 'You alone should get this', '2018-01-02 09:41:04'),
(24, '76,77', '73', 'Do your work', 'Uhhh', '2018-01-02 09:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `person_tbl`
--

CREATE TABLE IF NOT EXISTS `person_tbl` (
  `P_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(25) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email_address` varchar(65) NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `Email_address` (`Email_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `person_tbl`
--

INSERT INTO `person_tbl` (`P_ID`, `Title`, `Fname`, `Lname`, `Email_address`) VALUES
(73, 'Programmer', 'Nyran', 'Moodie', 'nran@yahoo.com'),
(74, 'Manager', 'Jodianne', 'Darien', 'jdar@yahoo.com'),
(75, 'Programmer', 'Shadain', 'Brown', 'sbrown@yahoo.com'),
(76, 'Manager', 'Ricardo', 'Thompson', 'rthompson@yahoo.com'),
(77, 'Manager', 'tst', 'gas', 'fsaf@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE IF NOT EXISTS `projects_tbl` (
  `Project_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Project_Name` varchar(50) NOT NULL,
  `Project_Description` varchar(200) NOT NULL,
  `PM_ID` int(11) NOT NULL,
  `Attached_Programmer_ID` varchar(255) NOT NULL,
  `Start_dTime` datetime NOT NULL,
  `End_dTime` datetime NOT NULL,
  `Task_ID` int(11) NOT NULL,
  PRIMARY KEY (`Project_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `projects_tbl`
--

INSERT INTO `projects_tbl` (`Project_ID`, `Project_Name`, `Project_Description`, `PM_ID`, `Attached_Programmer_ID`, `Start_dTime`, `End_dTime`, `Task_ID`) VALUES
(105, 'afas', 'fv', 74, '73,75', '2017-12-28 15:37:07', '2017-12-28 15:37:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank_tbl`
--

CREATE TABLE IF NOT EXISTS `rank_tbl` (
  `Rating_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  PRIMARY KEY (`Rating_ID`),
  UNIQUE KEY `Rank` (`Rank`),
  KEY `Project_ID` (`Project_ID`,`P_ID`,`Rating`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `task_tbl`
--

CREATE TABLE IF NOT EXISTS `task_tbl` (
  `Task_ID` int(11) NOT NULL AUTO_INCREMENT,
  `P_ID` int(11) NOT NULL,
  `Project_ID` int(11) NOT NULL,
  `Taskname` int(11) NOT NULL,
  `Task_desc` int(11) NOT NULL,
  `Start_Dtime` int(11) NOT NULL,
  `End_Dtime` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Resource` int(11) NOT NULL,
  PRIMARY KEY (`Task_ID`),
  UNIQUE KEY `Taskname` (`Taskname`),
  KEY `P_ID` (`P_ID`,`Project_ID`,`Taskname`,`Task_desc`,`Start_Dtime`,`End_Dtime`,`Status`,`Resource`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
