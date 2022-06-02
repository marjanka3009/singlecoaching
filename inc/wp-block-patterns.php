<?php 

function my_plugin_register_my_patterns() {
  register_block_pattern(
    'my-plugin/introtekst',
    array(
        'title'       => __( 'introtekst', 'my-plugin' ),
        'description' => _x( 'Eerste blokje aan begin artikel ter introductie', 'Block pattern description', 'my-plugin' ),
        'content'     => "<!-- wp:paragraph {\"className\":\"wp-pattern-introblok\"} -->
                  <p class=\"wp-pattern-introblok\">introtekst</p>
                  <!-- /wp:paragraph -->",
    )

  );
}
 
add_action( 'init', 'my_plugin_register_my_patterns' );