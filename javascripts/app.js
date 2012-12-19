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

    var status_one = '1.html';
    var status_two = '2.html';
    var status_zero = '0.html';

      $('#userSearch').marcoPolo({
        
         url: '../app/server/search.php',

         formatItem: function (data, $item) {
           return data.name;
         },
 
         onSelect: function (data, $item) {

          if (data.status = 1) {
            window.location = status_one;
          }
           if (data.status = 2) {
            window.location = status_two;
          }
           if (data.status == 0) {
            window.location = status_zero;
          }
        }
      
      });

    });
      
});



