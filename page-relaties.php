<?php
/**
 * Template Name: Over Relaties
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package singlecoaching
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.

		wp_reset_postdata();

/* Daten algemeen */		

		$daten_algemeen = new WP_Query( array( 
			'post_type' => 'post',
			'category_name' => 'artikel daten algemeen'
		) );
		?>
		<h2>Daten algemeen</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php 


		while ( $daten_algemeen->have_posts() ) : $daten_algemeen->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();

		?>
		</ul>

		<?php 
/* Daten algemeen */

		$bindings_verlatingsangst = new WP_Query( array( 
			'post_type' => 'post',
			'category_name' => 'artikel bindings- en verlatingsangst' 
		) );
		?>
				<h2>Bindingsangst, verlatingsangst en hechting</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $bindings_verlatingsangst->have_posts() ) : $bindings_verlatingsangst->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
		</ul>
		<?php 
		wp_reset_postdata();


/* Daten algemeen */
		$internetdaten = new WP_Query( array( 
			'post_type' => 'post',
			'category_name ' => 'artikel internetdaten' 
		) );
		wp_reset_postdata();



/* Daten algemeen */

		$zelfvertrouwen = new WP_Query( array( 
			'post_type' => 'post',
			'category_name ' => 'artikel zelfvertrouwen relaties' 
		) );
		wp_reset_postdata();

/* Daten algemeen */

			$flirten = new WP_Query( array( 
			'post_type' => 'post',
			'category_name ' => 'artikel flirten' 
		) );



/* Daten algemeen */
		wp_reset_postdata();
		$partnerselectie = new WP_Query( array( 
			'post_type' => 'post',
			'category_name ' => 'artikel partnerselectie' 
		) );


/* Tips */
		wp_reset_postdata();
		$tips = new WP_Query( array( 
			'post_type' => 'post',
			'category_name ' => 'artikel tips om een relatie te krijgen' 
		) );
		?>






		<h2>Online dating / Internetdaten</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $internetdaten->have_posts() ) : $internetdaten->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
		</ul>

		<h2>Zelfvertrouwen bij het daten en in relaties</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $zelfvertrouwen->have_posts() ) : $zelfvertrouwen->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
		</ul>


		<h2>Flirten</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $flirten->have_posts() ) : $flirten->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();
		
		?>
		</ul>


		<h2>Selecteren van de juiste partner</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $partnerselectie->have_posts() ) : $partnerselectie->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
		</ul>


		<h2>Overige tips voor het krijgen&nbsp;van een fijne relatie</h2>
		<ul class="list-style-none" style="list-style: none;">
		<?php while ( $tips->have_posts() ) : $tips->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
		</ul>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
