<?php 

	$type_slider_mag = get_option('themnific_type_slider_mag'); 
	

	if($type_slider_mag == 'mosaico')  
	{
		get_template_part('/includes/sliders/mosaico' );
	}
	elseif($type_slider_mag == 'mosaico8')
	{
		
		if(is_home())			
			get_template_part('/includes/sliders/mosaico8' );
		else
			get_template_part('/includes/sliders/mosaicopage' );
		
			
	}
	elseif($type_slider_mag == 'mosaico10')
	{
		get_template_part('/includes/sliders/mosaico10' );
	}
	elseif($type_slider_mag == 'mosaico6')
	{
		get_template_part('/includes/sliders/mosaico6' );
	}
	elseif($type_slider_mag == 'mosaico-folio')
	{	
		get_template_part('/includes/sliders/mosaico-folio' );
	}
	elseif($type_slider_mag == 'mosaico10-folio')
	{
		get_template_part('/includes/sliders/mosaico10-folio' );
	}
	elseif($type_slider_mag == 'mosaico6-folio')
	{
		get_template_part('/includes/sliders/mosaico6-folio' );
	} 
	else 
	{
		get_template_part('/includes/sliders/mosaico' );
	}
?>