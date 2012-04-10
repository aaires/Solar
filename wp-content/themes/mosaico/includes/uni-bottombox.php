	<div class="row">

              <div class="fourcol first"> 
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Left") ) : ?>
              
              <div class="aboutus">
              
              	<?php if(get_option('themnific_about_img')) { ?>
                    
                    <img src="<?php echo get_option('themnific_about_img');?>" alt="<?php bloginfo('name'); ?>"/><?php } 
					
                    else {} ?>
              
			  		<p><?php echo stripslashes(get_option('themnific_aboutus_text'));?></p>
             	</div>
              
               <?php endif; ?>
               </div>
              
              
              <div class="fourcol">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Center") ) : ?>
              <?php endif; ?>
              </div>
              
              
              <div class="fourcol">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Right") ) : ?>
              <?php endif; ?>
              </div>
		</div>