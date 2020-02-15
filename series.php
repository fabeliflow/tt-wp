<?php
/*
Template Name: Series
*/

get_header(); ?>

<body class="tt-series">

    <section class="tt-series__section tt-series__descr"
        style="background-image: url('<?php the_field('series_background'); ?>'); background-position: <?php the_field('series_background_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center">
                            <span><?php the_title(); ?></span>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <p><?php the_field('series_description'); ?></p>
                </div>
            </div>
    </section>

    <section class="tt-series__section tt-series__logos--cont">

        <div class="tt-series__logos">

            <?php

            $taxonomies = get_terms( array(
                'taxonomy' => 'series',
                'orderby' => 'ID', 
                'order' => 'DESC',
                'hide_empty' => false,
            ) );

            foreach ( $taxonomies as $taxonomy ) : 

                $logo = get_field('taxonomy_series_logo', $taxonomy);
                $link = get_term_link( $taxonomy );
        ?>

            <a class="tt-series__logo" href="<?php echo $link ?>">
                <img src="<?php echo $logo ?>" \>
            </a>

            <?php endforeach; ?>

        </div>

        </div>
    </section>

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>

    <?php get_footer(); ?>