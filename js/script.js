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