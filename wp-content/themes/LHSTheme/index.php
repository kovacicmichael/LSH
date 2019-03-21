<?php
	get_header();
			// Load posts loop.

	function hyphenateMonth($month){
		$newMonth;
		if($month == "January"){
			$newMonth = "Jan";
		}else if($month == "February"){
			$newMonth = "Feb";
		}else if($month == "March"){
			$newMonth = "Mar";
		}else if($month == "April"){
			$newMonth = "Apr";
		}else if($month == "August"){
			$newMonth = "Aug";
		}else if($month == "September"){
			$newMonth = "Sep";
		}else if($month == "October"){
			$newMonth = "Oct";
		}else if($month == "November"){
			$newMonth = "Nov";
		}else if($month == "December"){
			$newMonth = "Dec";
		}else{
			$newMonth = $month;
		}

		return $newMonth;
	}
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
    	<img src="<?php echo get_theme_file_uri('images/Carousel/6.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides">
    	<img src="<?php echo get_theme_file_uri('images/guatemala-color-wall-blue.jpg') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/10.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides">
    	<img src="<?php echo get_theme_file_uri('images/Carousel/5.png') ?>" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>
  	<div class="mySlides">
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
    <h1 class="display-4">Our Mission</h1>
    <p class="lead">To provide bilingual and culturally sensitive services to Latina victims of domestic violence and their families.</p>
  </div>
</div>

<div class="row">
	<div class="col-md lshEvents">
		<h2 class="lshEventsNewsTitle">Events</h2>
		<div class="scrollContainer">
			<?php 
				$events = tribe_get_events( array( 
				   'posts_per_page' => 5, 
				   'start_date'     => date( 'Y-m-d H:i:s' )
				) );

				foreach ( $events as $event ) {
					$date = tribe_get_start_date( $event );
					$monthDay = explode(" ", $date);

					$month = hyphenateMonth($monthDay[0]);
				?>
					<div class="row lshEventRow">
						<div class="col-md-3">
							<a class="event-summary__date t-center" href="#">
			            		<span class="event-summary__month"><?php echo $month ?></span>
			            		<span class="event-summary__day"><strong><?php echo $monthDay[1] ?></strong></span>  
			          		</a>
						</div>
			          	<div class="col-md-8">
			          		<div class="event-summary__content">
					            <h5 class="event-summary__title"><a class="event-summary__content" href="#"><?php echo $event->post_title ?></a></h5>
					            <p><?php echo $event->post_content ?><a href="#" class="">Learn more</a></p>
					        </div>
			          	</div>
					</div>
				   <!-- echo '<h4>' . $event->post_title . '</h4>';
				   echo wpautop( $event->post_content ); -->
			<?php
				}
				
			 ?>
			
			
		</div>
	</div>
	<div class="col-md lshNews">
		<h2 class="lshEventsNewsTitle">News</h2>
		<div class="container scrollContainer">
			<?php 
			 	while(have_posts()){
					the_post(); ?>
			
			<div class="row lshEventRow">
				<!-- <div class="event-summary"> -->
					<div class="col-md-3">
						<a class="newsImageLink t-center" href="#">
		            		<?php the_post_thumbnail(); ?>
		          		</a>
					</div>
		          	<div class="col-md-8">
		          		<div class="event-summary__content">
				            <h5 class="event-summary__title"><a class="event-summary__content" href="#"><?php the_title(); ?></a></h5>
				            <p><?php the_content(); ?><a href="#" class="">Learn more</a></p>
				        </div>
		          	</div>
	        	<!-- </div> -->
			</div>

			<?php 
				}
			 ?>
			
		</div>
	</div>
</div>

<div class="container-fluid sponsorsContainer">
	<div class="container-fluid text-center">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel" >
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/dMNSLogo.jpg') ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/unitedWayLogo.jpg') ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/firstBankLogo.png') ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/energyOutreachColLogo.jpg') ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/pyramidPrintLogo.png') ?>">
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
