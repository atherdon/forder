
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
