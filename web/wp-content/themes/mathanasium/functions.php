<?php
/**
 * BootStrapFast child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BootstrapFast
 */

/**
 * Footer description.
 */
function prefix_add_footer_styles() {
	// wp_enqueue_style( 'child-style',
	// 	get_stylesheet_directory_uri() . '/assets/css/child-style.css'
	// );
	?>
	<noscript id="deferred-styles">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_html( get_stylesheet_directory_uri() . '/assets/css/child-style.css' ); ?>"/>
	</noscript>
	<script>
		var loadDeferredStyles = function() {
		var addStylesNode = document.getElementById("deferred-styles");
		var replacement = document.createElement("div");
		replacement.innerHTML = addStylesNode.textContent;
		document.body.appendChild(replacement)
		addStylesNode.parentElement.removeChild(addStylesNode);
		};
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
		else window.addEventListener('load', loadDeferredStyles);
	</script>
	<?php

};
add_action( 'get_footer', 'prefix_add_footer_styles' );


/**
 * Child theme css and js loader.
 */
function bsft_theme_enqueue_styles() {

	wp_dequeue_script( 'wp-embed', 999999 );
	wp_deregister_script( 'wp-embed', 999999 );

	wp_dequeue_style( 'responsive-slider-lite2', 99999 );
	wp_dequeue_style( 'responsive-slider-litebootstrapcss', 99999 );
	wp_dequeue_style( 'bootstrapfast-style', 99999 );

	wp_dequeue_script( 'bootstrapfastjs', 99999 );
	wp_deregister_script( 'bootstrapfastjs', 99999 );

	wp_dequeue_script( 'responsive-slider-litebootstrapjs', 99999 );
	wp_deregister_script( 'responsive-slider-litebootstrapjs', 99999 );

	wp_dequeue_script( 'responsive-slider-lite', 99999 );
	wp_deregister_script( 'responsive-slider-lite', 99999 );

	wp_enqueue_script( 'mathanasiumjs', get_stylesheet_directory_uri() . '/assets/js/themes.min.js', array(), bootstrapfast_stylesuffix(), true );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, null, true );
	wp_enqueue_script( 'jquery' );

	add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

}
add_action( 'wp_enqueue_scripts', 'bsft_theme_enqueue_styles', 999999 );

function add_defer_attribute( $tag, $handle ) {
	$scripts_to_defer = array(
		'jquery',
		'jquery-core',
		'jquery-migrate',

		'mathanasiumjs',

	);

	foreach($scripts_to_defer as $defer_script) {
		if ($defer_script === $handle) {
			return str_replace(' src', ' defer="defer" src', $tag);
		}
	}

	return $tag;
}

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
