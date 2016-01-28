<?php 

/*Template Name: Suites Page*/

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
      <div class="btn children-pages-links">
          <span class="view-rooms u-inlineBlock u-valign-middle">View: </span>
          <?php get_template_part('partials/loops/children-pages-loop'); ?>
      </div>
      <div class="browse-all-rooms btn border-t border-b u-margin-auto">
        <p class="u-margin-t-flush"><?php the_field('top_description'); ?></p>
      </div>
    </header>
  	
  </article>

  <section class="square-group">

    

    <?php
    $args = array(
      'post_type' => 'room',
      'posts_per_page'=> '-1',
      'tax_query' => array(
        array(
          'taxonomy' => 'room_types',
          'field' => 'slug',
          'terms' => 'suites'
        )
      )  
    );

    $rooms = new WP_Query( $args );
    //$image_thumb = get_post_meta($post->ID, 'image-thumb', true);
      
    while ($rooms->have_posts()) : $rooms->the_post(); 

    $roomcat = get_the_term_list( $post->ID, 'room_types');
    $roomcat = strip_tags( $roomcat );

    ?>
        
         
        
      <a class="square" href="<?php echo get_permalink(); ?>">
        <?php the_post_thumbnail(); ?>

        <div class="square-text">
          <h1 class="square-text__title u-textLeft u-textTruncate u-textCapitalize"><?php the_title(); ?></h1>
          <h2 class="square-text__type u-textUpperCase"><?php echo $roomcat ?></h2>
          <p class="square-text__info u-textRight u-textTruncate">
          <?php  

            $field_name = "capacity_choice";
            $field = get_field_object($field_name);
             
            echo $field['value'];

          ?>  
          </p>
        </div>
      </a>


      
      
    <?php 
    endwhile;  

    wp_reset_query(); 

    ?>


    
  </section>
</section>

  

<?php get_footer(); ?>