<?php
/*
Template Name: Post
*/
?>

<?php get_header(); ?>

<body class="tt-article">

    <!-- Facebook Comments -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=222979458397550';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <?php if( have_rows('article_masthead') ): ?>

        <?php while ( have_rows('article_masthead') ) : the_row(); ?>

            <div class="tt-masthead" style="background-image: url('<?php the_sub_field('article_masthead_background'); ?>'); background-position: <?php the_sub_field('article_masthead_background_position'); ?>"></div>

        <?php endwhile; ?>

    <?php endif; ?>

    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">

                    <!-- Article Header -->
                    <header class="tt-article__header">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </header>

                </div>
                <div class="col-sm-6 col-sm-offset-3">

                    <!-- Article Info -->
                    <ul class="tt-article__info">
                        <li><i>By </i><strong><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ) ?></strong></li>
                        <li><i>Published </i><?php echo get_the_date('F j, Y @ g:ia') ?></li>

                        <?php if ( get_the_modified_date('F j, Y @ g:ia') > get_the_date('F j, Y @ g:ia') ): ?>
                            <li><i>Last Updated </i><?php echo get_the_modified_date('F j, Y @ g:ia') ?></li>
                        <?php endif;  ?>

                    </ul>

                    <div class="tt-article__info__social">

                        <?php 

                            if(function_exists('social_warfare')):
                                social_warfare();
                            endif;
                        
                        ?>

                    </div>

                </div>

                <section class="tt-article__cont">
                    
                    <!-- Article Content -->
                    <?php if( have_rows('article_content') ): ?>

                        <?php while ( have_rows('article_content') ) : the_row(); ?>

                            <!-- Text Module -->
                            <?php if( get_row_layout() == 'text' ): ?>

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
                                        <div class="tt-article__img">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            
                                            <?php if( $image['caption'] ):?>

                                                <span class="tt-caption"><?php echo $image['caption']; ?></span>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Full Image -->
                                    <?php elseif( get_sub_field('image_type') == 'full' ): ?>

                                    <div class="col-sm-12 tt-article__img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                                        <div class="tt-article__img--<?php the_sub_field('image_type'); ?>" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                                        
                                        <?php if( $image['caption'] ):?>

                                            <span class="tt-caption"><?php echo $image['caption']; ?></span>

                                        <?php endif; ?>

                                    </div>

                                    <!-- Full Left Image -->
                                    <?php elseif( get_sub_field('image_type') == 'left' ): ?>

                                    <div class="col-sm-9 tt-article__img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                                        <div class="tt-article__img--<?php the_sub_field('image_type'); ?>" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                                        
                                        <?php if( $image['caption'] ):?>

                                            <span class="tt-caption"><?php echo $image['caption']; ?></span>

                                        <?php endif; ?>

                                    </div>

                                    <!-- Full Right Image -->
                                    <?php elseif( get_sub_field('image_type') == 'right' ): ?>

                                    <div class="col-sm-9 tt-article__img tt-article__img--<?php the_sub_field('image_type'); ?>__cont">
                                        <div class="tt-article__img--<?php the_sub_field('image_type'); ?>" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                                        
                                        <?php if( $image['caption'] ):?>

                                            <span class="tt-caption"><?php echo $image['caption']; ?></span>

                                        <?php endif; ?>

                                    </div>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <!-- Gallery Module -->
                                <?php elseif( get_row_layout() == 'gallery' ): ?>

                                <?php 

                                $images = get_sub_field('gallery');
                                $size = 'full';

                                if( $images ): ?>
                                    <div class="col-sm-12 tt-article__img--carousel__cont">

                                        <div class="tt-article__img--carousel">

                                            <?php foreach( $images as $image ): ?>
                                                <div>
                                                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                                </div>
                                            <?php endforeach; ?>
                                            
                                        </div>

                                        <span class="tt-caption"><?php the_sub_field('gallery_caption'); ?></span>
                                        
                                        <!-- Arrows -->
                                        <div class="tt-arrow tt-arrow--left">
                                            <div></div>
                                        </div>

                                        <div class="tt-arrow tt-arrow--right">
                                            <div></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            
                            <!-- Video Module -->
                            <?php elseif( get_row_layout() == 'video' ): ?>

                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="tt-video">
                                        <div class="tt-video__cont">
                                            <div class="tt-video__mask">

                                                <!-- Video Mask SVG -->
                                                <svg class="tt-video__mask__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    x="0px" y="0px" viewBox="0 0 1194 554" preserveAspectRatio="none" style="enable-background:new 0 0 1194 554;"
                                                    xml:space="preserve">
                                                    <path class="tt-video__svg__bg" d="M0,0v554h1194V0H0z M1121,236l-108,14c0,0-5,1-5,6h-0.1c0,0,0.1,0,0.1,0.1c0,6,5,7.3,5,7.3l108,17.1v138
                                                                c0,65.9-57,69.6-57,69.6H833.7c-0.7,0-0.7,0-0.7,0c-1.7-0.1-8-0.7-32-23c-11.4-10.6-21-20-26-20H597H419c-5,0-14.6,9.4-26,20
                                                                c-24,22.3-30.3,22.9-32,23c0,0,0,0-0.7,0H130c0,0-57-3.7-57-69.6v-138l108-17.1c0,0,5-1.2,5-7.3c0,0,0-0.1,0.1-0.1H186c0-5-5-6-5-6
                                                                L73,236c0,0,0-59,0-113s57-57,57-57h467h467c0,0,57,3,57,57S1121,236,1121,236z"
                                                    />
                                                    <polygon class="tt-video__svg__triangle" points="583,21 583,53 611,53 " />
                                                    <g>
                                                        <line class="tt-video__svg__bars" x1="44" y1="152" x2="57" y2="152" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="177" x2="57" y2="177" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="202" x2="57" y2="202" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="227" x2="57" y2="227" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="252" x2="57" y2="252" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="277" x2="57" y2="277" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="302" x2="57" y2="302" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="327" x2="57" y2="327" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="352" x2="57" y2="352" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="377" x2="57" y2="377" />
                                                        <line class="tt-video__svg__bars" x1="44" y1="402" x2="57" y2="402" />
                                                        <circle class="tt-video__svg__dots" cx="37" cy="152" r="3" />
                                                        <circle class="tt-video__svg__dots" cx="37" cy="277" r="3" />
                                                        <circle class="tt-video__svg__dots" cx="37" cy="402" r="3" />
                                                        <polygon class="tt-video__svg__arrow" points="12,265 12,290 33,277 	" />
                                                    </g>
                                                </svg>

                                                <div class="tt-video__time-stamp">
                                                    <span><?php the_sub_field('video_timestamp'); ?></span>
                                                </div>

                                                <!-- Play Button -->
                                                <a href="<?php the_sub_field('video_link'); ?>" data-effect="mfp-zoom-in" class="tt-video__btn">
                                                    <i class="fas fa-play"></i>
                                                </a>

                                                <!-- Video Poster -->
                                                <div class="tt-video__poster scanline" style="background-image: url('<?php the_sub_field('video_poster'); ?>')"></div>

                                            </div>

                                        </div>

                                        <!-- Caption -->
                                        <span class="tt-caption"><?php the_sub_field('video_caption'); ?></span>

                                    </div>
                                </div>
                                
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

                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>

                </div>

            </div>
        </div>
    </article>

    <!-- More Articles By The Author -->
    <?php
    $rand_posts = get_posts( array(
        'author'         =>  get_post_field( 'post_author', get_the_ID() ),
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post__not_in' => array( get_the_ID() ),
        'orderby'        => 'rand'
    ) ); ?>
     
    <?php if ( $rand_posts ) : ?>

        <section class="tt-cat__cont">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 tt-article__more">
                        <span>More by the author</span>
                    </div>
                </div>
            </div>

            <!-- Category Cards -->
            <ul class="tt-cat__cards">
            
                <?php  foreach ( $rand_posts as $post ) : setup_postdata( $post ); ?>

                    <!-- Category Card -->
                    <li class="tt-cat__cards__item">
                        <a href="<?php the_permalink() ?>" class="tt-cat__card">

                        <?php if( have_rows('article_masthead') ): ?>

                            <?php while ( have_rows('article_masthead') ) : the_row(); ?>

                                <!-- Category Card Image -->
                                <div class="tt-cat__card__img" style="background-image: url('<?php the_sub_field('article_masthead_background'); ?>');"></div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                            <div class="tt-cat__card__cont">

                                <!-- Category Card Title -->
                                <h3 class="tt-cat__card__title">
                                    <?php the_title(); ?>
                                </h3>

                                <!-- Category Card Description -->
                                <p class="tt-cat__card__descr">
                                    <?php echo custom_field_excerpt('article_excerpt'); ?>
                                </p>

                            </div>

                            <!-- Category Card Author -->
                            <div class="tt-cat__card__auth">
                                <span>By</span>
                                <strong><?php the_author_meta('display_name', $author); ?></strong>
                            </div>

                        </a>
                    </li>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

            </ul>

        </section>

    <?php endif; ?>

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top" class="tt-arrow tt-arrow--scroll-top">
        <div></div>
    </a>
    
<?php get_footer(); ?>