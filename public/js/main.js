/*
Copyright (c) 2017
[Master Stylesheet]
Theme Name : PEST GUARD
Version    : 1.0
Author     : MeloThemes
Support : melothemes@gmail.com
*/


/*---------------------------------------------
Table of Contents
-----------------------------------------------
Custom Variable Declaration
Preloading
Tooltip popup
Search Dropdown on Click
Portfolio Gallery -Mixit Up
Owl Carousel -Testimonial Slider
Owl Carousel -Partner 
Animations
Back to Top scroll
----------------------------------------

*/

/* Document Ready */

jQuery(document).ready(function () {
    
    "use strict";
    
    /* Vars */
    var owl, $searchlink, $searchbar, back, filterList ;
 
    
    /* Page Pre Loading */
    
    $(window).on('load', function () { // makes sure the whole site is loaded
        $('.pg-loader').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(250).fadeOut('slow'); // will fade out the white DIV that covers the website.
    });
    
    /* end Page Pre Loading */
    
    
    
   /*tooltip*/
 
        $('[data-toggle="tooltip"]').tooltip();   
   
   /*tooltip*/
    
    
    /*Search dropdrown on click*/
    
    $searchlink = $('#searchtoggl span');
    $searchbar  = $('#searchbar');

    $('.navbar-right li a').on('click', function(e){
        e.preventDefault();

        if($(this).attr('id') == 'searchtoggl') {
            if(!$searchbar.is(":visible")) { 
                // if invisible we switch the icon to appear collapsable
                $searchlink.removeClass('fa-search').addClass('fa-search-minus');
            } else {
                // if visible we switch the icon to appear as a toggle
                $searchlink.removeClass('fa-search-minus').addClass('fa-search');
            }

            $searchbar.slideToggle(300, function(){
                // callback after search bar animation
            });
        }
    });
    $('#searchform').submit(function(e){
        e.preventDefault(); // stop form submission
    });
    
    /*end of expandable search*/
    
    
   
    /*PORTFOLIO_Gallery_FILTERS- Mixitup*/
    filterList = {
        init: function () {
            // MixItUp plugin
            // http://mixitup.io
            $('#filter-images').mixItUp({
                selectors: {
                    target: '.portfolio'
                    , filter: '.filter'
                }
                , load: {
                    filter: '.all,.warehouse,.freight,.packing,.cargo' // show all app tab on first load
                }
            });
        }
    };
    // Run the show!
    filterList.init();
    /*end*/
    
    
    
    /*Testimonial slider -Owl  Carousal*/
    $(".pg-testimonial-slider").owlCarousel({
        items: 2
        , loop: true
        , nav: false
        , responsive: {
            0: {
                items: 1
                , dots: true
            }
            , 800: {
                items: 2
                , dots: true
            }
        }
        , dots: false
        , autoplay: true
        , autoplayTimeout: 3000
        , autoplayHoverPause: true
    });
    /*end of Testimonialslider*/
    

    
    /*Partner slider -Owl  Carousal*/
    $(".pg-partner-slider").owlCarousel({
        items: 5
        , loop: true
        , nav: false
        , responsive: {
            0: {
                items: 1
                , dots: true
            }
            , 300: {
                items: 2
                , dots: true
            }
            , 530: {
                items: 3
                , dots: true
            }
            , 768: {
                items: 4
                , dots: true
            }
            , 1200: {
                items: 5
                , dots: false
            }
           
        }
        , dots: false
        , autoplay: true
        , autoplayTimeout: 3000
        , autoplayHoverPause: true
    });
    
    /*end of Partner slider*/
    
    
    
    /*Counto Timer*/
    
    $('.timer').countTo({
        refreshInterval: 50,
        formatter: function (value, options) {
            return value.toFixed(options.decimals);
        },
        onUpdate: function (value) {
            console.debug(this);
        },
        onComplete: function (value) {
            console.debug(this);
        }
    });
    
    
    /*Magnific Popup*/
    
    /*image popup*/
    $('.popup-link').magnificPopup({
        type: 'image'
        // other options
    });
    
    
    /*video popup*/
    $('.videopopUp').magnificPopup({
        type: 'iframe',


        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }

                    src: 'https://www.youtube.com/embed/%id%' // URL that will be set as a source for iframe.
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: 'https://player.vimeo.com/video/%id%'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }

                // you may add here more sources

            },

            srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
        }
    });
    
    /*End of magnific Popup*/
    
    
    
    /*Animations*/
    new WOW().init();
    
 
    
    //Scroll To Top
    /*back-to-top */
    back = $("#back-to-top");
    $(window).on('scroll',function () {
        $(this).scrollTop() > 50 ? back.fadeIn() : back.fadeOut()
    }), back.on('click',function () {
        return back.tooltip("hide"), $("body,html").animate({
            scrollTop: 0
        }, 800), !1
    }), back.tooltip("show");
    /*back-to-top*/
});