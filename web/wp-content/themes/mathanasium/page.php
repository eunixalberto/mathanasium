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
				?>

				<div class="container-fluid redset">
				<?php
					if( have_rows('row_1') ) {
						while ( have_rows('row_1') ) : the_row();
							$img = get_sub_field( "image" );
							?>
							<div class="rowidth6">
								<?php echo '<img src="' . $img . '"/>' ; ?>
							</div>
							<div class="rowidth4">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
					    endwhile;
					}
				?>
				</div>

				<div class="container-fluid whiteset">
				<?php
					if( have_rows('row_2') ) {
						while ( have_rows('row_2') ) : the_row();
							?>
							<div class="rowidth10">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
					    endwhile;
					}
				?>
				</div>

				<div class="container-fluid redset">
				<?php
					if( have_rows('row_3') ) {
						while ( have_rows('row_3') ) : the_row();
							$img = get_sub_field( "image" );?>
							<div class="rowidth4">
								<?php the_sub_field('text'); ?>
							</div>
							<div class="rowidth6">
								<?php echo '<img src="' . $img . '"/>' ; ?>
							</div>
								<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid whiteset">
				<?php
					if( have_rows('row_4') ) {
						while ( have_rows('row_4') ) : the_row();
							?>
							<div class="rowidth10">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid redset">
				<?php
					if( have_rows('row_5') ) {
						while ( have_rows('row_5') ) : the_row();
							$img = get_sub_field( "image" );?>
							<div class="rowidth6">
								<?php echo '<img src="' . $img . '"/>' ; ?>
							</div>
							<div class="rowidth4">
								<?php the_sub_field('text'); ?>
							</div>
								<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid whiteset">
				<?php
					if( have_rows('row_6') ) {
						while ( have_rows('row_6') ) : the_row();
							?>
							<div class="rowidth10">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid greyset">
				<?php
					if( have_rows('row_contactform') ) {
						while ( have_rows('row_contactform') ) : the_row();
							?>
							<div class="rowidth10">
								<?php the_sub_field('text'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid whiteset">
				<?php
					if( have_rows('row_testimonial') ) {
						while ( have_rows('row_testimonial') ) : the_row
						();
							?>
							<div class="rowidth5">
								<?php $img = get_sub_field( "image" ); ?>
								<?php echo '<img src="' . $img . '"/>' ; ?>
								<?php the_sub_field('testimonial'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid redset">
					<div class="discovertitle">
						Discover More About Mathanasium
					</div>
				<?php
					if( have_rows('row_discover') ) {
						while ( have_rows('row_discover') ) : the_row
						();
							?>
							<div class="rowidth3">
								<?php $img = get_sub_field( "image" ); ?>
								<?php echo '<img src="' . $img . '"/>' ; ?>
								<?php the_sub_field('text'); ?>
								<?php the_sub_field('url'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid redset">
					<div class="discovertitle">
						What the Experts Think
					</div>
				<?php
					if( have_rows('row_discover') ) {
						while ( have_rows('row_discover') ) : the_row
						();
							?>
							<div class="rowidth3">
								<?php $img = get_sub_field( "image" ); ?>
								<?php echo '<img src="' . $img . '"/>' ; ?>
								<?php the_sub_field('text'); ?>
								<?php the_sub_field('url'); ?>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<?php
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
