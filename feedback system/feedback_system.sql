-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2018 at 09:04 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(25) NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `bname` (`bname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`) VALUES
(30, 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(25) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `cname`) VALUES
(2, 'TE2'),
(4, 'TE1'),
(5, 'SE1'),
(6, 'SE2'),
(7, 'BE1'),
(8, 'BE2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `sid`, `tid`, `average`) VALUES
(7, 9, 5, 9, 9, 10, 9, 5, 3, 9),
(8, 8, 9, 9, 9, 10, 4, 5, 4, 8),
(9, 5, 8, 6, 2, 5, 2, 7, 3, 5),
(10, 7, 8, 7, 6, 7, 6, 7, 4, 7),
(11, 5, 4, 5, 3, 10, 6, 8, 3, 6),
(12, 6, 5, 4, 5, 8, 6, 8, 4, 6),
(13, 8, 4, 8, 2, 7, 10, 10, 3, 7),
(14, 1, 1, 1, 1, 1, 1, 10, 4, 1),
(15, 8, 8, 10, 5, 10, 9, 13, 3, 8),
(16, 7, 4, 6, 8, 7, 9, 13, 4, 7),
(17, 9, 10, 10, 10, 10, 10, 16, 3, 10),
(18, 9, 9, 8, 7, 9, 10, 17, 5, 9),
(19, 9, 9, 10, 10, 7, 9, 17, 6, 9),
(20, 9, 10, 10, 8, 10, 10, 19, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studid` int(11) NOT NULL AUTO_INCREMENT,
  `studname` varchar(40) NOT NULL,
  `roll` int(11) NOT NULL,
  `studuser` varchar(40) NOT NULL,
  `studpass` varchar(40) NOT NULL,
  `studbranch` varchar(40) NOT NULL,
  `studclass` varchar(40) NOT NULL,
  `admin` int(11) NOT NULL,
  `feedback` int(11) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `studname`, `roll`, `studuser`, `studpass`, `studbranch`, `studclass`, `admin`, `feedback`) VALUES
(6, 'Deepali Ande', 402001, '402001', '81dc9bdb52d04dc20036dbd8313ed055', 'Computer Engineering', 'Te1', 1, 0),
(8, 'Jayesh Patil', 303046, '303046', '4d069b4e77b1d1804bead1d3bea762b8', 'Computer Engineering', 'Te2', 1, 0),
(9, 'Vaibhav Gole', 302065, '302065', 'ee017a1d3a977535c88ada8f416064f6', 'Computer Engineering', 'Te1', 1, 0),
(11, 'Pooja Deore', 303005, '303005', 'c86109d0154dd3f75eaf601ba55f33b6', 'Computer Engineering', 'Te2', 1, 0),
(12, 'Dhanashree Bansode', 303001, '303001', '418bba70e3f068ee1c8c9a281ee8fa67', 'Computer Engineering', 'Te2', 1, 0),
(13, 'Kunal Gedam', 303065, '303065', '38d82011f2fbc5dd83a47d0372ca4612', 'Computer Engineering', 'Te2', 1, 0),
(14, 'Sudesh', 123, '123', '202cb962ac59075b964b07152d234b70', 'Computer Engineering', 'Te2', 1, 0),
(15, 'Kunal Gedam', 303042, '303042', '635380dc7054abe398ef1b5942b43d68', 'Computer Engineering', 'Te2', 1, 0),
(16, 'Pushkar', 303090, '303090', '7257c870e4c9f45f49876aa59b5fc9a1', 'Computer Engineering', 'Te2', 1, 0),
(17, 'Aishwariya P', 303009, '303009', 'ca6be42cfd62aa2a2cd6c73a48c0013c', 'Computer Engineering', 'Be2', 1, 0),
(18, 'Poorva Purandare', 303024, '303024', 'a8d6846222dbf72f533e8d7a035cf7b6', 'Computer Engineering', 'Be2', 1, 0),
(19, 'Yash Gupta', 403038, '403038', '2fee37302ce0e9017df22b286ad96724', 'Computer Engineering', 'Be2', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `sname`) VALUES
(1, 'Computer networks'),
(2, 'DBMS'),
(3, 'Theory of computation'),
(4, 'ISEE'),
(5, 'SEPM'),
(6, 'SDL'),
(7, 'Distributed System'),
(8, 'High Performance Computing'),
(9, 'Artificial Inteligence and Robotics');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(40) NOT NULL,
  `tuser` varchar(40) NOT NULL,
  `tpass` varchar(40) NOT NULL,
  `tconpass` varchar(40) NOT NULL,
  `tbranch` varchar(40) NOT NULL,
  `tclass` varchar(40) NOT NULL,
  `tsubject` varchar(40) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `tuser`, `tpass`, `tconpass`, `tbranch`, `tclass`, `tsubject`) VALUES
(3, 'Mrs S. S. Kinger', 'shakti1234', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'Computer Engineering', 'Te2', 'Dbms'),
(4, 'Mrs M. R. Mohod', 'madhulika123', '539fa886ef4468bb77423781c65a9d81', '539fa886ef4468bb77423781c65a9d81', 'Computer Engineering', 'Te2', 'Sdl'),
(5, 'Prof. M. V. Phatak', 'ds123', '0b10e2e7e510c8332b12f35905680e72', '0b10e2e7e510c8332b12f35905680e72', 'Computer Engineering', 'Be2', 'Distributed System'),
(6, 'Prof V. S. Jagtap', 'air123', '3f79c71b768b22f8cfd071a6af4e40ed', '3f79c71b768b22f8cfd071a6af4e40ed', 'Computer Engineering', 'Be2', 'Artificial Inteligence And Robotics');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
