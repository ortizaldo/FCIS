-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 02:36 AM
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
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
`id` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `atime` time(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `type`, `atime`) VALUES
(3, 'feeding', '00:12:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
`id` int(255) NOT NULL,
  `batch_no` varchar(500) NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `breeder_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch_no`, `mother_id`, `breeder_id`) VALUES
(6, '2', 'D-00006', '167044'),
(7, '3', 'D-00005', '713613'),
(8, '2', 'D-00005', '109118'),
(9, '2', 'D-00012', '621685'),
(10, '4', 'D-00020', '618554');

-- --------------------------------------------------------

--
-- Table structure for table `battles`
--

CREATE TABLE IF NOT EXISTS `battles` (
  `chicken_id` varchar(255) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
`cock_no` int(255) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `obloodline` varchar(500) NOT NULL,
  `oowner` varchar(500) NOT NULL,
  `oweight` varchar(500) NOT NULL,
  `oheight` varchar(500) NOT NULL,
  `ogaff` varchar(500) NOT NULL,
  `oinjuries` varchar(500) NOT NULL,
  `weight` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `gaff` varchar(500) NOT NULL,
  `injuries` varchar(500) NOT NULL,
  `place` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `date_held` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battles`
--

INSERT INTO `battles` (`chicken_id`, `prim_id`, `cock_no`, `bloodline`, `obloodline`, `oowner`, `oweight`, `oheight`, `ogaff`, `oinjuries`, `weight`, `height`, `gaff`, `injuries`, `place`, `event_type`, `date_held`, `result`) VALUES
('B-1-D-00012-00005', '1-D-00012-00005 ', 15, 'as', 'a', 'as', 'asass', 'asas', 'asa', 'asa', '232', '121', 'sdsd', 'asasasasas', 'asas', 'asas', 'Aug-07-2018', 'win'),
('ST-2-D-00012-00006 ', '2-D-00012-00006 ', 16, 'as', 'a', 'as', 'asass', 'asas', 'asa', 'asa', '232 kg', '121', 'sdsd', 'asasasasas', 'asas', 'asas', 'Aug-10-2018', 'win');

-- --------------------------------------------------------

--
-- Table structure for table `breeders`
--

CREATE TABLE IF NOT EXISTS `breeders` (
  `breeder_id` varchar(500) NOT NULL,
  `breeder_f_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `breeder_m_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `date_breed` varchar(500) NOT NULL,
`breeder_no` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeders`
--

INSERT INTO `breeders` (`breeder_id`, `breeder_f_id`, `father_bloodline`, `breeder_m_id`, `mother_bloodline`, `bloodline`, `date_breed`, `breeder_no`, `image`, `descrip`, `prim_id`) VALUES
('621685', 'S-00014', 'racism', 'D-00012', 'race', 'racism', 'Aug-03-2018', 145, '', 'as', ''),
('927764', 'S-00014', 'racism', 'D-00012', 'race', 'racism', 'Aug-03-2018', 146, '', 'as', ''),
('974813', 'S-00014', 'racism', 'D-00012', 'race', 'racism', 'Aug-03-2018', 147, '', 'asasas', ''),
('994808', 'S-00014', 'racism', 'D-00012', 'race', 'racism', 'Aug-09-2018', 148, '', 'asasas', ''),
('618554', 'S-00014', 'racism', 'D-00020', '', 'racism', 'Aug-09-2018', 149, '', 'asasas', '');

-- --------------------------------------------------------

--
-- Table structure for table `bull_stag_his`
--

CREATE TABLE IF NOT EXISTS `bull_stag_his` (
  `chicken_id` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bull_stag_his`
--

INSERT INTO `bull_stag_his` (`chicken_id`, `prim_id`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `day_to_transfer`, `date_transfered`, `no_days`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`) VALUES
('B-2-D-00006-00116  ', '2-D-00006-00116  ', 'Bull Stag', ' S-00002', '', 'D-00006', '', '', '', '', '2 months', 'Jul-02-2018', 'Jul-02-2018', 'Jul-02-2018', '', 7, '', '', '', ''),
('B-1-D-00005-00015  ', '1-D-00005-00015  ', 'Bull Stag', ' S-00002', '', 'D-00005', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 8, '', '', '', ''),
('B-1-D-00006-00115  ', '1-D-00006-00115  ', 'Bull Stag', ' S-00002', '', 'D-00006', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-02-2018', 'Jul-02-2018', '', 9, '', '', '', ''),
('B-3-D-00006-00117  ', '3-D-00006-00117  ', 'Bull Stag', ' S-00002', '', 'D-00006', '', '', '', '', '', 'Jul-23-2018', 'Jul-02-2018', 'Jul-02-2018', '', 10, '', '', '', ''),
('B-2-D-00005-00016  ', '2-D-00005-00016  ', 'Bull Stag', ' S-00002', '', 'D-00005', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 11, '', '', '', ''),
('B-1-D-00012-00001  ', 'ST-1-D-00012-00001  ', 'Bull Stag', ' S-00014', '', 'D-00012', '', '', '', '', '2 months', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 12, '', '', '', ''),
('B-1-D-00012-00005  ', 'ST-1-D-00012-00005  ', 'Bull Stag', ' S-00014', '', 'D-00012', '', '', '', '', '2 months', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 13, '', '', '21.jpg', ''),
('B-1-D-00020-00001  ', 'ST-1-D-00020-00001  ', 'Bull Stag', ' S-00014', '', 'D-00020', '', '', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 14, '', '', '', ''),
('B-2-D-00020-00002  ', 'ST-2-D-00020-00002  ', 'Bull Stag', ' S-00014', '', 'D-00020', '', '', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 15, '', '', '1000.jpg', ''),
('B-3-D-00020-00003  ', 'ST-3-D-00020-00003  ', 'Bull Stag', ' S-00014', '', 'D-00020', '', '', '', '', '2 months', 'Dec-01-2018', '2018-12-13', '2018-12-13', '', 16, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cfeed`
--

CREATE TABLE IF NOT EXISTS `cfeed` (
`cfeed_no` int(250) NOT NULL,
  `cfeed_id` varchar(500) NOT NULL,
  `cfeed_date` varchar(500) NOT NULL,
  `type_cfeed` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `cf_time` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfeed`
--

INSERT INTO `cfeed` (`cfeed_no`, `cfeed_id`, `cfeed_date`, `type_cfeed`, `descrip`, `cf_time`, `cock_id`) VALUES
(2, 'S-3635', '2018-07-12', 'aaa', 'aaa', '', 'ST-1-D-00006-00115 ');

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE IF NOT EXISTS `chickens` (
  `chicken_id` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `cage` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(5) unsigned zerofill NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`chicken_id`, `prim_id`, `batch`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `day_to_transfer`, `date_transfered`, `no_days`, `cage`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`) VALUES
('C-1-D-00020-00001  ', '1-D-00020-00001 ', 'Batched-4-D-00020', 'Cocks', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '2 months', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', 'right', '', 00142, 'Male', '', '1000.jpg', ''),
('B-2-D-00020-00002  ', '2-D-00020-00002 ', 'Batched-4-D-00020', 'Bull Stag', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '2 months', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', 'right', '', 00143, 'Male', '', '1000.jpg', ''),
('C-3-D-00020-00003  ', '3-D-00020-00003 ', 'Batched-4-D-00020', 'Cocks', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '2 months', 'Jun-01-2019', 'Dec-01-2018', '2018-12-13', 'right', '', 00144, 'Male', '', '1000.jpg', ''),
('ST-4-D-00020-00004 ', '4-D-00020-00004 ', 'Batched-4-D-00020', 'Stag', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '2 months', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', 'right', '', 00145, 'Male', '', '1000.jpg', ''),
('ST-5-D-00020-00005 ', '5-D-00020-00005 ', 'Batched-4-D-00020', 'Stag', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '2 months', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', 'right', '', 00146, '', '', '1000.jpg', ''),
('6-D-00020-00006', '6-D-00020-00006', 'Batched-4-D-00020', 'Chicks', 'S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', '', 00147, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chicks`
--

CREATE TABLE IF NOT EXISTS `chicks` (
  `chick_id` varchar(500) NOT NULL,
  `cock_categories` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `father_id` varchar(500) NOT NULL,
  `f_num_wins` varchar(500) NOT NULL,
  `f_num_loss` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `siblings` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
  `age_chicks` varchar(500) NOT NULL,
`chick_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chicks_his`
--

CREATE TABLE IF NOT EXISTS `chicks_his` (
  `chicken_id` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
  `batch` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicks_his`
--

INSERT INTO `chicks_his` (`chicken_id`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `day_to_transfer`, `date_transfered`, `no_days`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`, `prim_id`, `batch`) VALUES
('1-D-00006-00115', 'Chicks', ' S-00002', 'racism', 'D-00006', '', '', '', '', '', 'Jan-02-2019', 'Jul-02-2018', 'Jul-02-2018', '', 32, '', '', '', '', '1-D-00006-00115', ''),
('2-D-00006-00116', 'Chicks', ' S-00002', 'racism', 'D-00006', '', '', '', '', '', 'Jan-02-2019', 'Jul-02-2018', 'Jul-02-2018', '', 33, '', '', '', '', '2-D-00006-00116', ''),
('3-D-00006-00117', 'Chicks', ' S-00002', 'racism', 'D-00006', '', '', '', '', '', 'Jan-02-2019', 'Jul-02-2018', 'Jul-02-2018', '', 34, '', '', '', '', '3-D-00006-00117', ''),
('4-D-00006-00118', 'Chicks', ' S-00002', 'racism', 'D-00006', '', '', '', '', '', 'Jan-02-2019', 'Jul-02-2018', 'Jul-02-2018', '', 35, '', '', '', '', '4-D-00006-00118', ''),
('1-D-00005-00006', 'Chicks', ' ', '', '', '', '', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 36, '', '', '', '', '1-D-00005-00006', ''),
('2-D-00005-00007', 'Chicks', ' ', '', '', '', '', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 37, '', '', '', '', '2-D-00005-00007', ''),
('3-D-00005-00008', 'Chicks', ' ', '', '', '', '', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 38, '', '', '', '', '3-D-00005-00008', ''),
('4-D-00005-00009', 'Chicks', ' ', '', '', '', '', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 39, '', '', '', '', '4-D-00005-00009', ''),
('5-D-00005-00010', 'Chicks', ' ', '', '', '', '', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 40, '', '', '', '', '5-D-00005-00010', ''),
('1-D-00005-00011', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 41, '', '', '', '', '1-D-00005-00011', ''),
('2-D-00005-00012', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 42, '', '', '', '', '2-D-00005-00012', ''),
('1-D-00005-00015', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 43, '', '', '', '', '1-D-00005-00015', ''),
('2-D-00005-00016', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 44, '', '', '', '', '2-D-00005-00016', ''),
('3-D-00005-00017', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 45, '', '', '', '', '3-D-00005-00017', ''),
('4-D-00005-00018', 'Chicks', ' S-00002', 'racism', 'D-00005', '', 'asasas', '', '', '', 'Jan-23-2019', 'Jul-23-2018', 'Jul-23-2018', '', 46, '', '', '', '', '4-D-00005-00018', ''),
('1-D-00005-00001', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 47, '', '', '', '', '1-D-00005-00001', ''),
('2-D-00005-00002', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 48, '', '', '', '', '2-D-00005-00002', ''),
('3-D-00005-00003', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 49, '', '', '', '', '3-D-00005-00003', ''),
('4-D-00005-00004', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 50, '', '', '', '', '4-D-00005-00004', ''),
('1-D-00005-00005', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 51, '', '', '', '', '1-D-00005-00005', ''),
('2-D-00005-00006', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 52, '', '', '', '', '2-D-00005-00006', ''),
('3-D-00005-00007', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 53, '', '', '', '', '3-D-00005-00007', ''),
('4-D-00005-00008', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 54, '', '', '', '', '4-D-00005-00008', ''),
('5-D-00005-00009', 'Chicks', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', '', '', '', '', 'Jan-30-2019', 'Jul-30-2018', 'Jul-30-2018', '', 55, '', '', '', '', '5-D-00005-00009', ''),
('1-D-00012-00001', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 56, '', '', '', '', '1-D-00012-00001', ''),
('2-D-00012-00002', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 57, '', '', '', '', '2-D-00012-00002', ''),
('3-D-00012-00003', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 58, '', '', '', '', '3-D-00012-00003', ''),
('4-D-00012-00004', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 59, '', '', '', '', '4-D-00012-00004', ''),
('1-D-00012-00005', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 60, '', '', '', '', '1-D-00012-00005', ''),
('2-D-00012-00006', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 61, '', '', '', '', '2-D-00012-00006', ''),
('3-D-00012-00007', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 62, '', '', '', '', '3-D-00012-00007', ''),
('4-D-00012-00008', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 63, '', '', '', '', '4-D-00012-00008', ''),
('5-D-00012-00009', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 64, '', '', '', '', '5-D-00012-00009', ''),
('6-D-00012-00010', 'Chicks', ' S-00014', 'racism', 'D-00012', '', 'as', '', '', '', 'Feb-03-2019', 'Aug-03-2018', 'Aug-03-2018', '', 65, '', '', '', '', '6-D-00012-00010', ''),
('1-D-00020-00001', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 66, '', '', '', '', '1-D-00020-00001', ''),
('2-D-00020-00002', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 67, '', '', '', '', '2-D-00020-00002', ''),
('3-D-00020-00003', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 68, '', '', '', '', '3-D-00020-00003', ''),
('4-D-00020-00004', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 69, '', '', '', '', '4-D-00020-00004', ''),
('5-D-00020-00005', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 70, '', '', '', '', '5-D-00020-00005', ''),
('6-D-00020-00006', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 71, '', '', '', '', '6-D-00020-00006', ''),
('7-D-00020-00007', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 72, '', '', '', '', '7-D-00020-00007', ''),
('8-D-00020-00008', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 73, '', '', '', '', '8-D-00020-00008', ''),
('9-D-00020-00009', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 74, '', '', '', '', '9-D-00020-00009', ''),
('1-D-00020-00010', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 75, '', '', '', '', '1-D-00020-00010', ''),
('2-D-00020-00011', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 76, '', '', '', '', '2-D-00020-00011', ''),
('3-D-00020-00012', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 77, '', '', '', '', '3-D-00020-00012', ''),
('4-D-00020-00013', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 78, '', '', '', '', '4-D-00020-00013', ''),
('5-D-00020-00014', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 79, '', '', '', '', '5-D-00020-00014', ''),
('6-D-00020-00015', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 80, '', '', '', '', '6-D-00020-00015', ''),
('7-D-00020-00016', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 81, '', '', '', '', '7-D-00020-00016', ''),
('8-D-00020-00017', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 82, '', '', '', '', '8-D-00020-00017', ''),
('9-D-00020-00018', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-09-2019', 'Aug-09-2018', 'Aug-09-2018', '', 83, '', '', '', '', '9-D-00020-00018', ''),
('1-D-00020-00001', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-21-2019', 'Aug-21-2018', 'Aug-21-2018', '', 84, '', '', '', '', '1-D-00020-00001', ''),
('2-D-00020-00002', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-21-2019', 'Aug-21-2018', 'Aug-21-2018', '', 85, '', '', '', '', '2-D-00020-00002', ''),
('3-D-00020-00003', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-21-2019', 'Aug-21-2018', 'Aug-21-2018', '', 86, '', '', '', '', '3-D-00020-00003', ''),
('4-D-00020-00004', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-21-2019', 'Aug-21-2018', 'Aug-21-2018', '', 87, '', '', '', '', '4-D-00020-00004', ''),
('5-D-00020-00005', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Feb-21-2019', 'Aug-21-2018', 'Aug-21-2018', '', 88, '', '', '', '', '5-D-00020-00005', ''),
('1-D-00020-00001', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 89, '', '', '', '', '1-D-00020-00001', ''),
('2-D-00020-00002', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 90, '', '', '', '', '2-D-00020-00002', ''),
('3-D-00020-00003', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 91, '', '', '', '', '3-D-00020-00003', ''),
('4-D-00020-00004', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 92, '', '', '', '', '4-D-00020-00004', ''),
('5-D-00020-00005', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 93, '', '', '', '', '5-D-00020-00005', ''),
('6-D-00020-00006', 'Chicks', ' S-00014', 'racism', 'D-00020', '', 'asasas', '', '', '', 'Jun-01-2019', 'Dec-01-2018', 'Dec-01-2018', '', 94, '', '', '', '', '6-D-00020-00006', '');

-- --------------------------------------------------------

--
-- Table structure for table `cocks`
--

CREATE TABLE IF NOT EXISTS `cocks` (
  `cock_id` varchar(500) NOT NULL,
  `cock_categories` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `f_num_wins` varchar(500) NOT NULL,
  `f_num_loss` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`cock_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cock_categories`
--

CREATE TABLE IF NOT EXISTS `cock_categories` (
`id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `shop` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cock_his`
--

CREATE TABLE IF NOT EXISTS `cock_his` (
  `chicken_id` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cock_his`
--

INSERT INTO `cock_his` (`chicken_id`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `day_to_transfer`, `date_transfered`, `no_days`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`, `prim_id`) VALUES
('C-2-D-00006-00116  ', 'Cocks', ' S-00002', '', 'D-00006', '', '', '', '', '2 months', 'Jul-02-2018', 'Jul-02-2018', 'Jul-02-2018', '', 12, '', '', '', '', '2-D-00006-00116  '),
('C-1-D-00005-00015  ', 'Cocks', ' S-00002', '', 'D-00005', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 13, '', '', '', '', '1-D-00005-00015  '),
('C-1-D-00006-00115  ', 'Cocks', ' S-00002', '', 'D-00006', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-02-2018', 'Jul-02-2018', '', 14, '', '', '', '', '1-D-00006-00115  '),
('C-3-D-00006-00117  ', 'Cocks', ' S-00002', '', 'D-00006', '', '', '', '', '', 'Jul-23-2018', 'Jul-02-2018', 'Jul-02-2018', '', 15, '', '', '', '', '3-D-00006-00117  '),
('C-2-D-00005-00016  ', 'Cocks', ' S-00002', '', 'D-00005', '', '', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 16, '', '', '', '', '2-D-00005-00016  '),
('C-1-D-00020-00001  ', 'Cocks', ' S-00014', '', 'D-00020', '', '', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 17, '', '', '1000.jpg', '', 'B-1-D-00020-00001   '),
('C-3-D-00020-00003  ', 'Cocks', ' S-00014', '', 'D-00020', '', '', '', '', '2 months', 'Dec-01-2018', '2018-12-13', '2018-12-13', '', 18, '', '', '1000.jpg', '', 'B-3-D-00020-00003   ');

-- --------------------------------------------------------

--
-- Table structure for table `conditioning`
--

CREATE TABLE IF NOT EXISTS `conditioning` (
  `cock_id` varchar(500) NOT NULL,
`con_no` int(255) NOT NULL,
  `place` varchar(500) NOT NULL,
  `event_type` varchar(500) NOT NULL,
  `event_date` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conditioning`
--

INSERT INTO `conditioning` (`cock_id`, `con_no`, `place`, `event_type`, `event_date`) VALUES
('ST-4-D-00020-00004 ', 9, 'Silay ', 'cock derby', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `iso` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `currency`, `iso`) VALUES
(1, 'Afghan afghani', 'AFN'),
(2, 'European euro', 'EUR'),
(3, 'Albanian lek', 'ALL'),
(4, 'Algerian dinar', 'DZD'),
(5, 'United States dollar', 'USD'),
(6, 'Angolan kwanza', 'AOA'),
(7, 'East Caribbean dollar', 'XCD'),
(8, 'Argentine peso', 'ARS'),
(9, 'Armenian dram', 'AMD'),
(10, 'Aruban florin', 'AWG'),
(12, 'Australian dollar', 'AUD'),
(13, 'Azerbaijani manat', 'AZN'),
(14, 'Bahamian dollar', 'BSD'),
(15, 'Bahraini dinar', 'BHD'),
(16, 'Bangladeshi taka', 'BDT'),
(17, 'Barbadian dollar', 'BBD'),
(18, 'Belarusian ruble', 'BYN'),
(19, 'Belize dollar', 'BZD'),
(20, 'West African CFA franc', 'XOF'),
(21, 'Bermudian dollar', 'BMD'),
(22, 'Bhutanese ngultrum', 'BTN'),
(23, 'Bolivian boliviano', 'BOB'),
(24, 'Bosnia and Herzegovina convertible mark', 'BAM'),
(25, 'Botswana pula', 'BWP'),
(26, 'Brazilian real', 'BRL'),
(27, 'Brunei dollar', 'BND'),
(28, 'Bulgarian lev', 'BGN'),
(29, 'Burundi franc', 'BIF'),
(30, 'Cape Verdean escudo', 'CVE'),
(31, 'Cambodian riel', 'KHR'),
(32, 'Canadian dollar', 'CAD'),
(33, 'Cayman Islands dollar', 'KYD'),
(35, 'Chilean peso', 'CLP'),
(36, 'Chinese Yuan Renminbi', 'CNY'),
(37, 'Colombian peso', 'COP'),
(38, 'Comorian franc', 'KMF'),
(39, 'Congolese franc', 'CDF'),
(40, 'Cook Islands dollar', 'CKD'),
(41, 'Costa Rican colon', 'CRC'),
(42, 'Croatian kuna', 'HRK'),
(43, 'Cuban peso', 'CUP'),
(44, 'Netherlands Antillean guilder', 'ANG'),
(45, 'Czech koruna', 'CZK'),
(46, 'Danish krone', 'DDK'),
(47, 'Djiboutian franc', 'DJF'),
(49, 'Dominican peso', 'DOP'),
(50, 'Egyptian pound', 'EGP'),
(51, 'Eritrean nakfa', 'ERN'),
(52, 'Ethiopian birr', 'ETB'),
(53, 'Falkland Islands pound', 'FKP'),
(54, 'Faroese krona', 'FOK'),
(55, 'Fijian dollar', 'FJD'),
(56, 'CFP franc', 'XPF'),
(57, 'Central African CFA franc', 'XAF'),
(58, 'Gambian dalasi', 'GMD'),
(59, 'Georgian lari', 'GEL'),
(60, 'Ghanaian cedi', 'GHS'),
(61, 'Gibraltar pound', 'GIP'),
(64, 'Guatemalan quetzal', 'GTQ'),
(65, 'Guernsey Pound', 'GGP'),
(66, 'Guinean franc', 'GNF'),
(67, 'Guyanese dollar', 'GYD'),
(68, 'Haitian gourde', 'HTG'),
(69, 'Honduran lempira', 'HNL'),
(70, 'Hong Kong dollar', 'HKD'),
(71, 'Hungarian forint', 'HUF'),
(72, 'Icelandic krona', 'ISK'),
(73, 'Indian rupee', 'INR'),
(74, 'Indonesian rupiah', 'IDR'),
(75, 'Iranian rial', 'IRR'),
(77, 'Manx pound', 'IMP'),
(78, 'Israeli new shekel', 'ILS'),
(79, 'Jamaican dollar', 'JMD'),
(80, 'Japanese yen', 'JPY'),
(81, 'Jersey pound', 'JEP'),
(82, 'Jordanian dinar', 'JOD'),
(83, 'Kazakhstani tenge', 'KZT'),
(84, 'Kenyan shilling', 'KES'),
(85, 'Kuwaiti dinar', 'KWD'),
(86, 'Kyrgyzstani som', 'KGS'),
(87, 'Lao kip', 'LAK'),
(88, 'Lebanese pound', 'LBP'),
(89, 'Lesotho loti', 'LSL'),
(90, 'Liberian dollar', 'LRD'),
(91, 'Libyan dinar', 'LYD'),
(92, 'Swiss franc', 'CHF'),
(93, 'Macanese pataca', 'MOP'),
(94, 'Macedonian denar', 'MKD'),
(95, 'Malagasy ariary', 'MGA'),
(96, 'Malawian kwacha', 'MWK'),
(97, 'Malaysian ringgit', 'MWL'),
(98, 'Maldivian rufiyaa', 'MVR'),
(99, 'Mauritanian ouguiya', 'MRO'),
(100, 'Mauritian rupee', 'MUR'),
(101, 'Mexican peso', 'MXN'),
(102, 'Moldovan leu', 'MDL'),
(103, 'Mongolian tugrik', 'MNT'),
(104, 'Moroccan dirham', 'MAD'),
(105, 'Mozambican metical', 'MZN'),
(106, 'Myanmar kyat', 'MMK'),
(107, 'Namibian dollar', 'NAD'),
(108, 'Nepalese rupee', 'NPR'),
(111, 'Nicaraguan cordoba', 'NIO'),
(112, 'Nigerian naira', 'NGN'),
(113, 'North Korean won', 'KPW'),
(114, 'Norwegian krone', 'NOK'),
(115, 'Omani rial', 'OMR'),
(116, 'Pakistani rupee', 'PKR'),
(118, 'Papua New Guinean kina', 'PGK'),
(119, 'Paraguayan guarani', 'PYG'),
(120, 'Peruvian sol', 'PEN'),
(121, 'Philippine peso', 'PHP'),
(122, 'New Zealand dollar', 'NZD'),
(123, 'Polish zloty', 'PLN'),
(124, 'Qatari riyal', 'QAR'),
(125, 'Romanian leu', 'RON'),
(126, 'Russian ruble', 'RUB'),
(127, 'Rwandan franc', 'RWF'),
(128, 'Saint Helena pound', 'SHP'),
(129, 'Samoan tala', 'WST'),
(130, 'Sao Tome and Principe dobra', 'STD'),
(131, 'Saudi Arabian riyal', 'SAR'),
(132, 'Serbian dinar', 'RSD'),
(133, 'Seychellois rupee', 'SCR'),
(134, 'Sierra Leonean leone', 'SLL'),
(135, 'Singapore dollar', 'SGD'),
(136, 'Netherlands Antillean guilder', 'ANG'),
(137, 'Solomon Islands dollar', 'SBD'),
(138, 'Somali shilling', 'SOS'),
(139, 'South African rand', 'ZAR'),
(140, 'Pound sterling', 'GBP'),
(141, 'South Korean won', 'KRW'),
(142, 'South Sudanese pound', 'SSP'),
(143, 'Sri Lankan rupee', 'LKR'),
(144, 'SDG', 'Sudanese pound'),
(145, 'Surinamese dollar', 'SRD'),
(147, 'Swazi lilangeni', 'SZL'),
(148, 'Swedish krona', 'SEK'),
(150, 'Syrian pound', 'SYP'),
(151, 'New Taiwan dollar', 'TWD'),
(152, 'Tajikistani somoni', 'TJS'),
(153, 'Tanzanian shilling', 'TZS'),
(154, 'Thai baht', 'THB'),
(155, 'Tongan pa''anga', 'TOP'),
(156, 'Trinidad and Tobago dollar', 'TTD'),
(158, 'Tunisian dinar', 'TND'),
(159, 'Turkish lira', 'TRY'),
(160, 'Turkmen manat', 'TMT'),
(161, 'Ugandan shilling', 'UGS'),
(162, 'Ukrainian hryvnia', 'UAH'),
(163, 'UAE dirham', 'AED'),
(165, 'Uruguayan peso', 'UYU'),
(166, 'Uzbekistani som', 'UZS'),
(167, 'Vanuatu vatu', 'VUV'),
(168, 'Venezuelan bolivar', 'VEF'),
(169, 'Vietnamese dong', 'VND'),
(170, 'Yemeni rial', 'YER'),
(171, 'Zambian kwacha', 'ZMW');

-- --------------------------------------------------------

--
-- Table structure for table `cprac`
--

CREATE TABLE IF NOT EXISTS `cprac` (
`cprac_no` int(250) NOT NULL,
  `cprac_id` varchar(500) NOT NULL,
  `cprac_date` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `cp_time` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cvacc`
--

CREATE TABLE IF NOT EXISTS `cvacc` (
`cvacc_no` int(250) NOT NULL,
  `cvacc_id` varchar(500) NOT NULL,
  `date_cvacc` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `injection` varchar(500) NOT NULL,
  `dosage_vac` varchar(500) NOT NULL,
  `cv_time` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvacc`
--

INSERT INTO `cvacc` (`cvacc_no`, `cvacc_id`, `date_cvacc`, `descrip`, `cock_id`, `injection`, `dosage_vac`, `cv_time`) VALUES
(1, '', '2018-07-14', 'asasas', 'ST-1-D-00006-00115 ', '927', 'aa', '');

-- --------------------------------------------------------

--
-- Table structure for table `deworm`
--

CREATE TABLE IF NOT EXISTS `deworm` (
`deworm_no` int(255) NOT NULL,
  `deworm_id` varchar(500) NOT NULL,
  `deworm_date` varchar(500) NOT NULL,
  `deworm_type` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `usage_deworm` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `month_year` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `yearly` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deworm`
--

INSERT INTO `deworm` (`deworm_no`, `deworm_id`, `deworm_date`, `deworm_type`, `cock_id`, `usage_deworm`, `descrip`, `month_year`, `time`, `yearly`) VALUES
(2, 'S-9745', '2018-08-16', 'vacc', 'B-1-D-00012-00005  ', 'asa', 'asasas', '08/2018', '', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `died`
--

CREATE TABLE IF NOT EXISTS `died` (
  `chicken_id` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `date_died` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `cage` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(5) unsigned zerofill NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `died`
--

INSERT INTO `died` (`chicken_id`, `prim_id`, `batch`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `date_died`, `date_transfered`, `no_days`, `cage`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`) VALUES
('4-D-00012-00008', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 00119, '', '', '', ''),
('1-D-00020-00001', '', 'Batched-1-D-00020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 00120, '', '', '', ''),
('2-D-00020-00002', '', 'Batched-1-D-00020', 'Chicks', '', '', '', '', '', '', '', '', '', '', '', '', '', 00121, '', '', '', ''),
('3-D-00020-00003', '', 'Batched-1-D-00020', 'Chicks', 'S-00014', 'racism', '', '', '', '', '', '', '', '', '', '', '', 00122, '', '', '', ''),
('4-D-00020-00004', '', 'Batched-1-D-00020', 'Chicks', 'S-00014', 'racism', 'D-00020', '', '', '', '', '', 'Aug-09-2018', '', 'Aug-09-2018', '', '', 00123, '', '', '', ''),
('6-D-00020-00006', '', 'Batched-1-D-00020', 'Chicks', 'S-00014', 'racism', 'D-00020', '', 'racism', '', '', '', 'Aug-09-2018', '', 'Aug-09-2018', '', '', 00124, '', '', '', ''),
('7-D-00020-00007', '7-D-00020-00007', 'Batched-1-D-00020', 'Chicks', 'S-00014', 'racism', 'D-00020', '', 'racism', '', '', '', 'Aug-09-2018', '', 'Aug-09-2018', '', '', 00125, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE IF NOT EXISTS `eggs` (
`egg_no` int(255) NOT NULL,
  `num_of_egg` varchar(500) NOT NULL,
  `breeder_id` varchar(500) NOT NULL,
  `last_no` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`egg_no`, `num_of_egg`, `breeder_id`, `last_no`) VALUES
(5, '0', '436676', ''),
(6, '0', '436676', ''),
(7, '0', '436676', ''),
(8, '0', '436676', ''),
(9, '0', '436676', ''),
(10, '0', '436676', ''),
(11, '0', '436676', ''),
(12, '0', '436676', ''),
(13, '0', '167044', ''),
(14, '0', '167044', ''),
(15, '0', '167044', ''),
(16, '0', '167044', ''),
(17, '0', '167044', ''),
(18, '0', '167044', ''),
(19, '0', '167044', ''),
(20, '0', '167044', ''),
(21, '0', '167044', ''),
(22, '0', '167044', ''),
(23, '0', '167044', ''),
(24, '0', '167044', ''),
(25, '0', '167044', ''),
(26, '0', '167044', ''),
(27, '0', '167044', ''),
(28, '0', '167044', ''),
(29, '4', '436676', ''),
(30, '0', '167044', ''),
(31, '0', '167044', ''),
(32, '0', '167044', ''),
(33, '0', '167044', ''),
(34, '0', '167044', ''),
(35, '0', '167044', ''),
(36, '0', '167044', ''),
(37, '0', '713613', ''),
(38, '0', '713613', ''),
(39, '0', '713613', ''),
(40, '0', '109118', ''),
(41, '0', '109118', ''),
(42, '0', '621685', ''),
(43, '0', '621685', ''),
(44, '0', '618554', ''),
(45, '0', '618554', ''),
(46, '0', '618554', '');

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE IF NOT EXISTS `father` (
`father_no` int(5) unsigned zerofill NOT NULL,
  `father_id` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL,
  `father_racist` varchar(500) NOT NULL,
  `date_father` varchar(500) NOT NULL,
  `loss` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `signs` varchar(500) NOT NULL,
  `weight` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `cage` varchar(500) NOT NULL,
  `age_father` varchar(500) NOT NULL,
  `father_descrip` varchar(500) NOT NULL,
  `father_hist` varchar(500) NOT NULL,
  `owner_name` varchar(500) NOT NULL,
  `bloodlines` varchar(500) NOT NULL,
  `win_t` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL,
  `date_hatched` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`father_no`, `father_id`, `prim_id`, `father_racist`, `date_father`, `loss`, `image`, `signs`, `weight`, `height`, `cage`, `age_father`, `father_descrip`, `father_hist`, `owner_name`, `bloodlines`, `win_t`, `place`, `date_hatched`) VALUES
(00021, 'S-5993', 'S-5993', 'Yellow bird', '2018-12-05', '', '1000.jpg', 'Sign language', '46 kg', '158 cm', 'right', '5 months', 'baskog mag bulang sigurado daog', '', 'Chris jelo Vega', 'Yellow bird', '1st place', 'Silay ', '2018-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
`feed_no` int(255) NOT NULL,
  `feed_id` varchar(500) NOT NULL,
  `feed_date` varchar(500) NOT NULL,
  `type_feed` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `month_year` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `yearly` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feed_no`, `feed_id`, `feed_date`, `type_feed`, `descrip`, `cock_id`, `month_year`, `time`, `yearly`) VALUES
(3, 'S-8406', '2018-08-11', 'as', 'asasas', 'B-1-D-00012-00005  ', '08/2018', '', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `fighting cock_his`
--

CREATE TABLE IF NOT EXISTS `fighting cock_his` (
  `fighting_cock_id` varchar(500) NOT NULL,
  `cock_categories` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `father_id` varchar(500) NOT NULL,
  `f_num_wins` varchar(500) NOT NULL,
  `f_num_loss` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `siblings` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
  `age_chicks` varchar(500) NOT NULL,
`fighting_cock_no` int(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `handlers`
--

CREATE TABLE IF NOT EXISTS `handlers` (
`handler_id` int(255) NOT NULL,
  `handler_name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_no` varchar(500) NOT NULL,
  `contact_person` varchar(500) NOT NULL,
  `shop` varchar(500) NOT NULL,
  `h_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hatch`
--

CREATE TABLE IF NOT EXISTS `hatch` (
  `hatch_id` varchar(500) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `breeder_id` varchar(500) NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `date_hatch` varchar(500) NOT NULL,
`hatch_no` int(5) unsigned zerofill NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `immune`
--

CREATE TABLE IF NOT EXISTS `immune` (
`immune_no` int(255) NOT NULL,
  `immune_id` varchar(500) NOT NULL,
  `immune_date` varchar(500) NOT NULL,
  `immune_type` varchar(500) NOT NULL,
  `dosage_immune` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `month_year` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `yearly` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immune`
--

INSERT INTO `immune` (`immune_no`, `immune_id`, `immune_date`, `immune_type`, `dosage_immune`, `descrip`, `cock_id`, `month_year`, `time`, `yearly`) VALUES
(2, 'S-2757', '2018-08-17', 'aa', 'aaa', 'asasas', 'B-1-D-00012-00005  ', '08/2018', '', '2018');

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
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE IF NOT EXISTS `mother` (
`mother_num` int(5) unsigned zerofill NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `mother_racist` varchar(500) NOT NULL,
  `cage` varchar(500) NOT NULL,
  `age_mother` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`mother_num`, `mother_id`, `mother_racist`, `cage`, `age_mother`, `date_transfered`, `image`) VALUES
(00023, 'S-4754', 'yellow leg', 'right', '2 months', '2018-12-06', '027-lions-park-don-salvador-benedicto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_cocks`
--

CREATE TABLE IF NOT EXISTS `patient_cocks` (
  `cock_id` varchar(500) NOT NULL,
  `cock_categories` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `f_num_wins` varchar(500) NOT NULL,
  `f_num_loss` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `siblings` varchar(500) NOT NULL,
  `wins` varchar(500) NOT NULL,
  `losses` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`patient_no` int(255) NOT NULL,
  `date_admitted` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_email` varchar(255) NOT NULL,
  `shop_currency` varchar(255) NOT NULL,
  `shop_timezone` varchar(255) NOT NULL,
  `shop_password` varchar(255) NOT NULL,
  `shop_username` varchar(255) NOT NULL,
  `shop_no` varchar(255) NOT NULL,
  `shop_logo` longblob,
  `shop_address` varchar(255) DEFAULT NULL,
  `shop_street` varchar(255) DEFAULT NULL,
  `shop_phone` varchar(255) DEFAULT NULL,
  `owner_name` varchar(500) NOT NULL,
  `owner_address` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_email`, `shop_currency`, `shop_timezone`, `shop_password`, `shop_username`, `shop_no`, `shop_logo`, `shop_address`, `shop_street`, `shop_phone`, `owner_name`, `owner_address`) VALUES
('Cafe-647-621-416', 'Fighting Cock Information System', 'cock@gmail.com', 'PHP', '', 'YWRtaW4=', 'admin', '2440', 0xffd8ffe000104a46494600010100000100010000ffdb0043000a06060a06070a0a0a0a0a0a0a090f1e140f0f0f0f231919141e28232828282328282d3241372d2d3c322828374b373c41464646462d3750554b465541464646ffdb0043011a1a1a272127422424429a6358639a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9a9affc401a20000010501010101010100000000000000000102030405060708090a0b100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9fa0100030101010101010101010000000000000102030405060708090a0b1100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffc0001108012c01c203012200021101031101ffda000c03010002110311003f00f650314b45140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051494b400514514005145140051451400514525002d1451400514514005145140051451400514525002d145140051451400514514005145140051452138a005a28a2800a28a2800a28a2800a28a2800a28a2800a28a2800a28a2800a28a2800a2919828c9e00ea6a0d3f508754b64b8b76f320973b1c74619c647b50058a28a2800a28a2800a28a2800a28a28010d2d1450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145151dc5c476904934ceb1c50a96763d140e49a00f3df8e3e337d13488f49b3622ff59f972a7958fa1fc4f4fcebb4f0c696da2685a7d8b36f6b3b748d8fa900035e35e1649fe2afc4b7d5a442da769d20701870a8b9f2d7ea4f3f9d7bbd001494b55ac752b6d484a6da78e7104863728d9dac3a8fad0058cfb514b4500145145001451450014514500145149400b4552bfd774fd2f3f6bbdb4b6c7fcf59957f99ac0d43e2e785f4d077ead04a47684193f90a00eb28ae434cf8c5e17d5385d4d2dd87f0dc218ff52315d3d8ea36da9c226b5b886e626e8f13861f98a00b14514500145145001451450014514500145145001451450014514500145149400b451450014514500145145001451450014514500145145001451450014514500145145001494b45001451450015e3bf19bc6f3eb77d1f853470f34b2c816e4c67efb768fe83a9aedbe2978d97c13e1e9268d87dbaef31db2ffb58e5be8073f95727f03be1f9b78bfe123d4519aeeef26d43f5553d5fea7f97d6803b7f87fe0d8bc11a0c56285649d8efb8940fbee7fa0e83e95d0515e31f183e2eef32e8da34eeb8256eae10e33feca9fe66802c7c60f8bab1a3e8da25c832bfcb75731b70a3fb8a7d7d4f6a87e10789673a858683a3c01b4fb60d36a376ebccac476f419c01dce3b5793e89a35df88f5182c2ce332dc5cb6147a7a93e8075afa63e1df8634ef0a68ff62b1961b99636ff004a990825e4c739fa761da803a6a28a2800a28a2800a28a2800acbf10f8ab4df0ada9b8d46ea3b74fe15272cfec07535a4ea5d480c5491d47515e4fe28f80f73ad6a6f7675e925490e59aed0b3a8f4c838c7e54014bc43fb46b9664d1f4e50bda6ba3cffdf23fc6b8dd67e32789b5a81e092f9608a418616f184247d7afeb4788f4bf0b7855deda0b8bbd7efa3387656114087d32325bf03f8d71cedbd89002827a0ed400b2cad339791d9dd8e4b31c934dc9a31486800ab7a56b57ba1dc2cf63753dacabfc51391ffebaa945007ac785ff00688bdb4648b59b54bc8ba19e11b241ee4743fa57b07877c53a6f8aad05ce9d751dc27f10070c87d187515f23d68f87bc497fe17be5bcd3ee1ede65e0e390c3d08ee2803ebba2b86f86df162cfc6f10b79c259eaa83e6873f2c9ee9fe1d45773400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005145140051451400514514005437d7b0e9d6b35cdc48b1416e85e4763c281d6a6af18f8d5e30b8d7b5487c29a506999a4517013abb9e89f41d4fbfd28020d1926f8d3e3a37d73130d0b483f2c6c3823f854fbb1e4fb7e15ed88a1142a80028c000702b13c0be148bc1ba05b69f1e1a441ba671fc6e7a9fe9f402b94f8c3f148785ad9b4cd3a40755b85f9dc1ff008f753dff00de3dbd3afa50065fc63f8b474c33e87a4b8170576dcdc29ff579eaabfed7a9edf5af11472ae1b8241ee3343c8d2316625998e492724d7a47c21f8527c532aea7a9a32e970b7eee3231e7b0ff00d947ebd28035be11f802eb53b5fb4ca25d3f4a9c0dcca76cd783d33d563f61d7debd9ed2d21b181208228e1862184445c003e94f8e3589151142a20c2a818007a53a800a28a2800a28a2800a28a28021bb98dbdbcb200a4c685be66c0e0773d857cf7e3af12f897c5f3cc259561d2616c0688b476e7df73005ff00ce057d037f6235087cb696e211fde86528df98ac53f0df41966135cd97dbe61ff2d2ee5698ff00e3c4d007cb92c011f6a48b31ff00601c55fb2f09eb1a826fb6d2f50993fbc96ec47f2afab6d748b3b150b6f696d02af411c4171f90acbf13f8fb45f08a137f7b1a4bda14f9a43ff011d3f1a00f9aa5f03ebb147bdb46d4d57ae7eccdfe159535bc96ce5258de371d55d4822bd47c5ffb41df6a3ba0d161fb04041066930d29fa765fd6bccf51d4eeb57b86b8bcb89ae677eaf2b963fad0056a281450014504506801f0cef6f2ac91bbc724672aca7041f506be8df843f11d7c67a67d96edc7f6b58afef33ff2d57b38febeff005af9beade8fabdd6817f0ded94cd05cdbb65187f23ea3da803ec1a2b98f87be398bc6ba50919560bfb7005cc1fdd27a30ff648e4574f4005145140051451400514514005145140051451400514514005145140051451400514514005145140051551f54805c7d9d1bcd9c758e3f98afd7d3f1ab5400b452039e9cd2d001451450014514500145148cc1412480075268039af895e324f05787a6ba52bf6b9bf776ca7bb9eff0041d6b8ef815e0878e293c49a802f777d9fb397e48527e67fab7f2fad626a1e67c68f882b046ce744d2b866078d80f27eac781edf4af54f16789acbc07a135ccaaa161511dbc0bc176c7caa3fcf028031fe2afc488fc0da688adca49aade0fdca1e760fef9fe9ea7f1af028b4cb9d562b8d5afe5912cfccfdedcbf2d2b9e76ae7ef31fc877aee6e3c18de23375aaf896f1ed6ee5c4f76ff00c3670ff0a63bc8dc617b0e4f26b90f1bf8b13c43716f6f6509b4d234c4f2ece0f41dd9bfda3d4d0060cf323cdb92209183c2673c7b9ef5d049f13bc44d0a4116a735a5bc4a1638ad808d540e8060573556f48d22e75cbd8ed2d23f32694f1938007724f603d6803d5be01f88356d67c437eb7979777902dae58cd2960adb86319e9debdaeb8df85be1fd27c2fa64b65617d697f7c086bd9229031ddd871d00edf8d765400514514005145140094b451400514514019de23d7ec7c35a64d7ba84a22b68c60fab13d147a935f2af88f50b7d4f56bab8b481edada690b471bc85d80f727bd7d5baed859ea5a6cf0ea1025c5a14264465ce40e7f3fa57cabe26bcb3bdd5267d3ed23b2b20d88635249dbea49ea4d0065d29a4a2800a28a2800a33451400569786f4abbd6b56b7b6b2b7fb55c336e119e840e4e7dab36bb6826bbd23c0f6d73a44cab3a5d3fdb6e2d5889635655d8ac70085e1bdb22801973f12aeb4ebed3ae34d856d6f34f8cc73cce8034fc9cab0181b7a606323d6bdb3e1e7c4ab2f1eda1083ecfa840a0cf6ec7ff1e5f51fcabe617732316625998e4927926ace93aadce897d0de59ccf05c5bb6e4753fe723da803ec2a2b96f875e3fb6f1d692b28648efe1005cc00f2a7d47fb27ff00ad5d4d001451450014514d79046b96381400ea4ac3d6b5afecdd492d58902fece568bfdf8c0381f504fe551eafe291a7695a73c63cebdd5b62dbc6064b1201271e8073401d0d15059cc6e230f8c2b0e0fafbfd2a7a0028a28a0028a28a0028a28a0029296b1fc57e268bc3364afb0dc5ddd3f97696ebf7a690f41f4f53d85005dbbd41209520521a79013b73f7547563e82b9fb9bcbcf114f24104b3e9fa45b0067be65dad3679c479e83d5bf2f5ae075df128b312d8c93cb7535e4a0ea335be77dd4bff003c22f445e99feb5797c41a95d5fdb5beb518334c42da68764df381fde90e7e5007af3f4a00ed6c358805b7d9bc3b68974a8d83216db103dc96e4b1fe756d7c3b3df4a25d4afe6b801b22de1fddc23d881cb7e27f0abf6118b0b18d64482d422f2887e54f6cf7fad5a8e459503a32b2b0c860720d000882350aa02a8e8053a8a2800a28a2800a28a2800ae1fe33f89db40f0c49040fb2eb53cc6a47554c7ce7f2e3f1aee2bc4fc70d27c40f1dd9e9909cdb4cde582a7fe592313237e2c08ff808a00e8fe0ae8e9e1af083ea97845b25d8333339c7c8070c7db1d3ff00af5564173e26d62d759bc87373764a683a7ca32235ef7120f6fbdf90f4ae97c630456f05b1ba1e4787f47512cb18c1370c3023880ee33ce3b9c0f5aa96d75ff08969da878abc42556fef1004801ff529fc10afb9ea7dfe9401c1fc6582f74db08ec14345a7c52f9935c4f20f32fe72396007240fc87e02bca2b5bc53e28bcf17eab35fdec859e43844cfcb1af651ed567c17e06d47c717e2deca3db121fdf5c38f9231efea7da8030e0b792ea558a28de59643854452493ec057a47827e046a9ac324fab16d32cdbac7ff2d5c7d3f87f1fcabd67c15f0df4af02db836f189aec8fde5d4a06f3f4fee8f615d3839a00c8f0c783f4bf07da9834db658164c798e4e59c8ee49eb5b1451400514514005145140051451400514514005707aefc0cf0f6b77af7416e6cda56dce96ee02b1fa1071f8577945007897c448fc31f0d6dd2c34ad36d6e75a917265b8fde9841fe220f1bbd063debc8e699ee24691d8b3b9c927bd7b5fc65f87da5e996379afa5bdfdcde5ccbfbc026f910b7f1918270318c67b8af154b792547648ddd2219760b90a3dfd28023a28a2800a28a280015ada2ea10416da85a4e650b7b0e237590a8470c082c3b838c5648a2802e36961628dfed7644c89bb6890e57d8f1d6a9e28a51401a1e1df10de785b5382fec6431cf01fc187753ea0d7d49e12f13daf8bf46b7d46d4fcb30c3a6798d87553f4af9288aee7e1078d6e7c31ab4d688e0c1a946c02374f340250fd49f97f1a00fa4e9ad22a32a92033fdd1eb59175ab6a062b7bbd3eca1d42ce78839513ec979e780460f1ea4565693e36b3d7bc511d88f3adee6da0918c33aec6ce546307b8c374fad00752f70a934717f1ca0903d8753fa8accbcd722b5d6a2d36ec2471dfc3bad9d8e03b03864faf2a47af355a0d5223e2fbe82470ad6d690aa027fbecdfcc815cbfc44d2e6d7bc433dba49284d3f486bb4dadf726573e5b0f43c11f4a00d2d73cb5bfbc7d467661e1a88de5b853867478dd0a93ec41fd2b0f4249bc450f87ae9254fb45c58082d9073e4c6081348dee40082b3b54bbbbf1d68ba7dcb3ada5deab6925a4a48c2c9d5d48fab46c3f115ce7c3ef1c7fc22fa66a2c7fe3faced5a2855f2496675da00c60052589c9e4b5007b959eb897b7d3da5aa89459b6c9181f9508eb93ebed5ab5e6ba3f8fb4cf0ce81a7436d86f3d77cd712f591c805d828f99c9638ed93df02bb1d364d535689679f1a5c6e01484287971eac4e403ec01c7ad006cd150db452c418492f9dcfca4a807f1c54d400514566f88bc4b61e14b1379a8cfe441b8283b4b124f60050069515cbe89f11b4ef13c37e74f76596c10b059d769718cee0b9ce2bcdd7e2778ab589af350d267f32cad177bc53592a44a00c901893cfb1604d007b5dd5d45636f24f3c8b1430a96776380a07535e1da9f8d17c55e20bcd590ccb676c9f66b3c0fde1cf508bff3d1fa0f41927a60f3be34f8bfac78d2c92ce6586d2d4e3cc8e0c8f308f524f4f6aa1a478c65d2631f64842ea52fc8972467c85c018893b31c0cb75a00e834ed36ff0042d67370b1e9b742105e691d505aa1e88ac490adea796ebc1adff0d4edadea175b3c45a5e956d687624f6d6bb649149e7124832493d49249a83c05e126b79e3bcd4af747b6ba90ee6fb64a2e2719eb84276a13ea726b53c4fa2e8be1b686fb49d2f4cd7e45626ee293e67233f7940f9477e828035eded7c17a54a0dfeb70eab711316dd7d7de6e0e7fbb9dbfa575fa5f8a348d4da382cafad26661f2246e33803b0ae57c39e37f096a6d1db4d616da35e30ff8f7bbb558fafa1c60d7710595bc243450c2840e0a201c5004f4514500145145001451450064f8b354fecad2a471208a49c8891cff00093d5bfe0232df8579e7c1a92d759f106b3aba058d4016d651139291281cfe5b727d49a8fe39f89fcb81eda17e623e40c1fe265cb9fc136aff00db4359be0fd127d07c2b6b69699fedef1a9da8ddededff0089fdb8e7f11e9401d9dbdeaf8e75d92fe6754f0df86e426266385b8997ac87fd95edef5e67e3bf14bfc43d4a7bd91a583c39a39db163832b1e807fb6dff8eaf3f5ea7c67a8c5a8b8f08e972fd8342d1220755bb038455fe0f724fe64fb1ae2a08e0f185c7cca74bf097875724f56c13ebfc52b91f87e140107833c0c3c592dc6a57cf1e93a05a36669f3803fd84cf53d3ffd75d0ea3f18a2d06cd746f07d8adb5ac7f2adcc8bba490f4dc17d4fa9c9f615c778bbc6b3f894c56d146b65a4d8fcb6b671f0a83d4fab7a9a93c31e2ab6f0685bab5b38af75623e59ae066383fdd51d5bdcf4edeb401ea7f0f7e1aea9a8b45aaf8aaf2f2e5bef436534ac403d72e3a7fc07f3f4af530315e5df0afc5de30f175f0b8bd8adff00b1803ba56876163d827af3f857a95001451450014514500145145001451583e20f881a1786322fb51823947fcb243bdffef9193401bd45791eb3fb47dac2ecba6e972dc01d249e4080fe03358327ed1dac927669fa6a8ed90e7fad007bd515e2163fb49de291f6bd22da51dcc3314fe60d753a47ed03e1ebf2ab74b7960e7a978f728fc57fc2803d11d03a95601948c104706b9af1c78297c41e19bdd334ff0022c25ba2ad9440aae41070d8f5c56be91e23d375e8f7d85f5b5dae33fbb90123ea3a8ad0a00f9b63f815e2a90b8fb1c09b5b196b85e7dc73d2b0bc59e09bdf064d1437f259fda2519f2a2977b28f53e95f4cf8bf53b8d1bc3da8deda888dc5ac0ce9e6b61723b9af9bfc3de14d73e256ab2cb10927795f3717731f9149f53ebec280399ab0fa6dcc76cb72d04ab6eedb564652158fa03debe84f0ffc1dd0fc236bf6896d86af7910c97b860141f607e503eb9ae6be20fc54bdb11e5594fe1d478f2116126e2441f5dbb050079041a6dd5d02d15bcf228eea848fcea02a54e0f5157f56f10ea3ae3efbebcb8b93d83bfca3e83a0fc2b3f34000ad5f0a7879fc51adda69d1ba446e9f05988181d4e33d4fa0f5acaa746e6360cac5594e4107041a00bbafc325b6a7710c96cf66d0b6d1038c3201d01f7c77ef55acaedec2ea1b888e24b7903a1f70722bbbf06d8dafc56d5a4875dd4ae93534b6096a5557126d1dc9eac3ae3bf3cd707245e5ced1c995d8db5b03918f6a00fa2a5f12cba35ad8ae12db4cbf30cf67704e100660cf0313c2f04ed278eddab17c51158cdaa5a5d5fc8d0c2b7d2c6b7d049b64b6727e5e7d3956e78e4d70fa378ab5ab3b0956cacdb51d01e2092dade30957818278c15f5e3a5735ae6b70ddc62dec16eedac1d84ad6b2cbe62a498c654f5c638e6803d1f56d5ef7c37e36b8fb7dec576f2d84656e047b03a06f959874041c31c71c55ef1478ebec1e239eeeda6568eecd983b3077c1b6491c67dcf15e55a66a86ca7b2bf9a78ee9eca509f65954b168fa91c8c6de48c7bd548ee619249d64f3042eade5e3f80e495e3d3b7e26803bad6f5cdff0eb4f96dced58b50291ed7f9a160ac460f7f95973ee0fad70fa15bc977a8c48966fa83139f21491bf1cf2476f5f6ef490c89359456be74e1dee33e593fbb0080370ff006bb1f6c51a99161a85dc16cee228a46456ce0b283819c7ad0074435c8fc45e21b7bebfba8b48b4d2a344416e992bb7f86351df3939edeb5ee3e1dd42ff0053b08bfb3adbec563c79735e8dd2c83fbdb4631f9d781fc37d19b5af104517f65cbaaaa0c98d65f2d57fda66c1c01e9dcd7a7f89be295c780b5082d12fadf596ff00978b62a3307b798b807f15fad007a7dac17117faeb813e4768c2e2acd53d1756875dd36d6fadce61bb8c3af3d33dbea3a55ca002bc9bc45f142e3578350b5d2b4bbad4a7790c3e43da968e15538cb0c72cdcf1d863be6bd669aa8ab9c00371c9c0eb401f3345ad6b7e07b2f2a54d574f96e496890fee5339ea4632ff004271f5ae526b9924ddb98e246dc5470b9fa0e2bd3be3f78b6db5ad4ed34bb56f34e945bce6038de70368fa639af386b159205991824436ab17fef9eb8fa0e6802b240f246d22a33223052c07009ce07e86b5f44d060d4525927beb58a7b693e6b39a5f29e551d76b90541ed8357a2bf4f0f6993d9cd00171733c459948c46626ce71dc32b839aeb358f04e9fa15fdfde5c01341736c6e2d66575f958ca70ea09c36014ca93c82680332fad5ac2d127d2f419f4930aee5927ba69bce191f7401b49f515e89f0e35b4bb8e25bef0dcda54cac145c79676331e99070573dbb7bd7962f8c74fd5da28ef74cb4b496df715bbb391adb27b1da8ac3771e95d4fc3af8e12da5d2e9faeccd3d93b622bc7e5e3f4dfea3dfa8a00f5cf10f8534bf154021d4ace2ba55fbacc30cbf423914df0df87a2f09d8b5a45737135a23ee884efb8c4b81f283e99c9fc6b86d57e365bea374d69a34b6b6f12fcaf7f799c03fec463e6635b5a55a69d72e935f6a577acb0e4f9d6efe593ea171b7f4a00ed0306190720f434b5cf378ef4e73e5e9c971abc8a0fc96516f0b8ec5b855fc4d72daf7c41f17248b1d9f8663b2590e164bd9d79ff00c7801f9d007a5515e71a768de3ed65925b9f10e9d63131cb25b44b2103d0718fd6bbfd3ede5b5b48629e76ba9a35c34a542973eb81401629934ab046f239da91a92c7d00a7d61f8ef50834cf0bea73dcb94856021b0705b3c6d1ee738fc6803c624d364f885e3cb1d39b2604ccf758edbcf98ff8e0aa7e02ba8f16f8c6d7c2769a96a56ae27d66f656b2b43b7090451e01d9eaa0f7eedec2bccf43f883a8787a4d566b55805d6b0a55e76525e3c927e539e3afe82b0af350b8bff244d2b482da311c60ff000a8e71f9926803a36d49f5cb1b4d134f3f66b451e7ea1712b63cc93f89dcff00757a01fd4d55f1478860b9b6b7d274b1247a469e4952e30d7121eb2b7b9ec3b0ac317322c2d1292a8e41703f8b1d33f4a482092e6548a2479259582a228c9627b014011d767f0bfc27a4f88b55806ada9db40864012d0921e73e99e807e3935b567f08ecbc37a30d5bc5b7b25a29e52ca0c798e7b2e7fbc7d074f5ad0f87bf095b5bd6175abab4934bd22394496b68ec5a470395c93c81dfde803daedede3b48521891238a250a88a30140ec2a4a28a0028a28a0028a28a002b9df197c42d2bc116fbaf26df72e331db47cc8ff008761ee6aef89a3d567b348b4892de0b89a40af3cc32224c1cb01ddba62b9bd17e0de97697af7faa4b36b97d236e325d72bf977fc680387bef12f8dfe28ab269569269fa6b9da4c6db011fed48719fc2ae787bf6746389758d43e6272d15b8cfe6c7fc2bd8e38d61454455444180aa3000a1dc46a598855519249c00280389b7f81fe158136b58cb31fef3ced9fd08af38f8a5e13f07f8503c367717a75461c5b4728758ffde2471f4ce6b7fe24fc7111799a7787a40d272b25e8e83d93d7fdefcbd6bcab46f0e6a5e2aba916d6192e1f3996576c2ae7bb31e0500649a5cd7b2783fc13e10f0bed9b5ad6349d46fc7fcb2f3d4c51fe19f98fb9fcaba9d50780fc590882eaeb47665e1192658d97e84638f6e9401f3cd9decfa7ce93db4d2c13467e592362a47e22bd33c1bf1faff4f74835b4fb75b74f390012afd7b37f3ac7f1d7c37b8f0748d79a738d53459304c8086d9ecf8e9ecc3f4ae626d252eac9ef2c242f1c5febeddcfef22f7ff697dc74ee05007d21ac69d63f13b42b74b7d45ffb366943ca603feb547f013db9c67e95957d378874b99b46f0de836961616a004bc99f2983dc28e49fae4d78d7c37f88373e05d50480b49617040b9833d47f787fb43f5e95ee9e10f88da77880792d728270c446e54aacc3b119e871d57ae6803ccbe200d47c5ad6d616369e20d46f20cfda2ea485a18e5c9ce3cbc6001d89c7e35e65776b2d85c4904f1bc3342c55d1c60a9f435f5c6a56f752012d9dc797344388dc66393d8f71f51d3dfa550d327d33c4d2cad358db0d46c1b65c45344ad244df5c720f504706803e5392268480eac848c80c31c1e86a6d3b4abbd5e710d95b4f7531fe0890b1fd2bdc3e277887c1105d17bfb38b57d5204d8228188c7a066071c7e245797eadf12b53bb89ed6c043a2d831e2dec93cbc8ff0069872680221e039ac240bac5ed968e00cb2cb279928ff80264fe78a7dc47e15d2e17f2a4d5358b9fe1dca2de2fa9e4b1fd2b9a2cd23125892dc924f5a3031d79a00def015ec5a6f892cef64623ec6fe622060bbd8745dc7851ea4f6a9bc77e1ebab1bc6d51a0863b1d5e67785a19bcc4cf5600e0773e95cd6715bbe24f1e6abe2cb4b2b5bf992486c1408c0400938c649ea4d0063c37021c1f2e3660c0fceb9e86b626f145accb70068ba7406ea3dafe503807fbc036769fa62b089cd0c280128a28a005c938e7a74a01c119c91df9a110c8c154166638000e4d2baed623ae28035fc330dadedf491dc6a4fa3c454b24832471ced38ef8e86b23392492492793eb56d231a97d8ade1502e5dbcac60007246d24fae49fc00af4ed23f66fbd9e12da86a705ac847090c664c7d4922801ff0005be28c1a5c506817ea51259716d30e80b1fbaded9efef5edd5e1e3f677d4ad9cb26a1692ede6375dc8cac390718208cfbd7b5da799f678bcd189760de33d0e39a0096b0bc7be23ff844fc337da801ba48536c43fdb6381fa9cd6ed72ff14bc3afe26f08df5ac4fb258d7cd4cf4629ce3f1a00f983ce90ca64dede63124be7927d735a3f65cf867cfc48717bb3a8da3e4cfd7359469ff6893c9f2b7b795bb76ccf19e99a00d9d6b5b8f56b7b3bbdc21d4e04104ca8b8574550aaff005c707e82aadbead7d059fd8d670204903886403839078cf6c8191ed5984d3a495a562ceccecdd4b1c934017b5fbb9aef53b996ea3812e243f3ac481554f1d02f14cd1b44bcf105dfd96c606b8b82a5846a4648032714dd2ad22bcbc81279e2b781a55592473f7549e4e073d05751e1cbed3bc39abd85dd85c3bcfe5ceb36f668d5492ca986552795c1e3bd0074bf0ebe095f36b4d3eb913dbda589caaabe0ccdec473b4773dfb57acf88fc2563af59a473c12ccd6eb88ca5c323fd3703fcebc923f1b5e86659b52d325663c2dc6a5748c3f402ad79baf5c316b27d36643d05b78824ddf86e7fe94015752b3d034326cae97c69a2796d91f3ee881f518ebd7ad50bcf15c16ffe8f69e2ed42ee143f7350b013467df9c9fd2afeb2faee9f087b9b1f16d96dfbd2c1a8fda233f811fd6b9cbed4535984c6fab583cadfc1a869c21907fc0d41fd48a009ac7e25456770eb75a4584bb5b02e74f67b4738ee36f1f9815e83e1af89969a9b016be216b6918e7ecbabc408fa09171fae6bc62efc31a85a47e69b73343ff3d60612a7e6a481f8d66f4a00fac6dbc4be54d1dbea30fd8a49b88a50dba197d36bfafb1c1fad79a7ed19e2260da7e8f1be14833cc01ebd941ffc78d707e1af885a9787ecdf4f9946a5a55e261ad2663803a7ca472a6b3bc4f36a97f7105e6a51cea6e601e434bd4c6bf283eff5efd680318d2bc6d1eddc0aee1919ee3d6ad5ac46056b8781e558f1b7287664f424fa7b77aaf3ccf752192462cee79268023cd74fe10f13e8da1bc6750d022d45e36cf9df686561cfa7dde2b77436f09f83b405bad423b6f10eb379d2d91b2900c7427a67d4f3ed5cac16371e34d5dfecb6f6164243f7159618a31db927fc49a00ed13e2bcbaef8a639edb428b50bb9e4096cb772190c633d11400abee704fbd7babea16f032a4b3c11cadc6c320073e95e4ba57823c3bf0be1b6d5b58d585c5d8460618482b264630a07271eb9c73da9d6de2ebdf102eed32df4cf0868cd9ff8985d6c12b8ff00601ea7f3fad007b067f3a5ae57c11a6e836a1a5d37504d56f645c4d74f75e6caff005e7819ec2ba9a005a28a2800a28a2800a2b3b5ad7edb438e33289659a73b6182142f2487d001fccf02b98d56c3c47e280c6eeed3c31a4c7f3388a40d3baffb4c3851f4a00dbf1178f744f0a82350bf862940ff0054a7739ff808e6bc53e23fc64baf1696b3b01259e97d1813879bfdec741edf9d739e34bdd264bd36fa340ff64b7639ba99cb4b70ddd89ec3d07e35ade12d47c2fe1268ef75159b5cd4000c90c4988623ee5b1b9bf0c0f7a00c98bc05adcda44daa359b5b69f047e6196621030ed8cf273dab003b6ddbb9829ed9e2bbaf889f17ae3c77651d8a5a0b1b48e4deca25dc5f1d01e0702b9cd36c346112bea1a8dd076ff9656b6db88ff813103f9d0063d15d7dfc1e0bd3ad50c126b7aa5ccaa1b66e489633e84e0e4fd33f5aafa56b5e1eb58e49aef46371329fdcdbacac10fbbb139fc00a00e6d269220423ba86182036334d5254e4120fb56b6bfafc3ac055b7d274ed36346c816e8db8fd58939a7785f43bdd56ed4db5ac3708ad86330fddfd3dcfb0e6803d37e087c35b5bbb16d5f55b2b7b91311f64591b7003b92bd3e99fcabd5751d474df0fda06bb96d6d2dd46006c01c7603bfe1581e0496c3c3f670e96cb69677d33926da1ce58ff007b6f240e3a9c551f8bfe277f0fe90de55ca5b4f32111045cccfd8e0ff028eedd7b0a00e67c59f192cbedd037874cff006b3381348e8c239067182bfc5f5c66b17e2078a12f754b9d4a292e607117d9e54b20e82519e923b63f20338ef5c3f87b46d435abf55b1490ca8c19e5e7110271bd8f61ef5dfe8ba4e8b15a49a9ea974f7163a52b886d8b61d994ed2cff00ed3370a0741f43401e59236e627685c9e83b568787bc377be25be8ad6ce1323c8c179381ce4f5fa035761d02e35eb9965587c992701e28235ce0160a3e839e33c9c57b778422d0bc1b6f69a75a4d1df6a71427ce4b702462dc9249e8a0648c9238a00f24d43587f0eab5b9f08e9968d6cdb0cb730bcadb87bb1c1fcb15d20d293e267c3e37565a65b41abe95723cd5b58563130c73dbd0e71edef5d7fc4dd24fc49d145be9cd19bab063346bbf3e690086418e38fef74cf1eb5e29a0f89356f02ea4ef6b24b69711b6d96175e1b1d994d003bc6de167f09ea6b6fe619edae22596da6db8f311875faf515855d87c44f889ff0009d47a6a0b086c96c11b70539cb375c7a2f038ae4280129693bd29e6801294ab05070403df148783566cb506b16dcb15bc87b79b107c7e078a00bda5b8d22ca6bb607ed570bb2d011d3390d27e03207b9cf6a8752b286d2e3ec96eef713060acd8c0cf1f281f5ef552eef25bf99a599f7bb77c0007b003802bd07e0b7c3e975dd71351bc8992c74c2b200c3fd639e547d3a1fcbd68024f845f0ce3f12cfac7f69c72c6963fb94646c324b9c920fa8c7eb5ef96892476d12ccc1e55401d87738e4d43a5e936da340d0dac4228e491a460392ccc72493dce6add001451450015c1fc5ef88369e18d1ee34f57f3352d4616448d4f31ab02379f4f6f5abbf117e25daf81ad4a2a1bad4654263857a28ecce7b0cfe26be71d5f55bbf11ea535e5d334f7576f9381d4f4000a00a382c703927a01560e95783766d6e7e4193fba3c0f5e95e89e03f81daaeacf15eea123e936ea432003f7cdee07f0fd4fe55ed9a568234b96495af750bd92550a4dccdb8003d14600fca803e46aeb3c03f0c751f1e4aed0b25bd940e165b87e9f451dcff8d7b67c416d1fc336b15f5df86edf51b67936dc4b1dba1310fef1c8e6aa787bc5fe13934dfb2e85aada6885e4f33cb740bf31ea087e0fe07b500676bdf09b4ed2bc2b6aa24b281f4c52f73712da193cd241193b4e70339efd0573fa2fc34959926b4b5f0a7886dd21f2fe4b9914b1cfde3c9c357a2dddc78a602b2583687ad5a91c825a173f420b2d606b3fd857f2eef10e8b7be1abd3c0be8b85cffd758f8ffbea80388d7bc2da8e8b9697c096463eed04b2ca3ff1d738ae722d67c3a1d92f3c353c4fd0f917eea57f0606bd58786bc61a522dc787bc4d16b564c32b1dd90d91ecdc83f98ac6d5fc7f1a4bf62f1c784e3dedd2789393ee09fe8d401ce69b7be1d2c874cf12f887c3f328c28b81be31ed943d2b66fb4af14dc5a0926b2d13c6560c389e2556908e3f8970c0fe75977be02f0d789c993c31aec304cdd2cafc9439f40c7ffaff005ae62e6dbc43f0eafcab1bed2a72786472164fa11c30a00db8f4df0fadd6cb97d73c1da8632048a648ff000380c07d6a1f107c39d5e481f50b4bbb6f10da28cb4f6926f703fda5ebfce9f71f1625d7f4efb0f88b4fb7d5e35ff573a9f2a68cfa82063f4ae456f0d85d3c96335cc2a0fc8dbb6be3df068036bc0de248bc27717779f654babdf2825bf9aa0c7112465c8ee460600af5ed07c8bf821b99ed21d52fb525590178b324898c2bb0e883ae074fe75e012cad348ceec59a439627b9ae93c33e39d5b4f9e3b78f559eca09a406491103b1e303eb800003381401f43ffc221a65e5bc22fb4fb3905b82515932133d4f24f3ef5e23f15b41d0ac6613e8971693a6ec4de55def70dfed293d3dc7e35dd6a7f142d343f0dca6d356b8d6afedff0076cb340ab86f575c03b7b719af17f102da3dd25c59288a0bb8c49e50ff00964dfc49f407a7b114019fb49a4c52668a0053e95d9f84fe1e1f13e9cb768753bd9092be4db40004c76691c85fc066b13c3371a2473aaeb56b7d2c25c1f32da50081e8548e47d0835f4778175ef0e5ee9f1da6813daac30ae45bafcaebea4a9e7f1a00e3fc0bf0464d035ab3d5a6bb787ecdf30b50773671d198607e408e2bd568a2800a28a2800a28a2800af2dfda0bc56da6e916fa442fb64d4c969b1d7cb1dbf13fcabd46be6cf8d9ac2eabe37bcf2e45962b444894a9c8e064fea4d00711d4fad04d779a4f81fc47e33d36dd52cacf4bd2ed23e2796311060392c5b1b9bd73d2b9df10e9ba4e91fe8f67a849aa5d291be68e3db00f50b9e5bebc0a00c4a28a5c60d00253cc4426f3c02703deb53c37a0a6ad2cb35d4a6d74db25df753edced1d9547763d00ff000a9bc6dac586adaa28d2ad85ae9b67108add4a61980e4b37a9249a00c31d6b6adbc557b05b8b786e3ec51630cf00c395fee83d87b0c67be6b27c992385672bfbb762aa7d48033fcc547401d67867c729a08995e0925b70372dbab6df3dfb34ae39603fbbd335d1f887527f88da9d85b8b178aeda1325d00e589db9fdda0c7e1ec73e873c0df58cbe1fb8b262ca659214b850573b7772011f4c1ad1f0b6bf7ade26b2bb6b8964ba8d59236279cec60a3f33401b1e28bf9bc0f7a34ab72a26112b6a3e5f01dcfcdb01feea82a3f0cd65dfe9d3ff0062ff00ad1f6349b6c7b464dccddf68feeae48cf4ebdcd50f196a126a9e23d4ee646dcd35cb9c8fae07e95e9bf083c0d7978c75bd4a0127916be5e9f04c842e0823383db19ffbeb3401e5275bbc58a6844ce915cb879141fbe474c9ea71e95d9f83dee7594b6d1ec2d5364ea0bc41f1e7639df3b8e760e7083ffaf581e31f0f5e697797324d6896f6f14be529854988375d818f2d8c1e79a3c23e2e1e0e67ba82d219f5027114d23b6231820fca383d8f3401ee0babe95f0d3449eea795f50b949d6dee5e3401b7edcaa05e8aa07403a0af2ff8e1e2bb4f106be96f691c0c9a7821e754c33b1032a4f7031fa9ac3d43598e7d0b5249eecdddfea1a8aca1d7a9daadb98f7c1dfc7d0d646a9a06a1a424125edacf025e20922775e1c119c83401473bb834da5cd6859e8771716b1dc2c65c5ccde4dba0fbd2bf7c0f4191cfa914019dd2bd0fe0f7c323e30bcfed0be4234ab37c6d23fd7b0fe1fa0eff0095451fc3296f358b2f0edb00d7d1289b54b91cac1bba27e03f32ded5ed32eb1a17c36d26d6c65b98ede3b74db1423e69243fee8e4927f9d0043a8fc25f0cea08dff12ab58242b8578976e3df0383f8d73527c00d0acd25b891f53bd2a095822655ddec38feb5a4ff001812d2593ed7a2ea30c30e4b946491e25e306440729f8d6ce89f137c3be20744b5d4e0f364e91cbf2313e983401c8783be0b42d7a351d66d6086243fe8fa6a1deb18edbdbf88fafbfe55e9d6b670d92324114712b36e2117009f5a9696800a28a2800a86f0ca2de5300433843e5873852d8e33ed9a9a8a00f0ad5be316abe1fd4efedaf3c3da545732902e048ac4c840c649cf2a7b76c563683f14ecb4cd626be9bc33a491708119605dbb47b0391cf7e39af63f881f0dac3c796abe6ffa3df42310dc28e47b1f51fcab2bc0ff000ab48d2b456b2d4ec6daf2fe425ae1a54dddf8d87fbb8f4ef4019ba6eb9e0cf88448f367d1f519542aa09cc241ff0067076935cd78c7c33e2ef87acd7765ac6a57ba6af265495898ff00df524f1efd2baaf117ecf9a3df23be9934fa74d8f9558f991e7e8791f9d65e83e25d73e174f1693e2984dce8f70db22bc2dbd507a67bafb1e450041e0ef8f91dc40b63e24b712238d8d7288086078f9d7fc3f2aade3bf8350df5b7f6bf85192ead651b9ad637ddf8a1ff00d97aff002ac8f8b5f0de3f0cc91eada591268f7ec3014e4444f2003dd4f63f85733e15f1bea9e0fb9f3b4fb968d58fcf0b731bfd47f5eb4014ecb57d4fc3772cb05c5e584f137ccaaec841f422bd03c2ff001fefad57ecdae5b26a76adc348a00931ee3a37e95b106a1e1cf8dd6be4dfac7a4788231b639148cbfd33f787b1e476af38f1a7c3dd53c0d7012f62df6f21c45711f28ffe07d8d007ac47e14d2fc6109d47c17adc9a35cf592081caa67fda407e53fa5646a9e31f13f83c0b4f16e936bade9ae71e718c1cfd0818cfd4035e49a76a775a45d25cd9cf2db4f11cabc6d822bd7bc11f1cadf5387fb37c511c45641b7ed3e5e51fd9d7b7d471401145e11f067c4485cf87eebfb2b532322de6e9d3a6d3d47ba938ae6b539bc53e008db4ed56dfedba596c797749e6c0ff00eeb755fc0822bb0f157c0db4d5221a9785eea38cb8de9179998dbfdc6edfcbe9587e1ef8a7aaf852e9f46f155bcd7b66bf2c893a069507e3f787d7f03401c83e99a4ebe37e9d70ba5dd1eb677927c87fdc97a7e0d8fa9ac7d4f4abbd1ee0c1796f2dbcb8c80e3a8f507b8f715eb1affc2fd0fc6da7cdaaf846e93cf1f335a03853edb7aa1e38cf06bca6eeeeed2216572d295b4660b14b9fdd1ee067a74e9401531ef498a5a280147279279ea696699e77dcec59b0067d80c0a652d0018a7fd9e43119046fe5a9c16dbc03e99a6035a7a4f88a7d26cf50b3548e6b4d52309344e38c8e5587a303401aff000e7e1f7fc2c1b8bc812f56ce5b48c3aee8f70604e3d463b56ddffc0df14683709358186eda36ca496d36c75f7e718fc2a2f8057a6d7c6a91172ab776ee98cfde2391fcabe8ba00e47e1a6a3e23bbd35a2f10d89b79adbe549d986e9beaa3f9f7aeba8a2800a28a2800a28a28020bfb24d46d66b694b88e742adb1ca9c1f423915f387c4cd12d3c21e37f22d22f2ad611148ab924f6cf5ebc835f4b578cfed1be1d39d3f598d4e306de623b775ffd9a803d07e2169977e24f075fdb698c3cfba881400e378c82573ee38af982eec67b0b96b7b882582743831ba90c3f0afa5be11f884788bc1d62ece5e7b35f226cf5caf4fd315d43d9412cc2678616954603940580fad007c8b368d7b6f6c2e65b3ba8adc9c095e260b93db2455435f606afa3da6bd65259df411dcdb4c3e6471fe707debe6ef1b69be1fd0fc55a8da5b4776d6b651ec4459339971ce58f4504fd4e28039897529e5b38ad0b916f0b16541c02c7b9f53daab52d5ed0b4a3acea11dbef11c582d348c70234032cc7e82803675bb3487c09e1d9c0c3cf73739f7c141fd2b9cb484dcdcc310ce6570bf99c575be2fbeb7ff8427c2765130696359e56e7950d26067f235c94139b69925503746c187d45006f7c47be8b50f166a26df02ded9c41163a6d8d420fc38ae7e295a1757462ac841047041ae8bc2de168fc41a2f886f6597ca6d26dd648dd8fca58b743f5008fa9aecfe08fc3bd3bc53a5ea779a944970921fb3c6b9e63e012c3d0f231f8d0050f07d8e9ba65ae9178b65697ba86a2924d25c6a53ec82d823ed3f2ff0011e9ea79aeec7c77d12d15612d757f3853f3416fb55dbb2a8273f4ace83e0c8d3e3bad2679d2e6d2f149b0bc6521ed9ce37295ce0ee0073eddb35c1787bc27736fe26beb7491bfb57c3d209a1842f338471bb1efb7903bd005af1d7c57d43c4c2eecae74eb582dd8ec41345ba48181e486c70d8e0d70d69613df338822794c4bbdb68fbaa3a93edcd7baf8c3c1963e25f10e85656c90c1a75dd8dc491989703790086f7e4a9fc2b93d07c013e87a9341702668a51e4ea504680caa9b81dc9dde36dbd57919c6334019df0abc070f891758b9d44ac3696968ca1e418d8ccb90ff004039a8ee9b51f887652de5d318346f0b5888d4a93b5982e063d598e33e8315eb1e26f08af8c74978b4ab8b7b61793049e64623f7230366d1d4fca300e31f9d65fc52d161f06fc31934fd321db6fe64692b77209c9627d4903f3a00f09d3ac5b51bb86dd5e28cccd8df2305551dc927a015ebfe16b8d0f4fd516ead167d6ce8f108ace2b78f115baf24c9248d85dcc7273dabc82cb4db9d4a7105ac135d4cdd12242c7f4af4ff00077c01bfbc114dacdc0b2b67219ed63399187a13d07eb400be2cf8bf6da78beb7f0e5a35ade5fcbe65d5e170e4b639c6339f4cf41dabcc6f27b9b997ed370d34b24f93e6c8492fef93d6be8ff107c32b093c2b7da5e8f6b67633dd4602c85793820e0b75e7158ba6fc3cbdb8d02d7c3daa695a5adb4624ff004d81f2d1923e56008cefcf5ec47a500713e1cf833af6a5a3db6b3677f15b5d5daef48d9d958a9e8770f51dab9ad67c21acf856f17fb4eca681ae5caa488c36bb63b6383d8e2bd00f84bc7be18b01a169f35bdd69b348544ca06555b820eee54724f1efcd753e35f87b79e25d334ad2a078d134d0ac2fe7999e452060803b93c724d0061f84be255e7842d6df4af105bbcaf2c49258dc46fbbcf466007e201cfe1dabd6ab9bd53e1fd8eb9368cf7a5a54d0d30b1818590e1704f7c0dbd2ba4a0028a28a00292968a002992c4251d76b01f2b0ea3dc53e8a00f235f8bba8f82bc4773a4788a31756f0be16e234c3ed3f75b1d1863f1fad77536a7a3f8b34e115c7d9afb4bd43e549873193fdd3dd1bd33fcf8ae4fe3cf825b59d263d5ed62df75a603e76dead1753f5c1e7e84d78e7863c617fe149dcdb32c96f70313db4a374732fa11fd7ad007b6699a3c9e169a4f0beaaa6f7c37ab6e5b19dff00e5913cf94c7b1ee0fafe9e25e33f0c4de0fd76eb4e972442d989cff1a1fba7f2af70f0ef89ecbc43a4468e5a7d16fb118666cc9652768dcf5c67eebfd2b9bf897a1cde22d1ee56650faef85ffd6363e6b9b73d1c63f33e873eb401e36ae508209041c823b57a7f82be2fadcdbae8de2a54bfd326509e73ae593d37fa8f7ea2bcc08c01d306933401e83f117e1249a0c7fdaba331d4346986f050ee6887be3aafbfe75e7c4118f7aecfe1d7c4fbbf05dc0b79f7dde912f125b939db9eacb9efedd0d5ff0088de05b07b05f12f86e459f48b96fdf449ff002eec7dbb0f6edf4a00e7bc1bf10755f045c87b398bdbb1cc96ce731bfe1d8fb8af5b9ffe11bf8e9a6feedc59eb56f1fca1bfd647ec7fbe99ff0022bc0ea6b3bb9f4fb88ee2de6782784ee4746c1045006ade5a6b1f0fb58921325c69f7b01c6f89c8dc3d411d41aa3aceb573afdd1bbbc7596e5c00f2040a5f1dce3a9f7ad9f13fc41bdf1759430ea76f6b2dd5b70976abb6423d0e3823f0ae628014f1495d1683e05bcd5753b5b59d4dac7796cf711c87043a2a9391f52314cd2bc1577ad5ae9d25b98d9f53ba68235c9e0800e4fa0e7f9d0060e3f2a2bb8f1b7829347f0de8ba9c1118dae23f2aee33c9495320fd33839fa556f8536163abeb72d85fe9cfa8457f0144d84068dbaee0491ce01e9cd007376222b6995eeed65b8800059439438cf50715e91e1af84761e2ad3a6d4344d5e394893f7705d439d83ba483d7d08aed7c2be01875af0958c1a97966f74e69208e7441908aecbb187465e3a7f5e6ba8f09782b4df055bcf0e9d1ba2dd49bdcbb6e3ec33e83b50079b697f08753d3a65d474d61a46b7a79c88df125b4d9079463c804704374af4cf07eb177ade8f1cf7f6a6caf91da39e2ec194e091ec7ad6c51400514514005145140051451400553d6348b5d7ac26b2bd8967b6b85c3a1fe7ec7deae51401e57a1784756f849acbcd64b73ac6817a713c712e658bd1b6f7c7a8ea3b57a84132dc44922eedb20046e520fe47a549450050d7f574d0749bbbf90165b488b6d1d58f61f89c0af3fbaf81563aed85a4f7571716baabaefbb923c1123b1dcd907d09c67d0575be2eb76d5aeb47d3460c535d09ee07fd338be6c7e2db45743d2803e69f8afe16d27c19a9db699a77da249922f32e2599f24e7a00000074cfe354aff00c137fa2783e0d6e767853539844b0e304a60b063f52381f8d755e1cd247c54f897a8de5d61f4fb294bba9fe2453b517e871cfe35ea9f12bc2dff00095f84ef2c625fdfc6a24b7007f12f207e3c8fc68038ef84be08d17c4be02ff4cb28649aeddd24947fac1b58edc1ed8f6af1ad6348974bd62ef4f2ac64b59da3c1ea704d7be7c04b4b8b3f0694b88de2637721557041c700f07dc1aded43e1d68ba8eb2dab4b680dfba152e18e092bb7711d338ef401e77f04fc236fe23f08df25d993ecd71a82991178f3551410a7db27f4af4fd17c2965e1ebdba9ec13ecd15e85f32dd0011865e0301d8e383f41587f08fc277fe0dd0ee6c6fc461fed6cf1947dc0a90a01fd2bb3a0064912ca00600804119f51d2bc6be2c79be07f883a5788e053e55c81e67a315f9587e2a457b45723f143c30be32d027d3e31fe9f02f9f6d91f788e08cfbe71f88a00d87d26daedf4fbcb70b9b473242474dae30c07d41cfd6aedee996fa818da6891de0398df1f321f507b5723f05b5c6d5fc250dbcc196e749736f22b7518e47e871f8576f400c8e3d83aee3dc9ea6a3beb18352b77b7b98639e09461a39172a7f0a9e8a00a5a5e8761a24652c6cedad14f51146173f5f5abb4514005145140094b45140051451400514514005145140051451400d745914ab00cac3041190457837c57f840fa0bbea7a3c524da7b92668579680fa8ff0067f957bdd25007c9be18f14de784ef0cd6ccaf0cc36cf03f31ccbe847f5ea2bd56d3c40be23b48f57d24b49a8e8e84a42ed969a1eb240e3b903953dc7be6baef127c21f0f789a46964b436970f9ccb6c76127d48e87f2aa7a77c1cb1f0db4573a35ddddb6a30104492b6f4931d55d78e0fb631401e03e24b7b5b6d527362e24b29cf996e47656e429f71d0fb8a97c29e14bcf18ea5f62b10a6511b484b1c0000fea703f1ad9f8b3e16ff008463c42c155238ef97cef291b2b1124e541c0c8ee38e87dababfd9e634d3bc41a95b5d44f0df4d6aad10718253209fcf2a6803c9e689e191a391591e3255948c1047515a3a37892f343b7bdb78241f67d4e1314f1372ac0f43f51d8d771f1dfc153693ae3eb1120363a991b8aae047263907eb8ce7eb5e67400e3cd26302bd8be17fc22b5d62ce1d57505866b1d42d08101cee57dc46e07b70323eb55b5ffd9d2fa19a47d26fadee20ea91cf957fa640c1faf1401e4d9ab7a5dcdbc12badd40b3c13aed63fc71ffb4bee3df83d2baad37e0b7896ff00507b492c7ec7e58cb4f337eeff00023393f4ac7f12f80b59f09cacb7f633244a789d06e8cffc087f5a00ea7c20f75fda361a0cac8d23a3c76574872af04bf7f07bf4247a648af52f08f8323f0aea1730c31a88d2e5a5806700c6e31ff7d29e3e98af06f0878863d22f6d4dc332456d70b2c52a8c9888233c7704751ec2be88f87de311e39d1daffecc6dcc733478ce43631c83e9822802d6bde1a8b56494b2abaac12848768daceebb4b1f538e3f135c37c21f8651dae88b7ba941756ba93dc175f98a322a9c018fae4d7a9d1400c8a14814aa285058b1c7a93927f3a7d14500145145001451450014514500145145001451450014514500402cd7ed66e4f2fe5ec5e3a0ce4fe7c7e545f866b39c2e7718db18eb9c54f45007907ecd96fb6df5b958618c91a64f5e031feb5ebf5e69e10b493c13f11b57d364511d8f8801b8b36c614b024951ee32dc7b0af4ba0028a28a0028a28a002b27c43ac5a68f00b99a68924b5f9f6161bcaf46c0ea7835ad5e6de34f836fe2ed76f7529352744920020888ced600f04f65cf3c7a9a00b7e0e73a37c43f13e9795f2af825ec40762786fd4fe95df5780787755d47c35f13f4db6d464dd3c71c76731fef02800e7be091cf7c57bfd001451450014514500145145001451450014514500145145001451450014514500252d14500145145004373670de2859e18a6553902440c01fc6b89f8a9a0dcdbc56fe25d2008f55d0fe66c2ffad8bf894fae3f966bbca6ba0914ab00cac30411c1a00f38d1fc4767f1b7c297ba5ce63b3d482e59172429072aebea33c1ae13e0c6876d1f8f6e6c7518a39a6b38a554565ca975201e0f5e334df1769d71f08fc7b15fd8452476323f9900cfcae87efc7fa91cfb556d23c49147f1622d4ac99dadafafb8e792b27073f9fe9401f46c71ac4a151555578000c014ea28a002993469346c922aba30c32b0c823de9f5cafc53f15bf843c2f3dd42cab733308a1cff0078f7fc0027f0a00f9efc772daddf8af52feceb68aded84e5228e25c038f97207b919fc6be90f87fe1fff008463c2da7581189628834bfefb72dfa9af10f835e0897c55e208efa74274fd324124aedfc6fd557df9e4ff00f5ebe8da0028a28a0028a28a0028a28a0028a4a5a0028a28a0028a28a0028a28a0028a28a0028a28a00aba86956baa793f6985256b690491311ca30e841ec6ad5145001451450014514500701f167e20dd784db4fb1b2858cfa9365a4dc1485040c293c6e39ebdab83f8b573e208acada4d73508eda5bacf91a6da39c201d59cf7f4efcd7aa7c45bdf0f58e94afe2158de1df98571990b0c1f931ce6bc5bc6293f8ceeb53f14b7da1b45b7658e03361598f00228e7804924fd7b9a00c1d21753d535ed2260b2cd732cb1adb16cfcc10803f018ebec6beadaf2ef823e0d2b6e3c457c845cdca14b38cfdd8a2ec57d33cfe1f5af52a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a00e4be2af83d3c5fe19b88d50b5e59832db11d7701cafe238fcabe72d16e64d0b55d3afe48dd5209d65524637056e71f9115f566b33ce968f1daa96ba986d8fd109e371f61d6be78f88f65792ea7a7d845037d9ed07d96c6365c4d2ed232e57afccc4e0f7ed401f47d95e43a8dac3736eeb2c17081e371d1811906a6ac5f03e8f3e81e18d36c2e5834f6b0057c763d71f874fc2b6a800af07f8bfa9dc78e7c6b6ba069e4b8b36f282e7e5321e598fb01c7e06bd5bc77e38b2f0569724f3ca82ee446fb343d4c8d8e38f4ce326b81f801e1937725f7892ec079a691a3809ec4f2edf8e71f9d007a4783bc2f6fe0ed12df4eb7f984433239eb239eadfe7b56c514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500705ad7c21b5f10df5d5ceadaa5fdc5bee2d6d1efda2dc13961939c8fe42b9ef1e5f5beafab691e01d360115a24b1fda1f18c281bb0bff01e49ee6bd62facd350b59ada5cf97711947c1c1c11835cd7867e16e91e15d4bedf6ff699ee84623479e4ddb0631c703b50075104296d12451a848e250aaa3a0038029f45140051451400514514005145140051451400514514005145140051451400514514005145140051451400550d5b5bb6d223669e68a3214b7cefb4051d493d85627c41f88d63e03b20d2627be987ee2d94f27dcfa2d78659d9f887e2eeb92e1de6691b748ec488a11dbe80761d7f5a00ef35df8cfa87887506d33c2d6cf24b7276433327cdeec01e9f8f4033f4ea7e1ffc318fc39236a7a9c8351d7673b9e77258479ecb9efef57bc05f0d74ef025b9308fb45f4ab896e5c727d80ec3dabaaa002b1bc5be30b0f05d88bbbf6936b9da8b1a6e6738ce07ff5eb66bc63e2bcd3f8a3c4d75a769eaa8748b3dd7b73249858e3c6e207a0e4670327a74a00f3df881e329bc6daecb7cc1e3800d96f131fb883fa9ea69de0692e27d405aaead7ba60313b5b98a52bba4032140e872462baef847f09a2f1043fdb1ab217d3c13e441c832e3f88e39c7b77fe7d478bf44b8f1fc561a5e87a64367a3452664be92dc47b71da35386c7be393f8d00767f0fe1d421f0b69c3549dee2f9e2df23bf2dcf201f700815bd55f4db2feceb2b7b6124930b78c26f90e59b031927d6ac5001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145149400b4514500457375159c6649a58e141d59d828fccd5083c59a3dcab347aa69ee13ef62e178fd6b83f1668b1f8dfc6da969ba8cf72d65a569e26b78a370a15c8193d39af0d9103dcb0393f377a00fa4757f8c9e18d1e6313ea1f6875ebf6743201f88e2b8cf10fed1aa600ba469ec2624e5eeba01ec01eb57fe1b7c27f0fea7e1a82f2f2d1eee7bc0771924236f247cb8c62b575df82be183a55cf936525b491a17592399b702074e7231f850078de95a1eb1f14b55be992e22b8d4163f3584d26d320ce30bdb8fc00af40f0ab78bfe17f872492eb49d3df4cb673248865026e481c11907f1af31bb593c357cb3585cdc4134470b22be18647a8a749e32d66e51967d52fee2304131c93b156e7b8cd007d596d234d0c6ee9e5bba82c99ced38e99a92bce7e086bd7baa596a36b753bdc25932344d212586f5248cf700f4af46a0086f6e4da5acb32c524ed121611c632cd8ec3debcbcf85cf87fc19e26d5b5a775d4fc43131718c98f76762703ae48cf6e82bd5aa0bcb18350458ee218e74570c15d72011c83f5140153c3162da6e83a75ab905eded911be5dbc851dbb569514500145145001451450014514500145145001451450014514500145145007ffd9, 'Barangay Elopez, Silay City', '', '09121021960', 'Mondragon', 'Napilas 7, Brgy. E. Lopez, Silay City');

-- --------------------------------------------------------

--
-- Table structure for table `stag_his`
--

CREATE TABLE IF NOT EXISTS `stag_his` (
  `chicken_id` varchar(500) NOT NULL,
  `chicken_categories` varchar(500) NOT NULL,
  `chicken_father_id` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `chicken_mother_id` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `bloodline` varchar(500) NOT NULL,
  `leg` varchar(500) NOT NULL,
  `comb` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `date_transfered` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`chicken_no` int(255) NOT NULL,
  `type` varchar(500) NOT NULL,
  `parents` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `bloodline_result` varchar(500) NOT NULL,
  `prim_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stag_his`
--

INSERT INTO `stag_his` (`chicken_id`, `chicken_categories`, `chicken_father_id`, `father_bloodline`, `chicken_mother_id`, `mother_bloodline`, `bloodline`, `leg`, `comb`, `age`, `day_to_transfer`, `date_transfered`, `no_days`, `handler`, `chicken_no`, `type`, `parents`, `image`, `bloodline_result`, `prim_id`) VALUES
('ST-1-D-00006-00115 ', 'Stag', ' S-00002', 'racism', 'D-00006', '', 'racism', '', '', '', 'Jul-02-2018', 'Jul-02-2018', 'Jul-02-2018', '', 35, '', '', '', '', '1-D-00006-00115 '),
('ST-2-D-00006-00116 ', 'Stag', ' S-00002', 'racism', 'D-00006', '', 'racism', '', '', '2 months', 'Jul-02-2018', 'Jul-02-2018', 'Jul-02-2018', '', 36, '', '', '', '', '2-D-00006-00116 '),
('ST-3-D-00006-00117 ', 'Stag', ' S-00002', 'racism', 'D-00006', '', 'racism', '', '', '', 'Jul-03-2018', 'Jul-02-2018', 'Jul-02-2018', '', 37, '', '', '', '', '3-D-00006-00117 '),
('ST-4-D-00006-00118 ', 'Stag', ' S-00002', 'racism', 'D-00006', '', 'racism', '', '', '2 months', 'Jul-03-2018', 'Jul-02-2018', 'Jul-02-2018', '', 38, '', '', '', '', '4-D-00006-00118 '),
('ST-1-D-00005-00015 ', 'Stag', ' S-00002', 'racism', 'D-00005', '', 'racism', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 39, '', '', '', '', '1-D-00005-00015 '),
('ST-2-D-00005-00016 ', 'Stag', ' S-00002', 'racism', 'D-00005', '', 'racism', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 40, '', '', '', '', '2-D-00005-00016 '),
('ST-4-D-00005-00018 ', 'Stag', ' S-00002', 'racism', 'D-00005', '', 'racism', '', '', '2 months', 'Jul-23-2018', 'Jul-23-2018', 'Jul-23-2018', '', 41, '', '', '21.jpg', '', '4-D-00005-00018 '),
('ST-1-D-00005-00005 ', 'Stag', ' C-2-D-00006-00116  ', 'asasas', 'D-00005', '', 'asasas', '', '', '2 months', 'Jul-30-2018', 'Jul-30-2018', 'Jul-30-2018', '', 42, '', '', '21 r.jpg', '', '1-D-00005-00005 '),
('ST-1-D-00012-00001 ', 'Stag', ' S-00014', 'racism', 'D-00012', '', 'racism', '', '', '2 months', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 43, '', '', '21.jpg', '', '1-D-00012-00001 '),
('ST-2-D-00012-00002 ', 'Stag', ' S-00014', 'racism', 'D-00012', '', 'racism', '', '', '2 months', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 44, '', '', '21.jpg', '', '2-D-00012-00002 '),
('ST-1-D-00012-00005 ', 'Stag', ' S-00014', 'racism', 'D-00012', '', 'racism', '', '', '', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 45, '', '', '21 r.jpg', '', '1-D-00012-00005 '),
('ST-2-D-00012-00006 ', 'Stag', ' S-00014', 'racism', 'D-00012', '', 'racism', '', '', '2 months', 'Aug-03-2018', 'Aug-03-2018', 'Aug-03-2018', '', 46, '', '', '21 r.jpg', '', '2-D-00012-00006 '),
('ST-1-D-00020-00001 ', 'Stag', ' S-00014', 'racism', 'D-00020', '', 'racism', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 47, '', '', '1000.jpg', '', '1-D-00020-00001 '),
('ST-2-D-00020-00002 ', 'Stag', ' S-00014', 'racism', 'D-00020', '', 'racism', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 48, '', '', '1000.jpg', '', '2-D-00020-00002 '),
('ST-3-D-00020-00003 ', 'Stag', ' S-00014', 'racism', 'D-00020', '', 'racism', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 49, '', '', '1000.jpg', '', '3-D-00020-00003 '),
('ST-5-D-00020-00005 ', 'Stag', ' S-00014', 'racism', 'D-00020', '', 'racism', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 50, '', '', '1000.jpg', '', '5-D-00020-00005 '),
('ST-4-D-00020-00004 ', 'Stag', ' S-00014', 'racism', 'D-00020', '', 'racism', '', '', '2 months', 'Dec-01-2018', 'Dec-01-2018', 'Dec-01-2018', '', 51, '', '', '1000.jpg', '', '4-D-00020-00004 ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(255) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `weight` varchar(500) NOT NULL,
  `speed` varchar(500) NOT NULL,
  `performance` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `cock_id`, `weight`, `speed`, `performance`, `date`) VALUES
(6, 'ST-4-D-00020-00004 ', '100', '100', '100', 'Dec-01-2018'),
(7, 'ST-4-D-00020-00004 ', '46', '45', '100', 'Dec-08-2018');

-- --------------------------------------------------------

--
-- Table structure for table `sympmed`
--

CREATE TABLE IF NOT EXISTS `sympmed` (
`sam_no` int(255) NOT NULL,
  `sam_id` varchar(500) NOT NULL,
  `sam_des` varchar(500) NOT NULL,
  `sam_med` varchar(500) NOT NULL,
  `sam_date` varchar(500) NOT NULL,
  `sam_dosage` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE IF NOT EXISTS `timezones` (
`id` int(255) NOT NULL,
  `continet` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timezones`
--

INSERT INTO `timezones` (`id`, `continet`, `timezone`) VALUES
(1, 'Asia', 'Asia/Manila');

-- --------------------------------------------------------

--
-- Table structure for table `unhatched`
--

CREATE TABLE IF NOT EXISTS `unhatched` (
`id` int(255) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `unhatched_no` varchar(500) NOT NULL,
  `mother_id` varchar(500) NOT NULL,
  `breeder_id` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unhatched`
--

INSERT INTO `unhatched` (`id`, `batch`, `unhatched_no`, `mother_id`, `breeder_id`) VALUES
(5, 'Batched-1-D-00005', '1', 'D-00005', '436676'),
(6, 'Batched-2-D-00005', '0', 'D-00005', '436676'),
(7, 'Batched-3-D-00005', '1', 'D-00005', '436676'),
(8, 'Batched-1-D-00005', '0', 'D-00005', '436676'),
(9, 'Batched-2-D-00005', '0', 'D-00005', '436676'),
(10, 'Batched-3-D-00005', '4', 'D-00005', '436676'),
(11, 'Batched-4-D-00005', '1', 'D-00005', '436676'),
(12, 'Batched-5-D-00005', '0', 'D-00005', '436676'),
(13, 'Batched-1-D-00006', '0', 'D-00006', '167044'),
(14, 'Batched-2-D-00006', '0', 'D-00006', '167044'),
(15, 'Batched-3-D-00006', '2', 'D-00006', '167044'),
(16, 'Batched-4-D-00006', '0', 'D-00006', '167044'),
(17, 'Batched-5-D-00006', '1', 'D-00006', '167044'),
(18, 'Batched-6-D-00006', '0', 'D-00006', '167044'),
(19, 'Batched-7-D-00006', '0', 'D-00006', '167044'),
(20, 'Batched-8-D-00006', '3', 'D-00006', '167044'),
(21, 'Batched-9-D-00006', '1', 'D-00006', '167044'),
(22, 'Batched-10-D-00006', '2', 'D-00006', '167044'),
(23, 'Batched-11-D-00006', '0', 'D-00006', '167044'),
(24, 'Batched-12-D-00006', '1', 'D-00006', '167044'),
(25, 'Batched-13-D-00006', '0', 'D-00006', '167044'),
(26, 'Batched-14-D-00006', '0', 'D-00006', '167044'),
(27, 'Batched-15-D-00006', '0', 'D-00006', '167044'),
(28, 'Batched-16-D-00006', '0', 'D-00006', '167044'),
(29, 'Batched-17-D-00006', '0', 'D-00006', '167044'),
(30, 'Batched-18-D-00006', '0', 'D-00006', '167044'),
(31, 'Batched-19-D-00006', '0', 'D-00006', '167044'),
(32, 'Batched-20-D-00006', '1', 'D-00006', '167044'),
(33, 'Batched-1-D-00006', '0', 'D-00006', '167044'),
(34, 'Batched-1-D-00006', '1', 'D-00006', '167044'),
(35, 'Batched-2-D-00006', '1', 'D-00006', '167044'),
(36, 'Batched-1-D-00005', '1', 'D-00005', '713613'),
(37, 'Batched-2-D-00005', '1', 'D-00005', '713613'),
(38, 'Batched-3-D-00005', '1', 'D-00005', '713613'),
(39, 'Batched-1-D-00005', '1', 'D-00005', '109118'),
(40, 'Batched-2-D-00005', '0', 'D-00005', '109118'),
(41, 'Batched-1-D-00012', '0', 'D-00012', '621685'),
(42, 'Batched-2-D-00012', '0', 'D-00012', '621685'),
(43, 'Batched-1-D-00020', '1', 'D-00020', '618554'),
(44, 'Batched-2-D-00020', '-9', 'D-00020', '618554'),
(45, 'Batched-3-D-00020', '0', 'D-00020', '618554'),
(46, 'Batched-4-D-00020', '2', 'D-00020', '618554');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` longblob,
  `shop` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `gender`, `phone`, `password`, `avatar`, `shop`) VALUES
('SU-2440-3955', 'chris', 'chrisjelovega839@gmail.com', 'Male', '9455745719', 'NWI3Yjc1ZTExMWNiYw==', NULL, '2440'),
('SU-2440-2501', 'vega', 'vega@yahoo1234.com', 'Male', '09323232', 'NTllMjQ3OTc3NGIwYg==', NULL, '2440'),
('SU-2914-2980', 'vega', 'c@c', 'Male', '6546546546546', 'NTllMjcxM2FhM2YzZA==', NULL, '2914'),
('SU-2440-9944', 'vega', 'chris_jelo@ayahoo.com1212', 'Male', '32112312312', 'NTlkZWM2ODNiZmRmMQ==', NULL, '2440');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
`log_id` int(250) NOT NULL,
  `staff_id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date_login` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE IF NOT EXISTS `vaccination` (
`vac_no` int(255) NOT NULL,
  `vac_id` varchar(500) NOT NULL,
  `date_vaccinate` varchar(500) NOT NULL,
  `cock_id` varchar(500) NOT NULL,
  `injection` varchar(500) NOT NULL,
  `dosage_vac` varchar(500) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `month_year` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `yearly` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`vac_no`, `vac_id`, `date_vaccinate`, `cock_id`, `injection`, `dosage_vac`, `descrip`, `month_year`, `time`, `yearly`) VALUES
(3, '', '2018-12-14', 'B-1-D-00012-00005  ', '927', 'aa', 'asasas', '08/2018', '', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `win_ban`
--

CREATE TABLE IF NOT EXISTS `win_ban` (
  `cock_id` varchar(500) NOT NULL,
  `cock_categories` varchar(500) NOT NULL,
  `father_bloodline` varchar(500) NOT NULL,
  `f_num_wins` varchar(500) NOT NULL,
  `f_num_loss` varchar(500) NOT NULL,
  `mother_bloodline` varchar(500) NOT NULL,
  `siblings` varchar(500) NOT NULL,
  `wins` varchar(500) NOT NULL,
  `losses` varchar(500) NOT NULL,
  `day_to_transfer` varchar(500) NOT NULL,
  `no_days` varchar(500) NOT NULL,
  `handler` varchar(500) NOT NULL,
`cock_no` int(255) NOT NULL,
  `date_certified` varchar(500) NOT NULL,
  `cage_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battles`
--
ALTER TABLE `battles`
 ADD PRIMARY KEY (`cock_no`);

--
-- Indexes for table `breeders`
--
ALTER TABLE `breeders`
 ADD PRIMARY KEY (`breeder_no`);

--
-- Indexes for table `bull_stag_his`
--
ALTER TABLE `bull_stag_his`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `cfeed`
--
ALTER TABLE `cfeed`
 ADD PRIMARY KEY (`cfeed_no`);

--
-- Indexes for table `chickens`
--
ALTER TABLE `chickens`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `chicks`
--
ALTER TABLE `chicks`
 ADD PRIMARY KEY (`chick_no`);

--
-- Indexes for table `chicks_his`
--
ALTER TABLE `chicks_his`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `cocks`
--
ALTER TABLE `cocks`
 ADD PRIMARY KEY (`cock_no`);

--
-- Indexes for table `cock_categories`
--
ALTER TABLE `cock_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cock_his`
--
ALTER TABLE `cock_his`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `conditioning`
--
ALTER TABLE `conditioning`
 ADD PRIMARY KEY (`con_no`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cprac`
--
ALTER TABLE `cprac`
 ADD PRIMARY KEY (`cprac_no`);

--
-- Indexes for table `cvacc`
--
ALTER TABLE `cvacc`
 ADD PRIMARY KEY (`cvacc_no`);

--
-- Indexes for table `deworm`
--
ALTER TABLE `deworm`
 ADD PRIMARY KEY (`deworm_no`);

--
-- Indexes for table `died`
--
ALTER TABLE `died`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
 ADD PRIMARY KEY (`egg_no`);

--
-- Indexes for table `father`
--
ALTER TABLE `father`
 ADD PRIMARY KEY (`father_no`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
 ADD PRIMARY KEY (`feed_no`);

--
-- Indexes for table `fighting cock_his`
--
ALTER TABLE `fighting cock_his`
 ADD PRIMARY KEY (`fighting_cock_no`);

--
-- Indexes for table `handlers`
--
ALTER TABLE `handlers`
 ADD PRIMARY KEY (`handler_id`);

--
-- Indexes for table `hatch`
--
ALTER TABLE `hatch`
 ADD PRIMARY KEY (`hatch_no`);

--
-- Indexes for table `immune`
--
ALTER TABLE `immune`
 ADD PRIMARY KEY (`immune_no`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
 ADD PRIMARY KEY (`mother_num`);

--
-- Indexes for table `patient_cocks`
--
ALTER TABLE `patient_cocks`
 ADD PRIMARY KEY (`patient_no`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
 ADD UNIQUE KEY `shop_id` (`shop_id`);

--
-- Indexes for table `stag_his`
--
ALTER TABLE `stag_his`
 ADD PRIMARY KEY (`chicken_no`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sympmed`
--
ALTER TABLE `sympmed`
 ADD PRIMARY KEY (`sam_no`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unhatched`
--
ALTER TABLE `unhatched`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
 ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
 ADD PRIMARY KEY (`vac_no`);

--
-- Indexes for table `win_ban`
--
ALTER TABLE `win_ban`
 ADD PRIMARY KEY (`cock_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `battles`
--
ALTER TABLE `battles`
MODIFY `cock_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `breeders`
--
ALTER TABLE `breeders`
MODIFY `breeder_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `bull_stag_his`
--
ALTER TABLE `bull_stag_his`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cfeed`
--
ALTER TABLE `cfeed`
MODIFY `cfeed_no` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chickens`
--
ALTER TABLE `chickens`
MODIFY `chicken_no` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `chicks`
--
ALTER TABLE `chicks`
MODIFY `chick_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chicks_his`
--
ALTER TABLE `chicks_his`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `cocks`
--
ALTER TABLE `cocks`
MODIFY `cock_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cock_categories`
--
ALTER TABLE `cock_categories`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cock_his`
--
ALTER TABLE `cock_his`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `conditioning`
--
ALTER TABLE `conditioning`
MODIFY `con_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `cprac`
--
ALTER TABLE `cprac`
MODIFY `cprac_no` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cvacc`
--
ALTER TABLE `cvacc`
MODIFY `cvacc_no` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deworm`
--
ALTER TABLE `deworm`
MODIFY `deworm_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `died`
--
ALTER TABLE `died`
MODIFY `chicken_no` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `eggs`
--
ALTER TABLE `eggs`
MODIFY `egg_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `father`
--
ALTER TABLE `father`
MODIFY `father_no` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
MODIFY `feed_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fighting cock_his`
--
ALTER TABLE `fighting cock_his`
MODIFY `fighting_cock_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `handlers`
--
ALTER TABLE `handlers`
MODIFY `handler_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hatch`
--
ALTER TABLE `hatch`
MODIFY `hatch_no` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `immune`
--
ALTER TABLE `immune`
MODIFY `immune_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mother`
--
ALTER TABLE `mother`
MODIFY `mother_num` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `patient_cocks`
--
ALTER TABLE `patient_cocks`
MODIFY `patient_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stag_his`
--
ALTER TABLE `stag_his`
MODIFY `chicken_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sympmed`
--
ALTER TABLE `sympmed`
MODIFY `sam_no` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `unhatched`
--
ALTER TABLE `unhatched`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
MODIFY `log_id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
MODIFY `vac_no` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `win_ban`
--
ALTER TABLE `win_ban`
MODIFY `cock_no` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
