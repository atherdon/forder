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

function form_submit(){
    rm_notices();
    if ( formid ) {
        var form_id=formid;
    } else {
        var form_id=$("form").attr("id");    
    } 
    
    console.log('zzz');
    
//    var btn=$('#'+form_id+' input[type="submit"]');   	
//    var btn_cap=btn.val();
//    btn.attr("disabled", true );
//    btn.val(js_lang.processing);
//    busy(true);    
//    
//    var params=$("#"+form_id).serialize();	
//    console.log( params );
    
}