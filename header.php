<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
        </div>
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Heratech Logo">
            <a class='title' href="<?php echo site_url(); ?>">Heratech</a>
        </div>
        <nav>
        <a href="<?php echo site_url('/about-us'); ?>">About</a>
        <a href="<?php echo site_url('/services'); ?>">Services</a>
        <a href="<?php echo site_url('/contact-us'); ?>">Contact</a>
        </nav>
    </header>
    <?php wp_footer(); ?>
</body>
</html>