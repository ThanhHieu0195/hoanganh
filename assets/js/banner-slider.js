$( document ).ready(function(e) {
  $('.banner-slider').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 10000,
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