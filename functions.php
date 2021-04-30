<?php
register_nav_menus(array(
	'primary'   => 'Primary',
	'legal-links' => __('Legal Links'),
));

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

function my_alm_query_args_searchwp($args)
{
	$engine = 'default';
	$args = apply_filters('alm_searchwp', $args, $engine); // Make call to alm_searchwp filter
	return $args;
}

add_filter('alm_query_args_searchwp', 'my_alm_query_args_searchwp');

// add styles and scripts
function wpb_adding_styles_scripts()
{
	// general styles
	wp_register_style('adobe-typekit', 'https://use.typekit.net/qwx8ago.css');

	wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css');

	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');

	wp_register_style('simplebar', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.0/dist/simplebar.min.css');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css',  array('adobe-typekit', 'font-awesome', 'bootstrap', 'simplebar'));
	wp_enqueue_style('main');

	// general scripts
	wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', null, null, true);

	wp_register_script('body-scroll-lock',  get_template_directory_uri() . '/vendor/body-scroll-lock/lib/bodyScrollLock.min.js', null, null, true);

	wp_register_script('simplebar', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.0/dist/simplebar.min.js', null, null, true);

	wp_register_script('header', get_template_directory_uri() . '/js/minified/header.min.js', array('jquery', 'bootstrap', 'body-scroll-lock', 'simplebar'), null, true);
	wp_enqueue_script('header');

	if (is_front_page() || is_page('Series')) {
		wp_register_script('particles', 'https://cdn.jsdelivr.net/npm/particles.js/particles.min.js', null, null, true);

		wp_register_script('starfield', get_template_directory_uri() . '/js/minified/starfield.min.js', array('jquery', 'particles'), null, true);
		wp_enqueue_script('starfield');
	}

	if (is_front_page()) {
		wp_register_script('home', get_template_directory_uri() . '/js/minified/home.min.js', array('jquery', 'particles', 'swiper'), null, true);
		wp_enqueue_script('home');
		
	} elseif (is_single()) {
		wp_register_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
		wp_enqueue_style('swiper');

		wp_register_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, null, true);

		wp_register_style('lightgallery', get_template_directory_uri() . '/vendor/lightgallery/dist/css/lightgallery.min.css');
		wp_enqueue_style('lightgallery');

		wp_register_script('lg-fullscreen', get_template_directory_uri() . '/vendor/lightgallery/modules/lg-fullscreen.min.js', array('jquery'), null, true);

		wp_register_script('lg-zoom', get_template_directory_uri() . '/vendor/lightgallery/modules/lg-zoom.min.js', array('jquery'), null, true);

		wp_register_script('lightgallery', get_template_directory_uri() . '/vendor/lightgallery/dist/js/lightgallery.min.js', array('jquery'), null, true);

		wp_register_script('article', get_template_directory_uri() . '/js/minified/article.min.js', array('jquery', 'lightgallery', 'lg-fullscreen', 'lg-zoom', 'swiper'), null, true);
		wp_enqueue_script('article');
	}
}

add_action('wp_enqueue_scripts', 'wpb_adding_styles_scripts');

add_filter('404_template', 'custom_redirect_to_category');

add_filter('alm_display_results', function () {
	return '{total_posts} article(s) found';
});

add_filter('alm_no_results_text', function () {
	return 'These aren\'t the articles you\'re looking for';
});

add_filter('searchwp\swp_query\mods', function ($mods, $args) {
	foreach ($args['swp_query']->engine->get_sources() as $source) {
		$flag = 'post' . SEARCHWP_SEPARATOR;
		if ('post.' !== substr($source->get_name(), 0, strlen($flag))) {
			continue;
		}

		$mod = new \SearchWP\Mod($source);

		$mod->order_by(function ($mod) {
			return $mod->get_local_table_alias() . '.post_date';
		}, 'DESC', 1);

		$mods[] = $mod;
	}

	return $mods;
}, 999, 2);

function custom_redirect_to_category($template)
{

	if (!is_404()) {
		return $template;
	}

	global $wp_rewrite;
	global $wp_query;

	if ('/%category%/%postname%/' !== $wp_rewrite->permalink_structure) {
		return $template;
	}

	if (!$post = get_page_by_path($wp_query->query['category_name'], OBJECT, 'post')) {
		return $template;
	}

	$permalink = get_permalink($post->ID);

	wp_redirect($permalink, 301);
	exit;
}

// extend Public Post Preview link time
add_filter('ppp_nonce_life', 'my_nonce_life');
function my_nonce_life()
{
	return 60 * 60 * 24 * 14; // 14 days
}

function wp_generate_menu($menu_name)
{
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		if ($menu_name === 'primary') {
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= '<li class="tt-menu__item"><a href="' . $url . '"><span>' . $title . '</span><span>' . $title . '</span></a></li>';
			}
		} else {
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= '<li class="tt-menu__item"><a href="' . $url . '"><span>' . $title . '</span></a></li>';
			}
		}
	}
	return $menu_list;
}

function wp_generate_tag_select($selected)
{
	$tags = get_tags();
	$tag_select = '<select class="form-select" name="article_tag">';
	$tag_select .= '<option value="">Any Tag</option>';
	foreach ($tags as $tag) {
		if ($selected == $tag->slug) {
			$tag_select .= "<option selected value='{$tag->slug}'>$tag->name</option>";
		} else {
			$tag_select .= "<option value='{$tag->slug}'>$tag->name</option>";
		}
	}
	$tag_select .= '</select>';

	return $tag_select;
}

function wp_generate_author_select($selected)
{
	$authors = get_users();
	$author_select = '<select class="form-select" name="article_author">';
	$author_select .= '<option value="">Any Author</option>';
	foreach ($authors as $author) {
		if ($selected == $author->ID) {
			$author_select .= "<option selected value='{$author->ID}'>$author->display_name</option>";
		} else {
			$author_select .= "<option value='{$author->ID}'>$author->display_name</option>";
		}
	}
	$author_select .= '</select>';

	return $author_select;
}
