<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package singlecoaching
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		
	<div class="entry-content">
		<?php
		the_title();


		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
