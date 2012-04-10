<li id="post-<?php the_ID(); ?>" class="threecol item_blog">
    
    <h3 class="leading"><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 7); ?></a></h3>
    
    <p class="meta"><?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?></p>
	
	<p><?php echo pov_excerpt( get_the_excerpt(), '200'); ?></p>

        
</li><!-- #post-<?php the_ID(); ?> -->



	