<div id="mosaic" style="height:480px; overflow:hidden">

<?php 
	// Get all children
	global $post;
	
	$my_query = new WP_Query('post_type=page&post_parent='.$post->ID.'&showposts=8'.'&order=ASC'.'&orderby=menu_order');
	$i = 1;
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; 
	
		
		?>
		<div class="mosaicitem4<?php echo $i; ?>">
		<a href="<?php the_permalink(); ?>">
		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square_eight'); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=240&amp;h=240" alt="<?php the_title(); ?>"/>
		</a>
		
		<div class="inpost">
		<h2 class="mosaic-small"><a href="<?php the_permalink() ?>"><?php echo short_title('...', 5); ?></a></h2>
		<p><?php echo pov_excerpt( get_the_excerpt(), '150'); ?></p>
		</div>
		
		</div>
	<?php 
	
		$i++;
		
	endwhile;
?>

</div>
<div style="clear: both;"></div>