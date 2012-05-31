<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- load main css stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    
    <!-- load mediabox css -->
    <?php if (
	is_page_template('template-portfolio3.php') || 
	is_page_template('template-portfolio4.php') || 
	is_page_template('template-filterable3.php') || 
	is_page_template('template-filterable4.php') || 
	is_home() || 
	is_archive()): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/mediabox/mediabox.css" />
    <?php endif ?>

    <!-- google webfonts -->
    <?php if (get_option('themnific_dis_goofonts') <> "true") { ?>
    <link href='http://fonts.googleapis.com/css?family=Marvel:400,700|Gudea:400,700,400italic|Bitter:400,700,400italic|Passion+One:400,700|Jockey+One|Quicksand:400,300,700|Terminal+Dosis:400,800,300,600|Sansita+One|Changa+One|Paytone+One|Dorsa|Rochester|Bigshot+One|Open+Sans:800,700|Merienda+One|Six+Caps|Bevan|Oswald|Vidaloka|Droid+Sans|Josefin+Sans|Dancing+Script:400,700|Abel|Rokkitt|Droid+Serif' rel='stylesheet' type='text/css'/>
    <?php } ?>


    <!--- for placeholders -->
    <script>
// This adds 'placeholder' to the items listed in the jQuery .support object. 
jQuery(function() {
   jQuery.support.placeholder = false;
   test = document.createElement('input');
   if('placeholder' in test) jQuery.support.placeholder = true;
});
// This adds placeholder support to browsers that wouldn't otherwise support it. 
$(function() {
   if(!$.support.placeholder) { 
      var active = document.activeElement;
      $(':text').focus(function () {
         if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
            $(this).val('').removeClass('hasPlaceholder');
         }
      }).blur(function () {
         if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
            $(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
         }
      });
      $(':text').blur();
      $(active).focus();
      $('form:eq(0)').submit(function () {
         $(':text.hasPlaceholder').val('');
      });
   }
});
</script>

    <!-- end of placeholders -->
    
   	<!-- html5.js for IE less than 9 -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
    
    
<?php wp_head(); ?>
<?php themnific_head(); ?>

</head>

     
<body <?php body_class(); ?>>
    
    

    <div id="header" class="container body3 raster bottomzero">

        <!-- Logo Section -->
        <div id= "logotipo" class="row">
          
               
            <!--    <div class="contentor"> -->
                
                <div class="sevencol first">
                <a href="<?php echo home_url(); ?>/">
                
					<?php if(get_option('themnific_logo')) { ?>
                    
                    <img src="<?php echo get_option('themnific_logo');?>" alt="<?php bloginfo('name'); ?>"/><?php } 
					
                    else { bloginfo('name'); } ?>	
                    
                </a>

                </div>

                <div class="fivecol" id="socialicons"> 
            
              <?php do_action('icl_language_selector'); ?>
                <?php get_template_part('/includes/uni-social');?>
              
                
                </div>

               
           
    	</div>

            
    <div style="clear: both;"></div>


    <!-- Nav Menu Section -->
    <div class="row">

        <div class="twelvecol">
                
            <div id="navigation">
            
                    <?php get_template_part('/includes/uni-navigation');?>
                    
            </div><!--end #navigation-->    
    
        </div> 
        
     </div>   
      
       
    </div> <!-- #header -->
    
    