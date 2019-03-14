<?php /* Template Name: DefaultPage */ ?>

<?php get_header();

while(have_posts()){
  the_post(); ?>

  
  <div class="fluid-container">
    <div class="jumbotron aboutJumbotron" style="background-image: url(<?php echo get_theme_file_uri('images/about-us.jpg'); ?>);">
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>TODO</p>
        </div>
      </div> 
    </div> 
  </div>
  <div class="fluid-container container--narrow page-section">
    <!-- <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('') ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a> <span class="metabox__main">Our History</span></p>
    </div> -->
    <div class="row">
      <div class="col-md-4 top-page-flag">
          <h1 class="flagTitle"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 side-menu">
        <ul class="side-panel-link-list">
          <?php 
              $parent = wp_get_post_parent_id(get_the_ID());
              if($parent){
                $findChildrenOf = $parent;
                    wp_list_pages(array(
                      'title_li' => null,
                      'child_of' => 34

                    ));
              }else{
                $findChildrenOf = get_the_ID();
              }
            wp_list_pages(array(
                'title_li' => null,
                'child_of' => 34

            ));
           ?>
          <li class="side-panel-link-item"><a href="<?php echo site_url('about-us') ?>">About Us</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('understanding-the-issue') ?>">Understanding the Issue</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('statistics') ?>">Statistics</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('common-misconceptions') ?>">Common Misconceptions</a></li>
          <li class="side-panel-link-item"><a href="<?php echo site_url('changing-the-conversation') ?>">Changing the Conversation</a></li>
        </ul>
        
        
      </div>
      <div class="col-md-6 generic-content">
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