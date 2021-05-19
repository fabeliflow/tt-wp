<?php
/*
Template Name: Legal
*/
?>

<?php get_header(); ?>

<div>

    <div class="tt-legal__masthead">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="tt-header tt-header--center tt-header--alt">
                        <span><?php the_title(); ?></span>
                        <h1 class="tt-header--center"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php while (have_posts()) : the_post(); ?>
        <section class="tt-article__cont">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-lg-6">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
    wp_reset_query(); ?>

    <?php get_footer(); ?>