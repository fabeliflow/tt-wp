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

<!-- Section Template -->

<body class="tt-cat">

<!-- Section Masthead -->
<div class="tt-masthead tt-masthead--overlay" style="background-image: url('<?php echo $background ?>'); background-position: <?php echo $background_position ?>">
    <div class="tt-masthead__logo-wrapper">
        <div class="tt-masthead__logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo_svg ?>.svg');"></div>
    </div>
</div>

<section class="tt-cat__cont">

    <?php if ( have_posts() ) : ?>

        <!-- Section Cards -->
        <ul class="tt-cat__cards">

            <?php while ( have_posts() ) : the_post(); ?>

            <!-- Section Card -->
            <li class="tt-cat__cards__item">
                <a href="<?php the_permalink() ?>" class="tt-cat__card">

                <!--  check if the repeater field has rows of data -->
                <?php if( have_rows('post_masthead') ): ?>

                    <!--  loop through the rows of data -->
                    <?php while ( have_rows('post_masthead') ) : the_row(); ?>
                        <!-- Section Card Image -->
                        <div class="tt-cat__card__img" style="background-image: url('<?php the_sub_field('post_masthead_background'); ?>');"></div>

                    <?php endwhile; ?>

                <?php endif; ?>

                    <div class="tt-cat__card__cont">

                        <!-- Section Card Title -->
                        <h3 class="tt-cat__card__title">
                            <?php the_title(); ?>
                        </h3>

                        <!-- Section Card Description -->
                        <p class="tt-cat__card__descr">
                            <?php echo custom_field_excerpt('post_excerpt'); ?>
                        </p>

                    </div>

                    <!-- Section Card Author -->
                    <div class="tt-cat__card__auth">
                        <span>By</span>
                        <strong><?php the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ) ?></strong>
                    </div>

                </a>
            </li>

            <?php endwhile; ?>

        </ul>

    <?php else: ?>

        <div class="tt-cat__cards--not-found">
            <h2>Our team is working on writing some cool articles. Come back later!</h2>
        </div>
        
    <?php endif; ?>

</section>

<?php get_footer(); ?>



