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
-- Table structure for table `mt_size`
--

CREATE TABLE `mt_size` (
  `size_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `size_name_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_size`
--

INSERT INTO `mt_size` (`size_id`, `merchant_id`, `size_name`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `size_name_trans`) VALUES
(1, 6, 'Default', 0, 'publish', '2016-08-09 16:29:48', '0000-00-00 00:00:00', '::1', ''),
(2, 6, 'Small', 0, 'publish', '2016-08-18 20:57:05', '0000-00-00 00:00:00', '::1', ''),
(3, 6, 'Medium', 0, 'publish', '2016-08-18 20:57:14', '0000-00-00 00:00:00', '::1', ''),
(4, 6, 'Large', 0, 'publish', '2016-08-18 20:57:22', '0000-00-00 00:00:00', '::1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_size`
--
ALTER TABLE `mt_size`
  ADD PRIMARY KEY (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_size`
--
ALTER TABLE `mt_size`
  MODIFY `size_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
