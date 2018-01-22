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

				<div id="aboutus" class="container-fluid redset">
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

				<div id="opportunity" class="container-fluid redset">
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

				<div id="nextsteps" class="container-fluid greyset contactform">
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
					<div class="rowidth10">
						<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
							<input type=hidden name="oid" value="00D60000000K2UM">
							<input type=hidden name="retURL" value="http://">
							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
							<!--  these lines if you wish to test in debug mode.                          -->
							<!--  <input type="hidden" name="debug" value=1>                              -->
							<!--  <input type="hidden" name="debugEmail"                                  -->
							<!--  value="jamie.bellows@mathnasium.com">                                   -->
							<!--  ----------------------------------------------------------------------  -->
							<div class="rowidth5 contact1">
								<label for="first_name"></label><input placeholder="First Name" id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

								<label for="email"></label><input placeholder="Email" id="email" maxlength="80" name="email" size="20" type="text" /><br>

								<label for="street"></label><textarea placeholder="Street" name="street"></textarea><br>

								<label for="state"></label><input placeholder="State/Province"  id="state" maxlength="20" name="state" size="20" type="text" /><br>

								<label for="zip"></label><input placeholder="Zip" id="zip" maxlength="20" name="zip" size="20" type="text" /><br>

								<label></label>
								<select  id="00N32000003JYKo" name="00N32000003JYKo" title="Available Capital"><option value="">Available Capital</option><option value="0-50">0-50</option>
								<option value="50-150">50-150</option>
								<option value="150-500">150-500</option>
								<option value="500-1000">500-1000</option>
								<option value="1000+">1000+</option>
								</select><br>

							</div>

							<div class="rowidth5 contact2">

								<label for="last_name"></label><input placeholder="Last Name" id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

								<label for="phone"></label><input placeholder="Phone" id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

				 				<label for="city"></label><input  id="city" placeholder="City" maxlength="40" name="city" size="20" type="text" /><br>

								<label for="country"></label><input placeholder="Country"  id="country" maxlength="40" name="country" size="20" type="text" /><br>

								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

								<label></label>
								<select  id="00N60000002Rbp9" name="00N60000002Rbp9" title="How did you hear about this opportunity?"><option value="">How did you hear about this opportunity?</option><option value="Internet Search">Internet Search</option>
								<option value="Direct Email">Direct Email</option>
								<option value="Franchise Portal">Franchise Portal</option>
								<option value="US Embassy">US Embassy</option>
								<option value="Other">Other</option>
								</select><br>
								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

							</div>
							<div class="rowidth10 butn">
								<input type="submit" name="submit" value="GET MY FRANCHISE INFORMATION KIT">
							</div>
						</form>
					</div>

				</div>

				<div id="testimonial" class="container-fluid whiteset testimonials">
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

				<div id="faq" class="container-fluid redset discover">
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

				<div id="awards" class="container-fluid whiteset experts">
					<div class="rowidth10">
						<h6>What the Experts Think</h6>
					</div>
					<div class="rowidth10 logolist">
						<?php
							if( have_rows('row_logos') ) {
								while ( have_rows('row_logos') ) : the_row
								();
									?>
									<div class="rowidth25">
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
