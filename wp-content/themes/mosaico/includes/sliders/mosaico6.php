<div id="mosaicclear" style="overflow:hidden">
<div id="mosaic" style="margin-top:-120px;height:480px; overflow:hidden">


    <div class="mosaicintro body2">
   
    <?php $loop = new WP_Query( array( 'post_type' => 'announcement', 'posts_per_page'=> '1' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php $tmnf_announcement_data = get_post_meta($post->ID, 'tmnf_announcement_link', true);?>
    
        <div class="announcement">
                
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'announcement-thumb' ); } ?>
        
				<?php if (get_post_meta($post->ID, 'tmnf_announcement_link', true)) { ?>
                
                	<h2><a href="<?php echo $tmnf_announcement_data; ?>"><?php the_title(  ); ?></a></h2>
                    
  				<?php } else { ?>
                
					<h2><?php the_title(  ); ?></h2>
                    
				<?php } ?> 
                   
            		<?php the_excerpt(); ?>
                    
        </div>    
        
    <?php endwhile; ?>
    
    </div>
    
    
    



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem3" style="top:120px; height:120px;">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=200" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '35'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #3 -->




<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=1');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem6">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=150&amp;h=150" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #6 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=2');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem7">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '100'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #7 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=3');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem8">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=120&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 7); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '45'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #8 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=4');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem9" style="height:240px">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '130'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #9 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=5');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem10">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=200" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 7); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '35'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #10 -->






</div></div>
<div style="clear: both;"></div>