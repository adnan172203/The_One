 (function($) {
       $(window).on('load', function () { // makes sure the whole site is loaded 
           $('#preloader').delay(1500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
           $('body').delay(2000).css({
               'overflow': 'visible'
           });
       })
    })(jQuery);