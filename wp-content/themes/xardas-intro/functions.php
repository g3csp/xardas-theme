<?php

load_theme_textdomain('xardas', get_stylesheet_directory().'/languages');
add_filter('show_admin_bar', '__return_false');

// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
//    wp_enqueue_script('jquery');
// }

add_action('wp_loaded', 'foo');

function foo($a)
{

}

function alert($message)
{
    echo "<script type='text/javascript'>alert('$message');</script>";
}

function navi_link($a)
{
    echo get_bloginfo('url') . '/' . $a;
}


function number_of_posts_on_archive($query)
{
    if ($query->is_archive) {
        $query->set('posts_per_page', 1000);
    }

    return $query;
}

add_filter('pre_get_posts', 'number_of_posts_on_archive');


add_filter( 'intermediate_image_sizes', '__return_empty_array' );

add_filter( 'bulk_actions-edit-post', 'misha_my_bulk_multisite_actions' );
 
function misha_my_bulk_multisite_actions( $bulk_array ) {
 
 	if( $sites = get_sites( array(
		// 'site__in' => array( 1,2,3 )
		'site__not_in' => get_current_blog_id(), // excluding current blog
		'number' => 50,
	))) {
		foreach( $sites as $site ) {
			$bulk_array['move_to_'.$site->blog_id] = 'Move to "' .$site->blogname . '"';
		}
	}
 
	return $bulk_array;
 
}

add_filter( 'handle_bulk_actions-edit-post', 'misha_bulk_action_multisite_handler', 10, 3 );
 
function misha_bulk_action_multisite_handler( $redirect, $doaction, $object_ids ) {
 
	// we need query args to display correct admin notices
	$redirect = remove_query_arg( array( 'misha_posts_moved', 'misha_blogid' ), $redirect );
 
 	// our actions begin with "move_to_", so let's check if it is a target action
	if( strpos( $doaction, "move_to_" ) === 0 ) {
		$blog_id = str_replace( "move_to_", "", $doaction );
 
		foreach ( $object_ids as $post_id ) {
 
			// get the original post object as an array
			$post = get_post( $post_id, ARRAY_A );
			// if you need to apply terms (more info below the code)
			$post_terms = wp_get_object_terms($post_id, 'category', array('fields' => 'slugs'));
			// get all the post meta
			$data = get_post_custom($post_id);
			// empty ID field, to tell WordPress to create a new post, not update an existing one
			$post['ID'] = '';
 
 
			switch_to_blog( $blog_id );
 
			// insert the post
			$inserted_post_id = wp_insert_post($post); // insert the post
			// update post terms
			wp_set_object_terms($inserted_post_id, $post_terms, 'category', false);
			// add post meta
			foreach ( $data as $key => $values) {
				// if you do not want weird redirects
				if( $key == '_wp_old_slug' ) {
					continue;
				}
				foreach ($values as $value) {
					add_post_meta( $inserted_post_id, $key, $value );
				}
			}
 
			restore_current_blog();
 
			// if you want to copy posts, comment this line
			// wp_delete_post( $post_id );
 
		}
 
 
		$redirect = add_query_arg( array(
			'misha_posts_moved' => count( $object_ids ),
			'misha_blogid' => $blog_id
		), $redirect );
 
	}
 
 
	return $redirect;
 
}

add_action( 'admin_notices', 'misha_bulk_multisite_notices' );
 
function misha_bulk_multisite_notices() {
 
	if( ! empty( $_REQUEST['misha_posts_moved'] ) ) {
 
		// because I want to add blog names to notices
		$blog = get_blog_details( $_REQUEST['misha_blogid'] );
 
		// depending on ho much posts were changed, make the message different
		printf( '<div id="message" class="updated notice is-dismissible"><p>' .
			_n( '%d post has been moved to "%s".', '%d posts have been moved to "%s".', intval( $_REQUEST['misha_posts_moved'] )
		) . '</p></div>', intval( $_REQUEST['misha_posts_moved'] ), $blog->blogname );
 
	}
 
}