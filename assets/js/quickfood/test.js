jQuery(document).ready(function() {
    
//    if ( formid ) {
//        var form_id=formid;
//    } else {
//        var form_id=$("form").attr("id");    
//    }
//    console.log(form_id);

//     $.validate({ 	
//            language : jsLanguageValidator,
//            language : jsLanguageValidator,
//        form : '#addressModal',    
//        onError : function() {      
//        },
//        onSuccess : function() {     
//            
//          console.log('123');
////          form_submit('forms');
//          return false;
//        }  
//    })  

//    $(document).on('submit','#forms',function(){
//        // code
//        console.log('123');
//    });
    
    
    
    
});

function form_submit( formid ){
//    rm_notices();
    
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 

    var params = $( "#" + form_id ).serialize();	
//    console.log( params );
    var action = $('#'+form_id).find("#action").val();
    //we don't have recapcha right now, so we not cover this in js
    
    console.log( action );
    
    $.ajax({    
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',       
        success: function(data){ 
                
                console.log(data);
                
        	if (data.code==1){
        		
        		
//                    uk_msg_sucess(data.msg);
        		
               		
        		if ( action=="clientLogin"){
                            if ( $("#single_page").exists() ){
                                window.location.href=sites_url+"/store";
                                return;
                            }
        		}
        		
        	
        		        		
            }
 	
        	
        }, 
        error: function(){	        	
//        	btn.attr("disabled", false );
//        	btn.val(btn_cap);
//        	busy(false);        	
//        	
//        	$(".place_order").css({ 'pointer-events' : 'auto' });
//        	uk_msg("ERROR");
        }		
    });
 
    
    
}

function form_submit2( formid ){
//    rm_notices();
    
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 

    var params = $( "#" + form_id ).serialize();	
//    console.log( params );
    var action = $('#'+form_id).find("#action").val();
    //we don't have recapcha right now, so we not cover this in js
    
    console.log( params );
    console.log( action );
    
    $.ajax({    
        type: "POST",
        url: ajax_url,
        data: params,
        dataType: 'json',       
        success: function(data){ 
                
                console.log(data);
                
        	if (data.code==1){
        		
        		
//                    uk_msg_sucess(data.msg);
        		
               		
//        		if ( action=="clientLogin"){
//                            if ( $("#single_page").exists() ){
//                                window.location.href=sites_url+"/store";
//                                return;
//                            }
//        		}
        		
//        		if ( action == "clientRegistrationModal" ){
//                            
//                            if ( $("#verification").exists() ){
//                                window.location.href = sites_url + "/store/verification/checkout/true/id/"+data.details;
//                                return;
//                            }  
//                            if ( $("#theme_enabled_email_verification").exists() ){
//                                window.location.href = sites_url + "/store/emailverification/checkout/true/id/"+data.details;
//                                return;
//                            } 
//                            
//        		}
        		
        	
        		        		
            }
 	
        	
        }, 
        error: function(){	        	
//        	btn.attr("disabled", false );
//        	btn.val(btn_cap);
//        	busy(false);        	
//        	
//        	$(".place_order").css({ 'pointer-events' : 'auto' });
//        	uk_msg("ERROR");
        }		
    });
 
    
    
}


function form_submit3( formid ){
//    rm_notices();
    
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 

    var params = $( "#" + form_id ).serialize();	
//    console.log( params );
    var action = $('#'+form_id).find("#action").val();
    //we don't have recapcha right now, so we not cover this in js
    
    console.log( params );
    console.log( action );
    
    $.ajax({    
        type     : "POST",
        url      : ajax_url,
        data     : params,
        dataType : 'json',       
        success  : function(data){ 
                
            console.log(data);
                
            if ( data.code==1 ){
        		
        		        		
            }
 	
        	
        }, 
        error: function(){	        	

        }		
    });
 
    
    
}



function form_submit4( formid ){
//    rm_notices();
    
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 

    var params = $( "#" + form_id ).serialize();	
//    console.log( params );
    var action = $('#'+form_id).find("#action").val();
    //we don't have recapcha right now, so we not cover this in js
    
    console.log( params );
    console.log( action );
    
    $.ajax({    
        type     : "POST",
        url      : ajax_url,
        data     : params,
        dataType : 'json',       
        success  : function(data){ 
                
            console.log(data);
                
            if ( data.code==1 ){
        		
        		        		
            }
 	
        	
        }, 
        error: function(){	        	

        }		
    });
 
    
    
}


function form_submit5( formid ){
//    rm_notices();
    
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 

    var params = $( "#" + form_id ).serialize();	
//    console.log( params );
    var action = $('#'+form_id).find("#action").val();
    //we don't have recapcha right now, so we not cover this in js
    
    console.log( params );
    console.log( action );
    
//    $.ajax({    
//        type     : "POST",
//        url      : ajax_url,
//        data     : params,
//        dataType : 'json',       
//        success  : function(data){ 
//                
//            console.log(data);
//                
//            if ( data.code==1 ){
//        		
//        		        		
//            }
// 	
//        	
//        }, 
//        error: function(){	        	
//
//        }		
//    });
 
    
    
}