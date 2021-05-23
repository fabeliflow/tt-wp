        <footer class="tt-footer" style="background-image: url('<?php echo the_field('footer_background', 'options'); ?>'); background-position: <?php echo the_field('footer_background_position', 'options'); ?>">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-6">
                        <a class="tt-footer__logo" href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tt-logo.png" alt="Tatooine Times Logo" width="1000" height="469">
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

                        <?php endif; ?>
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
        </footer>

        <?php if (is_front_page() || is_page('Series')) : ?>

            <div id="starfieldhome" class="starfield"></div>

        <?php endif; ?>

        <?php wp_footer(); ?>

        </div>

        </div>

        </body>

        </html>