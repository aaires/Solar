<div id="mosaic" class="" style="height:129px; overflow:hidden">
    
    
<?php 

	$m1 = get_option('themnific_mosaicitem9'); 
	$my_query = new WP_Query('&category_name='.$m1.'&showposts=1');	

	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
	
	 <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
    <div class="mosaicitem41" style="background-image:url(<?php echo $image[0]; ?>);">
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



	
    <div class="mosaicitem42  idnewsletter newslayout" id="newsletter" >
        <div class="inpost2">
            <div class="newsletter">
            <?php _e('Newsletter','solar'); ?>
            
            
            <form action="http://wordpress.us5.list-manage1.com/subscribe/post?u=c4a298ac48b121d8405b851ff&amp;id=f3dc3eee92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
			
				<input type="text" name="MERGE1" id="MERGE1" value="" placeholder="<?php _e('Name','solar');?>" >
			
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php _e('e-mail','solar');?>" required>
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
	
    <div class="mosaicitem43" style="background-image:url(<?php echo $image[0]; ?>);">
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
            <form action="https://www.thebookingbutton.co.uk/properties/SOLARDIRECT" method="get">
            <div class="reserva"><div class="booktitle"><?php _e('Book now','solar'); ?></div>
            	<div id="checkin" class="bookoption left"><label class="bookform bege">CHECK IN:</label>
            	<div class="box clear"><input class="bookform cinza" id="view_check_in_date" maxlength="10" name="view_check_in_date" type="text"></div></div>
            	
            	
            	<div class="bookoption left"><label class="bookform bege">ADULTS</label>
            	<div class="box clear"><select id="number_adults" name="number_adults" class="bookform cinza">
						<option value="0">0</option>
						<option value="1" selected="selected">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select></div></div>
                    <!-- <br/> -->            	
                <div class="bookoption left"><label class="bookform bege">CHILDREN</label>
            	<div class="box clear"><select id="number_children" name="number_children" class="bookform cinza">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select></div></div>
					<!-- <br/> -->
            	<div class="bookoption clear"><label id="checkout" class="bookform bege">CHECK OUT:</label>
            	<div class="box clear"><input class="bookform cinza" id="view_check_out_date" maxlength="10" name="view_check_out_date" type="text"></div></div>
            	<!-- <br/> -->
                <!--[if IE]>
                <style type="text/css">
                #number_adults, #number_children {
                padding: 2px 0px 3px 4px;
                }
                <![endif]-->
            	
                <input class="search" type="submit" value="<?php _e('Search','solar'); ?>">
            </div>
            </form>
        </div>
    </div>

<!-- end mosaic #4 -->






</div>
<div style="clear: both;"></div>