<?php
/**
 * Template Name: Picture
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
                <?php get_template_part('templates/menu-about'); ?>
                <div class="right-show-cat custom-slide">
                  <div class="load-page video-clip">
                    <?php 
                        global $post;
                          $listGalery = getGaleryFromPost($post);
                          $arrLink = array();
                          $arrLinkThumb = array();
                          foreach ($listGalery[0]['ids'] as $k => $galery) {
                              $arrLink[] = wp_get_attachment_image($galery, 'full');
                              $arrLinkThumb[] = wp_get_attachment_image($galery, 'thumbnail');
                            }
                        ?>
                        <!-- Place somewhere in the <body> of your page -->
                      <div id="slider" class="flexslider">
                        <ul class="slides">
                          <?php if($arrLink): ?>
                          <?php foreach ($arrLink as $value): ?>
                          <li>
                            <?php echo $value; ?>
                          </li>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          <!-- items mirrored twice, total of 12 -->
                        </ul>
                      </div>
                      <div id="carousel" class="flexslider">
                        <ul class="slides">
                          <?php if($arrLinkThumb): ?>
                          <?php foreach ($arrLinkThumb as $val): ?>
                          <li>
                            <?php echo $val; ?>
                          </li>
                          <?php endforeach; ?>
                          <?php endif; ?>

                          <!-- items mirrored twice, total of 12 -->
                        </ul>
                      </div>
                  </div>
                  
                  
                </div>
              </div>
            <script type="text/javascript">
              jQuery(document).ready(function($) {



              // The slider being synced must be initialized first
              $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 95,
                itemMargin: 5,
                asNavFor: '#slider'
              });

              $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
              });

              });

              </script>
            
            
          </section>
        </div>
  </section>
  


<?php get_footer(); ?>