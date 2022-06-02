<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package singlecoaching
 */

/**
 * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'testimonial',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        // 'cat' => 'home',
    );

    $testimonial = new WP_Query( $args ); 
        


get_header( 'nothumbs' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( $testimonial->have_posts() ) :


			$testimonial->the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		    wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


