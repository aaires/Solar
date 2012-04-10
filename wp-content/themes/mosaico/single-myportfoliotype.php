<?php get_header(); ?>
<div id="core" class="container">
	<div class="row">
		<div class="entry twelvecol">
    	<h2 class="textcenter"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			<?php the_post(); ?>
		       <?php
				$file = get_post_meta($post->ID, 'pov_file', true);
				$title = get_post_meta($post->ID, 'pov_title', true);
				$url = get_post_meta($post->ID, 'pov_url', true);
				$size = get_post_meta($post->ID, 'pov_size', true);
		      ?>
			<?php the_content(); ?>
       	</div>
	</div>
   	<div style="clear: both;"></div>
</div><!--end #core--><!-- end of fullcontent -->
<?php get_footer(); ?>