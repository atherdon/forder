
-- --------------------------------------------------------

--
-- Table structure for table `mt_category`
--

CREATE TABLE `mt_category` (
  `cat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sequence` int(14) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `date_modified` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `spicydish` int(2) NOT NULL DEFAULT '1',
  `spicydish_notes` text NOT NULL,
  `dish` text NOT NULL,
  `category_name_trans` text NOT NULL,
  `category_description_trans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_category`
--

INSERT INTO `mt_category` (`cat_id`, `merchant_id`, `category_name`, `category_description`, `photo`, `status`, `sequence`, `date_created`, `date_modified`, `ip_address`, `spicydish`, `spicydish_notes`, `dish`, `category_name_trans`, `category_description_trans`) VALUES
(1, 6, 'STARTERS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Starters', '', 'publish', 0, '2016-08-09T16:32:23+02:00', '2016-08-09T16:33:56+02:00', '::1', 1, '', '', '', ''),
(2, 6, 'MAIN COURSES', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Main', '', 'publish', 0, '2016-08-09T16:32:37+02:00', '', '::1', 1, '', '', '', ''),
(3, 6, 'BEEF', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Beef', '', 'publish', 0, '2016-08-09T16:32:55+02:00', '', '::1', 1, '', '', '', ''),
(4, 6, 'DESSERTS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Desserts', '', 'publish', 0, '2016-08-09T16:33:07+02:00', '', '::1', 1, '', '', '', ''),
(5, 6, 'DRINKS', 'Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea. Drinks', '', 'publish', 0, '2016-08-09T16:33:18+02:00', '', '::1', 1, '', '', '', '');
