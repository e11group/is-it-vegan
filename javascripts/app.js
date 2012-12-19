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

      $('#userSearch').marcoPolo({
        
         url: '../app/server/search',
         formatItem: function (data, $item) {
           return data.first_name + ' ' + data.last_name;
         },
 
         onSelect: function (data, $item) {
          window.location = data.profile_url;
        }
      });

    });
      
});



