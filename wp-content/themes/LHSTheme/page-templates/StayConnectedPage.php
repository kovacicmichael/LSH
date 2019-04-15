<?php /* Template Name: StayConnectedPage */ 

  $parent = wp_get_post_parent_id(get_the_ID());
?>

<?php get_header();

while(have_posts()){
  the_post(); ?>

  
  <div class="fluid-container">
    <div class="jumbotron pageJumbotron stayConnectedJumbotron" style="background-image: url(<?php echo get_theme_file_uri('images/colorfulBird.jpg'); ?>);">
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        
      </div> 
    </div> 
  </div>
  <div class="fluid-container container--narrow page-section">
    <!-- <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('') ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a> <span class="metabox__main">Our History</span></p>
    </div> -->
    <div class="row">
      <div class="col-md-4 top-page-flag-green">
          <a href="<?php echo get_permalink($parent); ?>" id="flagTitle"><?php echo get_the_title($parent); ?></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 side-menu">
        <!-- <h3 class='side-panel-header'><a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a></h3> -->
        <ul class="side-panel-link-list pagePageItem">
          <?php 
              if($parent){
                $findChildrenOf = $parent;
                    
              }else{
                $findChildrenOf = get_the_ID();
              }
              wp_list_pages(array(
                  'title_li' => null,
                  'child_of' => $findChildrenOf
              ));
           ?>
          <!-- <li class="side-panel-link-item"><a href="<?php echo site_url('why-latina') ?>">Why Latina</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('dv-in-the-latinx-community') ?>">DV in the Latinx Community</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('machismo-myths') ?>">Machismo Myths</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('red-flags') ?>">Red Flags</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('healthy-relationships') ?>">Healthy Relationships</a></li> -->
        </ul>
        
        
      </div>
      <div class="col-md-7 generic-content">
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