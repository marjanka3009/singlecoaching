<?php
/**
 * Template Name: Woocommerce
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package singlecoaching
 */

get_header();
?>

	<div id="primary" class="content-area-nosidebar">
		<main id="main" class="site-main">

		<?php woocommerce_content(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
