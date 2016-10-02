
-- --------------------------------------------------------

--
-- Table structure for table `mt_paypal_checkout`
--

CREATE TABLE `mt_paypal_checkout` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `token` varchar(255) NOT NULL,
  `paypal_request` text NOT NULL,
  `paypal_response` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'checkout',
  `date_created` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
