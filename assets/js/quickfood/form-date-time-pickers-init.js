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
        
            if( i === weekDay ) {
                updated_options = v;
            }
//            console.log( current_time_settings );
    //        console.log(i);
    //        console.log(v);
        
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
                TimeOptions.disableTimeRanges = updated_options.disableTimeRanges;
            }

            console.log( TimeOptions2 );
            
//            $('#delivery_time').timepicker('remove');
//            $('#delivery_time').timepicker( TimeOptions2 );

        }
        
        
//        $('#delivery_time').timepicker({
//            timeFormat: 'g:ia',
//            minTime: '10:00am',
//            maxTime: '5:00pm'
//        
//        });
        

        // `e` here contains the extra attributes
    });
    
    var week_schedule   = $('#delivery_time').data().weekschedule;
    var current_weekday = $('#delivery_time').data().currentweekday;
    
//    var weekDay2         = new Date().getDay();

//    console.log(week_schedule);
//    console.log(current_weekday);
//    console.log(current_weekday.disabledWeekday);
    
    var current_time_settings = false;
    $(week_schedule).each(function(i,v){
        
//        if( i === current_weekday ){
//            current_time_settings = v;
//        }
//        if( i === current_weekday.disabledWeekday ) {
        if( i === 0 ) {
            current_time_settings = v;
        }
//        console.log(i);
//        console.log(v);
        
    });
//    console.log();
    console.log( current_time_settings );
    
//    console.log(weekDay2 == );
//    console.log(weekDay2);
    
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
    
    if( current_time_settings.minTime ){
        
        var TimeOptions = {
            timeFormat: 'g:ia',
            minTime: current_time_settings.minTime,
            maxTime: current_time_settings.maxTime
        };
        
        if( current_time_settings.disableTimeRanges ){
            TimeOptions.disableTimeRanges = current_time_settings.disableTimeRanges;
        }
        
        console.log( TimeOptions );
        
        $('#delivery_time').timepicker( TimeOptions );
    
    }
    
    
    
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