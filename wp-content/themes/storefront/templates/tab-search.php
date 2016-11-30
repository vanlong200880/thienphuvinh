<?php 
$product_cat  = isset($product_cat) ? $product_cat : 0;
var_dump($product_cat);
$attribute_id      = isset($attribute_id) ? $attribute_id : 0;
$category_link      = isset($category_link) ? $category_link : '';
$categories_name      = isset($categories_name) ? $categories_name : '';
$cat_color = isset($cat_color) ? $cat_color : '';
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

