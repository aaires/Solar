<div id="mosaic" style="height:480px; overflow:hidden">


   
    
    
    
    
<?php 

	$m1 = get_option('themnific_mosaicitem1'); 
	
	$my_query = new WP_Query('&pagename='.$m1.'&showposts=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
	
	
    <div class="mosaicitem41">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #1 -->




<?php 
	$m2 = get_option('themnific_mosaicitem2');
	$my_query = new WP_Query('pagename='. $m2 .'&showposts=1&offset=1');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem42">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #2 -->



<?php $m3 = get_option('themnific_mosaicitem3');
	$my_query = new WP_Query('pagename='. $m3 .'&showposts=1&offset=2');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem43">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 13); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #3 -->



<?php $m4 = get_option('themnific_mosaicitem4');
		$my_query = new WP_Query('pagename='. $m4 .'&showposts=1&offset=3');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem44">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #4 -->



<?php $m5 = get_option('themnific_mosaicitem5');

	$my_query = new WP_Query('pagename='. $m5 .'&showposts=1&offset=4');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem45">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #5 -->



<?php $m6 = get_option('themnific_mosaicitem6');
	$my_query = new WP_Query('pagename='. $m6 .'&showposts=1&offset=5');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem46">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #6 -->



<?php $m7 = get_option('themnific_mosaicitem7');
	$my_query = new WP_Query('pagename='. $m7 .'&showposts=1&offset=6');	 
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem47">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 15); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #7 -->



<?php $m8 = get_option('themnific_mosaicitem8');
$my_query = new WP_Query('pagename='. $m8 .'&showposts=1&offset=7');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem48">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #8 -->








</div>
<div style="clear: both;"></div>