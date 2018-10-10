<?php
//----------------------------------------------
//------------------------create custom taxonomy
//----------------------------------------------
add_action( 'init', 'jss_create_gallery_taxonomies', 0);
 
function jss_create_gallery_taxonomies(){
	register_taxonomy(
		'phototype', 'gallery', 
		array(
			'hierarchical'=> true, 
			'label' => 'Photo Types',
			'singular_label' => 'Photo Type',
			'rewrite' => true
		)
	);	
}
function zm_get_backend_preview_thumb($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
        return $post_thumbnail_img[0];
    }
}

function zm_preview_thumb_column_head($defaults) {
    $defaults['featured_image'] = 'Image';
    return $defaults;
}
add_filter('manage_posts_columns', 'zm_preview_thumb_column_head');

function zm_preview_thumb_column($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = zm_get_backend_preview_thumb($post_ID);
            if ($post_featured_image) {
                echo '<img src="' . $post_featured_image . '" />';
            }
    }
}
add_action('manage_posts_custom_column', 'zm_preview_thumb_column', 10, 2);
?>

