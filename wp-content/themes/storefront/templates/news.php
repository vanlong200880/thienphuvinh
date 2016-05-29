<div class="container">
  <div class="left">
    <div class="title-style-all">
      <h2><a href="<?php echo home_url(); ?>/tin-tuc/">Tin tức mới</a></h2>
    </div>
    <div class="opacity-image">
      <a href="<?php echo home_url(); ?>/tin-tuc/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-new.png" alt="Tin tức">
      </a>
    </div>
  </div>
  <?php 
  $args = array (					 
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'post_date',
    'post_type'      => 'post',
    'category_name'    => 'tin-tuc',
    'posts_per_page' => 1,
  );
  $the_query = new WP_Query( $args );
  ?>
  <?php
  if ( $the_query->have_posts() ) { ?>
  
    <?php 
      while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
        <div class="right">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          
          <p><?php echo the_excerpt_max_charlength(80); ?></p>
        </div>
      <?php } ?>
  <?php } ?>

</div>