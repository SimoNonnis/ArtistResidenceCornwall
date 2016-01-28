<?php 

/*Template Name: Site Map Page*/

get_header(); ?>

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
  	
    <div <?php post_class('only-text-page-content sitemap-page'); ?> >
      <h2 id="pages">Pages</h2>
      <ul>
      <?php
      // Add pages you'd like to exclude in the exclude here
      wp_list_pages(
          array(
          'exclude' => '',
          'title_li' => '',
          )
      );
      ?>
      </ul>
    </div>
    
  </article>
</section>

	


<?php get_footer(); ?>