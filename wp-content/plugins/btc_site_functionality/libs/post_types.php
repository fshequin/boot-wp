<?php

// Register Custom Post Type: Case Studies
function btc_register_custom_post_types() {

	$labels1 = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'btc_domain' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'btc_domain' ),
		'menu_name'           => __( 'Case Studies', 'btc_domain' ),
		'parent_item_colon'   => __( 'Parent Case Study:', 'btc_domain' ),
		'all_items'           => __( 'All Case Studies', 'btc_domain' ),
		'view_item'           => __( 'View Case Study', 'btc_domain' ),
		'add_new_item'        => __( 'Add New Case Study', 'btc_domain' ),
		'add_new'             => __( 'Add New', 'btc_domain' ),
		'edit_item'           => __( 'Edit Case Study', 'btc_domain' ),
		'update_item'         => __( 'Update Case Study', 'btc_domain' ),
		'search_items'        => __( 'Search Case Studies', 'btc_domain' ),
		'not_found'           => __( 'Not found', 'btc_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'btc_domain' ),
	);
	$args1 = array(
		'label'               => __( 'case_study', 'btc_domain' ),
		'description'         => __( 'Case Study', 'btc_domain' ),
		'labels'              => $labels1,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'post-formats', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-images-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'case_study', $args1 );

	// custom post type clients

	$labels2 = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'btc_domain' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'btc_domain' ),
		'menu_name'           => __( 'Clients', 'btc_domain' ),
		'parent_item_colon'   => __( 'Parent Client:', 'btc_domain' ),
		'all_items'           => __( 'All Clients', 'btc_domain' ),
		'view_item'           => __( 'View Client', 'btc_domain' ),
		'add_new_item'        => __( 'Add New Client', 'btc_domain' ),
		'add_new'             => __( 'Add New', 'btc_domain' ),
		'edit_item'           => __( 'Edit Client', 'btc_domain' ),
		'update_item'         => __( 'Update Client', 'btc_domain' ),
		'search_items'        => __( 'Search Client', 'btc_domain' ),
		'not_found'           => __( 'Not found', 'btc_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'btc_domain' ),
	);
	$args2 = array(
		'label'               => __( 'client', 'btc_domain' ),
		'description'         => __( 'Clients', 'btc_domain' ),
		'labels'              => $labels2,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'client_category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-universal-access',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'client', $args2 );

	// people post type

	$labels3 = array(
		'name'                => _x( 'People', 'Post Type General Name', 'tandem_domain' ),
		'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'tandem_domain' ),
		'menu_name'           => __( 'People', 'tandem_domain' ),
		'parent_item_colon'   => __( 'Parent Person:', 'tandem_domain' ),
		'all_items'           => __( 'All people', 'tandem_domain' ),
		'view_item'           => __( 'View Person', 'tandem_domain' ),
		'add_new_item'        => __( 'Add New Person', 'tandem_domain' ),
		'add_new'             => __( 'Add New', 'tandem_domain' ),
		'edit_item'           => __( 'Edit Person', 'tandem_domain' ),
		'update_item'         => __( 'Update Person', 'tandem_domain' ),
		'search_items'        => __( 'Search Person', 'tandem_domain' ),
		'not_found'           => __( 'Not found', 'tandem_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tandem_domain' ),
	);
	$args3 = array(
		'label'               => __( 'people', 'tandem_domain' ),
		'description'         => __( 'tandem people', 'tandem_domain' ),
		'labels'              => $labels3,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'people', $args3 );


}

// Hook into the 'init' action
add_action( 'init', 'btc_register_custom_post_types', 0 );