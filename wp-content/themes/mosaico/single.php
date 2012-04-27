<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    

	

<div id="core" class="container raster">
	<div class="row" id="intblog">
    
        <div class="eightcol first">
            <div id="post">
        		<h2 class="leading"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div <?php post_class(); ?>>
                <div class="meta">
                        <?php the_time('M j, y') ?> &bull; 
                        <?php the_category(', ') ?> &bull; 
                        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                </div> 
                <?php $video_input = get_post_meta($post->ID, 'dbt_video', true);?>
				<?php  echo ($video_input); ?>	
                
                 <div class="entry">
                 <?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                 <?php comments_template(); ?>
                </div>
            </div>



	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;">
                    </div>
                </div>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="fourcol last" id="featured">
        
        		<?php get_sidebar(); ?>
        
        </div>
	</div><!--end #core .row-->

    
   <div style="clear: both;"></div>
</div><!--end #core-->


<?php get_footer(); ?>