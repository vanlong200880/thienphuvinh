<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 * @package storefront
 */


while ( have_posts() ) : the_post(); ?>
<li>
    <div class="both-news clearfix">
      <div class="pic">
        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
          <?php
            $attachment_id = get_post_thumbnail_id(get_the_ID());
            if (!empty($attachment_id)) :
              the_post_thumbnail(array(320, 202)); ?>
            <?php endif; ?>
        </a>
      </div>
      <div class="info-news">
        <h3>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="description"><?php echo the_excerpt_max_charlength(60); ?></p>
      </div>	
    </div><!--end both-news-->
    <div class="line"></div>
  </li>
	<?php
endwhile;

