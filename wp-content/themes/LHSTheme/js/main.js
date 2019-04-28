jQuery(document).ready(function($) {

	$('#headerCarousel').carousel({
	  interval: 5000,
	  pause:"hover"
	})

	$('#sponsorCarousel').carousel({
	  interval: 3000
	})


	$('.carousel .carousel-item').each(function(){
	    var next = $(this).next();
	    if (!next.length) {
	    next = $(this).siblings(':first');
	    }
	    next.children(':first-child').clone().appendTo($(this));
	    
	    for (var i=0;i<2;i++) {
	        next=next.next();
	        if (!next.length) {
	        	next = $(this).siblings(':first');
	      	}
	        
	        next.children(':first-child').clone().appendTo($(this));
	      }
	});

});