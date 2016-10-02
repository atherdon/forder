
-- --------------------------------------------------------

--
-- Table structure for table `mt_rating`
--

CREATE TABLE `mt_rating` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `ratings` float(14,1) NOT NULL,
  `client_id` int(14) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
