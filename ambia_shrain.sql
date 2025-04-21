-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2023 at 06:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ambia_shrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `ad_sl` int(2) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`ad_sl`, `full_name`, `user_name`, `password`) VALUES
(1, 'Anisul', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_dtail`
--

CREATE TABLE IF NOT EXISTS `expenditure_dtail` (
  `exdsl` int(5) NOT NULL AUTO_INCREMENT,
  `date_` date NOT NULL,
  `exp_sl` int(3) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `amount_` int(5) NOT NULL,
  PRIMARY KEY (`exdsl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expenditure_dtail`
--

INSERT INTO `expenditure_dtail` (`exdsl`, `date_`, `exp_sl`, `detail`, `amount_`) VALUES
(1, '2023-03-21', 1, 'Nill', 600),
(2, '2023-03-21', 1, 'Nill', 600),
(3, '2023-02-16', 2, 'Nill', 8000),
(4, '2023-02-09', 2, 'Nill', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_head`
--

CREATE TABLE IF NOT EXISTS `expenditure_head` (
  `exp_sl` int(3) NOT NULL AUTO_INCREMENT,
  `exp_name` varchar(50) NOT NULL,
  PRIMARY KEY (`exp_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `expenditure_head`
--

INSERT INTO `expenditure_head` (`exp_sl`, `exp_name`) VALUES
(1, 'Drill'),
(2, 'Staff Salary');

-- --------------------------------------------------------

--
-- Table structure for table `flat_info`
--

CREATE TABLE IF NOT EXISTS `flat_info` (
  `flt_sl` int(3) NOT NULL AUTO_INCREMENT,
  `owner_name` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `flat_no` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `dish_bill` int(4) NOT NULL,
  `utility` int(4) NOT NULL,
  `mosque` int(4) NOT NULL,
  PRIMARY KEY (`flt_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `flat_info`
--

INSERT INTO `flat_info` (`flt_sl`, `owner_name`, `mobile_no`, `flat_no`, `religion`, `dish_bill`, `utility`, `mosque`) VALUES
(1, 'Winer', '+880', 'A-1', 'Islam', 0, 2300, 200);

-- --------------------------------------------------------

--
-- Table structure for table `month_bill`
--

CREATE TABLE IF NOT EXISTS `month_bill` (
  `bl_sl` int(6) NOT NULL AUTO_INCREMENT,
  `month_` date NOT NULL,
  `flt_sl` int(3) NOT NULL,
  `utility` int(5) NOT NULL,
  `dish_bill` int(5) NOT NULL,
  `mosque` int(5) NOT NULL,
  `due` int(5) NOT NULL,
  PRIMARY KEY (`bl_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `month_bill`
--

INSERT INTO `month_bill` (`bl_sl`, `month_`, `flt_sl`, `utility`, `dish_bill`, `mosque`, `due`) VALUES
(1, '2023-03-01', 1, 2300, 0, 200, 2500),
(2, '2023-02-01', 1, 2300, 0, 200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `received_entry`
--

CREATE TABLE IF NOT EXISTS `received_entry` (
  `rec_sl` int(5) NOT NULL AUTO_INCREMENT,
  `flt_sl` int(3) NOT NULL,
  `date_` date NOT NULL,
  `for_month` varchar(20) NOT NULL,
  `amount_` int(5) NOT NULL,
  `detail` varchar(50) NOT NULL,
  PRIMARY KEY (`rec_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `received_entry`
--

INSERT INTO `received_entry` (`rec_sl`, `flt_sl`, `date_`, `for_month`, `amount_`, `detail`) VALUES
(1, 1, '2023-02-09', '2023-02-01', 2000, '');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `sl` int(3) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `digination` varchar(50) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`sl`, `full_name`, `address`, `mobile`, `digination`) VALUES
(1, 'Saiful', '018', 'ctg', ''),
(2, 'Nasir Hossian', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
