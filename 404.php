<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<!-- 404 Page -->

<body class="tt-404" style="background-image: url('<?php the_field('404_background'); ?>')">

<!-- 404 Page Container -->
<section class="tt-404__cont">
    <h1 class="tt-404__header"><?php the_field('404_header'); ?></h1>
    <span><?php the_field('404_subheader'); ?></span>
    <a class="tt-btn tt-btn--alt" href="<?php the_field('404_button_url'); ?>"><?php the_field('404_button_text'); ?></a>
</section>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Font Awesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S"
    crossorigin="anonymous">

<!-- particles.js Library - https://github.com/VincentGarreau/particles.js -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/particles/particles.min.js"></script>

<!-- Menu JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/menu.min.js"></script>

</body>

</html>