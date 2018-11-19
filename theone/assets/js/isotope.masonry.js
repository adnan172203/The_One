(function($) {
//isotope activation js codes:

 $(document).ready(function(){

     $("#gallery-item").isotope({
         filter:"*",
         animationOptions :{
             duration:1000
         }
     });

     $('.grid').isotope({
   itemSelector: '.grid-item',
   masonry: {
     columnWidth:0
   }
 });


     $("#project-item-selector li").click(function(){
         $("#project-item-selector li").removeClass("branding").filter(this).addClass("branding");
         var filter_id = $(this).data('filter');
         $("#project-section").isotope({
             itemSelector: '.gallery-item-list',
             filter:filter_id,
             animationOptions :{
                 duration:1000
             }
         });
     });
     // change is-checked class on buttons
     $('#project-item-selector ul').each( function( i, liList ) {
         var $liList = $( liList );
         $liList.on( 'click', 'li ', function() {
             $liList.find('.active').removeClass('active');
             $( this ).addClass('active');
         });


    });




 });
 })(jQuery);
