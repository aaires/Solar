<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div id="core" class="container raster">

	<div class="row">
        <div class="eightcol first">

          <ul class="medpost">
          
                	<?php
						$temp = $wp_query;
						$limit = get_option('posts_per_page');
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$wp_query= null;
						$wp_query = new WP_Query();
						$wp_query->query('showposts=' . $limit . '&paged=' . $paged);
						$wp_query->is_home = false;
					?>
					<?php if (have_posts()) : ?>
                                        
                    <?php while (have_posts()) : the_post(); ?>
            
                  		<li><?php get_template_part('/includes/post-types/medpost');?></li>
                            
					<?php endwhile; ?><!-- end post -->
                    
           	</ul><!-- end latest posts section-->
            
            <div style="clear: both;"></div>

					<div class="pagination"><?php pagination('«', '»'); ?></div>

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