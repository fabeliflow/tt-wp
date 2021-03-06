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
                <img src="<?php echo get_template_directory_uri(); ?>/img/tt-logo.png" alt="Tatooine Times Logo" width="1000" height="469">
            </a>
        </nav>

        <div id="navigation" class="tt-menu__slider">

            <ul data-simplebar data-simplebar-auto-hide="false" class="tt-menu__items">

                <?php echo wp_generate_menu('primary'); ?>
                <?php

                $categories = get_categories(array(
                    'orderby'    => 'name',
                    'order' => 'ASC',
                    'orderby' => 'meta_value',
                    'meta_query' => array(
                        array('key' => 'category_order')
                    ),
                    'hide_empty' => false,
                ));

                foreach ($categories as $category) :
                    $url = get_category_link($category);
                    $name = $category->cat_name;
                ?>

                    <li style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-menu__item">
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

                </div>

            <?php endif; ?>

        </div>
        <div id="content">