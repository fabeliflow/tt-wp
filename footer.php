<!-- Footer -->

<?php if (is_single() || is_category()) : ?>

    <footer class="tt-footer">

    <?php $image = get_field('footer_image', 'footer'); ?>

    <!-- Footer Image -->
    <img class="tt-footer__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <div class="tt-footer__cont" style="background-color:<?php the_field('footer_background_color', 'footer'); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">

                    <!-- Footer Logo -->
                    <a href="<?php echo get_home_url(); ?>">
                        <div class="tt-footer__logo"></div>
                    </a>

                    <!-- TT Social Media Icons -->
                    <?php if( have_rows('menu_social', 'header') ): ?>

                        <ul class="tt-social">
                            
                            <!--  loop through the rows of data -->
                            <?php while ( have_rows('menu_social', 'social-media') ) : the_row(); ?>

                                <li>
                                    <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>" target="_blank">
                                        <i class="<?php the_sub_field('menu_social_class'); ?>"></i>
                                    </a>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>
                <div class="col-xs-10 col-xs-offset-1">

                    <!-- Footer Disclaimer -->
                    <p class="tt-footer__disclaimer">
                        <?php the_field('footer_disclaimer', 'footer'); ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
    </footer>

<?php endif; ?>

<?php wp_footer(); ?>

<!-- END OF FOOTER -->

</body>

</html>