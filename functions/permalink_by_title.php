<?php 

//http://tommcfarlin.com/get-permalink-by-slug/
//http://queryposts.com/function/sanitize_title_with_dashes/

  function permalink_by_title( $title ) {

  // Initialize the permalink value
  $permalink = null;

  // Get the page by the incoming title
  $page = get_page_by_title( sanitize_title_with_dashes( $title ) );

  // If the page exists, then let's get its permalink
  if( null != $page ) {
      $permalink = get_permalink( $page->ID );
  } // end if

  return $permalink;

  } // end theme_get_permalink_by_title


?>