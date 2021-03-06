<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 *
 */

get_header(); ?>

<div class="body-content">
			<section class="all-cat clearfix">
        <div class="container">
          <div class="title-all-page">
						<h2>
							<span class="icon"><i class="icon-fa icon-icon-sewing"></i></span>
							Tin tức
						</h2>
					</div>
          <div class="show-cat page-child clearfix">
            <div class="left-show-cat">
							<div class="title-cat">
								<span class="icon">
									<i class="icon-fa icon-icon-sewing"></i>
								</span>
								<span class="name">
									Tin tức<br>công ty
								</span>

								
							</div><!--end title-cat-->
							<div class="list-brand hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.png">
							</div><!--end list-brand-->
						</div><!--end left-show-cat-->
            
            <div class="right-show-cat">
							<div class="load-page news">
                <?php if ( have_posts() ) : ?>
                  <ul class="wrap-news">
                <?php get_template_part( 'loop-news' ); ?>
                  </ul>
             <?php  else :

                get_template_part( 'content', 'none' );

              endif; ?>
								
									
									
								
							</div><!--end load-page-->
							
						</div><!--end right-show-cat-->
          </div>
        </div>
      </section>
</div>


<?php
get_footer();
