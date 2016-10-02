
-- --------------------------------------------------------

--
-- Table structure for table `mt_languages`
--

CREATE TABLE `mt_languages` (
  `lang_id` int(14) NOT NULL,
  `country_code` varchar(14) NOT NULL,
  `language_code` varchar(255) NOT NULL,
  `source_text` text NOT NULL,
  `is_assign` int(1) NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
