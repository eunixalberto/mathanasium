<?php
/**
 * BootStrapFast child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BootstrapFast
 */

/**
 * Child theme css and js loader.
 */
function bsft_theme_enqueue_styles() {

	$parent_style = 'bootstrapfast-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/assets/css/themestyle.min.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/assets/css/child-style.css',
		array( $parent_style )
	);

	wp_dequeue_script( 'bootstrapfastjs', 99999 );
	wp_deregister_script( 'bootstrapfastjs', 99999 );

	wp_enqueue_script( 'mathanasiumjs', get_stylesheet_directory_uri() . '/assets/js/themes.min.js', array(), bootstrapfast_stylesuffix(), true );

}
add_action( 'wp_enqueue_scripts', 'bsft_theme_enqueue_styles', 999999 );

/**
 * Load VIP helper.
 */
require_once get_stylesheet_directory() . '/inc/vip-helper.php';

/**
 * [bootstrapfast_footer_bar description]
 */
function bootstrapfast_footer_bar() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bar', 'bootstrapfast' ),
		'id'            => 'footer_bar',
		'description'   => esc_html__( 'Add widgets here.', 'bootstrapfast' ),
		'before_widget' => '<section id="%1$s" class="footerbar widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bootstrapfast_footer_bar' );

/**
 * Register Thank you menu.
 */
function bootstrapfast_tymenu() {
	register_sidebar( array(
		'name'          => esc_html__( 'Thank You Sidebar', 'bootstrapfast' ),
		'id'            => 'ty-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bootstrapfast' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bootstrapfast_tymenu' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'menu-ty' => esc_html__( 'Thank You', 'bootstrapfast' ),
) );
