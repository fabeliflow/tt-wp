<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php wp_title(''); ?>
        <?php if (wp_title('', false)) {
            echo ' :';
        } ?>
        <?php bloginfo('name'); ?>
    </title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/SerifGothicStd-Heavy/MyFontsWebfontsKit.css">

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

<div id="navigation" class="tt-menu">

    <a href="<?php echo get_home_url(); ?>">
        <div class="tt-menu__logo-cont">
            <div class="tt-menu__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tt-logo.svg');">
            </div>
        </div>
    </a>

    <!-- Menu Items -->
    <ul data-simplebar class="tt-menu__items">

        <?php echo wp_generate_menu('primary'); ?>
        <?php

        $categories = get_categories(array(
            'orderby'    => 'name',
            'hide_empty' => 0,
            'exclude'    => array(1)
        ));

        foreach ($categories as $category) :
            $url = get_category_link($category);
            $name = $category->cat_name;
        ?>

            <li style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-menu__item tt-menu__item-cat"><a href="<?php echo $url ?>"><span><?php echo $name ?></span></a>
            </li>

        <?php endforeach; ?>

        <?php echo wp_generate_menu('legal-links'); ?>

    </ul>

    <?php if (have_rows('social_media', 'options')) : ?>

        <div class="tt-menu__social">

            <ul class="tt-social">

                <?php while (have_rows('social_media', 'options')) : the_row(); ?>

                    <li>
                        <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                            <i class="<?php the_sub_field('social_media_class'); ?> fa-fw"></i>
                        </a>
                    </li>

                <?php endwhile; ?>

            </ul>

            <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script>
            <script type='text/javascript'>
                kofiwidget2.init('Support Us on Ko-fi', '#f37257', 'F2F61MA2P');
                kofiwidget2.draw();
            </script>

        </div>

    <?php endif; ?>

</div>
<div id="content">