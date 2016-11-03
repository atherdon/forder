<!-- Address modal -->   
<div class="modal fade" id="addressForm" 
     tabindex="-1" role="dialog" 
     aria-labelledby="addressModal" 
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup modal-details">
            
            <a href="#" class="close-link">
                <i class="icon_close_alt2"></i>
            </a>
            <!--onsubmit="return false;"-->
            <form id="addressModal"                  
                  class="frm-modal-enter-address popup-form" 
                  method="POST" 
                  
                  >
                
                
                <h4>
                    Enter your address below
                </h4>
                
                <?php echo CHtml::hiddenField('action','setAddress');?> 
                <?php if(0){
                    echo CHtml::hiddenField('web_session_id',
                    isset( $this->data['web_session_id'] ) ? $this->data['web_session_id'] : ''
                );
                    
                }?>
                

                
                  
                <?php echo CHtml::textField('client_address',
                                isset($_SESSION['kr_search_address']) ? $_SESSION['kr_search_address'] : '', 
                                array(
                                    'class'           => "form-control",
                                    'data-validation' => "required",
                                    'placeholder'     => "Enter a location"
                                ));
                ?> 
                  
                <button type="submit" class="btn_1 btn-submit">
                    <?php echo t("Submit")?>
                </button>
                
            </form>
        </div>
    </div>
</div><!-- End Register modal -->