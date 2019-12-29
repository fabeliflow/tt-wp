<?php
/*
Template Name: Category
*/

get_header();


// get the current taxonomy term
$term = get_queried_object();

$custom_search = (isset($_GET['custom_search'])) ? $_GET['custom_search'] : ''; // Get 'custom_search' querystring param


// vars
$background = get_field('category_background', $term);
$background_position = get_field('category_background_position', $term);
$logo_svg = get_field('category_logo_svg', $term);
$description = $term->category_description;
?>

<body class="tt-cat">

    <!-- Category Masthead -->
    <div class="tt-masthead tt-masthead--overlay"
        style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
        <div class="tt-masthead__logo-wrapper">
            <div class="tt-masthead__logo"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo_svg ?>.svg');">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 tt-cat__descr">
                <div class="tt-header tt-header--center">
                    <span>The Story</span>
                    <h1>The Story</h1>
                </div>
                <p><?php echo $description ?></p>
            </div>
        </div>
    </div>

    <form class="tt-search-bar" method="get">
        <input type="text" name="custom_search" id="custom_search" value="<?php echo esc_attr( $custom_search ); ?>"
            placeholder="&#xf002; Search" />
    </form>

    <section class="tt-cat__cont">

        <?php
        $current_page = get_queried_object();
        $category     = $current_page->slug;
        echo do_shortcode('[ajax_load_more id="searchwp" container_type="ul" css_classes="tt-cat__cards" post_type="post" posts_per_page="6" category="' . $category . '" search="' . $custom_search . '" transition_container="false" images_loaded="true" button_label="More Articles" button_loading_label="Loading Articles"]'); ?>

    </section>

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>