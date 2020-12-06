<?php
/*
Template Name: Post
*/
?>

<?php get_header(); ?>

<div id="tt-lightgallery" class="tt-article">

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=222979458397550';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php if (have_rows('article_masthead')) : ?>

        <?php while (have_rows('article_masthead')) : the_row(); ?>

            <?php

            $image = get_sub_field('article_masthead_background');

            if (!empty($image)) :
            ?>

                <div class="tt-masthead__cont">
                    <div class="tt-masthead tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>'); background-position: <?php the_sub_field('article_masthead_background_position'); ?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <article>
        <div class="container-fluid">
            <div class="row">
                <section class="tt-article__cont">

                    <div class="col-sm-8 col-sm-offset-2">

                        <?php
                        $article_category = get_the_category()[0];
                        $article_category_name = $article_category->cat_name;
                        $article_category_link = get_category_link($article_category);
                        ?>

                        <header>
                            <div class="tt-header--center__wrapper">
                                <div class="tt-header tt-header--center tt-article__header" style="--category-color:<?php the_field('category_color', $article_category); ?>;">
                                    <span class="tt-article__category">
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

                            <ul class="tt-article__info">
                                <li>
                                    <?php echo get_wp_user_avatar(get_post_field('post_author', get_the_ID())); ?>
                                </li>
                                <li><i>Written by</i>
                                    <strong><?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></strong>
                                </li>
                                <li><i>Published on</i><?php echo get_the_date('F j, Y @ g:ia'); ?></li>
                            </ul>
                        </header>

                    </div>

                    <div class="col-sm-6 col-sm-offset-3">

                        <?php if (have_rows('article_content')) : ?>

                            <?php $rowCount = count(get_field('article_content')); ?>

                            <?php while (have_rows('article_content')) : the_row(); ?>

                                <?php if (get_row_layout() == 'ads') : ?>

                                    <div class="tt-ads">
                                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- Responsive Display Ads -->
                                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1857288814890028" data-ad-slot="1896422485" data-ad-format="auto" data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                    </div>

                                <?php elseif (get_row_layout() == 'spoiler') : ?>

                                    <div class="tt-article__spoiler">

                                        <span>Spoiler Warning</span>
                                        <h2>Spoiler Warning</h2>

                                    </div>

                                <?php elseif (get_row_layout() == 'cta') : ?>

                                    <div class="col-sm-6 col-sm-offset-3 tt-article__cta">

                                        <a href="<?php the_sub_field('cta_link'); ?>" class="tt-btn tt-btn--fill" target="_blank"><?php the_sub_field('cta_text'); ?></a>

                                    </div>

                                <?php elseif (get_row_layout() == 'text') : ?>

                                    <?php the_sub_field('text'); ?>

                                <?php elseif (get_row_layout() == 'quote') : ?>

                                    <blockquote class="tt-quote tt-quote--<?php the_sub_field('quote_theme'); ?>">
                                        <div class="tt-quote__info">
                                            <p>
                                                <q><?php the_sub_field('quote_text'); ?></q>
                                            </p>
                                            <footer>
                                                <cite><?php the_sub_field('quote_cite'); ?></cite>
                                            </footer>
                                        </div>

                                        <?php

                                        $image = get_sub_field('quote_image');

                                        if (!empty($image)) :
                                        ?>

                                            <img class="tt-quote__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                        <?php endif; ?>

                                    </blockquote>

                                <?php elseif (get_row_layout() == 'video') : ?>

                                    <div class="tt-video__cont">

                                        <div class="tt-video">
                                            <iframe src="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <span class="tt-caption"><?php the_sub_field('video_caption'); ?></span>

                                    </div>

                                <?php elseif (get_row_layout() == 'image') : ?>

                                    <?php

                                    $image = get_sub_field('image');

                                    if (!empty($image)) :
                                    ?>

                                        <?php if (get_sub_field('image_type') == 'regular') : ?>

                                            <figure class="tt-article__img tt-article__img--regular">
                                                <div class="tt-lightgallery--item" data-src="<?php echo $image['url']; ?>">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                </div>

                                                <?php if ($image['caption']) : ?>

                                                    <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                                                <?php endif; ?>

                                            </figure>

                                        <?php elseif (get_sub_field('image_type') == 'full') : ?>

                    </div>

                    <div class="col-sm-12 tt-img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                        <figure class="tt-article__img">
                            <div class="tt-article__img--<?php the_sub_field('image_type'); ?> tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>

                            <?php if ($image['caption']) : ?>

                                <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                            <?php endif; ?>
                        </figure>

                    </div>

                    <?php if (get_row_index() < $rowCount) : ?>
                        <div class="col-sm-6 col-sm-offset-3">
                        <?php endif; ?>

                    <?php elseif (get_sub_field('image_type') == 'left' || get_sub_field('image_type') == 'right') : ?>

                        </div>

                        <div class="col-sm-9 tt-img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                            <figure class="tt-article__img">
                                <div class="tt-article__img--<?php the_sub_field('image_type'); ?> tt-lightgallery--item" data-src="<?php echo $image['url']; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>

                                <?php if ($image['caption']) : ?>

                                    <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                                <?php endif; ?>
                            </figure>

                        </div>

                        <?php if (get_row_index() < $rowCount) : ?>
                            <div class="col-sm-6 col-sm-offset-3">
                            <?php endif; ?>

                        <?php endif; ?>

                    <?php endif; ?>

                <?php elseif (get_row_layout() == 'gallery') : ?>

                    <?php

                                    $images = get_sub_field('gallery');
                                    $size = 'full';

                                    if ($images) :
                    ?>

                            </div>

                            <div class="col-md-10 col-md-offset-1 tt-img tt-article__img--gallery__cont">

                                <div class="gallery__cont">

                                    <div class="tt-article__img--gallery swiper-container">

                                        <div class="swiper-wrapper tt-lg-gallery">

                                            <?php foreach ($images as $image) : ?>
                                                <div class="swiper-slide tt-lightgallery--item" data-src="<?php echo $image['url']; ?>">

                                                    <img class="swiper-lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <div>

                                            <div class="tt-arrow tt-arrow--left">
                                                <div></div>
                                            </div>

                                            <div class="tt-arrow tt-arrow--right">
                                                <div></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <?php if ($image['caption']) : ?>

                                    <span class="tt-caption"><?php the_sub_field('gallery_caption'); ?></span>

                                <?php endif; ?>

                            </div>

                            <?php if (get_row_index() < $rowCount) : ?>
                                <div class="col-sm-6 col-sm-offset-3">
                                <?php endif; ?>
                            <?php endif; ?>

                        <?php endif; ?>

                    <?php endwhile; ?>

                <?php else : ?>

                <?php endif; ?>

                                </div>

                </section>

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="tt-article__info__social">

                        <?php

                        if (function_exists('social_warfare')) :
                            social_warfare();
                        endif;

                        ?>

                    </div>

                    <div class="tt-ads">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Responsive Display Ads -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1857288814890028" data-ad-slot="1896422485" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
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

                    <div class="tt-member-card">
                        <div class="tt-member-card__inner">
                            <div class="tt-member-card__img">
                                <?php echo get_wp_user_avatar(get_post_field('post_author', get_the_ID())); ?>
                            </div>
                            <div class="tt-member-card__info">
                                <div class="tt-header--center__wrapper">
                                    <div class="tt-header tt-header--center">
                                        <span><?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></span>
                                        <h2><?php the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?>
                                        </h2>
                                    </div>
                                </div>
                                <div data-simplebar class="tt-member--bio">
                                    <p><?php the_author_meta('description', get_post_field('post_author', get_the_ID())); ?>
                                    </p>
                                </div>

                                <?php if (have_rows('social_media', ('user_' . get_post_field('post_author', get_the_ID())))) : ?>

                                    <ul class="tt-social">

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
        </div>
    </article>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="tt-ads">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive Display Ads -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1857288814890028" data-ad-slot="1896422485" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>

    <?php
    $post_tags = get_the_tags(get_the_ID());
    if ($post_tags) {
        $post_tag_ids = array();
        foreach ($post_tags as $individual_tag) $post_tag_ids[] = $individual_tag->term_id;
    }
    $related_posts = get_posts(array(
        'tag__in' => $post_tag_ids,
        'showposts' => 3,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
        'fields' => 'ids'
    ));

    $exclude_posts = $related_posts;

    array_push($exclude_posts, get_the_ID());

    $author_posts = get_posts(array(
        'author' => get_post_field('post_author', get_the_ID()),
        'showposts' => 3,
        'post_status' => 'publish',
        'post__not_in' => $exclude_posts,
        'fields' => 'ids'
    ));

    ?>

    <?php if ($author_posts) : ?>

        <section class="tt-cat__cont">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="tt-header--center__wrapper">
                            <div class="tt-header tt-header--center">
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

                                            <div class="tt-cat__card__cont">

                                                <h3 style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card__title">
                                                    <?php the_title(); ?>
                                                </h3>

                                                <?php the_field('article_excerpt'); ?>

                                            </div>

                                            <div style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card__cat-info">
                                                <span><?php echo $category_name  ?></span>
                                                <span><?php echo $category_name  ?></span>
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

    <?php if ($related_posts) : ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tt-ads">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Responsive Display Ads -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1857288814890028" data-ad-slot="1896422485" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <section class="tt-cat__cont">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="tt-header--center__wrapper">
                            <div class="tt-header tt-header--center">
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

                                            <div class="tt-cat__card__cont">

                                                <h3 style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card__title">
                                                    <?php the_title(); ?>
                                                </h3>

                                                <?php the_field('article_excerpt'); ?>

                                            </div>

                                            <div style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card__cat-info">
                                                <span><?php echo $category_name  ?></span>
                                                <span><?php echo $category_name  ?></span>
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

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3 tt-article__more-articles-cta">

                <?php

                $taxonomy = get_the_terms($post->ID, 'series')[0];
                $link = get_term_link($taxonomy->slug, 'series');

                ?>

                <?php if ($taxonomy) : ?>

                    <a href="<?php echo $link ?>" class="tt-btn tt-btn--fill">More from the Series</a>

                <?php endif; ?>

                <a style="--category-color:<?php the_field('category_color', $article_category); ?>;" class="tt-btn tt-btn--cat__fill" href="<?php echo $article_category_link ?>">More <?php echo $article_category_name ?></a>

            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="tt-ads">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive Display Ads -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1857288814890028" data-ad-slot="1896422485" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>