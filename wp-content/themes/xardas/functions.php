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
