<div class="filter_type">
    <h6>
        Delivery Fee
    </h6>

    <ul>
        <li>
            <label>

                <?php 
                          echo CHtml::checkBox('filter_by[]',false,array(
                          'value'  => 'free-delivery',
                          'class'  => "filter_promo icheck"
                          ));

                          ?>
                <?php echo t("Free Delivery"); ?>

            </label>
        </li>

    </ul>
</div>