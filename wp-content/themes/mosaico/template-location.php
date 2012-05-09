<?php
/*
Template Name: Location
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row" id="room">
    
        <div class="sixcol first" id="map">
<?php the_meta (map) ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;"></div>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="sixcol last" id="locationpost">
            <?php the_content(); ?>
             <div id="sharingoptions">
                <div class="send">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/envia.png"/><?php _e('Envie a um amigo','solar'); ?></a>
                </div>
                <div class="share">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/partilha.png"/><?php _e('Partilhar','solar'); ?></a>
                </div>
                <div class="like">
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FWidgiLabs&amp;send=false&amp;layout=box_count&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
                </div>
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