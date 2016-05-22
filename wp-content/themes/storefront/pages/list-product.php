<?php
/**
 * Template Name: List product
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

?>
<div class="body-content">
  <section class="cat-slider clearfix">
    <div class="container">
      <div id="categories">
        <?php echo get_template_part('templates/menu'); ?>
      </div><!--end categories-->
      <div class="wrap-slider">
        <?php echo get_template_part('templates/slider'); ?>
      </div><!--end wrap-slider-->
    </div>

  </section><!--end cat-slider-->

  <section class="wrap-jumbotron">
    <div class="container">
      <?php echo get_template_part('templates/support'); ?>
    </div>
  </section><!--end wrap-jumbotron-->


  <section class="all-cat clearfix">
    <div class="container">
      <?php echo get_template_part('templates/list-category-taxonomy'); ?>
    </div>
  </section>


<?php get_footer(); ?>