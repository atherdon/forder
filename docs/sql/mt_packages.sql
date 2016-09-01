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
-- Table structure for table `mt_packages`
--

CREATE TABLE `mt_packages` (
  `package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float(14,4) NOT NULL,
  `promo_price` float(14,4) NOT NULL,
  `expiration` int(14) NOT NULL,
  `expiration_type` varchar(50) NOT NULL DEFAULT 'days',
  `unlimited_post` int(1) NOT NULL DEFAULT '2',
  `post_limit` int(14) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `sell_limit` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_packages`
--

INSERT INTO `mt_packages` (`package_id`, `title`, `description`, `price`, `promo_price`, `expiration`, `expiration_type`, `unlimited_post`, `post_limit`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `sell_limit`) VALUES
(1, 'Premium package', 'premium package', 20.0000, 0.0000, 60, 'days', 2, 0, 0, 'publish', '2016-08-09 00:53:31', '0000-00-00 00:00:00', '::1', 0),
(2, 'Free package', 'Free Package', 0.0000, 0.0000, 31, 'days', 2, 0, 0, 'publish', '2016-08-09 00:54:19', '0000-00-00 00:00:00', '::1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_packages`
--
ALTER TABLE `mt_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_packages`
--
ALTER TABLE `mt_packages`
  MODIFY `package_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
