<!-- Address modal -->   
<div class="modal fade" id="addressForm" 
     tabindex="-1" role="dialog" 
     aria-labelledby="addressModal" 
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            
            <a href="#" class="close-link">
                <i class="icon_close_alt2"></i>
            </a>
            
            <form id="addressModal"                  
                  class="frm-modal-enter-address popup-form" 
                  method="POST" 
                  onsubmit="return false;"
                  >
                
                
                <h4>
                    Enter your address below
                </h4>
                <?php echo CHtml::hiddenField('action','setAddress');?> 
                
                <?php if ( 0 ) { ?>
                  <!--id="frm-modal-enter-address" -->
                <?php //echo CHtml::hiddenField('action','setAddress');?> 
                <?php echo CHtml::hiddenField('web_session_id',
                    isset( $this->data['web_session_id'] ) ? $this->data['web_session_id'] : ''
                );?>
                  
                <?php } ?>  
                
                  
                <?php echo CHtml::textField('client_address',
                                isset($_SESSION['kr_search_address']) ? $_SESSION['kr_search_address'] : ''
                                ,array(
                                    'class'           => "form-control form-white",
                                    'data-validation' => "required",
                                    'placeholder'     => "Enter a location"
                            ));
                ?> 
                  
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Submit")?>
                </button>

                
            </form>
        </div>
    </div>
</div><!-- End Register modal -->