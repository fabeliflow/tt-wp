<?php
/*
Template Name: Series
*/

get_header(); ?>

<div class="tt-series">

    <div class="tt-masthead__cont">
        <div class="tt-masthead" style="background-image: url('<?php echo get_field('series_background')['url']; ?>'); background-position: <?php echo get_field('series_background_position') ?>;">
            <img src="<?php echo get_field('series_background')['url']; ?>" alt="<?php echo get_field('series_background')['alt']; ?>">
        </div>
    </div>

    <section class="tt-series__section">

        <div class="container-fluid">

            <div class="row justify-content-center tt-series__descr--cont">
                <div class="col col-lg-6">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center tt-header--light">
                            <span><?php the_title(); ?></span>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <?php the_field('series_description'); ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-6">

                    <ul class="tt-series__logos">

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

                            <li class="tt-series__logo">
                                <a href="<?php echo $link ?>">
                                    <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt']; ?>">
                                </a>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>