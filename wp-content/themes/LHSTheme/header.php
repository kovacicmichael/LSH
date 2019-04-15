<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body>
	<div class="navbarContainer">
		<div class="exitInfoRow">
				<div class="exitColumn2"><span class="exitColumnText">CLIENTS: Clear your computer history for safety. Learn how <a href="<?php echo site_url('clear-your-browsing-history') ?>">here</a>.</span></div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light position-relative lshNavBar lshNavBarContainer">
			<a class="navbar-brand" href="<?php echo site_url() ?>">
				<img class="position-absolute lshLogoImage" src="<?php echo get_theme_file_uri('images/lshlogo.jpg'); ?>" height="125px" width="125px">
			</a>
			<!-- <button class="navbar-toggler" id="collapseButton" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button> -->
			<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav lshLinkList">
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url() ?>">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('about-us') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
			          <!-- <li><a class="dropdown-item" href="<?php echo site_url('about-us') ?>">About Us</a></li> -->
			          <li><a class="dropdown-item" href="<?php echo site_url('our-mission') ?>">Our Mission</a></li>
			          
			          <li><a class="dropdown-item" href="<?php echo site_url('our-team') ?>">Our Team</a></li>	
			          <li><a class="dropdown-item" href="<?php echo site_url('our-partners') ?>">Our Partners</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('our-programs') ?>">Our Programs</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('our-survivors') ?>">Our Survivors</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('our-statistics') ?>">Our Statistics</a></li>
			        </ul>
			      </li>
			      <!-- <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('why-latina') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why Latina?</a>
			        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
			          <li><a class="dropdown-item" href="<?php echo site_url('dv-in-the-latinx-community') ?>">DV in the Latinx Community</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('machismo-myths') ?>">Machismo Myths</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('red-flags') ?>">Red Flags</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('healthy-relationships') ?>">Healthy Relationships</a></li>
			        </ul>
			      </li> -->
			      <!-- <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('get-help') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Help</a>
			        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
			          <li><a class="dropdown-item" href="<?php echo site_url('for-myself') ?>">For Myself</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('for-a-loved-one') ?>">For a Loved One</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('our-programs') ?>">Our Programs</a></li>
			        </ul>
			      </li> -->
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('support') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
			        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
			          <li><a class="dropdown-item" href="<?php echo site_url('volunteer') ?>">Volunteer</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('donate') ?>">Donate</a></li>
			          <!-- <div class="dropdown-divider"></div> -->
			          <li><a class="dropdown-item" href="<?php echo site_url('fundraise') ?>">Fundraise</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('shop') ?>">Shop</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('run') ?>">Run</a></li>
			        </ul>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('events') ?>">Events</a>
			      </li>
			      <li class="nav-item dropdown" id="nav-link-last">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('stay-connected') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stay Connected</a>
			        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
			          <li><a class="dropdown-item" href="<?php echo site_url('newsletter') ?>">Newsletter</a></li>
			          <li><a class="dropdown-item" href="<?php echo site_url('contact-us') ?>">Contact Us</a></li>
			        </ul>
			      </li>
			      <li class="nav-item">
			      	<span class="nav-link search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
			      </li>
			    </ul>
		  	</div>
		  	<div class="bannersGroup">
			  	<a href="#" class="banners donateBanner">
				    	<div class="bannerText">DONATE</div>
				</a>
				<a href="#" class="banners espanolBanner">
				    	<div class="bannerText">ESPAÑOL</div>
				</a>
				<a href="https://google.com/" class="banners exitBanner" id="closeBanner">
				    	<div class="bannerText">EXIT</div>
				</a>
			</div>
			<!-- </div> -->
		</nav>

		<div class="sideNavBar">
			<a class="menu-toggle rounded" href="#">
		      <i class="fa fa-bars"></i>
		    </a>
		    <nav id="sidebar-wrapper">
		      <ul class="sidebar-nav">
		        <li class="sidebar-brand">
		          <a class="js-scroll-trigger" href="<?php echo site_url() ?>">Latina SafeHouse</a>
		        </li>
		        <li class="sidebar-nav-item">
		          <a class="js-scroll-trigger" href="<?php echo site_url() ?>">Home</a>
		        </li>
		        <li class="sidebar-nav-item dropdownSideMenu">
		          <a class="js-scroll-trigger subMenuHeader" href="<?php echo site_url('about-us') ?>">About Us</a>
		          <div class="navArrows">&#60;</div>
		          <ul class="dropdown-content collapsible" data-collapsed=true>
		          	<?php 
		          	$page = get_page_by_title( 'About Us' );
		          	$id = $page->ID;
		              wp_list_pages(array(
		                  'title_li' => null,
		                  'child_of' => $id
		              ));
		            ?>
		          </ul>
		        </li>
		        <li class="sidebar-nav-item dropdownSideMenu">
		          <a class="js-scroll-trigger subMenuHeader" href="<?php echo site_url('get-help') ?>">Get Help</a>
		          <div class="navArrows">&#60;</div>
		          <ul class="dropdown-content collapsible" data-collapsed=true >
		          	<?php 
		          	$page = get_page_by_title( 'Get Help' );
		          	$id = $page->ID;
		              wp_list_pages(array(
		                  'title_li' => null,
		                  'child_of' => $id
		              ));
		            ?>
		          </ul>
		        </li>
		        <li class="sidebar-nav-item dropdownSideMenu">
		          <a class="js-scroll-trigger subMenuHeader" href="<?php echo site_url('donate') ?>">Donate</a>
		          <div class="navArrows">&#60;</div>
		          <ul class="dropdown-content collapsible" data-collapsed=true>
		          	<?php 
		          	$page = get_page_by_title( 'Donate' );
		          	$id = $page->ID;
		              wp_list_pages(array(
		                  'title_li' => null,
		                  'child_of' => $id
		              ));
		            ?>
		          </ul>
		        </li>
		        <li class="sidebar-nav-item">
		          <a class="js-scroll-trigger" href="contact">Events</a>
		        </li>
		        <li class="sidebar-nav-item dropdownSideMenu">
		          <a class="js-scroll-trigger subMenuHeader" href="<?php echo site_url('stay-connected') ?>">Stay Connected</a>
		          <div class="navArrows">&#60;</div>
		          <ul class="dropdown-content collapsible" data-collapsed=true>
		          	<?php 
		          	$page = get_page_by_title( 'Stay Connected' );
		          	$id = $page->ID;
		              wp_list_pages(array(
		                  'title_li' => null,
		                  'child_of' => $id
		              ));
		            ?>
		          </ul>
		        </li>
		        <li class="sidebar-nav-item">
		          <a class="js-scroll-trigger" href="contact">Español</a>
		        </li>
		      </ul>
			  
		        <div class="icons">
	              <a href="https://www.facebook.com/LatinaSafeHouse/" target="_blank" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	              <!-- <br /> -->
	              <a href="https://twitter.com/latinasafehouse?lang=en" target="_blank" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	              <!-- <br /> -->
	              <a href="https://www.instagram.com/latina_safehouse_co/" target="_blank" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	          </div>
		      <footer id="navFooter">
		      	LSH 2019
		      </footer>
		    </nav>
		</div>

	</div>


	<!-- <?php echo get_theme_file_uri('images/lshlogo.jpg'); ?> -->
