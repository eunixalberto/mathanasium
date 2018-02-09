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
						<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" >
							<input type=hidden name="oid" value="00D60000000K2UM">
							<input type=hidden name="retURL" value="http://www.franchise.mathnasium.com/thank-you/">
							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
							<!--  these lines if you wish to test in debug mode.                          -->
							<!--  <input type="hidden" name="debug" value=1>                              -->
							<!--  <input type="hidden" name="debugEmail"                                  -->
							<!--  value="jamie.bellows@mathnasium.com">                                   -->
							<!--  ----------------------------------------------------------------------  -->
							<div class="rowidth5 contact1">
								<label for="first_name"></label><input placeholder="First Name" id="first_name" maxlength="40" name="first_name" size="20" type="text" tabindex="1" required/><br>

								<label for="email"></label><input placeholder="Email" id="email" maxlength="80" name="email" size="20" type="text" tabindex="3" required/><br>

								<label for="street"></label><input placeholder="Street" id="street" maxlength="80" name="street" size="20" type="text" tabindex="5"><br>

								<label for="state"></label><input placeholder="State/Province"  id="state" maxlength="20" name="state" size="20" type="text" tabindex="7"/><br>

								<label for="zip"></label><input placeholder="Zip" id="zip" maxlength="20" name="zip" size="20" type="text" tabindex="9"/><br>

								<label></label>
								<select  id="00N60000002Rbqi" name="00N60000002Rbqi" title="Cash available to invest" tabindex="11" required>
									<option value="" selected="selected">Available Capital</option>
									<option value="$0 - $50,000">$0 - $50,000</option>
									<option value="$50,000 - $150,000">$50,000 - $150,000</option>
									<option value="$150,000 - $500,000">$150,000 - $500,000</option>
									<option value="$500,000 - $1,000,000">$500,000 - $1,000,000</option>
									<option value="$1,000,000+">$1,000,000+</option>
								</select><br>

							</div>

							<div class="rowidth5 contact2">

								<label for="last_name"></label><input placeholder="Last Name" id="last_name" maxlength="80" name="last_name" size="20" type="text" tabindex="2" required/><br>

								<label for="phone"></label><input placeholder="Phone" id="phone" maxlength="40" name="phone" size="20" type="text" tabindex="4"/ required><br>

				 				<label for="city"></label><input id="city" placeholder="City" maxlength="40" name="city" size="20" type="text" tabindex="6"/><br>

								<label for="country"></label><select placeholder="Country" id="country" name="country" tabindex="8" required/>								<option value="">Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Polynesia">French Polynesia</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="South Korea">South Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine, State of">Palestine, State of</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Sudan, South">Sudan, South</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">VanuatFranchise Information Kitu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
								</select>
								<br>

								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

								<label></label>
								<select  id="lead_source" name="lead_source" tabindex="10" required>
									<option value="">How did you hear about us?</option>
									<option value="Mathnasium.com">Mathnasium.com</option>
									<option value="Google / Bing">Google / Bing</option>
									<option value="Direct Email">Direct Email</option>
									<option value="US Commercial Service">US Commercial Service</option>
									<option value="Franchise Portal">Franchise Portal</option>
									<option value="Other">Other</option>
								</select><br>
								<!-- This field is a text field in the db, so I changed the html for it to be a drop down menu on the form including Scott's requested options-->

								<input id="00N32000002pWwV" name="00N32000002pWwV" rows="3" placeholder="Lead Source Detail URL" type="hidden" wrap="soft" /><br>

								<input  id="00N32000002jCRi" maxlength="255" name="00N32000002jCRi" size="20" type="hidden" placeholder="UTM Campaign"/><br>

								<input  id="00N32000002jCRn" maxlength="255" name="00N32000002jCRn" size="20" type="hidden" placeholder="UTM Code"/><br>

								<input  id="00N32000002jCRs" maxlength="255" name="00N32000002jCRs" size="20" type="hidden" placeholder="UTM Content"/><br>

								<input  id="00N32000002jCRx" maxlength="255" name="00N32000002jCRx" size="20" type="hidden" placeholder="UTM Medium"/><br>

								<input  id="00N32000002jCS2" maxlength="255" name="00N32000002jCS2" size="20" type="hidden" placeholder="UTM Term"/><br>

							</div>
							<div class="rowidth10 butn">
								<input type="submit" name="submit" tabindex="20" value="RECIEVE FRANCHISE INFORMATION">
							</div>
						</form>
						<script>
							function thankyou() {
								window.location.replace("//www.franchise.mathnasium.com/thank-you/");
  								return false;
							}
						</script>
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
									<a target="_blank" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('btn_text'); ?></a>
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
