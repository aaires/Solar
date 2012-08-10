<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
		
<div id="core">
<div id="galeria" class="row">
    
        <div class="twelvecol sliderpage">
        <div id="slider-frame">
		<div id="slider" class="nivoSlider">
			<?php //BEGIN Slider LOOP
			$loop = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => '10' ) );
			while ( $loop->have_posts() ) : $loop->the_post();
			
			
				$buttontext = get_post_meta($post->ID, "text", true);
				$buttonlink = get_post_meta($post->ID, "link", true);
				if(has_post_thumbnail()) {
				$thumb = get_post_thumbnail_id();
				$image = vt_resize( $thumb, '', 960, 495, true );
				}
				
			
			
			?>
			<a href="<?php echo $buttonlink; ?>" title="<?php the_title(); ?>"><img alt="<?php the_title(); ?>" title="<?php echo $buttontext; ?>" src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" /></a>
			
			
			
			
			<?php endwhile; //END SLIDER LOOP ?>

			
			
			</div><!-- /#slider -->
			<div class="clear"></div>
	</div> <!-- /#slider-frame -->

		<script type="text/javascript">


		jQuery(document).ready(function() { console.log(jQuery('#slider'));
		jQuery('#slider').nivoSlider({
			effect:'fade', //Specify sets like: 'fold,fade,sliceDown,sliceUpDown'
			animSpeed:500,
			pauseTime:6000,
			startSlide:0, //Set starting Slide (0 index)
			directionNav:true, //Next & Prev
			directionNavHide:false, //Only show on hover
			controlNav:true, //1,2,3...
			controlNavThumbs:true, //Use thumbnails for Control Nav
	      	controlNavThumbsFromRel:false, //Use image rel for thumbs
			controlNavThumbsSearch: 'check.jpg', //Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
			keyboardNav:false, //Use left & right arrows
			pauseOnHover:true, //Stop animation while hovering
			manualAdvance:false, //Force manual transitions
			captionOpacity:0.8, //Universal caption opacity
			
			beforeChange: function(){},
			afterChange: function(){},
			slideshowEnd: function(){} //Triggers after all slides have been shown
		});
		});
		</script>
		
        
        
        </div> <!-- twelvecolumn -->
              

        </div> <!-- #row -->





</div> <!-- #core -->

    
   <div style="clear: both;"></div> 


<?php get_footer(); ?>