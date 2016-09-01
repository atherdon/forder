-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 08:55 PM
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
-- Table structure for table `mt_cooking_ref`
--

CREATE TABLE `mt_cooking_ref` (
  `cook_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `cooking_name` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `ip_address` varchar(50) NOT NULL,
  `cooking_name_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_cooking_ref`
--

INSERT INTO `mt_cooking_ref` (`cook_id`, `merchant_id`, `cooking_name`, `sequence`, `date_created`, `date_modified`, `status`, `ip_address`, `cooking_name_trans`) VALUES
(1, 6, 'medium rare', 0, '2016-08-18 21:00:02', '0000-00-00 00:00:00', 'publish', '::1', ''),
(2, 6, 'medium well', 0, '2016-08-18 21:00:13', '0000-00-00 00:00:00', 'publish', '::1', ''),
(3, 6, 'well done', 0, '2016-08-18 21:00:24', '0000-00-00 00:00:00', 'publish', '::1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  ADD PRIMARY KEY (`cook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
