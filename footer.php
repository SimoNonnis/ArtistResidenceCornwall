		
	</div><!-- End Container -->


	<footer class="footer u-textCenter u-textNormal">
		<p class="u-textUpperCase u-margin-t-flush footer__sitename"><?php the_field('site_name', 'option'); ?></p>
		
		<p class="footer__address u-margin-t-flush"><?php the_field('number_and_street_name', 'option'); ?>, 
			<?php the_field('location', 'option'); ?>, 
			<span class="footer__address__span">
			<?php the_field('county', 'option'); ?>,
			<?php the_field('postcode', 'option'); ?>
			</span>
		</p>

		
		<!-- Our Places PopUp -->
		<a href="#ourPlaces-popup" class="btn btn-skin ourPlaces-popup-btn u-inlineBlock">Our Places</a>

		<div id="ourPlaces-popup" class="ourPlaces-popup mfp-hide">
  		<div class="u-margin-auto u-textCenter">
				<a class="u-inlineBlock ourPlaces-popup__location" href="<?php the_field('london_location', 'option'); ?>"   <?php the_field('our_places_tracking', 'option'); ?>>London</a>
				<a class="u-inlineBlock ourPlaces-popup__location" href="<?php the_field('brighton_location', 'option'); ?>" <?php the_field('our_places_tracking', 'option'); ?>>Brighton</a>
				<a class="u-inlineBlock ourPlaces-popup__location" href="<?php the_field('cornwall_location', 'option'); ?>" <?php the_field('our_places_tracking', 'option'); ?>>Cornwall</a>
			</div>
		</div>
		<!-- End Our Places PopUp -->

		
		<div class="footer__social">
			<a href="<?php the_field('facebook_link', 'option'); ?>" <?php the_field('facebook_event_tracking', 'option'); ?> target="_blank">Facebook</a> /
			<a href="<?php the_field('twitter_link', 'option'); ?>" <?php the_field('twitter_event_tracking', 'option'); ?> target="_blank">Twitter</a> /
			<a href="<?php the_field('instagram_link', 'option'); ?>" <?php the_field('instagram_event_tracking', 'option'); ?> target="_blank">Instagram</a> /
			<a href="<?php the_field('pinterest_link', 'option'); ?>" <?php the_field('pinterest_event_tracking', 'option'); ?> target="_blank">Pinterest</a> / 
			<a href="#newsLetter-popup" class="newsLetter-popup-btn">Newsletter</a>
		</div>

		<!-- Newsletter PopUp -->
		<div id="newsLetter-popup" class="newsLetter-popup mfp-hide u-margin-auto">
			<form name="signup" id="signup" action="<?php the_field('newsletter_action', 'option'); ?>" method="post" onsubmit="return validate_signup(this)">
		

				<!-- ReturnURL - when the user hits submit, they'll get sent here -->
				<input type="hidden" name="ReturnURL" value="<?php the_field('newsletter_thank_you', 'option'); ?>">
				<!-- AddressbookID - required field, do not remove -->
				<input type="hidden" name="addressbookid" value="<?php the_field('newsletter_address_book', 'option'); ?>">
				<!-- UserID - required field, do not remove -->
				<input type="hidden" name="userid" value="<?php the_field('newsletter_user_id', 'option'); ?>">


				<div class="newsL__blok u-cf">
				  <label class="u-textCapitalize u-block u-textLeft">First name</label>
				  
				  <span class="u-textCapitalize u-block">
				    <input class="text" type="text" name="cd_FIRSTNAME"/>  
				  </span>
				</div>

				<div class="newsL__blok u-cf">
				  <label class="u-textCapitalize u-block u-textLeft">Last name</label>
				  
				  <span class="u-textCapitalize u-block">
				    <input class="text" type="text" name="cd_LASTNAME"/>  
				  </span>
				</div>

				<div class="newsL__blok u-cf">
				  <label class="u-textCapitalize u-block u-textLeft">Email</label>
				  
				  <span class="u-textCapitalize u-block">
				    <input type="email" name="Email">  
				  </span>
				</div>

				<div class="newsL__blok newsL__blok--btn u-textLeft">
					<input class="btn btn-skin btn--subscribe" <?php the_field('newsletter_tracking', 'option'); ?> type="submit" name="Submit" value="Subscribe">
				</div>

			
			</form>
		</div>
		<!-- End Newsletter PopUp -->


		<div class="footer__nav">
			<?php zero_footer_links(); // Footer Navigation ?>	
		</div>

		<p class="u-margin-t-flush footer__ignite-link">
			<span class="u-inlineBlock">Site design &amp; build by</span>
			<a href="http://ignitehospitality.com/" target="_blank" class="u-inlineBlock">Ignite Hospitality Marketing</a>
		</p>

	</footer>
	
	<!-- Our Places - Side Widget -->
	<?php get_template_part('partials/side-widget'); ?>
	<!-- End -->

	

</div><!-- End External Container -->


<?php wp_footer(); ?>

<?php the_field('tracking_codes', 'option'); ?>


</body>
</html>
