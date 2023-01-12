<?php
/**
 * Plugin Name: Time Zone Display
 * Description: Displays the current time in all time zones.
 * Version: 1.0
 * Author: Mark Beazley
 */

add_shortcode( 'time_zones', 'display_time_zones' );

function display_time_zones() {
    $time_zones = timezone_identifiers_list();
    $output = '<ul>';
    foreach( $time_zones as $time_zone ) {
        date_default_timezone_set( $time_zone );
        $time = date( 'h:i:s a' );
        $output .= '<li>' . $time_zone . ': ' . $time . '</li>';
    }
    $output .= '</ul>';
    return $output;
}
?>
