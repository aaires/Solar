<?php
/*
Template Name: Experience
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

    
    
    
        <div class="sixcol last" id="relatedpost">
            <div class="roomcontent">

                <h2 class="leading"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="entry" id="postexperience">
                 <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                    <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                </div>
            </div>
             <div id="sharingoptionsrelated">
                <div class="send">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/envia.png"/><?php _e('Send to a friend','solar'); ?></a>
                </div>
                <div class="share">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/partilha.png"/><?php _e('Share','solar'); ?></a>
                </div>
                <div class="like">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.solaregasmoniz.com&amp;send=false&amp;layout=button_count&amp;width=26&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:60px; height:21px;" allowTransparency="true"></iframe>
                </div>
                </div>
                <div style="clear: both;"></div>

                <div class="relatedpost">
                    <div class="relatedheader"><?php _e('Outras experiências que talvez goste','solar'); ?></div>
                    <div class="relatedtopics">
                    <div class="relatedtopic1"> 
                        <div class="relatedimg1"><?php echo get_the_post_thumbnail( $post_id, array(117,117), $attr ); ?></div>
                        <div class="relatedtitle1"> 
                        <p><?php echo the_title(); ?></p></div>
                     </div>
                    <div class="relatedtopic2"> 
                        <div class="relatedimg2"><?php echo get_the_post_thumbnail( $post_id, array(117,117), $attr ); ?></div>
                        <div class="relatedtitle2">
                        <p><?php echo the_title(); ?></p></div>
                    </div>
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