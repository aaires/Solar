<?php
if ( ! is_admin() ) { add_action( 'wp_print_scripts', 'themnific_add_javascript' ); }

if ( ! function_exists( 'themnific_add_javascript' ) ) {
	function themnific_add_javascript() {

		// Load Common scripts	
		//wp_enqueue_script('jquery-1.7.1.min', get_stylesheet_directory_uri() .'/js/jquery-1.7.1.min.js');
		wp_enqueue_script( 'superfish', get_template_directory_uri().'/js/superfish.js');
		wp_enqueue_script( 'jquery.hoverIntent.minified', get_template_directory_uri().'/js/jquery.hoverIntent.minified.js');
		wp_enqueue_script( 'css3-mediaqueries', get_template_directory_uri().'/js/css3-mediaqueries.js');
		wp_enqueue_script('tabs', get_stylesheet_directory_uri() .'/js/tabs.js');
		wp_enqueue_script('ownScript', get_stylesheet_directory_uri() .'/js/ownScript.js','','', true);


		// filterable scripts
		if (is_page_template('template-filterable3.php') || is_page_template('template-filterable4.php') || is_home() || is_archive()){
		wp_enqueue_script('mootools-core-1.4.5', get_stylesheet_directory_uri() .'/js/mediabox/mootools-core-1.4.5.js');
		wp_enqueue_script('mediabox.advanced', get_stylesheet_directory_uri() .'/js/mediabox/mediabox-1.2.4.js');
		wp_enqueue_script('filterable.pack', get_template_directory_uri().'/js/filterable.pack.js','','', true); 
		}
		
		// Load Mediabox scripts
		if (is_page_template('template-portfolio3.php') || 
			is_page_template('template-portfolio4.php') || 
			is_page_template('template-filterable3.php') || 
			is_page_template('template-filterable4.php') || 
			is_home() || is_archive()){
				wp_enqueue_script('mootools-core-1.4.5', get_stylesheet_directory_uri() .'/js/mediabox/mootools-core-1.4.5.js');
				wp_enqueue_script('mediabox.advanced', get_stylesheet_directory_uri() .'/js/mediabox/mediabox-1.2.4.js');
		}
		
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	}
}
?>