<?php
/**
 * Plugin Name: BTC Problem Services Selects
 * Plugin URI: https://btcreginald.com
 * Author: Reginald P
 * Author URI: https://btcreginald.com
 * Description: Supply the issues to the Select HTML
 * Version: 1.0.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: btc-problem-selects
*/

defined( 'ABSPATH' ) or die( 'Unauthorized Access' );

add_action( 'wp_enqueue_scripts', 'btc_reginaldp_wp_enqueue_scripts' );

function btc_reginaldp_wp_enqueue_scripts() {

    $first_array = array(
        array(
            'name' => 'Fruit',
            'id'   => '1'
        ),
        array(
            'name' => 'Animal',
            'id'   => '2'
        ),
        array(
            'name' => 'Bird',
            'id'   => '3'
        ),
        array(
            'name' => 'Car',
            'id'   => '4'
        ),
    );

    $second_array = array(
        array(
            'name' => 'Banana',
            'id'   => '1'
        ),
        array(
            'name' => 'Apple',
            'id'   => '1'
        ),
        array(
            'name' => 'Orange',
            'id'   => '1'
        ),
        array(
            'name' => 'Wolf',
            'id'   => '2'
        ),
        array(
            'name' => 'Fox',
            'id'   => '2'
        ),
        array(
            'name' => 'Bear',
            'id'   => '2'
        ),
        array(
            'name' => 'Eagle',
            'id'   => '3'
        ),
        array(
            'name' => 'Hawk',
            'id'   => '3'
        ),
        array(
            'name' => 'BWM',
            'id'   => '4'
        ),
    );

    wp_enqueue_script( 'btc-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '1.0.0', true );
    
    wp_enqueue_script( 'btc-bundle', plugin_dir_url( __FILE__ ) . 'assets/js/selector.js', array( 'btc-jquery' ), '1.0.0', true );
    
    wp_localize_script( 'btc-bundle', 'first_array', $first_array );
    wp_localize_script( 'btc-bundle', 'second_array', $second_array );
}
