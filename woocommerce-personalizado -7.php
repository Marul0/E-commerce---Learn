<?php


function woocommerce_personalizado(){

	
	// Zona de resumen de producto
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );



	function woocommerce_template_single_price(){

		global $product;

		?>
		<button><?php echo $product->get_price_html(); ?></button>
		<?php

	}


}


add_action('after_setup_theme', 'woocommerce_personalizado');