<?php
/*
Template Name: Team
*/
?>

<?php get_header(); ?>

<body class="tt-team">

    <section class="tt-team__descr">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="tt-header tt-header--center">
                        <span><?php the_title(); ?></span>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <p><?php the_field('team_description'); ?></p>
                </div>
            </div>
    </section>

    <?php if( have_rows('member_card') ): ?>

    <section class="tt-member-cards__cont">

        <ul class="tt-member-cards">

            <?php while ( have_rows('member_card') ) : the_row(); ?>

            <li class="tt-member-card tt-member-card--portrait">
                <div class="tt-member-card__inner">
                    <div class="tt-member-card__img">
                        <img src="<?php the_sub_field('member_picture'); ?>" />
                    </div>
                    <div class="tt-member-card__info">
                        <div class="tt-header tt-header--center">
                            <span><?php the_sub_field('member_name'); ?></span>
                            <h2><?php the_sub_field('member_name'); ?></h2>
                        </div>
                        <div data-simplebar class="tt-member--bio">
                            <p><?php the_sub_field('member_biography'); ?></p>
                        </div>
                        <?php if( have_rows('member_social') ): ?>

                        <ul class="tt-social">

                            <?php while ( have_rows('member_social') ) : the_row(); ?>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('member_social_url'); ?> fa-fw"
                                    target="_blank">
                                    <i class="<?php the_sub_field('member_social_class'); ?>"></i>
                                </a>
                            </li>

                            <?php endwhile; ?>

                        </ul>

                        <?php endif; ?>
                    </div>
                </div>
            </li>

            <?php endwhile; ?>

            <ul>

    </section>

    <?php endif; ?>

    <!-- </div> -->

    <?php get_footer(); ?>