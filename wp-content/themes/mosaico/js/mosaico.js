jQuery(document).ready(function() {
		
	// Do Something on page load
	$('.newsletter').css("display","none");
	
	
	
	
	$('#newsletter').hover(
			  function () { 
				
				  
				  $('#newsletter').removeClass('newslayout').addClass('newslayout2');
				
				
				
				 $('.newsletter').fadeTo('slow', 1, function() {
				      // Animation complete.
					 $('.newsletter').css("display","block");
				    });
				
				
			  //  $('.newsletter').css("display","block");
			    $('.newsletter').animate({
					opacity: '1',	
				}, 400); 
			   
			  });
	
	
	

	
	
	
}); 
