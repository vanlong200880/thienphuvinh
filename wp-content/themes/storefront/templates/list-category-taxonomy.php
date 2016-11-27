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
$all_categories = get_categories( $args );
//var_dump($all_categories);
?>

  <?php foreach ($all_categories as $cat) { ?>
  <?php $variable = get_field('home', 'product_cat_'.$cat->term_id);
    $cat_color = get_field('cat_color', 'product_cat_'.$cat->term_id);
  ?>
      <?php getTemplatePart('templates/tab',  null, array('product_cat' => $cat->slug ,'categories_name' => $cat->name,  'attribute_id' => $cat->description, 'cat_color' => $cat_color, 'category_link' => get_term_link($cat->slug, 'product_cat'))); ?>
        <?php	} ?>