<?php


function woocommerce_personalizado(){

	// remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
	// remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );
	// remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );


	function texto (){
		?>

		<p>Esto es un texto de prueba</p>

		<?php
	}

	add_action('woocommerce_after_shipping_calculator', 'texto');



	// woocommerce_before_cart
	// woocommerce_before_cart_table
	// woocommerce_before_cart_contents
	// woocommerce_cart_contents
	// woocommerce_cart_coupon
	// woocommerce_cart_actions
	// woocommerce_after_cart_contents
	// woocommerce_after_cart_table
	// woocommerce_cart_collaterals
	// woocommerce_before_cart_totals
	// woocommerce_cart_totals_before_shipping
	// woocommerce_after_shipping_rate
	// woocommerce_before_shipping_calculator
	// woocommerce_after_shipping_calculator
	// woocommerce_cart_totals_after_shipping
	// woocommerce_cart_totals_before_order_total
	// woocommerce_cart_totals_after_order_total
	// woocommerce_proceed_to_checkout
	// woocommerce_after_cart_totals
	// woocommerce_after_cart
	// woocommerce_cart_is_empty

}


add_action('after_setup_theme', 'woocommerce_personalizado');