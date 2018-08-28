<?php
/*
Template Name: Legal
*/
?>

<?php get_header(); ?>

<body>

    <!-- Legal Masthead -->
    <div class="tt-legal__masthead">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
        <section class="tt-legal__cont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        </section>
    <?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>