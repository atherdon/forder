
-- --------------------------------------------------------

--
-- Table structure for table `mt_custom_page`
--

CREATE TABLE `mt_custom_page` (
  `id` int(14) NOT NULL,
  `slug_name` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `icons` varchar(255) NOT NULL,
  `assign_to` varchar(50) NOT NULL,
  `sequence` int(14) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `open_new_tab` int(11) NOT NULL DEFAULT '1',
  `is_custom_link` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_custom_page`
--

INSERT INTO `mt_custom_page` (`id`, `slug_name`, `page_name`, `content`, `seo_title`, `meta_description`, `meta_keywords`, `icons`, `assign_to`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `open_new_tab`, `is_custom_link`) VALUES
(2, 'about-us', 'About us', 'THIS IS PAGE CONTENT, HEY', '', '', '', '', 'bottom', 1, 'publish', '2016-08-08 22:57:52', '2016-08-18 22:00:36', '::1', 1, 1),
(3, 'faq', 'Faq', 'FAQ', '', '', '', '', 'bottom', 3, 'publish', '2016-08-08 23:23:21', '2016-08-18 22:00:36', '::1', 1, 1),
(5, 'login', 'Login', 'Login', '', '', '', '', 'bottom2', 9, 'publish', '2016-08-08 23:23:46', '2016-08-18 22:00:36', '::1', 1, 1),
(6, 'register', 'Register', 'Register', '', '', '', '', 'bottom2', 8, 'publish', '2016-08-08 23:23:55', '2016-08-18 22:00:36', '::1', 1, 1),
(7, 'terms-and-conditions', 'Terms and conditions', 'Terms and conditions', '', '', '', '', 'bottom2', 12, 'publish', '2016-08-08 23:24:06', '2016-08-18 22:00:36', '::1', 1, 1),
(9, '', 'Contact', 'http://localhost:1234/food2/store/contact', '', '', '', '', 'bottom2', 6, 'publish', '2016-08-10 15:58:18', '2016-08-18 22:00:36', '::1', 1, 2),
(10, 'blog', 'Blog', 'Blog content', '', '', '', '', 'bottom', 2, 'publish', '2016-08-18 21:56:48', '2016-08-18 22:00:36', '::1', 1, 1),
(11, 'press', 'Press', 'Press page', '', '', '', '', 'bottom', 4, 'publish', '2016-08-18 21:57:12', '2016-08-18 22:00:36', '::1', 1, 1),
(12, 'jobs', 'Jobs', 'Jobs section', '', '', '', '', 'bottom', 5, 'publish', '2016-08-18 21:57:29', '2016-08-18 22:00:36', '::1', 1, 1),
(13, 'privacy-amp-terms', 'Privacy & Terms', 'Privacy & Terms content', '', '', '', '', 'bottom2', 7, 'publish', '2016-08-18 21:59:10', '2016-08-18 22:00:36', '::1', 1, 1),
(14, 'become-a-driver', 'Become a Driver', 'Become a Driver blog', '', '', '', '', 'bottom2', 10, 'publish', '2016-08-18 21:59:24', '2016-08-18 22:00:36', '::1', 1, 1),
(15, 'become-a-partner-restaurant-signup', 'Become a Partner(Restaurant Signup)', 'Become a Partner(Restaurant Signup) content', '', '', '', '', 'bottom2', 11, 'publish', '2016-08-18 21:59:53', '2016-08-18 22:00:36', '::1', 1, 1);
