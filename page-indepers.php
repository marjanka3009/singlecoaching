<?php
/**
 * Template Name: In de pers
 *
 */

   
    $args_bladen = array(  
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
    $args_radio = array(  
        'post_type' => 'indepers',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'medium',
	            'field' => 'slug',
	            'terms' => 'radio',  // blog, online, video, radio
	        )
	    ),
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );

        $args_video = array(  
        'post_type' => 'indepers',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'medium',
	            'field' => 'slug',
	            'terms' => 'video',  // blog, online, video, radio
	        )
	    ),
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );

        $args_online = array(  
        'post_type' => 'indepers',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'medium',
	            'field' => 'slug',
	            'terms' => 'online',  // blog, online, video, radio
	        )
	    ),
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );

        $args_blog = array(  
        'post_type' => 'indepers',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'medium',
	            'field' => 'slug',
	            'terms' => 'blog',  // blog, online, video, radio
	        )
	    ),
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'DESC',
    );
    $bladen = new WP_Query( $args_bladen );
    $radio =  new WP_Query( $args_radio );
    $video =  new WP_Query( $args_video );
    $online =  new WP_Query( $args_online );
    $blog =  new WP_Query( $args_blog );

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

		endwhile; // End of the loop.
		?>

		<h2 style="margin-bottom: 1.5em; ">Video</h2>
		<div class="card-container">		
		<?php
			if($video->have_posts()) : while($video->have_posts()) : $video->the_post();
				?>
			
			   <div class="card">
			        <h2 class="gamma card-header"><i class="fa fontawesome-icon fa-video-camera circle-yes"></i> <?php the_title(); ?></h2> 
					<?php the_field( 'embedvideo-pers'); ?>
			    </div>

				<?php
				endwhile;
			endif;
			wp_reset_query();			
		?>
		</div>
	<hr>

		<h2 style="margin-bottom: 1.5em; ">Bladen</h2>
		<div class="card-container">
		<?php
			if($bladen->have_posts()) : while($bladen->have_posts()) : $bladen->the_post();
				?>
			   <div class="card">
			        <h2 class="gamma card-header"><a href="<?php the_field( 'pdf-pers'); ?>"><i class="fa fontawesome-icon fa-book circle-yes"></i> <?php the_title(); ?></a></h2>       
			        <div class="card-image" style="background-image: url(<?php the_field( 'logo-pers'); ?>);"></div> -->
			        <div class="card-beschrijving"><?php echo get_field( 'beschrijving_pers'); ?></div>
		
			    </div>

				<?php
				endwhile;
			endif;
			wp_reset_query();
		?>
		</div>
	<hr>


		<h2 style="margin-bottom: 1.5em;">Online artikelen</h2>
		<div class="card-container">
		<?php
			if($online->have_posts()) : while($online->have_posts()) : $online->the_post();
				?>

			   <div class="card">
			        <h2 class="gamma card-header"><a href="<?php the_field( 'pdf-pers'); ?>"><i class="fa fontawesome-icon fa-book circle-yes"></i> <?php the_title(); ?></a></h2> 
			        <div class="card-image" style="background-image: url(<?php the_field( 'logo-pers'); ?>);"></div>
			        <div class="card-beschrijving"><?php echo get_field( 'beschrijving_pers'); ?></div>
		
			    </div>

				<?php
				endwhile;
			endif;
			wp_reset_query();
		?>		
		</div>

	<hr>

		<h2 style="margin-bottom: 1.5em;">Radio</h2>
		<div class="card-container">
		<?php
			if($radio->have_posts()) : while($radio->have_posts()) : $radio->the_post();
				?>

			   <div class="card">
			        <h2 class="gamma card-header"><i class="fa fontawesome-icon fa-music circle-yes"></i> <?php the_title(); ?></h2> 
					<div class="card-image" style="background-image: url(<?php the_field( 'logo-pers'); ?>);"></div>
					<figure class="wp-block-audio" style="display:block; margin-top:0;">
						<audio style="width: 100%;" src="<?php the_field( 'geluidsfragment-pers'); ?>" controls></audio>
					</figure>
			    </div>
			    
				<?php
				endwhile;
			endif;
			wp_reset_query();			
		?>

		</div>

	<hr>

		<h2 style="margin-bottom: 1.5em;">Blogs</h2>
		<div class="card-container">
		<?php
			if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post();
				?>
			   <div class="card">
			        <h2 class="gamma card-header"><a href="<?php the_field( 'pdf-pers'); ?>"><i class="fa fontawesome-icon fa-book circle-yes"></i> <?php the_title(); ?></a></h2> 
			        <div class="card-image" style="background-image: url(<?php the_field( 'logo-pers'); ?>);"></div>
			        <div class="card-beschrijving"><?php echo get_field( 'beschrijving_pers'); ?></div>		
			    </div>

				<?php
				endwhile;
			endif;
			wp_reset_query();
		?>		
		</div>

	<hr>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();