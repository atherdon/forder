
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
