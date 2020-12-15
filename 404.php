<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<div class="tt-404" style="background-image: url('<?php the_field('404_background'); ?>')">

    <section class="tt-404__cont">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col col-lg-6">
                    <h1 class="tt-404__header"><?php the_field('404_header'); ?></h1>
                    <span><?php the_field('404_subheader'); ?></span>
                    <a class="tt-btn tt-btn--error" href="<?php the_field('404_button_url'); ?>"><?php the_field('404_button_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>