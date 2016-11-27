<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

?>
<div class="body-content">
  <section class="all-cat clearfix">
				<div class="container">
					<div class="title-all-page">
						<h2>
							<span class="icon"><i class="icon-fa icon-icon-sewing"></i></span>
							<?php the_title(); ?>
						</h2>
					</div>
              <div class="show-cat page-child clearfix">
                <?php get_template_part('templates/menu-about'); ?>
                <div class="right-show-cat">
                  <?php the_content(); ?>
                </div>
              </div>
            
        </div>
  </section>
  


<?php get_footer(); ?>