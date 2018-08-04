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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,700%7CNews+Cycle:400,700" rel="stylesheet">

    <!-- Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

        <!-- Perfect Scrollbar CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/magnific-popup/css/magnific-popup.css">

    <!-- Slick carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/slick/slick.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.1/css/swiper.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

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
            <?php 
                $args = array(
                    'theme_location' => 'primary',
                    'menu_class' => 'tt-menu__list'
                );
                wp_nav_menu( $args ); 
            ?>

            <!-- Menu Social -->
            <div class="tt-menu__social">

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
