
<?php
	$image  	= get_field('promo_image');

	$field_name = "promo_switch";
  $field = get_field_object($field_name);
  $filed_value = $field['value'];

	$link 		= get_field('promo_link');
	$extlink 	=	get_field('promo_external_link');
?>

<?php if( ($filed_value == 'internal link') && ($link == true) ): ?>
	<a href="<?php echo $link; ?>" class="u-inlineBlock">
<?php endif; ?>

<?php if( ($filed_value == 'external link') && ($extlink == true) ): ?>
	<a href="<?php echo $extlink ?>" class="u-inlineBlock" target="_blank">
<?php endif; ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

<?php if( ( ($link) or ($extlink) ) && ($filed_value != 'no link') ): ?>
	</a>
<?php endif; ?> 
