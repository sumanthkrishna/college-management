
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 118.139.179.72
-- Generation Time: Jun 13, 2013 at 09:44 PM
-- Server version: 5.0.96
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rgmdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailyattendance`
--

CREATE TABLE `dailyattendance` (
  `id` int(6) NOT NULL auto_increment,
  `studentid` varchar(255) NOT NULL default '',
  `subjectid` varchar(255) NOT NULL default '',
  `date` varchar(255) NOT NULL default '',
  `period` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `dailyattendance`
--

INSERT INTO `dailyattendance` VALUES(5, '10091a1204', '1234', '2013-06-11', '2');
INSERT INTO `dailyattendance` VALUES(6, '08501a1271', '1234', '2013-06-11', '1');
INSERT INTO `dailyattendance` VALUES(7, '10091a1204', '1234', '2013-06-11', '3');
INSERT INTO `dailyattendance` VALUES(8, '08501a1271', '1234', '2013-06-11', '7');
INSERT INTO `dailyattendance` VALUES(15, '10091a1204', '1234', '2013-06-11', '4');
INSERT INTO `dailyattendance` VALUES(16, '08501a1271', '1234', '2013-06-11', '4');
INSERT INTO `dailyattendance` VALUES(17, '10091a1204', '1234', '2013-06-11', '5');
INSERT INTO `dailyattendance` VALUES(18, '08501a1271', '1234', '2013-06-11', '5');
INSERT INTO `dailyattendance` VALUES(19, '10091a1204', '1234', '2013-06-11', '6');
INSERT INTO `dailyattendance` VALUES(20, '10091a1204', '1234', '2013-06-11', '7');
INSERT INTO `dailyattendance` VALUES(25, '08501a1271', '1234', '2013-06-14', '7');
INSERT INTO `dailyattendance` VALUES(26, '10091a1204', '1234', '2013-06-13', '6');
INSERT INTO `dailyattendance` VALUES(27, '10091a1204', '1234', '2013-06-12', '7');
