<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<body class="tt-home">

    <?php if( have_rows('description_background') ): ?>

    <?php while ( have_rows('description_background') ) : the_row(); ?>

    <section class="tt-home__descr"
        style="background-image: url('<?php the_sub_field('description_background_image'); ?>'); background-position: <?php the_sub_field('description_background_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center">
                            <span><?php the_field('description_title'); ?></span>
                            <h1><?php the_field('description_title'); ?></h1>
                        </div>
                    </div>
                    <p><?php the_field('description'); ?></p>

                    <?php if( have_rows('description_button') ): ?>

                    <?php while ( have_rows('description_button') ) : the_row(); ?>

                    <a href="<?php the_sub_field('description_button_link'); ?>"
                        class="tt-btn tt-btn--fill"><?php the_sub_field('description_button_text'); ?></a>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
    </section>

    <?php endwhile; ?>

    <?php endif; ?>

    <section class="tt-home__section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <div class="tt-header--center__wrapper">
                        <div class="tt-header tt-header--center">
                            <span>Latest Articles</span>
                            <h1>Latest Articles</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $recent_posts = get_posts( array(
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ) );
        ?>

        <!-- Category Cards -->
        <ul class="tt-cat__cards">

            <?php  foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>

            <?php
                $category = get_the_category()[0];
                $category_name = $category->cat_name;
            ?>

            <!-- Category Card -->
            <li class="tt-cat__cards__item">
                <a href="<?php the_permalink() ?>" class="tt-cat__card"
                    style="--category-color:<?php the_field('category_color', $category); ?>;">

                    <?php if( have_rows('article_masthead') ): ?>

                    <?php while ( have_rows('article_masthead') ) : the_row(); ?>

                    <!-- Category Card Image -->
                    <div class="tt-cat__card__img"
                        style="background-image: url('<?php the_sub_field('article_masthead_background'); ?>');"></div>

                    <?php endwhile; ?>

                    <?php endif; ?>

                    <div class="tt-cat__card__info">

                        <div class="tt-cat__card__cont">

                            <!-- Category Card Title -->
                            <h3 class="tt-cat__card__title"
                                style="--category-color:<?php the_field('category_color', $category); ?>;">
                                <?php the_title(); ?>
                            </h3>

                            <!-- Category Card Description -->
                            <p class="tt-cat__card__descr">
                                <?php echo custom_field_excerpt('article_excerpt'); ?>
                            </p>

                        </div>

                        <!-- Category Card Category Name -->
                        <div style="--category-color:<?php the_field('category_color', $category); ?>;"
                            class="tt-cat__card__cat-info">
                            <span><?php echo $category_name ?></span>
                            <span><?php echo $category_name ?></span>
                        </div>

                    </div>

                </a>
            </li>

            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

        </ul>
    </section>

    <section class="tt-home__section tt-home__categories">

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php

                    $categories = get_categories( array(
                        'orderby'    => 'name',
                        'hide_empty' => 0,
                        'exclude'    => array( 1 )
                    ) );

                    foreach ( $categories as $category ) : 

                        $background = get_field('category_background', $category);
                        $background_position = get_field('category_background_position', $category);
                        $name = $category->name;
                        $link = get_category_link( $category );
                        $link_label = get_field('category_link_label', $category);
                ?>

                <div class="swiper-slide tt-masthead--overlay"
                    style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">

                    <div class="tt-masthead__wrapper">
                        <div style="--category-color:<?php the_field('category_color', $category); ?>;"
                            class="tt-header tt-header--center">
                            <span><?php echo $name ?></span>
                            <h2 class="tt-header--no-border"><?php echo $name ?></h2>
                        </div>
                        <a style="--category-color:<?php the_field('category_color', $category); ?>;"
                            class="tt-btn tt-btn--cat" href="<?php echo $link ?>"><?php echo $link_label ?></a>
                    </div>

                </div>

                <?php endforeach; ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Arrows -->
            <div class="tt-arrow tt-arrow--left">
                <div></div>
            </div>

            <div class="tt-arrow tt-arrow--right">
                <div></div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>