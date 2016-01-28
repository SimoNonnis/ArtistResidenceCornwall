
<?php

if($post->post_parent):
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&depth=1&echo=0&sort_column=menu_order&ID");
else :
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0&sort_column=menu_order&ID");
endif;

if ($children) : ?>

	<?php if ( is_page( 10 ) || '10' == $post->post_parent ): //rooms and children ?>
		
		<a class="u-inlineBlock u-valign-middle" href="<?php echo esc_url( get_permalink($post->post_parent)); ?>"><?php echo get_the_title($post->post_parent);?></a>
		<ul class="children-pages-links-ul u-cf">
			<?php echo $children; ?>
		</ul>

	<?php endif; ?>

	<?php if ( is_page( 20 ) || '20' == $post->post_parent): //gallery and children ?>

		<ul class="children-pages-links-ul u-cf">
			<?php echo $children; ?>
		</ul>
		
	<?php endif; ?>

<?php endif; ?>
