-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 06:04 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `login_rec_table`
--

INSERT INTO `login_rec_table` (`Login_num`, `Username`, `Login_Time`, `Logout_Time`) VALUES
(56, 'jdarien', '2017-12-18 16:44:30', '0000-00-00 00:00:00'),
(57, 'jdarien', '2017-12-18 16:44:52', '0000-00-00 00:00:00'),
(58, 'jdarien', '2017-12-20 07:50:39', '0000-00-00 00:00:00'),
(59, 'jdarien', '2017-12-20 07:52:56', '0000-00-00 00:00:00'),
(60, 'jdarien', '2017-12-20 07:53:16', '0000-00-00 00:00:00'),
(61, 'jdarien', '2017-12-20 08:03:40', '0000-00-00 00:00:00'),
(62, 'jdarien', '2017-12-20 08:07:12', '0000-00-00 00:00:00'),
(63, 'jdarien', '2017-12-20 08:07:23', '0000-00-00 00:00:00'),
(64, 'jdarien', '2017-12-20 08:08:50', '0000-00-00 00:00:00'),
(65, 'jdarien', '2017-12-20 08:09:46', '0000-00-00 00:00:00'),
(66, 'jdarien', '2017-12-20 08:10:37', '0000-00-00 00:00:00'),
(67, 'jdarien', '2017-12-20 08:11:06', '0000-00-00 00:00:00'),
(68, 'nmoodie', '2017-12-20 08:11:18', '0000-00-00 00:00:00'),
(69, 'jdarien', '2017-12-20 08:13:17', '0000-00-00 00:00:00'),
(70, 'jdarien', '2017-12-20 08:24:33', '0000-00-00 00:00:00'),
(71, 'jdarien', '2017-12-20 08:28:25', '0000-00-00 00:00:00'),
(72, 'jdarien', '2017-12-20 08:37:56', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`Login_ID`, `Username`, `Password`, `P_ID`, `Status`, `Login_Time`, `Logout_Time`) VALUES
(42, 'nmoodie', '6feaf566b2d4ce42f55dfc2267b76bd0', 73, 'A', '2017-12-18 13:00:49', '0000-00-00 00:00:00'),
(43, 'jdarien', 'a1e28f8bc1c55c28fb877d4517138f58', 74, 'A', '2017-12-18 13:01:54', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notif_table`
--

INSERT INTO `notif_table` (`id`, `recipient_ids`, `sender_id`, `subject`, `body`, `date_sent`) VALUES
(19, '73,74,', '74', 'test', 'testing', '2017-12-20 10:56:00'),
(20, '73,74,', '74', 'hey', 'hello', '2017-12-20 10:56:08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `person_tbl`
--

INSERT INTO `person_tbl` (`P_ID`, `Title`, `Fname`, `Lname`, `Email_address`) VALUES
(73, 'Programmer', 'Nyran', 'Moodie', 'nran@yahoo.com'),
(74, 'Manager', 'Jodianne', 'Darien', 'jdar@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE IF NOT EXISTS `projects_tbl` (
  `Project_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Project_Name` varchar(50) NOT NULL,
  `Project_Description` varchar(200) NOT NULL,
  `PM_ID` int(11) NOT NULL,
  `Attached_Programmer_ID` int(11) NOT NULL,
  `Start_dTime` datetime NOT NULL,
  `End_dTime` datetime NOT NULL,
  `Task_ID` int(11) NOT NULL,
  PRIMARY KEY (`Project_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `projects_tbl`
--

INSERT INTO `projects_tbl` (`Project_ID`, `Project_Name`, `Project_Description`, `PM_ID`, `Attached_Programmer_ID`, `Start_dTime`, `End_dTime`, `Task_ID`) VALUES
(76, 'testing', 'mfasmfsmf', 0, 0, '2017-12-18 00:00:00', '2017-12-22 00:00:00', 0),
(78, 'Project', 'fasf', 0, 0, '2017-12-20 00:00:00', '2017-12-29 00:00:00', 0),
(79, 'Blah', 'fasf', 0, 0, '2017-12-15 00:00:00', '2017-12-30 00:00:00', 0);

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
