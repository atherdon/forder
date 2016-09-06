<tr>
      <td>
          <strong>
              <?php echo $value['qty'] . 'x';  ?>
              <!--1x-->
          </strong> 
          <?php echo $value['item_name']; ?>
          
          
          <?php echo $value['notes'] ?>
          <!--Enchiladas-->
      </td>
      <td>
          <!--<strong class="pull-right">-->
              
              <?php $this->renderPartial('/store/checkout/_price', array(
                  
                        'discount'         => $value['discount'],
                        'normal_price'     => $value['normal_price'],
                        'discounted_price' => $value['discounted_price'],

                    )); ?>
              
              
              <?php //echo $value['item_name']; ?>
          <!--</strong>-->
      </td>
  </tr>