<?php
/**
 * Plugin Name: Custom Shipping Zones
 * Plugin URI: https://github.com/YasirGaji/custom-shipping-zones.git
 * Author: Yasir Gaji
 * Author URI: https://yasirgaji.com
 * Description: Custom Woo Shipping Zones On Deeper Levels Than Just The States
 * Version: 0.1.0
 * License: GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: custom-shipping-zones
*/

// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'yasir_csz_states' );

function yasir_csz_states( $states ) {

    $map = array();

    $cities = array(
        'NG19999' => array(
            'city'     => 'Kampala',
            'division' => 'Nakawa',
        ),
        'NG29999' => array(
            'city'     => 'Kampala',
            'division' => 'Makindye'
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['NG'] = $map;
    
    return $states;
}