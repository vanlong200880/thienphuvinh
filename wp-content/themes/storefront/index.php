<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>
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

  <section class="new-product">
    <?php echo get_template_part('templates/product-hot'); ?>
  </section><!--end new-product-->

  <section class="full-container-flui about-us clearfix">
    <?php echo get_template_part('templates/about'); ?>
  </section><!--end about-us-->

  <section class="all-cat clearfix">
    <div class="container">
      <?php echo get_template_part('templates/list-category'); ?>
    </div>
  </section>


  <section class="full-container-flui news clearfix">
    <?php echo get_template_part('templates/news'); ?>
  </section><!--end about-us-->

  <section class="wrap-contact clearfix">
    <?php echo get_template_part('templates/contact'); ?>
  </section><!--end wrap-contact-->
</div><!--end body-content-->

<?php get_footer();
