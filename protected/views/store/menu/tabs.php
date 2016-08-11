  <?php // $this->renderPartial('/store/menu/details-content', array(
             //       'merchant_id'     => $merchant_id,    
             //       'theme_hours_tab' => $theme_hours_tab,
             //       'phone'           => $phone
             //   ) ); ?>     

 <?php $this->renderPartial('/store/menu/restaurant-menu', array() ); ?>  

<?php if ( 0 ) { ?>
<div class="container margin_60_35">
<div class="row">
    <div class="col-md-12">
        <!--  Tabs -->   
        <ul class="nav nav-tabs nav-tabs-line"> <!--  -->
            <li class="active">
                <a href="#details" data-toggle="tab">
                    Details
                </a>
            </li>
            <li>
                <a href="#menu" data-toggle="tab">
                    Menu
                </a>
            </li>
            <li>
                <a href="#booking" data-toggle="tab">
                    Booking
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="details">
                
                <?php $this->renderPartial('/store/menu/details-content', array(
                    'merchant_id'     => $merchant_id,    
                    'theme_hours_tab' => $theme_hours_tab,
                ) ); ?>                 
                
            </div>
            <div class="tab-pane" id="menu">
                
                <?php //$this->renderPartial('/store/menu/restaurant-menu', array() ); ?>  
                
            </div>
            <div class="tab-pane" id="booking">
                
                <!--BOOK A TABLE-->
                    <?php if ($booking_enabled):?>
                    <li>
                        <?php $this->renderPartial('/front/merchant-book-table',array(
                          'merchant_id'=>$merchant_id
                        )); ?>        
                    </li>
                    <?php endif;?>
                <!--END BOOK A TABLE-->
            
            </div>
        </div>

    </div><!-- End col-md-12-->
</div><!-- End row-->         
</div><!-- End container-->         
<?php } ?>