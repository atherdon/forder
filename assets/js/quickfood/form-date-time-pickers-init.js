$(document).ready(function() {
    'use strict';

    var website_date_picker_format="yyyy-mm-dd";
//    if ( $("#website_date_picker_format").length ){
//    	website_date_picker_format= $("#website_date_picker_format").val();
//    }
//    console.log( website_date_picker_format );
    
    $('#date_booking').datepicker({
        format: website_date_picker_format,
        startDate: '0',
        todayHighlight: true,
        orientation: 'bottom'
    });
    
    $('#delivery_date').datepicker({
        format: website_date_picker_format,
        startDate: '0',
        todayHighlight: true,
        orientation: 'bottom'
    });
    $('#booking_time').timepicker({
        timeFormat: 'g:ia',
        minTime: '8:00am',
        maxTime: '5:00pm'
        
//        'disableTimeRanges': [
//            ['3:00am', '4:30am'], 
//            ['5:00pm', '8:00pm']
//        ]
    });
    
    $('#delivery_time').timepicker({
        timeFormat: 'g:ia',
        minTime: '8:00am',
        maxTime: '5:00pm'
        
    });
    
    $('#delivery_asap').on('ifToggled', function(event){
    
        if( $(this).is(":checked") ){
            $('#delivery_time').hide();
        } else {
            $('#delivery_time').show();
        }
        
    });
    
    
//https://github.com/jonthornton/jquery-timepicker

});