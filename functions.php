<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
    global $is_IE, $wp_scripts;
    // If not IE, use the standard stylesheet.
    wp_enqueue_style('goni-main-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    
    wp_enqueue_style('goni-base', get_template_directory_uri() . '/assets/css/base.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('goni-main', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('goni-vendor', get_template_directory_uri() . '/assets/css/vendor.css', array(), wp_get_theme()->get('Version'));
    
    
    wp_register_script('goni-modernizr',get_template_directory_uri() . '/assets/js/modernizr.js',array());
    wp_enqueue_script('goni-modernizr');
    wp_register_script('goni-pace',get_template_directory_uri() . '/assets/js/pace.min.js',array());
    wp_enqueue_script('goni-pace');
    
    wp_register_script('goni-jquery',get_template_directory_uri() . '/assets/js/jquery-2.1.3.min.js',array(),true);
    wp_enqueue_script('goni-jquery');

    wp_register_script('goni-plugins',get_template_directory_uri() . '/assets/js/plugins.js',array(),true);
    wp_enqueue_script('goni-plugins');

    wp_register_script('goni-main',get_template_directory_uri() . '/assets/js/main.js',array(),true);
    wp_enqueue_script('goni-main');
}

add_action('wp_enqueue_scripts', 'twenty_twenty_one_scripts');
