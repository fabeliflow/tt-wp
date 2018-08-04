<?php
register_nav_menus( array(
	'primary' => 'Primary'
) );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Social Media',
        'post_id'       => 'social-media',
		'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Footer',
        'post_id'       => 'footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

?>