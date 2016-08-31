<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" 
         data-image-src="<?php echo Widgets::quickImagesPath(); ?>sub_header_cart.jpg" 
         data-natural-width="1400" 
         data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>
                <?php echo $h1; ?>
            </h1>
            <h3>
                <?php echo $sub_text; ?>
            </h3>   
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">
                      <strong>1.</strong>
                      Your details
                  </div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">
                      <strong>2.</strong>
                      Payment
                  </div>
                    <div class="progress">
                        <div class="progress-bar"></div>

                    </div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>

              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">
                      <strong>3.</strong> 
                      Finish!
                  </div>
                  <div class="progress">
                      <div class="progress-bar"></div>
                          
                  </div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>  
             </div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->