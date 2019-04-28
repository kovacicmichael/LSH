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
		var subContent = this.nextSibling;
		if(subContent.classList.value.includes('subActive')){
			subContent.classList.remove('subActive');
			this.classList.remove('arrowActive');
		}else{
			subContent.classList.add('subActive');
			this.classList.add('arrowActive');
		}
	});

	$(".subNavArrows").on('click', function(event){
		var subContent = this.nextSibling;
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

	//Stay Connected Form JS
	// $('#newsletterForm').onsubmit(function(event){
	// 	event.preventDefault();
	// 	var values = $(this).serialize();
	// })

	function openCurrentPageMenu(){
		var sideNavBar;
		var section = document.getElementsByClassName('current_page_item');
		for (var i = 0; i < section.length; i++) {
			var parent = section[i].parentElement.className;
			if(parent.includes('dropdown-content'))
				sideNavBar = section[i];
				break;
		}
		
		if(sideNavBar.className.includes('nested_sub_item')){
			var subNavArrow = sideNavBar.parentElement.previousElementSibling;
			var parentNavArrow = sideNavBar.parentElement.parentElement.parentElement.previousElementSibling;

			if(!parentNavArrow.className.includes('arrowActive'))
				parentNavArrow.click();
			if(!subNavArrow.className.includes('arrowActive'))
				subNavArrow.click();
		}
		var navArrow = sideNavBar.parentElement.previousElementSibling;
		if(!navArrow.className.includes('arrowActive'))
			navArrow.click();
	};


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
	  if(section != null){
	  	  var isCollapsed = section.getAttribute('data-collapsed') === 'true';
	    
		  if(isCollapsed) {
		    expandSection(section)
		    section.setAttribute('data-collapsed', 'false')
		  } else {
		    collapseSection(section)
		  }
	  }
	  
	};

	function pageOpenCurrentPageMenu(){
		var subNavBarItem;
		var navBarItem;
		var section = document.getElementsByClassName('current_page_item');
		for (var i = 0; i < section.length; i++) {
			var parent = section[i].parentElement.className;
			if(parent.includes('dropdown-pages-content')){
				subNavBarItem = section[i];
				break;
			}else if(parent.includes('side-panel-link-list')){
				navBarItem = section[i];
				break;
			}
				
		}
		if(subNavBarItem != null){
			var navArrow = subNavBarItem.parentElement.previousElementSibling;
			if(!navArrow.className.includes('arrowActive'))
				navArrow.click();
		}

		if(navBarItem != null){
			var arrowNode;
			var childNodes = navBarItem.childNodes;
			childNodes.forEach(function(node){
				console.log(node);
				if(node.nodeName == "DIV" && node.className.includes('arrowActive')){
					arrowNode = node;
					arrowNode.click();
				}
			})
		}
		
	};


	//SideBarNavMenu 

	// This is the important part!

	function collapseSubSection(element) {
	  // get the height of the element's inner content, regardless of its actual size
	  var subSectionHeight = element.scrollHeight;
	  var parentSectionHeight = element.parentElement.parentElement.scrollHeight;
	  
	  // temporarily disable all css transitions
	  var elementTransition = element.style.transition;
	  element.style.transition = '';
	  
	  // on the next frame (as soon as the previous style change has taken effect),
	  // explicitly set the element's height to its current pixel height, so we 
	  // aren't transitioning out of 'auto'
	  requestAnimationFrame(function() {
	    element.style.height = subSectionHeight + 'px';
	    element.style.transition = elementTransition;
	    
	    // on the next frame (as soon as the previous style change has taken effect),
	    // have the element transition to height: 0
	    requestAnimationFrame(function() {
	        element.style.height = 0 + 'px';
	  		element.parentElement.parentElement.style.height = parentSectionHeight - subSectionHeight + 'px';
	    });
	  });
	  
	  // mark the section as "currently collapsed"
	  element.setAttribute('data-collapsed', 'true');
	}

	function expandSubSection(element) {
	  // get the height of the element's inner content, regardless of its actual size
	  var subSectionHeight = element.scrollHeight;
	  var parentSectionHeight = element.parentElement.parentElement.scrollHeight;
	  
	  // have the element transition to the height of its inner content
	  element.style.height = subSectionHeight + 'px';
	  element.parentElement.parentElement.style.height = parentSectionHeight + subSectionHeight + 'px';

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
	var subClassName = document.getElementsByClassName("subNavArrows");
	var sidePageClassName = document.getElementsByClassName("navArrowPages");

	var pageTransitionFunction = function(e) {
	  var section = e.currentTarget.parentElement.querySelector('.dropdown-pages-content.collapsible');
	  var isCollapsed = section.getAttribute('data-collapsed') === 'true';
	    
	  if(isCollapsed) {
	    expandSection(section)
	    section.setAttribute('data-collapsed', 'false')
	  } else {
	    collapseSection(section)
	  }
	};

	var subPageTransitionFunction = function(e) {
	  var section = e.currentTarget.parentElement.querySelector('.dropdown-content.collapsible');
	  var isCollapsed = section.getAttribute('data-collapsed') === 'true';
	    
	  if(isCollapsed) {
	    expandSubSection(section)
	    section.setAttribute('data-collapsed', 'false')
	  } else {
	    collapseSubSection(section)
	  }
	};

	for (var i = 0; i < classname.length; i++) {
	    classname[i].addEventListener('click', transitionFunction, false);
	}

	for (var i = 0; i < subClassName.length; i++) {
	    subClassName[i].addEventListener('click', subPageTransitionFunction, false);
	}

	for (var i = 0; i < sidePageClassName.length; i++) {
	    sidePageClassName[i].addEventListener('click', pageTransitionFunction, false);
	}

	pageOpenCurrentPageMenu();

});

