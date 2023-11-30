-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 04:03 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medibay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `name`, `email`, `mob`, `status`) VALUES
(1, 'admin', 'admin', 'Yash Bhairam', 'yash@gmail.com', '3242345235', 'confirm');
(1, 'admin', 'admin', 'Nitish Khobragade', 'nitish@gmail.com', '8982324497', 'confirm');

-- --------------------------------------------------------

--
------------------

--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `apply` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `apply`, `status`) VALUES
(1, 'yash', 'yash@33333333333333333333333gamil.co', 'hvhv', 'hghhggfgfgf', '2020-09-16', 'pending'),
(2, 'ashu', 'ashu@gmail.com', 'Project', 'C.S.E. Department website', '2020-09-16', 'pending'),
(3, 'yash', 'pragya@gmail.com', 'Project', 'last class', '2020-09-16', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE IF NOT EXISTS `expert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `desig` varchar(100) NOT NULL,
  `dt` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `addr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
 --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dt` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `adm` varchar(50) NOT NULL,
  `addr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `usename`, `pass`, `name`, `course`, `branch`, `dob`, `mob`, `email`, `gender`, `dt`, `status`, `adm`, `addr`) VALUES
(1, '1212', '1212', 'sefsf', 'Polytechnic', 'CSE', '2020-09-10', '896294', 'asd@gmail.com', 'Male', '10-09-2020 16:38:13', 'confirm', '2020-21', ''),
(2, '123', '0000', 'pushkar', 'Polytechnic', 'CSE', '2000-02-12', '000000', 'pushkar@gmail.com', 'Male', '16-09-2020 03:04:35', 'confirm', '2020-21', 'dsdsd');

-- --------------------------------------------------------

--


--
-- Dumping data for table `stuforum`
--

INSERT INTO `stuforum` (`id`, `question`, `ans`, `apply`, `status`, `tid`) VALUES
(1, 'sdf', 'hiiiiii', '2020-09-14', 'pending', '1'),
(2, 'what is html?', '', '2020-09-16', 'pending', '2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `desig` varchar(100) NOT NULL,
  `dt` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `addr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `usename`, `name`, `pass`, `dob`, `email`, `mob`, `gender`, `desig`, `dt`, `status`, `addr`) VALUES
(1, 'abcd', 'raj', '1111', '2020-09-11', 'df@gmail.com1', '45353531', 'Male', 'asst prof', '11-09-2020 12:43:31', 'confirm', 'dfggv'),
(2, 'sam', 'Sam', 'sam', '1998-02-05', 'sam@gmail.com', '896200', 'Male', 'teacher', '16-09-2020 03:12:02', 'confirm', 'sam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
