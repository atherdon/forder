<div class="margin_60_35">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            <div class="box_style_2" id="booking_process">
                <h2 class="inner">
                    <?php echo t("Booking Information")?>
                </h2>
                
                
                <form class="forms" id="frm-book" onsubmit="return false;">
                    
                    <?php echo CHtml::hiddenField('action','bookATable')?>
                    <?php echo CHtml::hiddenField('currentController','store')?>
                    <?php echo CHtml::hiddenField('merchant-id',$merchant_id)?>
                    
                    <div class="form-group">
                        <label>
                            <?php echo t("Number Of Guests")?>
                        </label>
                        <?php echo CHtml::textField('number_guest', '', array(
                                        'class'       => 'numeric_only form-control',
                                        'required'    => true,

                                ))?>

                    </div>

                    <div class="form-group">
                        <label>
                            <?php echo t("Date Of Booking")?>
                        </label>
                        <?php echo CHtml::hiddenField('date_booking')?>
                        <?php echo CHtml::textField('date_booking1', '', array(
                                            'class'    => 'date_booking form-control',
                                            'required' => true,
                                            'data-id'  => 'date_booking'
                                    )); ?>
                        
                    </div>
                    
                    

                    
                    <hr>
                    <div class="form-group">
                        <label>
                            <?php echo t("Time")?>
                        </label>
                        <?php echo CHtml::textField('booking_time',''			 
                                    ,array(
                                    'class'=>'form-control',
                                    'required'=>true,
                                    ));
                        ?>
                        
                        
                        
<!--                        <select class="form-control" name="delivery_schedule_time" id="delivery_schedule_time">
                                <option value="" selected>Select time</option>
                                <option value="11.30am">11.30am</option>
                                <option value="11.45am">11.45am</option>
                                <option value="12.15am">12.15am</option>
                                <option value="12.30am">12.30am</option>
                                <option value="12.45am">12.45am</option>
                                <option value="01.00pm">01.00pm</option>
                                <option value="01.15pm">01.15pm</option>
                                <option value="01.30pm">01.30pm</option>
                                <option value="01.45pm">01.45pm</option>
                                <option value="02.00pm">02.00pm</option>
                                <option value="07.00pm">07.00pm</option>
                                <option value="07.15pm">07.15pm</option>
                                <option value="07.30pm">07.30pm</option>
                                <option value="07.45pm">07.45pm</option>
                                <option value="08.00pm">08.00pm</option>
                                <option value="08.15pm">08.15pm</option>
                                <option value="08.30pm">08.30pm</option>
                                <option value="08.45pm">08.45pm</option>
                        </select>-->
                        

                    </div>

                
                    <div class="form-group">
                        <label>
                            <?php echo t("Name")?>
                        </label>
                        <?php echo CHtml::textField('booking_name',''			 
                                ,array(
                                'class'=>'form-control',
                                'required'=>true,
                                ))?>

                    </div>
                    
                    
               
                    
                    <div class="form-group">
                        <label>
                            <?php echo t("Email")?>
                        </label>
                        <?php echo CHtml::textField('email',''			 
                                ,array(
                                'class'=>'form-control',
                                'required'=>true,
                                ))?>

                    </div>


                    <div class="form-group">
                        <label>
                            <?php echo t("Mobile")?>
                        </label>
                        
                        <?php echo CHtml::textField('mobile',''			 
                                ,array(
                                'class'=>'form-control',
                                'required'=>true,
                                ))?>

                    </div>

                    <hr>
                    
                    <div class="row">
                        <div class="col-md-12">

                            <label>
                                <?php echo t("Your Instructions")?>
                            </label>
                            <?php echo CHtml::textArea('booking_notes', '', array(
                                            'class'=>'form-control',
                                            'placeholder'=>'Ex. Allergies, cash change...'
                            )); ?>


                        </div>

                    </div>
                    <hr>
                    <div class="row">
                       <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="<?php echo t("Book a Table")?>" class="btn_full">
                            </div>
                             

                        </div>
                    </div>
                    
                    
                    
                </form>
                

            </div><!-- End box_style_1 -->
                                
            
        </div>
    </div>
</div>