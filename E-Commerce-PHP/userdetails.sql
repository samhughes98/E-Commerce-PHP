-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 06:20 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `photo` varchar(100) DEFAULT NULL,
  `itemname` varchar(80) DEFAULT NULL,
  `itemdesc` varchar(80) DEFAULT NULL,
  `keywords` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`photo`, `itemname`, `itemdesc`, `keywords`, `price`) VALUES
('tshirtblue.jpg', 'T shirt ', 'Large blue t shirt mens', 'mens, slim, cheap, blue, large', '10'),
('ps3.jpg', 'Playstation 3 slim model 120GB', 'Slim used PS3. Used without box, 120Gb storage capacity', 'black, slim, cheap', '80'),
('tshirtblue.jpg', 'ss', 'ss', 'ss', 'ss'),
('ps3.jpg', 'test', 'test1', 'test2', 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `logon`
--

CREATE TABLE `logon` (
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logon`
--

INSERT INTO `logon` (`username`, `password`, `fname`, `lname`, `email`) VALUES
('sammyspammy', 'mollymoo', 'samuel', 'Hughes', 'samhughes98@ho'),
('sammy', 'molly', 'sam', 'hughes', 'samhughes'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('sammyspammy', 'molly', 'sammy', 'hughes', 'sammys'),
('ppp', 'ppp', 'pp', 'ppp', 'ppp'),
('alicerea', 'doodoo', 'alice', 'rea', 'alicereahotmail'),
('sammyhuughes', 'doodoo', 'alice', 'rea', 'samhughes98@hotmail.co.uk'),
('woowee', 'wollywoo', 'poo', 'pee', 'poopee@hot'),
('jtrav', 'ginger', 'james', 'travell', 'jamestravell@hot'),
('m', 'm', 'm', 'm', 'm'),
('p', 'p', 'p', 'p', 'p'),
('o', 'o', 'o', 'o', 'o'),
('poooooo', 'o', 'o', 'o', 'o'),
('poooooooo', 'o', 'o', 'o', 'o'),
('..', 'jkjk', 'pp', 'oo', '..'),
('..o', 'jkjk', 'pp', 'oo', '..'),
('awffaw', 'awfafa', 'afwawf', 'fawfa', 'awffa'),
('gg', 'gg', 'ggg', 'ggg', 'ggg'),
('qqq', 'qqq', 'qqqq', 'qqq', 'qqq'),
('qqqq', 'qqq', 'qqqq', 'qqq', 'qqq'),
('', '', 'dwqdq', '', ''),
('1', '', '1', '', ''),
('12', '23', '', '', '3'),
('louis', 'theroux', 'louis', 'loo', 'louis@loo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
