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
// var map;
// function loadMarkers() {
//   console.log('creating markers')
//   map.data.forEach(function(feature) {
    
//     // geojson format is [longitude, latitude] but google maps marker position attribute
//     // expects [latitude, longitude]
//     var latitude = feature.getGeometry().get().lat()
//     var longitude = feature.getGeometry().get().lng()
//     var titleText = feature.getProperty('title')

//     var marker = new google.maps.Marker({
//       position: {lat: latitude, lng:longitude},
//       title: titleText,
//       map: map
//      });
//   });
// }
function myMap() {
  let lat = parseFloat($('#googleMap').data('lat'));
  let lng = parseFloat($('#googleMap').data('lng'));
    var mapProp= {
        center:new google.maps.LatLng(lat,lng),
        zoom:15,
    };
    // geojson_url = 'https://raw.githubusercontent.com/gizm00/blog_code/master/appendto/python_maps/collection.geojson';
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    // map.data.loadGeoJson(geojson_url, null, loadMarkers) 
}

$(document).ready(function() {
  myMap();
});


// var map;
// var markers = []

// // after the geojson is loaded, iterate through the map data to create markers
// // and add the pop up (info) windows
// function loadMarkers() {
//   console.log('creating markers')
//   map.data.forEach(function(feature) {
    
//     // geojson format is [longitude, latitude] but google maps marker position attribute
//     // expects [latitude, longitude]
//     var latitude = feature.getGeometry().get().lat()
//     var longitude = feature.getGeometry().get().lng()
//     var titleText = feature.getProperty('title')
//     var descriptionText = feature.getProperty('description')

//     var marker = new google.maps.Marker({
//       position: {lat: latitude, lng:longitude},
//       title: titleText,
//       map: map
//      });
//   });
// }

// function initMap() {
//     map_options = {
//       zoom: 10,
//       mapTypeId: google.maps.MapTypeId.HYBRID,
//       center: {lat: 42.9446, lng: -122.1090}
//     }
    
//     map_document = document.getElementById('map')
//     map = new google.maps.Map(map_document,map_options);
//     geojson_url = 'https://raw.githubusercontent.com/gizm00/blog_code/master/appendto/python_maps/collection.geojson'

//     console.log('loading geojson')
//     map.data.loadGeoJson(geojson_url, null, loadMarkers) 
 
// }

// google.maps.event.addDomListener(window, 'load', initMap);

// google.maps.event.addDomListener(window, 'load', initMap);

$(document).ready(function(){
    $('.block-item .read-more').on('click', function(){
        $('.block-item .description').toggleClass('hidden');
    })
})