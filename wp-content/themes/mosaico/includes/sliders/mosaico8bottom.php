<div id="mosaic" style="height:129px; overflow:hidden">
    
    
<?php 

	$m1 = get_option('themnific_mosaicitem9'); 
	$my_query = new WP_Query('&category_name='.$m1.'&showposts=1');	

	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
	
	 <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
    <div class="mosaicitembottom41" style="background-image:url(<?php echo $image[0]; ?>);">
        <a href="<?php the_permalink(); ?>">
       
        <?php $image_url =  get_post_meta($post->ID, 'special-offer',true); ?>
    	<!-- visible image on load -->	
         <img class="meta-image" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image_url;?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
   	
   		<!-- visible image on hover -->
   	    <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
   	    </a>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #1 -->



	
    <div class="mosaicitembottom42  idnewsletter newslayout" id="newsletter" >
        <div class="inpost2">
            <div class="newsletter">
            <?php _e('Newsletter','solar'); ?>
            
            
            <form action="http://wordpress.us5.list-manage1.com/subscribe/post?u=c4a298ac48b121d8405b851ff&amp;id=f3dc3eee92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
			
				<input type="text" name="MERGE1" id="MERGE1" value="" placeholder="<?php _e('name','solar');?>" >
			
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php _e('email address','solar');?>" required>
				<div class="clear"><input type="submit" value="<?php _e('Subscribe','solar'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button submit"></div>
			</form>
           
            </div>  
        </div>              
    </div>

<!-- end mosaic #2 -->



<?php $m3 = get_option('themnific_mosaicitem10');
	$my_query = new WP_Query('&category_name='. $m3 .'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
	
	<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
	
    <div class="mosaicitembottom43" style="background-image:url(<?php echo $image[0]; ?>);">
        <a href="<?php the_permalink(); ?>">
         <?php $image_url =  get_post_meta($post->ID, 'new-offer',true); ?>
    	<!-- visible image on load -->	
		<img class="meta-image" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image_url ?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
   	
   		<!-- visible image on hover -->
   	    <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 13); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #3 -->


    <div class="mosaicitem44" id="reserva">
        <div class="inpost2">
            <form action="">
            <div class="reserva"><?php _e('Reserve já','solar'); ?>
                <input class="search" type="submit" value="<?php _e('Procurar','solar'); ?>">
            </div>
            </form>
        </div>
    </div>

<!-- end mosaic #4 -->






</div>
<div style="clear: both;"></div>