<?php

// Logo URL
function pallas_get_logo_url() {

	// Get the image ID
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	return ( isset( $logo[0] ) ? $logo[0] : '' );
}

// Check home
function pallas_is_homepage() {
	return ( is_home() || is_front_page() );
}

// Social links
function pallas_social_links() {
	return  array(
		array(
			'name'     => 'facebook',
			'label'    => __( 'Facebook', 'pallas' ),
			'title'    => 'facebook',
			'icon_hex' => '&#xf09a;'
		),

		array(
			'name'     => 'twitter',
			'label'    => __( 'Twitter', 'pallas' ),
			'title'    => 'twitter',
			'icon_hex' => '&#xf099;'
		),
		array(
			'name'     => 'github',
			'label'    => __( 'GitHub', 'pallas' ),
			'title'    => 'github',
			'icon_hex' => '&#xf09b;'
		),
		array(
			'name'     => 'google_plus',
			'label'    => __( 'Google +', 'pallas' ),
			'title'    => 'google +',
			'icon_hex' => '&#xf0d5;'
		),
		array(
			'name'     => 'linkedin',
			'label'    => __( 'LinkedIn', 'pallas' ),
			'title'    => 'linkedin',
			'icon_hex' => '&#xf0d5;'
		),
	);
}

// Social links
function pallas_contact_info() {
	return  array(
		array(
			'name'     => 'email',
			'label'    => __( 'Email address', 'pallas' ),
			'title'    => 'Email',
			'icon_hex' => '&#xf1d8;',
			'desc' => __( 'Your description goes here.' ),
			'type' => 'text',
		),
		array(
			'name'     => 'phone',
			'label'    => __( 'Phone', 'pallas' ),
			'title'    => 'Phone',
			'icon_hex' => '&#xf095;',
			'desc' => __( 'Your description goes here.' ),
			'type' => 'text',
		),
		array(
			'name'     => 'address',
			'label'    => __( 'Full address', 'pallas' ),
			'title'    => 'Address',
			'icon_hex' => '&#xf041;',
			'desc' => __( 'Your address description goes here.' ),
			'type' => 'textarea',
		),
	);
}

// Enable excerpt for pages
add_post_type_support( 'page', 'excerpt' );

// Get the members
function pallas_get_members() {
	$args = array(
		'posts_per_page' => 4,
		'post_type'      => 'pl_member',
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'desc',
	);

	// Query
	$member_query = new WP_Query( $args );

	return $member_query->have_posts() ? $member_query : null;
}
