<?php
add_theme_support( 'post-thumbnails' ); 

function codex_custom_init() {
	$labels = array(
			'name' => _x('Banners', 'post type general name'),
		    'singular_name' => _x('Banners', 'post type singular name'),
		    'add_new' => _x('Add New', 'banners'),
		    'add_new_item' => __("Add New Gallery"),
		    'edit_item' => __("Edit Banner"),
		    'new_item' => __("New Banner"),
		    'view_item' => __("View Banner"),
		    'search_items' => __("Search Banner"),
		    'not_found' =>  __('No banner found'),
		    'not_found_in_trash' => __('No banner found in Trash'), 
		    'parent_item_colon' => '',
		);
    $args = array(
		'public' => true,
		'labels'  => $labels,
		'menu_position' => 5,
		'supports'           => array('title', 'editor', 'thumbnail')
    );


  //   $args = array(
		// 'public' => true,
		// 'label'  => 'Banner',
		// 'menu_position' => 5,
		// 'supports' => array('title', 'thumbnail')
  //   );

    register_post_type( 'banner', $args );

    $args = array(
		'public' => true,
		'label'  => 'Galeria',
		'menu_position' => 5,
		'supports' => array('title', 'thumbnail', 'excerpt')
    );
    register_post_type( 'galeria', $args );
}
add_action( 'init', 'codex_custom_init' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function is_page_on($id){
	if($id == 'home'){
		$is = (is_home())? 'on active':'off';
	}else{
		if(is_page($id)){
			$is = "on active";
		}else{
			$is = "off";
		}
	}
	

	echo $is;
}

add_image_size( 'home-articles', 365, 195, array( 'center', 'center' ) );