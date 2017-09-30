/* ****************************************************************
 * Google maps Javascript
 **************************************************************** */ 
function myMap() {
	
	var myLatLng = {lat: 40.993893, lng: 22.877025};
	
	var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: myLatLng
      });
	
	var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Here we are!'
      });
}

/* ****************************************************************
 * jQuery code	
 **************************************************************** */ 
$(document).ready(function(){
	
	// The smooth nav bar animation effect
	
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	$('body').scrollspy({ target: '#menu' });
	
});
