jQuery(document).ready(function($) {
    
    $( document ).on( "click", ".clear-cart", function() {
        clearCart();
    }); 

    
});

function clearCart()
{	
    var ans = confirm(js_lang.trans_4); 
    
    if (!ans){
        return;
    }
    
    var params="action=clearCart&currentController=store";	
    busy(true);
    
    $.ajax({    
        type     : "POST",
        url      : ajax_url,
        data     : params,
        dataType : 'json',       
        success  : function( data ){ 
            
            console.log(data);
//            busy(false);
            load_item_cart();    	
        }, 
        error: function(){	  
            
//            busy(false); 
        }		
    });
}