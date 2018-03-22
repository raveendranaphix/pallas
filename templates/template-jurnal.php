<?php
/*
	Template Name: Jurnal page layout
	Template Post Type: page
*/
get_header();

	// Page parts
	get_template_part( 'template-parts/jurnal/content', 'intro' );

	foreach ( range( 1, 4 ) as $index ) {
		set_query_var( 'section_index', $index );
		get_template_part( 'template-parts/jurnal/content', 'section' );
	}

get_footer();
