<?php
/*
	Template Name: Home page layout
	Template Post Type: page
*/
get_header();

	// Page parts
	get_template_part( 'template-parts/home/content', 'intro' );
	get_template_part( 'template-parts/home/content', 'section_1' );
	get_template_part( 'template-parts/home/content', 'section_2' );
	get_template_part( 'template-parts/home/content', 'section_3' );
	get_template_part( 'template-parts/home/content', 'section_4' );

get_footer();
