<?php
/*
Template Name: Single-Room
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row" id="room">
    
        <div class="sixcol first" id="roomimg">

<?php the_post_thumbnail('full'); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;"></div>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="sixcol last" id="roompost">
            <div class="roomcontent">

                <h2 class="leading"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="entry" id="postroom">
                 <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                </div>
            </div>
             <div id="sharingoptions">
                <div class="send">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/envia.png"/><?php _e('Envie a um amigo','solar'); ?></a>
                </div>
                <div class="share">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/partilha.png"/><?php _e('Partilhar','solar'); ?></a>
                </div>
                <div class="like">
                    <p>Like</p>
                </div>
             </div>
        </div>



</div><!--end #core .row-->

    
   <div style="clear: both;"></div> 
</div><!--end #core-->
<div class="row">
<?php get_template_part('/includes/sliders/mosaico8bottom' );; ?> 
</div> 
<?php get_footer(); ?>