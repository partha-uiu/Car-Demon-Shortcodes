<?php
/**
 * Plugin Name:     Car Demon Shortcodes
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Get the Car Demon Shortcodes based on key
 * Author:          Partha
 * Author URI:      YOUR SITE HERE
 * Text Domain:     Car Demon Shortcodes
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Car Demon Shortcodes
 */

//Get the string from shortcode and retrieve value




function get_decode_string($atts) {   
    global $post;
     
    if(!isset($atts[0])) {
        return '';  
    }
    
    $atts = $atts[0];    
    $query = get_post_meta($post->ID, 'decode_string' );
    $string_meta_value = $query[0][$atts];
    
    return $string_meta_value;
}

add_shortcode( 'car-field', 'get_decode_string' );
