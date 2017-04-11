<?php


/*

How to reference these custom fields in your templates


<?php echo get_post_meta( $post->ID, 'related_page_link', true ); ?>


*/

// get case studies post ids for select box

function cmb_get_post_options( $query_args ) {

    $args1 = wp_parse_args( $query_args, array(
        'post_type' => 'case_study',
        'numberposts' => -1,
        'order'=>'ASC',
    	) 
    );

    $posts = get_posts( $args1 );

    $post_options = array( array('name'=>'Select Related','value'=>0) );
    if ( $posts ) {
        foreach ( $posts as $post ) {
                   $post_options[] = array(
                       'name' => $post->post_title,
                       'value' => $post->ID
                   );
        }
    }

    return $post_options;
}

// get clients post names

function cmb_get_client_options( $query_args ) {

    $args2 = wp_parse_args( $query_args, array(
        'post_type' => 'client',
        'numberposts' => -1,
        'order'=>'ASC',
    	) 
    );

    $posts = get_posts( $args2 );

    $post_options = array( array('name'=>'Select Related Client','value'=>0) );
    if ( $posts ) {
        foreach ( $posts as $post ) {
                   $post_options[] = array(
                       'name' => $post->post_title,
                       'value' => $post->post_title
                   );
        }
    }

    return $post_options;
}

add_filter('cmb_meta_boxes', 'cmb_tandem_metaboxes');

function cmb_tandem_metaboxes( array $meta_boxes )


{
	
	// get registered Sidebars
	
	/*$sidebar_options = array();
    $sidebars = $GLOBALS['wp_registered_sidebars'];

    foreach ( $sidebars as $sidebar ){
        $sidebar_options[] = array(
            'name'  => $sidebar['name'],
            'value' => $sidebar['id']
        );
    }*/

    // get Case Studies

    /*$args1 = array(
		'posts_per_page'   => -1,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_type'        => 'case_study',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);

    $case_studies = get_posts( $args1 );
	$case_options[] = array();
	foreach ( $case_studies as $case_study ) {
        $case_options[] = array(
            'name'  => $case_study['title'],
            'value' => $case_study['id']
        );
    }	*/
	

	// Begin Tandem meta boxes
	
	$prefix = '';

	$meta_boxes[] = array(
		'id'         => 'case_metabox',
		'title'      => 'Case Study Custom Fields',
		'pages'      => array( 'case_study', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Case Study Custom Fields',
				'desc' => 'Use these fields to set Case Study specific content items',
				'type' => 'title',
				'id' => $prefix.'story_cmb_title'
			),
			/*array(
				'name'    => 'Client Name',
				'desc'    => 'Please choose the related Client',
				'id'      => $prefix . 'client_name',
				'type'    => 'select',
				'options' => cmb_get_client_options(array(
        			'post_type' => 'client',
        			'numberposts' => -1,
    				) ),
			),	*/
			array(
				'name' => __( 'Featured', 'cmb' ),
				'desc' => __( 'Check this box if this Case Study is Featured', 'cmb' ),
				'id'   => $prefix . 'featured',
				'type' => 'checkbox',
			),
			array(
				'name'    => 'Client Link Label',
				'desc'    => 'Please enter the Label for the Client Link for this Case Study',
				'id'      => 'client_link_label',
				'type'    => 'text',
			),
			array(
				'name'    => 'Client Link',
				'desc'    => 'Please enter the URL of the Client for this Case Study',
				'id'      => 'client_link',
				'type'    => 'text',
			),
			array(
				'name'    => 'Video Embed Link',
				'desc'    => 'Please enter the URL of the Video for this Case Study',
				'id'      => 'video_link',
				'type'    => 'text',
			),
			array(
				'name'    => 'Audio Embed Link',
				'desc'    => 'Please enter the URL of the Audio for this Case Study',
				'id'      => 'audio_link',
				'type'    => 'text_url',
			),
			array(
				'name'    => 'SoundCloud Embed Link',
				'desc'    => 'Please enter the URL of the SoundCloud embed code for this Case Study',
				'id'      => 'soundcloud_link',
				'type'    => 'text_url',
			),
			/*array(
				'name' => 'Banner Link',
				'desc' => 'Please enter the banner link below ex. http://domain.com or /page-slug/',
				'id'   => 'banner-link',
				'type' => 'text',
			),*/
			
		) 
			
	);

	// metaboxes for Clients section

	$meta_boxes[] = array(
		'id'         => 'client_metabox',
		'title'      => 'Client Custom Fields',
		'pages'      => array( 'client', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Client Custom Fields',
				'desc' => 'Use these fields to set Client specific content items',
				'type' => 'title',
				'id' => $prefix.'story_cmb_title'
			),
			array(
				'name' => __( 'Has Cases', 'cmb' ),
				'desc' => __( 'Check this box if this Client has Case Studies', 'cmb' ),
				'id'   => $prefix . 'has_cases',
				'type' => 'checkbox',
			),
			/*array(
				'name'    => 'Case Study Link',
				'desc'    => 'Please enter the URL of the Case Study for this Client',
				'id'      => 'case_link',
				'type'    => 'text',
			),*/
			/*array(
				'name'    => 'Case Study Link',
				'desc'    => 'Please choose the related Case Study',
				'id'      => $prefix . 'case_select',
				'type'    => 'select',
				'options' => cmb_get_post_options(array(
        			'post_type' => 'case_study',
        			'numberposts' => -1,
    				) ),
			),	*/
		)

	);
	
	
	
    return $meta_boxes;

}