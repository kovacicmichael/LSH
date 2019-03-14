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
		<nav class="navbar navbar-expand-lg navbar-light position-relative lshNavBar">
			<div class="container-fluid lshNavBarContainer">
				<div class="">
					<a href="<?php echo site_url() ?>">
						<img class="position-absolute lshLogoImage" src="<?php echo get_theme_file_uri('images/lshlogo.jpg'); ?>" height="125px" width="125px">
					</a>
				</div>
			  
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
				          <li><a class="dropdown-item" href="<?php echo site_url('our-survivors') ?>">Our Survivors</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('our-statistics') ?>">Our Statistics</a></li>
				        </ul>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('why-latina') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why Latina?</a>
				        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
				          <!-- <li><a class="dropdown-item" href="<?php echo site_url('why-latina') ?>">Why Latina?</a></li> -->
				          <li><a class="dropdown-item" href="<?php echo site_url('dv-in-the-latinx-community') ?>">DV in the Latinx Community</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('machismo-myths') ?>">Machismo Myths</a></li>
				          <!-- <div class="dropdown-divider"></div> -->
				          <li><a class="dropdown-item" href="<?php echo site_url('red-flags') ?>">Red Flags</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('healthy-relationships') ?>">Healthy Relationships</a></li>
				        </ul>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('get-help') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Help</a>
				        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
				          <li><a class="dropdown-item" href="<?php echo site_url('for-myself') ?>">For Myself</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('for-a-loved-one') ?>">For a Loved One</a></li>
				          <!-- <div class="dropdown-divider"></div> -->
				          <li><a class="dropdown-item" href="<?php echo site_url('our-programs') ?>">Our Programs</a></li>
				        </ul>
				      </li>
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
				        <a class="nav-link" href="#">Events</a>
				      </li>
				      <li class="nav-item dropdown" id="nav-link-last">
				        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo site_url('stay-connected') ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stay Connected</a>
				        <ul class="dropdown-menu lsh-dropdown-menu" aria-labelledby="navbarDropdown">
				          <li><a class="dropdown-item" href="<?php echo site_url('newsletter') ?>">Newsletter</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('contact-us') ?>">Contact Us</a></li>
				          <!-- <div class="dropdown-divider"></div> -->
				          
				        </ul>
				      </li>
				      <li class="nav-item">
				      	<span class="nav-link search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
				      </li>
				    </ul>
			  	</div>
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
		</nav>
	</div>


	<!-- <?php echo get_theme_file_uri('images/lshlogo.jpg'); ?> -->
