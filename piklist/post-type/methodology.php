<?php
if ( ! function_exists('methodology') ) {

// Register Custom Post Type
function methodology() {

	$labels = array(
		'name'                => _x( 'Methodologies', 'Post Type General Name', 'roots' ),
		'singular_name'       => _x( 'Methodology', 'Post Type Singular Name', 'roots' ),
		'menu_name'           => __( 'Methodologies', 'roots' ),
		'name_admin_bar'      => __( 'Methodology', 'roots' ),
		'parent_item_colon'   => __( 'Parent Methodology:', 'roots' ),
		'all_items'           => __( 'All Methodologies', 'roots' ),
		'add_new_item'        => __( 'Add New Methodology', 'roots' ),
		'add_new'             => __( 'Add New', 'roots' ),
		'new_item'            => __( 'New Methodology', 'roots' ),
		'edit_item'           => __( 'Edit Methodology', 'roots' ),
		'update_item'         => __( 'Update Methodology', 'roots' ),
		'view_item'           => __( 'View Methodology', 'roots' ),
		'search_items'        => __( 'Search Methodology', 'roots' ),
		'not_found'           => __( 'Not found', 'roots' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
	);
	$rewrite = array(
		'slug'                => 'methodology',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Methodology', 'roots' ),
		'description'         => __( 'Methodology Description', 'roots' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag', 'guide' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-grid-view',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'methodology', $args );

}
add_action( 'init', 'methodology', 0 );

}
