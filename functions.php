<?php
/**
 * require different files - to increase readability!!!
 * Comment the Function the you don't need
 */
require_once locate_template('/functions/zero_setup.php');					//Enable support for Post Thumbnails
require_once locate_template('/functions/head_cleanup.php');  			//head cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/more_cleanup.php');  			//more cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/enqueue_css.php');  				//CSS
require_once locate_template('/functions/enqueue_scripts.php'); 		//JS
require_once locate_template('/functions/helpers.php'); 						//Helpers Functions

require_once locate_template('/functions/admin_menu_custom.php'); 	//Clean Up Dashboard

require_once locate_template('/functions/cpt_rooms.php'); 					//Rooms custom post type
require_once locate_template('/functions/tax_room_types.php'); 			//Rooms -- custom categories

require_once locate_template('/functions/permalink_by_title.php');  //Get the permalink_by_title

require_once locate_template('/functions/events_blog.php'); 			//Events/Blog monthly paginated
//require_once locate_template('/functions/blog-pagination.php');  		//Old Paginate your posts by year, month or day.





//TYPO
//Code from this article: http://onetarek.com/wordpress/publish-a-wordpress-post-with-a-future-date/
function onetarek_prevent_future_type( $post_data ) {
	if ( $post_data['post_status'] == 'future' && $post_data['post_type'] == 'post' )#Here I am checking post_type='post' , you may use different post type and if you want it for all post type then remove "&& $post_data['post_type'] == 'post'"
	{
		$post_data['post_status'] = 'publish';
	}
	return $post_data;
}
add_filter('wp_insert_post_data', 'onetarek_prevent_future_type');
remove_action('future_post', '_future_post_hook');