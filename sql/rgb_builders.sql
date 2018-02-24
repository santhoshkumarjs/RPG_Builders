-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2018 at 01:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgb_builders`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `cid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(211) DEFAULT NULL,
  `subject` varchar(120) DEFAULT NULL,
  `message` text,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`cid`, `name`, `email`, `subject`, `message`, `added_date`) VALUES
(1, 'Santhosh Kumar', 'santhosh.your@gmail.com', 'my kumar', 'santhos jiar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

DROP TABLE IF EXISTS `enquiry_form`;
CREATE TABLE IF NOT EXISTS `enquiry_form` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(125) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `budget` varchar(120) DEFAULT NULL,
  `message` text,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`query_id`, `name`, `mobile`, `email`, `location`, `budget`, `message`, `added_date`) VALUES
(1, 'Santhosh Kumar', '9994537084', 'santhosh.your@gmail.com', 'asd', 'asd', 'asdfasdf', NULL),
(2, 'santhosh', '9994537084', 'santhosh.your@gmail.com', 'santhosh', 'kumar', '', NULL),
(3, 'SANTHOS', '9994537084', 'santhosh.your@gmail.com', 'LAKJSDFL', 'ASLKDFJ', '', NULL),
(4, 'asdf', '9994537084', 'santhosh.your@gmail.com', 'asdf', 'asd', '', NULL),
(5, 'santho', '9994537084', 'santhosh.your@gmail.com', 'lkasdlfkj', 'aklsjdf', 'asdfasfd', NULL),
(6, 'Santhosh Kumar', '9994537084', 'santhosh.your@gmail.com', 'santhohs', 'lkasjdflj', 'asdfasdf', NULL),
(7, 'Santhosh Kumar', '9994537084', 'santhosh.your@gmail.com', 'lkjlkj', 'lkjlkj', 'lkljk ', NULL),
(8, 'Santhosh Kumar', '9994537084', 'santhosh.your@gmail.com', 'santhosh', 'sadf', 'asdfasdf', NULL),
(9, 'Santhosh Kumar', '9994537084', 'santhosh.your@gmail.com', 'santhosh', 'sadf', 'asdfasdf', NULL),
(10, 'mohan', '9047079148', 'vadivelmohan2@gmail.com', 'DFVD', 'DFDS', 'FCDSV', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` varchar(250) DEFAULT NULL,
  `project_img` varchar(255) DEFAULT NULL,
  `plot_img` varchar(150) DEFAULT NULL,
  `no_available` int(11) DEFAULT NULL,
  `sqrft` varchar(125) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `inner_location_id` int(11) DEFAULT NULL,
  `project_status` enum('going','upcoming','complete') DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`project_id`),
  KEY `project_index` (`project_name`,`project_img`,`no_available`,`sqrft`,`project_status`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_img`, `plot_img`, `no_available`, `sqrft`, `location_id`, `inner_location_id`, `project_status`, `status`, `added_date`) VALUES
(1, 'BLISS Villa', 'bliss_villa.jpg', 'bliss_plot.jpg', 3, '900-1200', 1, 1, 'going', 'active', '2018-02-20 11:23:16'),
(2, 'Delight Villa', 'delight_villa.jpg', 'delight_plot.jpg', 3, '1000-1200', 1, 2, 'going', 'active', '2018-02-20 11:23:16'),
(3, 'LIC Nagar', 'lic_nagar.jpg', NULL, 0, '1000-1200', 1, 3, 'going', 'active', '2018-02-20 11:23:16'),
(4, 'Unmai Nagar', 'unmai_nagar.jpg', NULL, 2, '1200', 1, 4, 'going', 'active', '2018-02-20 11:23:16'),
(5, 'Good Luck Villa', 'good_luck_villa.jpg', 'goodluck_plot.jpg', 17, '1200', 2, 10, 'going', 'active', '2018-02-20 11:23:16'),
(6, 'Kailash Nagar', 'kailash_nagar.jpg', 'kailash_plot.jpg', 3, '1200', 3, 11, 'going', 'active', '2018-02-20 11:23:16'),
(7, 'Sri Nagar', 'sri_nagar.jpg', 'srinagar_plot.jpg', 4, '1138-1170', 4, 12, 'going', 'active', '2018-02-20 11:23:16'),
(8, 'Treasure', 'treasure.jpg', 'treasure_plot.jpg', 3, '900-1200', 4, 13, 'going', 'active', '2018-02-20 11:23:16'),
(9, 'Kalki Nagar', 'kalki_nagar.jpg', 'kalki_plot.jpg', 4, '1300-1480', 5, 14, 'going', 'active', '2018-02-20 11:23:16'),
(10, 'Ram Nagar North Ext', 'ramnagar_north_ext.jpg', NULL, 0, '1300-1480', 1, 5, 'complete', 'active', '2018-02-20 11:23:16'),
(11, 'Anna Nagar', 'anna_nagar.jpg', NULL, 0, '1300-1480', 6, 15, 'complete', 'active', '2018-02-20 11:23:16'),
(12, 'Ram Nagar North', 'ramnagar_north.jpg', NULL, 0, '900-1600', 1, 6, 'upcoming', 'active', '2018-02-20 11:23:16'),
(13, 'Srinivasa Nagar', 'srinivasa_nagar.jpg', 'srinivasa_plot.jpg', 0, '1300-1480', 1, 7, 'upcoming', 'active', '2018-02-20 11:23:16'),
(14, 'Balaji Nagar', 'balaji_nagar.jpg', 'balaji _plot.jpg', 0, '1300-1480', 1, 8, 'upcoming', 'active', '2018-02-20 11:23:16'),
(15, 'Sathasivam Nagar', 'sathasivam_nagar.jpg', 'sathasivam_plot.jpg', 0, '1300-1480', 1, 9, 'upcoming', 'active', '2018-02-20 11:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `project_detail`
--

DROP TABLE IF EXISTS `project_detail`;
CREATE TABLE IF NOT EXISTS `project_detail` (
  `detail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `plot` varchar(110) DEFAULT NULL,
  `plot_sqft` varchar(100) DEFAULT NULL,
  `plot_status` enum('available','sold') DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_detail`
--

INSERT INTO `project_detail` (`detail_id`, `project_id`, `plot`, `plot_sqft`, `plot_status`, `added_date`) VALUES
(1, 1, 'A', '999.22', 'available', '2018-02-23 18:02:25'),
(2, 1, 'B', '1099.87', 'available', '2018-02-23 18:02:25'),
(3, 1, 'C', '1099.87', 'sold', '2018-02-23 18:02:25'),
(4, 1, 'd', '999.22', 'available', '2018-02-23 18:02:25'),
(5, 2, 'A', '1040', 'sold', '2018-02-23 18:02:25'),
(6, 2, 'B', '1040', 'available', '2018-02-23 18:02:25'),
(7, 2, 'C', '1040', 'sold', '2018-02-23 18:02:25'),
(8, 2, 'D', '1040', 'sold', '2018-02-23 18:02:25'),
(9, 2, 'E', '1040', 'sold', '2018-02-23 18:02:25'),
(10, 2, 'F', '1040', 'available', '2018-02-23 18:02:25'),
(11, 2, 'G', '1040', 'available', '2018-02-23 18:02:25'),
(12, 2, 'H', '1040', 'sold', '2018-02-23 18:02:25'),
(13, 4, 'A', '1200', 'sold', '2018-02-23 18:02:25'),
(14, 4, 'B', '1200', 'available', '2018-02-23 18:02:25'),
(15, 4, 'C', '1200', 'sold', '2018-02-23 18:02:25'),
(16, 4, 'D', '1200', 'available', '2018-02-23 18:02:25'),
(17, 5, '1A', '1178', 'available', '2018-02-23 18:02:25'),
(18, 5, '1B', '1188', 'available', '2018-02-23 18:02:25'),
(19, 5, '1C', '1232', 'available', '2018-02-23 18:02:25'),
(20, 5, '1D', '1055', 'available', '2018-02-23 18:02:25'),
(21, 5, '1E', '1074', 'available', '2018-02-23 18:02:25'),
(22, 5, '1F', '1017', 'available', '2018-02-23 18:02:25'),
(23, 5, '2A', '1177', 'available', '2018-02-23 18:02:25'),
(24, 5, '2B', '1179', 'available', '2018-02-23 18:02:25'),
(25, 5, '2C', '1163', 'available', '2018-02-23 18:02:25'),
(26, 5, '2D', '1008', 'available', '2018-02-23 18:02:25'),
(27, 5, '2E', '1027', 'available', '2018-02-23 18:02:25'),
(28, 5, '2F', '1034', 'available', '2018-02-23 18:02:25'),
(29, 5, '3A1', '1510', 'available', '2018-02-23 18:02:25'),
(30, 5, '3A2', '1432', 'available', '2018-02-23 18:02:25'),
(31, 5, '3A3', '1440', 'available', '2018-02-23 18:02:25'),
(32, 5, '3B1', '1570', 'available', '2018-02-23 18:02:25'),
(33, 5, '3B2', '1245', 'available', '2018-02-23 18:02:25'),
(34, 6, 'A', '1137', 'available', '2018-02-23 18:02:25'),
(35, 6, 'B', '1269.1', 'available', '2018-02-23 18:02:25'),
(36, 6, 'C', '1038.3', 'available', '2018-02-23 18:02:25'),
(37, 6, 'D', '1114.5', 'sold', '2018-02-23 18:02:25'),
(38, 7, '56A', '1137', 'available', '2018-02-23 18:02:25'),
(39, 7, '56B', '1269.1', 'available', '2018-02-23 18:02:25'),
(40, 7, '57A', '1038.3', 'available', '2018-02-23 18:02:25'),
(41, 7, '57B', '1114.5', 'available', '2018-02-23 18:02:25'),
(42, 8, '7A', '1018.49', 'sold', '2018-02-23 18:02:25'),
(43, 8, '7B', '1005.36', 'available', '2018-02-23 18:02:25'),
(44, 8, '7C', '993.51', 'available', '2018-02-23 18:02:25'),
(45, 8, '8A', '1058.1', 'available', '2018-02-23 18:02:25'),
(46, 8, '8B', '1044.86', 'sold', '2018-02-23 18:02:25'),
(47, 8, '8C', '1033.34', 'sold', '2018-02-23 18:02:25'),
(48, 8, '9A', '1097.93', 'sold', '2018-02-23 18:02:25'),
(49, 8, '9D', '1084.58', 'sold', '2018-02-23 18:02:25'),
(50, 8, '9C', '1072.74', 'sold', '2018-02-23 18:02:25'),
(51, 9, 'A', '1471', 'available', '2018-02-23 18:02:25'),
(52, 9, 'B', '1298', 'sold', '2018-02-23 18:02:25'),
(53, 9, 'C', '1319', 'available', '2018-02-23 18:02:25'),
(54, 9, 'D', '1339', 'available', '2018-02-23 18:02:25'),
(55, 9, 'E', '1360', 'available', '2018-02-23 18:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_innerlocation`
--

DROP TABLE IF EXISTS `project_innerlocation`;
CREATE TABLE IF NOT EXISTS `project_innerlocation` (
  `inner_location_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_id` int(11) DEFAULT NULL,
  `innerlocation_name` varchar(255) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`inner_location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_innerlocation`
--

INSERT INTO `project_innerlocation` (`inner_location_id`, `location_id`, `innerlocation_name`, `added_date`, `status`) VALUES
(1, 1, 'Kuberan Nagar', '2018-02-20 10:37:51', 'active'),
(2, 1, 'Ram Nagar South', '2018-02-20 10:37:51', 'active'),
(3, 1, 'LIC NAGAR', '2018-02-20 10:37:51', 'active'),
(4, 1, 'Unmai Nagar', '2018-02-20 10:37:51', 'active'),
(5, 1, 'Ram Nagar North Ext', '2018-02-20 10:37:51', 'active'),
(6, 1, 'Ram Nagar North', '2018-02-20 10:37:51', 'active'),
(7, 1, 'Srinivasa Nagar', '2018-02-20 10:37:51', 'active'),
(8, 1, 'Balaji Nagar', '2018-02-20 10:37:51', 'active'),
(9, 1, 'Sathasivam Nagar', '2018-02-20 10:37:51', 'active'),
(10, 2, 'Vengaivasal', '2018-02-20 10:37:51', 'active'),
(11, 3, 'Kailash Nagar', '2018-02-20 10:37:51', 'active'),
(12, 4, 'Sri Nagar', '2018-02-20 10:37:51', 'active'),
(13, 4, 'Thulukanathamman Kil Street', '2018-02-20 10:37:51', 'active'),
(14, 5, 'Kalki Nagar', '2018-02-20 10:37:51', 'active'),
(15, 6, 'Anna Nagar', '2018-02-20 10:37:51', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project_location`
--

DROP TABLE IF EXISTS `project_location`;
CREATE TABLE IF NOT EXISTS `project_location` (
  `location_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) DEFAULT NULL,
  `img_file` varchar(255) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_location`
--

INSERT INTO `project_location` (`location_id`, `location_name`, `img_file`, `added_date`, `status`) VALUES
(1, 'Madipakkam', 'madipakkam.jpg', '2018-02-20 10:18:34', 'active'),
(2, 'Medavakkam', 'medavakkam.jpg', '2018-02-20 10:18:34', 'active'),
(3, 'Perumbakkam', 'perumbakkam.jpg', '2018-02-20 10:18:34', 'active'),
(4, 'Pallikaranai', 'pallikaranai.jpg', '2018-02-20 10:18:34', 'active'),
(5, 'Adambakkam', 'adambakkam.jpg', '2018-02-20 10:18:34', 'active'),
(6, 'Velachery', 'velachery.jpg', '2018-02-20 10:18:34', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
