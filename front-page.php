<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<body class="tt-home">

    <!-- Home Page Slider -->
    <div class="tt-home__slider">

        <!-- Home Page Slide One -->
        <div class="tt-home__slide">
            <div class="vertical-align">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 tt-home__header">
                            <h1><?php the_field('home_page_header'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Page Slide Two -->
        <div class="tt-home__slide tt-home__mission" style="background-image: url('<?php the_field('mission_section_background'); ?>'); background-position: <?php the_field('mission_section_background_position'); ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-7 col-md-offset-5 col-md-6 col-lg-offset-5 col-lg-5 tt-home__slide__wrap vertical-align">
                        <div class="tt-home__mission__cont">
                            <div class="tt-home__mission__header">
                                <h2 class="tt-home__header--underline"><?php the_field('mission_section_header'); ?></h2>
                            </div>
                            <div class="tt-scrollable">
                                <?php the_field('mission_section_description');?>
                            </div>
                            <div class="tt-home__mission__footer">
                                <a class="tt-btn" href="<?php the_field('mission_section_button_url');?>"><?php the_field('mission_section_button_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Page Slide Three-->
        <div class="tt-home__slide">

            <!-- Category Card Carousel -->
            <div class="tt-home__cards">

                <?php

                $categories = get_categories( array(
                    'orderby' => 'name'
                ) );
                
                foreach ( $categories as $category ) : 

                $background = get_field('category_background', $category);
                $background_position = get_field('category_background_position', $category);
                $logo_svg = get_field('category_logo_svg', $category);
                $description = $category->category_description;
                $link = get_category_link( $category );
                $link_label = get_field('category_link_label', $category);
                ?>

                    <div class="tt-home__card" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
                        <div class="tt-home__card__cont">
                            <div class="tt-home__card__logo-wrapper">
                                <div class="tt-home__card__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo_svg ?>.svg');"></div>
                            </div>
                            <div class="tt-home__card__body tt-scrollable">
                                <?php echo $description ?>
                            </div>

                            <div class="tt-home__card__footer">
                                <a class="tt-btn" href="<?php echo $link ?>"><?php echo $link_label ?></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            <!-- Category Card Arrows -->
            <div class="tt-arrow tt-arrow--left">
                <div></div>
            </div>
            <div class="tt-arrow tt-arrow--right">
                <div></div>
            </div>

        </div>

        <!-- Home Page Slide Four -->
        <div class="tt-home__slide">

            <!-- Starfield Home -->
            <div id="starfieldhome" class="starfield"></div>

            <!-- TT Animated Logo -->
            <div class="tt-logo__cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">

                            <div class="tt-logo__wrap" style="padding-bottom: 35%">
                                <svg class="tt-logo" viewBox="0 0 556.6 134" xmlns="http://www.w3.org/2000/svg">
                                    <g class="tt-logo__title--main">
                                        <path class="st0" d="M19.3,29.8h30v6.7H37.6v42.4H31V36.5H19.3V29.8z"/>
                                        <path class="st0" d="M105.2,27.9l23.2,51h-7l-5.7-12.6H94.8l-5.6,12.6h-7L105.2,27.9z M105.2,43.2l-7.9,17.5h15.8L105.2,43.2z"/>
                                        <path class="st0" d="M159.2,29.8h30v6.7h-11.7v42.4h-6.6V36.5h-11.7V29.8z"/>
                                        <path class="st0" d="M377.4,28.7h6.6v49.1h-6.6V28.7z"/>
                                        <path class="st0" d="M426,26.7L462.3,64V28.7h6.7v51.4l-36.3-37.1v34.9H426V26.7z"/>
                                        <path class="st0" d="M510,28.7h27.2v6.7h-20.6v12.3h20.6v6.6h-20.6v16.9h20.6v6.6H510V28.7z"/>
                                        <g class="tt-logo__title--sub">
                                            <path class="st0" d="M162.3,95.6h22.6v5.1h-8.8v32h-5v-32h-8.8V95.6z"/>
                                            <path class="st0" d="M214.3,95.6h5v37h-5V95.6z"/>
                                            <path class="st0" d="M281.8,94.1l10.1,38.5h-5l-6.1-23.6l-10.5,25l-10.6-25.2l-6.2,23.8h-4.9l10.1-38.5l11.6,27.6L281.8,94.1z"/>
                                            <path class="st0" d="M320.5,95.6H341v5.1h-15.5v9.2H341v5h-15.5v12.7H341v5h-20.5V95.6z"/>
                                            <path class="st0" d="M393.4,99.7l-4.1,3.3c-1.1-1.1-2.1-2-2.9-2.5c-0.9-0.6-2.1-0.8-3.8-0.8c-1.8,0-3.3,0.4-4.4,1.2
                                                c-1.1,0.8-1.7,1.9-1.7,3.2c0,1.1,0.5,2.1,1.5,3c1,0.9,2.7,1.8,5,2.8s4.2,2,5.6,2.9c1.3,0.9,2.4,1.9,3.3,2.9
                                                c0.9,1.1,1.5,2.2,1.9,3.4c0.4,1.2,0.6,2.4,0.6,3.7c0,3.1-1.1,5.7-3.4,7.9c-2.2,2.2-4.9,3.3-8.1,3.3c-3.1,0-5.8-0.8-8.2-2.5
                                                c-2.4-1.7-4.2-4.2-5.5-7.6l5.1-1.4c1.8,4.2,4.7,6.2,8.5,6.2c1.8,0,3.4-0.6,4.6-1.7c1.2-1.1,1.8-2.5,1.8-4.2c0-1-0.3-2-1-3
                                                c-0.6-1-1.4-1.8-2.4-2.5c-1-0.7-2.5-1.4-4.5-2.3c-2.1-0.9-3.7-1.6-4.8-2.3c-1.1-0.7-2.1-1.5-2.9-2.5c-0.8-1-1.4-1.9-1.8-2.9
                                                c-0.4-1-0.6-2-0.6-3.1c0-2.7,1.1-4.9,3.2-6.8c2.1-1.9,4.7-2.8,7.8-2.8c2,0,4.1,0.4,6.1,1.3C390.3,96.6,392,97.9,393.4,99.7z"/>
                                        </g>
                                    </g>
                                    <g data-name="Twin Suns">
                                        <ellipse class="tt-logo__sun tt-logo__sun--first" cx="321.8" cy="53.3" rx="27.5" ry="26.7"/>
                                        <ellipse class="tt-logo__sun tt-logo__sun--second" cx="244.7" cy="26.7" rx="27.5" ry="26.7"/>
                                    </g>
                                    <g>
                                        <path class="tt-logo__border tt-logo__border--left" d="M210.2,10.1H10.1c-4.1,0-7.4,3.3-7.4,7.4v71.8c0,4.1,3.3,7.4,7.4,7.4h145.2"/>
                                        <path class="tt-logo__border tt-logo__border--right" d="M279.3,10.1h267.2c4.1,0,7.4,3.3,7.4,7.4v71.8c0,4.1-3.3,7.4-7.4,7.4H401.3"/>
                                    </g>
                                </svg>
                            </div>

                            <?php if( have_rows('menu_social', 'header') ): ?>

                                <ul class="tt-social">
                                    
                                    <?php while ( have_rows('menu_social', 'social-media') ) : the_row(); ?>

                                        <li>
                                            <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                                                <i class="<?php the_sub_field('menu_social_class'); ?>"></i>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Orbit and Disclaimer -->
            <footer class="tt-home__orbit" style="background-image: url('<?php the_field('orbit_section_image'); ?>')">
                <div class="tt-home__orbit__disclaimer">
                    <?php the_field('orbit_section_disclaimer'); ?>
                </div>
            </footer>

        </div>

    </div>

    <!-- Arrow Scroll -->
    <div class="tt-arrow tt-arrow--scroll">
        <div></div>
    </div>

<?php get_footer(); ?>