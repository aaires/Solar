<?php
/*---------------------------------------------------------------------------------*/
/* Tabs widget */
/*---------------------------------------------------------------------------------*/
class Tabs extends WP_Widget {

   function Tabs() {
	   $widget_ops = array('description' => 'This is Tabs widget.' );
       parent::WP_Widget(false, __('Themnific - Tabs', ''),$widget_ops);      
   }

   function widget($args, $instance) {  
    extract( $args );
	?>
		<?php echo $before_widget; ?>
        		<?php get_template_part('/includes/uni-tabs');?>
		<?php echo $after_widget; 
   }




} 

register_widget('Tabs');
?>