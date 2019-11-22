/*-----------------------------------------------------------------------------------

 Template Name: reno
 Template URI: http://themes.pixelstrap.com/reno/
 Description: This Is multipurpose service bases template
 Author: Pixelstrap
 Author URI : https://themeforest.net/author_dashboard

 ----------------------------------------------------------------------------------- */
/* 1.Pre Loader *\
 /* 2.Tap on Top *\
 /* 3.Nav Bar Fixed *\
 /* 4.Banner Slider *\
 /* 5.Our Project *\
 /* 6.contacts Form Section *\
 /* 7.Testimonial Section *\
 /* 8.Testimonial Section_4 *\
 /* 9.Team Section *\
 /* 10.News Section *\
 /* 11.Brand Section *\
 /* 12.Service slider *\
 /* 13.Project Slider *\
 /* 14.Portfolio Slider *\
 /* 15.Rating Start *\
 /* 16.Footer Title Start *\
 /* 17.Search Start *\
 /*  18. LTR to RTL JS */
/* 19. Shop Page Filter */
/* 20.Quantity Counter */
/* 21. Shop Page Side Filter */
/*  22. Shop Page Product Slider */
/*  23. Product Slider */
/*  24. Tooltip js */
/*  25. Image to background js */
/* 26. Pretext icon  */

(function($) {
    "use strict";
    /*=====================
     1. Pre Loader
     ==========================*/
    $('.loader-wrapper').fadeOut('fast', function() {
        $(this).remove();
    });


    /*=====================
     2. Tap to Top
     ==========================*/
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.tap-top').fadeIn();
        } else {
            $('.tap-top').fadeOut();
        }
    });
    $('.tap-top').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 2500);
        return false;
    });


    /*=====================
     3. Nav Bar Fixed
     ==========================*/
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 300) {
            $('.navbar').addClass('fixed-top');
        }
        else {
            $('.navbar').removeClass('fixed-top');
        }
    });


    /*=====================
     4. Banner Slider
     ==========================*/
        var owl = $('.slide_1');
        owl.owlCarousel({
            autoplay: true,
            center: true,
            loop: true,
            dots: false,
            nav: true,
            navText: ["<span class='slider-nav'><i class='fa fa-angle-double-left'></i></span>","<span class='slider-nav'><i class='fa fa-angle-double-right'></i></span>"],
            items: 1
        });
        function setAnimation ( _elem, _InOut ) {
            var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            _elem.each ( function () {
                var $elem = $(this);
                var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                $elem.addClass($animationType).one(animationEndEvent, function () {
                    $elem.removeClass($animationType);
                });
            });
        }
        owl.on('change.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation ($elemsToanim, 'out');
        });
        var round = 0;
        owl.on('changed.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation ($elemsToanim, 'in');
        });
        owl.on('translated.owl.carousel', function(event) {
            if (event.item.index == (event.page.count - 1))  {
                if (round < 1) {
                    round++;
                    console.log (round);
                } else {
                    owl.trigger('stop.owl.autoplay');
                    var owlData = owl.data('owl.carousel');
                    owlData.settings.autoplay = true;
                    owlData.options.autoplay = true;
                    owl.trigger('refresh.owl.carousel');
                }
            }
        });


    /*=====================
     6. contacts Form Section
     ==========================*/
    $( '.js-input' ).keyup(function() {
        if( $(this).val() ) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });


    /*=====================
     7. Testimonial Section
     ==========================*/
    var testimonial_1 = $(".testimonial_slide");
    testimonial_1.owlCarousel({
        autoplay: false,
        center: true,
        loop: true,
        dots: false,
        items: 1
    });


    /*=====================
     8. Testimonial Section_4
     ==========================*/
    var testimonial_4 = $(".testimonial_slide_4");
    testimonial_4.owlCarousel({
        autoplay: false,
        center: false,
        loop: true,
        nav: false,
        dots: false,
        items: 2,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    /*=====================
     9. Team Section
     ==========================*/
    var team_sec = $(".team_slide");
    team_sec.owlCarousel({
        autoplay: false,
        loop: true,
        dots: false,
        margin: 30,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2,
                margin: 0
            },
            768:{
                items:2,
                margin: 0
            },
            992:{
                items:3,
                margin: 10
            },
            1000:{
                items:3
            }
        }
    });


    /*=====================
     11. Brand Section
     ==========================*/
    var brand_sec = $(".brand_slide");
    brand_sec.owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        margin: 30,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 5,
        responsive:{
            0:{
                items:1
            },
            481:{
                items:2
            },
            600:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });
    var brand_sec_ecommerce = $(".brand_slide_ecommerce");
    brand_sec_ecommerce.owlCarousel({
        loop: true,
        dots: false,
        margin: 50,
        items: 6,
        responsive:{
            0:{
                items:1
            },
            481:{
                items:2
            },
            600:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

    /*=====================
     12. Service slider
     ==========================*/
    var ser_slider = $(".service_slider");
    ser_slider.owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        margin: 30,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 3,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    /*=====================
     13. Project Slider
     ==========================*/
    var pro_slider = $(".project_slider");
    pro_slider.owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 5,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:5
            }
        }
    });


    /*=====================
     14. portfolio slider
     ==========================*/
    var pro_slider = $(".portfolio_slider");
    pro_slider.owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 6,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:6
            }
        }
    });



  

    /*=====================
     22. Shop Page Product Slider
     ==========================*/
    $(document).ready(function() {
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        //var totalslides = 10;
        var syncedSecondary = true;

        bigimage
            .owlCarousel({
                items: 1,
                slideSpeed: 2000,
                autoplay: true,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ]
            })
            .on("changed.owl.carousel", syncPosition);

        thumbs
            .on("initialized.owl.carousel", function() {
                thumbs
                    .find(".owl-item")
                    .eq(0)
                    .addClass("current");
            })
            .owlCarousel({
                items: 4,
                navText: [
                    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: 4,
                responsiveRefreshRate: 100
            })
            .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }

        thumbs.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });
    });


    /*=====================
     23. Product Slider
     ==========================*/
    var product_slider = $(".prouct_slide");
    product_slider.owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        margin: 20,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 5,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:5
            }
        }
    });

    $('.toggle-nav').on('click', function () {
        $('.sm-horizontal').css("right","0px");
    });
    $(".mobile-back").on('click', function (){
        $('.sm-horizontal').css("right","-410px");
    });


    var small_slider = $('.small_slider');
    small_slider.owlCarousel({
        autoplay: true,
        center: true,
        loop: true,
        dots: false,
        nav: true,
        items: 1
    });

    /*=====================
     24. Tooltip js
     ==========================*/

    $('[data-toggle="tooltip"]').tooltip();
    if ($(window).width() < '1183') {
        jQuery('.menu-title h5').append('<span class="according-menu"></span>');
        jQuery('.menu-title').on('click', function () {
            jQuery('.menu-title').removeClass('active');
            jQuery('.menu-content').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).next().slideDown('normal');
            }
        });
        jQuery('.menu-content').hide();
    } else {
        jQuery('.menu-content').show();
    }

    /*=====================
     25. Image to background js
     ==========================*/
     $(".bg-top" ).parent().addClass('b-top');
    $(".bg-bottom" ).parent().addClass('b-bottom');
    $(".bg-center" ).parent().addClass('b-center');
    $(".bg_size_content").parent().addClass('b_size_content');
    $(".bg-img" ).parent().addClass('bg-size');
    jQuery('.bg-img').each(function() {

        var el = $(this),
            src = el.attr('src'),
            parent = el.parent();

        parent.css({
            'background-image': 'url(' + src + ')',
            'background-size': 'cover',
            'background-position': 'center',
            'display' : 'block'
        });

        el.hide();
    });

})(jQuery);
    /*=====================
     25. Pretext icon
     ==========================*/
$( ".pretext" ).prepend( '<i class="fa fa-check-square-o" aria-hidden="true"></i>' );

    /*=====================
     25. Pretext icon
     ==========================*/
     
$( ".course-summery-text" ).prepend( '<i class="fa fa-arrow-right" aria-hidden="true"></i>' );