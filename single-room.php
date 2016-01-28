<?php 

/*Template file to display a single post [Custom Post Type Rooms]*/

get_header(); ?>

<section class="single-room-slider-container u-position-rel">

  <?php get_template_part('partials/slider'); ?>

</section>

<section class="small-container" role="main">
  <article>
    
    <header class="border-b">
      <h1 class="u-textCenter u-textUpperCase page-title">
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

    <div <?php post_class('border-b half-half-container rooms-page u-cf'); ?> >
      
      <div class="content-container">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          
            <?php the_content(); ?>        

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
   

      <div class="booking-widget-container">
        <?php get_template_part('partials/booking-widget'); ?> 
      </div>
      
    </div>

    <a href="<?php echo get_permalink( 10 ); ?>" class="u-textCapitalize btn u-inlineBlock btn-skin btn-top-space btn-skin-link-color">back to all rooms</a>
    
  </article>
</section>

	


<?php get_footer(); ?>