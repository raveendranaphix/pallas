<?php
/*
	Template Name: Minimal page layout
	Template Post Type: page
*/
get_header();

	get_template_part( 'template-parts/hello/minimal/content', 'intro' );
	get_template_part( 'template-parts/hello/minimal/content', 'section_1' );

get_footer();
