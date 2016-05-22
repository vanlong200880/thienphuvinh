<?php
$taxonomy     = 'product_cat';
$orderby      = 'id';  
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no  
$title        = '';  
$empty        = 0;

$args = array(
       'taxonomy'     => $taxonomy,
       'orderby'      => $orderby,
       'show_count'   => $show_count,
       'pad_counts'   => $pad_counts,
       'hierarchical' => $hierarchical,
       'title_li'     => $title,
       'hide_empty'   => $empty
);
$all_categories = get_categories( $args ); ?>
  <?php foreach ($all_categories as $cat) { ?>
      <li>
        <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>" title="<?php echo $cat->name; ?>">
          <span class="icon-fa icon-icon-sewing left-icon"></span>
          <?php echo $cat->name; ?>
          <span class="fa fa-angle-right right-icon"></span>
        </a>
      </li>
    <?php	} ?>