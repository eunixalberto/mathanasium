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

				<div class="container-fluid greyset contactform">
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

				<div class="container-fluid whiteset testimonials">
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

				<div class="container-fluid redset discover">
					<div class="rowidth10">
						<h5>Discover More About Mathanasium</h5>
					</div>
				<?php
					if( have_rows('row_discover') ) {
						while ( have_rows('row_discover') ) : the_row
						();
							?>
							<div class="rowidth3">
								<?php $img = get_sub_field( "image" ); ?>
								<?php echo '<img src="' . $img . '"/>' ; ?>
								<div class="discovertitle">
									<?php the_sub_field('text'); ?>
								</div>
								<div class="discovertitlelink">
									<a href="<?php the_sub_field('url'); ?>">CLICK HERE FOR FRANCHISE INFO</a>
								</div>
							</div>
							<?php
						endwhile;
					}
				?>
				</div>

				<div class="container-fluid whiteset experts">
					<div class="rowidth10">
						<h6>What the Experts Think</h6>
					</div>
					<div class="rowidth10 logolist">
						<?php
							if( have_rows('row_logos') ) {
								while ( have_rows('row_logos') ) : the_row
								();
									?>
									<div class="rowidth2">
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
				</div>

				<div class="container-fluid whiteset rowlast">
				<?php
					if( have_rows('row_last') ) {
						while ( have_rows('row_last') ) : the_row();
							?>
							<div class="rowidth10">
								<?php the_sub_field('text'); ?>
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
