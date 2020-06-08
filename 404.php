<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<body class="tt-404" style="background-image: url('<?php the_field('404_background'); ?>')">

    <section class="tt-404__cont">
        <h1 class="tt-404__header"><?php the_field('404_header'); ?></h1>
        <span><?php the_field('404_subheader'); ?></span>
        <a class="tt-btn tt-btn--error"
            href="<?php the_field('404_button_url'); ?>"><?php the_field('404_button_text'); ?></a>
    </section>

    <?php get_footer(); ?>