<?php


function woocommerce_personalizado(){

	
	remove_action( 'woocommerce_email_header', array( $object, 'email_header' ) );
	remove_action( 'woocommerce_email_footer', array( $object, 'email_footer' ) );
	remove_action( 'woocommerce_email_order_details', array( $object, 'order_details' ), 10, 4 );
	// remove_action( 'woocommerce_email_order_details', array( $object, 'order_schema_markup' ), 20, 4 );
	// remove_action( 'woocommerce_email_order_meta', array( $object, 'order_meta' ), 10, 3 );
	remove_action( 'woocommerce_email_customer_details', array( $object, 'customer_details' ), 10, 3 );
	// remove_action( 'woocommerce_email_customer_details', array( $object, 'email_addresses' ), 20, 3 );



	add_action('woocommerce_email_header', 'miEncabezado');
	function miEncabezado(){
		?>

		<h1>Hola, felicidades por haber comprado</h1>

		<?php
	}

}


add_action('after_setup_theme', 'woocommerce_personalizado');