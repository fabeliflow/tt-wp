<?php
register_nav_menus( array(
	'primary'   => 'Primary',
	'legal-links' => __( 'Legal Links' ),
) );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'capability'	=> 'edit_themes'
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Social Media',
        'post_id'       => 'social-media',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'edit_themes'
    ));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Footer',
        'post_id'       => 'footer',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'edit_themes'
	));
	
}

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt($field) {
    $text = get_field($field);
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $excerpt_length = apply_filters('excerpt_length', 100);
    return wp_trim_words( $text, $excerpt_length );
}

function my_alm_query_args_searchwp($args){   
	$engine = 'default'; // default = default
	$args = apply_filters('alm_searchwp', $args, $engine); // Make call to alm_searchwp filter
	return $args;
}

add_filter( 'alm_query_args_searchwp', 'my_alm_query_args_searchwp');

// Add styles and scripts
function wpb_adding_styles_scripts() {
	
	// general styles
	wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CNews+Cycle:400,700' );

	wp_register_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );

	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	wp_register_style( 'simplebar', get_template_directory_uri() . '/vendor/simplebar/simplebar.css' );

	wp_register_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

	wp_register_style( 'swiper', 'https://unpkg.com/swiper/css/swiper.css' );

	wp_register_style( 'main', get_template_directory_uri() . '/css/main.css',  array('google-fonts', 'font-awesome', 'bootstrap', 'simplebar', 'slick', 'swiper') );
	wp_enqueue_style( 'main' );

	// general scripts
	wp_register_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);

	wp_register_script('swiper', 'https://unpkg.com/swiper/js/swiper.min.js', null, null, true);

	wp_register_script('mg-glitch', get_template_directory_uri() . '/vendor/mod/mg-glitch/mgGlitch.min.js',  array('jquery'), null, true);

	wp_register_script('simplebar', get_template_directory_uri() . '/vendor/simplebar/simplebar.min.js', null, null, true);
	
	wp_register_script('mousewheel', get_template_directory_uri() . '/vendor/mousewheel/jquery.mousewheel.min.js', array('jquery'), null, true);

	wp_register_script('particles', get_template_directory_uri() . '/vendor/particles/particles.min.js', null, null, true);

	wp_register_script('header', get_template_directory_uri() . '/js/minified/header.min.js', array('jquery', 'swiper'), null, true);
	wp_enqueue_script('header');

	if (is_page('the-team')) {

		wp_register_script('team', get_template_directory_uri() . '/js/minified/team.min.js', array('jquery', 'swiper', 'mg-glitch', 'simplebar'), null, true);
		wp_enqueue_script('team');

	} elseif (is_front_page()) {

		wp_register_script('home', get_template_directory_uri() . '/js/minified/home.min.js', array('jquery', 'mousewheel', 'swiper', 'particles'), null, true);
		wp_enqueue_script('home');

	} elseif (is_single()) {

		wp_register_script('article', get_template_directory_uri() . '/js/minified/article.min.js', array('jquery', 'swiper'), null, true);
		wp_enqueue_script('article');
	}
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_styles_scripts' );

// extend Public Post Preview link time
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
 return 60 * 60 * 24 * 14; // 14 days
}

function wp_generate_menu($menu_name) {
	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	 
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	 
		foreach ( (array) $menu_items as $key => $menu_item ) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= '<div class="tt-menu__item swiper-slide"><a href="' . $url . '"><span class="tt-menu__item-head">' . $title . '</span><span class="tt-menu__item-title">' . $title . '</span></a></div>';
		}
		$menu_list .= '</ul>';
	} else {
		$menu_list = '<div class="tt-menu__item swiper-slide">Menu "' . $menu_name . '" not defined.</div>';
	}
	return $menu_list;
}

?>