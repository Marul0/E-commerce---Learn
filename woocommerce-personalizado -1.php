<?php


function woocommerce_personalizado(){

// Mensaje que aparece por las acciones que realices
	// remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );
	 
// Zona antes de la descripcion del producto 	 
	// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
	// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	 
// Zona de la galeria de imagenes del producto
	// remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
	 
// Zona de resumen de producto
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	
// Zona de elementos especificos segun el tipo de producto
	// remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
	// remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
	// remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
	// remove_action( 'woocommerce_external_add_to_cart', 'woocommerce_external_add_to_cart', 30 );
	// remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
	// remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
	 
// Zona despues del resumen de producto	 
	// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	 
// Zona de calificaciones del producto	 
	// remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
	// remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );
	// remove_action( 'woocommerce_review_meta', 'woocommerce_review_display_meta', 10 );
	// remove_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10 );


}


add_action('after_setup_theme', 'woocommerce_personalizado');