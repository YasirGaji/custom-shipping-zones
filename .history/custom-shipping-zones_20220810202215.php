<?php
/**
 * Plugin Name: Custom Shipping Zones
 * Plugin URI: https://github.com/YasirGaji/custom-shipping-zones.git
 * Author: Yasir Gaji
 * Author URI: https://yasirgaji.com
 * Description: Custom Woo Shipping Zones
 * Version: 0.1.0
 * License: GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: custom-shipping-zones
*/

add_filter( 'woocommerce_states', 'techiepress_custom_shipping_zones' );

function yasir_custom_shipping_zones( $states ) {
    
    $states['NG'] = array(
        'CR001' => 'Jaco',    
        'CR002' => 'San Jose',    
        'CR003' => 'Liberia',    
    );
    
    return $states ;
}