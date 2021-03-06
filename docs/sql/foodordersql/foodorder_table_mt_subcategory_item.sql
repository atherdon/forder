
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
