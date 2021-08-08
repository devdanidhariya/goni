<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#d83f0f">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#d83f0f">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#d83f0f">
        <?php wp_head(); ?>
    </head>
    <body id="top">

        <?php get_template_part('template-parts/header/site-header'); ?>
      