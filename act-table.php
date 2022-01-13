<?php
/*
 * Plugin Name: Affiliate Comparison Table(ACT)
 * Author: Themebeyond
 * Description: This Plugin is for create comparison product table for affiliate marketing.
 * Author URI: https://themebeyond.com
 * Version: 1.0.0
 * Textdomain: act
 * Domain Path: /language/
 * Plugin Type: Piklist
 * */

// initlize the plugin and add the menus in admin left panel
function admin_menus(){
    $parent_slug = 'act_menu';

    add_menu_page(
        __('Afiliate Comparison Table', 'act'),
        __('ACT', 'act'),
        'manage_options',
        $parent_slug,
        '',
        plugins_url( 'act/assets/img/menu.png' ),
        6
    );

    add_submenu_page(
        $parent_slug,
        __('Add/Edit Tables', 'act'),
        __('Add/Edit Tables', 'act'),
        'manage_options',
        'edit.php?post_type=acttable',
        ''
    );

    add_submenu_page(
        $parent_slug,
        __('Add/Edit Boxes', 'act'),
        __('Add/Edit Boxes', 'act'),
        'manage_options',
        'edit.php?post_type=productbox',
        ''
    );

    add_submenu_page(
        $parent_slug,
        __('Add/Edit Single Product', 'act'),
        __('Add/Edit Single Product', 'act'),
        'manage_options',
        'edit.php?post_type=actproduct',
        ''
    );


    // remove the default submenu
    remove_submenu_page( $parent_slug, 'act_menu' );
}

add_action('admin_menu', 'admin_menus');

// styles
function load_styles() {
    wp_enqueue_style( 'icons', plugins_url('act/assets/css/fontawesome-all.min.css'), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', plugins_url('act/assets/css/admin.css'), array(), '1.0.0', 'all' );
    
}

add_action( 'admin_enqueue_scripts', 'load_styles' );

function act_activation_hook(){

}
register_activation_hook(__FILE__,"act_activation_hook");

function act_deactivation_hook(){

}
register_deactivation_hook(__FILE__,"act_deactivation_hook");


// load text domain
function act_load_textdomain(){
    load_plugin_textdomain('act', false, plugin_dir_path(__FILE__)."language");
}
add_action('plugins_loaded', 'act_load_textdomain');


// load public assets
function acttable_assets() {
    wp_enqueue_style( 'icons', plugins_url('act/assets/css/fontawesome-all.min.css'), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'act-css', plugin_dir_url(__FILE__)."assets/dpress-tbl-style.css", array());
    wp_enqueue_style( 'act-fontello', plugin_dir_url(__FILE__)."assets/css/fontello.css", array());
}
add_action( 'wp_enqueue_scripts', 'acttable_assets');


//Require Files
require_once(dirname(__FILE__) . '/inc/act-box-cpt.php');
require_once(dirname(__FILE__) . '/inc/act-box-shortcode.php');
require_once(dirname(__FILE__) . '/inc/act-table-cpt.php');
require_once(dirname(__FILE__) . '/inc/act-table-shortcode.php');
require_once(dirname(__FILE__) . '/inc/act-single-product-cpt.php');
require_once(dirname(__FILE__) . '/inc/act-single-product-shortcode.php');
require_once(dirname(__FILE__) . '/inc/act-single-product-lists-shortcode.php');
require_once(dirname(__FILE__) . '/piklist/piklist.php');