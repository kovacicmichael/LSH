<?php /* Template Name: DonatePage */ ?>

<?php get_header();

while(have_posts()){
	the_post(); 
  $parent = wp_get_post_parent_id(get_the_ID());
  
  ?>

	
	<div class="fluid-container">
    <div class="jumbotron statsJumbotron" style="background-image: url(<?php echo get_theme_file_uri('images/about-us.jpg'); ?>);">
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
        <ul class="side-panel-link-list pagePageItem">
          <?php 
              if($parent){
                $findChildrenOf = $parent;
                    
              }else{
                $findChildrenOf = get_the_ID();
              }
              $args = array( 
                      'child_of' => $findChildrenOf, 
                      'parent' => $findChildrenOf,
                      'hierarchical' => 0,
                      'sort_column' => 'menu_order', 
                      'sort_order' => 'asc',
                      'post_type' => 'page'
              );

              $subPagesArray = get_pages($args);
              
              if(count($subPagesArray) > 0)
              {
                //echo '<ul class="pagePageItem" >';
                for($i=0; $i<count($subPagesArray); $i++) {
                  //foreach($subPagesArray as $page)
                  //{ 
                    $postID =  get_the_id();
                    $pageID =  $subPagesArray[$i]->ID;

                    ?>
                    <li class="page_item <?php echo ($postID == $pageID) ? 'current_page_item' : '' ?>">
                      <a class="subMenuHeaderPage" href="<?php echo get_page_link($subPagesArray[$i]->ID) ?>"><?php echo $subPagesArray[$i]->post_title ?></a>

                      <?php 
                        // $args = array( 'post_type' => 'attachment', 'numberposts' => 7, 'post_status' => null, 'post_parent' => $subPages[$i]->ID, 'orderby' => 'post_title', 'order' => 'DESC' );

                          $subSubPages = get_pages(array('child_of' => $subPagesArray[$i]->ID, 'post_type' => 'page'));
                          
                          if(count($subSubPages) >  0){
                              echo '<div class="navArrowPages">&#60;</div>';
                              echo '<ul class="subPageAttatchments dropdown-pages-content collapsible" data-collapsed=true >';

                              foreach ($subSubPages as $subPage) {

                                $id = $subPage->ID;
                                echo "<li class='page_item_sub";
                                echo ($postID == $subPage->ID) ? " current_page_item" : "";
                                echo "'>";
                                echo "<a href='";
                                echo get_page_link( $id );
                                echo "'>";
                                echo $subPage->post_title;
                                echo "</a>";
                                echo "</li>";
                              }

                              echo '</ul>';
                          }else{
                            echo '<div class="navArrowBlank">&#60;</div>';
                          }
                       ?>
                    </li>
                  <?php
                  }
                //echo '</ul>';
              }
           ?>
        </ul>
        
        
      </div>
      <div class="col-md-7 generic-content">
        <?php the_content(); ?>

        <!-- <div class="contributionsImgContainer websiteOrderHeader">
          <img class="contributionsImg" src="<?php echo get_theme_file_uri('images/website pictures/contributions.png'); ?>">
        </div> -->
        

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bottom-page-flag"></div>
    </div>
    

  </div>

<?php };
get_footer();
?>