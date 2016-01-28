<?php get_header(); ?>


	 
    
 
    <section class="small-container u-textCenter" role="main" style="min-height: 300px;">


    <p>Work In Progress</p>


	<?php //simple loop with excerpt and content ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php //echo get_excerpt(14); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

	<?php endif; ?>
</section>



<?php get_footer(); ?>