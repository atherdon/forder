<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-12">
                        
            <div class="tabs-wrapper-styles ">
                               
                <!--  Tabs -->   
                <ul class="nav nav-tabs nav-justified nav-tabs-line" role="tablist">
                    <li class="active" role="presentation">
                        <a href="#profile"     data-toggle="tab">
                           <?php echo t("Profile")?>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#addressbook" data-toggle="tab">
                            <?php echo t("Address Book")?>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#orderhistory" data-toggle="tab">
                            <?php echo t("Order History")?>
                        </a>
                    </li>
                     <li role="presentation">
                        <a href="#creditcards" data-toggle="tab">
                            <?php echo t("Credit Cards")?>
                        </a>
                    </li>
                    
                </ul>

                
                
                
                <?php  $this->renderPartial('/store/profile/tabs-content', array(
//                            'merchant_id'       => $merchant_id,    
//                            'theme_hours_tab'   => $theme_hours_tab,
//                            'theme_reviews_tab' => $theme_reviews_tab,
//                            'phone'             => $phone,
//                            'ratings'           => $ratings,
//                            'photo_enabled'     => $photo_enabled,
//                            'theme_info_tab'    => $theme_info_tab,
                        ) ); ?> 

               
            </div>

        </div><!-- End col-md-12-->
    </div><!-- End row-->         
</div><!-- End container-->        