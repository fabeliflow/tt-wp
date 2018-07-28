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
            <a href="#" class="tt-menu__logo-wrapper">
                <div class="tt-menu__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tt-logo.svg');"></div>
            </a>

            <!-- Menu List -->
            <div>
                <ul class="tt-menu__list">
                    <li class="tt-menu__item">
                        <a href="#">About</a>
                    </li>
                    <li class="tt-menu__item">
                        <a href="#">Collectibles</a>
                    </li>
                    <li class="tt-menu__item">
                        <a href="#">News</a>
                    </li>
                    <li class="tt-menu__item">
                        <a href="#">Reviews</a>
                    </li>
                </ul>
            </div>

            <!-- Menu Social -->
            <div class="tt-menu__social">
                <ul class="tt-social">
                    <li>
                        <a class="tt-social__icon" href="https://facebook.com/tatooinetimes" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tt-social__icon" href="https://twitter.com/tatooine_times" target="_blank">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tt-social__icon" href="https://www.instagram.com/tatooinetimes" target="_blank">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tt-social__icon" href="mailto:tatooinetimes@gmail.com" target="_top">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
