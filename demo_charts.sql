-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2015 at 05:34 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo_charts`
--

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE IF NOT EXISTS `earnings` (
`id` bigint(20) unsigned NOT NULL,
  `total` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `total`, `month`, `year`) VALUES
(1, 1000, 'January', 2014),
(2, 1500, 'February', 2014),
(3, 2000, 'March', 2014),
(4, 2500, 'April', 2014),
(5, 3000, 'May', 2014),
(6, 3500, 'June', 2014),
(7, 2500, 'January', 2015),
(8, 3000, 'February', 2015),
(9, 4000, 'March', 2015),
(10, 1500, 'April', 2015),
(11, 1250, 'May', 2015),
(12, 3000, 'June', 2015),
(13, 3000, 'January', 2013),
(14, 2000, 'February', 2013),
(15, 2000, 'March', 2013),
(16, 3000, 'April', 2013),
(17, 2000, 'May', 2013),
(18, 2000, 'June', 2013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
