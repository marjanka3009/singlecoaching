<?php
/**
 * Template Name: Voorpagina
 *
 */
if ( is_front_page() ) {
	$post_type = 'blokje';
	$taxonomy = 'pagina';
	$term = 'voorpagina';
}

// if (is_page('28')) {
// 	$post_type = 'blokje';
// 	$taxonomy = 'pagina';
// 	$term = 'voorpagina';
// }

if (is_page('over-relaties')) {
	$post_type = 'blokje';
	$taxonomy = 'pagina';
	$term = 'over-relaties';
}

   
    $args_voorpagina = array(  
        'post_type' => $post_type,
	    'tax_query' => array(
	        array (
	            'taxonomy' => $taxonomy,
	            'field' => 'slug',
	            'terms' => $term,
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
	<div class="card-container">

		<?php 
	while ( $voorpagina->have_posts() ) :
		$voorpagina->the_post();
		

			?>

		<div class="card">

	        <h2 class="gamma card-header"><i class="fa fontawesome-icon fa-<?php the_field( 'icoon_blokje'); ?> circle-yes"></i> <?php the_title(); ?></h2>
	        <div class="card-image" style="background-image: url(<?php the_field( 'afbeelding_blokje'); ?>);"></div>
	        <div class="card-beschrijving">
	        <?php echo get_field( 'beschrijving_blokje'); ?></div>
	        <div class="card-leesmeer">
	        	<?php if (get_field( 'lees_meer_blokje')): ?>
	        		Lees: <a  href="<?php the_field( 'url_blokje'); ?>"><?php the_field( 'lees_meer_blokje'); ?></a></div>
	        	
		        <?php else: ?>
		        	<a  href="<?php the_field( 'url_blokje'); ?>">Lees meer &hellip;</a></div>
		        <?php endif ?>


	        	
	    </div>
	<?php 
	endwhile;
	?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
