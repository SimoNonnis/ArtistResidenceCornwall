<?php define('ZENCACHE_ALLOWED', FALSE) ?>

<?php 

/*
This page is actually going to display the default blog section - (the real static home page is front-page.php)
WordPress will only use either home.php or index.php, but I prefear home.php
(even if could be misleading) because I want to leave index.php to display 
"Work In Progress" message to all pages that don't have a template page assigned!

Use only the home.php template file for the blog posts index. 
Do not use a Custom Page Template (such as template-blog.php) for two reasons:

When the static front page feature is configured properly, 
WordPress will not use a Custom Page Template to display the blog 
posts index, even if a Custom Page Template is assigned to the page 
designated as the "Posts page". 

WordPress will only use either home.php or index.php.
When the Custom Page Template is assigned to a static page other than 
the one designated as the "Posts page," the blog posts index loop pagination will not work properly.

*/

get_header(); ?> 


<section class="medium-container" role="main">

  <header>
      <h1 class="u-textCenter u-textUpperCase u-textBreak page-title">
        What’s On 
      </h1>
  </header>

  <div class="border-t border-b blog-nav u-textCenter u-cf">
  	<?php

      $month = '';
      $year = '';
      $today = date( 'd M' ); 

      // try to get the date from the url
      if (isset($_GET['month']) && isset($_GET['year'])) {
        $current = array(
          "month" => $_GET['month'],
          "year" => $_GET['year']
        );
      }

      // if no date, use php to get current date
      else {
        $current = array(
          "month" => date('m'),
          "year" => date('Y')
        );
      }

      $next = get_next($current);
      $previous = get_previous($current);

      // example: returns '14' from 2014
      $custom_prev_year     = substr($previous['year'], -2);
      $custom_current_year  = substr($current['year'], -2);
      $custom_next_year     = substr($next['year'], -2); 
       
  		
  	?>
  	<div class="blog-nav__link">
  		<span class="btn btn-skin u-inlineBlock u-valign-middle">
        <a href="<?php echo get_permalink(22) ?>?month=<?php echo $previous['month']; ?>&year=<?php echo $previous['year']; ?>"><?php echo month_num_to_name($previous['month']); ?>'<?php echo $custom_prev_year; ?></a> 
      </span>
  	</div>
  		<div class="blog-nav__current">
  			<span class="btn u-valign-middle u-inlineBlock">
          <strong><?php echo month_num_to_name($current['month']); ?>'<?php echo $custom_current_year; ?></strong>
        </span>
  		</div>
  	<div class="blog-nav__link">
  		<span class="btn btn-skin u-inlineBlock u-valign-middle">
        <a href="<?php echo get_permalink(22) ?>?month=<?php echo $next['month']; ?>&year=<?php echo $next['year']; ?>"><?php echo month_num_to_name($next['month']); ?>'<?php echo $custom_next_year; ?></a>
      </span>
  	</div>
  </div>

  <?php

    /**
     * TO DO pre_get_posts
     * http://codex.wordpress.org/Function_Reference/query_posts
     * http://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
     */

    query_posts('monthnum='.$current['month'].'&year='.$current['year']);

  ?>
  
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="media-obj u-cf">
      <div class="square media-obj__img">
      	<?php the_post_thumbnail(); ?>  
      </div>

      <div class="media-obj__body u-overflow-hid u-position-rel u-textLeft">
      	
      	<h1 class="u-textCapitalize media-obj-body__title">
        	<?php
          	$title = get_field('custom_page_title');
        	?>
        	<?php if($title): ?>
          	<?php echo $title;  ?>
        	<?php else: ?>
          	<?php echo get_the_title(); ?> 
        	<? endif; ?>
        </h1>
        <!-- <p class="media-obj-body__date"><?php echo get_the_date(); ?></p> -->

        <p class="u-textItalic">
        	<?php echo get_excerpt(250); ?>
        </p>

        <a href="<?php the_permalink() ?>" class="btn btn-skin btn-skin-link-color btn-top-space u-inlineBlock u-textCapitalize u-textInheritColor" >Read More</a>
      </div>
    </article>
	
	<?php endwhile; ?>

	<?php else : ?>
		<article class="media-obj u-cf">
			<p class="u-textCapitalize u-textCenter">No events scheduled for this month!</p>
		</article>
	<?php endif; ?>

</section>

	


<?php get_footer(); ?>
