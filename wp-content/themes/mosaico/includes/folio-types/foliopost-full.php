<?php
$file = get_post_meta($post->ID, 'pov_file', true);
$title = get_post_meta($post->ID, 'pov_title', true);
$url = get_post_meta($post->ID, 'pov_url', true);
$size = get_post_meta($post->ID, 'pov_size', true);
$project_url = get_post_meta($post->ID, 'pov_project_url', true);
?>
<li id="post-<?php the_ID(); ?>" class="threecol item_full">
    <a href="<?php echo $url; ?>" rel="lightbox[set1 <?php echo $size; ?>]" title="<?php echo $title; ?>">
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=400&amp;h=200" alt="<?php the_title(); ?>"/></a>    
            <div class="clear"></div>
    			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                <?php
				echo '<div class="taggs">';
				$terms_of_post = get_the_term_list( $post->ID, 'specifics', '',' &bull; ', ' ', '' );
				echo $terms_of_post;
				echo '</div>';
				?>
            	<p><?php echo pov_excerpt( get_the_excerpt(), '130'); ?></p>
                
				<?php if($project_url) : ?>
				<a class="tmnf-sc-button  silver small" href="<?php echo $project_url; ?>"><?php _e('Visit Project','themnific');?> 	&#43;</a>
				<?php endif; ?>
        
</li><!-- #post-<?php the_ID(); ?> -->



	