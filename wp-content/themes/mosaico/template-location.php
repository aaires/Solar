<?php
/*
Template Name: Location
*/
?>

<?php global $post; ?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="container">
<div class="row" id="room">
    
        <div class="sixcol first" id="map">

<?php //the_meta(map); 
        echo get_post_meta($post->ID,'map',true); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

                <div style="clear: both;"></div>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="sixcol last" id="locationpost">
            
            <h2 class="locationtitle"><?php _e('Location','solar'); ?></h2>
            <div id="locationcontent">
            <?php the_content(); ?>
        <div class="locationsubtitle">
            <h6><?php  $coordenadas = get_post_meta($post->ID,'gps',true);
                echo $coordenadas; ?></h6>
        </div>
    <div style="clear: both;"></div>
                <div class="locationform">
                <h2 class="locationformtitle"><?php _e('By road','solar'); ?></h2>
                <h3 class="locationformsubtitle"><?php _e('Introduce your start address and we calculate the best route.','solar'); ?></h3>
                <form action="/">
                <input type="text" id="adress" placeholder="<?php _e('Start Address','solar'); ?>" />
                <input type="text" id="postal" placeholder="<?php _e('Zip Code...','solar'); ?>" />
                <input type="text" id="city" placeholder="<?php _e('City...','solar'); ?>" />
                <input id="howlocation" class="submit" type="submit" value="<?php _e('See Route','solar'); ?>">


                </div> 
    <div style="clear: both;"></div>
            <div class="locationairport">
                <h2 class="locationformtitle"><?php _e('By Plane','solar'); ?></h2>
                <h3 class="locationformsubtitle"><?php _e('Choose the airport you are ariving and we calcultate the best route.','solar'); ?></h3>
                <img src="<?php bloginfo('template_url'); ?>/images/lisboa.jpg"/>
                <img src="<?php bloginfo('template_url'); ?>/images/porto.jpg"/>
                <img src="<?php bloginfo('template_url'); ?>/images/faro.jpg"/>
                <img src="<?php bloginfo('template_url'); ?>/images/madrid.jpg"/>
                <img src="<?php bloginfo('template_url'); ?>/images/vigo.jpg"/>


            </div>
            </div>
            <div style="clear: both;"></div>
             <div id="sharingoptionslocation">
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