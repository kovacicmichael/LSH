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

	function substrwords($text, $maxchar, $end='...') {
	    if (strlen($text) > $maxchar || $text == '') {
	        $words = preg_split('/\s/', $text);      
	        $output = '';
	        $i      = 0;
	        while (1) {
	            $length = strlen($output)+strlen($words[$i]);
	            if ($length > $maxchar) {
	                break;
	            } 
	            else {
	                $output .= " " . $words[$i];
	                ++$i;
	            }
	        }
	        $output .= $end;
	    } 
	    else {
	        $output = $text;
	    }
	    return $output;
	}
?>

<!-- Slideshow container -->
<div id="headerCarousel" class="carousel slide w-100" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#headerCarousel" data-slide-to="1"></li>
    <li data-target="#headerCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner header-inner">
    <div class="carousel-item active">
    	<div class="item item1" style="background-image: url(<?php echo get_theme_file_uri('images/CarouselOne.png') ?>)">
    		<div class="carousel-caption">
    			<a class="programsCarouselLink">Our Programs</a>
			</div>
    	</div>
    </div>
    <div class="carousel-item">
    	<div class="item item2" style="background-image: url(<?php echo get_theme_file_uri('images/CarouselTwo.jpg') ?>)">
    		<div class="container">
    		<div class="carousel-caption">
    			<a class="programsCarouselLink">Second Slide</a>
			</div>
			</div>
    	</div>
    </div>
    <div class="carousel-item">
    	<div class="item item3" style="background-image: url(<?php echo get_theme_file_uri('images/CarouselThree.png') ?>)">
    		<div class="carousel-caption">
    			<a class="programsCarouselLink">Support Our Cause</a>
			</div>
    	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="jumbotron jumbotron-fluid missionStatement">
  <div class="container-fluid">
    <h1 class="display-4">Our Mission</h1>
    <p class="lead">To provide bilingual and culturally sensitive services to Latina victims of domestic violence and their families.</p>
  </div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-6 lshEvents">
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
							<a class="event-summary__date t-center" href="<?php echo get_permalink( $event, false ); ?>">
			            		<span class="event-summary__month"><?php echo $month ?></span>
			            		<span class="event-summary__day"><strong><?php echo $monthDay[1] ?></strong></span>  
			          		</a>
						</div>
			          	<div class="col-md-8">
			          		<div class="event-summary__content">
					            <h5 class="event-summary__title"><a class="event-summary__content" href="<?php echo get_permalink( $event, false ); ?>"><?php echo $event->post_title ?></a></h5>
					            <p><?php 
					            	$text = $event->post_content;
									$newtext = substrwords($text, 100);
									echo $newtext;
					            ?><a href="<?php echo get_permalink( $event, false ); ?>" class="">Learn more</a></p>
					        </div>
			          	</div>
					</div>
			<?php
				}
				
			 ?>
		</div>
	</div>
	
	<div class="col-sm-12 col-md-6 lshNews">
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
				            <p><?php 
				            	the_excerpt();
				            ?><a href="#" class="">Learn more</a></p>
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
	        <div id="sponsorCarousel" class="carousel slide w-100" data-ride="carousel" >
	            <div class="carousel-inner logo-inner w-100" role="listbox">
	                <div class="carousel-item active">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/dMNSLogo.jpg') ?>">
	                </div>
	                <div class="carousel-item">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/unitedWayLogo.jpg') ?>">
	                </div>
	                <div class="carousel-item">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/firstBankLogo.png') ?>">
	                </div>
	                <div class="carousel-item">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/energyOutreachColLogo.jpg') ?>">
	                </div>
	                <div class="carousel-item">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="<?php echo get_theme_file_uri('images/Sponsors/pyramidPrintLogo.png') ?>">
	                </div>
	                <!-- <div class="carousel-item">
	                    <img class="d-block col-sm-6 col-md-3 img-fluid" src="http://placehold.it/350x180?text=6">
	                </div> -->
	            </div>
	            <a class="carousel-control-prev" href="#sponsorCarousel" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#sponsorCarousel" role="button" data-slide="next">
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
