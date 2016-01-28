<?php 

/*Template Name: Neighbourhood Page*/

get_header(); ?>

<section class="square-group-container u-textCenter" role="main">
  <article>
    
    <header class="">
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
      
      <div class="dynamic-filter-container u-margin-auto u-cf">
      	<div class="dynamic-filter u-cf">
      	 <?php get_template_part('partials/dynamic-filter'); ?>	
      	</div>	
      </div>
    </header>
  	
  </article>
	
	<?php if( have_rows('neighbourhood') ): ?>
  <section class="square-group">

  	
  	<?php while( have_rows('neighbourhood') ): the_row(); 
 
      // vars
      $name  = get_sub_field('neighbourhood_name');
      $link  = get_sub_field('neighbourhood_external_link');
      $image = get_sub_field('neighbourhood_image');


      $area  = get_sub_field_object('neighbourhood_area');
      $type  = get_sub_field_object('neighbourhood_type');

      $area_value  = get_sub_field('neighbourhood_area');
      $type_value  = get_sub_field('neighbourhood_type');

      $area_label  = $area['choices'][$area_value];
      $type_label  = $type['choices'][$type_value];
      
      
 
    ?>
    
    <a class="square <?php echo $type_value; ?> <?php echo $area_value; ?> all all--areas all--types" href="<?php echo $link; ?>" target="_blank">
      <img src="<?php echo $image['sizes']['post-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

      <div class="square-text">
        <h1 class="square-text__title u-textLeft u-textTruncate u-textCapitalize"><?php echo $name; ?></h1>
        <h2 class="square-text__type u-textUpperCase u-textTruncate"><?php echo $type_label; ?></h2>
        <p class="square-text__info u-textRight u-textTruncate u-textCapitalize"><?php echo $area_label; ?></p>
      </div>
    </a>

    <?php endwhile; ?>

	

	</section>
	<?php endif; ?> 

</section>



<?php get_footer(); ?>