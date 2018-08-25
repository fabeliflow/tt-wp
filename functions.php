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

	wp_register_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css' );

	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	wp_register_style( 'perfect-scrollbar', get_template_directory_uri() . '/vendor/perfect-scrollbar/css/perfect-scrollbar.css' );

	wp_register_style( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/css/magnific-popup.css' );

	wp_register_style( 'slick', get_template_directory_uri() . '/vendor/slick/slick.css' );

	wp_register_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.1/css/swiper.css' );

	wp_register_style( 'main', get_template_directory_uri() . '/css/main.css',  array('google-fonts', 'font-awesome', 'bootstrap', 'perfect-scrollbar', 'magnific-popup', 'slick', 'swiper') );
	wp_enqueue_style( 'main' );

	// general scripts
	wp_register_script('slick', get_template_directory_uri() . '/vendor/slick/slick.min.js',  array('jquery'), null, true);

	wp_register_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.1/js/swiper.min.js', null, null, true);

	wp_register_script('mg-glitch', get_template_directory_uri() . '/vendor/mg-glitch/mgGlitch.min.js',  array('jquery'), null, true);

	wp_register_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/js/jquery.magnific-popup.min.js',  array('jquery'), null, true);

	wp_register_script('perfect-scrollbar', get_template_directory_uri() . '/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js', null, null, true);
	
	wp_register_script('mousewheel', get_template_directory_uri() . '/vendor/mousewheel/jquery.mousewheel.min.js', array('jquery'), null, true);

	wp_register_script('particles', get_template_directory_uri() . '/vendor/particles/particles.min.js', null, null, true);

	wp_register_script('header', get_template_directory_uri() . '/js/minified/header.min.js', array('jquery', 'particles'), null, true);
	wp_enqueue_script('header');

	if (is_page('about')) {

		wp_register_script('about', get_template_directory_uri() . '/js/minified/about.min.js', array('jquery', 'swiper', 'mg-glitch', 'perfect-scrollbar'), null, true);
		wp_enqueue_script('about');

	} elseif (is_front_page()) {

		wp_register_script('home', get_template_directory_uri() . '/js/minified/home.min.js', array('jquery', 'perfect-scrollbar', 'mousewheel', 'slick', 'particles'), null, true);
		wp_enqueue_script('home');

	} elseif (is_single()) {

		wp_register_script('article', get_template_directory_uri() . '/js/minified/article.min.js', array('jquery', 'magnific-popup', 'slick'), null, true);
		wp_enqueue_script('article');
	}
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_styles_scripts' );

?>