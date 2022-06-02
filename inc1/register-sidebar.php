<?php

if ( function_exists('register_sidebar') ) {
    $sidebar1 = array(
          'id'            => 'sidebar-test-algemeen',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),

          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Test algemeen', 'singlecoaching' ),  
    );  
    $sidebar2 = array(
          'id'            => 'sidebar-test-bava',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Test bava', 'singlecoaching' ),  
    );
    $sidebar3 = array(
          'id'            => 'sidebar-algemeen',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Standaard blokken', 'singlecoaching' ),  
    );
    $sidebar4 = array(
          'id'            => 'sidebar-artikel-flirten',
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Artikel flirten', 'singlecoaching' ),  
    );
 
    $sidebar5 = array(
          'id'            => 'sidebar-artikel-bava',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Artikel bava', 'singlecoaching' ),  
    );

    $sidebar6 = array(
          'id'            => 'sidebar-artikel-daten',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Artikel daten', 'singlecoaching' ),  
    );

     $sidebar7 = array(
          'id'            => 'sidebar-artikel-stevig',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Artikel stevig staan', 'singlecoaching' ),  
    );
     $sidebar12 = array(
          'id'            => 'sidebar-artikel-partnerselectie',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Artikel Partnerselectie', 'singlecoaching' ),  
    );


     $sidebar8 = array(
          'id'            => 'sidebar-algemeen-2',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Standaard blokken 2', 'singlecoaching' ),  
    );
    

     $sidebar9 = array(
          'id'            => 'sidebar-ervaringen',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Ervaringen deelnemers', 'singlecoaching' ),  
    );

     $sidebar10 = array(
          'id'            => 'sidebar-faq',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Veel gestelde vragen', 'singlecoaching' ),  
    );
     $sidebar11 = array(
          'id'            => 'sidebar-faq-coaching',
          'description'   => esc_html__( 'Add widgets here.', 'singlecoaching' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',        
          'name'=>esc_html__( 'Veel gestelde vragen coaching', 'singlecoaching' ),  
    );

     
    register_sidebar($sidebar1);
    register_sidebar($sidebar2);
    register_sidebar($sidebar3);
    register_sidebar($sidebar4);
    register_sidebar($sidebar5);
    register_sidebar($sidebar6);
    register_sidebar($sidebar7);
    register_sidebar($sidebar12);    
    register_sidebar($sidebar8);
    register_sidebar($sidebar9);
    register_sidebar($sidebar10);
    register_sidebar($sidebar11);

}