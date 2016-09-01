-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 01:28 AM
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
-- Table structure for table `mt_category`
--

CREATE TABLE `mt_category` (
  `cat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `date_modified` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `spicydish` int(2) NOT NULL DEFAULT '1',
  `spicydish_notes` text NOT NULL,
  `dish` text NOT NULL,
  `category_name_trans` text NOT NULL,
  `category_description_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_category`
--

INSERT INTO `mt_category` (`cat_id`, `merchant_id`, `category_name`, `category_description`, `photo`, `status`, `sequence`, `date_created`, `date_modified`, `ip_address`, `spicydish`, `spicydish_notes`, `dish`, `category_name_trans`, `category_description_trans`) VALUES
(1, 6, 'STARTERS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Starters', '', 'publish', 0, '2016-08-09T16:32:23+02:00', '2016-08-09T16:33:56+02:00', '::1', 1, '', '', '', ''),
(2, 6, 'MAIN COURSES', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Main', '', 'publish', 0, '2016-08-09T16:32:37+02:00', '', '::1', 1, '', '', '', ''),
(3, 6, 'BEEF', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Beef', '', 'publish', 0, '2016-08-09T16:32:55+02:00', '', '::1', 1, '', '', '', ''),
(4, 6, 'DESSERTS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Desserts', '', 'publish', 0, '2016-08-09T16:33:07+02:00', '', '::1', 1, '', '', '', ''),
(5, 6, 'DRINKS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Drinks', '', 'publish', 0, '2016-08-09T16:33:18+02:00', '', '::1', 1, '', '', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `mt_custom_page`
--

CREATE TABLE `mt_custom_page` (
  `id` int(14) NOT NULL,
  `slug_name` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `icons` varchar(255) NOT NULL,
  `assign_to` varchar(50) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `open_new_tab` int(11) NOT NULL DEFAULT '1',
  `is_custom_link` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_custom_page`
--

INSERT INTO `mt_custom_page` (`id`, `slug_name`, `page_name`, `content`, `seo_title`, `meta_description`, `meta_keywords`, `icons`, `assign_to`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `open_new_tab`, `is_custom_link`) VALUES
(2, 'about-us', 'About us', 'THIS IS PAGE CONTENT, HEY', '', '', '', '', 'bottom', 1, 'publish', '2016-08-08 22:57:52', '2016-08-18 22:00:36', '::1', 1, 1),
(3, 'faq', 'Faq', 'FAQ', '', '', '', '', 'bottom', 3, 'publish', '2016-08-08 23:23:21', '2016-08-18 22:00:36', '::1', 1, 1),
(5, 'login', 'Login', 'Login', '', '', '', '', 'bottom2', 9, 'publish', '2016-08-08 23:23:46', '2016-08-18 22:00:36', '::1', 1, 1),
(6, 'register', 'Register', 'Register', '', '', '', '', 'bottom2', 8, 'publish', '2016-08-08 23:23:55', '2016-08-18 22:00:36', '::1', 1, 1),
(7, 'terms-and-conditions', 'Terms and conditions', 'Terms and conditions', '', '', '', '', 'bottom2', 12, 'publish', '2016-08-08 23:24:06', '2016-08-18 22:00:36', '::1', 1, 1),
(9, '', 'Contact', 'http://localhost:1234/food2/store/contact', '', '', '', '', 'bottom2', 6, 'publish', '2016-08-10 15:58:18', '2016-08-18 22:00:36', '::1', 1, 2),
(10, 'blog', 'Blog', 'Blog content', '', '', '', '', 'bottom', 2, 'publish', '2016-08-18 21:56:48', '2016-08-18 22:00:36', '::1', 1, 1),
(11, 'press', 'Press', 'Press page', '', '', '', '', 'bottom', 4, 'publish', '2016-08-18 21:57:12', '2016-08-18 22:00:36', '::1', 1, 1),
(12, 'jobs', 'Jobs', 'Jobs section', '', '', '', '', 'bottom', 5, 'publish', '2016-08-18 21:57:29', '2016-08-18 22:00:36', '::1', 1, 1),
(13, 'privacy-amp-terms', 'Privacy & Terms', 'Privacy & Terms content', '', '', '', '', 'bottom2', 7, 'publish', '2016-08-18 21:59:10', '2016-08-18 22:00:36', '::1', 1, 1),
(14, 'become-a-driver', 'Become a Driver', 'Become a Driver blog', '', '', '', '', 'bottom2', 10, 'publish', '2016-08-18 21:59:24', '2016-08-18 22:00:36', '::1', 1, 1),
(15, 'become-a-partner-restaurant-signup', 'Become a Partner(Restaurant Signup)', 'Become a Partner(Restaurant Signup) content', '', '', '', '', 'bottom2', 11, 'publish', '2016-08-18 21:59:53', '2016-08-18 22:00:36', '::1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mt_ingredients`
--

CREATE TABLE `mt_ingredients` (
  `ingredients_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `ingredients_name` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `ip_address` varchar(50) NOT NULL,
  `ingredients_name_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_ingredients`
--

INSERT INTO `mt_ingredients` (`ingredients_id`, `merchant_id`, `ingredients_name`, `sequence`, `date_created`, `date_modified`, `status`, `ip_address`, `ingredients_name_trans`) VALUES
(1, 6, 'salt', 0, '2016-08-18 21:15:37', '0000-00-00 00:00:00', 'publish', '::1', ''),
(2, 6, 'union', 0, '2016-08-18 21:15:47', '0000-00-00 00:00:00', 'publish', '::1', ''),
(3, 6, 'garlic', 0, '2016-08-18 21:15:56', '0000-00-00 00:00:00', 'publish', '::1', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `mt_option`
--

CREATE TABLE `mt_option` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_option`
--

INSERT INTO `mt_option` (`id`, `merchant_id`, `option_name`, `option_value`) VALUES
(1, 0, 'website_title', 'FoodOrder'),
(2, 0, 'admin_country_set', 'UA'),
(3, 0, 'website_address', 'Address'),
(4, 0, 'website_contact_phone', 'phone'),
(5, 0, 'website_contact_email', 'arthur@netweightit.com'),
(6, 0, 'admin_currency_set', 'AUD'),
(7, 0, 'social_flag', ''),
(8, 0, 'fb_flag', ''),
(9, 0, 'fb_app_id', ''),
(10, 0, 'fb_app_secret', ''),
(11, 0, 'admin_fb_page', 'https://www.facebook.com/OrderUpPittsburgh/'),
(12, 0, 'admin_twitter_page', 'https://twitter.com/deliverydotcom'),
(13, 0, 'admin_google_page', 'https://plus.google.com/+vimeo'),
(14, 0, 'admin_merchant_share', ''),
(15, 0, 'google_client_id', ''),
(16, 0, 'google_client_secret', ''),
(17, 0, 'google_client_redirect_ulr', 'http://localhost:1234/food2/store/GoogleLogin'),
(18, 0, 'google_login_enabled', ''),
(19, 0, 'default_share_text', ''),
(20, 0, 'admin_intagram_page', 'https://www.instagram.com/historiasdelciervo/'),
(21, 0, 'admin_youtube_url', 'https://www.youtube.com/user/EverydayFoodVideos'),
(22, 3, 'merchant_switch_master_cod', ''),
(23, 3, 'merchant_switch_master_ccr', ''),
(24, 3, 'merchant_switch_master_pyr', ''),
(25, 3, 'merchant_latitude', ''),
(26, 3, 'merchant_longtitude', ''),
(27, 4, 'merchant_switch_master_cod', ''),
(28, 4, 'merchant_switch_master_ccr', ''),
(29, 4, 'merchant_switch_master_pyr', ''),
(30, 4, 'merchant_latitude', '34.0477465'),
(31, 4, 'merchant_longtitude', '-118.23974040000002'),
(32, 5, 'merchant_switch_master_cod', ''),
(33, 5, 'merchant_switch_master_ccr', ''),
(34, 5, 'merchant_switch_master_pyr', ''),
(35, 5, 'merchant_latitude', '34.0880681'),
(36, 5, 'merchant_longtitude', '-118.30896200000001'),
(37, 6, 'merchant_switch_master_cod', ''),
(38, 6, 'merchant_switch_master_ccr', ''),
(39, 6, 'merchant_switch_master_pyr', ''),
(40, 6, 'merchant_latitude', ''),
(41, 6, 'merchant_longtitude', ''),
(42, 7, 'merchant_switch_master_cod', ''),
(43, 7, 'merchant_switch_master_ccr', ''),
(44, 7, 'merchant_switch_master_pyr', ''),
(45, 7, 'merchant_latitude', ''),
(46, 7, 'merchant_longtitude', ''),
(47, 8, 'merchant_switch_master_cod', ''),
(48, 8, 'merchant_switch_master_ccr', ''),
(49, 8, 'merchant_switch_master_pyr', ''),
(50, 8, 'merchant_latitude', ''),
(51, 8, 'merchant_longtitude', ''),
(52, 9, 'merchant_switch_master_cod', ''),
(53, 9, 'merchant_switch_master_ccr', ''),
(54, 9, 'merchant_switch_master_pyr', ''),
(55, 9, 'merchant_latitude', ''),
(56, 9, 'merchant_longtitude', ''),
(57, 10, 'merchant_switch_master_cod', ''),
(58, 10, 'merchant_switch_master_ccr', ''),
(59, 10, 'merchant_switch_master_pyr', ''),
(60, 10, 'merchant_latitude', ''),
(61, 10, 'merchant_longtitude', ''),
(62, 11, 'merchant_switch_master_cod', ''),
(63, 11, 'merchant_switch_master_ccr', ''),
(64, 11, 'merchant_switch_master_pyr', ''),
(65, 11, 'merchant_latitude', ''),
(66, 11, 'merchant_longtitude', ''),
(67, 6, 'merchant_minimum_order', ''),
(68, 6, 'merchant_tax', ''),
(69, 6, 'merchant_delivery_charges', '10'),
(70, 6, 'stores_open_day', '[\\"monday\\",\\"tuesday\\",\\"wednesday\\",\\"thursday\\",\\"friday\\",\\"saturday\\",\\"sunday\\"]'),
(71, 6, 'stores_open_starts', '{\\"monday\\":\\"9:00\\",\\"tuesday\\":\\"9:00\\",\\"wednesday\\":\\"9:00\\",\\"thursday\\":\\"9:00\\",\\"friday\\":\\"\\",\\"saturday\\":\\"9:00\\",\\"sunday\\":\\"9:00\\"}'),
(72, 6, 'stores_open_ends', '{\\"monday\\":\\"19:30\\",\\"tuesday\\":\\"19:30\\",\\"wednesday\\":\\"19:30\\",\\"thursday\\":\\"19:30\\",\\"friday\\":\\"\\",\\"saturday\\":\\"19:30\\",\\"sunday\\":\\"19:30\\"}'),
(73, 6, 'stores_open_custom_text', '{\\"monday\\":\\"test\\",\\"tuesday\\":\\"null\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"zzzz\\",\\"friday\\":\\"zzz\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"zzzz\\"}'),
(74, 6, 'merchant_photo', '1470752713-thumb_restaurant.jpg'),
(75, 6, 'merchant_delivery_estimation', ''),
(76, 6, 'merchant_delivery_miles', ''),
(77, 6, 'merchant_photo_bg', ''),
(78, 6, 'merchant_disabled_cod', ''),
(79, 6, 'merchant_disabled_ccr', ''),
(80, 6, 'merchant_extenal', ''),
(81, 6, 'merchant_enabled_voucher', ''),
(82, 6, 'merchant_distance_type', 'mi'),
(83, 6, 'merchant_timezone', 'America/New_York'),
(84, 6, 'merchant_close_msg', ''),
(85, 6, 'merchant_preorder', ''),
(86, 6, 'merchant_maximum_order', ''),
(87, 6, 'merchant_packaging_charge', ''),
(88, 6, 'merchant_close_msg_holiday', ''),
(89, 6, 'merchant_holiday', '[\\"\\"]'),
(90, 6, 'merchant_activated_menu', ''),
(91, 6, 'spicydish', ''),
(92, 6, 'merchant_required_delivery_time', ''),
(93, 6, 'merchant_close_store', ''),
(94, 6, 'merchant_packaging_increment', ''),
(95, 6, 'merchant_show_time', ''),
(96, 6, 'merchant_enabled_tip', ''),
(97, 6, 'merchant_tip_default', ''),
(98, 6, 'merchant_minimum_order_pickup', ''),
(99, 6, 'merchant_maximum_order_pickup', ''),
(100, 6, 'merchant_disabled_ordering', ''),
(101, 6, 'merchant_tax_charges', ''),
(102, 6, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(103, 6, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(104, 6, 'food_option_not_available', ''),
(105, 6, 'order_verification', ''),
(106, 6, 'order_sms_code_waiting', ''),
(107, 6, 'disabled_food_gallery', ''),
(108, 7, 'merchant_minimum_order', ''),
(109, 7, 'merchant_tax', ''),
(110, 7, 'merchant_delivery_charges', ''),
(111, 7, 'stores_open_day', '[\\"thursday\\",\\"friday\\",\\"saturday\\"]'),
(112, 7, 'stores_open_starts', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"17:45\\",\\"friday\\":\\"17:45\\",\\"saturday\\":\\"17:45\\",\\"sunday\\":\\"\\"}'),
(113, 7, 'stores_open_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"20:45\\",\\"saturday\\":\\"20:45\\",\\"sunday\\":\\"\\"}'),
(114, 7, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(115, 7, 'merchant_photo', '1470753835-thumb_restaurant_4.jpg'),
(116, 7, 'merchant_delivery_estimation', ''),
(117, 7, 'merchant_delivery_miles', ''),
(118, 7, 'merchant_photo_bg', ''),
(119, 7, 'merchant_disabled_cod', ''),
(120, 7, 'merchant_disabled_ccr', ''),
(121, 7, 'merchant_extenal', ''),
(122, 7, 'merchant_enabled_voucher', ''),
(123, 7, 'merchant_distance_type', 'mi'),
(124, 7, 'merchant_timezone', ''),
(125, 7, 'merchant_close_msg', ''),
(126, 7, 'merchant_preorder', ''),
(127, 7, 'merchant_maximum_order', ''),
(128, 7, 'merchant_packaging_charge', ''),
(129, 7, 'merchant_close_msg_holiday', ''),
(130, 7, 'merchant_holiday', '[\\"\\"]'),
(131, 7, 'merchant_activated_menu', ''),
(132, 7, 'spicydish', ''),
(133, 7, 'merchant_required_delivery_time', ''),
(134, 7, 'merchant_close_store', ''),
(135, 7, 'merchant_packaging_increment', ''),
(136, 7, 'merchant_show_time', ''),
(137, 7, 'merchant_enabled_tip', ''),
(138, 7, 'merchant_tip_default', ''),
(139, 7, 'merchant_minimum_order_pickup', ''),
(140, 7, 'merchant_maximum_order_pickup', ''),
(141, 7, 'merchant_disabled_ordering', ''),
(142, 7, 'merchant_tax_charges', ''),
(143, 7, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(144, 7, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(145, 7, 'food_option_not_available', ''),
(146, 7, 'order_verification', ''),
(147, 7, 'order_sms_code_waiting', ''),
(148, 7, 'disabled_food_gallery', ''),
(149, 8, 'merchant_minimum_order', ''),
(150, 8, 'merchant_tax', ''),
(151, 8, 'merchant_delivery_charges', ''),
(152, 8, 'stores_open_day', ''),
(153, 8, 'stores_open_starts', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(154, 8, 'stores_open_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(155, 8, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(156, 8, 'merchant_photo', '1470753923-thumb_restaurant_2.jpg'),
(157, 8, 'merchant_delivery_estimation', ''),
(158, 8, 'merchant_delivery_miles', ''),
(159, 8, 'merchant_photo_bg', ''),
(160, 8, 'merchant_disabled_cod', ''),
(161, 8, 'merchant_disabled_ccr', ''),
(162, 8, 'merchant_extenal', ''),
(163, 8, 'merchant_enabled_voucher', ''),
(164, 8, 'merchant_distance_type', 'mi'),
(165, 8, 'merchant_timezone', ''),
(166, 8, 'merchant_close_msg', ''),
(167, 8, 'merchant_preorder', ''),
(168, 8, 'merchant_maximum_order', ''),
(169, 8, 'merchant_packaging_charge', ''),
(170, 8, 'merchant_close_msg_holiday', ''),
(171, 8, 'merchant_holiday', '[\\"\\"]'),
(172, 8, 'merchant_activated_menu', ''),
(173, 8, 'spicydish', ''),
(174, 8, 'merchant_required_delivery_time', ''),
(175, 8, 'merchant_close_store', ''),
(176, 8, 'merchant_packaging_increment', ''),
(177, 8, 'merchant_show_time', ''),
(178, 8, 'merchant_enabled_tip', ''),
(179, 8, 'merchant_tip_default', ''),
(180, 8, 'merchant_minimum_order_pickup', ''),
(181, 8, 'merchant_maximum_order_pickup', ''),
(182, 8, 'merchant_disabled_ordering', ''),
(183, 8, 'merchant_tax_charges', ''),
(184, 8, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(185, 8, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(186, 8, 'food_option_not_available', ''),
(187, 8, 'order_verification', ''),
(188, 8, 'order_sms_code_waiting', ''),
(189, 8, 'disabled_food_gallery', ''),
(190, 9, 'merchant_minimum_order', ''),
(191, 9, 'merchant_tax', ''),
(192, 9, 'merchant_delivery_charges', ''),
(193, 9, 'stores_open_day', ''),
(194, 9, 'stores_open_starts', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(195, 9, 'stores_open_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(196, 9, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(197, 9, 'merchant_photo', '1470753944-thumb_restaurant_5.jpg'),
(198, 9, 'merchant_delivery_estimation', ''),
(199, 9, 'merchant_delivery_miles', ''),
(200, 9, 'merchant_photo_bg', ''),
(201, 9, 'merchant_disabled_cod', ''),
(202, 9, 'merchant_disabled_ccr', ''),
(203, 9, 'merchant_extenal', ''),
(204, 9, 'merchant_enabled_voucher', ''),
(205, 9, 'merchant_distance_type', 'mi'),
(206, 9, 'merchant_timezone', ''),
(207, 9, 'merchant_close_msg', ''),
(208, 9, 'merchant_preorder', ''),
(209, 9, 'merchant_maximum_order', ''),
(210, 9, 'merchant_packaging_charge', ''),
(211, 9, 'merchant_close_msg_holiday', ''),
(212, 9, 'merchant_holiday', '[\\"\\"]'),
(213, 9, 'merchant_activated_menu', ''),
(214, 9, 'spicydish', ''),
(215, 9, 'merchant_required_delivery_time', ''),
(216, 9, 'merchant_close_store', ''),
(217, 9, 'merchant_packaging_increment', ''),
(218, 9, 'merchant_show_time', ''),
(219, 9, 'merchant_enabled_tip', ''),
(220, 9, 'merchant_tip_default', ''),
(221, 9, 'merchant_minimum_order_pickup', ''),
(222, 9, 'merchant_maximum_order_pickup', ''),
(223, 9, 'merchant_disabled_ordering', ''),
(224, 9, 'merchant_tax_charges', ''),
(225, 9, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(226, 9, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(227, 9, 'food_option_not_available', ''),
(228, 9, 'order_verification', ''),
(229, 9, 'order_sms_code_waiting', ''),
(230, 9, 'disabled_food_gallery', ''),
(231, 10, 'merchant_minimum_order', ''),
(232, 10, 'merchant_tax', ''),
(233, 10, 'merchant_delivery_charges', ''),
(234, 10, 'stores_open_day', ''),
(235, 10, 'stores_open_starts', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(236, 10, 'stores_open_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(237, 10, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(238, 10, 'merchant_photo', '1470753963-thumb_restaurant_3.jpg'),
(239, 10, 'merchant_delivery_estimation', ''),
(240, 10, 'merchant_delivery_miles', ''),
(241, 10, 'merchant_photo_bg', ''),
(242, 10, 'merchant_disabled_cod', ''),
(243, 10, 'merchant_disabled_ccr', ''),
(244, 10, 'merchant_extenal', ''),
(245, 10, 'merchant_enabled_voucher', ''),
(246, 10, 'merchant_distance_type', 'mi'),
(247, 10, 'merchant_timezone', ''),
(248, 10, 'merchant_close_msg', ''),
(249, 10, 'merchant_preorder', ''),
(250, 10, 'merchant_maximum_order', ''),
(251, 10, 'merchant_packaging_charge', ''),
(252, 10, 'merchant_close_msg_holiday', ''),
(253, 10, 'merchant_holiday', '[\\"\\"]'),
(254, 10, 'merchant_activated_menu', ''),
(255, 10, 'spicydish', ''),
(256, 10, 'merchant_required_delivery_time', ''),
(257, 10, 'merchant_close_store', ''),
(258, 10, 'merchant_packaging_increment', ''),
(259, 10, 'merchant_show_time', ''),
(260, 10, 'merchant_enabled_tip', ''),
(261, 10, 'merchant_tip_default', ''),
(262, 10, 'merchant_minimum_order_pickup', ''),
(263, 10, 'merchant_maximum_order_pickup', ''),
(264, 10, 'merchant_disabled_ordering', ''),
(265, 10, 'merchant_tax_charges', ''),
(266, 10, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(267, 10, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(268, 10, 'food_option_not_available', ''),
(269, 10, 'order_verification', ''),
(270, 10, 'order_sms_code_waiting', ''),
(271, 10, 'disabled_food_gallery', ''),
(272, 11, 'merchant_minimum_order', ''),
(273, 11, 'merchant_tax', ''),
(274, 11, 'merchant_delivery_charges', ''),
(275, 11, 'stores_open_day', ''),
(276, 11, 'stores_open_starts', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(277, 11, 'stores_open_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(278, 11, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(279, 11, 'merchant_photo', '1470753979-thumb_restaurant_6.jpg'),
(280, 11, 'merchant_delivery_estimation', ''),
(281, 11, 'merchant_delivery_miles', ''),
(282, 11, 'merchant_photo_bg', ''),
(283, 11, 'merchant_disabled_cod', ''),
(284, 11, 'merchant_disabled_ccr', ''),
(285, 11, 'merchant_extenal', ''),
(286, 11, 'merchant_enabled_voucher', ''),
(287, 11, 'merchant_distance_type', 'mi'),
(288, 11, 'merchant_timezone', ''),
(289, 11, 'merchant_close_msg', ''),
(290, 11, 'merchant_preorder', ''),
(291, 11, 'merchant_maximum_order', ''),
(292, 11, 'merchant_packaging_charge', ''),
(293, 11, 'merchant_close_msg_holiday', ''),
(294, 11, 'merchant_holiday', '[\\"\\"]'),
(295, 11, 'merchant_activated_menu', ''),
(296, 11, 'spicydish', ''),
(297, 11, 'merchant_required_delivery_time', ''),
(298, 11, 'merchant_close_store', ''),
(299, 11, 'merchant_packaging_increment', ''),
(300, 11, 'merchant_show_time', ''),
(301, 11, 'merchant_enabled_tip', ''),
(302, 11, 'merchant_tip_default', ''),
(303, 11, 'merchant_minimum_order_pickup', ''),
(304, 11, 'merchant_maximum_order_pickup', ''),
(305, 11, 'merchant_disabled_ordering', ''),
(306, 11, 'merchant_tax_charges', ''),
(307, 11, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(308, 11, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(309, 11, 'food_option_not_available', ''),
(310, 11, 'order_verification', ''),
(311, 11, 'order_sms_code_waiting', ''),
(312, 11, 'disabled_food_gallery', ''),
(313, 0, 'contact_content', 'contact content'),
(314, 0, 'contact_map', ''),
(315, 0, 'map_latitude', ''),
(316, 0, 'map_longitude', ''),
(317, 0, 'contact_email_receiver', 'arthur@netweightit.com'),
(318, 0, 'contact_field', '[\\"name\\",\\"email\\",\\"message\\"]'),
(319, 0, 'website_disbaled_auto_cart', ''),
(320, 0, 'website_enabled_mobile_verification', ''),
(321, 0, 'website_date_picker_format', 'yy-mm-dd'),
(322, 0, 'website_time_picker_format', '24'),
(323, 0, 'website_date_format', ''),
(324, 0, 'website_time_format', ''),
(325, 0, 'merchant_sigup_status', 'pending'),
(326, 0, 'merchant_email_verification', ''),
(327, 0, 'merchant_payment_enabled', ''),
(328, 0, 'admin_enabled_paypal', ''),
(329, 0, 'admin_enabled_card', ''),
(330, 0, 'home_search_text', ''),
(331, 0, 'home_search_subtext', ''),
(332, 0, 'home_search_mode', ''),
(333, 0, 'website_logo', ''),
(334, 0, 'admin_decimal_place', '0'),
(335, 0, 'admin_use_separators', ''),
(336, 0, 'google_auto_address', ''),
(337, 0, 'home_search_radius', ''),
(338, 0, 'home_search_unit_type', 'mi'),
(339, 0, 'google_default_country', ''),
(340, 0, 'enabled_advance_search', ''),
(341, 0, 'disabled_share_location', ''),
(342, 0, 'enabled_search_map', ''),
(343, 0, 'admin_currency_position', 'left'),
(344, 0, 'merchant_default_country', 'AF'),
(345, 0, 'merchant_specific_country', ''),
(346, 0, 'map_marker', ''),
(347, 0, 'global_admin_sender_email', ''),
(348, 0, 'merchant_disabled_registration', ''),
(349, 0, 'disabled_subscription', ''),
(350, 0, 'disabled_featured_merchant', ''),
(351, 0, 'merchant_days_can_edit_status', ''),
(352, 0, 'disabled_website_ordering', ''),
(353, 0, 'admin_activated_menu', ''),
(354, 0, 'website_hide_foodprice', ''),
(355, 0, 'disabled_cc_management', ''),
(356, 0, 'merchant_reg_abn', ''),
(357, 0, 'website_timezone', ''),
(358, 0, 'website_admin_mutiple_login', ''),
(359, 0, 'website_merchant_mutiple_login', ''),
(360, 0, 'website_disabled_guest_checkout', ''),
(361, 0, 'website_reviews_actual_purchase', ''),
(362, 0, 'website_terms_merchant', ''),
(363, 0, 'website_terms_merchant_url', ''),
(364, 0, 'website_terms_customer', ''),
(365, 0, 'website_terms_customer_url', ''),
(366, 0, 'admin_thousand_separator', ''),
(367, 0, 'admin_decimal_separator', ''),
(368, 0, 'website_disabled_login_popup', ''),
(369, 0, 'merchant_can_edit_reviews', ''),
(370, 0, 'website_enabled_rcpt', ''),
(371, 0, 'website_receipt_logo', ''),
(372, 0, 'disabled_cart_sticky', ''),
(373, 0, 'search_result_bydistance', ''),
(374, 0, 'google_geo_api_key', 'AIzaSyDvShLYzT1pc07qqp8OpXFH7WrAsThAE2I'),
(375, 0, 'website_enabled_map_address', ''),
(376, 0, 'client_custom_field_name1', ''),
(377, 0, 'client_custom_field_name2', ''),
(378, 0, 'merchant_days_can_edit_status_basedon', '1'),
(379, 0, 'merchant_status_disabled', ''),
(380, 0, 'view_map_disabled', ''),
(381, 0, 'view_map_default_zoom', ''),
(382, 0, 'view_map_default_zoom_s', ''),
(383, 0, 'receipt_default_subject', ''),
(384, 0, 'merchant_tbl_book_disabled', ''),
(385, 0, 'merchant_changeorder_sms', ''),
(386, 0, 'customer_ask_address', ''),
(387, 0, 'captcha_site_key', ''),
(388, 0, 'captcha_secret', ''),
(389, 0, 'captcha_lang', ''),
(390, 0, 'captcha_customer_signup', ''),
(391, 0, 'captcha_merchant_signup', ''),
(392, 0, 'captcha_customer_login', ''),
(393, 0, 'captcha_merchant_login', ''),
(394, 0, 'captcha_admin_login', ''),
(395, 0, 'captcha_order', ''),
(396, 0, 'blocked_email_add', ''),
(397, 0, 'blocked_mobile', ''),
(398, 0, 'admin_zipcode_searchtype', '1'),
(399, 0, 'mobilelogo', ''),
(400, 0, 'theme_enabled_email_verification', ''),
(401, 0, 'google_distance_method', 'straight_line'),
(402, 0, 'google_use_curl', ''),
(403, 0, 'admin_menu_allowed_merchant', ''),
(404, 6, 'merchant_information', '<table style=\\"width: 478px; font-size: 16px; line-height: normal;\\"><tbody><tr><td class=\\"row first\\" style=\\"padding: 10px 0px; vertical-align: top; width: 119px;\\"><h5 style=\\"margin-bottom: 0px;\\">Website</h5></td><td class=\\"row extra\\" style=\\"padding: 10px 0px; vertical-align: top; border-top: 1px solid rgb(215, 215, 215);\\"><p style=\\"font-size: 13px; line-height: 1.4; margin-bottom: 0px;\\"><a href=\\"http://golden-cuisine.com/\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">http://golden-cuisine.com</a>&nbsp;</p><p style=\\"font-size: 13px; line-height: 1.4; margin-bottom: 0px;\\"><br></p></td></tr></tbody></table><table style=\\"width: 478px; font-size: 16px; line-height: normal;\\"><tbody><tr><td class=\\"row extra first\\" style=\\"padding: 10px 0px; vertical-align: top; width: 119px; border-top: 1px solid rgb(215, 215, 215);\\"><h5 style=\\"margin-bottom: 0px;\\">Delivery Area</h5></td><td class=\\"row extra\\" style=\\"padding: 10px 0px; vertical-align: top; border-top: 1px solid rgb(215, 215, 215);\\"><p style=\\"font-size: 13px; line-height: 1.4; margin-bottom: 0px;\\"><a href=\\"http://upper-darby.eat24hours.com/chinatown\\" title=\\"Chinatown\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Chinatown</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/community-college-of-philadelphia\\" title=\\"Community College of Philadelphia\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Community College of Philadelphia</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/fairmount\\" title=\\"Fairmount\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Fairmount</a>,<a href=\\"http://upper-darby.eat24hours.com/fishtown\\" title=\\"Fishtown\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Fishtown</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/francisville\\" title=\\"Francisville\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Francisville</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/franklintown\\" title=\\"Franklintown\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Franklintown</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/northern-liberties\\" title=\\"Northern Liberties\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Northern Liberties</a>,<a href=\\"http://upper-darby.eat24hours.com/poplar\\" title=\\"Poplar\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Poplar</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/all-restaurants\\" title=\\"Restaurants\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Restaurants</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/spring-garden\\" title=\\"Spring Garden\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">Spring Garden</a>,&nbsp;<a href=\\"http://upper-darby.eat24hours.com/west-kensington\\" title=\\"West Kensington\\" style=\\"outline: none; color: rgb(29, 29, 29); text-decoration: none;\\">West Kensington</a></p></td></tr></tbody></table>'),
(405, 6, 'merchant_gallery', '[\\"1472451785-1_large.jpg\\",\\"1472451785-2_large.jpg\\",\\"1472451785-3_large.jpg\\",\\"1472451786-4_large.jpg\\",\\"1472451786-5_large.jpg\\",\\"1472451786-6_large.jpg\\",\\"1472451786-7_large.jpg\\",\\"1472451786-8_large.jpg\\",\\"1472451786-9_large.jpg\\"]'),
(406, 6, 'gallery_disabled', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `mt_review`
--

CREATE TABLE `mt_review` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `review` text NOT NULL,
  `rating` float(14,1) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `order_id` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_review`
--

INSERT INTO `mt_review` (`id`, `merchant_id`, `client_id`, `review`, `rating`, `status`, `date_created`, `ip_address`, `order_id`) VALUES
(1, 6, 1, 'THE BEST TACO EVER!', 4.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(2, 6, 2, 'Nice, nice, nice', 3.5, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(3, 6, 2, 'Again, nice!', 4.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(6, 7, 2, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(7, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(8, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(9, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(10, 8, 1, 'not nice :(', 2.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(11, 8, 1, 'Again, nice!', 2.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(12, 8, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory_item`
--

CREATE TABLE `mt_subcategory_item` (
  `sub_item_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `sub_item_name` varchar(255) NOT NULL,
  `item_description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `sub_item_name_trans` text NOT NULL,
  `item_description_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_subcategory_item`
--

INSERT INTO `mt_subcategory_item` (`sub_item_id`, `merchant_id`, `sub_item_name`, `item_description`, `category`, `price`, `photo`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `sub_item_name_trans`, `item_description_trans`) VALUES
(1, 6, 'french fries', '', '["1"]', '1', '', 0, 'publish', '2016-08-18 21:22:38', '0000-00-00 00:00:00', '::1', '', ''),
(2, 6, 'corn cup', '', '["1"]', '1.2', '', 0, 'publish', '2016-08-18 21:22:53', '0000-00-00 00:00:00', '::1', '', ''),
(3, 6, 'apple pie', '', '["1"]', '3', '', 0, 'publish', '2016-08-18 21:24:06', '0000-00-00 00:00:00', '::1', '', ''),
(4, 6, 'sundae cone', '', '["1"]', '1.5', '', 0, 'publish', '2016-08-18 21:24:23', '0000-00-00 00:00:00', '::1', '', ''),
(5, 6, 'ice lemon tea', '', '["2"]', '2', '', 0, 'publish', '2016-08-18 21:27:03', '0000-00-00 00:00:00', '::1', '', ''),
(6, 6, 'drinking water', '', '["2"]', '1', '', 0, 'publish', '2016-08-18 21:27:18', '0000-00-00 00:00:00', '::1', '', ''),
(7, 6, 'frozen coca cola', '', '["2"]', '2.5', '', 0, 'publish', '2016-08-18 21:27:43', '0000-00-00 00:00:00', '::1', '', ''),
(8, 6, 'carbonated soft drink', '', '["2"]', '1.3', '', 0, 'publish', '2016-08-18 21:29:42', '0000-00-00 00:00:00', '::1', '', ''),
(9, 6, 'ribena ', '', '["2"]', '0.8', '', 0, 'publish', '2016-08-18 21:29:54', '0000-00-00 00:00:00', '::1', '', ''),
(10, 6, 'premium roast coffee', '', '["2"]', '3.5', '', 0, 'publish', '2016-08-18 21:30:07', '0000-00-00 00:00:00', '::1', '', ''),
(11, 6, 'hot milo', '', '["2"]', '1.5', '', 0, 'publish', '2016-08-18 21:30:20', '0000-00-00 00:00:00', '::1', '', ''),
(12, 6, 'iced milo', '', '["2"]', '2.5', '', 0, 'publish', '2016-08-18 21:30:33', '0000-00-00 00:00:00', '::1', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_category`
--
ALTER TABLE `mt_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `mt_client`
--
ALTER TABLE `mt_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  ADD PRIMARY KEY (`cook_id`);

--
-- Indexes for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  ADD PRIMARY KEY (`ingredients_id`);

--
-- Indexes for table `mt_item`
--
ALTER TABLE `mt_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `mt_option`
--
ALTER TABLE `mt_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_packages`
--
ALTER TABLE `mt_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `mt_review`
--
ALTER TABLE `mt_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_size`
--
ALTER TABLE `mt_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  ADD PRIMARY KEY (`sub_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_category`
--
ALTER TABLE `mt_category`
  MODIFY `cat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mt_client`
--
ALTER TABLE `mt_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  MODIFY `ingredients_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_item`
--
ALTER TABLE `mt_item`
  MODIFY `item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  MODIFY `merchant_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mt_option`
--
ALTER TABLE `mt_option`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
--
-- AUTO_INCREMENT for table `mt_packages`
--
ALTER TABLE `mt_packages`
  MODIFY `package_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_review`
--
ALTER TABLE `mt_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mt_size`
--
ALTER TABLE `mt_size`
  MODIFY `size_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  MODIFY `sub_item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
