<?php
/**
 * Events/Blog code to paginate blog posts by month with the possibility
 * of publish them in the future (for upcoming events). 
 * 
 * Default blog page lands on the current month.
 * 
 */

if ( !function_exists('events_blog') ) :

	function events_blog() {


		// Allow to pubblish posts with future date
		function pubblish_posts_in_the_future( $data ) {
        
      if ( $data['post_status'] == 'future' && $data['post_type'] == 'post' )
          
        $data['post_status'] = 'publish';
      
      return $data;
    }

    remove_action('future_post', '_future_post_hook');
    add_filter( 'wp_insert_post_data', 'pubblish_posts_in_the_future' );

    

    

    // Use date to find PREVIOUS MONTH and create link to it
		function get_previous($current) {
		  
		  $date = date("Y-m-d", strtotime($current['year'].'-'.$current['month'].'-01'));
		  
		  $previous = array(
		    "month" => date("m", strtotime(date("d-m-Y", strtotime($date)) . " -1 month")),
		    "year" => date("Y", strtotime(date("d-m-Y", strtotime($date)) . " -1 month"))
		  );
		  
		  return $previous;
		}

		// Use date to find NEXT MONTH and create link to it
		function get_next($current) {
		  
		  $date = date("Y-m-d", strtotime($current['year'].'-'.$current['month'].'-01'));
		  
		  $next = array( 
		    "month" => date("m", strtotime(date("d-m-Y", strtotime($date)) . " +1 month")),
		    "year" => date("Y", strtotime(date("d-m-Y", strtotime($date)) . " +1 month"))
		  );
		  
		  return $next;
		}


		// Get the month name from number
		function month_num_to_name($monthnum) {
		  
		  $monthName = date("F", mktime(0,0,0, intval($monthnum), 10));
		  
		  return $monthName;
		}


	} 

endif;

add_action('init', 'events_blog');