
-- --------------------------------------------------------

--
-- Table structure for table `mt_order_history`
--

CREATE TABLE `mt_order_history` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
