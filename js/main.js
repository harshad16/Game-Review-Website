$(document).ready(function(){


	//wow.js on scroll animations initialization
	wow = new WOW(
	    {
		  animateClass: 'animated',
		  mobile: false,
		  offset: 50
		}
	);
	wow.init();


	//parallax effect initialization
	$('.hero').parallax("50%", 0.3);



});

