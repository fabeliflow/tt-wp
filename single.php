<?php
/*
Template Name: Post
*/
?>

<?php get_header(); ?>

<div id="tt-lightgallery" class="tt-article">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=222979458397550&autoLogAppEvents=1" nonce="ifUAz0CO"></script>

    <?php if (have_rows('article_masthead')) : ?>

        <?php while (have_rows('article_masthead')) : the_row(); ?>

            <?php

            $image = get_sub_field('article_masthead_background');

            if (!empty($image)) :
            ?>

                <div class="tt-masthead tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>'); background-position: <?php the_sub_field('article_masthead_background_position'); ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <article>
        <section class="tt-article__section">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-lg-8">

                        <?php
                        $article_category = get_the_category()[0];
                        $article_category_name = $article_category->cat_name;
                        $article_category_link = get_category_link($article_category);
                        $article_id = $article_category->term_id;
                        ?>

                        <header class="tt-article__header">
                            <div class="tt-header--center__wrapper">
                                <div class="tt-header tt-header--center" style="--category-color:<?php the_field('category_color', $article_category); ?>;">
                                    <span>
                                        <?php echo $article_category_name  ?>
                                    </span>
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                            </div>

                            <div class="tt-article__header--excerpt">
                                <?php the_field('article_excerpt'); ?>
                            </div>

                            <div class="tt-article__info">
                                <?php echo get_wp_user_avatar(get_post_field('post_author', get_the_ID())); ?>
                                <h3>
                                    <?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?>
                                </h3>
                                <span>
                                    <?php echo get_the_date('F j, Y @ g:ia'); ?>
                                </span>
                            </div>
                        </header>

                    </div>
                </div>

                <?php if (have_rows('article_content')) : ?>

                    <?php $rowCount = count(get_field('article_content')); ?>

                    <?php while (have_rows('article_content')) : the_row(); ?>

                        <?php if (get_row_layout() == 'spoiler') : ?>

                            <div class="row justify-content-center tt-article_module">
                                <div class="col-12 col-lg-6 tt-article__spoiler__cont">

                                    <div class="tt-article__spoiler">

                                        <span>Spoiler Warning</span>
                                        <h2>Spoiler Warning</h2>

                                    </div>

                                </div>
                            </div>

                        <?php elseif (get_row_layout() == 'cta') : ?>

                            <div class="row justify-content-center tt-article_module">
                                <div class="col col-lg-6">

                                    <div class="tt-article__cta">

                                        <a href="<?php the_sub_field('cta_link'); ?>" class="tt-btn tt-btn--ghost" target="_blank"><?php the_sub_field('cta_text'); ?></a>

                                    </div>

                                </div>
                            </div>

                        <?php elseif (get_row_layout() == 'text') : ?>

                            <div class="row justify-content-center tt-article_module">
                                <div class="col col-lg-6">

                                    <?php the_sub_field('text'); ?>

                                </div>
                            </div>

                        <?php elseif (get_row_layout() == 'quote') : ?>

                            <div class="row justify-content-center tt-article_module">

                                <?php
                                $image_switch = get_sub_field('quote_image_switch');

                                $image = get_sub_field('quote_image');
                                ?>

                                <?php if ($image_switch) : ?>

                                    <div class="col col-lg-6 tt-quote__cont tt-quote--with-img">

                                        <img class="tt-quote__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                    <?php else : ?>

                                        <div class="col col-lg-6 tt-quote__cont">

                                        <?php endif; ?>

                                        <blockquote class="tt-quote">

                                            <div class="tt-quote__info">
                                                <i class="fas fa-quote-left"></i>
                                                <q><?php the_sub_field('quote_text'); ?></q>
                                                <i class="fas fa-quote-right"></i>
                                                <footer>
                                                    <cite><?php the_sub_field('quote_cite'); ?></cite>
                                                </footer>
                                            </div>

                                        </blockquote>
                                        </div>
                                    </div>

                                <?php elseif (get_row_layout() == 'video') : ?>

                                    <div class="row justify-content-center tt-article_module">
                                        <div class="col-12 col-lg-6 tt-video__cont">
                                            <div class="tt-video">
                                                <iframe src="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <span class="tt-caption"><?php the_sub_field('video_caption'); ?></span>
                                        </div>
                                    </div>

                                <?php elseif (get_row_layout() == 'image') : ?>

                                    <?php

                                    $image = get_sub_field('image');

                                    if (!empty($image)) :
                                    ?>

                                        <?php if (get_sub_field('image_type') == 'regular') : ?>

                                            <div class="row justify-content-center tt-article_module">
                                                <div class="col-12 col-lg-6 tt-img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">

                                                    <figure class="tt-article__img tt-article__img--regular">
                                                        <div class="tt-lightgallery--item" data-src="<?php echo $image['url']; ?>">
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                        </div>

                                                        <?php if ($image['caption']) : ?>

                                                            <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                                                        <?php endif; ?>

                                                    </figure>

                                                </div>
                                            </div>

                                        <?php elseif (get_sub_field('image_type') == 'full') : ?>

                                            <div class="row justify-content-center tt-article_module">
                                                <div class="col-12 tt-img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                                                    <figure class="tt-article__img">
                                                        <div class="tt-article__img--<?php the_sub_field('image_type'); ?> tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                        </div>

                                                        <?php if ($image['caption']) : ?>

                                                            <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                                                        <?php endif; ?>
                                                    </figure>

                                                </div>
                                            </div>

                                        <?php elseif (get_sub_field('image_type') == 'left' || get_sub_field('image_type') == 'right') : ?>

                                            <?php if (get_sub_field('image_type') == 'left') : ?>

                                                <div class="row justify-content-start tt-article_module">

                                                <?php elseif (get_sub_field('image_type') == 'right') : ?>

                                                    <div class="row justify-content-end tt-article_module">

                                                    <?php endif; ?>

                                                    <div class="col col-lg-9 tt-img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                                                        <figure class="tt-article__img">
                                                            <div class="tt-article__img--<?php the_sub_field('image_type'); ?> tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                            </div>

                                                            <?php if ($image['caption']) : ?>

                                                                <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                                                            <?php endif; ?>
                                                        </figure>

                                                    </div>
                                                    </div>

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        <?php elseif (get_row_layout() == 'gallery') : ?>

                                            <?php

                                            $images = get_sub_field('gallery');
                                            $size = 'full';

                                            if ($images) :
                                            ?>

                                                <div class="row justify-content-center tt-article_module">
                                                    <div class="col tt-img tt-article__img--gallery__cont">

                                                        <div class="gallery__cont">

                                                            <div class="tt-article__img--gallery swiper-container">

                                                                <div class="swiper-wrapper tt-lg-gallery">

                                                                    <?php foreach ($images as $image) : ?>
                                                                        <div class="swiper-slide tt-lightgallery--item" data-src="<?php echo $image['url']; ?>">

                                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>

                                                                <div class="swiper-pagination"></div>

                                                            </div>

                                                        </div>

                                                        <?php if ($image['caption']) : ?>

                                                            <span class="tt-caption"><?php the_sub_field('gallery_caption'); ?></span>

                                                        <?php endif; ?>

                                                    </div>
                                                </div>

                                            <?php endif; ?>

                                        <?php endif; ?>

                                    <?php endwhile; ?>

                                <?php else : ?>

                                <?php endif; ?>

                                                </div>

        </section>

        <section class="tt-article__section">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-lg-6">

                        <div class="tt-article__info__social">

                            <?php

                            if (function_exists('social_warfare')) :
                                social_warfare();
                            endif;

                            ?>

                        </div>

                        <div class="fb-content">

                            <div class="fb-legal">
                                Use a Facebook account to add a comment, subject to Facebook's
                                <a href="https://www.facebook.com/legal/terms" target="_blank">Terms of Service</a>
                                and <a href="https://www.facebook.com/about/privacy" target="_blank">Privacy Policy</a>.
                                Your Facebook name, profile photo and other personal information you make public on Facebook
                                (e.g., school, work, current city, age) will appear with your comment.
                                <a href="https://tatooinetimes.com/legal-terms/terms-and-conditions/#facebook-comments-faq">Learn
                                    More</a>.
                            </div>

                            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-lg-6 tt-member-card__cont">

                        <div class="tt-member-card">
                            <?php echo get_wp_user_avatar(get_post_field('post_author', get_the_ID())); ?>
                            <div class="tt-member-card__info">
                                <div class="tt-header--center__wrapper">
                                    <div class="tt-header tt-header--center">
                                        <span><?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></span>
                                        <h2><?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></h2>
                                    </div>
                                </div>
                                <div class="tt-member--bio">
                                    <p><?php the_author_meta('description', get_post_field('post_author', get_the_ID())); ?>
                                    </p>
                                </div>

                                <?php if (have_rows('social_media', ('user_' . get_post_field('post_author', get_the_ID())))) : ?>

                                    <ul class="tt-social tt-social--alt">

                                        <?php while (have_rows('social_media', ('user_' . get_post_field('post_author', get_the_ID())))) : the_row(); ?>

                                            <li>
                                                <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                                                    <i class="<?php the_sub_field('social_media_class'); ?> fa-fw"></i>
                                                </a>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </article>

    <?php
    $post_tags = get_the_tags(get_the_ID());
    if ($post_tags) {
        $post_tag_ids = array();
        foreach ($post_tags as $individual_tag) $post_tag_ids[] = $individual_tag->term_id;
    }

    $author_posts = get_posts(array(
        'author' => get_post_field('post_author', get_the_ID()),
        'showposts' => 3,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'fields' => 'ids'
    ));

    $exclude_posts = $author_posts;

    array_push($exclude_posts, get_the_ID());

    $taxonomy = get_the_terms($post->ID, 'series')[0];
    $taxonomy_name = $taxonomy->name;
    $taxonomy_link = get_term_link($taxonomy);

    $taxonomy_posts = get_posts(array(
        'tax_query' => array(
            array(
                'taxonomy' => 'series',
                'field'    => 'slug',
                'terms'    => $taxonomy->slug,
            ),
        ),
        'showposts' => 3,
        'post_status' => 'publish',
        'post__not_in' => $exclude_posts,
        'fields' => 'ids'
    ));

    array_push($exclude_posts, $taxonomy_posts);

    $related_posts = get_posts(array(
        'tag__in' => $post_tag_ids,
        'showposts' => 3,
        'post_status' => 'publish',
        'post__not_in' => $exclude_posts,
        'fields' => 'ids'
    ));

    ?>

    <?php if ($author_posts) : ?>

        <section class="tt-cat__cont tt-article__more">

            <div class="container-fluid">
                <div class="row row-col justify-content-center">

                    <div class="col col-xl-10">

                        <div class="tt-header--center__wrapper">
                            <div class="tt-header tt-header--center tt-header--section">
                                <span>More by the Author</span>
                                <h2>More by the Author</h2>
                            </div>
                        </div>

                        <ul class="tt-cat__cards">

                            <?php foreach ($author_posts as $post) : setup_postdata($post); ?>

                                <?php
                                $category = get_the_category()[0];
                                $category_name = $category->cat_name;
                                ?>

                                <li class="tt-cat__cards__item">
                                    <a href="<?php the_permalink() ?>" style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card">

                                        <?php if (have_rows('article_masthead')) : ?>

                                            <?php while (have_rows('article_masthead')) : the_row(); ?>

                                                <?php

                                                $image = get_sub_field('article_masthead_background');

                                                if (!empty($image)) :
                                                ?>

                                                    <div class="tt-cat__card__img" style="background-image: url('<?php echo $image['url']; ?>');"></div>

                                                <?php endif; ?>

                                            <?php endwhile; ?>

                                        <?php endif; ?>

                                        <div class="tt-cat__card__info">

                                            <div class="tt-header--center__wrapper">
                                                <div class="tt-header tt-header--center tt-header--light">
                                                    <span><?php echo $category_name ?></span>
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </div>

                                        </div>

                                    </a>
                                </li>

                            <?php endforeach; ?>

                            <?php wp_reset_postdata(); ?>

                        </ul>
                    </div>
                </div>
            </div>

        </section>

    <?php endif; ?>

    <?php if ($taxonomy_posts) : ?>

        <section class="tt-cat__cont tt-article__more">

            <div class="container-fluid">
                <div class="row row-col justify-content-center">

                    <div class="col col-xl-10">

                        <div class="tt-header--center__wrapper">
                            <div class="tt-header tt-header--center tt-header--section">
                                <span>More from the Series</span>
                                <h2>More from <?php echo $taxonomy_name ?></h2>
                            </div>
                        </div>

                        <ul class="tt-cat__cards">

                            <?php foreach ($taxonomy_posts as $post) : setup_postdata($post); ?>

                                <?php
                                $category = get_the_category()[0];
                                $category_name = $category->cat_name;
                                ?>

                                <li class="tt-cat__cards__item">
                                    <a href="<?php the_permalink() ?>" style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card">

                                        <?php if (have_rows('article_masthead')) : ?>

                                            <?php while (have_rows('article_masthead')) : the_row(); ?>

                                                <?php

                                                $image = get_sub_field('article_masthead_background');

                                                if (!empty($image)) :
                                                ?>

                                                    <div class="tt-cat__card__img" style="background-image: url('<?php echo $image['url']; ?>');"></div>

                                                <?php endif; ?>

                                            <?php endwhile; ?>

                                        <?php endif; ?>

                                        <div class="tt-cat__card__info">

                                            <div class="tt-header--center__wrapper">
                                                <div class="tt-header tt-header--center tt-header--light">
                                                    <span><?php echo $category_name ?></span>
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </div>

                                        </div>

                                    </a>
                                </li>

                            <?php endforeach; ?>

                            <?php wp_reset_postdata(); ?>

                        </ul>

                        <a class="tt-btn tt-btn--ghost" href="<?php echo $taxonomy_link ?>">Read More</a>
                    </div>
                </div>
            </div>

        </section>

    <?php else : ?>

        <?php if ($related_posts) : ?>

            <section class="tt-cat__cont tt-article__more">

                <div class="container-fluid">
                    <div class="row row-col justify-content-center">

                        <div class="col col-xl-10">

                            <div class="tt-header--center__wrapper">
                                <div class="tt-header tt-header--center tt-header--section">
                                    <span>Related Articles</span>
                                    <h2>Related Articles</h2>
                                </div>
                            </div>

                            <ul class="tt-cat__cards">

                                <?php foreach ($related_posts as $post) : setup_postdata($post); ?>

                                    <?php
                                    $category = get_the_category()[0];
                                    $category_name = $category->cat_name;
                                    ?>

                                    <li class="tt-cat__cards__item">
                                        <a href="<?php the_permalink() ?>" style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card">

                                            <?php if (have_rows('article_masthead')) : ?>

                                                <?php while (have_rows('article_masthead')) : the_row(); ?>

                                                    <?php

                                                    $image = get_sub_field('article_masthead_background');

                                                    if (!empty($image)) :
                                                    ?>

                                                        <div class="tt-cat__card__img" style="background-image: url('<?php echo $image['url']; ?>');"></div>

                                                    <?php endif; ?>

                                                <?php endwhile; ?>

                                            <?php endif; ?>

                                            <div class="tt-cat__card__info">

                                                <div class="tt-header--center__wrapper">
                                                    <div class="tt-header tt-header--center tt-header--light">
                                                        <span><?php echo $category_name ?></span>
                                                        <h3><?php the_title(); ?></h3>
                                                    </div>
                                                </div>

                                            </div>

                                        </a>
                                    </li>

                                <?php endforeach; ?>

                                <?php wp_reset_postdata(); ?>

                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        <?php endif; ?>

    <?php endif; ?>

    <?php get_footer(); ?>