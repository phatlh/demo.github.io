<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_email']); 
     unset($fields['billing']['billing_last_name']);    
     unset($fields['shipping']['shipping_last_name']); 
     unset($fields['shipping']['shipping_company']); 
     unset($fields['shipping']['shipping_state']); 
     unset($fields['shipping']['shipping_address_2']);
     unset($fields['shipping']['shipping_country']);
     unset($fields['shipping']['shipping_postcode']);


     return $fields;
}