-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2012 at 11:10 AM
-- Server version: 5.0.67
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpshop`
--
DROP DATABASE IF EXISTS `tpshop`;
CREATE DATABASE `tpshop`;
USE  `tpshop`;
-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ITEM_ID` int(4) NOT NULL auto_increment,
  `ITEM_NAME` varchar(100) default NULL,
  `STOCK` int(4) default '0',
  `UNITPRICE` float NOT NULL default '0',
  `COSTPRICE` float NOT NULL default '0',
  `SHORT_DESC` varchar(100) default NULL,
  `MERCHANT` varchar(255) default NULL,
  `DETAILS` varchar(255) default NULL,
  `IMAGE` varchar(60) default NULL,
  PRIMARY KEY  (`ITEM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ITEM_ID`, `ITEM_NAME`, `STOCK`, `UNITPRICE`, `COSTPRICE`, `SHORT_DESC`, `MERCHANT`, `DETAILS`, `IMAGE`) VALUES
(1, 'T-Shirt1', 10, 23.5, 12.3, 'Vinatge Series 1 blue', 'GeeTee', NULL, './images/t-shirt-p1.jpg'),
(2, 'T-Shirt2', 5, 39, 19, 'Retro Series 2 white', 'RETE', NULL, './images//t-shirt-p2.jpg'),
(3, 'T-Shirt3', 16, 69, 47, 'Tropography grey', 'VIVO', NULL, './images//t-shirt-p3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
