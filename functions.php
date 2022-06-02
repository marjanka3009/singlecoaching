<?php

if ( ! function_exists( 'singlecoaching_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * Note that this function is hooked into the after_setup_theme hook. 
	 * The init hook is too late for some features, such as indicating support for post thumbnails.
	 */
	function singlecoaching_setup() {

		load_theme_textdomain( 'singlecoaching', get_template_directory() . '/languages' );

		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Wit', 'singlecoaching' ),
				'slug'  => 'wit',
				'color'	=> '#fff',
			),
			array(
				'name'  => __( 'Zand', 'singlecoaching' ),
				'slug'  => 'zand',
				'color' => '#ececec',
			),
			array(
				'name'  => __( 'Groen', 'singlecoaching' ),
				'slug'  => 'groen',
				'color' => '#FFBC49',
			),
			array(
				'name'	=> __( 'Grijs', 'singlecoaching' ),
				'slug'	=> 'grijs',
				'color'	=> '#666',
			),
		) );
		add_theme_support( 'editor-styles' );
		add_editor_style('/css/editor-style.css' );	

		// function singlecoaching_gutenberg_scripts() {
		// 	wp_enqueue_script( 'singlecoaching-editor', get_stylesheet_directory_uri() . '/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_stylesheet_directory() . '/editor.js' ), true );
		// }
		// add_action( 'enqueue_block_editor_assets', 'singlecoaching_gutenberg_scripts' );




		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'singlecoaching' ),
			'menu-2' => esc_html__( 'Secondary', 'singlecoaching' ),

		) );
	}
endif;
add_action( 'after_setup_theme', 'singlecoaching_setup' );


require get_template_directory() . '/inc/wp-block-patterns.php'; 
require get_template_directory() . '/inc/custom-comment.php'; 
require get_template_directory() . '/inc/enqueue-scripts.php'; 
require get_template_directory() . '/inc/register-sidebar.php'; 
require get_template_directory() . '/inc/moderation-recipients.php'; 
require get_template_directory() . '/inc/template-tags.php'; //kan die weg? site breekt als ik hem weg haal
// require get_template_directory() . '/inc/acf-indepers.php';
require get_template_directory() . '/inc/acf-customfields.php';
require get_template_directory() . '/inc/acf-blocktype.php';
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


