<div class="left-show-cat">
  <div class="title-cat">
    <span class="icon">
      <i class="icon-fa icon-icon-sewing"></i>
    </span>
    <span class="name">
      Giới thiệu<br>công ty
    </span>


  </div><!--end title-cat-->
  <div class="list-brand hidden">
    <ul>
      <?php
      global $post; 
      ?>
      <li class="<?php echo ($post->post_name == 'gioi-thieu')?'active':''; ?>"><a href="<?php echo home_url(); ?>/gioi-thieu/"><span class="fa fa-angle-right left-icon"></span>Tổng quan</a></li>
      <li class="<?php echo ($post->post_name == 'hinh-anh')?'active':''; ?>"><a href="<?php echo home_url(); ?>/hinh-anh/"><span class="fa fa-angle-right left-icon"></span>Hình ảnh</a></li>
      <li class="<?php echo ($post->post_name == 'video-clip')?'active':''; ?>"><a href="<?php echo home_url(); ?>/video-clip/"><span class="fa fa-angle-right left-icon"></span>Videos clip</a></li>
    </ul>
  </div><!--end list-brand-->
</div><!--end left-show-cat-->