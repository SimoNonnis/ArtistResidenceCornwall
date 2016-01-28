
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
				
		<div <?php post_class('alt-page-content'); ?> ><?php the_content(); ?></div>

	<?php endwhile; ?>
<?php endif; ?>