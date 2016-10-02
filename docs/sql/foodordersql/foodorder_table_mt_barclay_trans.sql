
-- --------------------------------------------------------

--
-- Table structure for table `mt_barclay_trans`
--

CREATE TABLE `mt_barclay_trans` (
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
