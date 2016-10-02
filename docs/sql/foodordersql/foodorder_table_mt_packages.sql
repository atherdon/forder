
-- --------------------------------------------------------

--
-- Table structure for table `mt_packages`
--

CREATE TABLE `mt_packages` (
  `package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float(14,4) NOT NULL,
  `promo_price` float(14,4) NOT NULL,
  `expiration` int(14) NOT NULL,
  `expiration_type` varchar(50) NOT NULL DEFAULT 'days',
  `unlimited_post` int(1) NOT NULL DEFAULT '2',
  `post_limit` int(14) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `sell_limit` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_packages`
--

INSERT INTO `mt_packages` (`package_id`, `title`, `description`, `price`, `promo_price`, `expiration`, `expiration_type`, `unlimited_post`, `post_limit`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `sell_limit`) VALUES
(1, 'Premium package', 'premium package', 20.0000, 0.0000, 60, 'days', 2, 0, 0, 'publish', '2016-08-09 00:53:31', '0000-00-00 00:00:00', '::1', 0),
(2, 'Free package', 'Free Package', 0.0000, 0.0000, 31, 'days', 2, 0, 0, 'publish', '2016-08-09 00:54:19', '0000-00-00 00:00:00', '::1', 0);
