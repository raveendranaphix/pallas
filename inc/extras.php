<?php

// Logo URL
function pallas_get_logo_url() {

	// Get the image ID
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	return ( isset( $logo[0] ) ? $logo[0] : '' );
}

// Check home
