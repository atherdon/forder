<!--FILTER MERCHANT NAME-->       
<?php if (!empty($restaurant_name)):?>   
 
    <a href="<?php echo FunctionsV3::clearSearchParams('restaurant_name')?>">[<?php echo t("Clear")?>]</a>
    <!--@TODO check links when you add things.-->
<?php endif;?>    

<!--<div class="filter-box">-->
    
    <h6>
        <?php echo t("Search by name")?>
    </h6>
    

    <form method="POST" id="restaurant-name" >
        <!--onsubmit="return research_merchant();"-->
        <?php echo CHtml::textField('restaurant_name',$restaurant_name,array(
                   'required' => true,
//                           'placeholder'=>t("enter restaurant name")
              ));
        ?>
        <button type="button" class="" id="search-init">
            <i class="icon-search"></i>
        </button>    

     </form>
    
<!--END FILTER MERCHANT NAME-->  