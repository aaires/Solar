<?php 
add_action('init', 'tmnf_announcement_register');
 
function tmnf_announcement_register() {
 
	$labels = array(
		'name' => 'Announcement', 'post type general name',
		'singular_name' => 'Service Item', 'post type singular name',
		'add_new' => 'Add New', 'Service item',
		'add_new_item' => 'Add New Service', 'tmnf',
		'edit_item' => 'Edit Announcement', 'tmnf',
		'new_item' => 'New Service', 'tmnf',
		'view_item' => 'View Announcement', 'tmnf',
		'search_items' => 'Search Announcement', 'tmnf',
		'menu_icon' => get_stylesheet_directory_uri() . 'images/icons/media-button-video.gif',
		'not_found' =>  'Nothing found', 'tmnf',
		'not_found_in_trash' => 'Nothing found in Trash', 'tmnf',
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/icons/media-button-video.gif',
		'rewrite' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','excerpt','thumbnail'),
		'register_meta_box_cb' => 'tmnf_add_announcement_meta'
	  ); 
 
	register_post_type( 'announcement' , $args );
}
//Service Link Meta Box
add_action("admin_init", "tmnf_add_announcement_meta");
 
function tmnf_add_announcement_meta(){
  add_meta_box("tmnf_credits_announcement_meta", "Link", "tmnf_credits_announcement_meta", "announcement", "normal", "low");
}
 

function tmnf_credits_announcement_meta( $post ) {

  // Use nonce for verification
  $tmnfdata = get_post_meta($post->ID, 'tmnf_announcement_link', TRUE);
  wp_nonce_field( 'tmnf_meta_box_nonce', 'meta_box_nonce' ); 

  // The actual fields for data entry
  echo '<input type="text" id="tmnf_sldurl" name="tmnf_sldurl" value="'.$tmnfdata.'" size="75" />';
}

//Save Service Link Value
add_action('save_post', 'tmnf_save_announcement_details');
function tmnf_save_announcement_details($post_id){
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
      return;

if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'tmnf_meta_box_nonce' ) ) return; 

  if ( !current_user_can( 'edit_post', $post_id ) )
        return;

$tmnfdata = esc_url( $_POST['tmnf_sldurl'] );
update_post_meta($post_id, 'tmnf_announcement_link', $tmnfdata);
return $tmnfdata;  
}



add_action('do_meta_boxes', 'tmnf_announcement_image_box');

function tmnf_announcement_image_box() {
	remove_meta_box( 'postimagediv', 'announcement', 'side' );
	add_meta_box('postimagediv', __('Service Image', 'tmnf'), 'post_thumbnail_meta_box', 'announcement', 'normal', 'high');
}


// get the first image of the post Function
function tmnf_get_announcement_ico($overrides = '', $exclude_thumbnail = false)
{
    return get_posts(wp_parse_args($overrides, array(
        'numberposts' => -1,
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'order' => 'ASC',
        'exclude' => $exclude_thumbnail ? array(get_post_thumbnail_id()) : array(),
        'orderby' => 'menu_order ID'
    )));
}
?>