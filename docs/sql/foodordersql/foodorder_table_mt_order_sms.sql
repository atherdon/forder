
-- --------------------------------------------------------

--
-- Table structure for table `mt_order_sms`
--

CREATE TABLE `mt_order_sms` (
  `id` int(14) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `code` int(4) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
