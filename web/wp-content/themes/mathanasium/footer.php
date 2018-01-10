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
					<a class="returntop" href="#" style="							background-image:url('data:image/png;base64,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')">RETURN TO TOP</a>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
