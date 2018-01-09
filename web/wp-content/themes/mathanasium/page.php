<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootstrapFast
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) {
				the_post();

				if( have_rows('row_1') ) {
					while ( have_rows('row_1') ) : the_row();

				        // display a sub field value
				        the_sub_field('image');
			        	the_sub_field('text');

				    endwhile;
				}

				echo 'test';
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
