<?php
/*
Template Name: Portfolio 4 Col. - Filterable
*/
?>
<?php get_header(); ?>
<div id="core" class="container raster">
    	<div class="row">
        
    		<h2 class="textcenter"><?php the_title(); ?></h2>
            
            	<div id="portfolio-filter">
            
                    <ul>
                        <li><a href="#all">
                        <?php _e('All','themnific');?></a></li>
						<?php ob_start(); wp_list_categories('taxonomy=categories&orderby=ID&title_li=');
                        $html = ob_get_clean();
                        echo str_replace(home_url().'/categories/','#',$html);   // if you are using "Day and name", "Month and name" or custom premalinks
                        // echo str_replace(home_url().'/?categories=','#',$html);   // if you are using Default or Numeric premalinks
                        ?>
                  	</ul>
                    
            	</div>
                
    	<div style="clear: both;"></div>
		</div>


    <div style="clear: both;"></div>




	<ul id="portfolio-list" class="centerrow">
		
        <?php query_posts( array( 'post_type' => 'myportfoliotype', 'paged' => $paged, 'posts_per_page' => 80));
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<?php
		$file = get_post_meta($post->ID, 'pov_file', true);
		$title = get_post_meta($post->ID, 'pov_title', true);
		$url = get_post_meta($post->ID, 'pov_url', true);
		$size = get_post_meta($post->ID, 'pov_size', true);
		?>
        
		<li id="post-<?php the_ID(); ?>" class="centerthreecol item_full filter all <?php
		
		   $terms = get_the_terms( $post->ID, 'categories');
		   // Loop over each item since it's an array
			foreach( $terms as $term ) {
			// Print the name method from $term which is an OBJECT
			print $term->slug . ' ';
			// Get rid of the other data stored in the object, since it's not needed
			unset($term);
			}?>">
                <a href="<?php echo $url; ?>" rel="lightbox[set1 <?php echo $size; ?>]" title="<?php echo $title; ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
                <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=400&amp;h=300" alt="<?php the_title(); ?>"/></a>    
                        <div class="clear"></div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                            <?php if($project_url) : ?>
							<a class="tmnf-sc-button  silver small" href="<?php echo $project_url; ?>"><?php _e('Visit Project','themnific');?> 	&#43;</a>
							<?php endif; ?>
		</li><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; endif; ?> 
	</ul>	
	<div class="clear"></div>
		

            
 </div>
 </div>
	<?php wp_reset_query(); ?>

<?php get_footer(); ?>