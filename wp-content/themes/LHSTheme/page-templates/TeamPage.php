<?php /* Template Name: TeamPage */ 

  $parent = wp_get_post_parent_id(get_the_ID());
?>

<?php get_header();

while(have_posts()){
  the_post(); ?>

  
  <div class="fluid-container">
    <div class="jumbotron aboutJumbotron" style="background-image: url(<?php echo get_theme_file_uri('images/about-us.jpg'); ?>);">
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
        <ul class="side-panel-link-list">
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
      <div class="col-md-6 generic-content">
        <h1 class="teamPageHeaders">Executive Director</h1>
        <ul>
          <li class="memberItem executiveDir">
            <img src="https://via.placeholder.com/125" class="memberImage">
            <div class="memberInfo">
                <h3 class="memberName">Angela Ceseña</h3>
                <p class="memberTitle">angela@latinasafehouse.org</p>
            </div>
          </li>
        </ul>
        <h1 class="teamPageHeaders teamPageHeadersTwo">Board of Directors</h1>
        <ul>
          <!-- <?php the_content(); ?> -->
          <li class="memberItem">
            <img src="https://via.placeholder.com/125" class="memberImage">
            <div class="memberInfo">
                <h3 class="memberName">Charlene Clark-Manzanares</h3>
                <h5>Board Chair</h5>
                <p class="memberTitle">Robert Half Legal - Legal Consultant</p>
            </div>
          </li>
          <li class="memberItemEven">
            <section class="memberInfoEven">
                <h3 class="memberNameEven">Marcia-Lena Hernandez</h3>
                <h5>Board Secretary</h5>
                <p class="memberTitleEven">American Capital Insurance - Licensed Officer Manager</p>
            </section>
            <img src="https://via.placeholder.com/125" class="memberImageEven">
          </li>
          <li class="memberItem">
            <img src="https://via.placeholder.com/125" class="memberImage">
            <div class="memberInfo">
                <h3 class="memberName">Kate Hunsaker</h3>
                <h5>Treasurer</h5>
                <p class="memberTitle">FirstBank - Assistant Vice President of Commercial Originations</p>
            </div>
          </li>
          <li class="memberItemEven">
            <section class="memberInfoEven">
                <h3 class="memberNameEven">Michelle Munden</h3>
                <p class="memberTitleEven">Independent Consultant</p>
            </section>
            <img src="https://via.placeholder.com/125" class="memberImageEven">
          </li>
          <li class="memberItem">
            <img src="https://via.placeholder.com/125" class="memberImage">
            <section class="memberInfo">
                <h3 class="memberName">Laura Morales</h3>
                <p class="memberTitle">FirstBank – Branch Manager</p>
            </section>
          </li>
          <li class="memberItemEven">
            <section class="memberInfoEven">
                <h3 class="memberNameEven">Elizabeth Nevarez</h3>
                <p class="memberTitleEven">Mile High United Way - 2-1-1 Supervisor</p>
            </section>
            <img src="https://via.placeholder.com/125" class="memberImageEven">
          </li>
          <li class="memberItem lastMember">
            <img src="https://via.placeholder.com/125" class="memberImage">
            <section class="memberInfo">
                <h3 class="memberName">Sister Leandra Schaller</h3>
                <h5>Honorary Board Member</h5>
                <p class="memberTitle">Sisters of St. Francis</p>
            </section>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bottom-page-flag"></div>
    </div>
    

  </div>

<?php };
get_footer();
?>