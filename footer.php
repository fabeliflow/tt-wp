<!-- Footer -->
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

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Font Awesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S"
    crossorigin="anonymous">

<!-- Magnific Popup -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>

<!-- Slick Carousel -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/slick/slick.min.js"></script>

<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/particles/particles.min.js"></script>

<!-- Menu JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/menu.min.js"></script>

<!-- article JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/article.min.js"></script>

</body>

</html>