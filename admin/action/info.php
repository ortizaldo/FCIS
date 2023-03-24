-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 09:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `breeders`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `chicken_id` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `services` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`chicken_id`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `services`, `day_to_transfer`, `date_transfered`, `no_days`, `handler`, `chicken_no`, `type`) VALUES
('C-7000', '', '', '', '', '', 'Talisaynon', '', '', '', '', '', 'Dec-31-2017', 'ronie', 93, 'dam'),
('C-2329', 'Cocks', '', '', '', '', 'Butcher', '', '', '', '', '', 'Nov-22-2017', 'Ronnie', 94, 'sire'),
('C-1533', 'Cocks', 'C-2329', 'Butcher', 'C-7000', '', 'Butcher', '', '', '6 months', 'Sep-03-2018', 'Mar-03-2018', '2018-03-03', 'Ronnie', 95, 'Female'),
('C-1451', 'Stug', 'C-2329', 'Butcher', 'C-7000', '', 'Butcher', '', '', '3 months', '2018-03-05', 'Mar-04-2018', '2017-12-31', 'ronie', 96, 'Male'),
('C-5429', 'Stag', 'C-2329', 'Butcher', 'C-7000', '', 'Butcher', '', '', '', 'Sep-05-2018', 'Mar-05-2018', 'Mar-05-2018', 'ronie', 97, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`chicken_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
