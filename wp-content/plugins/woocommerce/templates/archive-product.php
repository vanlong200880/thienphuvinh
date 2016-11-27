<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

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
      <div class="title-all-page">
        <h2>
          <span class="icon"><i class="icon-fa icon-icon-sewing"></i></span>
          <a href="<?php echo home_url(); ?>/san-pham/">Sản phẩm</a><span class="line fa fa-angle-right"></span><span class="active"><?php woocommerce_page_title(); ?></span>
        </h2>
      </div>
      <?php

      $category = get_queried_object();
      $cat_color = get_field('cat_color', 'product_cat_'.$category->term_id);
      ?>

      <div class="show-cat catID-01 clearfix" id="catID-01" style="border-top: 5px solid <?php echo $cat_color; ?>;">
        <div class="left-show-cat">
							<div class="title-cat" style="border-bottom: 3px solid <?php echo $cat_color; ?>;">
								<span class="icon" style="background-color: <?php echo $cat_color; ?>;">
									<i class="icon-fa icon-icon-sewing"></i>
								</span>
								<span class="name">
									<?php woocommerce_page_title(); ?>
								</span>

								<span id="btn-click-01" class="icon-click hidden">
									<i class="fa fa-bars"></i>
								</span>
								
							</div><!--end title-cat-->
							<div class="list-brand hidden">
								<?php get_template_part('templates/trademark'); ?>
							</div><!--end list-brand-->
						</div><!--end left-show-cat-->
            <div class="right-show-cat">
              
              <?php
                /**
                 * woocommerce_before_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                 * @hooked woocommerce_breadcrumb - 20
                 */
                do_action( 'woocommerce_before_main_content' );
              ?>

                <?php
                  /**
                   * woocommerce_archive_description hook.
                   *
                   * @hooked woocommerce_taxonomy_archive_description - 10
                   * @hooked woocommerce_product_archive_description - 10
                   */
                  //do_action( 'woocommerce_archive_description' );
                ?>

                <?php if ( have_posts() ) : ?>

                  <?php
                    /**
                     * woocommerce_before_shop_loop hook.
                     *
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    //do_action( 'woocommerce_before_shop_loop' );
                  ?>

                  <?php woocommerce_product_loop_start(); ?>

                    <?php //woocommerce_product_subcategories(); ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                      <?php wc_get_template_part( 'content', 'product' ); ?>

                    <?php endwhile; // end of the loop. ?>

                  <?php woocommerce_product_loop_end(); ?>

                  <?php
                    /**
                     * woocommerce_after_shop_loop hook.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop_paging' );
                  ?>

                <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

                  <?php wc_get_template( 'loop/no-products-found.php' ); ?>

                <?php endif; ?>

              <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                //do_action( 'woocommerce_after_main_content' );
              ?>

            </div>
        
      </div>
    </div>
  </section>
</div>

<?php get_footer( 'shop' ); ?>
