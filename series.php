<?php
/*
Template Name: Series
*/

get_header(); ?>

<div class="tt-series">

    <section class="tt-masthead-with-content tt-masthead--overlay" style="background-image: url('<?php the_field('series_background'); ?>'); background-position: <?php the_field('series_background_position'); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center">
                            <span><?php the_title(); ?></span>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <?php the_field('series_description'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="tt-series__section">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-xl-10 tt-series__logos">

                    <?php

                    $taxonomies = get_terms(array(
                        'taxonomy' => 'series',
                        'order' => 'DESC',
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
                        $color = get_field('taxonomy_series_color', $taxonomy);
                        $link = get_term_link($taxonomy);
                    ?>

                        <h3 class="tt-series__logo">
                            <a href="<?php echo $link ?>">
                                <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>">
                            </a>
                        </h3>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>