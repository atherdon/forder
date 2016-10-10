$(document).ready(function() {
    'use strict';

     $.validate({ 	
        language : jsLanguageValidator,
        language : jsLanguageValidator,
        form : '#forms',    
        onError : function() {    

        },
        onSuccess : function() {   
//                          console.log('123');
          form_submit('forms');
          return false;
        }  
    })  

    //console.log('validation');


     $.validate({ 	
        language : jsLanguageValidator,
        language : jsLanguageValidator,
        form : '#myRegister',    //form-signup
        onError : function() {    

        },
        onSuccess : function() {   
          console.log('sign-up submit');
          form_submit2('myRegister');
          return false;
        }  
    })  

    //console.log('validation');

     $.validate({ 	
        language : jsLanguageValidator,
        language : jsLanguageValidator,
        form     : '#ForgotPassword',    //form-signup
        onError  : function() {    

        },
        onSuccess : function() {   
          console.log('forgot submit');
          form_submit3('ForgotPassword');
          return false;
        }  
    })  

    $.validate({ 	
        language : jsLanguageValidator,
        language : jsLanguageValidator,
        form     : '#review',    //form-signup
        onError  : function() {    

        },
        onSuccess : function() {   
          console.log('forgot submit');
          form_submit4('review');
          return false;
        }  
    })  

    $.validate({ 	
        language : jsLanguageValidator,
        language : jsLanguageValidator,
        form     : '#merchant-apply-form',    //form-signup
        onError  : function() {    

        },
        onSuccess : function() {   
          console.log('forgot submit');
          form_submit5('merchant-apply-form');
          return false;
        }  
    })  

});