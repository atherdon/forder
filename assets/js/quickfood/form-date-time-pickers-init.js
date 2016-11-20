$(document).ready(function() {
    'use strict';

    var website_date_picker_format = "yyyy-mm-dd";
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
    

    var disable_weekdays = $('#delivery_date').data().disableweekdays;
    var disable_holidays = $('#delivery_date').data().disableholidays;
    
//    console.log(disable_weekdays.toString());
//    console.log(disable_holidays);
    
    $('#delivery_date').datepicker({
        format: website_date_picker_format,
        startDate: '0',
        todayHighlight: true,
        orientation: 'bottom',
        datesDisabled:      disable_holidays,
        daysOfWeekDisabled: disable_weekdays.toString()
        
    });
    
    $('#delivery_date').datepicker()
    .on('change', function(e) {
        
//        var pickedDate = $(this).datepicker('getDate');
        
        var currentDate     = $(this).datepicker('getDate');
        var weekDay         = new Date( currentDate ).getDay();
        
        var week_schedule1  = $('#delivery_time').data().weekschedule;
        
        var updated_options = false;
               
        $(week_schedule1).each(function(i,v){
        
            if( i === weekDay ) { updated_options = v; }
        
        });
        
//        init_time_picker( updated_options );
//        $('#delivery_time').timepicker('remove');
        
        if( updated_options.minTime ){
        
            var TimeOptions2 = {
                timeFormat: 'g:ia',
                minTime: updated_options.minTime,
                maxTime: updated_options.maxTime
            };

            if( updated_options.disableTimeRanges ){
                TimeOptions2.disableTimeRanges = updated_options.disableTimeRanges;
            }

//            console.log( TimeOptions2 );
            
            $('#delivery_time').timepicker('remove');
            $('#delivery_time').timepicker( TimeOptions2 );

        }
        
               

        // `e` here contains the extra attributes
    });
    
    var week_schedule            = $('#delivery_time').data().weekschedule;
    var current_weekday_schedule = $('#delivery_time').data().currentweekday;

//    $('#booking_time').timepicker({
//        timeFormat: 'g:ia',
//        minTime: '8:00am',
//        maxTime: '5:00pm'
//        
////        'disableTimeRanges': [
////            ['3:00am', '4:30am'], 
////            ['5:00pm', '8:00pm']
////        ]
//    });

    
    
    
    
    if( current_weekday_schedule.minTime ){
        
        var TimeOptions = {
            timeFormat: 'g:ia',
            minTime: current_weekday_schedule.minTime,
            maxTime: current_weekday_schedule.maxTime
        };
        
        if( current_weekday_schedule.disableTimeRanges ){
            TimeOptions.disableTimeRanges = current_weekday_schedule.disableTimeRanges;
        }
        
//        console.log( TimeOptions );
        if ( $("#delivery_time").is(":disabled") ) {
            $("#delivery_time").prop("disabled", false);
        }
        
        $('#delivery_time').timepicker( TimeOptions );
    
    } 
    
    //@TODO finish this stuff.
    
//    if( current_weekday_schedule.disabledWeekday ){
//        $("#delivery_time").prop("disabled", true);
//    }
    
    
    
    $('#delivery_asap').on('ifToggled', function(event){
    
        if( $(this).is(":checked") ){
            $('#delivery_time').hide();
        } else {
            $('#delivery_time').show();
        }
        
    });
    
    
//https://github.com/jonthornton/jquery-timepicker

});


function init_time_picker( settings ){
    
    if( settings.minTime ){

     var TimeOptions = {
         timeFormat: 'g:ia',
         minTime: settings.minTime,
         maxTime: settings.maxTime
     };

     if( settings.disableTimeRanges ){
         TimeOptions.disableTimeRanges = settings.disableTimeRanges;
     }

    console.log( TimeOptions );

    $('#delivery_time').timepicker( TimeOptions );
    
    // return TimeOptions;

 } 
    
}