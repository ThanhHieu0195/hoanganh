$(document).ready(function(){
    'use strict';
    // slider-for
    $('.carousel-slide-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.carousel-slide-nav'
    });

    // slider-nav
    $('.carousel-slide-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        prevArrow: '<a class="arrow arrow--left" href="#" role="button"><span class="icon-custom icon-slide flaticon-left-arrow"></span></a>',
        nextArrow: '<a class="arrow arrow--right" href="#" role="button"><span class="icon-custom icon-slide flaticon-right-arrow"></span></a>',
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
    
