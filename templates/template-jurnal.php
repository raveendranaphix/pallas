<?php
/*
	Template Name: Jurnal page layout
	Template Post Type: page
*/
get_header();

	// Template parts
	get_template_part( 'template-parts/jurnal/content', 'intro' );

	foreach ( range( 1, 4 ) as $index ) {
		get_template_part( 'template-parts/jurnal/content', "section_{$index}" );
	}

get_footer();
