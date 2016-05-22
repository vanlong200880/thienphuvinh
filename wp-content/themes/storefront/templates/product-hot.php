<div class="container">
  <div class="title-all-page">
    <h2>
      <span class="icon"><i class="icon-fa icon-icon-sewing"></i></span>
      Sản phẩm mới
    </h2>
  </div>
  <?php 
  $args = array (					 
    'post_status'    => 'publish',		
    'order'          => 'DESC',
    'orderby'        => 'post_date menu_order',
    'post_type'      => 'product',
//    'product_cat'    => 'may-cong-nghiep',
    'posts_per_page' => 16,
  );
  $the_query = new WP_Query( $args );
  ?>
  <?php
  if ( $the_query->have_posts() ) { ?>
  <ul class="list-new-product" id="owl-product-carousel-second">
    <?php 
      while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
    <li>
      <div class="image">
        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
          <?php
            $attachment_id = get_post_thumbnail_id(get_the_ID());
            if (!empty($attachment_id)) :
              the_post_thumbnail(array(480, 400)); ?>
            <?php endif; ?>
        </a>
      </div>
      <div class="number">
        <span class="fa fa-phone"></span>
        <span class="phone"><a href="tel:<?php echo get_field('phone'); ?>"><?php echo get_field('phone'); ?></a></span>
      </div>
      <div class="info">
        <h5>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
        </h5>
      </div>
    </li>
      <?php } ?>
  </ul>
  <?php } ?>
</div>