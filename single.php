<?php 

/*Default WP file to display a single post*/

get_header(); ?>

<section class="single-post-slider-container u-position-rel">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
      <?php the_post_thumbnail('zero-thumb-slider'); ?>    

    <?php endwhile; ?>
  <?php endif; ?>
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

    
      
      <?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div <?php post_class('single-post-container border-b'); ?> ><?php the_content(); ?></div>

				<?php endwhile; ?>
			<?php endif; ?>
        
    

    <a href="<?php echo get_permalink(22); ?>" class="u-textCapitalize btn u-inlineBlock btn-skin btn-top-space btn-skin-link-color">back to what’s on</a>
    
  </article>
</section>






<?php get_footer(); ?>
