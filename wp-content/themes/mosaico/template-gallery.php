<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
		
<div id="core">
<div class="row">
    
        <div class="twelvecol">

<img class="galleryimg" src="<?php echo get_bloginfo('template_url'); ?>/images/galeria-1.jpg"/>

        </div>
                <div style="clear: both;"></div>

        </div>





</div>

    
   <div style="clear: both;"></div> 

<div class="row">
<?php get_template_part('/includes/sliders/mosaico8bottomgallery' );; ?> 
</div>
<?php get_footer(); ?>