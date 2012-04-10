<?php
/*
Template Name: Portfolio Project
*/
?>
<?php get_header(); ?>
	<div class="container">
    	<div class="row" style="padding:20px 0">

	

	<?php query_posts( array( 'post_type' => 'myportfoliotype', 'paged' => $paged, 'posts_per_page' => 6));
	if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<?php
	$project_url = get_post_meta($post->ID, 'pov_project_url', true);
	?>
	<div class="project">	
	<div class="sevencol first">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
                <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=550&amp;h=230" alt="<?php the_title(); ?>"/>
	</div>	
		
			<div class="overview fivecol">
            	<?php
				echo '<div class="taggs">';
				$terms_of_post = get_the_term_list( $post->ID, 'specifics', '',' &bull; ', ' ', '' );
				echo $terms_of_post;
				echo '</div>';
				?>
			<h2 class="leading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            	
			
				<p><?php echo pov_excerpt( get_the_excerpt(), '200'); ?></p>

                
				<?php if($project_url) : ?>
				<a class="tmnf-sc-button  silver small" href="<?php echo $project_url; ?>"><?php _e('Visit Project','themnific');?></a>
				<?php endif; ?>
			</div>
            	
	</div>
		
		
  <?php endwhile; endif; ?> 	


			<div class="clear"></div>
			
			<div class="navigation">
			<div class="nav-previous fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts','themnific') ); ?></div>
			<div class="nav-next fr"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>','themnific') ); ?></div>
			</div>
			<!-- end pagination -->


<?php wp_reset_query(); ?>
    </div>
    </div>
<?php get_footer(); ?>