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


$(document).ready(function(){
    $('.block-item .read-more').on('click', function(){
        $(this).parent('.block-content').find('.description').toggleClass('show');
    });
    
    $('.js-btn-send-email').on('click', function() {
        let email = $('.wrap-form-email input').val();
        $.post(ajaxurl, {action: 'front', method: 'send-mail', email: email}, function(res){
            let json = $.parseJSON(res);
            if (json.status) {
                if (language.params.current == 'vi') {
                    alert('Email của bạn đã được gửi đến hệ thống');
                } else {
                    alert('Your email saved!');
                }
            }
        });
    });
    
    // video wrap about
    if ($('.js-btn-get-video').length > 0) {

        let offset_video = 0;
        $('.js-btn-get-video').on('click', function() {
            offset_video += 6;
            $.get(ajaxurl + '?action=front&method=get-video&offset=' + offset_video, function(res) {
                let json = $.parseJSON(res);
                $('.js-wrap-videos').append(json.html);
                if (!json.next) {
                    $('.js-btn-get-video').hide();
                }
            });
        });
    }
})