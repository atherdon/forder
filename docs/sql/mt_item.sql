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
-- Table structure for table `mt_item`
--

CREATE TABLE `mt_item` (
  `item_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `price` text NOT NULL,
  `addon_item` text NOT NULL,
  `cooking_ref` text NOT NULL,
  `discount` varchar(14) NOT NULL,
  `multi_option` text NOT NULL,
  `multi_option_value` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `ingredients` text NOT NULL,
  `spicydish` int(2) NOT NULL DEFAULT '1',
  `two_flavors` int(2) NOT NULL,
  `two_flavors_position` text NOT NULL,
  `require_addon` text NOT NULL,
  `dish` text NOT NULL,
  `item_name_trans` text NOT NULL,
  `item_description_trans` text NOT NULL,
  `non_taxable` int(1) NOT NULL DEFAULT '1',
  `not_available` int(1) NOT NULL DEFAULT '1',
  `gallery_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_item`
--

INSERT INTO `mt_item` (`item_id`, `merchant_id`, `item_name`, `item_description`, `status`, `category`, `price`, `addon_item`, `cooking_ref`, `discount`, `multi_option`, `multi_option_value`, `photo`, `sequence`, `is_featured`, `date_created`, `date_modified`, `ip_address`, `ingredients`, `spicydish`, `two_flavors`, `two_flavors_position`, `require_addon`, `dish`, `item_name_trans`, `item_description_trans`, `non_taxable`, `not_available`, `gallery_photo`) VALUES
(1, 6, 'Mexican Enchiladas', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["1"]', '{"1":"9.4","2":"2.3","3":"5","4":"12.5"}', '{"1":["1","2","3","4"],"2":["5","6","7","8","9","10","11","12"]}', '["1","2","3"]', '', '{"1":["one"],"2":["one"]}', '{"1":[""],"2":[""]}', '1471568081-111.jpg', 0, 0, '2016-08-09 16:30:14', '2016-08-18 21:43:34', '::1', '["1","2","3"]', 0, 0, '{"1":[""],"2":[""]}', '', '', '', '', 1, 1, ''),
(2, 6, 'Fajitas', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["1"]', '{"1":"6.8"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:30:50', '2016-08-09 16:34:34', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(3, 6, 'Royal Fajitas', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Royal Fuisset mentitum deleniti sit ea.</span>', 'publish', '["1"]', '{"1":"5.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:31:16', '2016-08-09 16:34:15', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(4, 6, 'Chicken Enchilada Wrap', '<font color="#555555" face="Helvetica Neue, Helvetica, Arial, sans-serif"><span style="font-size: 13px; line-height: 18.5714px;">Chicken Fuisset mentitum deleniti sit ea.</span></font>', 'publish', '["1"]', '{"1":"5.2"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:31:39', '2016-08-09 16:34:04', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(5, 6, 'Cheese Quesadilla', '<h5 style="box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; margin-top: 10px; margin-bottom: 0px; font-size: 14px; -webkit-font-smoothing: antialiased; background-color: rgb(249, 249, 249);">Cheese Quesadilla.&nbsp;<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span></h5>', 'publish', '["2"]', '{"1":"12"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:36:03', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(6, 6, 'Chorizo & Cheese', 'Chorizo &amp; Cheese.<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["2"]', '{"1":"24.71"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:36:28', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(7, 6, 'Beef Taco', 'Beef.&nbsp;<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["2"]', '{"1":"8.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:36:49', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(8, 6, 'Minced Beef Double Layer', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["2"]', '{"1":"6.3"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:37:10', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(9, 6, 'Piri Piri Chicken', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["2"]', '{"1":"7.4"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:37:24', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(10, 6, 'Burrito Al Pastor', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["2"]', '{"1":"7.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:37:39', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(11, 6, 'Beef Enchilada Wrap', 'Beef&nbsp;<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"11.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:38:10', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(12, 6, 'Chicken Fillet Taco', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"12.4"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:38:27', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(13, 6, 'Tiger Prawn & Chorizo', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"24.5"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:38:46', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(14, 6, 'Fillet Steak & Chorizo', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"15.30"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:39:12', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(15, 6, 'Burrito''s with Rice', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"9.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:39:31', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(16, 6, 'Mexican Burger', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["3"]', '{"1":"8.30"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:39:46', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(17, 6, 'Chocolate Fudge Cake', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["4"]', '{"1":"24.80"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:40:11', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 2, ''),
(18, 6, 'Cheesecake', 'Cheesecake&nbsp;<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["4"]', '{"1":"7.50"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:40:29', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(19, 6, 'Apple Pie & Custard', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea. apple</span>', 'publish', '["4"]', '{"1":"9.70"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:40:51', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(20, 6, 'Profiteroles', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["4"]', '{"1":"12.00"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:41:07', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(21, 6, 'Coke 0.33L', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea. Cola</span>', 'publish', '["5"]', '{"1":"5.7"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:41:30', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(22, 6, 'Diet Coke 0.33L', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea. Diet</span>', 'publish', '["5"]', '{"1":"2.70"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:41:47', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(23, 6, 'Diet Coke 1L', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px; background-color: rgb(249, 249, 249);">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["5"]', '{"1":"5.70"}', '', '', '', '', '', '', 0, 0, '2016-08-09 16:42:02', '0000-00-00 00:00:00', '::1', '', 0, 0, '', '', '', '', '', 1, 1, ''),
(24, 6, 'Fanta Orange 0.33L', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18.5714px;">Fuisset mentitum deleniti sit ea.</span>', 'publish', '["5"]', '{"1":"2.70"}', '', '["2","3"]', '0.56', '{"1":["one"],"2":["one"]}', '{"1":[""],"2":[""]}', '', 0, 0, '2016-08-09 16:42:19', '2016-08-29 05:34:33', '::1', '', 0, 0, '{"1":[""],"2":[""]}', '', '', '', '', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_item`
--
ALTER TABLE `mt_item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_item`
--
ALTER TABLE `mt_item`
  MODIFY `item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
