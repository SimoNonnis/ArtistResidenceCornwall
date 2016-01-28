
<div class="bw-form-container">
	
  <form id="<?php the_field('form_id', 'option'); ?>" name="<?php the_field('form_name', 'option'); ?>" class="valid_form" onsubmit="return bookOnlineUrl()" method="post">
                

    <div class="bw-block u-cf">
    <label class="bw-block__label u-textCapitalize u-block u-textLeft" for="start">Arrival</label>
    
    <span class="bw-block__field u-textCapitalize u-block">
      <input class="datepicker-start" placeholder="Date" id="start" type="text">  
    </span>
    </div>


    <div class="bw-block u-cf">
    <label class="bw-block__label u-textCapitalize u-block u-textLeft" for="end">Departure</label>
    
    <span class="bw-block__field u-textCapitalize u-block">
      <input class="datepicker-end" placeholder="Date" id="end" type="text"> 
    </span>
    </div>

    <div class="bw-block u-cf">
    <label class="bw-block__label u-textCapitalize u-block u-textLeft" for="guests">Guests</label>
    
    <span class="bw-block__field u-textCapitalize u-block">
      <select name="guests" id="guests">
        <option value="1">1 Guest</option>
        <option selected="selected" value="2">2 Guests</option>
        <option value="3">3 Guests</option>
        <option value="4">4 Guests</option>
        <option value="5">5 Guests</option>
        <option value="6">6 Guests</option>
        <option value="7">7 Guests</option>
        <option value="8">8 Guests</option>
      </select>
    </span>
    </div>



    <div class="u-textLeft">
    <input type="hidden" id="form-url" value="<?php the_field('form_action', 'option'); ?>"> <!-- Form Action -->
    <?php 
        
        if( get_field('flats_area_value') ) {
            $form_area_value = get_field('flats_area_value');
        } else {
            $form_area_value = get_field('form_area_value', 'option');
        } 

    ?>  
    <input type="hidden" name="area" id="area" value="<?php echo $form_area_value; ?>"> <!-- Area -->
    <input type="hidden" name="propertyType" id="propertyType" value="<?php the_field('form_propertytype_value'); ?>"> <!-- Property Type-->

    <input id="" class="btn btn-skin btn-skin-link-color  btn--book-now u-inlineBlock" <?php the_field('form_submit_tracking', 'option'); ?> value="Book Now"  type="submit">
    </div>
  

  </form>

</div>

