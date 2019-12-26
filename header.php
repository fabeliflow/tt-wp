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
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/vendor/myfonts/Purista-Bold/MyFontsWebfontsKit.css">

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
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/vendor/myfonts/SerifGothicStd-Heavy/MyFontsWebfontsKit.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124638163-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-124638163-1');
    </script>


    <?php wp_head(); ?>

</head>

<button id="tt-menu__btn" class="hamburger hamburger--emphatic" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>

<div id='navigation' class="tt-menu">

    <a href="<?php echo get_home_url(); ?>">
        <div class="tt-menu__logo-cont">
            <div class="tt-menu__logo"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tt-logo.svg');">
            </div>
        </div>
    </a>

    <!-- Menu Items Here -->
    <?php echo wp_generate_menu('primary'); ?>

    <!-- CHANGE TO DINAMIC (ADD fa-fw to ALL ICONS!!!!) -->
    <ul class="tt-social">

        <li>
            <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                <i class="fab fa-twitter fa-fw"></i>
            </a>
        </li>

        <li>
            <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                <i class="fab fa-instagram fa-fw"></i>
            </a>
        </li>

        <li>
            <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                <i class="fab fa-facebook-f fa-fw"></i>
            </a>
        </li>

        <li>
            <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                <i class="fab fa-youtube fa-fw"></i>
            </a>
        </li>

    </ul>
</div>
<div id='content'>



    <!-- Main content here -->



    <!-- Menu Popup -->