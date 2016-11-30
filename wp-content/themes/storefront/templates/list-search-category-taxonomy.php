<?php
$args = array (
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'post_date menu_order',
    'post_type'      => 'product',
//    'product_cat'  =>$product_cat,
    'posts_per_page' => 6,
    'paged'            => $paged,
);
if($_GET['keyword']){
    $args['s'] = $_GET['keyword'];
}
$the_query = new WP_Query( $args );
?>
<h1>Kết quả tìm kiếm</h1>
<div style="border-top: 5px solid <?php echo $cat_color; ?>" class="show-cat clearfix" id="<?php echo $attribute_id; ?>">
    <?php
    if ( $the_query->have_posts() ) { ?>
        <div class="right-show-cat">
            <ul class="list">
                <?php
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <li>
                        <div class="image">
                            <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
                                <?php
                                $attachment_id = get_post_thumbnail_id(get_the_ID());
                                if (!empty($attachment_id)) :
                                    the_post_thumbnail(array(480, 400)); ?>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="number">
                            <span class="fa fa-phone"></span>
                            <span class="phone"><a href="tel:<?php echo get_field('phone'); ?>"><?php echo get_field('phone'); ?></a></span>
                        </div>
                        <div class="info">
                            <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    </div><!--end show-cat-->
