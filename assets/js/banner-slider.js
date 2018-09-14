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
