<div class="row">
    <div class="col-md-11 col-lg-offset-1">

        <div class="col-md-2 btn_padding0">
            <a class="btn_full_outline " href="<?php echo Yii::app()->createUrl('/store/profile/?tab=4&do=add')?>">
                <i class="icon-plus"></i>
                <?php echo t("Add New")?>   
            </a>
        </div>

        <br />
        <br />
        
        <form method="POST" id="frm-otable" class="frm-otable"> 
            <?php echo CHtml::hiddenField('otable_action','ClientCCList')?> 
            <?php echo CHtml::hiddenField('tbl','client_cc')?>

            <table class="otable table table-striped">
             <thead>
              <tr>
               <th><?php echo Yii::t("default","Card name")?></th>
               <th><?php echo Yii::t("default","Card number")?></th>
               <th><?php echo Yii::t("default","Expiration")?></th>
              </tr>
             </thead>
            </table>

        </form>
        <div class="clear"></div>
                
    </div>
</div>