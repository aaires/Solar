<?php
/*
Template Name: Location
*/
?>

<?php global $post; ?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div id="core" class="containerlocation">
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
       
       <!-- This can go in the content -->
      <!--   <div class="locationsubtitle">
            <h6><?php  $coordenadas = get_post_meta($post->ID,'gps',true);
                echo $coordenadas; ?></h6>
        </div>
         -->
    <div style="clear: both;"></div>
                <div class="locationform">
                <h2 class="locationformtitle"><?php _e('By road','solar'); ?></h2>
                <h3 class="locationformsubtitle"><?php _e('Introduce your start address and we calculate the best route.','solar'); ?></h3>
                
<!--  http://maps.google.com/maps?q=Rua+dos+Monges+Beneditinos+158+4560-380+Pa%C3%A7o+de+Sousa,+Penafiel&hl=en&ie=UTF8&sll=41.167935,-8.342669&sspn=0.001143,0.002269&t=h&hnear=R.+dos+Monges+Beneditinos,+Pa%C3%A7o+de+Sousa,+4560+Penafiel,+Porto,+Portugal&z=16                 -->
             
                <form method="post" action="javascript:window.document.location.href='http://maps.google.com/maps?daddr=R.+dos+Monges+Beneditinos,+Pa%C3%A7o+de+Sousa,+4560+Penafiel,+Porto,+Portugal&hl=en&geocode=&dirflg=&saddr='+link2googlemap.sstreet.value+','+document.link2googlemap.szip.value+','+document.link2googlemap.scity.value+',Portugal'+'&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=8';" name="link2googlemap" style="margin-top: 0; margin-bottom: 0">
			
	            <script>
	                var moradav = false
	                var cpostalv = false
	                var cidadev = false
	            </script> 
				
                
                <input type="text" id="adress" placeholder="<?php _e('Street Name','solar'); ?>" name="sstreet"  onfocus="if (moradav ==false) {moradav =true;}; if (document.link2googlemap.sstreet.value == 'Street') document.link2googlemap.sstreet.value = '';"/>
                <input type="text" id="postal" placeholder="<?php _e('Zip Code...','solar'); ?>" name="szip" onfocus="if (cpostalv ==false) {cpostalv =true;};if (document.link2googlemap.szip.value == 'ZIP') document.link2googlemap.szip.value = '';" />
                <input type="text" id="city" placeholder="<?php _e('City...','solar'); ?>" name="scity" size="16" onfocus="if (cidadev ==false) {cidadev =true;};if (document.link2googlemap.scity.value == 'City') document.link2googlemap.scity.value = '';" />
                <input id="howlocation" class="submit" type="submit" value="<?php _e('See Route','solar'); ?>">
			</form>

                </div> 
    <div style="clear: both;"></div>
            <div class="locationairport">
                <h2 class="locationformtitle"><?php _e('By Plane','solar'); ?></h2>
                <h3 class="locationformsubtitle"><?php _e('Choose the airport you are ariving and we calcultate the best route.','solar'); ?></h3>
                <img id="lisboa" src="<?php bloginfo('template_url'); ?>/images/lisboa.jpg" />
                <img id="porto" src="<?php bloginfo('template_url'); ?>/images/porto.jpg"/>
                <img id="faro" src="<?php bloginfo('template_url'); ?>/images/faro.jpg" onclick=""/>
                <img id="madrid" src="<?php bloginfo('template_url'); ?>/images/madrid.jpg"/>
                <img id="vigo" src="<?php bloginfo('template_url'); ?>/images/vigo.jpg"/>

                <script type="text/javascript">
					jQuery(document).ready(function() {

						var baseurl = "http://maps.google.com/maps?daddr=R.+dos+Monges+Beneditinos,+Pa%C3%A7o+de+Sousa,+4560+Penafiel,+Porto,+Portugal&hl=en&geocode=&dirflg=&saddr="; 
						var url1 = baseurl + "Alameda das Comunidades Portuguesas,1700353,Lisboa,Portugal&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=8";

						jQuery('#lisboa').click(function() {
							window.location.href = url1; 
						});

						var url2 = baseurl+"R. Hotel Pedras Rubras,4470558, Maia, Portugal&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=8";
						jQuery('#porto').click(function() {
							window.location.href = url2; 
						});

						var url3 = baseurl+"8005,Faro,Portugal&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=6";
						jQuery('#faro').click(function() {
							window.location.href = url3; 
						});

						var url4 = baseurl+"28042,Madrid,Spain&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=6";
						jQuery('#madrid').click(function() {
							window.location.href = url4; 
						});

						var url5 = baseurl+"36318, Vigo, Spain&f=d&hl=en&sll=39.9714,-8.738065&sspn=4.765238,9.294434ie=UTF8&z=7";
						jQuery('#vigo').click(function() {
							window.location.href = url5; 
						});
						
						
					});
                </script>

            </div>
            </div>
            
            
             </div>
        </div>



</div><!--end #core .row-->

    
   <div style="clear: both;"></div> 
</div><!--end #core-->

<?php get_footer(); ?>