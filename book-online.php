<?php 

/*Template Name: Book Online Page*/

get_header(); ?>

<section class="small-container" role="main">
  <article>
    <header class="border-b">
      <h1 class="u-textCenter u-textUpperCase u-textBreak page-title page-title--onlyText">
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
  	

    <div <?php post_class('half-half-container u-padding-b-flush book-online-page u-cf'); ?> >
      
      <div class="content-container">
        <h2 class="u-textCapitalize content-container__title"><?php the_field('book_online_title'); ?></h2>
      <div <?php post_class('book-online-copy'); ?> >
        <p><?php the_field('book_online_copy'); ?></p>
      </div>
      </div><!--
   

   --><div class="booking-widget-container">
        <?php get_template_part('partials/booking-widget'); ?> 
      </div>

    </div>
    
    
  </article>
</section>

	


<?php get_footer(); ?>