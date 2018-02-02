<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

if ( ! is_active_sidebar( 'main-sidebar-1' ) ) {
	return;
}
?>

<?php $img = get_field( "footer_image" ); ?>
<?php // echo '<img src="' . $img . '"/>' ; ?>

<aside id="secondary" class="widget-area" role="complementary">
	<section id="media_image-2" class="widget widget_media_image">
		<img width="300" height="185" src="<?php echo $img ?>" />
	</section>
	<?php // dynamic_sidebar( 'main-sidebar-1' ); ?>
</aside><!-- #secondary -->
