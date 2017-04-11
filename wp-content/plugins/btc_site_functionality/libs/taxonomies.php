<?php

// Register Custom Taxonomy
function btc_register_taxonomies() {

	$labels1 = array(
		'name'                       => _x( 'Case Categories', 'Taxonomy General Name', 'btc_domain' ),
		'singular_name'              => _x( 'Case Category', 'Taxonomy Singular Name', 'btc_domain' ),
		'menu_name'                  => __( 'Case Categories', 'btc_domain' ),
		'all_items'                  => __( 'All Categories', 'btc_domain' ),
		'parent_item'                => __( 'Parent Category', 'btc_domain' ),
		'parent_item_colon'          => __( 'Parent Category:', 'btc_domain' ),
		'new_item_name'              => __( 'New Category Name', 'btc_domain' ),
		'add_new_item'               => __( 'Add New Category', 'btc_domain' ),
		'edit_item'                  => __( 'Edit Category', 'btc_domain' ),
		'update_item'                => __( 'Update Category', 'btc_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'btc_domain' ),
		'search_items'               => __( 'Search Categories', 'btc_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'btc_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Categories', 'btc_domain' ),
		'not_found'                  => __( 'Not Found', 'btc_domain' ),
	);
	$args1 = array(
		'labels'                     => $labels1,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'case_category', array( 'case_study' ), $args1 );
	
	// custom taxonomy for Client Names

	$labels2 = array(
		'name'                       => _x( 'Client Names', 'Taxonomy General Name', 'btc_domain' ),
		'singular_name'              => _x( 'Client Name', 'Taxonomy Singular Name', 'btc_domain' ),
		'menu_name'                  => __( 'Client Names', 'btc_domain' ),
		'all_items'                  => __( 'All Client Names', 'btc_domain' ),
		'parent_item'                => __( 'Parent Client Name', 'btc_domain' ),
		'parent_item_colon'          => __( 'Parent Client Name:', 'btc_domain' ),
		'new_item_name'              => __( 'New Client Name Name', 'btc_domain' ),
		'add_new_item'               => __( 'Add New Client Name', 'btc_domain' ),
		'edit_item'                  => __( 'Edit Client Name', 'btc_domain' ),
		'update_item'                => __( 'Update Client Name', 'btc_domain' ),
		'separate_items_with_commas' => __( 'Separate Client Names with commas', 'btc_domain' ),
		'search_items'               => __( 'Search Client Names', 'btc_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Client Names', 'btc_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Client Names', 'btc_domain' ),
		'not_found'                  => __( 'Not Found', 'btc_domain' ),
	);
	$args2 = array(
		'labels'                     => $labels2,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'         		 => true,
		'rewrite'           		 => array( 'slug' => 'client_name' ),
	);
	register_taxonomy( 'client_name', array( 'case_study' ), $args2 );


	// custom taxonomy client category

	$labels3 = array(
		'name'                       => _x( 'Client Categories', 'Taxonomy General Name', 'btc_domain' ),
		'singular_name'              => _x( 'Client Category', 'Taxonomy Singular Name', 'btc_domain' ),
		'menu_name'                  => __( 'Client Categories', 'btc_domain' ),
		'all_items'                  => __( 'All Categories', 'btc_domain' ),
		'parent_item'                => __( 'Parent Category', 'btc_domain' ),
		'parent_item_colon'          => __( 'Parent Category:', 'btc_domain' ),
		'new_item_name'              => __( 'New Category Name', 'btc_domain' ),
		'add_new_item'               => __( 'Add New Category', 'btc_domain' ),
		'edit_item'                  => __( 'Edit Category', 'btc_domain' ),
		'update_item'                => __( 'Update Category', 'btc_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'btc_domain' ),
		'search_items'               => __( 'Search Categories', 'btc_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'btc_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Categories', 'btc_domain' ),
		'not_found'                  => __( 'Not Found', 'btc_domain' ),
	);
	$args3 = array(
		'labels'                     => $labels3,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'client_category', array( 'client' ), $args3 );

}

// Hook into the 'init' action
add_action( 'init', 'btc_register_taxonomies', 0 );