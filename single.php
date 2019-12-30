<?php
/*
Template Name: Post
*/
?>

<?php get_header(); ?>

<body class="tt-article">

    <!-- Facebook Comments -->
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

    <?php if( have_rows('article_masthead') ): ?>

    <?php while ( have_rows('article_masthead') ) : the_row(); ?>

    <div class="tt-masthead"
        style="background-image: url('<?php the_sub_field('article_masthead_background'); ?>'); background-position: <?php the_sub_field('article_masthead_background_position'); ?>">
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

    <article>
        <div class="container-fluid">
            <div class="row">
                <section class="tt-article__cont">

                    <div class="col-sm-8 col-sm-offset-2">

                        <?php
                            $category = get_the_category()[0];
                            $icon = get_field('category_icon_svg', $category);
                            $category_name = $category->cat_name;
                        ?>

                        <!-- Article Header -->
                        <header class="tt-header tt-header--center tt-article__header"
                            style="--category-color:<?php the_field('category_color', $category); ?>;">
                            <div class="tt-header--cat__icon">
                                <img class="tt-cat__icon"
                                    src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $icon ?>.svg" />
                                <span class="tt-article__category">
                                    <?php echo $category_name  ?>
                                </span>
                            </div>
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <!-- Article Info -->
                            <ul class="tt-article__info">
                                <li><i>Written by</i>
                                    <strong><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ); ?></strong>
                                </li>
                                <li><i>Published on</i><?php echo get_the_date('F j, Y @ g:ia'); ?></li>

                            </ul>
                        </header>

                    </div>

                    <!-- Article Content -->
                    <?php if( have_rows('article_content') ): ?>

                    <?php while ( have_rows('article_content') ) : the_row(); ?>

                    <!-- Spoiler Warning Module -->
                    <?php if( get_row_layout() == 'spoiler' ): ?>

                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="tt-article__spoiler">

                            <span>Spoiler Warning</span>
                            <h2>Spoiler Warning</h2>

                        </div>

                        <?php the_sub_field('text'); ?>

                    </div>

                    <!-- Text Module -->
                    <?php elseif( get_row_layout() == 'text' ): ?>

                    <div class="col-sm-6 col-sm-offset-3">

                        <?php the_sub_field('text'); ?>

                    </div>

                    <!-- Image Module -->
                    <?php elseif( get_row_layout() == 'image' ): ?>

                    <?php 

                                $image = get_sub_field('image');

                                if( !empty($image) ): ?>

                    <!-- Regular Image -->
                    <?php if( get_sub_field('image_type') == 'regular' ): ?>

                    <div class="col-sm-6 col-sm-offset-3">
                        <figure class="tt-article__img">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                            <?php if( $image['caption'] ):?>

                            <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                            <?php endif; ?>

                        </figure>
                    </div>

                    <!-- Full Image -->
                    <?php elseif( get_sub_field('image_type') == 'full' ): ?>

                    <div class="col-sm-12 tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                        <figure class="tt-article__img">
                            <div class="tt-article__img--<?php the_sub_field('image_type'); ?>"
                                style="background-image: url('<?php echo $image['url']; ?>')"></div>

                            <?php if( $image['caption'] ):?>

                            <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                            <?php endif; ?>
                        </figure>

                    </div>

                    <!-- Full Left or Right Image -->
                    <?php elseif( get_sub_field('image_type') == 'left' || get_sub_field('image_type') == 'right' ) : ?>

                    <div class="col-sm-9 tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                        <figure class="tt-article__img">
                            <div class="tt-article__img--<?php the_sub_field('image_type'); ?>"
                                style="background-image: url('<?php echo $image['url']; ?>')"></div>

                            <?php if( $image['caption'] ):?>

                            <figcaption class="tt-caption"><?php echo $image['caption']; ?></figcaption>

                            <?php endif; ?>
                        </figure>

                    </div>

                    <?php endif; ?>

                    <?php endif; ?>

                    <!-- Gallery Module -->
                    <?php elseif( get_row_layout() == 'gallery' ): ?>

                    <?php 

                                $images = get_sub_field('gallery');
                                $size = 'full';

                                if( $images ): ?>
                    <div class="col-md-8 col-md-offset-2">

                        <div class="tt-article__img--gallery__cont">

                            <div class="gallery__cont">

                                <div class="tt-article__img--gallery swiper-container">

                                    <div class="swiper-wrapper">

                                        <?php foreach( $images as $image ): ?>
                                        <div class="swiper-slide">

                                            <figure>
                                                <img class="swiper-lazy" src="<?php echo $image['url']; ?>"
                                                    alt="<?php echo $image['alt']; ?>">
                                            </figure>

                                        </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>

                                <!-- Navigation -->
                                <div class="tt-article__img--gallery__nav">

                                    <!-- Arrows -->
                                    <div class="tt-arrow tt-arrow--left">
                                        <div></div>
                                    </div>

                                    <div class="tt-arrow tt-arrow--right">
                                        <div></div>
                                    </div>

                                </div>

                            </div>

                            <?php if( $image['caption'] ):?>

                            <figcaption class="tt-caption"><?php the_sub_field('gallery_caption'); ?></figcaption>

                            <?php endif; ?>

                        </div>

                    </div>
                    <?php endif; ?>

                    <?php endif; ?>

                    <?php endwhile; ?>

                    <?php else : ?>

                    <!-- No layouts found -->

                    <?php endif; ?>

                </section>

                <!-- Social Media Share -->
                <div class="col-sm-6 col-sm-offset-3">

                    <div class="tt-article__info__social">

                        <?php 

                            if(function_exists('social_warfare')):
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
                            <a href="https://tatooinetimes.com/wpautoterms/terms-and-conditions/#facebook-comments-faq">Learn
                                More</a>.
                        </div>

                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%"
                            data-numposts="5"></div>
                    </div>

                    <div class="tt-member-card tt-member-card--portrait">
                        <div class="tt-member-card__inner">
                            <div class="tt-member-card__img">
                                <?php echo get_wp_user_avatar(get_post_field('post_author', get_the_ID())); ?>
                            </div>
                            <div class="tt-member-card__info">
                                <div class="tt-header tt-header--center">
                                    <span><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ); ?></span>
                                    <h2><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ); ?>
                                    </h2>
                                </div>
                                <div data-simplebar class="tt-member--bio">
                                    <p><?php the_author_meta( 'description', get_post_field( 'post_author', get_the_ID() ) ); ?>
                                    </p>
                                </div>

                                <?php if( have_rows('social_media',  get_post_field( 'post_author', get_the_ID() )) ): ?>

                                <ul class="tt-social">

                                    <?php while ( have_rows('social_media',  get_post_field( 'post_author', get_the_ID() )) ) : the_row(); ?>

                                    <li>
                                        <a class="tt-social__icon"
                                            href="<?php the_sub_field('social_media_url'); ?> fa-fw" target="_blank">
                                            <i class="<?php the_sub_field('social_media_class'); ?>"></i>
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

    <!-- More Articles By The Author -->
    <?php
    $rand_posts = get_posts( array(
        'author'         =>  get_post_field( 'post_author', get_the_ID() ),
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'post__not_in' => array( get_the_ID() ),
        'orderby'        => 'rand'
    ) ); ?>

    <?php if ( $rand_posts ) : ?>

    <section class="tt-cat__cont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 tt-header tt-header--center">
                    <span>More by the author</span>
                    <h2>More by the author</h2>
                </div>
            </div>
        </div>

        <!-- Category Cards -->
        <ul class="tt-cat__cards">

            <?php  foreach ( $rand_posts as $post ) : setup_postdata( $post ); ?>

            <?php
                            $category = get_the_category()[0];
                            $category_name = $category->cat_name;
                        ?>

            <!-- Category Card -->
            <li class="tt-cat__cards__item">
                <a href="<?php the_permalink() ?>"
                    style="--category-color:<?php the_field('category_color', $category); ?>;" class="tt-cat__card">

                    <?php if( have_rows('article_masthead') ): ?>

                    <?php while ( have_rows('article_masthead') ) : the_row(); ?>

                    <!-- Category Card Image -->
                    <div class="tt-cat__card__img"
                        style="background-image: url('<?php the_sub_field('article_masthead_background'); ?>');"></div>

                    <?php endwhile; ?>

                    <?php endif; ?>

                    <div class="tt-cat__card__info">

                        <div class="tt-cat__card__cont">

                            <!-- Category Card Title -->
                            <h3 style="--category-color:<?php the_field('category_color', $category); ?>;"
                                class="tt-cat__card__title">
                                <?php the_title(); ?>
                            </h3>

                            <!-- Category Card Description -->
                            <p class="tt-cat__card__descr">
                                <?php echo custom_field_excerpt('article_excerpt'); ?>
                            </p>

                        </div>

                        <!-- Category Card Category Name -->
                        <div style="--category-color:<?php the_field('category_color', $category); ?>;"
                            class="tt-cat__card__cat-info">
                            <img class="tt-cat__icon"
                                src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $icon ?>.svg" />
                            <div class="tt-cat__card__cat-name">
                                <span><?php echo $category_name  ?></span>
                                <span><?php echo $category_name  ?></span>
                            </div>
                        </div>

                    </div>

                </a>
            </li>

            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

        </ul>

    </section>

    <?php endif; ?>

    <?php get_footer(); ?>