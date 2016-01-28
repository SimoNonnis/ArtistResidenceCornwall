<?php 
	
	$images = get_field('slider'); 

?>

<?php if( $images ): ?>
<div class="flexslider u-cf">
  <ul class="slides u-cf">

  	<?php foreach( $images as $image ): ?>
	    <li>
	      <img src="<?php echo $image['sizes']['zero-thumb-slider']; ?>" alt="<?php echo $image['alt']; ?>"/>
	    </li>
  	<?php endforeach; ?>
  
  </ul>
</div>
<?php endif; ?>