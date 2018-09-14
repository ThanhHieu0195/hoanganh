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
