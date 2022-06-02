<?php
function register_acf_block_types() { 
     acf_register_block_type(array( 
     'name' => 'testimonial', 
     'title' => __('Testimonial'), 
     'description' => __('testimonials van klanten'), 
     'render_template' => 'inc/blocks/testimonial.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'testimonial', 'client' ), 
     ));

     acf_register_block_type(array( 
     'name' => 'voorpagina', 
     'title' => __('Voorpagina'), 
     'description' => __('A custom frontpage block.'), 
     'render_template' => 'inc/blocks/voorpagina.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'voorpagina', 'client' ), 
     )); 

     
     acf_register_block_type(array( 
     'name' => 'indepersblad', 
     'title' => __('In de Pers bladen'), 
     'description' => __('Blok in de pers bladen'), 
     'render_template' => 'inc/blocks/indepersblad.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'indepers', 'client' ), 
     )); 

     acf_register_block_type(array( 
     'name' => 'indepersradio', 
     'title' => __('In de Pers radio'), 
     'description' => __('Blok in de pers radio'), 
     'render_template' => 'inc/blocks/indepersradio.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'indepers', 'client' ), 
     )); 

      acf_register_block_type(array( 
     'name' => 'indepersonline', 
     'title' => __('In de Pers online'), 
     'description' => __('Blok in de pers online bladen'), 
     'render_template' => 'inc/blocks/indepersonline.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'indepers', 'client' ), 
     )); 

     acf_register_block_type(array( 
     'name' => 'indepersvideo', 
     'title' => __('In de Pers video'), 
     'description' => __('Blok in de pers video en tv'), 
     'render_template' => 'inc/blocks/indepersvideo.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'indepers', 'client' ), 
     )); 

       acf_register_block_type(array( 
     'name' => 'indepersblog', 
     'title' => __('In de Pers blog'), 
     'description' => __('Blok in de pers online blog'), 
     'render_template' => 'inc/blocks/indepersonline.php', 
     'category' => 'formatting', 
     'icon' => 'admin-comments', 
     'keywords' => array( 'indepers', 'client' ), 
     ));    
    } 

// Check if function exists and hook into setup. 
if( function_exists('acf_register_block_type') ) { 
     add_action('acf/init', 'register_acf_block_types'); 
} 
