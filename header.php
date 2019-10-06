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

    <!--
    /**
    * @license
    * MyFonts Webfont Build ID 3820036, 2019-10-05T12:27:28-0400
    * 
    * The fonts listed in this notice are subject to the End User License
    * Agreement(s) entered into by the website owner. All other parties are 
    * explicitly restricted from using the Licensed Webfonts(s).
    * 
    * You may obtain a valid license at the URLs below.
    * 
    * Webfont: Purista-Bold by Suitcase Type Foundry
    * URL: https://www.myfonts.com/fonts/suitcase/purista/bold/
    * Copyright: Copyright (c) Tomas Brousil, 2007. All rights reserved.
    * Licensed pageviews: 10,000
    * 
    * 
    * License: https://www.myfonts.com/viewlicense?type=web&buildid=3820036
    * 
    * © 2019 MyFonts Inc
    */

    -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/myfonts/Purista-Bold/MyFontsWebfontsKit.css">

    <!--
    /**
    * @license
    * MyFonts Webfont Build ID 3771796, 2019-06-11T06:14:37-0400
    * 
    * The fonts listed in this notice are subject to the End User License
    * Agreement(s) entered into by the website owner. All other parties are 
    * explicitly restricted from using the Licensed Webfonts(s).
    * 
    * You may obtain a valid license at the URLs below.
    * 
    * Webfont: SerifGothicStd-Heavy by ITC
    * URL: https://www.myfonts.com/fonts/itc/serif-gothic/std-heavy/
    * Copyright: Copyright &#x00A9; 2014 Monotype ITC Inc. All rights reserved.
    * Licensed pageviews: 250,000
    * 
    * 
    * License: https://www.myfonts.com/viewlicense?type=web&buildid=3771796
    * 
    * © 2019 MyFonts Inc
    */

    -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/myfonts/SerifGothicStd-Heavy/MyFontsWebfontsKit.css">

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
    <i class="far fa-dot-circle"></i>
</button>

<!-- Menu Popup -->
<div class="tt-menu scanline">

    <!-- Menu Container -->
    <div class="tt-menu__cont">

        <!-- Menu Logo -->
        <a href="<?php echo get_home_url(); ?>" class="tt-menu__logo">
            Tatooine Times
        </a>

        <div class="tt-menu__list">

            <span class="tt-arrow--up">
                <i class="fas fa-caret-up"></i>
            </span>

            <div class="tt-menu__list-wrapper">

                <span class="tt-menu__item">
                    <a href="#">
                        <span class="tt-menu__item-head">Home</span>
                        <span class="tt-menu__item-title">Home</span>
                    </a>
                </span>
                <span class="tt-menu__item">
                    <a href="#">
                        <span class="tt-menu__item-head">The Team</span>
                        <span class="tt-menu__item-title">The Team</span>
                    </a>
                </span>
                <span class="tt-menu__item">
                    <a href="#">
                        <span class="tt-menu__item-head">Journeys</span>
                        <span class="tt-menu__item-title">Journeys</span>
                    </a>
                </span>
                <span class="tt-menu__item">
                    <a href="#">
                        <span class="tt-menu__item-head">Reviews</span>
                        <span class="tt-menu__item-title">Reviews</span>
                    </a>
                </span>
                <span class="tt-menu__item">
                    <a href="#">
                        <span class="tt-menu__item-head">Collectibles</span>
                        <span class="tt-menu__item-title">Collectibles</span>
                    </a>
                </span>

            </div>

            <span class="tt-arrow--down">
                <i class="fas fa-caret-down"></i>
            </span>
        
        </div>

        <!-- Menu Social -->
        <div class="tt-menu__social">
                <ul class="tt-social">
                        <li>
                            <a class="tt-social__icon" href="https://twitter.com/tatooine_times" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>                    
                        <li>
                            <a class="tt-social__icon" href="https://www.instagram.com/tatooinetimes" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>                    
                        <li>
                            <a class="tt-social__icon" href="https://facebook.com/tatooinetimes" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>                    
                        <li>
                            <a class="tt-social__icon" href="https://www.youtube.com/channel/UCx3iZoCBLIaTZWfyYPyq7Dg" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>                    
                </ul>            
        </div>

    </div>

</div>
