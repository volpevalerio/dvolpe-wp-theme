<?php add_theme_support( 'post-thumbnails' ); ?>
<?php
//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
$gallery_labels = array(
	'name' => _x('Gallery', 'post type general name'),
	'singular_name' => _x('Gallery', 'post type singular name'),
	'add_new' => _x('Add New', 'gallery'),
	'add_new_item' => __("Add New Gallery"),
	'edit_item' => __("Edit Gallery"),
	'new_item' => __("New Gallery"),
	'view_item' => __("View Gallery"),
	'search_items' => __("Search Gallery"),
	'not_found' =>  __('No galleries found'),
	'not_found_in_trash' => __('No galleries found in Trash'), 
	'parent_item_colon' => ''
		
);
$gallery_args = array(
	'labels' => $gallery_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
	'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
); 
register_post_type('gallery', $gallery_args);
?>