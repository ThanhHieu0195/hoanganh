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

    // Height match
    $('.col-equal').matchHeight({
        property: 'height'
    });
 });

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.header-main-01').addClass('fixed');
    } else {
        $('.header-main-01').removeClass('fixed');
    }
});
$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});

function myMap() {
  let lat = parseFloat($('#googleMap').data('lat'));
  let lng = parseFloat($('#googleMap').data('lng'));
    var mapProp= {
        center:new google.maps.LatLng(lat,lng),
        zoom:15,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
