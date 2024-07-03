<?php
/*
Plugin Name: UFO Product Tabs Addons
Description: A plugin to display booking widget.
Version: 1.0
Author: UnikForce IT
License: GPL2
*/

// Ensure this file is loaded within WordPress.
defined('ABSPATH') || exit;

if( !function_exists( 'ufoproducttabs_enqueue_scripts' ) ){
    function ufoproducttabs_enqueue_scripts(){
        wp_enqueue_style( 'ufoproducttabs-addons-style', plugins_url( '/assets/ufoproducttabs.css' , __FILE__ ), array(), '', 'all' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'ufoproducttabs-addons-script',  plugins_url( '/assets/ufoproducttabs.js' , __FILE__ ), array( 'jquery'), '', true );

        $ajax_url = admin_url( 'admin-ajax.php' );
        $UFO_ADDON_DATA = array(
            'ajaxurl'   => $ajax_url,
            'site_url'  => site_url(),
        );
        wp_localize_script( 'ufoproducttabs-addons-script', 'UFO_ADDON_DATA', $UFO_ADDON_DATA );
    }
}
add_action( 'wp_enqueue_scripts', 'ufoproducttabs_enqueue_scripts' );

add_action('elementor/frontend/after_register_scripts', 'ufo_pta_register_frontend_scripts', 10);
function ufo_pta_register_frontend_scripts() {
    wp_enqueue_script( 'ufoproducttabs-addons-editor',  plugins_url( '/assets/editor.js' , __FILE__ ), array( 'jquery'), '', true );
}

require_once( __DIR__ . '/helper.php' );

// Include the Elementor widget class.
function ufo_pta_register_new_widgets( $widgets_manager ) {
    require_once( __DIR__ . '/widget/product-tabs/index.php' );
}
add_action( 'elementor/widgets/register', 'ufo_pta_register_new_widgets' );
