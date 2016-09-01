-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 08:57 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory`
--

CREATE TABLE `mt_subcategory` (
  `subcat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_description` text NOT NULL,
  `discount` varchar(20) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `subcategory_name_trans` text NOT NULL,
  `subcategory_description_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_subcategory`
--

INSERT INTO `mt_subcategory` (`subcat_id`, `merchant_id`, `subcategory_name`, `subcategory_description`, `discount`, `sequence`, `date_created`, `date_modified`, `ip_address`, `status`, `subcategory_name_trans`, `subcategory_description_trans`) VALUES
(1, 6, 'Desserts & Sides', 'Desserts & Sides description', '', 0, '2016-08-18 21:17:24', '0000-00-00 00:00:00', '::1', 'publish', '', ''),
(2, 6, 'Drinks', 'Drinks description', '', 0, '2016-08-18 21:17:39', '2016-08-18 21:18:13', '::1', 'publish', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
