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
-- Table structure for table `mt_client`
--

CREATE TABLE `mt_client` (
  `client_id` int(14) NOT NULL,
  `social_strategy` varchar(100) NOT NULL DEFAULT 'web',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `location_name` text NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `lost_password_token` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `token` varchar(255) NOT NULL,
  `mobile_verification_code` int(14) NOT NULL,
  `mobile_verification_date` datetime NOT NULL,
  `custom_field1` varchar(255) NOT NULL,
  `custom_field2` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email_verification_code` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_client`
--

INSERT INTO `mt_client` (`client_id`, `social_strategy`, `first_name`, `last_name`, `email_address`, `password`, `street`, `city`, `state`, `zipcode`, `country_code`, `location_name`, `contact_phone`, `lost_password_token`, `date_created`, `date_modified`, `last_login`, `ip_address`, `status`, `token`, `mobile_verification_code`, `mobile_verification_date`, `custom_field1`, `custom_field2`, `avatar`, `email_verification_code`) VALUES
(1, 'web', 'Merchant1', 'Merchant1', 'test@test.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '', '', '', '', '', '+3800995224198', '', '2016-08-08 11:10:58', '0000-00-00 00:00:00', '2016-08-30 10:56:12', '::1', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', ''),
(2, 'web2', 'Merchant12', 'Merchant12', 'test@test2.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '', '', '', '', '', '+3800995224198', '', '2016-08-08 11:10:58', '0000-00-00 00:00:00', '2016-08-08 11:10:58', '::1', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_client`
--
ALTER TABLE `mt_client`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_client`
--
ALTER TABLE `mt_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
