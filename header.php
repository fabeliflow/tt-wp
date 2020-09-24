<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>
        <?php wp_title(''); ?>
        <?php if (wp_title('', false)) {
            echo ' :';
        } ?>
        <?php bloginfo('name'); ?>
    </title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#100e17">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#100e17">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
    <meta name="theme-color" content="#100e17">

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
            <div class="tt-menu__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tt-new-logo.svg');">
            </div>
        </div>
    </a>

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