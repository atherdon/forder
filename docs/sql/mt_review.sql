-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 08:57 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `mt_review`
--

CREATE TABLE `mt_review` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL,
  `review` text NOT NULL,
  `rating` float(14,1) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `order_id` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_review`
--

INSERT INTO `mt_review` (`id`, `merchant_id`, `client_id`, `review`, `rating`, `status`, `date_created`, `ip_address`, `order_id`) VALUES
(1, 6, 1, 'THE BEST TACO EVER!', 4.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(2, 6, 2, 'Nice, nice, nice', 3.5, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(3, 6, 2, 'Again, nice!', 4.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(6, 7, 2, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(7, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(8, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(9, 7, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(10, 8, 1, 'not nice :(', 2.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(11, 8, 1, 'Again, nice!', 2.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', ''),
(12, 8, 1, 'Again, nice!', 5.0, 'publish', '2016-08-08 00:00:00', '127.0.0.1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_review`
--
ALTER TABLE `mt_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_review`
--
ALTER TABLE `mt_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
