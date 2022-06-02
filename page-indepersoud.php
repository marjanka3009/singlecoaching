<?php
/**
 * Template Name: in de pers

 */
   
    $args_indepers = array(  
        'post_type' => 'indepers',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );

    $indepers = new WP_Query( $args_indepers ); 

// als audio <figure class="wp-block-audio"><audio controls src="http://localhost/Singlecoaching/wp-content/uploads/2021/05/20150111-GaR-Hans-Gierkink-Get-a-Room-Amsterdam-FM.mp3"></audio></figure>       

// bladen zijn ook 130 hoog en max 99% breed 


get_header( 'nothumbs' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h1>In de pers</h1>

		<?php
		while ( $indepers->have_posts() ) :
			$indepers->the_post(); ?>

			<div class="g-3up" style="margin-bottom:1em;">
				<h2><i class="fa fontawesome-icon fa-book circle-yes"></i><?php the_title(); ?></h2>
				<p><?php the_field( 'beschrijving' ) ?></p>
				<p><?php the_field( 'medium' ) ?></p>

			</div>



			<?php 
		endwhile; // End of the loop.
		    wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


