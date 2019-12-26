        <!-- Footer -->

        <footer>

            <?php if (is_single() || is_category()) : ?>

            <?php $image = get_field('footer_image', 'footer'); ?>

            <!-- Footer Image -->
            <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tatooine-cityscape-footer.png" alt="Tatooine Cityscape" />

            <div class="tt-footer__cont">
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

                                <?php while ( have_rows('menu_social', 'social-media') ) : the_row(); ?>

                                <li>
                                    <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                        target="_blank">
                                        <i class="<?php the_sub_field('menu_social_class'); ?>"></i>
                                    </a>
                                </li>

                                <?php endwhile; ?>

                            </ul>

                            <?php endif; ?>



                        </div>
                    </div>
                </div>
            </div>


            <?php elseif (is_front_page()) : ?>

            <div class="container tt-footer__home">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                        <div class="tt-header">
                            <span>Follow Us</span>
                            <h2>Follow Us</h2>
                        </div>
                        <!-- CHANGE TO DINAMIC -->
                        <ul class="tt-social">

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-twitter fa-fw"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-instagram fa-fw"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-facebook-f fa-fw"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-youtube fa-fw"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tt-orbit.png"
                alt="Tatooine Orbit" />

            <!-- Starfield Home -->
            <div id="starfieldhome" class="starfield"></div>

            <?php endif; ?>

        </footer>

        <?php wp_footer(); ?>

        </body>
        </div>

        </html>