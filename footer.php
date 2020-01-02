        <!-- Footer -->

        <?php if (is_single() || is_category()) : ?>

        <footer>

            <?php $image = get_field('footer_image', 'footer'); ?>

            <!-- Footer Image -->
            <img class="tt-footer__img"
                src="<?php echo get_template_directory_uri(); ?>/img/tt-cityscape.png"
                alt="Tatooine Cityscape" />

            <div class="tt-footer__cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">

                            <!-- Footer Logo -->
                            <a href="<?php echo get_home_url(); ?>">
                                <div class="tt-footer__logo"></div>
                            </a>

                            <?php if( have_rows('social_media', 'header') ): ?>

                            <ul class="tt-social">

                                <?php while ( have_rows('social_media', 'header') ) : the_row(); ?>

                                <li>
                                    <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?> fa-fw"
                                        target="_blank">
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

        </footer>

        <?php elseif (is_front_page() || is_page( 'The Team' )) : ?>

        <footer>

            <div class="container tt-footer__home">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                        <div class="tt-header tt-header--center">
                            <span>Follow Us</span>
                            <h2>Follow Us</h2>
                        </div>
                        <?php if( have_rows('social_media', 'header') ): ?>

                        <ul class="tt-social">

                            <?php while ( have_rows('social_media', 'header') ) : the_row(); ?>

                            <li>
                                <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?> fa-fw"
                                    target="_blank">
                                    <i class="<?php the_sub_field('social_media_class'); ?>"></i>
                                </a>
                            </li>

                            <?php endwhile; ?>

                        </ul>

                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tt-orbit.png"
                alt="Tatooine Orbit" />

            <!-- Starfield -->
            <div id="starfieldhome" class="starfield"></div>

        </footer>

        <?php endif; ?>

        <?php wp_footer(); ?>

        </body>

        </div>

        </html>