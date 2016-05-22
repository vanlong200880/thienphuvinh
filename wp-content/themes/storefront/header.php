<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="36x36"  href="<?php echo get_template_directory_uri(); ?>/assets/images/android-icon-36x36.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-57x57.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="wrapper">
  <header>
			<div class="topbar">
				<div class="container">
					<div class="wrap-address">
						<ul>
							<li>
								<span class="fa fa-map-marker"></span>
								<span class="address">25/5 D2 Nguyễn Thị Thử, Ấp 3, Xã Xuân Thới Sơn, Huyện Hóc Môn, Tp. Hồ Chí Minh</span>
							</li>
						</ul>
					</div>
					<div class="wrap-number-social">
						<div class="hotline">
							<span class="fa fa-phone"></span>
							<span class="number"><a href="tel:0919.451.350">0919.451.350</a> - <a href="tel:0938.241.479">0938.241.479</a></span>
						</div>
						<div class="social">
							<span class="name">Chia sẻ mạng xã hội:</span>
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
					</div>
				</div>
			</div><!--end topbar-->
			<div class="wrap-logo-search clearfix">
					<div class="container">		
						<div class="logo">
              <a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
							</a>
						</div>
						<div class="form-search">
							<form>
								<input class="search" type="text" placeholder="Tìm theo danh mục"/>
								<button type="submit" class="btn btn-default">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div><!--end wrap-logo-search-->

				<div class="nav-top-menu sp">
					<div class="container">
						<ul class="tabs-menu">
							
							<li class="current">
								<a class="btn-second" href="#tab-1">Menu <span class="fa fa-bars"></span></a>
							</li>
							<li>
								<a class="btn-first" href="#tab-2">Danh mục <span class="icon-fa icon-icon-listcat"></span></a>
							</li>
						</ul>
					
						<div class="tab">
              <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu'=> 'menu_top',
                      'menu_id' => 'tab-1',
                      'menu_class' => 'list-cat tab-content',
                      'container_class' => '',
                      'before' => '',
                    'link_before' => ''
                  ) );
                ?>
              
							<ul id="tab-2" class="list-cat tab-content">
								<?php get_template_part('templates/mobile/menu'); ?>
							</ul>
							
						</div>
					</div>
				</div><!--end nav-top-menu sp-->
				<div class="nav-top-menu pc">
					<div class="container">
						<div class="wrap-top-menu">
							<div class="main-cat">
								<h3 class="widget-title">
									<span class="name-cat">Danh mục</span>
									<span class="icon-fa icon-icon-listcat"></span>
								</h3>
							</div>
							<div class="menu-pc">
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
					</div>
				</div><!--end nav-top-menu pc-->
		</header>
  
  
  
  
  
  

			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			//do_action( 'storefront_header' ); ?>

