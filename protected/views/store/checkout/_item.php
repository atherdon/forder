<tr>
      <td>
          <strong>
              <?php echo $value['qty'] . 'x';  ?>
             
          </strong> 
          <?php echo $value['item_name']; ?>
          
          
          <?php echo $value['notes'] ?>
          
      </td>
      <td>
         
              
              <?php $this->renderPartial('/store/checkout/_price', array(
                  
                        'discount'         => $value['discount'],
                        'normal_price'     => $value['normal_price'],
                        'discounted_price' => $value['discounted_price'],

                    )); ?>
              
              
              <?php //echo $value['item_name']; ?>
          
      </td>
  </tr>