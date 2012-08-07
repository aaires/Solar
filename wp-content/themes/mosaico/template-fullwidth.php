<?php
/*
Template-Name: Full Width
TODO: Disable
*/
?>
<?php get_header(); ?>
<div id="core" class="container raster">
	<div class="row">
		<div class="post twelvecol">
        		<h2 class="textcenter"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                 <div class="entry">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
    						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    						
				<?php endwhile; endif; ?>
                </div>
       	</div>
	</div>
   	<div style="clear: both;"></div>
</div><!--end #core-->

<?php get_footer(); ?>