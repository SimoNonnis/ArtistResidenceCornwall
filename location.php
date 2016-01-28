<?php 

/*Template Name: Location Page*/

get_header(); ?> 

<section class="medium-container">
  <header>
      <h1 class="u-textCenter u-textUpperCase u-textBreak page-title">
        <?php echo get_the_title(); ?> 
      </h1>
  </header>

  <div <?php post_class('border-t border-b half-half-container food-and-drink-page u-cf'); ?> >
      <div class="content-container">
        <h2 class="content-container__title"><?php the_field('cbox-title'); ?></h2>
        <p><?php the_field('cbox-p'); ?></p>
      </div>
      <div class="promo-container">
        <?php get_template_part('partials/promo'); ?>  
      </div>
  </div>
</section>


<section class="g-map u-textCenter u-textCapitalize"> <!-- Google Map -->
  <a class="btn btn-skin g-map__btn u-inlineBlock" href="<?php the_field('button_gmap'); ?>" target="_blank">View Google Map</a>
  <iframe src="<?php the_field('embedded_gmap'); ?>" width="100%" height="100%" frameborder="0" style="border:0"></iframe>  
</section> <!-- End Google Map -->


<section class="small-container" role="main">
  <article>
    
    <header class="border-b">
      <h1 class="u-textCenter u-textUpperCase u-textBreak page-title">
        <?php
          $title = get_field('custom_page_title');
        ?>
        <?php if($title): ?>
          <?php echo $title;  ?>
        <?php else: ?>
          <?php echo get_the_title(); ?> 
        <? endif; ?>
      </h1>
    </header>
  	
    <div <?php post_class('border-b half-half-container location-page u-cf'); ?> >
      
      <div class="content-container">
        <h2 class="u-textCapitalize"><?php echo get_the_title(); ?></h2>
        <p>
        <?php the_field('number_and_street_name', 'option'); ?><br>
        <?php the_field('location', 'option'); ?><br>
        <?php the_field('county', 'option'); ?><br>
        <?php the_field('postcode', 'option'); ?>
        </p>

        <p>
        <strong class="u-textCapitalize">Phone</strong><br>
        <?php the_field('phone_number_visible', 'option'); ?>
        </p>

        <p>
        <strong class="u-textCapitalize">Email</strong><br>
        <a class="u-textInheritColor u-textBreak" <?php the_field('email_address_tracking', 'option'); ?> href="mailto:<?php the_field('email_address', 'option'); ?>?subject=<?php the_field('email_address_subject', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
        </p>
        
      </div>
   

      <div class="booking-widget-container">
        <?php get_template_part('partials/booking-widget'); ?> 
      </div>
      
    </div>

    
      
    <div class="directions-container">
      <strong class="u-textCapitalize">Directions</strong>
      <?php get_template_part('partials/loops/alternative-page-content-loop'); ?>
    </div>
      
    
    
  </article>
</section>

	


<?php get_footer(); ?>