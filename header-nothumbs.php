<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package singlecoaching
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-16845543-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-16845543-1');
    </script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/4cc681f1b5.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'singlecoaching' ); ?></a>
	<div id="wrapper" class="wrapper">
	<header id="masthead" class="site-header is-bg-white">

		<div class="site-header-content">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776; Menu</button>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>

			</nav><!-- #site-navigation -->
			<div class="site-branding">
				<div class="site-logo">
					<a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="120" height="71" src="<?php echo site_url() . '/wp-content/themes/singlecoaching/images/singlecoaching-logo.png'; ?>" class="custom-logo" alt="Singlecoaching" /></a>
				</div>
			</div>
		</div>


		

	</header><!-- #masthead -->

	<div id="content" class="site-content" style="padding-top: 110px; ">
	
