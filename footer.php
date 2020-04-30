        <!-- Footer -->

        <?php if (is_single() || is_tax() || is_category()) : ?>

            <footer>

                <!-- Footer Image -->
                <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tt-cityscape.png" alt="Tatooine Cityscape" />

                <div class="tt-footer__cont">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">

                                <!-- Footer Logo -->
                                <a href="<?php echo get_home_url(); ?>">
                                    <div class="tt-footer__logo"></div>
                                </a>

                                <?php if (have_rows('social_media', 'options')) : ?>

                                    <ul class="tt-social">

                                        <?php while (have_rows('social_media', 'options')) : the_row(); ?>

                                            <li>
                                                <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                                                    <i class="<?php the_sub_field('social_media_class'); ?> fa-fw"></i>
                                                </a>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                    <?php echo generate_kofi_button(); ?>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php elseif (is_front_page() || is_page('Series')) : ?>

                <footer>

                    <div class="container tt-footer__home">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                <div class="tt-header--center__wrapper">
                                    <div class="tt-header tt-header--center">
                                        <span>Stay Connected</span>
                                        <h2>Stay Connected</h2>
                                    </div>
                                </div>
                                <?php if (have_rows('social_media', 'options')) : ?>

                                    <ul class="tt-social">

                                        <?php while (have_rows('social_media', 'options')) : the_row(); ?>

                                            <li>
                                                <a class="tt-social__icon" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                                                    <i class="<?php the_sub_field('social_media_class'); ?> fa-fw"></i>
                                                </a>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                    <?php echo generate_kofi_button(); ?>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tt-orbit.png" alt="Tatooine Orbit" />

                    <!-- Starfield -->
                    <div id="starfieldhome" class="starfield"></div>

                <?php endif; ?>

                <div class="tt-footer__legal-links">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                            <span class="tt-copyright">© <?php echo date('Y');?> Tatooine Times. All rights reserved</span>    
                            <ul class="tt-menu__items">
                                    <?php echo wp_generate_menu('legal-links'); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                </footer>

                <?php wp_footer(); ?>

                </body>

                </div>

                </html>