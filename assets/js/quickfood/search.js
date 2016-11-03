jQuery(document).ready(function($) {
    
   $( document ).on( "click", ".display-type", function() {   	   
        $("#display_type").val( $(this).data("type") );   	   
        research_merchant(); 
   });    
        
       
    $('.filter_by').on('ifChecked', function(event){
       research_merchant();       
   });
   
   $('.filter_by').on('ifUnchecked', function(event){
       research_merchant();   
   });     
      
   $('.filter_by_radio').on('ifChecked', function(event){   	
       ////console.debug('d2');
       $(".filter_minimum_clear").show();   
       research_merchant();   
   });     
      
   $( document ).on( "click", ".button_filter", function() {
        $(".frm_search_name_clear").show();
        research_merchant(); 
   });

   $( document ).on( "change", ".sort-results", function() {
       
        var sort_filter = $(this).val();   	   
        if ( sort_filter ){
//           dump(sort_filter);   	   
           $("#sort_filter").val(sort_filter);      	   
           research_merchant();   	  
        }   	   
   });
   
//   @TODO change things with this filter promo - one checkbox stuff.
    $('.filter_promo').on('ifChecked', function(event){      
      $(".non-free").fadeOut("fast");
   });
   
   $('.filter_promo').on('ifUnchecked', function(event){       
       $(".non-free").fadeIn("fast");
   });   

    $(document).on('click','#search-init',function(){
       console.log('click'); 
       // code
//        console.log('123');
//console.log( $("#restaurant_name").val() );
        research_merchant();
        return false;
    });
    
//    $(document).on('submit','#restaurant-name',function(){
//        
//    });
    
    
    
    
});


function research_merchant()
{
    var filter_delivery_type = '';
    var filter_cuisine       = '';
    var filter_promo         = '';
    var filter_minimum       = '';
    var filter_name          = '';
    var filter_rating        = '';	
	/*$('input:checkbox.filter_delivery_type').each(function () {
        var sThisVal = (this.checked ? $(this).val() : "");
        if ( sThisVal !=""){
            filter_delivery_type+=sThisVal+",";
        }
    });*/	
    
    
    $('input:checkbox.filter_cuisine').each(function () {
        var sThisVal = (this.checked ? $(this).val() : "");
        if ( sThisVal !=""){
            filter_cuisine+=sThisVal+",";
        }
    });
    
//    console.log( filter_cuisine );
    
        
    $('input:checkbox.filter_promo').each(function () {
        var sThisVal = (this.checked ? $(this).val() : "");
        if ( sThisVal !=""){
            filter_promo+=sThisVal+",";
        }
    });
    
    
    $('input:checkbox.filter_rating').each(function () {
        var sThisVal = (this.checked ? $(this).val() : "");
        if ( sThisVal !=""){
            filter_rating+=sThisVal+",";
        }
    });
    
//    console.log( filter_promo );
    
    filter_minimum = $(".filter_minimum:checked").val(); 
    filter_name    = $("#filter_name").val();
    if (typeof filter_name === "undefined" || filter_name == null ) {  
    	filter_name='';
    }	        
    
//    console.log( filter_minimum );
//    console.log( filter_name );
    filter_delivery_type = $(".filter_delivery_type:checked").val();
    
//    console.log( filter_delivery_type );
//    console.log( filter_delivery_type )
    var new_params='';
    
    if( filter_delivery_type ){
        new_params+="&filter_delivery_type="+filter_delivery_type;
    }
    
//    if (!empty(filter_delivery_type)){
//        new_params+="&filter_delivery_type="+filter_delivery_type;
//    }
    
//    console.log( new_params );
    
    if ( filter_cuisine ){
        new_params+="&filter_cuisine="+filter_cuisine;
    }
    
//    console.log( new_params );
    
    if ( filter_promo ){
       new_params+="&filter_promo="+filter_promo;
    }
    
    if ( filter_rating ){
       new_params+="&filter_rating=" + filter_rating;
    }
    
//    console.log( new_params );
    
    if ( filter_minimum ){
       new_params+="&filter_minimum="+filter_minimum;
    }
    
//    console.log( new_params );
    
    if ( filter_name ){
       new_params+="&filter_name="+filter_name;
    }
    
//    console.log( new_params );
    
    sort_filter=$("#sort_filter").val();    
    if ( sort_filter ){
        new_params+="&sort_filter="+sort_filter;   
    }
    
//    console.log( new_params );
    
    if (  $("#display_type").val() ){
    	new_params+="&display_type="+$("#display_type").val();
    }
    
//    console.log( new_params );
//    console.log( $("#restaurant_name").val() );
        
    if ( $("#restaurant_name").val() ){
    	new_params+="&restaurant_name="+$("#restaurant_name").val();
    }
    
//    console.log( new_params );
        
    
//    window.onbeforeunload = function() {
//        return "Dude, are you sure you want to leave? Think of the kittens!";
//    }
        
//    dump(new_params);
    
    window.location.href = $("#current_page_url").val() + new_params ;
    return false;    
}