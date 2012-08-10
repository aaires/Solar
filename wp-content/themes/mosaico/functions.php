<?php


if ( ! isset( $content_width ) )
	$content_width = 628;
	
	
/*-----------------------------------------------------------------------------------*/
/* Start Themnific Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Set path to Themnific Framework and theme specific functions
$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/functions/';

// Framework
require_once ($functions_path . 'admin-init.php');			// Framework Init

// Theme specific functionality
require_once ($includes_path . 'theme-options.php'); 		// Options panel settings and custom settings
require_once ($includes_path . 'theme-actions.php');		// Theme actions & user defined hooks
require_once ($includes_path . 'theme-scripts.php'); 				// Load JavaScript via wp_enqueue_script


//Add Custom Post Types
require_once ($includes_path . 'posttypes/ptype-portfolio.php'); 	// portfolio post type
require_once ($includes_path . 'posttypes/ptype-announcement.php'); 	// announcement post type
require_once ($includes_path . 'posttypes/post-metabox.php'); 		// custom meta box

/*-----------------------------------------------------------------------------------

- Loads all the .php files found in /admin/widgets/ directory

----------------------------------------------------------------------------------- */

	$preview_template = _preview_theme_template_filter();

	if(!empty($preview_template)){
		$widgets_dir = WP_CONTENT_DIR . "/themes/".$preview_template."/functions/widgets/";
	} else {
    	$widgets_dir = WP_CONTENT_DIR . "/themes/".get_option('template')."/functions/widgets/";
    }
    
    if (@is_dir($widgets_dir)) {
		$widgets_dh = opendir($widgets_dir);
		while (($widgets_file = readdir($widgets_dh)) !== false) {
  	
			if(strpos($widgets_file,'.php') && $widgets_file != "widget-blank.php") {
				include_once($widgets_dir . $widgets_file);
			
			}
		}
		closedir($widgets_dh);
	}
	
	
/*---------------------------------------------------------------------------------*/
/* Deregister Default Widgets */
/*---------------------------------------------------------------------------------*/
function deregister_widgets(){
    unregister_widget('WP_Widget_Search');         
}
add_action('widgets_init', 'deregister_widgets'); 



// widgets
if ( function_exists('register_sidebar') ) 
{ 

// sidebar widget
register_sidebar(array('name' => 'Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>')); 




/*
//index widgets
register_sidebar(array('name' => 'Index Left','before_widget' => '','after_widget' => '','before_title' => '<h2 class="archives-small">','after_title' => '</h2>'));  
register_sidebar(array('name' => 'Index Center','before_widget' => '','after_widget' => '','before_title' => '<h2 class="archives-small">','after_title' => '</h2>'));   
register_sidebar(array('name' => 'Index Right','before_widget' => '','after_widget' => '','before_title' => '<h2 class="archives-small">','after_title' => '</h2>'));

//footer widgets
register_sidebar(array('name' => 'Footer Left','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>'));   
register_sidebar(array('name' => 'Footer Center','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>'));
register_sidebar(array('name' => 'Footer Right','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>')); 
*/
}

// Make theme available for translation
	load_theme_textdomain( 'themnific', TEMPLATEPATH . '/lang' );




// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

// Shordcodes
require_once (TEMPLATEPATH.'/functions/admin-shortcodes.php' );				// Shortcodes
require_once (TEMPLATEPATH.'/functions/admin-shortcode-generator.php' ); 	// Shortcode generator 

// Use shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');

// navigation menu
function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu','themnific' )
		)
	);
};
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );


// Add Theme Support Functions
add_custom_background();
add_editor_style();

// Shorten post title
function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}


// managed excerpt

function wpe_excerptlength_teaser($length) {
    return 230;
    }
function wpe_excerptlength_index($length) {
    return 30;
    }
function wpe_excerptmore($more) {
    return '...';
    }

// new excerpt function

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;

    if(function_exists($length_callback)){
    	add_filter('excerpt_length', $length_callback);
    }
	    if(function_exists($more_callback)){
    	add_filter('excerpt_more', $more_callback);
    }
	    $output = get_the_excerpt();
   		$output = apply_filters('wptexturize', $output);
   		$output = apply_filters('convert_chars', $output);
  		  $output = '<p>'.$output.'</p>';
   		echo $output;
    }



// Old Shorten Excerpt text for use in theme
function pov_excerpt($text, $chars = 1620) {
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";
	return $text;
}

function trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');

// Post thumbnail support
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(640, 265, true); // Normal post thumbnails
	add_image_size('loopThumb', 640, 265, true);
}

function thumb_url(){
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 2100,2100 ));
return $src[0];
}


// pagination

function pagination($prev = '«', $next = '»') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
};



//First Image
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  return $first_img;
}


//Breadcrumbs
function the_breadcrumb() {
	if (!is_home()) {
		echo '';
		echo 'Home';
		echo " &raquo; ";
		if (is_category() || is_single()) {
		the_category(', ');
		if (is_single()) {
		echo " &raquo; ";
	the_title();
	}
	} elseif (is_page()) {
	echo the_title();}
	}
}


add_image_size('square_eight',240,240);
add_image_size('one_row_bottom',240,129);
	


function mosaico_enqueue_scripts() {
	// only on the front end; don't mess with Admin scripts
	if ( ! is_admin() ) {
		// Only enqueue the core-bundled jQuery script
		wp_deregister_script('jquery');//deregister current jquery
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', false, '1.7.1', false);//load jquery from google api, and place in footer
		wp_enqueue_script('jquery');
		
		wp_register_style( 'jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
		wp_enqueue_style('jquery-style');
		
		wp_enqueue_script('jquery-ui');
		//wp_enqueue_script('jquery-ui-datepicker');
		
		wp_register_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', 'jquery' );
		// Enqueue superfish script
		wp_enqueue_script( 'nivo' );
		
//		wp_register_script( 'conference', get_template_directory_uri() . '/js/mosaico.js', 'jquery' );
		// Enqueue nivo slicer script
		wp_enqueue_script( 'conference',  get_template_directory_uri() . '/js/mosaico.js', 'jquery','1.0',true);

		
		
	}
}
// Enqueue at proper hook
add_action( 'wp_enqueue_scripts', 'mosaico_enqueue_scripts' );


function mosaico_print_styles()
{
	wp_enqueue_style('jquery-ui');
}

add_action( 'wp_print_scripts', 'mosaico_print_styles' );

/******************************* Nivo Slider ***************************/
/*
 ===============================================================
Custom Post Type For Slider
===============================================================
*/

add_action('init', 'create_slider_post_type');

function create_slider_post_type() {
	$args = array(
			'label' => __('Slider'),
			'singular_label' => __('Slide'),
			'public' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => array(
					'name' => __( 'Slider' ),
					'singular_name' => __( 'Slide' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Slide' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Slide' ),
					'new_item' => __( 'New Slide' ),
					'view' => __( 'View Slide' ),
					'view_item' => __( 'View Slide' ),
					'search_items' => __( 'Search Slides' ),
					'not_found' => __( 'No slides found' ),
					'not_found_in_trash' => __( 'No slides found in Trash' ),
					'parent' => __( 'Parent Slide' ),
			),
			'supports' => array('title', 'thumbnail')
	);

	register_post_type( 'slide' , $args );



	/*
	 ===============================================================
	Options For Slider
	===============================================================
	*/

	add_action("admin_init", "admin_init");
	add_action('save_post', 'save_slide_meta');

	function admin_init(){
		add_meta_box("slider-meta", "Slider Options", "meta_options", "slide", "normal", "low");
	}

	function meta_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$text = $custom["text"][0];
		$link = $custom["link"][0];
		?>
<p>Set a featured image for this slide using the built-in WordPress featured image feature which is normally located on the right hand side of this page.  </p><p>Then, enter a url (beginning with "http://") of a page, post, product, category or even an off-site link using the field below.</p><p>You can also add a caption or message that will slide up from the bottom of each slide.</p><br />
<label style="width:80px;float:left;display:block;font-weight:bold;padding:5px;">Link URL:</label><input style="width:400px;border:1px solid #ccc;" name="link" value="<?php echo $link; ?>" /><br />
<label style="width:80px;float:left;display:block;font-weight:bold;padding:5px;">Caption:</label><input style="width:400px;border:1px solid #ccc;" name="text" value="<?php echo $text; ?>" />
<?php
}

function save_slide_meta(){
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	return;
	
	global $post;
	update_post_meta($post->ID, "text", $_POST["text"]);
	update_post_meta($post->ID, "link", $_POST["link"]);
}

/*
 * Resize images dynamically using wp built in functions
* Victor Teixeira
*
* php 5.2+
*
* Exemplo de uso:
*
* <?php
* $thumb = get_post_thumbnail_id();
* $image = vt_resize( $thumb, '', 140, 110, true );
* ?>
* <img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" />
*
* @param int $attach_id
* @param string $img_url
* @param int $width
* @param int $height
* @param bool $crop
* @return array
*/
function vt_resize( $attach_id = null, $img_url = null, $width, $height, $crop = false ) {

	// this is an attachment, so we have the ID
	if ( $attach_id ) {

		$image_src = wp_get_attachment_image_src( $attach_id, 'full' );
		$file_path = get_attached_file( $attach_id );

		// this is not an attachment, let's use the image url
	} else if ( $img_url ) {

		if ( is_multisite() ) /* CHECK IF MULTISITE IS ENABLED */ {



			$file_path = parse_url( $img_url );
			global $blog_id;
			$file_path = $_SERVER['DOCUMENT_ROOT'] .'/wp-content/blogs.dir/' . $blog_id . $file_path['path'];

			//$file_path = ltrim( $file_path['path'], '/' );
			//$file_path = rtrim( ABSPATH, '/' ).$file_path['path'];

			$orig_size = @getimagesize( $file_path );

			$image_src[0] = $img_url;
			$image_src[1] = $orig_size[0];
			$image_src[2] = $orig_size[1];
		} /* IF MULTISITE IS NOT ENABLED */

		else {
			$file_path = parse_url( $img_url );
			$file_path = $_SERVER['DOCUMENT_ROOT'] . $file_path['path'];

			//$file_path = ltrim( $file_path['path'], '/' );
			//$file_path = rtrim( ABSPATH, '/' ).$file_path['path'];

			$orig_size = @getimagesize( $file_path );

			$image_src[0] = $img_url;
			$image_src[1] = $orig_size[0];
			$image_src[2] = $orig_size[1];
		} //END OF MULITSITE CHECK
	}

	$file_info = pathinfo( $file_path );
	$extension = '.'. $file_info['extension'];

	// the image path without the extension
	$no_ext_path = $file_info['dirname'].'/'.$file_info['filename'];

	$cropped_img_path = $no_ext_path.'-'.$width.'x'.$height.$extension;

	// checking if the file size is larger than the target size
	// if it is smaller or the same size, stop right here and return
	if ( $image_src[1] > $width || $image_src[2] > $height ) {

		// the file is larger, check if the resized version already exists (for $crop = true but will also work for $crop = false if the sizes match)
		if ( file_exists( $cropped_img_path ) ) {

			$cropped_img_url = str_replace( basename( $image_src[0] ), basename( $cropped_img_path ), $image_src[0] );

			$vt_image = array (
					'url' => $cropped_img_url,
					'width' => $width,
					'height' => $height
			);

			return $vt_image;
		}

		// $crop = false
		if ( $crop == false ) {

			// calculate the size proportionaly
			$proportional_size = wp_constrain_dimensions( $image_src[1], $image_src[2], $width, $height );
			$resized_img_path = $no_ext_path.'-'.$proportional_size[0].'x'.$proportional_size[1].$extension;

			// checking if the file already exists
			if ( file_exists( $resized_img_path ) ) {

				$resized_img_url = str_replace( basename( $image_src[0] ), basename( $resized_img_path ), $image_src[0] );

				$vt_image = array (
						'url' => $resized_img_url,
						'width' => $proportional_size[0],
						'height' => $proportional_size[1]
				);

				return $vt_image;
			}
		}

		// no cache files - let's finally resize it
		$new_img_path = image_resize( $file_path, $width, $height, $crop );
		$new_img_size = @getimagesize( $new_img_path );
		$new_img = str_replace( basename( $image_src[0] ), basename( $new_img_path ), $image_src[0] );

		// resized output
		$vt_image = array (
				'url' => $new_img,
				'width' => $new_img_size[0],
				'height' => $new_img_size[1]
		);

		return $vt_image;
	}

	// default output - without resizing
	$vt_image = array (
			'url' => $image_src[0],
			'width' => $image_src[1],
			'height' => $image_src[2]
	);

	return $vt_image;
}

} //END OF CHECK FOR CUSTOM POST TYPE



add_filter( 'get_previous_post_sort', 'sql_get_post_sort');
add_filter( 'get_next_post_sort', 'sql_get_post_sort');

function sql_get_post_sort($sort){
	$sort =  "ORDER BY p.menu_order $order LIMIT 1";
	
	return $sort;
}


add_filter( 'get_previous_post_where', 'sql_get_previous_post_where');

function sql_get_previous_post_where($where ){
	global $wpdb; global $post;
	
	
	$current_order = $post->menu_order - 1 ;
	$current_parent = $post->post_parent;
	
	
	$where = $wpdb->prepare("WHERE p.post_type = 'page' AND p.post_status = 'publish' AND p.post_parent = '{$current_parent}' AND p.menu_order = '{$current_order}'");
	
	return $where;
}

add_filter( 'get_next_post_where', 'sql_get_next_post_where');

function sql_get_next_post_where($where ){
	global $wpdb; global $post;

	$current_order = $post->menu_order + 1;
	$current_parent = $post->post_parent;
	
	$where = $wpdb->prepare("WHERE p.post_type = 'page' AND p.post_status = 'publish' AND p.post_parent = '{$current_parent}' AND p.menu_order = '{$current_order}'");
	
	return $where;
}

?>