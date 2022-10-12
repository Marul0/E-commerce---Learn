<?php


function woocommerce_personalizado(){

	// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
	// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

	// remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
	// remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );



	// function miContenido(){
		?>
		
		<!-- <p>Hola</p> -->
	
		<?php
	// }
	// add_action('woocommerce_after_order_notes', 'miContenido');





	// woocommerce_before_checkout_form
	// woocommerce_checkout_before_customer_details
	// woocommerce_checkout_billing
	// woocommerce_before_checkout_billing_form
	// woocommerce_after_checkout_billing_form
	// woocommerce_before_checkout_registration_form
	// woocommerce_after_checkout_registration_form
	// woocommerce_checkout_shipping
	// woocommerce_before_order_notes
	// woocommerce_after_order_notes
	// woocommerce_checkout_after_order_review
	// woocommerce_checkout_after_customer_details
	// woocommerce_checkout_before_order_review
	// woocommerce_review_order_before_cart_contents
	// woocommerce_review_order_after_cart_contents
	// woocommerce_review_order_before_shipping
	// woocommerce_after_shipping_rate
	// woocommerce_review_order_after_shipping
	// woocommerce_review_order_before_order_total
	// woocommerce_review_order_after_order_total
	// woocommerce_review_order_before_payment
	// woocommerce_checkout_before_terms_and_conditions
	// woocommerce_checkout_terms_and_conditions
	// woocommerce_checkout_after_terms_and_conditions
	// woocommerce_review_order_before_submit
	// woocommerce_review_order_after_submit
	// woocommerce_review_order_after_payment
	// woocommerce_after_checkout_form







add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );
 
function custom_remove_woo_checkout_fields( $fields ) {

    // remove billing fields
    // unset($fields['billing']['billing_first_name']);
    // unset($fields['billing']['billing_last_name']);
    // unset($fields['billing']['billing_company']);
    // unset($fields['billing']['billing_address_1']);
    // unset($fields['billing']['billing_address_2']);
    // unset($fields['billing']['billing_city']);
    // unset($fields['billing']['billing_postcode']);
    // unset($fields['billing']['billing_country']);
    // unset($fields['billing']['billing_state']);
    // unset($fields['billing']['billing_phone']);
    // unset($fields['billing']['billing_email']);
   
    // remove shipping fields 
    // unset($fields['shipping']['shipping_first_name']);    
    // unset($fields['shipping']['shipping_last_name']);  
    // unset($fields['shipping']['shipping_company']);
    // unset($fields['shipping']['shipping_address_1']);
    // unset($fields['shipping']['shipping_address_2']);
    // unset($fields['shipping']['shipping_city']);
    // unset($fields['shipping']['shipping_postcode']);
    // unset($fields['shipping']['shipping_country']);
    // unset($fields['shipping']['shipping_state']);
    
    // remove order comment fields
    // unset($fields['order']['order_comments']);
    
    return $fields;
}










}


add_action('after_setup_theme', 'woocommerce_personalizado');