<?php
/*
Template Name: Experience
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row" id="room">
    
    
    <div class="navigation twelvecol">
		<?php 
		
		$post_parent = $post->post_parent;
		
		// Only shows related posts (same parent)
		$previous = get_previous_post();
		if($previous->post_parent == $post_parent && $post_parent!=0)
		{	$previous_link = 	get_permalink($previous->ID);
			?><a href="<?php echo $previous_link?>"> <div class="previous  first"></div></a>  <?php 
		}
		
		
		$next = get_next_post();	
		if($next->post_parent == $post_parent && $post_parent!=0)
		{
			$next_link = 	get_permalink($next->ID);
			?><a href="<?php echo $next_link;?>"><div class="next  last"></div> </a><?php
		}
		?>
	</div> <!-- .navigation -->
</div><!-- .row -->    
    
<div class="row">     
	<div class="sixcolwide first" >

		<div id="single-frame" >
				<div id="slider3" class="nivoSlider">
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
				jQuery('#slider3').nivoSlider({
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
	</div> <!-- .sixcol -->

    
<!-- 	<div class="sixcolwide last" id="relatedpost"> -->
	<div id="extendrelated" class="sixcolwide last">
         <div class="roomcontent">

                <h2 class="leading"> <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="entry barra" id="postexperience">
                 <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                </div> <!-- #postexperience -->
        
             
           
                
                
          <?php 
			$my_query = new WP_Query('&post_parent='.$post_parent.'&post_type=page&post_status=publish&showposts=-1');
			if($my_query->have_posts())
			{		
				$related = $my_query->get_posts();
				$rand1 = rand(0,7);
				$rand2 = rand(0,7);
				$related1 = $related[$rand1];
				$related2 = $related[$rand2]; 
					
				if($related1->ID == $post->ID)
				{
					$rand1 = $rand1+1;
					if($rand1==7)
						$rand1 = 0;
						$related1 =  $related[$rand1];
				}
				
				if($related2->ID == $post->ID || $related1->ID == $related2->ID)
				{
					$rand2 = $rand2+1;
					if($rand2==7)
						$rand2 = 0;
					$related2 =  $related[$rand2+1];
					if($related2->ID == $post->ID)
						$related2 =  $related[$rand2+1];
				}
			}
		
			?>
                

         	<div class="related">
              <div class="relatedheader"><?php _e('Other activities you may like:','solar'); ?></div>
             
                    <div class="relatedtopic1"> 
                        <a href="<?php echo get_permalink($related1->ID);?>" class="relatedimg1"><?php echo get_the_post_thumbnail( $related1->ID, array(117,117), $attr ); ?></a>
                        <div class="relatedtitle1"> 
                        <p><a href="<?php echo get_permalink($related1->ID);?>"><?php  echo get_the_title($related1->ID); ?></a></p></div>
                     </div><!-- .relatedtitle1 -->
                    <div class="relatedtopic2"> 
                        <a href="<?php echo get_permalink($related2->ID);?>" class="relatedimg2"><?php echo get_the_post_thumbnail( $related2->ID, array(117,117), $attr ); ?></a>
                        <div class="relatedtitle2">
                        <p><a href="<?php echo get_permalink($related2->ID);?>"><?php echo get_the_title($related2->ID); ?></a></p></div>
                    </div><!-- relatedtopic2 -->
              

        
            
            
              </div> <!-- roomcontent -->
            
       </div> <!-- .sixcol last -->
       
       
       	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

		<?php endif; ?>

     <div style="clear: both;"></div>
       
       
  </div> <!-- sixcolwide -->



</div><!--end row -->
</div><!-- #core	 -->
    
<div style="clear: both;"></div> 
<?php get_footer(); ?>