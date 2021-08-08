/** 
 * ===================================================================
 * main js
 *
 * ------------------------------------------------------------------- 
 */

 $(window).on( "load", function() {
    "use strict";
      /*---------------------------------------------------- */
    /* Header sticky
     ------------------------------------------------------ */
    $(window).on('load scroll', function () {
        var scroll = $(window).scrollTop();
        
        var stickyHeader = function() {
            if (scroll >= 200) {
                $(".site-header").addClass("darkHeader");
            } else {
                $(".site-header").removeClass("darkHeader");
            }
        }
        stickyHeader();
    });
    /*---------------------------------------------------- */
    /* Preloader
     ------------------------------------------------------ */


        // will first fade out the loading animation 
        $("#loader").fadeOut("slow", function () {

            // will fade out the whole DIV that covers the website.
            $("#preloader").delay(1).fadeOut("slow");
            $(".intro-content,.top-bar,.intro-social").addClass('animate');
        });

   


    /*---------------------------------------------------- */
    /* FitText Settings
     ------------------------------------------------------ */
    setTimeout(function () {

        $('#intro h1').fitText(1, {minFontSize: '42px', maxFontSize: '84px'});

    }, 100);


    /*---------------------------------------------------- */
    /* FitVids
     ------------------------------------------------------ */
    $(".fluid-video-wrapper").fitVids();


    /*---------------------------------------------------- */
    /* Owl Carousel
     ------------------------------------------------------ */
    $("#owl-slider").owlCarousel({
        navigation: false,
        pagination: true,
        itemsCustom: [
            [0, 1],
            [700, 2],
            [960, 3]
        ],
        navigationText: false
    });


    /*----------------------------------------------------- */
    /* Alert Boxes
     ------------------------------------------------------- */
    $('.alert-box').on('click', '.close', function () {
        $(this).parent().fadeOut(500);
    });


    /*----------------------------------------------------- */
    /* Stat Counter
     ------------------------------------------------------- */
    var statSection = $("#stats"),
            stats = $(".stat-count");

    statSection.waypoint({
        handler: function (direction) {

            if (direction === "down") {

                stats.each(function () {
                    var $this = $(this);

                    $({Counter: 0}).animate({Counter: $this.text()}, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (curValue) {
                            $this.text(Math.ceil(curValue)+"+");
                        }
                    });
                });

            }

            // trigger once only
            this.destroy();

        },
        offset: "90%"

    });


    /*---------------------------------------------------- */
    /*	Masonry
     ------------------------------------------------------ */
    var containerProjects = $('#folio-wrapper');

    containerProjects.imagesLoaded(function () {

        containerProjects.masonry({
            itemSelector: '.folio-item',
            resize: true
        });

    });


    /*----------------------------------------------------*/
    /*	Modal Popup
     ------------------------------------------------------*/
    $('.item-wrap a').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        removalDelay: 300,
        showCloseBtn: false,
        mainClass: 'mfp-fade'

    });

    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });


    /*-----------------------------------------------------*/
    /* Navigation Menu
     ------------------------------------------------------ */
    var toggleButton = $('.menu-toggle'),
            nav = $('#menu-primary');

    // toggle button
    toggleButton.on('click', function (e) {
        e.preventDefault();
		toggleButton.toggleClass('is-clicked');
		nav.slideToggle();
    });

    // nav items
    nav.find('li a').on("click", function () {

        // update the toggle button 		
        toggleButton.toggleClass('is-clicked');
        // fadeout the navigation panel
        nav.fadeOut();

    });


    /*---------------------------------------------------- */
    /* Highlight the current section in the navigation bar
     ------------------------------------------------------ */
    var sections = $("section"),
            navigation_links = $("#main-nav-wrap li a");

    sections.waypoint({
        handler: function (direction) {

            var active_section;

            active_section = $('section#' + this.element.id);

            if (direction === "up")
                active_section = active_section.prev();

            var active_link = $('#main-nav-wrap a[href="#' + active_section.attr("id") + '"]');

            navigation_links.parent().removeClass("current");
            active_link.parent().addClass("current");

        },
        offset: '25%'
    });


    /*---------------------------------------------------- */
    /* Smooth Scrolling
     ------------------------------------------------------ */
    $('.menu-item a').on('click', function () {

        //e.preventDefault();

        var target = this.hash,
                $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function () {
            window.location.hash = target;
        });

    });

    /*---------------------------------------------------- */
    /*  Placeholder Plugin Settings
     ------------------------------------------------------ */
    $('input, textarea, select').placeholder()


    /*---------------------------------------------------- */
    /*	contact form
     ------------------------------------------------------ */

    /* local validation */
    $('#contactForm').validate({
        /* submit via ajax */
        submitHandler: function (form) {

            var sLoader = $('#submit-loader');

            $.ajax({
                type: "POST",
                url: goni_data.ajaxurl,
                data: { action: 'contact_form_submit', data: $(form).serialize(), security: goni_data.nonce},
                
                beforeSend: function () {
                    sLoader.fadeIn();
                },
                success: function (res) {

                    // Message was sent
                    if (res.data.status) { 
                        sLoader.fadeOut();
                        $('#message-warning').hide();
                        $('#contactForm').fadeOut();
                        $('#message-success').html(res.data.message).fadeIn();
                    }
                    // There was an error
                    else {
                        sLoader.fadeOut();
                        $('#message-warning').html(res.data.message).fadeIn();
                    }

                },
                error: function () {
                    sLoader.fadeOut();
                    $('#message-warning').html("Something went wrong. Please try again.").fadeIn();
                }

            });
        }

    });


    /*----------------------------------------------------- */
    /* Back to top
     ------------------------------------------------------- */
    var pxShow = 300; // height on which the button will show
    var fadeInTime = 400; // how slow/fast you want the button to show
    var fadeOutTime = 400; // how slow/fast you want the button to hide
    var scrollSpeed = 300; // how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

    // Show or hide the sticky footer button
    jQuery(window).scroll(function () {

        if (!($("#header-search").hasClass('is-visible'))) {

            if (jQuery(window).scrollTop() >= pxShow) {
                jQuery("#go-top").fadeIn(fadeInTime);
            } else {
                jQuery("#go-top").fadeOut(fadeOutTime);
            }

        }

    });

});


$(document).ready(function () {

    triangleGeneration('.about-anim', 201);

    jQuery(window).scroll(function () {
        var $st = jQuery(window).width();
        if ($st > 1200)
            parallaxScroll()
    });
});

var bodyHeight = jQuery("#about").height() - jQuery(window).height();
//paralax
function parallaxScroll() {
    var st = jQuery(window).scrollTop();
    var px = -jQuery(window).scrollTop() * (100 / bodyHeight);
    var letterD = 0.9 * px;

    if (st >= (jQuery('#about').offset().top - jQuery(window).height())) {
        jQuery(".letter-gen").css({"margin-top": letterD + "px"});
    }

}

function triangleGeneration(el, count) {
    var element = $('body').find(el);
    var elWidth = element.innerWidth();
    var elHeight = element.innerHeight();
    var ctn = $('<div class="triangles"></div>"');
    ctn.appendTo(element);

    for (i = 0; i < count; i++) {
        var randomSize = random(10, 26);

        var img = $('<span class="letter-gen">'+randomKeyWords()+'</span>');
        img.appendTo(ctn);

        img.css({
            opacity: randomDecimal(0.2, 1, 2),
            fontSize: randomSize,
            left: random(0, (100 - randomSize / 9)) + "%",
            top: random(0, (100 - randomSize / 9)) + "%",
            transform: 'rotate(' + random(0, 360) + 'deg)'
        });
    }
}

function random(min, max) {
    return Math.floor((Math.random() * max) + min);
}

function randomDecimal(min, max, precision) {
    min = min === undefined ? 0 : min;
    max = max === undefined ? 9007199254740992 : max;
    precision = precision === undefined ? 0 : precision;

    var random = Math.random() * (max - min) + min;
    return random.toFixed(precision);
}



function randomKeyWords() {
    let items = ['PHP','JavaScript','HTML','CSS','React Native','cordova','Bootstrap','jQuery','Wordpress','Shopify','Codeigniter','API gateways','AWS','EC2','S3','Git','Nginx','EasyEngine'];
    return items[Math.floor(Math.random()*7)];
}
