<h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta">
    	<?php 
    	
    	$time = get_the_time('j-m-y');
    	
    	_e($time); ?> &bull; 
		<?php the_author() ?> &bull; 
        <?php the_category(', ') ?> &bull; 
        <?php comments_popup_link(__('No Comments','solar'), __('1 Comment','solar'), __('% Comments','solar')); ?> &bull; 
        <a href="<?php the_permalink(); ?>"><?php _e('Read More','themnific');?> &#187;</a>
    </div>  
    <?php $video_input = get_post_meta($post->ID, 'dbt_video', true);?>
	<?php if($video_input) {?>
    <?php echo ($video_input); 
    } else {?>

    <a href="<?php the_permalink(); ?>">
    <?php if ( $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail')){ ?>
    <img class="bags" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/></a>
    <?php }?>
    <?php }?>    
		<?php 
		
			the_excerpt();
		
//		wpe_excerpt('wpe_excerptlength_teaser', 'wpe_excerptmore'); ?>

		