
<div class="block-filter block-filter--area btn-skin u-cf"><!-- Area -->
<label class="block-filter__label u-textCapitalize u-block u-textLeft" for="area">area</label>
<span class="block-filter__select-wrapper" id="area">
  <select id="select--areas">
    <option value="all--areas">All</option>
    <?php if( get_field('neighbourhood') ): ?>
      <?php 
      $neighbourhood_areas = array();
      while( has_sub_field('neighbourhood') ): 

        $area  = get_sub_field_object('neighbourhood_area');
        $area_value  = get_sub_field('neighbourhood_area');
        $area_label  = $area['choices'][$area_value];
      ?>

        <?php if( !in_array($area_value, $neighbourhood_areas) ): ?>
          <option value="<?php echo $area_value; ?>"><?php echo $area_label; ?></option>
        <?php $neighbourhood_areas[] = $area_value; endif; ?>  
      
      <?php endwhile; ?>
    <?php endif; ?>
  </select>
</span>
</div>


<div class="block-filter block-filter--type btn-skin u-cf"><!-- Type -->
<label class="block-filter__label u-textCapitalize u-block u-textLeft" for="type">type</label>
<span class="block-filter__select-wrapper" id="type">
  <select id="select--types">
    <option value="all--types">All</option>
    <?php if( get_field('neighbourhood') ): ?>
      <?php 
      $neighbourhood_types = array();
      while( has_sub_field('neighbourhood') ): 

        $type  = get_sub_field_object('neighbourhood_type');
        $type_value  = get_sub_field('neighbourhood_type');
        $type_label  = $type['choices'][$type_value];
      ?>
      
        <?php if( !in_array($type_value, $neighbourhood_types) ): ?>
          <option value="<?php echo $type_value; ?>"><?php echo $type_label; ?></option>
        <?php $neighbourhood_types[] = $type_value; endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </select>
</span>
</div>