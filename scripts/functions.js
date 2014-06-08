$(document).ready(function() {

	$(".box-shows").fadeIn(1500, function() {
		// Animation complete
	});
	
	$(".body-show-page .box-show-info").fadeIn(1500, function() {
		// Animation complete
	});
	
	$(".body-show-page .show-banner").fadeIn(1500, function() {
		// Animation complete
	});

	//Fixed Nav
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
		
	    if (scroll >= 86) {
	        $(".header-wrapper").addClass("fixed-navbar");
			$(".main-wrapper").addClass("scrolled");
	    } else if (scroll < 86) {
		    $(".header-wrapper").removeClass("fixed-navbar");
			$(".main-wrapper").removeClass("scrolled");
	    }
	}); //missing );
	
	//Hover of shows
	$('.box-shows li').mouseenter(function() {
		//$(this).find('div.info-hover').show();
	});
	
	$('.box-shows li').mouseleave(function() {
		//$(this).find('div.info-hover').hide();
	});
});