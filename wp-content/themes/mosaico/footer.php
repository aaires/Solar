 
 
 <!--     <div class="container body3 raster-bottom"> 
    
        <div class="row">	
             <div class="eightcol first">
    
                    <h1 class="tagline"><?php echo get_option('themnific_tagline');?></h1>

        	</div>
            
            <div class="fourcol"> 
            
    			<?php //get_template_part('/includes/uni-social');?>
                
    		</div>
    
    	</div>
        
    </div>  
 -->
 <!-- 

	<div id="archives" class="body2" style="<?php if(!is_404() && (!is_search() || have_posts())) echo 'display:none'; ?>" >

        <div class="container"  style="padding-bottom:0px"> 
            <div class="row">
            
                <?php //get_template_part('/includes/uni-more');?>
    
            </div> 
        </div>
    
    </div><!-- end #archives --> 
 <!--    <div id="toggleArchives" class="rad boxshadow" onclick="toggleArchives();">&darr; More &darr;</div> 
    
   -->    
     
  <div id="homebottomrow" class="row">
        
       <div class="twelvecol">
       
                    
           <?php if(is_home()) 
           {
    			
					echo get_template_part('/includes/sliders/mosaico8bottom' );;	
											
				} 
			?>
                   
       	</div>
    </div>
    
        
<!--
        <?php if (get_option('themnific_dis_foowidgets') <> "true") { ?>
            <?php get_template_part('/includes/uni-bottombox');?>
        <?php } ?>
        	


-->
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