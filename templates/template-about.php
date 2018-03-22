<?php
/*
	Template Name: About page layout
	Template Post Type: page
*/
get_header();

	// Page parts
	get_template_part( 'template-parts/about/content', 'top' );
	get_template_part( 'template-parts/about/content', 'section_1' );
	get_template_part( 'template-parts/about/content', 'section_2' );

get_footer();
