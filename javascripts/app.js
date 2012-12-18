 requirejs.config({
   paths:{
      jquery: '../components/jquery/jquery.min'
      },

  shim: {

        '../components/jquery-marcopolo/build/jquery.marcopolo.min': ['jquery']

  }


});

 require(['../components/jquery/jquery.min', '../components/jquery-marcopolo/build/jquery.marcopolo.min'], function(jQuery, mp) {
      
    $(document).ready( function() { 

    });
      
});



