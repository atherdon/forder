
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
