
-- --------------------------------------------------------

--
-- Table structure for table `mt_currency`
--

CREATE TABLE `mt_currency` (
  `currency_code` varchar(3) NOT NULL,
  `currency_symbol` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_currency`
--

INSERT INTO `mt_currency` (`currency_code`, `currency_symbol`, `date_created`, `date_modified`, `ip_address`) VALUES
('AUD', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('CAD', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('CNY', '&yen;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('EUR', '&euro;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('HKD', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('JPY', '&yen;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('MXN', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('MYR', '&#82;&#77;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('NZD', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
('USD', '&#36;', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1');
