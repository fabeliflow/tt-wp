<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<div class="tt-home">

    <section class="tt-masthead-with-content tt-masthead--overlay" style="background-image: url('<?php echo the_field('description_background'); ?>'); background-position: <?php echo the_field('description_background_position'); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center">
                            <span>Tatooine Times</span>
                            <h1><?php the_field('description_title'); ?></h1>
                        </div>
                    </div>
                    <?php the_field('description'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php

    $categories = get_categories(array(
        'orderby'    => 'name',
        'order' => 'ASC',
        'orderby' => 'meta_value',
        'meta_query' => array(
            array('key' => 'category_order')
        ),
        'hide_empty' => false,
    ));

    foreach ($categories as $category) :
        $id = $category->term_id;
        $name = $category->name;
        $color = get_field('category_color', $category);
        $link = get_category_link($category);
        $link_label = get_field('category_link_label', $category);
    ?>

        <?php
        $recent_posts = get_posts(array(
            'category' => $id,
            'showposts' => 3,
            'post_status' => 'publish'
        ));
        ?>

        <?php if ($recent_posts) : ?>

            <section class="tt-home__section tt-home__articles">



                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col col-xl-10">

                            <div class="tt-header--center__wrapper">
                                <div style="--category-color:<?php echo $color ?>;" class="tt-header tt-header--center">
                                    <span>Latest <?php echo $name ?></span>
                                    <h2>Latest <?php echo $name ?></h2>
                                </div>
                            </div>

                            <ul class="tt-cat__cards">

                                <?php foreach ($recent_posts as $post) : setup_postdata($post); ?>

                                    <?php
                                    $category = get_the_category()[0];
                                    $category_name = $category->cat_name;
                                    ?>

                                    <li class="tt-cat__cards__item">
                                        <a href="<?php the_permalink() ?>" class="tt-cat__card" style="--category-color:<?php the_field('category_color', $category); ?>;">

                                            <?php if (have_rows('article_masthead')) : ?>

                                                <?php while (have_rows('article_masthead')) : the_row(); ?>

                                                    <?php

                                                    $image = get_sub_field('article_masthead_background');

                                                    if (!empty($image)) :
                                                    ?>

                                                        <div class="tt-cat__card__img" style="background-image: url('<?php echo $image['url']; ?>');"></div>

                                                    <?php endif; ?>

                                                <?php endwhile; ?>

                                            <?php endif; ?>

                                            <div class="tt-cat__card__info">

                                                <div class="tt-cat__card__cont">

                                                    <h3 style="--category-color:<?php the_field('category_color', $category); ?>;">
                                                        <?php the_title(); ?>
                                                    </h3>

                                                    <?php the_field('article_excerpt'); ?>

                                                </div>

                                                <div style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card__cat-info">
                                                    <span><?php the_time('m/d/Y'); ?></span>
                                                    <div>
                                                        <span><?php echo $category_name ?></span>
                                                        <span><?php echo $category_name ?></span>
                                                    </div>
                                                </div>

                                            </div>

                                        </a>
                                    </li>

                                <?php endforeach; ?>

                                <?php wp_reset_postdata(); ?>

                            </ul>

                            <a style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-btn tt-btn--cat" href="<?php echo $link ?>"><?php echo $link_label ?></a>

                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endforeach; ?>

    <section class="tt-home__section tt-home__series">

        <img class="tt-home__series--banner" src="<?php echo get_field('series_background')['url'] ?>" alt="<?php echo get_field('series_background')['alt']; ?>">

        <div class="tt-home__series--cont">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-xl-10">

                        <div class="tt-header--center__wrapper">
                            <div class="tt-header tt-header--center">
                                <span>Latest Series</span>
                                <h2>Latest Series</h2>
                            </div>
                        </div>

                        <div class="tt-series__logos">

                            <?php

                            $taxonomies = get_terms(array(
                                'taxonomy' => 'series',
                                'order' => 'DESC',
                                'number' => 3,
                                'orderby' => 'meta_value',
                                'meta_query' => array(
                                    array('key' => 'taxonomy_series_order')
                                ),
                                'hide_empty' => false,
                            ));

                            foreach ($taxonomies as $taxonomy) :

                                $background = get_field('taxonomy_series_background', $taxonomy);
                                $background_position = get_field('taxonomy_series_background_position', $taxonomy);
                                $logo = get_field('taxonomy_series_logo', $taxonomy);
                                $link = get_term_link($taxonomy);
                            ?>

                                <h3 class="tt-series__logo">
                                    <a href="<?php echo $link ?>">
                                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>">
                                    </a>
                                </h3>

                            <?php endforeach; ?>

                        </div>

                        <a class="tt-btn tt-btn--fill" href="<?php the_field('series_button_url'); ?>"><?php the_field('series_button_text'); ?></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>