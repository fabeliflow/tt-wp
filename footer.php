            <?php if (is_page('Series') || is_single() || is_tax() || is_category()) : ?>

                <footer>

                    <img class="tt-footer__img" src="<?php echo get_template_directory_uri(); ?>/img/tt-cityscape.png" alt="Tatooine Cityscape">

                    <div class="tt-footer__cont">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-auto">

                                    <a href="<?php echo get_home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/tt-new-logo-alt.svg" alt="Tatooine Times Logo">
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

                <?php elseif (is_front_page()) : ?>

                    <footer>

                        <div class="container tt-footer__home">
                            <div class="row justify-content-center">
                                <div class="col-auto">
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

                        <img class="tt-footer__img tt-footer-orbit" src="<?php echo get_template_directory_uri(); ?>/img/tt-orbit.png" alt="Tatooine Orbit">

                        <div id="starfieldhome" class="starfield"></div>

                    <?php else : ?>

                        <footer>

                        <?php endif; ?>

                        <div class="tt-footer__legal-links">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <div class="tt-copyright">
                                            <span>© <?php echo date('Y'); ?> Tatooine Times. All rights reserved</span>
                                            <span>Designed and developed by Fabio Fiori</span>
                                            <span>Artwork by <a class="tt-link--focused" href="https://tegnemaskin.artstation.com/" target="_blank">Ronnie Jensen</a></span>
                                        </div>
                                        <ul class="tt-menu__items">
                                            <?php echo wp_generate_menu('legal-links'); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </footer>

                        <?php wp_footer(); ?>

                        </div>

                        </div>

                        </body>

                        </html>