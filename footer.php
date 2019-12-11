        <!-- Footer -->

        <footer class="tt-footer">

            <?php if (is_single() || is_category()) : ?>



            <?php $image = get_field('footer_image', 'footer'); ?>

            <!-- Footer Image -->
            <img class="tt-footer__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <div class="tt-footer__cont"
                style="background-color:<?php the_field('footer_background_color', 'footer'); ?>;">
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

            <!-- Starfield Home -->
            <div id="starfieldhome" class="starfield"></div>

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
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('menu_social_url'); ?>"
                                    target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <img class="tt-footer__img" src="http://tatooinetimes.local/wp-content/uploads/2018/07/orbit-1.png"
                alt="Tatooine Orbit" />

            <?php endif; ?>

        </footer>

        <?php wp_footer(); ?>

        </body>

        </html>