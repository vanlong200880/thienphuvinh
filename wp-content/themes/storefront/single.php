<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
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
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="news-detail">
                  <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                </div>
                

                    <?php endwhile; // End of the loop. ?>
							</div><!--end load-page-->
							
						</div><!--end right-show-cat-->
          </div>
        </div>
      </section>
</div>
<?php
get_footer();





