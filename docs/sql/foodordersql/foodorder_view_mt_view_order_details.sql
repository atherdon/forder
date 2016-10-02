
-- --------------------------------------------------------

--
-- Structure for view `mt_view_order_details`
--
DROP TABLE IF EXISTS `mt_view_order_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mt_view_order_details`  AS  select `a`.`id` AS `id`,`a`.`order_id` AS `order_id`,`a`.`client_id` AS `client_id`,`a`.`item_id` AS `item_id`,`a`.`item_name` AS `item_name`,`a`.`order_notes` AS `order_notes`,`a`.`normal_price` AS `normal_price`,`a`.`discounted_price` AS `discounted_price`,`a`.`size` AS `size`,`a`.`qty` AS `qty`,`a`.`cooking_ref` AS `cooking_ref`,`a`.`addon` AS `addon`,`a`.`ingredients` AS `ingredients`,`a`.`non_taxable` AS `non_taxable`,(select `mt_order`.`merchant_id` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `merchant_id`,(select `mt_order`.`status` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `status`,(select `mt_order`.`date_created` from `mt_order` where (`mt_order`.`order_id` = `a`.`order_id`) limit 0,1) AS `date_created` from `mt_order_details` `a` ;
