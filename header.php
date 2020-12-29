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

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f37257">
    <meta name="msapplication-TileColor" content="#f37257">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#000000">

    <?php wp_head(); ?>

</head>

<?php if (is_front_page() || is_page('Series')) : ?>

    <body class="tt-starfield-bg">
    <?php else : ?>

        <body>
        <?php endif; ?>

        <nav class="tt-menu">
            <button id="tt-menu__btn" class="hamburger hamburger--emphatic" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <a class="tt-menu__logo" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tt-new-logo.svg" alt="Tatooine Times Logo">
            </a>
        </nav>

        <div id="navigation" class="tt-menu__slider">

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

                    <li style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-menu__item tt-menu__item-cat">
                        <a href="<?php echo $url ?>">
                            <span><?php echo $name ?></span>
                            <span><?php echo $name ?></span>
                        </a>
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