<?php 
if( isset($_GET['tab']) ) {
    $tab_active = $_GET['tab'] ;  
    
} else {
    
    $tab_active = 1 ;   
}
?>
<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-12">
                        
            <div class="tabs-wrapper-styles ">
                               
                <!--  Tabs -->   
                <ul class="nav nav-tabs nav-justified nav-tabs-line" role="tablist">
                    
                    <li <?php if( $tab_active == '2' ) { echo '  '; } else { echo ' class="active" '; } ; ?>
                        role="presentation">
                        <a href="#profile"     data-toggle="tab">
                           <?php echo t("Profile")?>
                        </a>
                    </li>
                    <li role="presentation" 
                        <?php if( $tab_active == '2' ) { echo ' class="active" '; } else { echo '  '; } ; ?>>
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

                            'info'        => $info,
                            'tabs'        => $tabs,
                            'disabled_cc' => $disabled_cc,
                            'tab_active'  => $tab_active
                        
                        ) ); ?> 

               
            </div>

        </div><!-- End col-md-12-->
    </div><!-- End row-->         
</div><!-- End container-->        