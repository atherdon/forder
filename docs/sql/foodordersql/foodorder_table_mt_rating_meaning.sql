
-- --------------------------------------------------------

--
-- Table structure for table `mt_rating_meaning`
--

CREATE TABLE `mt_rating_meaning` (
  `id` int(14) NOT NULL,
  `rating_start` float(14,1) NOT NULL,
  `rating_end` float(14,1) NOT NULL,
  `meaning` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_rating_meaning`
--

INSERT INTO `mt_rating_meaning` (`id`, `rating_start`, `rating_end`, `meaning`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 1.0, 1.9, 'poor', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
(2, 2.0, 2.9, 'good', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
(3, 3.0, 4.0, 'very good', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1'),
(4, 4.1, 5.0, 'excellent', '2016-08-08 10:48:39', '0000-00-00 00:00:00', '::1');
