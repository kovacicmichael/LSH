<?php  

  $parent = wp_get_post_parent_id(get_the_ID());
  $current_attachment = get_queried_object();
  $parent_title = get_post( $current_attachment->post_parent )->post_title;
  $parentId = $post->post_parent;
  $parentID = wp_get_post_parent_id($parentId);
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
        <!-- <h3 class='side-panel-header'><a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a></h3> -->
        <!-- <ul class="side-panel-link-list pagePageItem">
          <?php 
              if($parent){
                $findChildrenOf = $parent;
                    
              }else{
                $findChildrenOf = get_the_ID();
              }
              wp_list_pages(array(
                  'title_li' => null,
                  'child_of' => $parentID
              ));

              $media = get_attached_media( "pdf", $parentID );

              $args = array( 'post_type' => 'attachment', 'numberposts' => 7, 'post_status' => null, 'post_parent' => $post->post_parent, 'orderby' => 'post_title', 'order' => 'ASC' );
              $attachments = get_posts( $args );

              $date = date_parse('July');
              echo $date["month"];

              // $sorted = usort($attachments, "compare_months");
              // var_dump($attachments);

              // function compare_months($a, $b) {
              //     $monthA = date_parse($a);
              //     $monthB = date_parse($b);

              //     return $monthA["month"] - $monthB["month"];
              // }
              $sortedAttachments = [];

              // for ($i=0; $i < echo count($attachments); $i++) { 
              //     $temp

              // }

              foreach ($attachments as $attachment) {
                $id = $attachment -> ID;
                // echo get_the_title($id);
                // echo "<br>";
                // echo wp_get_attachment_url( $id );
                // echo "<br>";
                // echo '<li><a class="thumb" href="';
                echo wp_get_attachment_link( $id, null, true );
                echo "<br>";
                // echo '">';
                // echo get_the_title($id);
                // echo '</a></li>';
              }

           ?>
        </ul> -->
        <ul class="side-panel-link-list pagePageItem">
          <?php 
              
              $subPages = get_pages(array(
                  'title_li' => null,
                  'child_of' => $parentID
              ));

              if($subPages)
              {
                echo '<ul class="pagePageItem" >';
                  foreach($subPages as $page)
                  { 
                    $postID =  get_the_id();
                    $pageID =  $page->ID;
                  ?>
                  <li class="page_item <?php echo ($postID == $pageID) ? 'current_page_item' : '' ?>">
                    <a class="subMenuHeaderPage" href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a>
                    <?php  
                      $args = array( 'post_type' => 'attachment', 'numberposts' => 7, 'post_status' => null, 'post_parent' => $page->ID, 'orderby' => 'post_title', 'order' => 'ASC' );
                      
                      $attachments = get_posts( $args );
                      
                      if($attachments){
                        echo '<div class="navArrowPages">&#60;</div>';
                        echo '<ul class="subPageAttatchments dropdown-content collapsible" data-collapsed=true >';

                        foreach ($attachments as $attachment) {
                          $id = $attachment -> ID;
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
                echo '</ul>';
              } 

              

           ?>
        </ul>
      </div>
      <div class="col-md-7 generic-content">
          <embed class="pdfWindow" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="500" height="375" type="application/pdf">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bottom-page-flag"></div>
    </div>
    

  </div>

<?php };
get_footer();
?>