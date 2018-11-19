(function($){
  "use strict";
    $(document).ready(function(){
        //Js code for Lightcase
        $('a[data-rel^=lightcase]').lightcase();

        
        //Counter Up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        

        //testimonial Swipper
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true
        });
        
        
        
        
        //ProjectSingle Swipper 
        var swiper = new Swiper('.project-single-container', {
            pagination: '.swiper-pagination',
            nextButton: '.custom-button-next',
            prevButton: '.custom-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true
        });

        //BlogSingle Swipper 
        var swiper = new Swiper('.blog-single-container', {
            pagination: '.swiper-pagination',
            nextButton: '.custom-button-next',
            prevButton: '.custom-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true
        });
        
        //flexslider
        $('#carousell').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 150,
            itemMargin: 5,
            asNavFor: '#sliderr'
        });

        $('#sliderr').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousell"
        });

        //flexslider
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 63,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });

        //Js code for search box
        $(".first-click").on("click", function () {
            $(".first-click").hide();
            $(".second-click").css('display', 'block');
            $(".main-menu").addClass("search-box");
        });
        $(".second-click").on("click", function () {
            $(".second-click").hide();
            $(".first-click").css('display', 'block');
            $(".main-menu").removeClass("search-box");
        });
        
        //Check to see if the window is top if not then display button
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 200) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').on("click", function () {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        //js for nstSlider

        $('.nstSlider').nstSlider({
            "left_grip_selector": ".leftGrip",
            "right_grip_selector": ".rightGrip",
            "value_bar_selector": ".bar",
            "value_changed_callback": function (cause, leftValue, rightValue) {
                $(this).parent().find('.leftLabel').text(leftValue);
                $(this).parent().find('.rightLabel').text(rightValue);
            }
        });
        
        //js code for mobile menu 
        $('.navbar-toggle').on('click', function(e) {
            $('body').toggleClass('open-mobile-menu')
        });

        $('.mobile-menu>ul>li>a,.mobile-menu ul.sub-menu>li>a').on('click', function(e) {
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
              element.removeClass('open');
              element.find('li').removeClass('open');
              element.find('ul').slideUp(300,"swing");
            }
            else {
              element.addClass('open');
              element.children('ul').slideDown(300,"swing");
              element.siblings('li').children('ul').slideUp(300,"swing");
              element.siblings('li').removeClass('open');
              element.siblings('li').find('li').removeClass('open');
              element.siblings('li').find('ul').slideUp(300,"swing");
            }
        }); 


         //progress bar js
         function animateElements() {
             $('.progressbar').each(function () {
                 var elementPos = $(this).offset().top;
                 var topOfWindow = $(window).scrollTop();
                 var percent = $(this).find('.circle').attr('data-percent');
                 var percentage = parseInt(percent, 10) / parseInt(100, 10);
                 var animate = $(this).data('animate');
                 if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                     $(this).data('animate', true);
                     $(this).find('.circle').circleProgress({
                         startAngle: -Math.PI / 2,
                         value: percent / 100,
                         thickness: 5,
                         fill: {
                             color: '#1e50d5'
                         },
                         emptyFill: '#f0f0f0',
                         animation: {
                             duration: 2000,
                             easing: 'easeOutBounce' // Default circleProgressEasing . You can also use jquery Easeing another Effect
                         },
                     }).on('circle-animation-progress', function (event, progress, stepValue) {
                         $(this).find('div').text((stepValue * 100).toFixed(0) + "%");
                     }).stop();
                 }
             })
         };
         // Show animated elements
         animateElements();
         $(window).scroll(animateElements);

        //  progress bar js


        //menu top fixed
        var fixed_top = $(".main-menu");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 80) {
                fixed_top.addClass("menu-fixed animated fadeInDown");
            } else {
                fixed_top.removeClass("menu-fixed animated fadeInDown");
            }

        });
        //menu top fixed
        var add_class = $(".mobile-menu-area");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 80) {
                add_class.addClass("theone-mobile-menu");
            } else {
                add_class.removeClass("theone-mobile-menu");
            }

        });
        




        
        //Scroll-top 
        
        //Check to see if the window is top if not then display button
        $(window).on("scroll",function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').on("click",function () {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        
    });
})(jQuery)