<?php 

/*Template Name: Home Page*/

get_header(); ?>


	 
    
<section <?php post_class('u-textCenter cell-container u-cf'); ?> >

	<div class="cell">
		<div class="u-margin-auto cell__illustration">
			<?php 
	 			$image = get_field('illustation_image');
	 
			if( !empty($image) ): ?>
	 
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	 
			<?php endif; ?>
		</div>
	</div> 

	<div class="cell cell--main-banner">	
		<article class="u-margin-auto cell__main-banner">
				<h1 class="u-textUpperCase page-title page-title--main-banner"><?php the_field('home_location'); ?></h1>
				<p class="u-textCapitalize"><strong><?php the_field('home_description'); ?></strong></p>
				<p><?php the_field('home_paragraph1'); ?></p>
				<p><?php the_field('home_paragraph2'); ?></p>
		</article>
	</div>

	<div class="cell cell--bk-widget">
		<div class="home-booking-widget-container u-margin-auto">
			<?php get_template_part('partials/booking-widget'); ?>
		</div>
	</div>

	<div class="cell cell--promo-bkg">
				<article class="main-promo-article">
					<?php
						$title  	= get_field('home_page_main_promo_title');
						$content  = get_field('home_page_main_promo_content');

						$field_name = 'home_page_main_promo_switch';
					  $field = get_field_object($field_name);
					  $field_value = $field['value'];

						$link 					= get_field('home_page_main_promo_link');
						$extlink 				=	get_field('home_page_main_promo_external_link');

						$link_text			=	get_field('home_page_main_promo_link_text');
					?>

					<h3 class="main-promo-article__title u-textUpperCase"><?php echo $title; ?></h3>
					<p><?php echo $content; ?></p>

					<?php if( ($field_value == 'internal link') && ($link == true) ): ?>
						<a href="<?php echo $link; ?>" class="btn btn-skin btn-skin-link-color btn-top-space u-inlineBlock">
					<?php endif; ?>

					<?php if( ($field_value == 'external link') && ($extlink == true) ): ?>
						<a href="<?php echo $extlink ?>" class="btn btn-skin btn-skin-link-color btn-top-space u-inlineBlock" target="_blank">
					<?php endif; ?>

							<?php echo $link_text ?>

					<?php if( ( ($link) or ($extlink) ) && ($field_value != 'no link') ): ?>
						</a>
					<?php endif; ?> 	
				</article>
	</div>

	<?php if( have_rows('square_banner') ): ?>
 		<?php while( have_rows('square_banner') ): the_row(); 
			$image = get_sub_field('sq_banner_img');

			$field_name 		= 'sq_banner_promo_switch';
		  $field_value 		= get_sub_field($field_name);
		    	

			$link 					= get_sub_field('sq_banner_link');
			$extlink 				=	get_sub_field('sq_banner_external_link');

			$no_borders     = get_sub_field('sq_no_borders');
		?>

 		<div class="cell cell--no-mobile-visible cell--square">
			<div class="cell__square-banner u-margin-auto">
				<?php if( ($field_value == 'internal link') && ($link == true) ): ?>
					<a href="<?php echo $link; ?>" class="u-inlineBlock">
				<?php endif; ?>

				<?php if( ($field_value == 'external link') && ($extlink == true) ): ?>
					<a href="<?php echo $extlink ?>" class="u-inlineBlock" target="_blank">
				<?php endif; ?>
					<div class="square <?php if($no_borders):?>square-no-borders<?php endif; ?>">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
					</div>	
				<?php if( ( ($link) or ($extlink) ) && ($field_value != 'no link') ): ?>
					</a>
				<?php endif; ?> 
			</div>
		</div>



 		<?php endwhile; ?>
 	<?php endif; ?>

</section>





<?php get_footer(); ?>