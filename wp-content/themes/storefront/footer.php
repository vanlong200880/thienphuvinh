<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


<!-- footer -->
<footer class="clearfix">
  <div class="container">
    <div class="f-social">
      <a href="">
        <span class="fa fa-facebook-square"></span>
      </a>
      <a href="">
        <span class="fa fa-twitter-square"></span>
      </a>
      <a href="">
        <span class="fa fa-youtube-square"></span>
      </a>
    </div>
    <div class="f-left">
      © 2016 Designed by huynh trong dai.<br> 
      All right reserved
    </div>
    <div class="f-right">
      <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu'=> 'menu_top',
            'menu_class' => '',
            'container_class' => '',
            'before' => '',
          'link_before' => ''
        ) );
      ?>
    </div>
  </div>
</footer>
<!-- tpv -->
</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#owl-product-carousel-first").owlCarousel({
        items : 1,
        itemsDesktop: [1400, 1],
        itemsDesktopSmall: [1100, 1],
        itemsTablet: [767, 1],
        itemsMobile: [500, 1],
        autoPlay: 4000,
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        pagination : true,
        paginationNumbers: true,
            //singleItem : true,
        navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        rewindNav : true,
        stopOnHover : true
    });

    $("#owl-product-carousel-second").owlCarousel({
        items : 4,
        itemsDesktop: [1400, 4],
        itemsDesktopSmall: [1100, 4],
        itemsTablet: [767, 4],
        itemsMobile: [500, 1],
        autoPlay: 4000,
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        pagination : false,
        paginationNumbers: false,
            //singleItem : true,
        navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        rewindNav : true,
        stopOnHover : true
    });

  });

  </script>
<?php wp_footer(); ?>

</body>
</html>
