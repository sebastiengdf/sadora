
(function($) {
    "use strict";

    //Run function when document ready
    $(document).ready(function() {
        init_loader();
        init_imageslide();
        init_prettyphoto();
        init_team();
        init_testimonials();
        init_sponsorsslider();
        init_height();
        init_backtotop();


    });



   /*-------------------------------------
     jQuery MeanMenu
     -------------------------------------*/
    var fronturl = $('.logo-area a').attr('href');
    var logo_img = $('.logo-area a img').attr('src');

    $('.mobile-menu nav').meanmenu({siteLogo: "<a href='" + fronturl + "'><img src='" + logo_img +"' /></a>"});

    /*-------------------------------------
     Jquery Fixed Header Menu
     -----------------------------------*/
    $(window).scroll(function () {

        var s = $("#sticker");
        var w = $(".wrapper");
        //alert(pos.top);
        var windowpos = $(window).scrollTop();
        if ($(window).width() > 767) {

            if (windowpos > 0) {
                s.addClass("stick");
                var h = $(".header-top-area").outerHeight();
                w.css('padding-top', h + "px");
            } else {
                s.removeClass("stick");
                w.css('padding-top', 0);
            }

        }

    });

    /*-------------------------------------
     jQuery Search Box customization
     -------------------------------------*/
    $(".header-top-search.search-box").on('click', '.search-button', function (event) {
        event.preventDefault();
        var v = $(this).parent('form').find('.search-text');
        if (v.hasClass('active')) {
            v.removeClass('active');
        } else {
            v.addClass('active');
        }
        return false;
    });

 /*-------------------------------------
     Offcanvas toggle Menu activation code
     -------------------------------------*/
    $('#additional-menu-area').on('click', 'span.side-menu-trigger', function () {

        var $this = $(this),
            wraper = $(this).parents('body').find('>.wraper');
        if ($this.hasClass('open')) {
            document.getElementById('mySidenav').style.width = '0';
            $this.removeClass('open').find('i.fa').removeClass('fa-bars').addClass('fa-bars');
            wraper.removeClass('open');
        } else {
            wraper.addClass('open');
            $this.addClass('open').find('i.fa').removeClass('fa-bars').addClass('fa-bars');
            document.getElementById('mySidenav').style.width = '380px';
        }

    });

    $('#mySidenav').on('click', '.closebtn', function (e) {
        e.preventDefault();
        var $this = $(this),
            wraper = $(this).parents('body').find('>.wraper');
        wraper.removeClass('open');
        document.getElementById('mySidenav').style.width = '0';
        $('#additional-menu-area span.side-menu-trigger').removeClass('open').find('i.fa').removeClass('fa-times').addClass('fa-bars');

    });


    /*------------------------------------------*/
    /*      /*. loader /*
    /*------------------------------------------*/

    function init_loader() {
            $("#loader").fadeOut("slow", function() {
                $("#preloader").delay(300).fadeOut("slow")
            })

        }
		

	/*------------------------------------------*/
    /*           /*. Image Slide/*
    /*------------------------------------------*/
	
	function init_imageslide(){
	  $("#owl-slider").owlCarousel({
      nav: !0,
      loop: !0,
      autoplay: !0,
      margin: 0,
      navText: ["<a><span></span></a>", "<a><span></span></a>"],
      responsive: {
        0: {
          items: 1,
          dots: !1
        },
        600: {
          items: 1,
          dots: !1
        },
        1e3: {
          items: 1
        }
      }  
    });
    }
   
		
        /*------------------------------------------*/
        /*      /*.  prettyphoto Lightbox /*
        /*------------------------------------------*/

    function init_prettyphoto() {
            $("a[class^='prettyphoto']").prettyPhoto();
            $("a[class^='work']").prettyPhoto();

        }

        /*------------------------------------------*/
        /*           /*.  Team /*
        /*------------------------------------------*/

    function init_team() {
        var slider = new MasterSlider();
        slider.setup('teamslider', {
            loop: true,
            width: 240,
            height: 240,
            speed: 20,
            view: 'focus',
            preload: 'all',
            space: 0,
            wheel: true
        });
        slider.control('arrows');
        slider.control('slideinfo', {
            insertTo: '#staff-info'
        });

        $('#myTab a').on(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

    }


    /*------------------------------------------*/
    /*         /*. Testimonials /*
    /*------------------------------------------*/

    function init_testimonials() {
            if ($('.testimonials-carousel').length) {
                $('.testimonials-carousel').owlCarousel({
                    loop: true,
                    margin: 60,
                    nav: true,
                    autoplayHoverPause: false,
                    autoplay: 5000,
                    smartSpeed: 700,
                    navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        760: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        },
                        1100: {
                            items: 3
                        }
                    }
                });
            }

        }
        /*------------------------------------------*/
        /*         /*. Sponsors Slider /*
        /*------------------------------------------*/
		

    function init_sponsorsslider() {

            if ($('.sponsors-slider').length) {
                $('.sponsors-slider').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    smartSpeed: 500,
                    autoplay: 4000,
                    navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        600: {
                            items: 2
                        },
                        800: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
            }

        }
        /*------------------------------------------*/
        /*           /*. full-heigh banner /*
        /*------------------------------------------*/


    function init_height() {
        $(".full-height").height($(window).height()),
            $(window).on("resize", function() {

                $(".full-height").height($(window).height())
            })
    }


  
  
    /*------------------------------------------*/
    /*           /*. Go to top /*
    /*------------------------------------------*/

    function init_backtotop() {
        if ($('#back-to-top').length) {
            var scrollTrigger = 100,
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function() {
                backToTop();
            });
            $('#back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 900);
            });
        }
    }

})(jQuery); // JavaScript Document

// JavaScript Document// JavaScript Document