<div class="row container">
	<?php get_template_part('/includes/sliders/mosaico8bottom' ); ?> 
</div>
    
    
<div id="footer">
        
	<div id="lastfooter" class="row">
          <div class="twelvecol" id="logos">
                <div class="logo1"><img src="<?php bloginfo('template_url'); ?>/images/on2-logo.jpg"/></div>
                <div class="logo2"><img src="<?php bloginfo('template_url'); ?>/images/qren-logo.jpg"/></div>
                <div class="logo3"><img src="<?php bloginfo('template_url'); ?>/images/ue-logo.jpg"/></div>
          </div>
		  <div style="clear:both;"> </div>

          <div id="legal" class="twelvecol">
              <a href="http://www.google.com"><?php _e('Privacy Policy','solar')?>&nbsp;&nbsp;|</a><a href="http://www.youtube.com">&nbsp; <?php _e('Terms and Conditions');?></a>
              <a href="http://www.amazon.com"> &copy; 2012 Solar Egas Moniz <?php _e('All rights reserved');?></a>
          </div>
               
   </div> <!-- #lastfooter -->
    
</div><!-- /#footer  -->


<?php wp_footer(); ?>
<?php themnific_foot(); ?>

</body>
</html>