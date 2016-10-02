
-- --------------------------------------------------------

--
-- Structure for view `mt_view_ratings`
--
DROP TABLE IF EXISTS `mt_view_ratings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mt_view_ratings`  AS  select `mt_rating`.`merchant_id` AS `merchant_id`,(sum(`mt_rating`.`ratings`) / count(0)) AS `ratings` from `mt_rating` group by `mt_rating`.`merchant_id` ;
