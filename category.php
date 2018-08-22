<?php
/*
Template Name: Category
*/

get_header();


// get the current taxonomy term
$term = get_queried_object();


// vars
$background = get_field('category_background', $term);
$background_position = get_field('category_background_position', $term);
$logo_svg = get_field('category_logo_svg', $term);
?>

<body class="tt-cat">

    <!-- Category Masthead -->
    <div class="tt-masthead tt-masthead--overlay" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
        <div class="tt-masthead__logo-wrapper">
            <div class="tt-masthead__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo_svg ?>.svg');"></div>
        </div>
    </div>

    <section class="tt-cat__cont">

        <?php
            $current_page = get_queried_object();
            $category     = $current_page->slug;

            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $query = new WP_Query( 
                array(
                    'paged'         => $paged, 
                    'category_name' => $category,
                    'order'         => 'asc',
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                )
            );

            if ($query->have_posts()) : ?>

            <!-- Category Cards -->
            <ul class="tt-cat__cards">

                <?php while($query->have_posts()) : $query->the_post(); ?>
                       
                    <!-- Category Card -->
                    <li class="tt-cat__cards__item">
                        <a href="<?php the_permalink() ?>" class="tt-cat__card">

                        <?php if( have_rows('article_masthead') ): ?>

                            <?php while ( have_rows('article_masthead') ) : the_row(); ?>

                                <!-- Category Card Image -->
                                <div class="tt-cat__card__img" style="background-image: url('<?php echo the_sub_field('article_masthead_background'); ?>');"></div>

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
                                <strong><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ) ?></strong>
                            </div>

                        </a>
                    </li>

                <?php endwhile; ?>

            </ul>

            <?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi( array( 'query' => $query ) ); ?>

            <?php wp_reset_postdata(); ?>

        <?php else: ?>

            <div class="tt-cat__cards--not-found">
                <h2>Our team is working on writing some cool articles. Come back later!</h2>
            </div>

        <?php endif; ?>

    </section>

<?php get_footer(); ?>



