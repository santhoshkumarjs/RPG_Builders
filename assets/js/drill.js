;(function($) {
    "use strict";


    new WOW().init();

    $(document).ready(function () {


        // Add Active Classes
        $('.drill-item:first').addClass('active');
        $('.main-slide-nav:first').addClass('active');
        $('.service-name:first').addClass('active');
        $('.service-doc:first').addClass('active');
        $('.current_page_item > a').addClass('active');
        // Contact Page
        /*$('.wpcf7-form-control-wrap').addClass('drill-form');*/
        $('.wpcf7-form').attr('id', 'contactForm');
        $('.wpcf7-submit').addClass('form-control form_btn_css');

        // Add Footer Widgets Classes
        $('.drill_about_us').addClass('footer-first');
        $('.widget_pages .page_item a').addClass('drill-txt-p');
        $('.widget_pages').addClass('quick-links');
        $('.drill_twitter_widget').addClass('twitter-part');


        // Remove caret from first dropdown
        $('.dropdown-toggle').children('.caret').remove();


        // emran carosel js
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                items:5,
                pagination:false,
                responsive:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })

        });

        // slick slider
        $('.reference-slider').slick({
            centerMode: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            item: 1
        });

        // slick slider
        $('#project-gallery').slick({
            dots: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // owlcarousel
        $("#company-logo").owlCarousel({
            items: 4,
            pagination: false,
            stopOnHover: true,
            autoPlay: true,
            loop: true
        });

        // Instantiate MixItUp:
        $(function () {
            $('#project-gallery').mixItUp();
        });


        // Instantiate MixItUp:
        $(function () {
            $('#project-gallery-full').mixItUp();
        });

        //onclick
        $('.service-list-group a').click(function () {
            $('.service-list-group a').each(function () {
                $(this).removeClass("active");
            });
            $(this).addClass("active");
        });

    });

    $('.carousel').carousel()
    // testingTab
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })


    // Navbar Fixed top    
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 150 ) {
            $(".menu-2").addClass("menu_bg");
        } else {
            $(".menu-2").removeClass("menu_bg");
        }
    });


//    $('[data-toggle="tooltip"]').tooltip();


    /*Function Calls*/


})(jQuery);