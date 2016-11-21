jQuery(document).ready(function($) {
    
    $( document ).on( "click", ".clear-cart", function() {
        
//        clearCart();
        alert("click on");

        $('#cart-items').fadeOut( 800 );
        $('#cart-total .item-value').html("0");
        return false;
        
    }); 


    bootbox.confirm({
        
        message: "Are you sure that you want to clear cart?",
        
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        
        callback: function (result) {
            
            if( result ){
//                clearCart2();
            }
            
            console.log('This was logged in the callback: ' + result);
            return false;
        }
    });
    
    
    
    var item_id = false;
    bootbox.confirm({
        
        message: "Do you want to remove this item from cart?",
        
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        
        callback: function (result) {
            
            if( result ){
//                item_id ->>>ajax call
            }
            
            console.log('This was logged in the callback: ' + result);
            return false;
        }
    });



    
});

function clearCart()
{	
    var ans = confirm(js_lang.trans_4); 
    
    if (!ans){
        return;
    }
    
    var params = "action=clearCart&currentController=store";	
//    busy(true);
    
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

//--------------------------//
function emptyOrder(){
    
    //beginning
    
    //clear order
    
    
}
//--------------------------//
function addedToCart(){
    
    //delete
    
    //edit
    
}

function clearOrder(){
    //modal launch
}

function deleteItem(){
    //modal launch    
}

function changeTotal(){
    
}

function changeAddress(){
    
}

function changeCheckoutButtonState(){
    
    var flag = false;
    
    if( flag ){
    
        
    } else {
        
        
    }
    
    
}