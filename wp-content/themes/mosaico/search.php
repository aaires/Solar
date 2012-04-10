<?php get_header(); ?>
<div id="core" class="container">

	<div class="row">

			<h4 class="textcenter"><span class="heading-text"><?php _e('Search Results for','themnific');?> "<?php echo $s; ?>"</span></h4>

		<?php if (have_posts()) : ?>
	
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
                    
        				<div class="eightcol first">

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