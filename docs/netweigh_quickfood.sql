-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2016 at 12:52 PM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netweigh_quickfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `mt_address_book`
--

CREATE TABLE IF NOT EXISTS `mt_address_book` (
  `id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `as_default` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_admin_user`
--

CREATE TABLE IF NOT EXISTS `mt_admin_user` (
  `admin_id` int(14) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `user_lang` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `lost_password_code` varchar(255) NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `user_access` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_admin_user`
--

INSERT INTO `mt_admin_user` (`admin_id`, `username`, `password`, `first_name`, `last_name`, `role`, `date_created`, `date_modified`, `ip_address`, `user_lang`, `email_address`, `lost_password_code`, `session_token`, `last_login`, `user_access`) VALUES
(1, 'development', '816c7dd612cf878ab0b1d9b4996276ad', '', '', '', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', 0, '', '', '', '0000-00-00 00:00:00', '["autologin","dashboard","merchant","sponsoredMerchantList","packages","Cuisine","dishes","OrderStatus","settings","commisionsettings","voucher","merchantcommission","withdrawal","incomingwithdrawal","withdrawalsettings","emailsettings","emailtpl","customPage","Ratings","ContactSettings","SocialSettings","ManageCurrency","ManageLanguage","Seo","analytics","customerlist","subscriberlist","reviews","bankdeposit","paymentgatewaysettings","paymentgateway","paypalSettings","stripeSettings","mercadopagoSettings","sisowsettings","payumonenysettings","obdsettings","payserasettings","payondelivery","barclay","epaybg","authorize","sms","smsSettings","smsPackage","smstransaction","smslogs","fax","faxtransaction","faxpackage","faxlogs","faxsettings","reports","rptMerchantReg","rptMerchantPayment","rptMerchanteSales","rptmerchantsalesummary","rptbookingsummary","userList"]\n');

-- --------------------------------------------------------

--
-- Table structure for table `mt_bank_deposit`
--

CREATE TABLE IF NOT EXISTS `mt_bank_deposit` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `branch_code` varchar(100) NOT NULL,
  `date_of_deposit` date NOT NULL,
  `time_of_deposit` varchar(50) NOT NULL,
  `amount` float(14,4) NOT NULL,
  `scanphoto` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` date NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `transaction_type` varchar(255) NOT NULL DEFAULT 'merchant_signup',
  `client_id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_barclay_trans`
--

CREATE TABLE IF NOT EXISTS `mt_barclay_trans` (
  `id` int(14) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL DEFAULT 'signup',
  `date_created` date NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `param1` varchar(255) NOT NULL,
  `param2` text NOT NULL,
  `param3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_bookingtable`
--

CREATE TABLE IF NOT EXISTS `mt_bookingtable` (
  `booking_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `number_guest` int(14) NOT NULL,
  `date_booking` date NOT NULL,
  `booking_time` varchar(50) NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `booking_notes` text NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `viewed` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_category`
--

CREATE TABLE IF NOT EXISTS `mt_category` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_client`
--

CREATE TABLE IF NOT EXISTS `mt_client` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_client_cc`
--

CREATE TABLE IF NOT EXISTS `mt_client_cc` (
  `cc_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `credit_card_number` varchar(20) NOT NULL,
  `expiration_month` varchar(5) NOT NULL,
  `expiration_yr` varchar(5) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_cooking_ref`
--

CREATE TABLE IF NOT EXISTS `mt_cooking_ref` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_cuisine`
--

CREATE TABLE IF NOT EXISTS `mt_cuisine` (
  `cuisine_id` int(14) NOT NULL,
  `cuisine_name` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `cuisine_name_trans` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_cuisine`
--

INSERT INTO `mt_cuisine` (`cuisine_id`, `cuisine_name`, `sequence`, `date_created`, `date_modified`, `ip_address`, `cuisine_name_trans`) VALUES
(1, 'American', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(2, 'Deli', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(3, 'Indian', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(4, 'Mediterranean', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(5, 'Sandwiches', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(6, 'Barbeque', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(7, 'Diner', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(8, 'Italian', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(9, 'Mexican', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(10, 'Sushi', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(11, 'Burgers', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(12, 'Greek', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(13, 'Japanese', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(14, 'Middle Eastern', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(15, 'Thai', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(16, 'Chinese', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(17, 'Healthy', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(18, 'Korean', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(19, 'Pizza', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', ''),
(20, 'Vegetarian', 0, '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48', '');

-- --------------------------------------------------------

--
-- Table structure for table `mt_currency`
--

CREATE TABLE IF NOT EXISTS `mt_currency` (
  `currency_code` varchar(3) NOT NULL,
  `currency_symbol` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_currency`
--

INSERT INTO `mt_currency` (`currency_code`, `currency_symbol`, `date_created`, `date_modified`, `ip_address`) VALUES
('AUD', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('CAD', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('CNY', '&yen;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('EUR', '&euro;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('HKD', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('JPY', '&yen;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('MXN', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('MYR', '&#82;&#77;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('NZD', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
('USD', '&#36;', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48');

-- --------------------------------------------------------

--
-- Table structure for table `mt_custom_page`
--

CREATE TABLE IF NOT EXISTS `mt_custom_page` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_dishes`
--

CREATE TABLE IF NOT EXISTS `mt_dishes` (
  `dish_id` int(14) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_broadcast`
--

CREATE TABLE IF NOT EXISTS `mt_fax_broadcast` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `faxno` varchar(50) NOT NULL,
  `recipname` varchar(32) NOT NULL,
  `faxurl` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `jobid` varchar(255) NOT NULL,
  `api_raw_response` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_process` datetime NOT NULL,
  `date_postback` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_package`
--

CREATE TABLE IF NOT EXISTS `mt_fax_package` (
  `fax_package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float(14,4) NOT NULL,
  `promo_price` float(14,4) NOT NULL,
  `fax_limit` int(14) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_package_trans`
--

CREATE TABLE IF NOT EXISTS `mt_fax_package_trans` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `fax_package_id` int(14) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `package_price` float(14,4) NOT NULL,
  `fax_limit` int(14) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `payment_reference` varchar(255) NOT NULL,
  `payment_gateway_response` text NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_ingredients`
--

CREATE TABLE IF NOT EXISTS `mt_ingredients` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_item`
--

CREATE TABLE IF NOT EXISTS `mt_item` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_languages`
--

CREATE TABLE IF NOT EXISTS `mt_languages` (
  `lang_id` int(14) NOT NULL,
  `country_code` varchar(14) NOT NULL,
  `language_code` varchar(10) NOT NULL,
  `source_text` text NOT NULL,
  `is_assign` int(1) NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant`
--

CREATE TABLE IF NOT EXISTS `mt_merchant` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_cc`
--

CREATE TABLE IF NOT EXISTS `mt_merchant_cc` (
  `mt_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `credit_card_number` varchar(20) NOT NULL,
  `expiration_month` varchar(5) NOT NULL,
  `expiration_yr` varchar(5) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_user`
--

CREATE TABLE IF NOT EXISTS `mt_merchant_user` (
  `merchant_user_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_access` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `last_login` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `session_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_newsletter`
--

CREATE TABLE IF NOT EXISTS `mt_newsletter` (
  `id` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_offers`
--

CREATE TABLE IF NOT EXISTS `mt_offers` (
  `offers_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `offer_percentage` float(14,4) NOT NULL,
  `offer_price` float(14,4) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_option`
--

CREATE TABLE IF NOT EXISTS `mt_option` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_option`
--

INSERT INTO `mt_option` (`id`, `merchant_id`, `option_name`, `option_value`) VALUES
(1, 0, 'website_title', 'quickfood'),
(2, 0, 'admin_country_set', 'UA'),
(3, 0, 'website_address', 'Alabama'),
(4, 0, 'website_contact_phone', '0995224198'),
(5, 0, 'website_contact_email', 'arthur@netweightit.com'),
(6, 0, 'admin_currency_set', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `mt_order`
--

CREATE TABLE IF NOT EXISTS `mt_order` (
  `order_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `json_details` text NOT NULL,
  `trans_type` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `sub_total` float(14,4) NOT NULL,
  `tax` float(14,4) NOT NULL,
  `taxable_total` decimal(14,4) NOT NULL,
  `total_w_tax` float(14,4) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `stats_id` int(14) NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT '1',
  `delivery_charge` float(14,4) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` varchar(100) NOT NULL,
  `delivery_asap` varchar(14) NOT NULL,
  `delivery_instruction` varchar(255) NOT NULL,
  `voucher_code` varchar(100) NOT NULL,
  `voucher_amount` float(14,4) NOT NULL,
  `voucher_type` varchar(100) NOT NULL,
  `cc_id` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `order_change` float(14,4) NOT NULL,
  `payment_provider_name` varchar(255) NOT NULL,
  `discounted_amount` float(14,5) NOT NULL,
  `discount_percentage` float(14,5) NOT NULL,
  `percent_commision` float(14,4) NOT NULL,
  `total_commission` float(14,4) NOT NULL,
  `commision_ontop` int(2) NOT NULL DEFAULT '2',
  `merchant_earnings` float(14,4) NOT NULL,
  `packaging` float(14,4) NOT NULL,
  `cart_tip_percentage` float(14,4) NOT NULL,
  `cart_tip_value` float(14,4) NOT NULL,
  `card_fee` float(14,4) NOT NULL,
  `donot_apply_tax_delivery` int(1) NOT NULL DEFAULT '1',
  `order_locked` int(1) NOT NULL DEFAULT '1',
  `request_from` varchar(10) NOT NULL DEFAULT 'web',
  `mobile_cart_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_delivery_address`
--

CREATE TABLE IF NOT EXISTS `mt_order_delivery_address` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `contact_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_details`
--

CREATE TABLE IF NOT EXISTS `mt_order_details` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `item_id` int(14) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `order_notes` text NOT NULL,
  `normal_price` float(14,4) NOT NULL,
  `discounted_price` float(14,4) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` int(14) NOT NULL,
  `cooking_ref` varchar(255) NOT NULL,
  `addon` text NOT NULL,
  `ingredients` text NOT NULL,
  `non_taxable` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_history`
--

CREATE TABLE IF NOT EXISTS `mt_order_history` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_sms`
--

CREATE TABLE IF NOT EXISTS `mt_order_sms` (
  `id` int(14) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `code` int(4) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_status`
--

CREATE TABLE IF NOT EXISTS `mt_order_status` (
  `stats_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_order_status`
--

INSERT INTO `mt_order_status` (`stats_id`, `merchant_id`, `description`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 0, 'pending', '2016-08-31', '0000-00-00', '77.120.160.48'),
(2, 0, 'cancelled', '2016-08-31', '0000-00-00', '77.120.160.48'),
(3, 0, 'delivered', '2016-08-31', '0000-00-00', '77.120.160.48'),
(4, 0, 'paid', '2016-08-31', '0000-00-00', '77.120.160.48');

-- --------------------------------------------------------

--
-- Table structure for table `mt_packages`
--

CREATE TABLE IF NOT EXISTS `mt_packages` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_package_trans`
--

CREATE TABLE IF NOT EXISTS `mt_package_trans` (
  `id` int(14) NOT NULL,
  `package_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `price` float(14,4) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `mt_id` int(14) NOT NULL,
  `TOKEN` varchar(255) NOT NULL,
  `membership_expired` date NOT NULL,
  `TRANSACTIONID` varchar(255) NOT NULL,
  `TRANSACTIONTYPE` varchar(100) NOT NULL,
  `PAYMENTSTATUS` varchar(100) NOT NULL,
  `PAYPALFULLRESPONSE` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `fee` float(14,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_payment_order`
--

CREATE TABLE IF NOT EXISTS `mt_payment_order` (
  `id` int(14) NOT NULL,
  `payment_type` varchar(10) CHARACTER SET utf8 NOT NULL,
  `payment_reference` varchar(255) CHARACTER SET utf8 NOT NULL,
  `order_id` int(14) NOT NULL,
  `raw_response` text CHARACTER SET utf8 NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_payment_provider`
--

CREATE TABLE IF NOT EXISTS `mt_payment_provider` (
  `id` int(14) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `payment_logo` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_paypal_checkout`
--

CREATE TABLE IF NOT EXISTS `mt_paypal_checkout` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `token` varchar(255) NOT NULL,
  `paypal_request` text NOT NULL,
  `paypal_response` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'checkout',
  `date_created` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_paypal_payment`
--

CREATE TABLE IF NOT EXISTS `mt_paypal_payment` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `TOKEN` varchar(255) NOT NULL,
  `TRANSACTIONID` varchar(100) NOT NULL,
  `TRANSACTIONTYPE` varchar(100) NOT NULL,
  `PAYMENTTYPE` varchar(100) NOT NULL,
  `ORDERTIME` varchar(100) NOT NULL,
  `AMT` varchar(14) NOT NULL,
  `FEEAMT` varchar(14) NOT NULL,
  `TAXAMT` varchar(14) NOT NULL,
  `CURRENCYCODE` varchar(3) NOT NULL,
  `PAYMENTSTATUS` varchar(100) NOT NULL,
  `CORRELATIONID` varchar(100) NOT NULL,
  `TIMESTAMP` varchar(100) NOT NULL,
  `json_details` text NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_rating`
--

CREATE TABLE IF NOT EXISTS `mt_rating` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `ratings` float(14,1) NOT NULL,
  `client_id` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_rating_meaning`
--

CREATE TABLE IF NOT EXISTS `mt_rating_meaning` (
  `id` int(14) NOT NULL,
  `rating_start` float(14,1) NOT NULL,
  `rating_end` float(14,1) NOT NULL,
  `meaning` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_rating_meaning`
--

INSERT INTO `mt_rating_meaning` (`id`, `rating_start`, `rating_end`, `meaning`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 1.0, 1.9, 'poor', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
(2, 2.0, 2.9, 'good', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
(3, 3.0, 4.0, 'very good', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48'),
(4, 4.1, 5.0, 'excellent', '2016-08-31 12:48:02', '0000-00-00 00:00:00', '77.120.160.48');

-- --------------------------------------------------------

--
-- Table structure for table `mt_review`
--

CREATE TABLE IF NOT EXISTS `mt_review` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_shipping_rate`
--

CREATE TABLE IF NOT EXISTS `mt_shipping_rate` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `distance_from` int(14) NOT NULL,
  `distance_to` int(14) NOT NULL,
  `shipping_units` varchar(5) NOT NULL,
  `distance_price` float(14,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_size`
--

CREATE TABLE IF NOT EXISTS `mt_size` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_broadcast`
--

CREATE TABLE IF NOT EXISTS `mt_sms_broadcast` (
  `broadcast_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `send_to` int(14) NOT NULL,
  `list_mobile_number` text CHARACTER SET utf8 NOT NULL,
  `sms_alert_message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_broadcast_details`
--

CREATE TABLE IF NOT EXISTS `mt_sms_broadcast_details` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `broadcast_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `sms_message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `gateway_response` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_executed` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `gateway` varchar(255) NOT NULL DEFAULT 'twilio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_package`
--

CREATE TABLE IF NOT EXISTS `mt_sms_package` (
  `sms_package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float(14,4) NOT NULL,
  `promo_price` float(14,4) NOT NULL,
  `sms_limit` int(14) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_package_trans`
--

CREATE TABLE IF NOT EXISTS `mt_sms_package_trans` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `sms_package_id` int(14) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `package_price` float(14,4) NOT NULL,
  `sms_limit` int(14) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `payment_reference` varchar(255) NOT NULL,
  `payment_gateway_response` text NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_stripe_logs`
--

CREATE TABLE IF NOT EXISTS `mt_stripe_logs` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `json_result` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory`
--

CREATE TABLE IF NOT EXISTS `mt_subcategory` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory_item`
--

CREATE TABLE IF NOT EXISTS `mt_subcategory_item` (
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

-- --------------------------------------------------------

--
-- Stand-in structure for view `mt_view_merchant`
--
CREATE TABLE IF NOT EXISTS `mt_view_merchant` (
`merchant_id` int(14)
,`restaurant_slug` varchar(255)
,`restaurant_name` varchar(255)
,`restaurant_phone` varchar(100)
,`contact_name` varchar(255)
,`contact_phone` varchar(100)
,`contact_email` varchar(255)
,`country_code` varchar(3)
,`street` text
,`city` varchar(255)
,`state` varchar(255)
,`post_code` varchar(100)
,`cuisine` text
,`service` varchar(255)
,`free_delivery` int(1)
,`delivery_estimation` varchar(100)
,`username` varchar(100)
,`password` varchar(100)
,`activation_key` varchar(50)
,`activation_token` varchar(255)
,`status` varchar(100)
,`date_created` datetime
,`date_modified` datetime
,`date_activated` datetime
,`last_login` datetime
,`ip_address` varchar(50)
,`package_id` int(14)
,`package_price` float(14,5)
,`membership_expired` date
,`payment_steps` int(1)
,`is_featured` int(1)
,`is_ready` int(1)
,`is_sponsored` int(2)
,`sponsored_expiration` date
,`lost_password_code` varchar(50)
,`user_lang` int(14)
,`membership_purchase_date` datetime
,`sort_featured` int(14)
,`is_commission` int(1)
,`percent_commision` float(14,5)
,`abn` varchar(255)
,`session_token` varchar(255)
,`commision_type` varchar(50)
,`latitude` text
,`lontitude` text
,`delivery_charges` text
,`minimum_order` text
,`ratings` double(22,5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mt_view_order_details`
--
CREATE TABLE IF NOT EXISTS `mt_view_order_details` (
`id` int(14)
,`order_id` int(14)
,`client_id` int(14)
,`item_id` int(14)
,`item_name` varchar(255)
,`order_notes` text
,`normal_price` float(14,4)
,`discounted_price` float(14,4)
,`size` varchar(255)
,`qty` int(14)
,`cooking_ref` varchar(255)
,`addon` text
,`ingredients` text
,`non_taxable` int(1)
,`merchant_id` bigint(14)
,`status` varchar(255)
,`date_created` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mt_view_ratings`
--
CREATE TABLE IF NOT EXISTS `mt_view_ratings` (
`merchant_id` int(14)
,`ratings` double(22,5)
);

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher`
--

CREATE TABLE IF NOT EXISTS `mt_voucher` (
  `voucher_id` int(14) NOT NULL,
  `voucher_name` varchar(255) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `number_of_voucher` int(14) NOT NULL,
  `amount` float NOT NULL,
  `voucher_type` varchar(100) NOT NULL DEFAULT 'fixed amount',
  `status` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher_list`
--

CREATE TABLE IF NOT EXISTS `mt_voucher_list` (
  `voucher_id` int(14) NOT NULL,
  `voucher_code` varchar(50) NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT 'unused',
  `client_id` int(14) NOT NULL,
  `date_used` varchar(50) NOT NULL,
  `order_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher_new`
--

CREATE TABLE IF NOT EXISTS `mt_voucher_new` (
  `voucher_id` int(14) NOT NULL,
  `voucher_owner` varchar(255) NOT NULL DEFAULT 'merchant',
  `merchant_id` int(14) NOT NULL,
  `joining_merchant` text NOT NULL,
  `voucher_name` varchar(255) NOT NULL,
  `voucher_type` varchar(255) NOT NULL,
  `amount` float(14,4) NOT NULL,
  `expiration` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `used_once` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_withdrawal`
--

CREATE TABLE IF NOT EXISTS `mt_withdrawal` (
  `withdrawal_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `amount` float(14,4) NOT NULL,
  `current_balance` float(14,4) NOT NULL,
  `balance` float(14,4) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `account` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `bank_account_number` varchar(255) NOT NULL,
  `swift_code` varchar(100) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `bank_country` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `viewed` int(2) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_to_process` date NOT NULL,
  `date_process` datetime NOT NULL,
  `api_raw_response` text NOT NULL,
  `withdrawal_token` text NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `bank_type` varchar(255) NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_zipcode`
--

CREATE TABLE IF NOT EXISTS `mt_zipcode` (
  `zipcode_id` int(14) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `stree_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure for view `mt_view_merchant`
--
DROP TABLE IF EXISTS `mt_view_merchant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`netweigh_admin`@`localhost` SQL SECURITY DEFINER VIEW `mt_view_merchant` AS select `a`.`merchant_id` AS `merchant_id`,`a`.`restaurant_slug` AS `restaurant_slug`,`a`.`restaurant_name` AS `restaurant_name`,`a`.`restaurant_phone` AS `restaurant_phone`,`a`.`contact_name` AS `contact_name`,`a`.`contact_phone` AS `contact_phone`,`a`.`contact_email` AS `contact_email`,`a`.`country_code` AS `country_code`,`a`.`street` AS `street`,`a`.`city` AS `city`,`a`.`state` AS `state`,`a`.`post_code` AS `post_code`,`a`.`cuisine` AS `cuisine`,`a`.`service` AS `service`,`a`.`free_delivery` AS `free_delivery`,`a`.`delivery_estimation` AS `delivery_estimation`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`activation_key` AS `activation_key`,`a`.`activation_token` AS `activation_token`,`a`.`status` AS `status`,`a`.`date_created` AS `date_created`,`a`.`date_modified` AS `date_modified`,`a`.`date_activated` AS `date_activated`,`a`.`last_login` AS `last_login`,`a`.`ip_address` AS `ip_address`,`a`.`package_id` AS `package_id`,`a`.`package_price` AS `package_price`,`a`.`membership_expired` AS `membership_expired`,`a`.`payment_steps` AS `payment_steps`,`a`.`is_featured` AS `is_featured`,`a`.`is_ready` AS `is_ready`,`a`.`is_sponsored` AS `is_sponsored`,`a`.`sponsored_expiration` AS `sponsored_expiration`,`a`.`lost_password_code` AS `lost_password_code`,`a`.`user_lang` AS `user_lang`,`a`.`membership_purchase_date` AS `membership_purchase_date`,`a`.`sort_featured` AS `sort_featured`,`a`.`is_commission` AS `is_commission`,`a`.`percent_commision` AS `percent_commision`,`a`.`abn` AS `abn`,`a`.`session_token` AS `session_token`,`a`.`commision_type` AS `commision_type`,`b`.`option_value` AS `latitude`,`c`.`option_value` AS `lontitude`,`d`.`option_value` AS `delivery_charges`,`e`.`option_value` AS `minimum_order`,`f`.`ratings` AS `ratings` from (((((`mt_merchant` `a` left join `mt_option` `b` on(((`a`.`merchant_id` = `b`.`merchant_id`) and (`b`.`option_name` = 'merchant_latitude')))) left join `mt_option` `c` on(((`a`.`merchant_id` = `c`.`merchant_id`) and (`c`.`option_name` = 'merchant_longtitude')))) left join `mt_option` `d` on(((`a`.`merchant_id` = `d`.`merchant_id`) and (`d`.`option_name` = 'merchant_delivery_charges')))) left join `mt_option` `e` on(((`a`.`merchant_id` = `e`.`merchant_id`) and (`e`.`option_name` = 'merchant_minimum_order')))) left join `mt_view_ratings` `f` on((`a`.`merchant_id` = `f`.`merchant_id`)));

-- --------------------------------------------------------

--
-- Structure for view `mt_view_order_details`
--
DROP TABLE IF EXISTS `mt_view_order_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`netweigh_admin`@`localhost` SQL SECURITY DEFINER VIEW `mt_view_order_details` AS select `a`.`id` AS `id`,`a`.`order_id` AS `order_id`,`a`.`client_id` AS `client_id`,`a`.`item_id` AS `item_id`,`a`.`item_name` AS `item_name`,`a`.`order_notes` AS `order_notes`,`a`.`normal_price` AS `normal_price`,`a`.`discounted_price` AS `discounted_price`,`a`.`size` AS `size`,`a`.`qty` AS `qty`,`a`.`cooking_ref` AS `cooking_ref`,`a`.`addon` AS `addon`,`a`.`ingredients` AS `ingredients`,`a`.`non_taxable` AS `non_taxable`,(select `mt_order`.`merchant_id` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `merchant_id`,(select `mt_order`.`status` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `status`,(select `mt_order`.`date_created` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `date_created` from `mt_order_details` `a`;

-- --------------------------------------------------------

--
-- Structure for view `mt_view_ratings`
--
DROP TABLE IF EXISTS `mt_view_ratings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`netweigh_admin`@`localhost` SQL SECURITY DEFINER VIEW `mt_view_ratings` AS select `mt_rating`.`merchant_id` AS `merchant_id`,(sum(`mt_rating`.`ratings`) / count(0)) AS `ratings` from `mt_rating` group by `mt_rating`.`merchant_id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  ADD PRIMARY KEY (`booking_id`);

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
-- Indexes for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  ADD PRIMARY KEY (`cook_id`);

--
-- Indexes for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `mt_currency`
--
ALTER TABLE `mt_currency`
  ADD PRIMARY KEY (`currency_code`);

--
-- Indexes for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  ADD PRIMARY KEY (`fax_package_id`);

--
-- Indexes for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
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
-- Indexes for table `mt_languages`
--
ALTER TABLE `mt_languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  ADD PRIMARY KEY (`mt_id`);

--
-- Indexes for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  ADD PRIMARY KEY (`merchant_user_id`);

--
-- Indexes for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_offers`
--
ALTER TABLE `mt_offers`
  ADD PRIMARY KEY (`offers_id`);

--
-- Indexes for table `mt_option`
--
ALTER TABLE `mt_option`
  ADD PRIMARY KEY (`id`), ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_order`
--
ALTER TABLE `mt_order`
  ADD PRIMARY KEY (`order_id`), ADD KEY `merchant_id` (`merchant_id`), ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`), ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  ADD PRIMARY KEY (`id`), ADD KEY `session` (`session`), ADD KEY `code` (`code`);

--
-- Indexes for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  ADD PRIMARY KEY (`stats_id`);

--
-- Indexes for table `mt_packages`
--
ALTER TABLE `mt_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_rating`
--
ALTER TABLE `mt_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_review`
--
ALTER TABLE `mt_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_size`
--
ALTER TABLE `mt_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  ADD PRIMARY KEY (`broadcast_id`);

--
-- Indexes for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  ADD PRIMARY KEY (`sms_package_id`);

--
-- Indexes for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  ADD PRIMARY KEY (`voucher_id`), ADD KEY `voucher_name` (`voucher_name`), ADD KEY `status` (`status`);

--
-- Indexes for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  ADD PRIMARY KEY (`withdrawal_id`);

--
-- Indexes for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  ADD PRIMARY KEY (`zipcode_id`), ADD KEY `country_code` (`country_code`), ADD KEY `area` (`area`), ADD KEY `stree_name` (`stree_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  MODIFY `admin_id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  MODIFY `booking_id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mt_category`
--
ALTER TABLE `mt_category`
  MODIFY `cat_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_client`
--
ALTER TABLE `mt_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  MODIFY `cc_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  MODIFY `cuisine_id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  MODIFY `dish_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  MODIFY `fax_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  MODIFY `ingredients_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_item`
--
ALTER TABLE `mt_item`
  MODIFY `item_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_languages`
--
ALTER TABLE `mt_languages`
  MODIFY `lang_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  MODIFY `merchant_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  MODIFY `mt_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  MODIFY `merchant_user_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_offers`
--
ALTER TABLE `mt_offers`
  MODIFY `offers_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_option`
--
ALTER TABLE `mt_option`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mt_order`
--
ALTER TABLE `mt_order`
  MODIFY `order_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  MODIFY `stats_id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_packages`
--
ALTER TABLE `mt_packages`
  MODIFY `package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating`
--
ALTER TABLE `mt_rating`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_review`
--
ALTER TABLE `mt_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_size`
--
ALTER TABLE `mt_size`
  MODIFY `size_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  MODIFY `sms_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  MODIFY `sub_item_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  MODIFY `withdrawal_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  MODIFY `zipcode_id` int(14) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
