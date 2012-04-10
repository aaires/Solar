<?php get_header(); ?>


<!-- Mosaico -->
      <div class="row">
        
       <div class="twelvecol">
                    
                    
           <?php if(is_home()) {
    			
					echo get_template_part('/includes/mag-sliders');	
											
				} else {}?>
                   
       	</div>
      </div>
        
    
    <div style="clear: both;"></div> 


     <div id="homebottomrow" class="row">
        
       <div class="twelvecol">
       
                    
           <?php if(is_home()) 
           {
    			
					echo get_template_part('/includes/sliders/mosaico8bottom' );;	
											
				} 
			?>
                   
       	</div>
      </div>
    

<?php 
//Center Page

?>



<?php get_footer(); ?>