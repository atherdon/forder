
-- --------------------------------------------------------

--
-- Table structure for table `mt_order_status`
--

CREATE TABLE `mt_order_status` (
  `stats_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_order_status`
--

INSERT INTO `mt_order_status` (`stats_id`, `merchant_id`, `description`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 0, 'pending', '2016-08-08', '0000-00-00', '::1'),
(2, 0, 'cancelled', '2016-08-08', '0000-00-00', '::1'),
(3, 0, 'delivered', '2016-08-08', '0000-00-00', '::1'),
(4, 0, 'paid', '2016-08-08', '0000-00-00', '::1');
