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

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt($field) {
    $text = get_field($field);
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $excerpt_length = apply_filters('excerpt_length', 40);
    return wp_trim_words( $text, $excerpt_length );
  }

?>