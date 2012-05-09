<?php
/*
Template Name: Mosaico
*/
?>


<?php get_header(); ?>


<!-- Mosaico -->
      <div class="row" id="mosaicogrande">
        
       <div class="twelvecol">
                    
                    
           
    			<?php
					echo get_template_part('/includes/mag-sliders');	
											
				?>
                   
       	</div>
      </div>
        
    
    <div style="clear: both;"></div> 

<div class="row" id="footermosaico">
<?php get_template_part('/includes/sliders/mosaico8bottom' );; ?> 
</div> 
    
    





<?php get_footer(); ?>