<?php


/* CONFIGURATION PAGE */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Hell"s Theme Options',
		'menu_title'    => 'Hell"s Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}



/* CUSTOM POST TYPES */

// Molhos
require get_template_directory() . '/inc/cpts/cpt-molhos.php';

// Hamburguers
require get_template_directory() . '/inc/cpts/cpt-hamburguers.php';

