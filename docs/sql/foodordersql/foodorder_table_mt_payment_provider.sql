
-- --------------------------------------------------------

--
-- Table structure for table `mt_payment_provider`
--

CREATE TABLE `mt_payment_provider` (
  `id` int(14) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `payment_logo` varchar(255) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_payment_provider`
--

INSERT INTO `mt_payment_provider` (`id`, `payment_name`, `payment_logo`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'Visa', '1472700615-1459686223-1425695020-visa.png', 0, 'publish', '2016-08-31 23:30:16', '0000-00-00 00:00:00', '::1'),
(2, 'Master card', '1472700640-1459686216-1425695033-mastercard.jpg', 0, 'publish', '2016-08-31 23:30:42', '0000-00-00 00:00:00', '::1'),
(3, 'Maestro', '1472700681-1459686201-1425695045-maestro.jpg', 0, 'publish', '2016-08-31 23:31:23', '0000-00-00 00:00:00', '::1');
