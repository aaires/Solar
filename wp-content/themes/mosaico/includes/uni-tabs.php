<div id="hometab">

<ul id="serinfo-nav">

        <li class="li01"><a href="#serpane0"><?php _e('Latest','themnific');?></a></li>
        <li class="li02"><a href="#serpane1"><?php _e('Popular','themnific');?></a></li>
        <li class="li03"><a href="#serpane2"><?php _e('Random','themnific');?></a></li>
        <li class="li04" style="width:20%"><a href="#serpane3"><?php _e('Tags','themnific');?></a></li>

</ul>

<ul id="serinfo">

  		<li id="serpane0">		
        	<?php get_template_part("/includes/tabs/tabs-latest"); ?>	
  		</li>


  		<li id="serpane1">
        	<?php get_template_part("/includes/tabs/tabs-popular"); ?>	
  		</li>
        
        
        
     	<li id="serpane2">	
        	<?php get_template_part("/includes/tabs/tabs-random"); ?>	
        </li>
        
        
        
  		<li id="serpane3">
           <?php wp_tag_cloud('smallest=7&largest=22&'); ?>
        </li>
     



</ul>

</div>
<div style="clear: both;"></div>