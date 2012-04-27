$(document).ready(function(){


/* slider image hover effect */	
$('#tabsmall li img').animate({opacity: 0.3}, "slow");
	$('#tabsmall li img').hover(function() {
		$(this).animate({opacity: 1}, "slow");
		}, function() {
	$(this).animate({opacity: 0.3}, "slow");
});


/* line posts hover */
$('ul.bigtips li,ul.smalltips li').hover(function() {
	$(this).find('img')
		.animate({
			opacity: '0.2', 	
		}, 400); 
	$(this).find('p')
		.animate({
			opacity: '1', 	
		}, 600); 

	} , function() {
	$(this).find('img')
		.animate({
 			opacity: '1',  
		}, 800);
	$(this).find('p')
		.animate({
			opacity: '0', 	
		}, 600); 
});


$('.mosaicitem1,.mosaicitem2,.mosaicitem3,.mosaicitem4,.mosaicitem5,.mosaicitem6,.mosaicitem7,.mosaicitem8,.mosaicitem9,.mosaicitem10,.mosaicitem11,.mosaicitem12,.mosaicitem13,.mosaicitem14,.mosaicitem15,.mosaicitem16,.mosaicitem17,.mosaicitem18,.mosaicitem19,.mosaicitem20,.mosaicitem21,.mosaicitem41,.mosaicitem42,.mosaicitem43,.mosaicitem44,.mosaicitem45,.mosaicitem46,.mosaicitem47,.mosaicitem48,.mosaicitembottom41,.mosaicitembottom42,.mosaicitembottom43,.mosaicitembottom44').hoverIntent(function() {
	$(this).css({});
	$(this).find('.folioinfo')
		.animate({
			opacity: '1',	
		}, 400); 
	$(this).find('img')
		.animate({
			opacity: '0.1', 	
		}, 400); 

	} , function() {
	$(this).css({}); 
	$(this).find('.folioinfo')
		.animate({
			opacity: '0',
		}, 800);
	$(this).find('img')
		.animate({
			opacity: '1', 	
		}, 400); 
	
});

$('.mosaicitem1,.mosaicitem2,.mosaicitem3,.mosaicitem4,.mosaicitem5,.mosaicitem6,.mosaicitem7,.mosaicitem8,.mosaicitem9,.mosaicitem10,.mosaicitem11,.mosaicitem12,.mosaicitem13,.mosaicitem14,.mosaicitem15,.mosaicitem16,.mosaicitem17,.mosaicitem18,.mosaicitem19,.mosaicitem20,.mosaicitem21,.mosaicitem41,.mosaicitem42,.mosaicitem43,.mosaicitem44,.mosaicitem45,.mosaicitem46,.mosaicitem47,.mosaicitem48,.mosaicitembottom41,.mosaicitembottom42,.mosaicitembottom43,.mosaicitembottom44').hoverIntent(function() {
	$(this).css({});
	$(this).find('.inpost')
		.animate({
			opacity: '1',	
		}, 400); 
	$(this).find('img')
		.animate({
			opacity: '0.1', 	
		}, 400); 

	} , function() {
	$(this).css({}); 
	$(this).find('.inpost')
		.animate({
			opacity: '0',
		}, 800);
	$(this).find('img')
		.animate({
			opacity: '1', 	
		}, 400); 
	
});



/* end line posts hover */

$('.item_full img,.item_full2 img').hover(function() {
	$(this).animate({opacity: 0.1}, "normal");
	}, function() {
	$(this).animate({opacity: 1}, "normal");
	}); 


$('.item_plain').hoverIntent(function() {
	$(this).css({});
	$(this).find('.folioinfo')
		.animate({
			opacity: '1',	
		}, 400); 
	$(this).find('img')
		.animate({
			opacity: '0.6', 	
		}, 400); 

	} , function() {
	$(this).css({}); 
	$(this).find('.folioinfo')
		.animate({
			opacity: '0',
		}, 800);
	$(this).find('img')
		.animate({
			opacity: '1', 	
		}, 400); 
});


/*slider headings hover */

$('.panel').hoverIntent(function() {
	$(this).css({}); /*Add a higher z-index value so this image stays on top*/ 
	$(this).find('.thumb-title')
		.animate({
			top: '50px', 	
		}, 500); 

	} , function() {
	$(this).css({}); /* Set z-index back to 0 */
	$(this).find('.thumb-title')
		.animate({
			top: '-105px', 

		}, 800);


});



	/* Tooltips */
		$("body").prepend('<div class="tooltip body2"><p></p></div>');
		var tt = $("div.tooltip");
		
		$(".flickr_badge_image a img,ul.social-menu li a").hover(function() {								
			var btn = $(this);
			
			//tt.children("p").text(btn.attr("title"));								
						
			var t = Math.floor(tt.outerWidth(true)/2),
				b = Math.floor(btn.outerWidth(true)/2),							
				y = btn.offset().top - 30,
				x = btn.offset().left - (t-b);
						
			//tt.css({"top" : y+"px", "left" : x+"px", "display" : "block"});			
			   
		}, function() {		
			tt.hide();			
		});


	/* Resize too large images */
	var size = 627;
	var image = jQuery('.entry img');
	
	for (i=0; i<image.length; i++) {
		var bigWidth = image[i].width;
		var bigHeight = image[i].height;
	
		if (bigWidth > size) {	
			var newHeight = bigHeight*size/bigWidth;
			image[i].width = size;
			image[i].height = newHeight;
		}
	}


	jQuery("#content a:has(img)").css({'padding': '0', 'background': 'none'});
	jQuery("#s:visible").focus();
	if (jQuery("#archives").is(':visible')) {
		jQuery("#toggleArchives").html("&uarr; More &uarr;");
	}

});


function toggleArchives() {
	if (jQuery("#archives").is(':visible')) {
		jQuery("#archives").slideUp(1000) ;
		jQuery("#toggleArchives").html("&darr; More &darr;");
	}
	else {
		jQuery("#toggleArchives").html("&uarr; Less &uarr;");
		jQuery("#archives").slideDown(900,function() {
			jQuery("#s").focus();
		});
	}
}