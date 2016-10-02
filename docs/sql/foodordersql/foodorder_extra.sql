
--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `mt_category`
--
ALTER TABLE `mt_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `mt_client`
--
ALTER TABLE `mt_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  ADD PRIMARY KEY (`cook_id`);

--
-- Indexes for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `mt_currency`
--
ALTER TABLE `mt_currency`
  ADD PRIMARY KEY (`currency_code`);

--
-- Indexes for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  ADD PRIMARY KEY (`fax_package_id`);

--
-- Indexes for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  ADD PRIMARY KEY (`ingredients_id`);

--
-- Indexes for table `mt_item`
--
ALTER TABLE `mt_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `mt_languages`
--
ALTER TABLE `mt_languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  ADD PRIMARY KEY (`mt_id`);

--
-- Indexes for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  ADD PRIMARY KEY (`merchant_user_id`);

--
-- Indexes for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_offers`
--
ALTER TABLE `mt_offers`
  ADD PRIMARY KEY (`offers_id`);

--
-- Indexes for table `mt_option`
--
ALTER TABLE `mt_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_order`
--
ALTER TABLE `mt_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session` (`session`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  ADD PRIMARY KEY (`stats_id`);

--
-- Indexes for table `mt_packages`
--
ALTER TABLE `mt_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_rating`
--
ALTER TABLE `mt_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_review`
--
ALTER TABLE `mt_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_size`
--
ALTER TABLE `mt_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  ADD PRIMARY KEY (`broadcast_id`);

--
-- Indexes for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  ADD PRIMARY KEY (`sms_package_id`);

--
-- Indexes for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  ADD PRIMARY KEY (`sub_item_id`);

--
-- Indexes for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  ADD PRIMARY KEY (`voucher_id`),
  ADD KEY `voucher_name` (`voucher_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  ADD PRIMARY KEY (`withdrawal_id`);

--
-- Indexes for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  ADD PRIMARY KEY (`zipcode_id`),
  ADD KEY `country_code` (`country_code`),
  ADD KEY `area` (`area`),
  ADD KEY `stree_name` (`stree_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  MODIFY `admin_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  MODIFY `booking_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_category`
--
ALTER TABLE `mt_category`
  MODIFY `cat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mt_client`
--
ALTER TABLE `mt_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  MODIFY `cc_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  MODIFY `cuisine_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  MODIFY `dish_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  MODIFY `fax_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  MODIFY `ingredients_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_item`
--
ALTER TABLE `mt_item`
  MODIFY `item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mt_languages`
--
ALTER TABLE `mt_languages`
  MODIFY `lang_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  MODIFY `merchant_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  MODIFY `mt_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  MODIFY `merchant_user_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_offers`
--
ALTER TABLE `mt_offers`
  MODIFY `offers_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_option`
--
ALTER TABLE `mt_option`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;
--
-- AUTO_INCREMENT for table `mt_order`
--
ALTER TABLE `mt_order`
  MODIFY `order_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  MODIFY `stats_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_packages`
--
ALTER TABLE `mt_packages`
  MODIFY `package_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating`
--
ALTER TABLE `mt_rating`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_review`
--
ALTER TABLE `mt_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_size`
--
ALTER TABLE `mt_size`
  MODIFY `size_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  MODIFY `sms_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  MODIFY `sub_item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  MODIFY `withdrawal_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  MODIFY `zipcode_id` int(14) NOT NULL AUTO_INCREMENT;