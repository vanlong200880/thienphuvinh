<?php
/**
 * Template Name: Contact
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
          <section class="all-cat clearfix">
              <div class="show-cat page-child clearfix">
                <div class="left-show-cat">
							<div class="title-cat">
								<span class="icon">
									<i class="icon-fa icon-icon-sewing"></i>
								</span>
								<span class="name">
									Liên hệ<br>chúng tôi
								</span>

								
							</div><!--end title-cat-->
							<div class="list-brand hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png">
							</div><!--end list-brand-->
						</div><!--end left-show-cat-->
                <div class="right-show-cat">
                  <?php the_content(); ?>
                </div>
              </div>
            
            
            
          </section>
        </div>
  </section>
  


<?php get_footer(); ?>