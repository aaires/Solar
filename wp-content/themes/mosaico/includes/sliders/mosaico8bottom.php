<div id="mosaic" style="height:129px; overflow:hidden">
    
    
<?php 

	$m1 = get_option('themnific_mosaicitem9'); 
	
	$my_query = new WP_Query('&cat='.$m1.'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
	
	
    <div class="mosaicitembottom41">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
        </a>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #1 -->




<?php 
	$m2 = get_option('themnific_mosaicitem9');
	$my_query = new WP_Query('&cat='. $m2 .'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitembottom42" id="newsletter">
        <div class="inpost2">
            <div class="newsletter">
                <?php _e('Newsletter','solar'); ?>
                <form action="">
                <input type="text" id="name" value="<?php _e('Nome','solar'); ?>" onfocus="this.value=''" />
                <input type="text" id="e-mail" value= "<?php _e('e-mail','solar'); ?>" onfocus="this.value=''" />
                <input class="submit" type="submit" value="<?php _e('Subscrever','solar'); ?>">
                </form>
            </div>
        </div>                
    </div>
<?php endwhile;?>
<!-- end mosaic #2 -->



<?php $m3 = get_option('themnific_mosaicitem9');
	$my_query = new WP_Query('&cat='. $m3 .'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitembottom43">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=129" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 13); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #3 -->



<?php $m4 = get_option('themnific_mosaicitem9');
		$my_query = new WP_Query('&cat='. $m4 .'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem44">
        
        
        <div class="inpost2">
            <h2 class="mosaic-small "><a href="<?php the_permalink() ?>"><?php _e('Reserva','solar'); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #4 -->






</div>
<div style="clear: both;"></div>