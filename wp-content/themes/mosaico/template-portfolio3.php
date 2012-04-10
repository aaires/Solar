<?php
/*
Template Name: Portfolio 3 Columns
*/
?>
<?php get_header(); ?>
<div id="core" class="container raster">
    	<div class="row">
        
    		<h2 class="textcenter"><?php the_title(); ?></h2>
            
            	<div id="portfolio-filter">
            
                    <ul>
                        <li><a class="current" href="<?php echo stripslashes(get_option('themnific_url_portfolio'));?>">
                        <?php _e('All','themnific');?></a></li>
                        <?php wp_list_categories('taxonomy=categories&orderby=ID&title_li='); ?> 
                  	</ul>
                    
            	</div>
                
    	<div style="clear: both;"></div>
		</div>


    <div style="clear: both;"></div>

    <?php echo stripslashes(get_option('themnific_portfolio_text'));?>
	<ul id="portfolio-list" class="centerrow">
		
        <?php query_posts( array( 'post_type' => 'myportfoliotype', 'paged' => $paged, 'posts_per_page' => 9));
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            
            <?php
            $file = get_post_meta($post->ID, 'pov_file', true);
            $title = get_post_meta($post->ID, 'pov_title', true);
            $url = get_post_meta($post->ID, 'pov_url', true);
            $size = get_post_meta($post->ID, 'pov_size', true);
            $project_url = get_post_meta($post->ID, 'pov_project_url', true);
            ?>
            <li id="post-<?php the_ID(); ?>" class="centerfourcol item_full">
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
		<?php endwhile; endif; ?> 
        </ul>	
        <div class="clear"></div>
		<div class="row">			
           	<div class="navigation padding-fix">
			<div class="nav-previous fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts','themnific') ); ?></div>
			<div class="nav-next fr"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>','themnific') ); ?></div>
			</div>
         </div>   
     </div>
	<?php wp_reset_query(); ?>

<?php get_footer(); ?>