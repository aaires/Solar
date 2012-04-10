jQuery(document).ready(function(){
  jQuery( '#serinfo li:not(:first)' ).hide();
  
  jQuery('#serinfo-nav li').click(function(e) {
    jQuery('#serinfo li').hide();
    jQuery('#serinfo-nav .current').removeClass("current");
    jQuery(this).addClass('current');
    
    var clicked = $(this).find('a:first').attr('href');
    jQuery('#serinfo ' + clicked).fadeIn('slow');
    e.preventDefault();
  }).eq(0).addClass('current');
});