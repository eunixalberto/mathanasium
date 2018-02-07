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
								<select  id="00N60000002Rbqi" name="00N60000002Rbqi" title="Cash available to invest">
								<option value="">Cash available to invest:</option>
								<option value="">--None--</option><option value="below $50,000">below $50,000</option>
								<option value="$50,000 - $100,000">$50,000 - $100,000</option>
								<option value="$100,000 - $250,000">$100,000 - $250,000</option>
								<option value="$250,000 - $500,000">$250,000 - $500,000</option>
								<option value="over $500,000">over $500,000</option>
								</select><br>

							</div>

							<div class="rowidth5 contact2">

								<label for="last_name"></label><input placeholder="Last Name" id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

								<label for="phone"></label><input placeholder="Phone" id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

				 				<label for="city"></label><input  id="city" placeholder="City" maxlength="40" name="city" size="20" type="text" /><br>

								<label for="country"></label><input placeholder="Country"  id="country" maxlength="40" name="country" size="20" type="text" /><br>

								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

								<label></label>
								<select  id="lead_source" name="lead_source" >
									<option value="--None--">Lead Source</option>
									<option value="******** Online ********">******** Online ********</option>
									<option value="6FigureJobs.com">6FigureJobs.com</option>
									<option value="Mathnasium.com">Mathnasium.com</option>
									<option value="Mathnasiumfranchise.com">Mathnasiumfranchise.com</option>
									<option value="AmericasBestFranchises.com">AmericasBestFranchises.com</option>
									<option value="BeTheBoss.com">BeTheBoss.com</option>
									<option value="BeTheBoss.ca">BeTheBoss.ca</option>
									<option value="BestFranchise.com">BestFranchise.com</option>
									<option value="Bison.com">Bison.com</option>
									<option value="BizBuySell.com">BizBuySell.com</option>
									<option value="BizforSale.com">BizforSale.com</option>
									<option value="Biz Quest">Biz Quest</option>
									<option value="Businessforsale.com">Businessforsale.com</option>
									<option value="BusinessesforSale.com">BusinessesforSale.com</option>
									<option value="BuyThatFranchise.ca">BuyThatFranchise.ca</option>
									<option value="CareerBuilder.com">CareerBuilder.com</option>
									<option value="EmploymentNetwork.com">EmploymentNetwork.com</option>
									<option value="Entrepreneur.com">Entrepreneur.com</option>
									<option value="Franchise.com">Franchise.com</option>
									<option value="Franchise.org">Franchise.org</option>
									<option value="FranchiseBusinessReview.com">FranchiseBusinessReview.com</option>
									<option value="FranchiseBuy.com">FranchiseBuy.com</option>
									<option value="FranchiseClique.com">FranchiseClique.com</option>
									<option value="FranchiseDirect.com">FranchiseDirect.com</option>
									<option value="FranchiseExpo.in">FranchiseExpo.in</option>
									<option value="FranchiseExpoSouth.com">FranchiseExpoSouth.com</option>
									<option value="FranchiseGator.com">FranchiseGator.com</option>
									<option value="FranchiseGenius.com">FranchiseGenius.com</option>
									<option value="FranchiseHelp.com">FranchiseHelp.com</option>
									<option value="FranchiseIdentity.com">FranchiseIdentity.com</option>
									<option value="FranchiseMarketplace.com">FranchiseMarketplace.com</option>
									<option value="Franchisemart.com">Franchisemart.com</option>
									<option value="FranchiseOpportunitiesNetwork">FranchiseOpportunitiesNetwork</option>
									<option value="FranchiseRankings.com">FranchiseRankings.com</option>
									<option value="FranchiseSales.com">FranchiseSales.com</option>
									<option value="FranchiseSeek">FranchiseSeek</option>
									<option value="FranchiseShop">FranchiseShop</option>
									<option value="FranchiseSolutions.com">FranchiseSolutions.com</option>
									<option value="FranchiseWorks.com">FranchiseWorks.com</option>
									<option value="Franchising.com">Franchising.com</option>
									<option value="Militaryfranchising.com">Militaryfranchising.com</option>
									<option value="RedHotFranchises">RedHotFranchises</option>
									<option value="WhichFranchise.com">WhichFranchise.com</option>
									<option value="VeteranFranchise.com">VeteranFranchise.com</option>
									<option value="Veterans Landing Page">Veterans Landing Page</option>
									<option value="Google / Bing">Google / Bing</option>
									<option value="Banner Ad">Banner Ad</option>
									<option value="Direct Email">Direct Email</option>
									<option value="Internet Research">Internet Research</option>
									<option value="LinkedIn">LinkedIn</option>
									<option value="Online-Other">Online-Other</option>
									<option value="******** Print ********">******** Print ********</option>
									<option value="CFA Magazine">CFA Magazine</option>
									<option value="Entrepreneur Magazine">Entrepreneur Magazine</option>
									<option value="Franchise Handbook">Franchise Handbook</option>
									<option value="Inc. Magazine">Inc. Magazine</option>
									<option value="Affinity Magazine">Affinity Magazine</option>
									<option value="News Articles">News Articles</option>
									<option value="Print-Other">Print-Other</option>
									<option value="******** Radio/TV ********">******** Radio/TV ********</option>
									<option value="Rush Limbaugh">Rush Limbaugh</option>
									<option value="Sean Hannity">Sean Hannity</option>
									<option value="Glen Beck">Glen Beck</option>
									<option value="Dennis Prager">Dennis Prager</option>
									<option value="Neal Boortz">Neal Boortz</option>
									<option value="Radio-Bid4SpotsTalk">Radio-Bid4SpotsTalk</option>
									<option value="Radio-Bid4SpotsMusic">Radio-Bid4SpotsMusic</option>
									<option value="Sat1">Sat1</option>
									<option value="Sat2">Sat2</option>
									<option value="SAT3">SAT3</option>
									<option value="MSNBC 60">MSNBC 60</option>
									<option value="MSNBC 30">MSNBC 30</option>
									<option value="SiriusXM Progress">SiriusXM Progress</option>
									<option value="CNBC 60">CNBC 60</option>
									<option value="CNBC 30">CNBC 30</option>
									<option value="CNN HEADLINE 60">CNN HEADLINE 60</option>
									<option value="CNN HEADLINE 30">CNN HEADLINE 30</option>
									<option value="FOX NEWS 60">FOX NEWS 60</option>
									<option value="FOX NEWS 30">FOX NEWS 30</option>
									<option value="BLOOMBERG 60">BLOOMBERG 60</option>
									<option value="BLOOMBERG 30">BLOOMBERG 30</option>
									<option value="MLB 60">MLB 60</option>
									<option value="MLB 30">MLB 30</option>
									<option value="LAUGH USA 60">LAUGH USA 60</option>
									<option value="LAUGH USA 30">LAUGH USA 30</option>
									<option value="ESPN 60">ESPN 60</option>
									<option value="ESPN 30">ESPN 30</option>
									<option value="ESPN XTRA">ESPN XTRA</option>
									<option value="THE POWER">THE POWER</option>
									<option value="CHRISTIAN TALK">CHRISTIAN TALK</option>
									<option value="TV-PP">TV-PP</option>
									<option value="TV-Nico">TV-Nico</option>
									<option value="PI">PI</option>
									<option value="Consumer Radio 1">Consumer Radio 1</option>
									<option value="Consumer Radio 2">Consumer Radio 2</option>
									<option value="Consumer Radio 3">Consumer Radio 3</option>
									<option value="Consumer Radio 4">Consumer Radio 4</option>
									<option value="Consumer Radio 5">Consumer Radio 5</option>
									<option value="Consumer Radio 6">Consumer Radio 6</option>
									<option value="Radio-NPR">Radio-NPR</option>
									<option value="CNN">CNN</option>
									<option value="Bizquest.com">Bizquest.com</option>
									<option value="SFD1">SFD1</option>
									<option value="SFD2">SFD2</option>
									<option value="SFD3">SFD3</option>
									<option value="SFD4">SFD4</option>
									<option value="FD1">FD1</option>
									<option value="FD2">FD2</option>
									<option value="FD3">FD3</option>
									<option value="FD30 - new1">FD30 - new1</option>
									<option value="FD30 - new2">FD30 - new2</option>
									<option value="FD30 - new3">FD30 - new3</option>
									<option value="FD30 - new4">FD30 - new4</option>
									<option value="FD30 - new5">FD30 - new5</option>
									<option value="FD30 - new6">FD30 - new6</option>
									<option value="k12 academics">k12 academics</option>
									<option value="STARS">STARS</option>
									<option value="FOX BUSINESS">FOX BUSINESS</option>
									<option value="ESPN">ESPN</option>
									<option value="Radio-Other">Radio-Other</option>
									<option value="******** Other ********">******** Other ********</option>
									<option value="By seeing a Mathnasium Center">By seeing a Mathnasium Center</option>
									<option value="From a Mathnasium Franchisee">From a Mathnasium Franchisee</option>
									<option value="From a Parent/Friend">From a Parent/Friend</option>
									<option value="VR Brokers">VR Brokers</option>
									<option value="Tanventure">Tanventure</option>
									<option value="Trade Show">Trade Show</option>
									<option value="Other">Other</option>
									<option value="Mathnasium Customer">Mathnasium Customer</option>
									<option value="TeleCenters">TeleCenters</option>
									<option value="Forbes">Forbes</option>
									<option value="Existing Franchisee">Existing Franchisee</option>
									<option value="*****UK Franchise Portals*****">*****UK Franchise Portals*****</option>
									<option value="franchisedirect.co.uk">franchisedirect.co.uk</option>
									<option value="selectyourfranchise.com">selectyourfranchise.com</option>
									<option value="franchiseinfo.co.uk">franchiseinfo.co.uk</option>
									<option value="totalfranchise.co.uk">totalfranchise.co.uk</option>
									<option value="whitecollarfranchise.co.uk">whitecollarfranchise.co.uk</option>
									<option value="uk.businessesforsale.com">uk.businessesforsale.com</option>
									<option value="franchisesales.co.uk">franchisesales.co.uk</option>
									<option value="femalefranchise.co.uk">femalefranchise.co.uk</option>
									<option value="Axiom Lead Generator">Axiom Lead Generator</option>
									<option value="*****UK Print Media*****">*****UK Print Media*****</option>
									<option value="Elite Franchise Magazine">Elite Franchise Magazine</option>
									<option value="Franchise World Magazine">Franchise World Magazine</option>
									<option value="Business Franchise Magazine">Business Franchise Magazine</option>
									<option value="EasyJet Inflight Magazine">EasyJet Inflight Magazine</option>
									<option value="*** UK Additions ***">*** UK Additions ***</option>
									<option value="Internet Search">Internet Search</option>
									<option value="Franchise Portal">Franchise Portal</option>
									<option value="US Embassy">US Embassy</option>
									<option value="*** International Franchise Leads ***">*** International Franchise Leads ***</option>
									<option value="US Commercial Service">US Commercial Service</option>
									<option value="www.franchiseeurope.com">www.franchiseeurope.com</option>
									<option value="www.franchisedirekt.com">www.franchisedirekt.com</option>
									<option value="www.franchisedirecte.fr">www.franchisedirecte.fr</option>
									<option value="www.franchisedirect.ie">www.franchisedirect.ie</option>
									<option value="www.franchisedirect.co.za">www.franchisedirect.co.za</option>
									<option value="https://singapore.franchiseasia.com">https://singapore.franchiseasia.com</option>
								</select><br>
								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

								<textarea  id="00N32000002pWwV" name="00N32000002pWwV" rows="3" placeholder="Lead Source Detail URL" type="text" wrap="soft"></textarea><br>

								<input  id="00N32000002jCRi" maxlength="255" name="00N32000002jCRi" size="20" type="text" placeholder="UTM Campaign"/><br>

								<input  id="00N32000002jCRn" maxlength="255" name="00N32000002jCRn" size="20" type="text" placeholder="UTM Code"/><br>

								<input  id="00N32000002jCRs" maxlength="255" name="00N32000002jCRs" size="20" type="text" placeholder="UTM Content"/><br>

								<input  id="00N32000002jCRx" maxlength="255" name="00N32000002jCRx" size="20" type="text" placeholder="UTM Medium"/><br>

								<input  id="00N32000002jCS2" maxlength="255" name="00N32000002jCS2" size="20" type="text" placeholder="UTM Term"/><br>

							</div>
							<div class="rowidth10 butn">
								<input type="submit" name="submit" value="RECIEVE FRANCHISE INFORMATION">
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
									<a target="_blank" href="<?php the_sub_field('url'); ?>">CLICK HERE FOR FRANCHISE INFO</a>
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
										<a target="_blank" href="<?php echo the_sub_field('link'); ?>">
											<?php $img = get_sub_field( "image" ); ?>
											<?php echo '<img src="' . $img . '"/>' ; ?>
										</a>


										<?php the_sub_field('text'); ?>

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
	<?php $img = get_field( "footer_image" ); ?>
	<?php // echo '<img src="' . $img . '"/>' ; ?>
	<aside id="secondary" class="widget-area" role="complementary">
		<section id="media_image-2" class="widget widget_media_image">
			<img width="300" height="185" src="<?php echo $img ?>" />
		</section>
		<?php // dynamic_sidebar( 'main-sidebar-1' ); ?>
	</aside><!-- #secondary -->
<?php

get_footer();
