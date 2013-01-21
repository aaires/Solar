<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
		
		
<div id="core">
<div id="galeria" class="row">
    
        <div class="twelvecol sliderpage">
	
	<div id="mySlider" class="evoslider default">    
    <dl>
    
    <?php 
   		$loop = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => '-1' ) );
    	while ( $loop->have_posts() ) : $loop->the_post();
    		$buttontext = get_post_meta($post->ID, "text", true);
   			$buttonlink = get_post_meta($post->ID, "link", true);
    		if(has_post_thumbnail()) {
    			$thumb = get_post_thumbnail_id();
   	 			$image = vt_resize( $thumb, '', 960, 495, true );
    			$image_thumb = vt_resize( $thumb, '', 92, 47, true );
    		}
    
    
    ?>
 		     <dt>Post <?php echo the_ID();?></dt>
        	<dd data-src="<?php echo $image[url];?>" data-thumb="<?php echo $image[url];?>">
        	</dd>
	    
	<?php endwhile; //END SLIDER LOOP ?>
    
    </dl>
	</div>
	
	
	
	
	
	<script type="text/javascript">
            
    var myPlugin = $("#mySlider").evoSlider({
        mode: "slider",                     // Sets slider mode ("accordion", "slider", or "scroller")
        width: 1000,                         // The width of slider
        height: 495,                       // The height of slider
                
        slideSpace: 5,                      // The space between slides
        paddingRight: 0,                    // Padding right of the container/frame
        titleClockWiseRotation: false,      // Rotates title bar by clock wise
        hideCurrentTitle: false,            // Hides active title bar
        startIndex: 0,                      // Start index when initialized
        showIndex: true,                    // Displays index in toggle icon and bullets control
    
        mouse: true,                        // Enables mousewheel scroll navigation
        keyboard: true,                     // Enables keyboard navigation (left and right arrows)
                
        speed: 500,                         // Slide transition speed in ms. (1s = 1000ms)
        easing: "swing",                    // Defines the easing effect mode
        loop: true,                         // Rotate slideshow
        lazyLoad: false,                    // Enables lazy load feature
    
        autoplay: true,                     // Sets EvoSlider to play slideshow when initialized
        interval: 5000,                     // Slideshow interval time in ms
        pauseOnHover: true,                 // Pause slideshow if mouse over the slide
        pauseOnClick: true,                 // Stop slideshow if playing
        showPlayButton: true,               // Shows play/pause button when initialized
        playButtonAutoHide: false,          // Shows play/pause button on hover and hide it when mouseout
    
        toggleIcon: true,                   // Enables toggle icon
            
        directionNav: true,                 // Shows directional navigation when initialized
        directionNavAutoHide: false,        // Shows directional navigation on hover and hide it when mouseout
        showDirectionText: false,           // Shows text on direction navigation
        nextText: "",                   // Next button text
        prevText: "",                   // Prev button text
    
        controlNav: true,                   // Enables control navigation
        controlNavMode: "thumbnails",          // Sets control navigation mode ("bullets", "thumbnails", or "rotator")
        controlNavVertical: false,          // Defines control navigation to display vertically
        controlNavPosition: "outside",       // Sets control navigation position ("inside" or "outside")
        controlNavVerticalAlign: "right",   // Sets position of the vertical control navigation ("left" or "right")
        controlSpace: 0,                    // The space between outside control navigation with slides 
        controlNavAutoHide: false,          // Shows control navigation on mouseover and hide it when mouseout
    
        showRotatorTitles: true,            // Shows rotator titles
        showRotatorThumbs: true,            // Shows rotator thumbnails
        rotatorThumbsAlign: "left",         // Thumbnails float position
    
        classBtnNext: "nivo-nextNav",           // The CSS class used for the next button
        classBtnPrev: "nivo-prevNav",           // The CSS class used for the previous button
        classExtLink: "evo_link",           // The CSS class used for the external links
        permalink: false,                   // Enable or disable linking to slides via the url
    
        autoHideText: false,                // Shows overlay text on mouseover and hide it on mouseout    
        outerText: false,                   // Enables outer text
        outerTextPosition: "right",         // Outer text align ("left" or "right")
        outerTextSpace: 5,                  // Space between text and slide
    
        linkTarget: "_blank",               // The target attribute of the image link ("_blank", "_parent", "_self", or "_top")
        imageScale: "none",             // Sets image scale option ("fullSize", "fitImage", "fitWidth", "fitHeight", "none")
        
        before: function(){},               // Callback, triggers before slide transition
        after: function(){},                // Callback, triggers after slide transition             
        
        youtube: {                          // Customize the YouTube player parameters
            autoplay: 0,
            showinfo: 1,
            autohide: 2
        },
    
        vimeo: {                            // Customize the Vimeo player parameters
            title: 1,
            byline: 1,
            portrait: 1,
            autoplay: 0
        },
    
        dailymotion: {                      // Customize the Dailymotion player parameters 
            autoplay: 0,
            logo: 0,
            foreground: "%23F7FFFD",
            background: "%23FFC300",
            highlight: "%23171D1B",
            info: 1
        }       
    });                                
    
</script>
		
		
        

        
        </div> <!-- twelvecolumn -->
              

        </div> <!-- #row -->


</div> <!-- #core -->

    
   <div style="clear: both;"></div> 


<?php get_footer(); ?>