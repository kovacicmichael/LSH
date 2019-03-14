<?php
	get_header();
			// Load posts loop.
?>

<!-- Slideshow container -->
<div class="slideshow-container" style="height: 500px;">

  <!-- Full-width images with number and caption text -->
  <?php
	  // $directory = get_theme_file_uri('images/Carousel');
	  // echo $directory;
	  // $files = scandir('http://localhost:8888/LatinaSafeHouse/wp-content/themes/LHSTheme/images/Carousel');
	  // foreach($files as $file) {
		 //  echo $file;
	  // }
  ?>
	<div class="mySlides">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/10.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides fade">
    	<img src="<?php echo get_theme_file_uri('images/guatemala-color-wall-blue.jpg') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides fade">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/5.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides fade">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/6.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides fade">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/7.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  
  <!-- Next and previous buttons -->
  <a class="prev" >&#10094;</a>
  <a class="next" >&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div class="dotDiv" >
  <span class="dot" id="dot1" ></span> 
  <span class="dot" id="dot2" ></span> 
  <span class="dot" id="dot3" ></span> 
  <span class="dot" id="dot4" ></span> 
  <span class="dot" id="dot5" ></span> 
</div>

<div class="jumbotron jumbotron-fluid missionStatement">
  <div class="container">
    <h1 class="display-4">Mission Statment goes here.</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="row">
	<div class="col-md lshEvents">
		<h2 class="lshEventsNewsTitle">Events</h2>
		<div class="scrollContainer">
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
		</div>
	</div>
	<div class="col-md lshNews">
		<h2 class="lshEventsNewsTitle">News</h2>
		<div class="container scrollContainer">
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="event-summary__date t-center" href="#">
		            		<span class="event-summary__month">Mar</span>
		            		<span class="event-summary__day"><strong>25</strong></span>  
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#">Poetry in the 100</a></h5>
				            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>
		</div>
	</div>
</div>

<div class="container-fluid sponsorsContainer">
	<div class="container-fluid text-center">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel" >
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=1">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=2">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=3">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=4">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=5">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=6">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>  
</div>


<?php
get_footer();

?>

<!-- <?php echo get_theme_file_uri('images/Carousel/5.png'); ?> -->
