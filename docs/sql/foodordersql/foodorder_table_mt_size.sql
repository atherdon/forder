
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
