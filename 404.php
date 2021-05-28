<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<div class="tt-404">

    <section class="tt-404__cont tt-masthead--overlay" style="background-image: url('<?php echo get_field('404_background') ?>'); background-position: <?php echo get_field('404_background_position') ?>;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col col-lg-6 tt-404__header">
                    <h1><?php the_field('404_header'); ?></h1>
                    <p><?php the_field('404_subheader'); ?></p>
                    <a class="tt-btn tt-btn--ghost tt-btn--ghost-white" href="<?php the_field('404_button_url'); ?>"><?php the_field('404_button_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>