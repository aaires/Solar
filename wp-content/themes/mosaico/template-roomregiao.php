<?php
/*
Template Name: Single
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container rooms">
<div class="row" id="room">
    
    
    
    
        <div class="sixcol first" id="roomimg">

          <div class="twelvecol otherpages" id="setas">
    <?php 
    
    $post_parent = $post->post_parent;
    
    // Only shows related posts (same parent)
    $previous = get_previous_post();
    if($previous->post_parent == $post_parent && $post_parent!=0)
    { $previous_link =  get_permalink($previous->ID);
      ?><a href="<?php echo $previous_link?>"> <div class="previous  first"></div></a>  <?php 
    }
    
    $next = get_next_post();  
    if($next->post_parent == $post_parent && $post_parent!=0)
    {
      $next_link =  get_permalink($next->ID);
      ?><a href="<?php echo $next_link;?>"><div class="next  last"></div> </a><?php
    }
    ?>
    </div>

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
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/envia.png"/><?php _e('Send to a friend','solar'); ?></a>
                </div>
                <div class="share">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/partilha.png"/><?php _e('Share','solar'); ?></a>
                </div>
                <div class="like">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.solaregasmoniz.com&amp;send=false&amp;layout=button_count&amp;width=26&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:60px; height:21px;" allowTransparency="true"></iframe>
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