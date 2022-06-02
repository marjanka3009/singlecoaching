<?php

function singlecoaching_disable_woocommerce_block_editor_styles() {
  wp_deregister_style( 'wc-block-editor' );
  wp_deregister_style( 'wc-blocks-style' );
}
add_action( 'enqueue_block_assets', 'singlecoaching_disable_woocommerce_block_editor_styles', 1, 1 );



function deregister_tribe_styles() {
    // wp_deregister_style( 'tribe-events-pro-views-v2-skeleton' );
    // wp_deregister_style( 'tribe-events-pro-views-v2-full' );
    // wp_deregister_style( 'tribe-events-views-v2-skeleton' );
    // wp_deregister_style( 'tribe-events-views-v2-full' );
    // wp_deregister_style( 'tribe-common-skeleton-style' );
    // wp_deregister_style( 'tribe-common-full-style' );
}
add_action( 'wp_enqueue_scripts', 'deregister_tribe_styles', 1 );

function singlecoaching_dequeue_styles() {

    // wp_dequeue_style( 'tribe-events-full-calendar-style' );
    // wp_dequeue_style( 'tribe-events-calendar-style' );
    // wp_dequeue_style( 'tribe-events-calendar-full-mobile-style' );
    // wp_dequeue_style( 'tribe-events-calendar-mobile-style' );
    // wp_dequeue_style( 'tribe-common-skeleton-style' );


    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'pb-accordion-blocks-style' );
    wp_dequeue_style( 'contact-form-7' );
    // wp_dequeue_style( 'widgetopts-styles' );

    wp_dequeue_style( 'wcpa-frontend' );
}
add_action( 'wp_enqueue_scripts', 'singlecoaching_dequeue_styles', 999 );


function singlecoaching_enqueue_scripts() {
     wp_enqueue_script( 'singlecoaching-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

     wp_enqueue_script( 'singlecoaching-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

     if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
          wp_enqueue_script( 'comment-reply' );
     }
}
add_action( 'wp_enqueue_scripts', 'singlecoaching_enqueue_scripts' );

function singlecoaching_load_critical_css_inline_header() {
     ?>
     <style type="text/css">
          <?php echo file_get_contents( get_template_directory_uri() . '/css/critical.css' ); ?>
     </style>

     <?php
     }
add_action('wp_head', 'singlecoaching_load_critical_css_inline_header', 30);

function singlecoaching_load_fallback_css_footer() {
     ?>

     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/main.css'; ?>">

     
     <?php
}
add_action('wp_footer', 'singlecoaching_load_fallback_css_footer', 30);