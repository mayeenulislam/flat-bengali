<?php
/**
 * Plugin Name: Flat Bengali
 * Description: Bengali settings for the WordPress theme Flat. I love <a href="https://wordpress.org/themes/flat/" rel="nofollow noopener noreferrer" target="_blank">Flat WordPress theme</a>, and used in one of my blogs. If you want to write Bengali blogs using Flat theme, you can create a plugin of your own, and these code will help you a lot. :)
 * Version:     1.0.1
 * Author:      Mayeenul Islam (@mayeenulislam)
 * Author URI:  http://nanodesignsbd.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Remove Customizer Settings for Bengali settings.
 * 
 * @param object $wp_customize Method.
 * 
 * @return void
 * -------------------------------------------------
 */
function flat_bengali_customizer($wp_customize)
{
	$wp_customize->remove_control('global_font_family');
	$wp_customize->remove_control('heading_font_family');
	$wp_customize->remove_setting('flat_theme_options[global_font_family]');
	$wp_customize->remove_setting('flat_theme_options[heading_font_family]');
}

add_action('customize_register', 'flat_bengali_customizer', 11);

/**
 * Load Bengali-specific stylesheet.
 * 
 * @return void
 * -------------------------------------------------
 */
function flat_bengali_enqueue_styles()
{
	wp_enqueue_style('flat-bengali', plugins_url('flat-bengali.css', __FILE__), array(), '1.0.1', 'all');
}

add_action('wp_enqueue_scripts', 'flat_bengali_enqueue_styles', PHP_INT_MAX);
