<?php
/*
Template Name: Room-Region
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row">

    <div class="twelvecol navigation">
    <?php 
    
    $post_parent = $post->post_parent;

    // Only shows related posts (same parent)
    $previous = get_previous_post();
    
    if($previous)
   {
   	error_log('previous order '.$previous->menu_order);
   	
    	$previous_link =  get_permalink($previous->ID);
      ?><a href="<?php echo $previous_link?>"> <div class="previous  first"></div></a>  <?php 
   }
    
    $next = get_next_post();  
    
  	if($next)
    {
    	
    	
    	error_log('next order '.$next->menu_order);
    	
      $next_link =  get_permalink($next->ID);
      ?><a href="<?php echo $next_link;?>"><div class="next  last"></div> </a><?php
    }
    ?>
    </div> <!-- #navigation -->
</div>


<div class="row">    
<!-- 	<div class="sixcol first" id="roomimg">  -->
    <div class="sixcolwide first">
	
	 <div id="single-frame" >
		<div id="slider2" class="nivoSlider">
		<a href="" title="" class="sixcolwide">
			<?php 
			$attachments = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
			$tid =  get_post_thumbnail_id();
			
			
			the_post_thumbnail('full'); 
			
			?>	
		</a>
			
		<?php foreach ($attachments as $attid=> $image)
			{
				if($tid == $attid)
					continue;// do nothing we already have this
			?>
					<img width="" height="" src="<?php echo $image->guid?>" class="attachment-full wp-post-image" alt="<?php echo $image->post_title;?>" title="<?php echo $image->post_title;?>">
				<?php 
			}?>
			</div><!-- /#slider -->
	</div> <!-- #single-frame -->
	
	<script type="text/javascript">
		jQuery(document).ready(function() { console.log(jQuery('#slider'));
		jQuery('#slider2').nivoSlider({
			effect:'fade', //Specify sets like: 'fold,fade,sliceDown,sliceUpDown'
			animSpeed:500,
			pauseTime:3000,
			startSlide:0, //Set starting Slide (0 index)
			directionNav:false, //Next & Prev
			directionNavHide:false, //Only show on hover
			controlNav:false, //1,2,3...
			controlNavThumbs:false, //Use thumbnails for Control Nav
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
	
	 </div><!-- end sixcol first-->
	
	   <div class="sixcolwide last" id="roompost">
         
         
	 <div class="roomcontent">
	   
         

               <h2 class="leading"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry" id="postroom">
                 <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
               
              </div> <!-- #postroom -->
          </div> <!-- .roomcontent -->
             
  </div> <!-- .sixcol last -->	


	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

       <div style="clear: both;"></div>
  
  </div> <!-- #row -->



</div><!--end #core-->

   
  <div style="clear: both;"></div> 
  
<div class="row container">
	<?php get_template_part('/includes/sliders/mosaico8bottom' ); ?> 
</div>

<?php get_footer(); ?>