<?php

//add_action( 'init', 'add_custom_taxonomies', 0 );


function get_video_thumbnail($url, $size = 'small'){
    $image_url = parse_url($url);
    if($image_url['host'] == 'www.youtube.com' || $image_url['host'] == 'youtube.com'){
        $array = explode("&", $image_url['query']);
        return "http://img.youtube.com/vi/".substr($array[0], 2)."/0.jpg";
    } else if($image_url['host'] == 'www.vimeo.com' || $image_url['host'] == 'vimeo.com'){
    	$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".substr($image_url['path'], 1).".php"));
        return $hash[0]["thumbnail_".$size];
    }
}



function is_subpage() {
    global $post;                              // load details about this page

    if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
        return $post->post_parent;             // return the ID of the parent post

    } 
    
    else {                                   // there is no parent so ...
        return false;                          // ... the answer to the question is false
    }
}

function get_department() {
	global $post;     
	
    
    if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;             // return the Slug of the parent post

    } else if ( is_category() ) {
	    
	    $category = get_category( get_query_var( 'cat' ) );
  		$category_id = $category->cat_ID;
		$parent = $category->category_parent;
		
		if ($parent == 19) return 'dir4tv';
		   	
    } else if ('people' == get_post_type()) {
		return 'dir4films';
	}
    
    return false;
}

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'reel-thumbnail', '620', '350', true );
add_image_size( 'team-thumbnail', '210', '260', true );

add_filter( 'metronet_reorder_post_types', 'slug_set_reorder' );
function slug_set_reorder( $post_types ) {
    $post_types = array( 'my_custom_post_type', 'my_other_post_type' );
    return $post_types;
}

add_filter( 'pre_get_posts', 'tgm_cpt_search' );
/**
 * This function modifies the main WordPress query to include an array of post types instead of the default 'post' post type.
 *
 * @param mixed $query The original query
 * @return $query The amended query
 */
function tgm_cpt_search( $query ) {
    if ( $query->is_search )
        $query->set( 'post_type', array( 'post', 'movies', 'products', 'portfolio' ) );
    return $query;
};

/******* edit by orange *********/
function custom_excerpt_length( $length ) {
	return 5;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<div class="more"><a href="'. get_permalink($post->ID) .'"class="more"><span>more</span></a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');


//short title
function short_title() {
$mytitleorig = get_the_title();
$html_dedode_title = html_entity_decode($mytitleorig); 

$limit = "49";
$pad="...";

if(strlen($html_dedode_title) >= ($limit+3)) {
$html_dedode_title = substr($html_dedode_title, 0, $limit) . $pad; }
$title = htmlentities($html_dedode_title);
echo $title;
}


if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'BackgroundSlider',
        'before_widget'	=> '',
        'after_widget'	=> '',
        'before_title'	=> '',
        'after_title'	=> '',
    ));	
};
include('backgroundslider.php');
add_action( 'widgets_init', 'background_load' ); 
function background_load() {
	register_widget( 'background' );
};
