
-- --------------------------------------------------------

--
-- Table structure for table `mt_stripe_logs`
--

CREATE TABLE `mt_stripe_logs` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `json_result` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
