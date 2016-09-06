<tr>
      <td>
          <strong>
              <?php echo $value['qty'] . 'x';  ?>
              <!--1x-->
          </strong> 
          <?php echo $value['item_name']; ?>
          
          
          <?php foreach ( $array as $key1 => $value1 ){ ?>
          
                
          
          <?php } ?>
          
          <strong style="margin-left:20px;">
              <?php echo $value['sub_item']['addon_qty'] . 'x';  ?>
              <?php echo $value['sub_item']['addon_name'] ?>
              <?php echo $value['sub_item']['addon_price'] ?>
              notes
              <!--1x-->
          </strong>
          <?php echo $value['sub_item'][''] ?>
          
          
          <?php echo $value['notes'] ?>
          
          <!--Enchiladas-->
      </td>
      <td>
          
          <?php $this->renderPartial('/store/checkout/_price', array(
                  
                        'discount'         => $value['discount'],
                        'normal_price'     => $value['normal_price'],
                        'discounted_price' => $value['discounted_price'],

                    )); ?>
          
          
          <?php foreach ( $array as $key1 => $value1 ){ ?>
          
                
          
          <?php } ?>
          
          
<!--          <strong class="pull-right">
              $11-->
              
              <?php $this->renderPartial('/store/checkout/_price', array(
                  
                        'discount'         => false,
                        'normal_price'     => $value['normal_price'],
                        'discounted_price' => false,

                    )); ?>
              
          <!--</strong>-->
          
          
          
          
      </td>
  </tr>