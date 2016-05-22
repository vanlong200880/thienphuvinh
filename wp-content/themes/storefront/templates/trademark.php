<?php 
$taxonomy     = 'thuong-hieu';
$orderby      = 'id';  
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no  
$title        = '';  
$empty        = 0;

$args = array(
       'taxonomy'     => $taxonomy,
       'orderby'      => $orderby,
       'show_count'   => $show_count,
       'pad_counts'   => $pad_counts,
       'hierarchical' => $hierarchical,
       'title_li'     => $title,
       'hide_empty'   => $empty
);
$all_categories = get_categories( $args ); 
?>
<?php if($all_categories): ?>
<ul>
  <?php 
  $count = 0;
  $active = '';
  foreach ($all_categories as $cat) { 
    if($count = 0)
        $active = 'active';
    ?>
  <li class="<?php echo $active; ?>"><a href="<?php echo get_term_link($cat->slug, 'thuong-hieu') ?>" title="<?php echo $cat->name; ?>"><span class="fa fa-angle-right left-icon"></span><?php echo $cat->name; ?></a></li>
  <?php 
  $count++;
  
  } ?>
</ul>
<?php endif; ?>