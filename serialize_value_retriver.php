<?php
/**
 * Plugin Name:     Serialize_value_retriver
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Get the decode_string meta value based on shortcode key
 * Author:          Partha
 * Author URI:      YOUR SITE HERE
 * Text Domain:     serialize_value_retriver
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Serialize_value_retriver
 */

//Get the string from shortcode and retrieve value


function get_decode_string($atts) {    
    $atts = $atts[0];    
    $query = get_post_meta(10, 'decode_string' );
    $string_meta_value = $query[0][$atts];
    
    return $string_meta_value;
}

add_shortcode( 'car-field', 'get_decode_string' );