<?php
/*
Template Name: Category
*/

get_header();

$term = get_queried_object();

$custom_search = (isset($_GET['custom_search'])) ? $_GET['custom_search'] : '';

$background = get_field('category_background', $term);
$background_position = get_field('category_background_position', $term);
$color = get_field('category_color', $term);
$name = $term->name;
$description = $term->description;
$author = $_GET['article_author'];
$tag = $_GET['article_tag'];
?>

<div class="tt-category">

    <div class="tt-masthead tt-masthead--overlay" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
        <div class="tt-masthead__wrapper">
            <div style="--category-color:<?php the_field('category_color', $term); ?>;" class="tt-header tt-header--center">
                <span><?php echo $name ?></span>
                <h1 class="tt-header--center__no-border"><?php echo $name ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-6 tt-cat__descr">
                <div class="tt-header--center__wrapper">
                    <div class="tt-header tt-header--center tt-category__header" style="--category-color:<?php echo $color ?>;">
                        <span>The Story</span>
                        <h2>The Story</h2>
                    </div>
                </div>
                <p><?php echo $description ?></p>

                <form class="tt-search-form" method="get">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Author</label>
                        <?php echo wp_generate_author_select($author); ?>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect02">Tag</label>
                        <?php echo wp_generate_tag_select($tag); ?>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="custom_search" id="custom_search" value="<?php echo esc_attr($custom_search); ?>" placeholder="Find Article" aria-label="Find Article">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <section class="tt-cat__cont">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-xl-10">

                    <div class="alm-results-text"></div>

                    <?php
                    $current_page = get_queried_object();
                    $category     = $current_page->slug;
                    echo do_shortcode('[ajax_load_more id="searchwp" container_type="ul" css_classes="tt-cat__cards" post_type="post" posts_per_page="6" category="' . $category . '" search="' . $custom_search . '" transition_container="false" author="' . $author . '" tag="' . $tag . '" images_loaded="true"]'); ?>

                </div>
            </div>
        </div>

    </section>

    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>