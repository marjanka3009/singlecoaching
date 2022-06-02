<?php
/**
 * Template Name: Voorpagina
 *
 */

   
    $args_voorpagina = array(  
        'post_type' => 'indepers',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'medium',
	            'field' => 'slug',
	            'terms' => 'bladen',  // blog, online, video, radio
	        )
	    ),
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );

    $voorpagina = new WP_Query( $args_voorpagina ); 


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<?php


			if($voorpagina->have_posts()) : while($voorpagina->have_posts()) : $voorpagina->the_post();
				?>

			   <div class="g-3up">
			        <h2 class="gamma"><a href="<?php the_field( 'url'); ?>"><i class="fa fontawesome-icon fa-<?php the_field( 'icoon'); ?> circle-yes"></i> <?php the_title(); ?></a></h2> 
			        <div class="card-image" style="margin-bottom: 0.5em; background-image: url(<?php the_field( 'afbeelding_blokje'); ?>);"></div>

			        <?php echo get_field( 'beschrijving_blokje'); ?>
			        <a style="display: block; margin-top: -1em; margin-bottom: 1.5em;" href="<?php echo get_field( 'url'); ?>"><?php echo get_field( 'lees_meer'); ?></a>
			    </div>

				<?php
				endwhile;
			endif;
			wp_reset_query();
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
