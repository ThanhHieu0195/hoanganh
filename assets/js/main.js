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

	if (recaptcha.methods.isExists()) {
    recaptcha.init();
    recaptcha.methods.verify();
  }
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

var recaptcha = {
  params: {
    serect: '',
    selfElement: '.g-recaptcha',
    urlVerify: 'https://www.google.com/recaptcha/api/siteverify'
  },
  init: function () {
    recaptcha.params.serect = $(recaptcha.params.selfElement).data('serect');
  },
  methods: {
    isExists: function () {
      if ($(recaptcha.params.selfElement).length > 0) {
        return true;
      }
      return false;
    },
    verify: function () {
      response = '03AL4dnxqFTrU1_v6KTM2WyW0WvUw-44XMlHa4gZGiGE4bW5zriL0lDbLL3n-qnuIXr84AN4bV6BYM8tkL-i14hg9yhXMKkJv12FaF9Z-M4TpfMJ4i-yHsaiECRRmX8MrEvNsshlocKhPdKSWAy1CmXWZ3QRd0MtXvjrc-AT76K69KCv-fdfh1CZ_V_bx2b0p19CIlUv1aaeXAGKFWBvyWM0X3zGNklO51iJln3iSQZi2Ksi1S3Z0GFvSI4Toembc7CSieh2FhOLsZ7KLI-zBPZyiOPdASai5N5g';
      $.ajax({
        url: 'https://www.google.com/recaptcha/api/siteverify',
        data: {serect: recaptcha.params.serect, response: response},
        method: 'POST',
        success: function (res) {
          console.log(res);
        }
      });
    }
  }
}