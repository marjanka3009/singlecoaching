<?php
?>
<aside id="secondary" class="widget-area">
	<?php 
    if ( in_category( 'artikel-bindings-en-verlatingsangst' ) ): 
    dynamic_sidebar( 'sidebar-test-bava' ); 
    endif;
    if ( ! in_category( 'artikel-bindings-en-verlatingsangst' ) ): 
    dynamic_sidebar( 'sidebar-test-algemeen' ); 
    endif;  

    dynamic_sidebar( 'sidebar-algemeen' ); 

    if ( in_category( 'artikel-bindings-en-verlatingsangst' ) ): 
    dynamic_sidebar( 'sidebar-artikel-bava' );
    endif;  

    if ( in_category( 'artikel-tips-om-een-relatie-te-krijgen' ) ): 
    dynamic_sidebar( 'sidebar-artikel-daten' );
    endif;  

    if ( in_category( 'artikel-zelfvertrouwen-relaties' ) ): 
    dynamic_sidebar( 'sidebar-artikel-stevig' );
    endif;  

    if ( in_category( 'artikel-partnerselectie' ) ): 
    dynamic_sidebar( 'sidebar-artikel-partnerselectie' );
    endif;  

    dynamic_sidebar( 'sidebar-algemeen-2' );

    if ( in_category( 'artikel-flirten' ) ): 
    dynamic_sidebar( 'sidebar-artikel-flirten' );
    endif;

    // if ( in_category( 'artikel-flirten' ) ): 
    // dynamic_sidebar( 'sidebar-ervaringen' ); 
    // endif; 

        /* Ervaringen Singlevakantie "Inspiratie voor een nieuwe relatie"
    Singlevakanties & cursusweken */ 

    // if ( in_category( 'artikel-flirten' ) ): 
    // dynamic_sidebar( 'sidebar-faq' ); 
    // endif;  
/* evenementen */

    // if ( in_category( 'artikel-flirten' ) ): 
    // dynamic_sidebar( 'sidebar-faq-coaching' );
    // endif;  

/* Single en op zoek naar een duurzame relatie? Neem een persoonlijke coach!*/
?>
</aside>