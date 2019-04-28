<?php /* Template Name: NewsletterPage */ 

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
              $subPages = get_pages(array(
                  'title_li' => null,
                  'child_of' => $findChildrenOf
              ));
              
              if(count($subPages) > 0)
              {
                for($i=0; $i<count($subPages); $i++) {
                    $postID =  get_the_id();
                    $pageID =  $subPages[$i]->ID;
                  ?>
                  <li class="page_item <?php echo ($postID == $pageID) ? 'current_page_item' : '' ?>">
                    <a class="subMenuHeaderPage" href="<?php echo get_page_link($subPages[$i]->ID) ?>"><?php echo $subPages[$i]->post_title ?></a>
                    <?php  
                      $args = array( 'post_type' => 'attachment', 'numberposts' => 7, 'post_status' => null, 'post_parent' => $subPages[$i]->ID, 'orderby' => 'post_title', 'order' => 'DESC' );

                      $attachments = get_posts( $args );
                      if(count($attachments) >  0){
                        echo '<div class="navArrowPages">&#60;</div>';
                        echo '<ul class="subPageAttatchments dropdown-pages-content collapsible" data-collapsed=true >';

                        foreach ($attachments as $attachment) {
                          $id = $attachment->ID;
                          echo "<li class='page_item_sub'>";
                          echo wp_get_attachment_link( $id, null, true );
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
              } 
           ?>
        </ul>
      </div>
      <div class="col-md-7 generic-content">
        <?php 
          the_content(); 
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bottom-page-flag"></div>
    </div>
    

  </div>

<?php };
get_footer();
?>