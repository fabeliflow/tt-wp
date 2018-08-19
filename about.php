<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<body>

<!-- About Page Cards -->
<div class="tt-about__cards" style="background-image: url('<?php the_field('about_background'); ?>'); background-position: <?php the_field('about_background_position'); ?>">

    <!-- Swiper -->
    <div class="swiper-container">

        <div class="swiper-wrapper">

            <!--  check if the repeater field has rows of data -->
            <?php if( have_rows('member_card') ): ?>

                <!--  loop through the rows of data -->
                <?php while ( have_rows('member_card') ) : the_row(); ?>

                    <!-- About Page Card -->
                    <div class="swiper-slide tt-about__card">

                        <!-- Biography -->
                        <div class="tt-about__card__cont tt-about__card__cont--bio">
                        <div class="tt-about__card__bio__wrap">
                            <div class="tt-about__card__bio">
                            <div class="tt-about__card__headline">
                                <span class="tt-about__card__member">Member</span>
                                <div class="tt-about__card__name">
                                <h2><?php the_sub_field('member_name'); ?></h2>
                                </div>
                            </div>
                            <div class="tt-scrollable">
                                <?php the_sub_field('member_biography'); ?>
                            </div>
                            </div>

                        </div>
                        </div>

                        <!-- Image and Social -->
                        <div class="tt-about__card__cont tt-about__card__cont--media">
                        <div class="tt-about__card__media">
                            <div class="tt-about__card__img__cont">
                            <div class="tt-about__card__img" style="background-image: url('<?php the_sub_field('member_picture'); ?>');"></div>
                            </div>
                            <div class="tt-about__card__social__cont">
                            <div class="tt-about__card__num"></div>
                            <div class="tt-about__card__social">
                                <h3 class="tt-about__card__social__headline">Connect</h3>

                                <!--  check if the repeater field has rows of data -->
                                <?php if( have_rows('member_social') ): ?>

                                    <ul class="tt-about__card__social__list">
                                        
                                        <!--  loop through the rows of data -->
                                        <?php while ( have_rows('member_social') ) : the_row(); ?>

                                            <li>
                                                <a class="tt-about__card__social__icon" href="<?php the_sub_field('member_social_url'); ?>" target="_blank">
                                                    <i class="<?php the_sub_field('member_social_class'); ?>"></i>
                                                </a>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>

                            </div>
                            </div>
                        </div>
                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

        <!-- Navigation -->
        <div class="tt-about__card__nav">

            <!-- Arrows -->
            <div class="tt-arrow tt-arrow--left">
                <div></div>
            </div>

            <div class="tt-arrow tt-arrow--right">
                <div></div>
            </div>
            
        </div>

    </div>
</div>

<?php get_footer(); ?>