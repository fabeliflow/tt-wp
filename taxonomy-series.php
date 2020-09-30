<?php
/*
Template Name: Taxonomy Series
*/

get_header();

$term = get_queried_object();

$custom_search = (isset($_GET['custom_search'])) ? $_GET['custom_search'] : '';

$background = get_field('taxonomy_series_background', $term);
$background_position = get_field('taxonomy_series_background_position', $term);
$logo = get_field('taxonomy_series_logo', $term);
$name = $term->name;
$description = $term->description;
?>

<body>

    <div class="tt-masthead tt-masthead--overlay" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
        <div class="tt-masthead__wrapper">
            <img class="tt-masthead__logo" src="<?php echo $logo ?>" \>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 tt-cat__descr">
                <div class="tt-header--center__wrapper">
                    <div class="tt-header tt-header--center tt-series__header">
                        <span>Series</span>
                        <h1><?php echo $name ?></h1>
                    </div>
                </div>
                <p><?php echo $description ?></p>
            </div>
        </div>
    </div>

    <form class="tt-search-form" method="get">
        <?php echo wp_generate_tag_select($_GET['article_tag']); ?>
        <div class="tt-search-bar__cont">
            <input class="tt-search-bar" type="text" name="custom_search" id="custom_search" value="<?php echo esc_attr($custom_search); ?>" placeholder="&#xf002;" />
            <input class="tt-btn tt-btn--fill" type="submit" name="submit" value="search" />
        </div>
    </form>

    <section class="tt-cat__cont">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">

                    <?php
                    $current_page = get_queried_object();
                    $tax = $current_page->taxonomy;
                    $tax_term = $current_page->slug;
                    $tag = $_GET['article_tag'];
                    echo do_shortcode('[ajax_load_more id="searchwp" container_type="ul" css_classes="tt-cat__cards" post_type="post" posts_per_page="6" search="' . $custom_search . '" transition_container="false" tag="' . $tag . '" images_loaded="true" taxonomy="' . $tax . '" taxonomy_terms="' . $tax_term . '" taxonomy_operator="IN"]'); ?>

                </div>
            </div>
        </div>

    </section>

    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>