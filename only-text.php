<?php 

/*Template Name: Only Text Page*/

get_header(); ?>

<section class="small-container" role="main">
  <article>
    <header class="border-b u-textCenter">
      <h1 class="u-textUpperCase u-textBreak page-title page-title--onlyText">
      	<?php
          $title = get_field('custom_page_title');
        ?>
        <?php if($title): ?>
          <?php echo $title;  ?>
        <?php else: ?>
          <?php echo get_the_title(); ?> 
        <? endif; ?>
      </h1>

      	<?php

        if($post->post_parent):
          $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&depth=1&echo=0&sort_column=menu_order&ID");
        else :
          $children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0&sort_column=menu_order&ID");
        endif;

        if ($children) : ?>

          <div class="children-pages-links">
            <a class="u-inlineBlock u-valign-middle" href="<?php echo esc_url( get_permalink($post->post_parent)); ?>"><?php echo get_the_title($post->post_parent);?></a>
            <ul class="children-pages-links-ul u-cf">
              <?php echo $children; ?>
            </ul>
          </div>


        <?php endif; ?>

        
    </header>
  	
    <?php get_template_part('partials/loops/page-content-loop'); ?>
    
  </article>
</section>

	


<?php get_footer(); ?>