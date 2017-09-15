<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('address'); ?>">Address (eg. 319 Carrall Street):</label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('city'); ?>">City:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('region'); ?>">Region (eg. BC):</label>
		<input class="widefat" id="<?php echo $this->get_field_id('region'); ?>" name="<?php echo $this->get_field_name('region'); ?>" type="text" value="<?php echo $region; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('phone'); ?>">Phone Number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>">
   </p>
</div>
