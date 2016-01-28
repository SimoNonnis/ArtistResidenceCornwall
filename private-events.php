<?php 

/*Template Name: Private Events Page*/

get_header(); ?> 


<section class="medium-container" role="main">

  <header>
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

  <div <?php post_class('border-t border-b half-half-container private-events-page u-cf'); ?> >
    <div class="content-container">
      <h2 class="content-container__title"><?php the_field('cbox-title'); ?></h2>
      <p><?php the_field('cbox-p'); ?></p>
    </div>
    <div class="promo-container">
      <div class="view-gallery">
        <h3 class="view-gallery__title u-textUpperCase">the gallery</h3>
        <p class="view-gallery__p u-inlineBlock">View more photos of our <br> guest spaces</p>
        <a href="<?php echo get_permalink( 46 ); ?>" class="btn btn-skin btn-skin-link-color view-gallery__btn u-valign-t u-inlineBlock u-textCapitalize u-textInheritColor">View Gallery</a>
      </div>  
    </div>
    
  </div>

  
  <?php if( have_rows('private_events_content') ): ?>
  <section>

    <?php while( have_rows('private_events_content') ): the_row(); 
 
      // vars
      $image    = get_sub_field('private_events_image');
      $title    = get_sub_field('private_events_title');
      $text     = get_sub_field('private_events_text');

      $btnText  = get_sub_field('private_events_button_text');
      $mailto   = get_sub_field('private_events_button_email');
      $subject  = get_sub_field('private_events_button_email_subject');
    
    ?>

    <article class="media-obj u-cf">
      <div class="square media-obj__img">
        <img src="<?php echo $image['sizes']['post-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>

      <div class="media-obj__body u-overflow-hid u-position-rel u-textLeft">
      
        <h1 class="u-textCapitalize media-obj-body__title"><?php echo $title; ?></h1>
        <p class="u-textItalic"><?php echo $text; ?></p>
        
        <?php if( $btnText && $mailto && $subject ):?>
        <a href="mailto:<?php echo $mailto; ?>?subject=<?php echo $subject; ?>" <?php the_field('email_address_tracking', 'option'); ?> class="btn btn-skin btn-skin-link-color btn-top-space u-inlineBlock u-textCapitalize u-textInheritColor" ><?php echo $btnText; ?></a>
        <?php endif; ?>

      </div>
    </article>


    <?php endwhile; ?>
 
  
  </section>
  <?php endif; ?>  
  
</section>

	


<?php get_footer(); ?>