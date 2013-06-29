-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2013 at 08:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rgm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE IF NOT EXISTS `coursedetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL DEFAULT '',
  `courseid` varchar(255) NOT NULL DEFAULT '',
  `noofyears` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`id`, `coursename`, `courseid`, `noofyears`) VALUES
(1, 'B.Tech', '91a', '4'),
(2, 'M.Tech', '81a', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dailyattendance`
--

CREATE TABLE IF NOT EXISTS `dailyattendance` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(255) NOT NULL DEFAULT '',
  `subjectid` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL DEFAULT '',
  `period` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departmentdetails`
--

CREATE TABLE IF NOT EXISTS `departmentdetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL DEFAULT '',
  `departmentname` varchar(255) NOT NULL DEFAULT '',
  `departmentid` varchar(255) NOT NULL DEFAULT '',
  `yearno` varchar(255) NOT NULL DEFAULT '',
  `noofsections` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examresults`
--

CREATE TABLE IF NOT EXISTS `examresults` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subjectid` varchar(255) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `internalmarks` int(2) NOT NULL,
  `externalmarks` int(2) NOT NULL,
  `marksrequired` int(2) NOT NULL,
  `total` int(3) NOT NULL,
  `credits` int(1) NOT NULL,
  `result` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `historicdata`
--

CREATE TABLE IF NOT EXISTS `historicdata` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(255) NOT NULL DEFAULT '',
  `year` varchar(255) NOT NULL DEFAULT '',
  `semester` varchar(255) NOT NULL DEFAULT '',
  `percentage` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `permission` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `username`, `password`, `permission`) VALUES
(1, 'amith', 'amith', '1'),
(2, 'basaiah', 'basaiah', '1'),
(3, 'chandana', 'chandana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `perioddetails`
--

CREATE TABLE IF NOT EXISTS `perioddetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL DEFAULT '',
  `period` varchar(255) NOT NULL DEFAULT '',
  `subjectcode` varchar(255) NOT NULL DEFAULT '',
  `staffid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

CREATE TABLE IF NOT EXISTS `staffdetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(255) NOT NULL DEFAULT '',
  `staffid` varchar(255) NOT NULL DEFAULT '',
  `mobileno` varchar(255) NOT NULL DEFAULT '',
  `emailid` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `qualification` varchar(255) NOT NULL DEFAULT '',
  `designation` varchar(255) NOT NULL DEFAULT '',
  `experience` varchar(255) NOT NULL DEFAULT '',
  `imagepath` varchar(255) NOT NULL DEFAULT '',
  `doj` varchar(255) NOT NULL DEFAULT '',
  `department` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `year` int(1) NOT NULL,
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentid`, `studentname`, `fathername`, `year`, `semester`) VALUES
(1, '10091a1217', 'chandana', 'abcd', 2, 1),
(2, '10091a1205', 'amitha', 'abcd', 2, 1),
(3, '10091a1204', 'amith', 'xyz', 2, 2),
(4, '10091a1212', 'basaiah', 'xyz', 2, 2),
(5, '10091a1222', 'jyothirmayee', 'hij', 3, 1),
(6, '10091a1262', 'pujitha', 'xyz', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(255) NOT NULL DEFAULT '',
  `studentid` varchar(255) NOT NULL DEFAULT '',
  `mobileno` varchar(255) NOT NULL DEFAULT '',
  `fathermobileno` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `imagepath` varchar(255) NOT NULL DEFAULT '',
  `yearofjoining` varchar(255) NOT NULL DEFAULT '',
  `coursename` varchar(255) NOT NULL DEFAULT '',
  `department` varchar(255) NOT NULL DEFAULT '',
  `year` varchar(255) NOT NULL DEFAULT '',
  `section` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subjectdetails`
--

CREATE TABLE IF NOT EXISTS `subjectdetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL DEFAULT '',
  `branchname` varchar(255) NOT NULL DEFAULT '',
  `year` varchar(255) NOT NULL DEFAULT '',
  `semester` varchar(255) NOT NULL DEFAULT '',
  `subjectname` varchar(255) NOT NULL DEFAULT '',
  `subjectid` varchar(255) NOT NULL DEFAULT '',
  `marksrequired` int(2) NOT NULL,
  `staticid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjectdetails`
--

INSERT INTO `subjectdetails` (`id`, `coursename`, `branchname`, `year`, `semester`, `subjectname`, `subjectid`, `marksrequired`, `staticid`) VALUES
(1, 'B.tech', 'IT', '2', '1', 'Information technology fundamentals', 'A1201', 40, '1'),
(2, 'B.tech', 'IT', '2', '2', 'Foundations of software engineering', 'A1206', 40, '2'),
(3, 'B.tech', 'IT', '3', '1', 'Computer networking', 'A1240', 40, '3');

-- --------------------------------------------------------

--
-- Table structure for table `subjectplusstaff`
--

CREATE TABLE IF NOT EXISTS `subjectplusstaff` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `staffid` varchar(255) NOT NULL DEFAULT '',
  `courseid` varchar(255) NOT NULL DEFAULT '',
  `branchid` varchar(255) NOT NULL DEFAULT '',
  `year` varchar(255) NOT NULL DEFAULT '',
  `semester` varchar(255) NOT NULL DEFAULT '',
  `section` varchar(255) NOT NULL DEFAULT '',
  `subjectid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
