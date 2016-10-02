
-- --------------------------------------------------------

--
-- Table structure for table `mt_newsletter`
--

CREATE TABLE `mt_newsletter` (
  `id` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
