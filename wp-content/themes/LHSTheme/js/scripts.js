jQuery(document).ready(function($) {

	$(window).scroll(function() {
	  var scrollTop = $(this).scrollTop();

	  $('.navbarContainer').css({
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

	  $('#sidebar-wrapper').css({
	  	opacity: function() {
	      if(scrollTop == 0){
	      	return 1;
	      }else{
	      	return .9;
	      }
	      // var elementHeight = $(this).height();
	      // return 1 - (elementHeight - scrollTop) / elementHeight;
	    }
	  })
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

	$('#collapseButton').on('click', function(event){
		var show = $('#navbarNav')[0].classList.value.includes("show");

		if(show){
			$('.lshLogoImage')[0].style.display = '';
		}else{
			$('.lshLogoImage')[0].style.display = 'none';
		}
	});

	$(".menu-toggle").click(function(e) {
	    e.preventDefault();
	    $("#sidebar-wrapper").toggleClass("active");
	    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
	    $(this).toggleClass("active");

	    openCurrentPageMenu();
	});

	$(".navArrows").on('click', function(event){
		var subContent = this.nextSibling.nextSibling;
		if(subContent.classList.value.includes('subActive')){
			subContent.classList.remove('subActive');
			this.classList.remove('arrowActive');
		}else{
			subContent.classList.add('subActive');
			this.classList.add('arrowActive');
		}
	});

	$(".navArrowPages").on('click', function(event){
		var subContent = this.nextSibling;
		if(subContent.classList.value.includes('subActive')){
			subContent.classList.remove('subActive');
			this.classList.remove('arrowActive');
		}else{
			subContent.classList.add('subActive');
			this.classList.add('arrowActive');
		}
	});

	function openCurrentPageMenu(){
		var sideNavBar;
		var section = document.getElementsByClassName('current_page_item');
		for (var i = 0; i < section.length; i++) {
			var parent = section[i].parentElement.className;
			if(parent.includes('dropdown-content'))
				sideNavBar = section[i];
				break;
		}
		
		var navArrow = sideNavBar.parentElement.previousElementSibling;
		if(!navArrow.className.includes('arrowActive'))
			navArrow.click();
	};


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

	//SideBarNavMenu 

	// This is the important part!

	function collapseSection(element) {
	  // get the height of the element's inner content, regardless of its actual size
	  var sectionHeight = element.scrollHeight;
	  
	  // temporarily disable all css transitions
	  var elementTransition = element.style.transition;
	  element.style.transition = '';
	  
	  // on the next frame (as soon as the previous style change has taken effect),
	  // explicitly set the element's height to its current pixel height, so we 
	  // aren't transitioning out of 'auto'
	  requestAnimationFrame(function() {
	    element.style.height = sectionHeight + 'px';
	    element.style.transition = elementTransition;
	    
	    // on the next frame (as soon as the previous style change has taken effect),
	    // have the element transition to height: 0
	    requestAnimationFrame(function() {
	      element.style.height = 0 + 'px';
	    });
	  });
	  
	  // mark the section as "currently collapsed"
	  element.setAttribute('data-collapsed', 'true');
	}

	function expandSection(element) {
	  // get the height of the element's inner content, regardless of its actual size
	  var sectionHeight = element.scrollHeight;
	  
	  // have the element transition to the height of its inner content
	  element.style.height = sectionHeight + 'px';

	  // when the next css transition finishes (which should be the one we just triggered)
	  element.addEventListener('transitionend', function(e) {
	    // remove this event listener so it only gets triggered once
	    element.removeEventListener('transitionend', arguments.callee);
	    
	    // remove "height" from the element's inline styles, so it can return to its initial value
	    //element.style.height = null;
	  });
	  
	  // mark the section as "currently not collapsed"
	  element.setAttribute('data-collapsed', 'false');
	}

	var classname = document.getElementsByClassName("navArrows");
	var sidePageClassName = document.getElementsByClassName("navArrowPages");

	var transitionFunction = function(e) {
	  var section = e.currentTarget.parentElement.querySelector('.dropdown-content.collapsible');
	  var isCollapsed = section.getAttribute('data-collapsed') === 'true';
	    
	  if(isCollapsed) {
	    expandSection(section)
	    section.setAttribute('data-collapsed', 'false')
	  } else {
	    collapseSection(section)
	  }
	};

	for (var i = 0; i < classname.length; i++) {
	    classname[i].addEventListener('click', transitionFunction, false);
	}

	for (var i = 0; i < sidePageClassName.length; i++) {
	    sidePageClassName[i].addEventListener('click', transitionFunction, false);
	}


	openCurrentPageMenu();
});

