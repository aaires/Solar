jQuery(document).ready(function() {
		
	
	// Do Something on page load
	jQuery('.newsletter').css("display","none");
	
	jQuery('#view_check_in_date').datepicker();

	jQuery('#view_check_out_date').datepicker();
	
	
	jQuery('#newsletter').hover(
			  function () { 
				
				  
				  jQuery('#newsletter').removeClass('newslayout').addClass('newslayout2');
				
				
				
				  jQuery('.newsletter').fadeTo('slow', 1, function() {
				      // Animation complete.
					  jQuery('.newsletter').css("display","block");
				    });
				
				
			  //  $('.newsletter').css("display","block");
				  jQuery('.newsletter').animate({
					opacity: '1',	
				}, 400); 
			   
			  });
	
	
	

	
	
	
}); 
