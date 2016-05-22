<?php 
$product_cat  = isset($product_cat) ? $product_cat : 0;
$attribute_id      = isset($attribute_id) ? $attribute_id : 0;
$category_link      = isset($category_link) ? $category_link : '';
$categories_name      = isset($categories_name) ? $categories_name : '';
$args = array (					 
  'post_status'    => 'publish',		
  'order'          => 'DESC',
  'orderby'        => 'post_date menu_order',
  'post_type'      => 'product',
  'product_cat'  =>$product_cat,
  'posts_per_page' => 6,
);
$the_query = new WP_Query( $args );
?>
<div class="show-cat <?php echo $attribute_id; ?> clearfix" id="<?php echo $attribute_id; ?>">
  <div class="left-show-cat">
    <div class="title-cat">
      <span class="icon">
        <i class="icon-fa icon-icon-sewing"></i>
      </span>
      <span class="name">
        <a href="<?php echo $category_link; ?>" title="<?php echo $categories_name; ?>"><?php echo $categories_name; ?></a>
      </span>

      <span id="btn-click-01" class="icon-click hidden">
        <i class="fa fa-bars"></i>
      </span>

    </div><!--end title-cat-->
    <div class="list-brand hidden">
      <?php echo get_template_part('templates/trademark'); ?>
    </div><!--end list-brand-->
  </div><!--end left-show-cat-->

  <?php 
   if ( $the_query->have_posts() ) { ?>
  <div class="right-show-cat">
    <ul class="list">
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
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
        </div>
      </li>
        <?php } ?>
      </ul>
  </div>
  <?php } ?>
  </div><!--end show-cat-->
