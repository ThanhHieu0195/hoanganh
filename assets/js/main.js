$(document).ready(function(){
    'use strict';
    // slider-for
    $('.carousel-post .carousel-slide-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.carousel-slide-nav'
    });

    // slider-nav
    $('.carousel-post .carousel-slide-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        arrows: true,
        prevArrow: '<a class="arrow arrow--left" href="#" role="button"><span class="ion-ios-arrow-thin-left"></span></a>',
        nextArrow: '<a class="arrow arrow--right" href="#" role="button"><span class="ion-ios-arrow-thin-right"></span></a>',
        focusOnSelect: true,
        asNavFor: '.carousel-slide-for',
        responsive:[
        {
            breakpoint: 769,
            settings: {
                dots: true,
                arrows: false,
            }
        }
        ]
    });
});
$(document).ready(function(){
    'use strict';
    // slider-for
    $('.sc-carousel-layout-2 .carousel-slide-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        prevArrow: '<a class="arrow arrow--left" href="#" role="button"><span class="fas fa-angle-left></span></a>',
        nextArrow: '<a class="arrow arrow--right" href="#" role="button"><span class="fas fa-angle-down"></span></a>',
        asNavFor: '.carousel-slide-nav'
    });

    // slider-nav
    $('.sc-carousel-layout-2 .carousel-slide-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:false,
        arrows: false,
        focusOnSelect: true,
        asNavFor: '.carousel-slide-for',
        responsive:[
        {
            breakpoint: 768,
            settings: {
                dots: true,
                arrows: false,
            }
        }
        ]
    });
});
$( document ).ready(function(e) {
    $('.banner-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        infinite: true,
        arrows: true,
        prevArrow: '<a class="arrow arrow--left" href="#" role="button"><span class="ion-chevron-left"></span></a>',
        nextArrow: '<a class="arrow arrow--right" href="#" role="button"><span class="ion-chevron-right"></span></a>',
        slidesToShow:  1,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false,
              }
            },
        ]
    });
});

$(document).ready(function() {
    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
      var localStart = start;
      setInterval(function() {
        if (localStart < value) {
          localStart++;
          counters[id].innerHTML = localStart;
        }
      }, 40);
    }

    for (j = 0; j < countersQuantity; j++) {
      count(0, counter[j], j);
    }
});

function playPause() {
    var myVideo = $('#my_video_1');
    if (myVideo[0].paused) {
        myVideo[0].play();
        myVideo.parent().addClass('active');
    }
    else {
        myVideo[0].pause();
        myVideo.parent().removeClass('active');
    }
} 

$( document ).ready(function(e) {
    var $slz_hamburger = $('.header-main-01 .slz-hamburger-menu ');
    var $slz_hamburger_bar = $('.header-main-01 .slz-hamburger-menu .bar');
    var $icon_click   = $('#menu.main-menu-mobile li.has-child i');
    var $open_submenu = $('.main-menu-mobile .sub-menu');
    $slz_hamburger.on('click', function() {
        $slz_hamburger_bar.toggleClass('animate');
        $('.main-menu-mobile').toggleClass('open');
    })
 
    //Menu click mobile
    $icon_click.on('click', function(e) {
     e.preventDefault();
     if($icon_click.parent().hasClass('open') === true) {
        $icon_click.parent().removeClass('open');
     }
     else {
       $(e.target).parent().addClass('open');
     }
    })
 
     //hide menu mobile when click outside
       $('body').on('click', function (event) {
         if ($('.slz-hamburger-menu').has(event.target).length === 0 && !$('.slz-hamburger-menu').is(event.target) && $('.main-menu-mobile').has(event.target).length === 0 && !$('.main-menu-mobile').is(event.target)) {
           if ($('.main-menu-mobile').hasClass('open')) {
             $('.slz-hamburger-menu .bar').toggleClass('animate');
             $('.main-menu-mobile').toggleClass('open');
 
             // delete dropdown open
             $icon_click.closest('.has-child').removeClass('open');
           }
         }
       });
 });
$('#parallax').parallax({
	invertX: false,
	invertY: false,
	scalarX: 12,
	frictionY: .1
});

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.header-main-01').addClass('fixed');
    } else {
        $('.header-main-01').removeClass('fixed');
    }
});
