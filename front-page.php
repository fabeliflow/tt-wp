<?php get_header(); ?>

<!-- Home Page -->

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
    <div class="tt-home__slide tt-home__mission" style="background-image: url('<?php the_field('mission_section_background'); ?>')">
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

        <!-- Sections Card Carousel -->
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

        <!-- Sections Card Arrows -->
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

                        <div class="tt-logo__wrap" style="padding-bottom: 30%">
                            <svg class="tt-logo" viewBox="0 0 616 100" xmlns="http://www.w3.org/2000/svg">
                            <g class="tt-logo__title--main">
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M37.15,43.44h30v6.71H55.45V92.53H48.82V50.14H37.15Z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M123,41.55l23.18,51h-7L133.49,80H112.65L107,92.53h-7Zm0,15.32-7.85,17.51H131Z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M177,43.44h30v6.71H195.31V92.53h-6.63V50.14H177Z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="m429.29 43.44h6.63v49.09h-6.63z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M477.89,41.47l36.3,37.31V43.44h6.7V94.8l-36.3-37.15V92.53h-6.71Z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M561.94,43.44h27.21v6.71H568.57V62.4h20.58V69H568.57V85.9h20.58v6.63H561.94Z"/>
                            </g>
                            <g class="tt-logo__title--sub">
                            <path class="cls-1" transform="translate(-5 -4.25)" d="m190.47 109.19h22.63v5.05h-8.83v32h-5v-32h-8.8z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="m242.5 109.19h5v37h-5z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="m310 107.65 10.1 38.55h-5l-6.1-23.55-10.55 25-10.58-25.18-6.21 23.76h-4.93l10.12-38.55 11.59 27.58z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="m348.69 109.19h20.51v5.05h-15.51v9.24h15.51v5h-15.51v12.72h15.51v5h-20.51z"/>
                            <path class="cls-1" transform="translate(-5 -4.25)" d="M421.55,113.32l-4.1,3.28a16.4,16.4,0,0,0-2.94-2.51,7.21,7.21,0,0,0-3.81-.83,7.34,7.34,0,0,0-4.42,1.23,3.76,3.76,0,0,0-1.7,3.17,3.85,3.85,0,0,0,1.48,3,20.23,20.23,0,0,0,5,2.82,36,36,0,0,1,5.55,2.85,14.17,14.17,0,0,1,3.26,2.92,11.49,11.49,0,0,1,1.9,3.37,11.18,11.18,0,0,1,.62,3.74,10.55,10.55,0,0,1-3.36,7.87,11.24,11.24,0,0,1-8.12,3.25,13.76,13.76,0,0,1-8.21-2.54,15.94,15.94,0,0,1-5.48-7.63l5.06-1.42q2.76,6.25,8.45,6.25a6.59,6.59,0,0,0,4.59-1.65,5.37,5.37,0,0,0,1.83-4.17,5.64,5.64,0,0,0-1-3,8.56,8.56,0,0,0-2.38-2.5,25.48,25.48,0,0,0-4.53-2.26,32.11,32.11,0,0,1-4.78-2.33,12.33,12.33,0,0,1-2.9-2.53,10.67,10.67,0,0,1-1.79-2.92,8.44,8.44,0,0,1-.57-3.11,8.7,8.7,0,0,1,3.2-6.78,11.36,11.36,0,0,1,7.76-2.8,15.72,15.72,0,0,1,6.13,1.31A12.59,12.59,0,0,1,421.55,113.32Z"/>
                            </g>
                            <g data-name="Twin Suns">
                            <ellipse class="tt-logo__sun tt-logo__sun--first" cx="357.02" cy="63.79" rx="32.94" ry="31.9"/>
                            <ellipse class="tt-logo__sun tt-logo__sun--second" cx="264.81" cy="31.9" rx="32.94" ry="31.9"/>
                            </g>
                            <path class="tt-logo__border tt-logo__border--right" transform="translate(-5 -4.25)" d="M316.22,26.47H613.15a6,6,0,0,1,6,6V103.8a6,6,0,0,1-6,6H435.91"/>
                            <path class="tt-logo__border tt-logo__border--left" transform="translate(-5 -4.25)" d="M223.41,26.47H13.15a6,6,0,0,0-6,6V103.8a6,6,0,0,0,6,6H177"/>
                            </svg>
                        </div>

                        <?php if( have_rows('menu_social', 'header') ): ?>

                            <ul class="tt-social">
                                
                                <!--  loop through the rows of data -->
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

<!-- THIS IS WHERE FOOTER SHOULD GO -->

<?php get_footer(); ?>