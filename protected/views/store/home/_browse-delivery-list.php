

<!--CUISINE SECTIONS-->
<?php if ( $list = FunctionsV3::getCuisine() ): ?>

<div class="row row-delivery-links">


    <div class="col-md-12">
        <h1>
            Browse delivery restaurants
        </h1>
    </div>
    <div class="col-md-8">
        <h4>
            Browse delivery & takeout by cuisines
        </h4>
        
        <div class="col-md-6">
        <ul>
            <?php $x=1; ?>
            <?php foreach ( array_slice($list, 20, 18) as $val): ?>
            <!--<div class="col-md-6 col-sm-6 indent-5percent nopad">-->
            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
               class="<?php echo ($x%2)?"even":'odd'?>">
                <?php 
                $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                ?>
                </a>
            </li> 
            <!--</div>-->   
            <?php $x++; ?>
            <?php endforeach; ?>
        </ul> 
        </div>
        
        <div class="col-md-6">
            <ul>
                <?php $x=1; ?>
                <?php foreach ( array_slice($list, 38, 18) as $val): ?>
                <!--<div class="col-md-6 col-sm-6 indent-5percent nopad">-->
                <li>
                  <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
                     class="<?php echo ($x%2)?"even":'odd'?>">
                  <?php 
                  $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                  echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                  ?>
                  </a>
                </li> 
                <!--</div>-->   
                <?php $x++; ?>
                <?php endforeach; ?>
            </ul>       
        </div>
        
            
        
    </div>


    <div class="col-md-4">
        <h4>
            Browse by cities
        </h4>
        <ul>
            <?php $x=1;?>
            <?php foreach ( array_slice($list, 56) as $val): ?>

            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
               class="<?php echo ($x%2)?"even":'odd'?>">
                <?php 
                $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                ?>
                </a>
            </li>  

            <?php $x++;?>
            <?php endforeach;?>

            <li class="">
                <a href="<?php echo Yii::app()->createUrl('/store/browse/' )?>" class="clean">
                    Show more
                </a>
            </li>
        </ul>
    </div>

<?php endif;?>
