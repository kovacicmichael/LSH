jQuery(document).ready(function($) {

	$(window).scroll(function() {
	  var scrollTop = $(this).scrollTop();

	  $('.lshNavBar').css({
	    opacity: function() {
	      if(scrollTop == 0){
	      	return 1;
	      }else{
	      	return .9;
	      }
	      // var elementHeight = $(this).height();
	      // return 1 - (elementHeight - scrollTop) / elementHeight;
	    }
	  });

	  $('.exitInfoRow').css({
	    opacity: function() {
	      if(scrollTop == 0){
	      	return 1;
	      }else{
	      	return .9;
	      }
	      // var elementHeight = $(this).height();
	      // return 1 - (elementHeight - scrollTop) / elementHeight;
	    }
	  });
	});

	$(window).on('keydown', function (event) {
		// alert(event.key)
	    if (event.key === 'Escape') {
	        window.location.replace("https://google.com/");
	    }
	});

	$('.dropdown > a').click(function(){
		location.href = this.href;
	});

	$('#closeBanner').click(function(){
		window.close();
	})



    var slideIndex = 1;
    
	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function setTimeout(){
		var slideTimeout = setTimeout(showSlides(slideIndex + 1), 5000);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1} 
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none"; 
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block"; 
	  //slides[slideIndex-1].classList.remove("fade");
	  dots[slideIndex-1].className += " active";
	}

	
	showSlides(slideIndex);
	//setTimeout();

	$(".dot").on('click', function(event){
		//clearTimeout(slideTimeout);
		var id = event.target.id;
		id = id.replace("dot", "");
		currentSlide(id);

	})

	$(".next").on('click', function(event){
		//clearTimeout(slideTimeout);
		plusSlides(1);
	})

	$(".prev").on('click', function(event){
		//clearTimeout(slideTimeout);
		plusSlides(-1);
	})



	$('#logoCarousel').carousel({
	  interval: 10000
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

