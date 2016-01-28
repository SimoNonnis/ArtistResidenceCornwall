<?php
/**
 * Clean Up Dashboard
 */

if ( !function_exists('remove_menus') ) :

	function remove_menus(){
  
  	remove_menu_page( 'edit-comments.php' );          //Removing Comments
  
  }

endif;

add_action( 'admin_menu', 'remove_menus' );





if ( !function_exists('remove_sub_menu_pages') ) :

	function remove_sub_menu_pages(){
		
		remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' ); //Removing Tags

		remove_submenu_page( 'themes.php', 'customize.php' );									//Removing Theme Customize
		remove_submenu_page( 'themes.php', 'theme-editor.php' );							//Removing Theme Editor

		remove_submenu_page('plugins.php', 'plugin-editor.php' );							//Removing Plugin Editor
		
	
	}

endif;

add_action('admin_init', 'remove_sub_menu_pages', 102);
 