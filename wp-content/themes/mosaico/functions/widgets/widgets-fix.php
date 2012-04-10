<?php
/*---------------------------------------------------------------------------------*/
/* Ads Widget */
/*---------------------------------------------------------------------------------*/

class FixWidget extends WP_Widget {

	function FixWidget() {
		$widget_ops = array('description' => 'Widget to fix margins in widget sections' );
		parent::WP_Widget(false, __('Themnific - Fix Widget', ''),$widget_ops);      
	}

	function widget($args, $instance) {  
		$pixels = $instance['pixels'];

        echo '<div class="widget_fix" style=" margin-bottom:'.$pixels.'"></div>';

	}



	function update($new_instance, $old_instance) {                
		return $new_instance;
	}

	function form($instance) {        
		$pixels = esc_attr($instance['pixels']);
		?>

        <p>
            <label for="<?php echo $this->get_field_id('pixels'); ?>"><?php _e('Enter margin value in pixels (e.g. 30px or -15px):',''); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('pixels'); ?>" value="<?php echo $pixels; ?>" class="widefat" id="<?php echo $this->get_field_id('pixels'); ?>" />
        </p>
        <?php
	}
} 

register_widget('FixWidget');
?>