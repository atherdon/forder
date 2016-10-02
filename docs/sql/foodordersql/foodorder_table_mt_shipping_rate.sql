
-- --------------------------------------------------------

--
-- Table structure for table `mt_shipping_rate`
--

CREATE TABLE `mt_shipping_rate` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `distance_from` int(14) NOT NULL,
  `distance_to` int(14) NOT NULL,
  `shipping_units` varchar(5) NOT NULL,
  `distance_price` float(14,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
