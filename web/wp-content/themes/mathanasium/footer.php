<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

?>
			</div><!-- #contennt -->
		</div><!-- .row -->
	</div><!-- .container -->
	<footer id="colophon" class="site-footer <?php echo esc_attr( bootstrapfast_container_type() ) ?>" role="contentinfo">
		<div class="row">
			<div class="col-md-12">
				<div class="footercontainer">
					<?php
						if ( ! bootstrapfast_main_sidebar_placement() ) {
							get_sidebar();
						}

						if ( is_active_sidebar( 'footer_bar' ) ) {
							dynamic_sidebar( 'footer_bar' );
						}
					?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
