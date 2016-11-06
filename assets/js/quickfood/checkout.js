jQuery(document).ready(function() {	
    

    $('#payment_opt').on('ifChecked', function(event){   
        
        var value = $(this).val();
        if( value == 'cod' ){
            
            $('.reveal-if-active.cod').removeClass('hide').fadeIn('500');
            
            
        }

   });     
   
   $('#payment_opt').on('ifUnchecked', function(event){   
        
        var value = $(this).val();
        if( value == 'cod' ){
            
            $('.reveal-if-active.cod').addClass('hide').fadeOut('500');
            
            
        }

   });    
   
   
   $('.tips-el').on('ifChecked', function(event){           

        var value          = $(this).val();
        var cart_amount    = $('#subtotal_order2');
        
        var tip_percentage =  $("#cart_tip_percentage"),
            tip_value          = $("#cart_tip_value");
            
//            var tip_percentage =  $("#cart_tip_percentage").val(tip_percentage),
//            value = $("#cart_tip_value").val(amount);
        
        if( value === 'cash' ){
        
            $('#cart_tip_value').removeClass('hide').fadeIn('500');
            
            var html       = '<div> Tip (' + value*100 + ')%</div>';
            
            var tip_amount = 10;
            html += '<div>' + tip_amount + '</div>'; 
            
            tip_percentage.val( value*100 );
            tip_value.val( tip_amount );
            
//            display_tip2( value, tip_amount );
//            $(".tip_percentage").html(tip_percentage+"%");
            
        } else {
            
            value = parseFloat(value, 10);
            cart_amount = 50.7;
            var tip_amount = cart_amount * value ;
            tip_amount = Math.round(( tip_amount )*10)/10 ;
            
            tip_percentage.val( value*100 );
            tip_value.val( tip_amount );

//            console.log( tip_percentage );
//            console.log( tip_value );
           
           
//            console.log( tip_amount );
//            console.log( value );
//            console.log( parseInt(value, 10) )

            

            if( cart_amount ){
                
            } else {
                alert('ISSUUUE');
            }

        }
        
        

   });     
   
   $('.tips-el').on('ifUnchecked', function(event){   

        var value = $(this).val();
        if( value === 'cash' ){
            $('#cart_tip_value').addClass('hide').fadeOut('500');
      
        } else {
            
            
//            cons
        }

   });    
   
   
   
    
//    $( document ).on( "click", ".tips", function() {		
//
//        $("#tip_value").val('');
//
//        var type = $(this).data("type");
//
//        $(".tips").removeClass("active");
//        $(this).addClass("active");
//
//        if ( type=="tip"){
//            
//            var tip=$(this).data("tip");			
//
//            var tip_percentage = tip*100;
//            $(".tip_percentage").html(tip_percentage+"%");
//
//            var cart_subtotal=$("#subtotal_order2").val()
//            var tip_raw = tip*cart_subtotal;
//            dump(tip_raw.toFixed(2));		
//
//            display_tip(tip_percentage,tip_raw.toFixed(2));
//                
//        } else {
//            
//                //$(".tip_percentage").html(0+"%");			
//            $(".tip_percentage").html(0+"%");
//            display_tip(0,0);			
//            $(".added_tip_wrap").remove();
//            
//        }
//        
//        
//    });
			
//    $( "#tip_value" ).keyup(function() {
//        
//        var tip_raw=parseFloat($(this).val());		 
//        if (isNaN(tip_raw)){
//            tip_raw=0;
//        }
//        
//        dump(tip_raw);
//        $(".tips").removeClass("active");
//
//        var cart_subtotal=parseFloat($("#subtotal_order2").val());
//        dump(cart_subtotal);
//
//        var reverse_percentage= (tip_raw/cart_subtotal)*100;
//        dump(reverse_percentage);
//        $(".tip_percentage").html(reverse_percentage.toFixed()+"%");
//
//        display_tip(reverse_percentage.toFixed(),tip_raw.toFixed(2));
//        
//    });
	
	
//    if ( $("#default_tip").exists() ){
//        
//        var default_tip=$("#default_tip").val();		
//        $( ".tips" ).each(function( index ) {
//                var tip=$(this).data("tip");
//                dump(tip);
//                if ( default_tip == tip){				
//
//                        $(".tips").removeClass("active");
//                $(this).addClass("active");
//
//                        var tip_percentage = tip*100;
//                        $(".tip_percentage").html(tip_percentage+"%");
//
//                        setTimeout(function() { 
//                                var cart_subtotal=$("#subtotal_order2").val();
//                                var tip_raw = tip*cart_subtotal;
//                                dump("->"+tip_raw.toFixed(2));							
//                                display_tip(tip_percentage,tip_raw.toFixed(2));				
//                        },2100);
//
//                        return false;
//                }
//        });
//    }
		
}); /*end docu*/


//function display_tip2(){
//    
//}


function display_tip(tip_percentage,amount)
{
    
    $("#cart_tip_percentage").val(tip_percentage);
    $("#cart_tip_value").val(amount);

    var admin_currency_set=$("#admin_currency_set").val();

    var sub_total= $("#subtotal_order2").val();
    var subtotal_extra_charge= parseFloat($("#subtotal_extra_charge").val()) + 0;	

    if (isNaN(subtotal_extra_charge)){
            subtotal_extra_charge=0;
    }
    if (isNaN(amount)){
            amount=0;
    }
    if (isNaN(subtotal_extra_charge)){
            subtotal_extra_charge=0;
    }	
	
    dump(sub_total);
    dump(amount);
    dump(subtotal_extra_charge);

    var cart_total= parseFloat(sub_total) + parseFloat(amount) + parseFloat(subtotal_extra_charge);
    dump(cart_total);
    cart_total=cart_total.toFixed(2);

    var cart_total_display='';
    var amount_display='';
	
    if ( $("#admin_currency_position").val()=="right" ){
            cart_total_display=cart_total+" "+admin_currency_set;
            amount_display = amount+" "+admin_currency_set;
    } else {
            cart_total_display=admin_currency_set+" "+cart_total
            amount_display = admin_currency_set+" "+amount;
    }
		
	
    var html='';
    /*html+='<div class="added_tip_wrap">';
    html+='<div class="a">'+js_lang.trans_45+' ('+tip_percentage+'%)</div>';
    html+='<div class="manage">';
      html+='<div class="b">'+amount_display+'</div>';
    html+='</div>';
    html+='<div>';*/
	
    html+='<div class="row added_tip_wrap">';
	    html+='<div class="col-md-6 col-xs-6 text-right">';
	    html+= js_lang.trans_45+" ("+tip_percentage+"%)";
	    html+='</div>';
	    html+='<div class="col-md-6 col-xs-6 text-right">';
	    html+= amount_display;
	    html+='</div>';
    html+='</div>';
	
    $(".added_tip_wrap").remove();
    $(".cart_total_wrap").before(html);

    $(".cart_total").html(cart_total_display);
        
}
