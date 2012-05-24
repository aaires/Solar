<?php
/*
Template Name: Experience
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row" id="room">
    
    
    <div class="otherpagesexperience twelvecol">
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
	</div>
    
    
    
        <div class="sixcol first" id="roomimg">

<?php the_post_thumbnail('full'); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;"></div>

        </div><!-- end #core .eightcol-->

    
    
        <div class="sixcol last" id="relatedpost">
            <div class="roomcontent">

                <h2 class="leading"> <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="entry" id="postexperience">
                 <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                </div>
            </div>
             
                <div style="clear: both;"></div>
                
                
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
                

                <div class="relatedpost">
                    <div class="relatedheader"><?php _e('Other activities you may like:','solar'); ?></div>
                    <div class="relatedtopics">
                    <div class="relatedtopic1"> 
                        <a href="<?php echo get_permalink($related1->ID);?>" class="relatedimg1"><?php echo get_the_post_thumbnail( $related1->ID, array(117,117), $attr ); ?></a>
                        <div class="relatedtitle1"> 
                        <p><a href="<?php echo get_permalink($related1->ID);?>"><?php  echo get_the_title($related1->ID); ?></a></p></div>
                     </div>
                    <div class="relatedtopic2"> 
                        <a href="<?php echo get_permalink($related2->ID);?>" class="relatedimg2"><?php echo get_the_post_thumbnail( $related2->ID, array(117,117), $attr ); ?></a>
                        <div class="relatedtitle2">
                        <p><a href="<?php echo get_permalink($related2->ID);?>"><?php echo get_the_title($related2->ID); ?></a></p></div>
                    </div>
                </div>

                </div>
             </div>
        </div>



</div><!--end #core .row-->

    
   <div style="clear: both;"></div> 
</div><!--end #core-->
<div class="row">
<?php get_template_part('/includes/sliders/mosaico8bottom' );; ?> 
</div>
<?php get_footer(); ?>