 <?php if ( $key=="cod"){ ?>

    <div class="form-group">

        <?php 
            echo CHtml::textField('order_change','',array(
                'placeholder'=>t("change? For how much?"),
//                'style'=>"width:200px;",
                'class'=>"form-control "
            ))?>
        
    </div>

 <?php } ?>