<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if ( !function_exists('zero_setup') ) :

  function zero_setup() {

    // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
    add_theme_support('post-thumbnails');

    // default thumb size
    set_post_thumbnail_size(250, 250, true);
    add_image_size( 'zero-thumb-slider', 1170, 430, true );
    add_image_size( 'zero-thumb-gallery', 350, 350, true );
    add_image_size( 'zero-thumb-full', 900, 500, true );
    // add_image_size('zero-thumb', 300, 9999); // 300px wide (and unlimited height)


    /*
    The function below adds the ability to use the dropdown menu to select
    the new images sizes you have just created from within the media manager
    when you add media to your content blocks. If you add more image sizes,
    duplicate one of the lines in the array and name it according to your
    new image size.
    */
    function zero_custom_image_sizes( $sizes ) {
      return array_merge( $sizes, array(
          'zero-thumb-slider' => __('1170px by 430px'),
          'zero-thumb-full' => __('900px by 500px'),
          'zero-thumb-gallery' => __('350px by 350px'),
      ));
    }

    add_filter( 'image_size_names_choose', 'zero_custom_image_sizes' );

    

    

    // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
    register_nav_menus(
      array(
        'main-nav' => __( 'Main Menu', 'zero' ),   // main nav in header
        'footer-links' => __( 'Footer Links', 'zero' ) // secondary nav in footer
      )
    );

    function zero_main_nav() {
      wp_nav_menu(array(
        'container' => '',                           
        'menu' => __( 'Main Menu', 'zero' ), 
        'menu_class' => 'ul-top-nav u-cf',         
        'theme_location' => 'main-nav',                 
      ));
    } 

    function zero_footer_links() {
      wp_nav_menu(array(
        'container' => '',                              
        'menu' => __( 'Footer Links', 'zero' ),  
        'menu_class' => 'ul-footer-nav u-cf',      
        'theme_location' => 'footer-links',             
      ));
    } 

  }//zero_setup

endif;

add_action('after_setup_theme', 'zero_setup');