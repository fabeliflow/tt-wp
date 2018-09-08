<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' :'; } ?>
		<?php bloginfo('name'); ?>
    </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124638163-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-124638163-1');
    </script>


    <?php wp_head(); ?>

</head>

<!-- Menu -->

<!-- Menu Button -->
<button id="tt-menu__btn" class="tt-btn--menu">
    <i class="tt-btn--menu__icon"></i>
</button>

<!-- Menu Popup -->
<div class="tt-menu">

    <!-- Menu Container -->
    <div class="tt-menu__cont">

        <!-- Starfield -->
        <div id="starfield" class="starfield"></div>

        <!-- Menu Logo -->
        <a href="<?php echo get_home_url(); ?>" class="tt-menu__logo-wrapper">
            <div class="tt-menu__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tt-logo.svg');"></div>
        </a>

        <!-- Menu List -->
        <div class="tt-menu__scrollable tt-scrollable" data-simplebar data-simplebar-auto-hide="false">
            <?php 
                $args = array(
                    'theme_location' => 'primary',
                    'menu_class' => 'tt-menu__list'
                );
                wp_nav_menu( $args ); 
            ?>
        </div>

        <!-- Menu Social -->
        <div class="tt-menu__social">

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
