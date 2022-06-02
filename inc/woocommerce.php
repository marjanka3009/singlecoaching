<?php









// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); haalt layout, small screen en dergelijke weg
// voeg hier een enqueue script toe voor customized style sheet

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'woocommerce-custom', get_template_directory_uri() . '/css/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function conditionally_load_woc_js_css(){
if( function_exists( 'is_woocommerce' ) ){
        # Only load CSS and JS on Woocommerce pages   
	if(! is_woocommerce() && ! is_cart() && ! is_checkout() ) { 		
		
		## Dequeue scripts.
		wp_dequeue_script('woocommerce'); 
		wp_dequeue_script('wc-add-to-cart'); 
		wp_dequeue_script('wc-cart-fragments');
		
		## Dequeue styles.	
		wp_dequeue_style('woocommerce-general'); 
		wp_dequeue_style('woocommerce-layout'); 
		wp_dequeue_style('woocommerce-smallscreen');
        wp_dequeue_style('wc-block-style');
		wp_dequeue_style('wc-block-vendors-style'); 
		wp_dequeue_style('woocommerce-custom'); 


		}
	}	
}
add_action( 'wp_enqueue_scripts', 'conditionally_load_woc_js_css' );

// Add 'woocommerce-active' class to the body tag.
function singlecoaching_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';
	return $classes;
}
add_filter( 'body_class', 'singlecoaching_woocommerce_active_body_class' );

// verwijder related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// wijzig tekst op bevestigingspagina
add_filter( 'woocommerce_thankyou_order_received_text', 'singlecoaching_thankyou', 10, 2 );
function singlecoaching_thankyou( $thankyoutext, $order ) {
	$added_text = $thankyoutext . '<p style="padding-bottom: 1.5em;">Je ontvangt binnen een paar minuten een bevestiging via e-mail.</p>';
	return $added_text ;
}



/****************************************
Woocommerce
****************************************/
/**
* Displays the custom text field input field in the WooCommerce product data meta box
*/
function cfwc_create_custom_field() {
$args = array(
'id' => 'custom_text_field_title',
'label' => __( 'Custom Text Field Title', 'cfwc' ),
'class' => 'cfwc-custom-field',
'desc_tip' => true,
'description' => __( 'Enter the title of your custom text field.', 'ctwc' ),
);
woocommerce_wp_text_input( $args );
}
add_action( 'woocommerce_product_options_general_product_data', 'cfwc_create_custom_field' );
/**
* Saves the custom field data to product meta data
*/
function cfwc_save_custom_field( $post_id ) {
$product = wc_get_product( $post_id );
$title = isset( $_POST['custom_text_field_title'] ) ? $_POST['custom_text_field_title'] : '';
$product->update_meta_data( 'custom_text_field_title', sanitize_text_field( $title ) );
$product->save();
}
add_action( 'woocommerce_process_product_meta', 'cfwc_save_custom_field' );

/**
* Displays custom field data after the add to cart button
*/
function cfwc_display_custom_field() {
global $post;
// Check for the custom field value
$product = wc_get_product( $post->ID );
$title = $product->get_meta( 'custom_text_field_title' );
if( $title ) {
echo get_post_meta($post->ID, 'custom_text_field_title', true);
}
}
add_action( 'woocommerce_after_add_to_cart_button', 'cfwc_display_custom_field' );