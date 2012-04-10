<?php get_header(); ?>
<div id="core" class="container">

	<div class="row">
    
	<?php if (have_posts()) : ?>
    
		<?php $post = $posts[0]; ?>
        
			<?php if (is_category()) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Archive for the','themnific');?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','themnific');?></span></h4>
            
            <?php } elseif( is_tag() ) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Posts Tagged','themnific');?> &#8216;<?php single_tag_title(); ?>&#8217;</span></h4>
            
            <?php } elseif (is_day()) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Archive for','themnific');?> <?php the_time('F jS, Y'); ?></span></h4>
            
            <?php } elseif (is_month()) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Archive for','themnific');?> <?php the_time('F, Y'); ?></span></h4>
            
            <?php } elseif (is_year()) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Archive for','themnific');?> <?php the_time('Y'); ?></span></h4>
            
            <?php } elseif (is_author()) { ?>
            
            <h4 class="textcenter"<span class="heading-text">><?php _e('Author Archive','themnific');?></span></h4>
            
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            
            <h4 class="textcenter"><span class="heading-text"><?php _e('Blog Archives','themnific');?></span></h4>
            
            <?php } ?>
    
        <div class="eightcol first">

      		<ul class="medpost">
          
    			<?php while (have_posts()) : the_post(); ?>
                                              		
            		<li><?php get_template_part('/includes/post-types/medpost');?></li>
                    
   				<?php endwhile; ?>   <!-- end post -->
                    
     		</ul><!-- end latest posts section-->
            
            <div style="clear: both;"></div>

					<ul class="navigation">
            
                        <li class="fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Items' ) ); ?></li>
                        <li class="fr"><?php previous_posts_link( __( 'Newer Items <span class="meta-nav">&rarr;</span>' ) ); ?></li>
			
            		</ul><!-- end navigation -->

					<?php else : ?>
			

                        <h1>Sorry, no posts matched your criteria.</h1>
                        <?php get_search_form(); ?><br/>
					<?php endif; ?>

        </div><!-- end #core .eightcol-->

    
    
        <div class="fourcol">
        
        	<?php get_sidebar(); ?>
        
        </div>
        
	</div><!--end #core .row-->
    
   <div style="clear: both;"></div>
   
</div><!--end #core-->

<?php get_footer(); ?>