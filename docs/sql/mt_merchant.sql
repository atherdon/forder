-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 08:56 PM
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
-- Table structure for table `mt_merchant`
--

CREATE TABLE `mt_merchant` (
  `merchant_id` int(14) NOT NULL,
  `restaurant_slug` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_phone` varchar(100) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `street` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `cuisine` text NOT NULL,
  `service` varchar(255) NOT NULL,
  `free_delivery` int(1) NOT NULL DEFAULT '2',
  `delivery_estimation` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `activation_key` varchar(50) NOT NULL,
  `activation_token` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `date_activated` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `package_id` int(14) NOT NULL,
  `package_price` float(14,5) NOT NULL,
  `membership_expired` date NOT NULL,
  `payment_steps` int(1) NOT NULL DEFAULT '1',
  `is_featured` int(1) NOT NULL DEFAULT '1',
  `is_ready` int(1) NOT NULL DEFAULT '1',
  `is_sponsored` int(2) NOT NULL DEFAULT '1',
  `sponsored_expiration` date NOT NULL,
  `lost_password_code` varchar(50) NOT NULL,
  `user_lang` int(14) NOT NULL,
  `membership_purchase_date` datetime NOT NULL,
  `sort_featured` int(14) NOT NULL,
  `is_commission` int(1) NOT NULL DEFAULT '1',
  `percent_commision` float(14,5) NOT NULL,
  `abn` varchar(255) NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `commision_type` varchar(50) NOT NULL DEFAULT 'percentage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_merchant`
--

INSERT INTO `mt_merchant` (`merchant_id`, `restaurant_slug`, `restaurant_name`, `restaurant_phone`, `contact_name`, `contact_phone`, `contact_email`, `country_code`, `street`, `city`, `state`, `post_code`, `cuisine`, `service`, `free_delivery`, `delivery_estimation`, `username`, `password`, `activation_key`, `activation_token`, `status`, `date_created`, `date_modified`, `date_activated`, `last_login`, `ip_address`, `package_id`, `package_price`, `membership_expired`, `payment_steps`, `is_featured`, `is_ready`, `is_sponsored`, `sponsored_expiration`, `lost_password_code`, `user_lang`, `membership_purchase_date`, `sort_featured`, `is_commission`, `percent_commision`, `abn`, `session_token`, `commision_type`) VALUES
(3, '234', '234', '24', '3', '+113', '11234@11.com', 'UA', '2345', '1234', '1234', '14', '["3"]', '1', 2, '', '1234', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 'pending', '2016-08-09 01:05:36', '2016-08-09 01:06:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '2016-08-31', 1, 1, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '', 'fixed'),
(4, 'subway', 'Subway', '12345667', 'subway', '11111111112', 'subway@yahoo.com', 'UA', '370 E 2nd St 370 R', 'Los Angeles', 'California', '90012', '["1","2","6","19"]', '3', 2, '', '4444', 'dbc4d84bfcfe2284ba11beffb853a8c4', '', '', 'active', '2016-08-09 01:08:29', '2016-08-09 16:48:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 1, 20.00000, '2016-12-28', 1, 1, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 2.00000, '', '', 'percentage'),
(5, 'mcdonalds', 'mcdonalds', '12345667', 'mcdo', '1234567890', 'arthur@netweightit.com', 'UA', '970 N WESTERN AVE', 'Los Angeles', 'California', '90029', '["1","3"]', '1', 2, '', 'mcdo', '8542c29a0773a42de1f302903b9e2d74', '', '', 'active', '2016-08-09 01:10:42', '2016-08-09 01:11:38', '0000-00-00 00:00:00', '2016-08-09 12:32:33', '::1', 1, 20.00000, '2016-11-30', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 2, 2.00000, '', '07216521272837ec5754f503cfaaee0929fd48974e7', 'percentage'),
(6, 'taco-mexican', 'Taco Mexican', '+13123456850', 'tacomanager', '+1312345680', 'taco@gmail.com', 'UA', '135 Newtownards Road, Belfast, BT4 1AB', 'Belfast', 'New York', '61000', '["1","9"]', '1', 2, '', 'taco', 'f869ce1c8414a264bb11e14a2c8850ed', '', '', 'active', '2016-08-09 15:51:39', '2016-08-28 23:34:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 1, 20.00000, '2017-08-01', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '81874763656837ec5754f503cfaaee0929fd48974e7', 'fixed'),
(7, 'sushi-gold', 'Sushi Gold', '+13888777999', 'sushi-manager', '+13888777998', 'sushi@gmail.com', 'UA', '5 Meadowbrook St.  Harrisburg, PA 17109', 'Harrisburg', 'PA', '63000', '["10","13"]', '1', 2, '', 'sushi', 'aea6de9cbaee9d2704dcf81f4a194991', '', '', 'expired', '2016-08-09 15:53:33', '2016-08-10 21:43:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '0000-00-00', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '63492707450837ec5754f503cfaaee0929fd48974e7', 'fixed'),
(8, 'naples-pizza', 'Naples Pizza', '+13878787899', 'manager', '+13878787896', 'pizza@gmail.com', 'UA', '354 Grand Lane ', 'Flint', 'MI', '48504', '["8","19"]', '2', 2, '', 'pizza', '7cf2db5ec261a0fa27a502d3196a6f60', '', '', 'expired', '2016-08-09 15:56:21', '2016-08-10 21:44:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '0000-00-00', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '43290161652837ec5754f503cfaaee0929fd48974e7', 'fixed'),
(9, 'dragon-tower', 'Dragon Tower', '+133377999', 'manager', '+1333779999', 'tower@gmail.com', 'UA', '99 Ketch Harbour Rd.', 'Battle Creek', 'MI', '49015', '["15","16"]', '2', 2, '', 'tower', '79835ea3522d3f99a86de822097693ca', '', '', 'expired', '2016-08-09 15:57:58', '2016-08-10 21:44:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '0000-00-00', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '16305092983837ec5754f503cfaaee0929fd48974e7', 'fixed'),
(10, 'japan-food', 'Japan Food', '+13888877999', 'manager1', '3888777899', 'jfood@gmail.com', 'UA', '7341 Longbranch St.', 'Nottingham', 'MD', '21236', '["10","13"]', '3', 2, '', 'jfood', 'c334b16b48d678ef8f6a7f253953aaad', '', '', 'expired', '2016-08-09 15:59:29', '2016-08-10 21:44:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '0000-00-00', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '54949836365837ec5754f503cfaaee0929fd48974e7', 'fixed'),
(11, 'china-food', 'China Food', '+13888777999', 'manager2', '+13888777999', 'chfood@gmail.com', 'UA', '327 Bank St.', 'West Orange', 'NJ', '07052', '["16","20"]', '1', 2, '', 'chfood', '582a0a8264e229417089572d2bdcd716', '', '', 'expired', '2016-08-09 16:01:02', '2016-08-10 21:44:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '::1', 2, 0.00000, '0000-00-00', 1, 2, 2, 1, '0000-00-00', '', 0, '0000-00-00 00:00:00', 0, 1, 0.00000, '', '83416723416837ec5754f503cfaaee0929fd48974e7', 'fixed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  MODIFY `merchant_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
