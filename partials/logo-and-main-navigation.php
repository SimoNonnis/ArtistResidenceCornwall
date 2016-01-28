



<header role="banner" class="header">
	<div class="u-cf">
		
		<div class="ph-number-div ph-number-div--left u-displayTable"><!-- Phone Number Static-->
			<a class="mobile-ph-number u-textInheritColor u-textCenter btn" href="tel://<?php the_field('phone_number', 'option'); ?>" <?php the_field('phone_event_tracking', 'option'); ?>><?php the_field('phone_number_visible', 'option'); ?></a>
			<span class="read-only-ph-number u-textNormal btn"><?php the_field('phone_number_visible', 'option'); ?></span>
		</div><!-- End Phone Number Static-->

		<div class="u-textCenter logo-div"><!-- Logo -->
			<h1>
				<a href="/" class="u-inlineBlock">
					<img class="logo-svg" src="<?php the_field('logo_image', 'option'); ?>" alt="<?php the_field('logo_alt_text', 'option'); ?>">
				</a>
				<span class="visuallyhidden"><?php the_field('site_name', 'option'); ?></span>
			</h1>	
		</div><!-- End Logo -->

		<div class="ph-number-div ph-number-div--below-logo u-displayTable"><!-- Phone Number Mobile-->
			<a class="mobile-ph-number u-textInheritColor u-textCenter btn" href="tel://<?php the_field('phone_number', 'option'); ?>" <?php the_field('phone_event_tracking', 'option'); ?>><?php the_field('phone_number_visible', 'option'); ?></a>
		</div><!-- End Phone Number Mobile-->

		<div class="header-email-div u-displayTable"><!-- Email -->
			<a class="header-email u-textInheritColor u-textCenter u-textBreak btn" <?php the_field('email_address_tracking', 'option'); ?> href="mailto:<?php the_field('email_address', 'option'); ?>?subject=<?php the_field('email_address_subject', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>	
		</div><!-- End Email -->

	</div>

	<nav class="main-navigation u-textCenter u-cf" role="navigation"><!-- Main Navigation -->
		<span class="main-navigation__select-wrapper u-margin-auto">
			<?php zero_main_nav(); ?>	
		</span>
		

		<div class="m-book-online u-displayTable u-margin-auto">
		<a href="<?php echo get_permalink( 26 ); ?>" class="m-book-online-link">Book Online</a>
		</div>	
	</nav><!-- End Main Navigation -->
</header>





