<?php 

/*Template Name: Gallery Children Page*/

get_header(); ?> 


<section class="square-group-container u-textCenter" role="main">
  <article>

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
        <div class="btn children-pages-links">
          <span class="view-rooms u-inlineBlock u-valign-middle">View: </span>
          <?php get_template_part('partials/loops/children-pages-loop'); ?>
        </div>
    </header>

  </article>

  <?php 
  
  $images = get_field('gallery'); 

  ?>

  <?php if( $images ): ?>
  <section class="square-group" id="gallery">

    <?php foreach( $images as $image ): ?>
      <a class="square" href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>">
        <img src="<?php echo $image['sizes']['zero-thumb-gallery']; ?>" alt="<?php echo $image['alt']; ?>"/>
      </a>
    <?php endforeach; ?>

  </section>

  <?php else: ?>
    <p>No images at the moment for this section!</p>
  <?php endif; ?> 
    
</section>

  


<?php get_footer(); ?>