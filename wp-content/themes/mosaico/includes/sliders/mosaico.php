<div id="mosaic">


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
	
    <div class="mosaicitem1">
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
<!-- end mosaic #1 -->




<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=1');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem2">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=120&amp;h=130" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #2 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=2');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem3">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 13); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #3 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=3');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem4">
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
<!-- end mosaic #4 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=4');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem5">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=150&amp;h=150" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #5 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=5');	 
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
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=6');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem7">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 15); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #7 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=7');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem8">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=120&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '40'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #8 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=8');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem9">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=360" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '200'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #9 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=9');	 
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



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=10');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem11">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=130&amp;h=130" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #11 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=11');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem12">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=130&amp;h=130" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #12 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=12');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem13">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 10); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '200'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #13 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=13');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem14">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=130&amp;h=130" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #14 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=14');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem15">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=120&amp;h=240" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 7); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '55'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #15 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=15');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem16">
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
<!-- end mosaic #16 -->



<?php $featucat = get_option('themnific_slider1_category');
$my_query = new WP_Query('showposts=5&category_name='. $featucat .'&showposts=1&offset=16');	 
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
	
    <div class="mosaicitem17">
        <a href="<?php the_permalink(); ?>">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=360&amp;h=120" alt="<?php the_title(); ?>"/>
        </a>
        
        <div class="inpost">
            <h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 7); ?></a></h2>
            <p><?php echo pov_excerpt( get_the_excerpt(), '75'); ?></p>
        </div>
                    
    </div>
<?php endwhile;?>
<!-- end mosaic #17 -->







</div>
<div style="clear: both;"></div>