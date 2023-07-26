<?php
/**
 * @package RescueUser
 */
/*
Plugin Name: Users password rescue
Description: This plugin to update users password when user forgot password.
Version: 1.0
Author: Tan Rain
Text Domain: rescueuser
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RESCUEUSER_VERSION', '1.0' );
define( 'RESCUEUSER__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Create page when active
function rescue_activate() {
   $rescue_page = get_page_by_path('cuuho', OBJECT);
    if(!isset($rescue_page)) {
        $page = array(
            'post_title'    => 'Rescue',
            'post_content'  => 'This is my rescue page',
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'page',
            'post_name'     => 'cuuho'
        );

        wp_insert_post($page);
    }
}
register_activation_hook( __FILE__, 'rescue_activate' );

// Add page template
add_filter( 'page_template', 'rescue_page_template' );
function rescue_page_template( $page_template ) {
    if ( is_page( 'cuuho' ) ) {
        $page_template = dirname( __FILE__ ) . '/rescue-page-template.php';
    }

    return $page_template;
}