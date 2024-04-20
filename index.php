<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <?php if ( has_custom_logo() ) {
            the_custom_logo();
        } ?>
    </div>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
</header>
<main>
<div id="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
</main>
<footer>
    <div>
        <?php echo get_option('footer_text', 'Copyright © ScrapUK ' . date('Y')); ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
