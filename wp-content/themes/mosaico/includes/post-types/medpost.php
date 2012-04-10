<h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta">
    	<?php the_time('M j, y') ?> &bull; 
		<?php the_author() ?> &bull; 
        <?php the_category(', ') ?> &bull; 
        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> &bull; 
        <a href="<?php the_permalink(); ?>"><?php _e('Read More','themnific');?> &#187;</a>
    </div>  
    <?php $video_input = get_post_meta($post->ID, 'dbt_video', true);?>
	<?php if($video_input) {?>
    <?php echo ($video_input); 
    } else {?>

    <a href="<?php the_permalink(); ?>">
    <?php if ( $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image')){ ?>
    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=220&amp;h=200" alt="<?php the_title(); ?>"/></a>
    <?php }?>
    <?php }?>    
		<?php wpe_excerpt('wpe_excerptlength_teaser', 'wpe_excerptmore'); ?>
