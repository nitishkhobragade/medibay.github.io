-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:19 AM
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
  `mob` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `name`, `email`, `mob`, `status`) VALUES
(1, 'admin', '1234', 'Admin', 'admin@gmail.com', '543535661', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `consub` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `apply` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `country`, `consub`, `subject`, `apply`, `status`) VALUES
(2, 'pb', '', '', 'sdffdg', 'abc', '2020-09-16', ''),
(3, 'prakhar', '', 'prakharbaghele18@gmail.com', 'dfg', 'abc', '2020-09-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicins`
--

CREATE TABLE IF NOT EXISTS `medicins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(100) NOT NULL,
  `mtype` varchar(100) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `discrip` text NOT NULL,
  `mphoto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medicins`
--

INSERT INTO `medicins` (`id`, `mname`, `mtype`, `cost`, `exp`, `purpose`, `discrip`, `mphoto`) VALUES
(1, 'adad', '', 'sfds', 'sdf', 'sf', 'discrip', 'photo'),
(2, 'sdf', '', 'dgvd', 'degf', 'df', 'discrip', 'photo'),
(3, 'sdfgv', '', 'dv', 'dv', 'dfv', 'dv', 'sdfgv');

-- --------------------------------------------------------

--
-- Table structure for table `mrecord`
--

CREATE TABLE IF NOT EXISTS `mrecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cdate` varchar(20) NOT NULL,
  `mreport` varchar(200) NOT NULL,
  `hname` varchar(200) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `discrip` text NOT NULL,
  `uid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mrecord`
--

INSERT INTO `mrecord` (`id`, `cdate`, `mreport`, `hname`, `age`, `dname`, `discrip`, `uid`) VALUES
(1, '2020-09-14', '2020-09-14', 'tdgthd', '44', 'ytrdyuf', 'discrip', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptype` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `mfor` varchar(100) NOT NULL,
  `sif` varchar(100) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `rent` varchar(20) NOT NULL,
  `discrip` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `apply` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `ptype`, `nom`, `location`, `purpose`, `mfor`, `sif`, `floor`, `rent`, `discrip`, `photo`, `uid`, `status`, `apply`) VALUES
(1, 'Room', '3', 'balaghat', 'Rent', 'family', '1500', '1', '2000', 'discrip', '1index.png', '1', 'pending', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `addr` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `name`, `gender`, `mob`, `dob`, `addr`, `status`) VALUES
(1, 's@gmail.com', '1234', 'asasas', 'Male', '3455646', '2020-09-14', 'dfgdg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `addr` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `pass`, `name`, `gender`, `mob`, `dob`, `addr`, `status`) VALUES
(1, 'p@gmail.com', '1234', 'pb', 'Male', '324123131', '2020-09-16', 'sdfc', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
