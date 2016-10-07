<?php if ( is_array( $data['prices'] ) && count( $data['prices'] ) >= 1 ){ ?>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <h5>
                <?php echo Yii::t("default","Special Instructions"); ?>
            </h5>
            <?php echo CHtml::textArea('notes',
                    isset($item_data['notes']) ? $item_data['notes'] : "",
                    array(
                        'class'       => 'form-control',
                        'placeholder' => Yii::t("default","Special Instructions")
                ));
            ?>

        </div>
    </div>
</div>
<?php } ?>