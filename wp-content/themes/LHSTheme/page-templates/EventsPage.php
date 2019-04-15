<?php /* Template Name: EventsPage */ 

  $parent = wp_get_post_parent_id(get_the_ID());
?>

<?php get_header();

while(have_posts()){
  the_post(); ?>
  <div class="fluid-container">
    <div class="jumbotron eventsJumbotron" style="background-image: url(<?php echo get_theme_file_uri('images/about-us.jpg'); ?>);">
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        
      </div> 
    </div> 
  </div>
  <div class="fluid-container container--narrow page-section">
    <div class="row">
      <div class="col-md-12 generic-content-event">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bottom-page-flag"></div>
    </div>
  </div>

<?php };
get_footer();
?>