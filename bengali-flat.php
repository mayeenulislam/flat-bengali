<?php
/**
 * Plugin Name: 	Flat Bengali
 * Description: 	Bengali settings for WordPress theme Flat. I loved <a href="https://wordpress.org/support/theme/flat">Flat WordPress theme</a>, and used in one of my blog. If you want to write Bengali blogs using Flat theme, you can create a plugin of your own, and these code will help you a lot. :)
 * Version:       	1.0.0
 * Author: 			Mayeenul Islam (@mayeenulislam)
 * Author URI: 		http://nanodesignsbd.com/
 * License:       	GPL-2.0+
 * License URI:   	http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Remove Customizer Settings for Bengali settings.
 * @param  class $wp_customize  Method.
 * @return void
 */
function bangla_customizer( $wp_customize ) {
	$wp_customize->remove_control( 'global_font_family' );
	$wp_customize->remove_control( 'heading_font_family' );
	$wp_customize->remove_setting( 'flat_theme_options[global_font_family]' );
	$wp_customize->remove_setting( 'flat_theme_options[heading_font_family]' );
}
add_action( 'customize_register', 'bangla_customizer', 11 );

/**
 * Load Bengali-specific stylesheet.
 * @return void
 */
function enqueue_bangla_styles() {
	wp_enqueue_style( 'bangla-styles', plugins_url('bengali-flat.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bangla_styles', PHP_INT_MAX );