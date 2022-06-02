<?php
/**
 * Template Name: testimonials

 */
 
    $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
        'cat' => '9',
    );

    $testimonial = new WP_Query( $args ); 
        
   $titel_excerpt = the_field('titel_excerpt');

/* --------------------- */
get_header( 'nothumbs' ); ?>

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
			<div class="display-flex" style="display: flex; flex-wrap: wrap;">
				<?php

				while ( $testimonial->have_posts() ) :
					$testimonial->the_post(); ?>

					<div class="card">
						<h2 class="gamma card-header"><i class="fa fontawesome-icon fa-heart circle-yes"></i><?php 
						if (get_field('titel_excerpt')) {
							 echo get_field('titel_excerpt');
						} else {
							the_title();
						}
						?>
						</h2>
						<div class="card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
						<div class="card-excerpt"><?php echo get_the_excerpt() ?></div>
			      	<div class="card-leesmeer">Lees: <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>				
					</div>
					<?php 
				endwhile; // End of the loop.
				    wp_reset_postdata();
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


