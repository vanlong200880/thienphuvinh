<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 
global $post, $product;
?>
<div class="body-content">
  <section class="all-cat detail clearfix">
    <div class="container">
      <div class="title-all-page">
        <h2>
          <span class="icon"><i class="icon-fa icon-icon-sewing"></i></span>
          <?php 
          $cat_count = ( get_the_terms( $post->ID, 'product_cat' ) ); ?>
          <a href="<?php echo home_url(); ?>/san-pham/">Sản phẩm</a><span class="line fa fa-angle-right"></span><span class="active"><?php echo $cat_count[0]->name; ?></span>
        </h2>
      </div>
      <div class="cat-detail clearfix">
        <div class="left">
          <?php
            $attachment_id = get_post_thumbnail_id(get_the_ID());
            if (!empty($attachment_id)) :
              the_post_thumbnail(array(480, 400)); ?>
            <?php endif; ?>
        </div><!--end left-->
        <div class="right">
          <h2>
            <?php the_title(); ?>
          </h2>
          <p class="descript">Mã số: <span class="bold">
              <?php 
              
              if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

              <?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?>

	<?php endif; ?>
    
             </span></p>
          <?php 
              $terms = get_the_terms( $post->ID, 'thuong-hieu' );
              if($terms){ ?>
          <p class="descript">Hãng sản xuất: <span class="bold">
              <?php echo $terms[0]->name; ?>
            <?php } ?>
              
            </span></p>
            <?php if(get_field('xuat_xu')): ?>
          <p class="descript">Xuất xứ: <span class="bold"><?php echo get_field('xuat_xu'); ?></span></p>
          <?php endif; ?>
          <?php if(get_field('bao_hanh')): ?>
          <p class="descript">Bảo hành: <span class="bold"><?php echo get_field('bao_hanh'); ?></span></p>
          <?php endif; ?>
          <?php if(get_field('dat_hang')): ?>
          <p class="descript"> Đặt hàng: <span class="price"><?php echo get_field('dat_hang'); ?></span></p>
          <?php endif; ?>
          <div class="social">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5732c8c759a63a9f"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_native_toolbox"></div>

          </div>
          <p class="back">
            <a href="<?php echo home_url(); ?>/san-pham/"><span class="icon-fa icon-back"></span>Trở về</a>
          </p>
        </div>
      </div>
      <?php do_action( 'woocommerce_after_single_product_related' ); ?>
    </div>
  </section>
  
</div>



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	?>

		<?php //while ( have_posts() ) : the_post(); ?>

			<?php //wc_get_template_part( 'content', 'single-product' ); ?>

		<?php //endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
//		do_action( 'woocommerce_after_main_content' );
	?>


<?php get_footer( 'shop' ); ?>
