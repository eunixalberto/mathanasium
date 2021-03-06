<?php
/**
 * The header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; <?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<style>
	@supports (-ms-ime-align:auto) {
		header#masthead .site-description {
			bottom: -9vw !important;
		}
	}
</style>

</head>
<body <?php body_class(); ?>>
	<div class="container topfloatnav">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'bootstrapfast' ); ?></button>
			<?php

			if ( is_page_template( 'templates/tpl-thankyou.php' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-ty',
						'menu_id'        => 'ty-sidebar-1',
					)
				);
			} else {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu'        => get_field( 'menu_language' ),
					)
				);
			}

			?>
		</nav><!-- #site-navigation -->
	</div>


	<div class="<?php echo esc_attr( bootstrapfast_container_type() ); ?>">
		<div class="row">
			<header id="masthead" class="site-header col-xs-12 <?php echo esc_attr( bootstrapfast_main_header_style() ); ?>" role="banner">
				<div class="site-branding">
					<?php
					if ( bootstrapfast_get_the_logo_url() ) {
						?>
						<div id="site-header">
							<?php the_custom_logo(); ?>
						</div>
						<?php
					} else {
						if ( is_front_page() && is_home() ) {
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php
						} else { ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> <?php
						}
					}
					?>
				</div><!-- .site-branding -->

				<div class="headersubimage"><?php
					if( have_rows('header_elements') ) {
						while ( have_rows('header_elements') ) : the_row();
							$img1 = get_sub_field( "image" );
							echo '<img src="' . $img1 . '"/>';
						endwhile;
					}
					?>
				</div>

				<?php
					//$description = get_bloginfo( 'description', 'display' );
					// if ( $description || is_customize_preview() ) { ?>
						<p class="site-description"><?php
							if( have_rows('header_elements') ) {
								while ( have_rows('header_elements') ) : the_row();
									$title = get_sub_field( "text" );
									echo $title;
								endwhile;
							}
							?>
						</p>
						<?php
					// }
				?>

			</header><!-- #masthead -->

			<div id="content" class="site-content col-xs-12 <?php echo esc_attr( bootstrapfast_main_body_style() ) ?>">
